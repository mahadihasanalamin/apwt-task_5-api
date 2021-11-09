<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\ProductDetails;

class ProductsController extends Controller
{

    public function add(Request $request)
    {
        $this->validate(
            $request,
            [

                'name'=>'required|min:2|max:30|regex:/^[A-Za-z)\s\0-9]+$/',
                'image'=>'required|mimes:png,jpg|max:2048',
                'category'=>'required|not_in:choose an option',
                'brand'=>'required|max:30|regex:/^[A-Za-z)\s\0-9]+$/',
                'model'=>'required|max:30|regex:/^[A-Za-z)\s\0-9]+$/',
                'weight'=>'required',
                'price'=>'required|regex:/^[(0-9).]+$/',
                'stock'=>'required|regex:/^[(0-9)]+$/',
            ],
        );

        if($request->hasFile('image'))
        {
            $name = time()."_".$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('uploads',$name,'public');
        }
        $latestProduct = ProductDetails::OrderBy('id','DESC')->first();
        $id = $latestProduct->p_id + 1;

        $productDetails = new ProductDetails;
        $productDetails->p_id = $id;
        $productDetails->name = $request->name;
        $productDetails->image = 'storage/uploads/'.$name;
        $productDetails->category = $request->category;
        $productDetails->brand = $request->brand;
        $productDetails->model = $request->model;
        $productDetails->weight = $request->weight;
        $productDetails->price = $request->price;
        $productDetails->stock = $request->stock;
        $productDetails->save();

        return 'Successful';
    }


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    public function list(Request $request)
    {
        $productDetails = ProductDetails::all();
        return $productDetails;
    }
}
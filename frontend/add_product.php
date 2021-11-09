<html>
    <title>Add Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <body>
<form enctype= "multipart/form-data" action="http://127.0.0.1:8000/api/products/add" name= 'product' method='POST'>
        <h1>Add Product</h1>
        
        <div class='col-md-2 form-group'>
            <span>Name</span>
            <input type='text' name='name' class='form-control'>
        </div>

        <div class='col-md-2 form-group'>
            <span>Image</span>
            <input type="file" accept="image, image/jpeg, image/png" name="image" class="form-control">
        </div>

        <div class='col-md-2 form-group'>
            <span>Category</span>
            <select name='category' class='form-control'>
                <option value='choose an option' hidden>choose an option</option>
                <option value = 'facewash'>facewash</option>
                <option value = 'soap'>soap</option>
                <option value = 'shampoo'>shampoo</option>
            </select>
        </div>

        <div class='col-md-2 form-group'>
            <span>Brand</span>
            <input type='text' name='brand' class='form-control'>
        </div>

        <div class='col-md-2 form-group'>
            <span>Model</span>
            <input type='text' name='model' class='form-control'>
        </div>

        <div class='col-md-2 form-group'>
            <span>Weight</span>
            <input type='text' name='weight' class='form-control'>
        </div>

        <div class='col-md-2 form-group'>
            <span>Price</span>
            <input type='text' name='price' class='form-control'>
        </div>
        <div class='col-md-2 form-group'>
            <span>Stock</span>
            <input type='text' name='stock' class='form-control'>
        </div>

        <input type='submit' name='submit' value='Add'onclick = 'load()' class='btn btn-success'>
    </form>
    </body>
    </html>
<html>
    <title>Products</title>
    <body>
        <input type='button' onclick = 'load()' value='Product List'>
    <table class='table table-bordered' id='ProductList'>
        </table>
   
<script>
    function load()
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            if(this.status == 200)
            {
                var json = this.responseText;
                var js_obj = JSON.parse(json);
                var str ="";
                for (var i=0; i<js_obj.length; i++){
                    str += 'Product '+i+':<br>'+'ID: '+js_obj[i].p_id+'<br>'+'Name: '+js_obj[i].name+'<br>'
                    +'Image: <img src=http://localhost:8000/'+js_obj[i].image+' width:50px height:60px >'+'<br>'+'Category: '+js_obj[i].category+'<br>'+
                    'Model: '+js_obj[i].model+'<br>'+'Brand: '+js_obj[i].brand+'<br>'+'Stock: '+js_obj[i].stock+'<br>'+
                    'Weight: '+js_obj[i].weight+'<br>'+'Price: '+js_obj[i].price+'<br><br>';
                }
                document.getElementById('ProductList').innerHTML =str;
            }
        }
        xhttp.open('get','http://127.0.0.1:8000/api/products',true);
        xhttp.send();
    }
</script>
<body>      
</html>
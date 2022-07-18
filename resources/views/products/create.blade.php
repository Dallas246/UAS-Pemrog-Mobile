<h1>Create Product</h1>
<form action="/products"method = "post">
    @csrf 
    Name : <input type="text" name="name"><br>
    NIM  : <input type="number" name="nim"><br>
    Class: <input type="number" name="class"><br>
    Image URL: <input type="text" name="image_url"><br>

    <input type="submit" value="save">
</form>
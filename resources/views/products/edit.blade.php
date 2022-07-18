<h1>Edit Product</h1>
<form action="/products/{{product->id}}" method = "post">
    @method('PUT')
    @csrf 
    Name : <input type="text" name="name" value="{{$product->name}}"><br>
    NIM  : <input type="number" name="nim" value="{{$product->NIM}}"><br>
    Class: <input type="number" name="class" value="{{$product->Class}}"><br>
    Image URL: <input type="text" name="image_url" value="{{$product->Image_url}}"><br>

    <input type="submit" value="save">
</form>
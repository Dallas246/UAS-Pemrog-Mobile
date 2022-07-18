<h1>Data Mahasiswa</h1>
<h3>{{$subjudul}}</h3>
<h4>{{$contoh}}</h4>

<table>
    <thead>
        <tr>
            <th>name</th>
            <th>nim</th>
            <th>semester</th>
        </tr>
    </thead>
</tbody>
    @foreach($products as $product)

   
        <tr>
            <td>{{$products->name}}</td>
            <td>{{$product->nim}}</td>
            <td>{{$product->class}}</td>
            <td>
                <a href="/products/{{$product->id}}/edit">Edit</a>
                <form action="/products/{{$product->id}}" method="POST">
                    
                </form>
                    @method('DELETE')
                    <input type="submit" value="Delete">
        </tr>

            @endforeach 
    </tbody>

    <a href="/products/create">Create</a>
</table>
    
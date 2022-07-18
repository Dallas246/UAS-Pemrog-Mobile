<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\product;

class productcontroller extends Controller
{
    public function index() {
        $products = product::all();
        dd($products);
        
    return view('products.index', compact(['products']));
}
public function create()
{
    return view('products.create');
}
public function store(request $request)
{
    product ::create($request->all());
    return redirect('/products');
}
public function edit($id)
{
    $product = product::find($id);
    return view('products.edit',compact(['product']));
}
public function update(request $request,$id)

{
    $product = produc::find($id);
    $product->update($request->all());
    return redirect('/products');
}
public function destroy($id)
{
    $product = product::find($id);
    $product->delete();
    return redirect('products');
}
}

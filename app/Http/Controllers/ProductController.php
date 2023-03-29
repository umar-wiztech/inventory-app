<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('product.index', compact('products'));

    }

    public function edit(Request $request, $id)
    {
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id){
        $data = $request->except(['_token']);
        $product = Product::where('id', $id)->update($data);
        return redirect()->route('product')->with('success','Product Has Been updated successfully');
    }

    public function delete(Request $request, $id){
        $product = Product::where('id', $id)->delete();
        return redirect()->route('product')->with('success','Product Has Been delete successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.products2', [
            'heading' => 'Product Catalog',
            'products' => Product::latest()->filter(request(['search']))->simplePaginate(5)
        ]);
    }

    public function show(Product $product){
        return view('products.product',[
            'product' => $product
        ]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'unit' =>'required',
            'unitPrice' =>'required|decimal:0,2',
            'category' =>'required',
            'name'=>'required|unique:products'
        ]);

        if($request->hasFile('image_url')){
            $formFields['image_url'] =  $request->file('image_url')->store('images','public');
        }

        //set user_id / creator of product
        $formFields['user_id'] = auth()->id();

       Product::create($formFields);

       return redirect('/')->with('success','New product saved successfully!');

    }

    public function edit(Product $product){
        return view('products.edit', ['product'=>$product]); 
    }

    public function update(Product $product, Request $request){
        $formFields = $request->validate([
            'unit' =>'required',
            'unitPrice' =>'required|decimal:0,2',
            'category' =>'required',
            'name'=>'required'
        ]);

       $product->update($formFields);

       return redirect('/')->with('success','Product updated successfully!');
    }

    public function destroy(Product $product){
        $product->delete();

        return redirect('/')->with('success', 'Product deleted successfully!');
    }

    public function manage(){
        return view("products.products", [
            'products' => auth()->user()->products()->paginate(5)
        ]);
    }
}

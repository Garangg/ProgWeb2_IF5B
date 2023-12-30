<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("products.index", ["products" => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        Product::create($request->all());
        return redirect()->route("products.index")->with("success", "Product created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view("products.show", ["product" => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view("products.edit", ["product" => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->back()->with("success", "Product updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route("products.index")->with("success", "Product deleted successfully.");
    }

    public function trash()
    {
        $products = Product::onlyTrashed()->paginate(10);
        return view('products.trash', ['products' => $products]);
    }

    public function restore($product)
    {
        $product = Product::withTrashed()->find($product);
        $product->restore();
        return redirect()->route('products.index')
            ->withSuccess('Product restored successfully');
    }

    public function forceDelete($product)
    {
        $product = Product::withTrashed()->find($product);
        $product->forceDelete();
        return redirect()->route('products.index')
            ->withSuccess('Product permanently deleted successfully');
    }
}

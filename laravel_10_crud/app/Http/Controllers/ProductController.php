<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|string|max:50|unique:products,code',
            'name' => 'required|string|max:250',
            'quantity' => 'required|integer|min:1|max:10000',
            'price' => 'required',
            'description' => 'nullable|string',
            'image_path' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $data = $request->only(['code', 'name', 'quantity', 'price', 'description', 'image_path']);

        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $imageName = 'post_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image_product'), $imageName);
            $data['image_path'] = $imageName;
        }

        $product = Product::create($data);
        return redirect()->route('products.index')
            ->withSuccess('New product is added successfully.');
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

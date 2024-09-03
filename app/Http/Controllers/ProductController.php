<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$products = Product::all();
        //return view('products.index', ['products' =>  $products]);
        //return view('products.index', compact('products'));
        return view('products.index', ['products' =>  Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // dd($request->all());

        $path_image = '';
        if ($request->hasFile('image')) {
            $path_image = $request->file('image')->store('public/image');
        }

        $product = Product::create([
            "name" => $request->name,
            "quantity" => $request->quantity,
            "location" => $request->location,
            'image' => $path_image,
            'user_id' => auth()->user()->id
        ]);

        $product->categories()->attach($request->categories);

        return to_route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //dd($request->all(), $product);

        $path_image = $product->image;
        if ($request->hasFile('image')) {
            $path_image = $request->file('image')->store('public/image');
        }


        $product->update([
            "name" => $request->name,
            "quantity" => $request->quantity,
            "location" => $request->location,
            'image' => $path_image,
            //'user_id' => auth()->user()->id
        ]);

        return to_route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->categories()->detach();
        $product->delete();

        return to_route('product.index');
    }
}

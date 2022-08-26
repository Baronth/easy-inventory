<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        if(Str::contains($request->get('price'),',') || Str::contains($request->get('price'),'.'))
        {
            $price = str_replace(",", "", $request->get('price'));
            $price = str_replace(".", "", $price);
        } else {
            $price = $request->get('price') . '00';
        }

        if(Str::contains($request->get('public_price'),',') || Str::contains($request->get('public_price'),'.'))
        {
            $public_price = str_replace(",", "", $request->get('public_price'));
            $public_price = str_replace(".", "", $public_price);
        } else {
            $public_price = $request->get('public_price') . '00';
        }

        $product = new Product([
            'name' => $request->get('name'),
            'quantity' => $request->get('quantity'),
            'price' => $price,
            'public_price' => $public_price,
            'category_id' => $request->get('category'),
        ]);

        $product->save();

        return redirect()->route('products.index')->with('success-message','Prodotto "' . $request->get('name') . '" creato correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $categories = Category::all();
        return view('products.view', compact('product','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        $categories = Category::all();
        return view('products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {

        if(Str::contains($request->get('price'),',') || Str::contains($request->get('price'),'.'))
        {
            $price = str_replace(",", "", $request->get('price'));
            $price = str_replace(".", "", $price);
        } else {
            $price = $request->get('price') . '00';
        }

        if(Str::contains($request->get('public_price'),',') || Str::contains($request->get('public_price'),'.'))
        {
            $public_price = str_replace(",", "", $request->get('public_price'));
            $public_price = str_replace(".", "", $public_price);
        } else {
            $public_price = $request->get('public_price') . '00';
        }

        $product->name = $request->get('name');
        $product->quantity =$request->get('quantity');
        $product->price = $price;
        $product->public_price = $public_price;
        $product->category_id = $request->get('category');
        $product->update();

        return redirect()->route('products.index')->with('success-message', 'Prodotto modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success-message', 'Prodotto eliminato correttamente');
    }
}

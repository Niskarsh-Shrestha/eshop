<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('backend.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.product.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->photo = $request->photo;

        if($request->hasFile('photo')){
        $file = $request->photo;
        $newName = time() . $file->getClientOriginalName();
        $file->move('product-photo' ,$newName);
        $product->photo = "product-photo/$newName";
        }
    $product->price = $request->price;
    $product->discount_price = $request->discount_price;
    $product->selling_price = $request->price - ($request->discount_price * $request->price)/100;
    $product->category_id = $request->category_id;
    $product->save();
    return redirect('/product');
    
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $category = Category::all();
        return view('backend.product.edit', compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->photo = $request->photo;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->selling_price = $request->price - ($request->discount_price * $request->price)/100;
        $product->category_id = $request->category_id;

        if($request->hasFile('photo')){
        $file = $request->photo;
        $newName = time() . $file->getClientOriginalName();
        $file->move('product-photo',$newName);
        $product->photo = "product-photo/$newName";
        $product->update();
        }
    

    
    return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

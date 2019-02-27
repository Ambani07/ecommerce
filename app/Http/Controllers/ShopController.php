<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        if (request()->category) {

            $products = Product::with('categories')->whereHas('categories', function($query){
                $query->where('slug', request()->category);
            })->paginate(12);

            $categoryName = $categories->where('slug', request()->category)->first()->name;
        }else{
            
            $products = Product::where('featured', false)->inRandomOrder()->paginate(12);
            $categoryName = 'All Products';
        }

        return view('shop')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName
        ]);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();

        $related_products = Product::where('slug', $slug)->limit(4)->get();

        return view('product')->with([
            'product' => $product,
            'related_products' => $related_products
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

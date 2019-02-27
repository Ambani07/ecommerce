<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;


class LandingPageController extends Controller
{
    //
    public function index(){

        $categories = Category::all();

        if (request()->category) {

            $products = Product::with('categories')->whereHas('categories', function($query){
                $query->where('slug', request()->category);
            })->paginate(12);

            $categoryName = $categories->where('slug', request()->category)->first()->name;
        }else{
            
            $products = Product::where('featured', false)->inRandomOrder()->paginate(12);
            $categoryName = 'Featured Products';
        }

        return view('home')->with([
            'products' => $products,
            'categories' => $categories
        ]);
    }
}

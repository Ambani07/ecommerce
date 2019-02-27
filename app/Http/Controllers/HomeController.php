<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
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
            $categoryName = 'Featured Products';
        }

        return view('home')->with([
            'products' => $products,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $duplicated = Cart::search(function ($cartItem, $rowId) use ($request){
    //         return $cartItem->id === $request->id;
    //     });

        

    //     if($duplicated->isNotEmpty()){
    //         return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');
    //     }
    //     Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');

    //     return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart');
    // }

    public function contact(){
        return view('contact');
    }
}

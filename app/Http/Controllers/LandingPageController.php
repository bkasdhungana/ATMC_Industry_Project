<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('featured', true)->take(10)->inRandomOrder()->get();
        $ranProducts = Product::where('featured', false)->take(10)->inRandomOrder()->get();
        return view('landing-page')->with([
            'products'=> $products,
            'ranProducts' => $ranProducts
            ]);

   }
}

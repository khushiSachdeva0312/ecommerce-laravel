<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function home(Product $product){
        $pro=$product->take(10)->get();
        return view("index",compact('pro'));
    }
    public function shop(Product $product){
        $pro=$product->take(10)->get();
        return view("shop",compact('pro'));
    }
    public function why(){
        return view("why");
    }
    public function testimonial(){
        return view("testimonial");
    }
    public function contact(){
        return view("contact");
    }
}

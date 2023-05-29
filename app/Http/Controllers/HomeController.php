<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    public function Index(){
        $products =Product::latest()->take(6)->get();
        return view('user.home',compact('products'));
    }
    public function Menu(){
        
        $allproducts = Product::latest()->get();
        return view('user.menuall',compact('allproducts'));
    }
}

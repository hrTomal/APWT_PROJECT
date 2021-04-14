<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
     function index(){

    	return view('pages.index');
    }
    function products(){

    	$products = Product::orderBy('id','desc')->get();
    	return view('pages.product.index')->with('products', $products);
    }
}

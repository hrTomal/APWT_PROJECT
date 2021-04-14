<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UpcomingProducts;
use App\Http\Requests\UpcomingProductsRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function upcoming_products()

    {
    	return view('seller.pages.product.upcoming_products');
    }

    public function insert_upcoming_products(UpcomingProductsRequest $requ)
	
	{
		$product = new UpcomingProducts();

		if($requ->hasFile('myfile'))
        {
        $file = $requ->file('myfile');
        $filename =  time().".".$file->getClientOriginalExtension();
        $file->move('images/upcoming_products', $filename);
        

        $product->id  =  $requ->id;
        $product->name  =  $requ->name;
        $product->launch_date      =  $requ->launch_date;
        $product->images = $filename;

        session()->flash('success', 'Upcoming product has been inserted successfully');
        $product->save();

        return  redirect()->route('seller.pages.index');
        
	   }

    }

    public function search_product(Request $requ){

        $find =   $requ->search;

       // echo $find;

        $product = DB::table('products')
        ->select('title','name','brand_name','price','quantity')
        ->join('categories', 'categories.parent_id', '=', 'products.id')
        ->join('brands', 'brands.id', '=', 'products.id')
        ->where('categories.parent_id', $find)
        ->get();

       

       return view('seller.pages.product.search_product')->with('product',$product)->with('product',$product);
    }



}

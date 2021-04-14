<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Product;
use App\ProductImage;
use App\Category;
use App\Order;
use Image;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Http\Requests\CategoryRequest;
use Validator;

//verify homepage

class SellerController extends Controller
{
    public function index(Request $req){

        if($req->session()->has('name')){
            return view('seller.pages.index', compact('name'));
            } else{
               $req->session()->flash('msg','Invalid user log in first.....');
               echo "somthing wrong";
               
            }  


    }

    public function create_product()
    {
    	return view('seller.pages.product.create');
    }
    public function store_product(ProductRequest $requ)    
    {
    	$product = new Product;

    	$product->category_id = $requ->catagory_Id;
    	$product->brand_id = $requ->brand_id;
    	$product->title = $requ->title;
    	$product->description = $requ->description;
    	$product->slug = Str::slug($product->title);
    	$product->price = $requ->price;
    	$product->type = "Phone";
    	$product->status = 1;
    	$product->quantity = $requ->quantity;
    	$product->review = 5;
    	$product->offer_price = $requ->offer_price;
    	$product->sellerId = $requ->sellerId;

    	$product->save();



        if($requ->hasFile('myfile'))
        {
        $file = $requ->file('myfile');
        $filename =  time().".".$file->getClientOriginalExtension();
        $file->move('images/products', $filename);


            $product_image = new ProductImage;

            $product_image->product_id = $product->id;
            $product_image->image = $filename;

            $product_image->save();

            session()->flash('success','a new product has been added successfully!!');
            return redirect()->route('seller.product.view');
    }

    
    }

   public function products_view(){

        $products = Product::orderBy('id','asc')->get();
        return view('seller.pages.product.view')->with('products', $products);
    }

    public function products_edit($id){

        $products = Product::find($id);
        return view('seller.pages.product.edit')->with('products', $products);
    }


   public function products_update(ProductUpdateRequest $requ,$id){

        $product = Product::find($id);
        
        $product->category_id = $requ->catagory_Id;
        $product->brand_id = $requ->brand_id;
        $product->title = $requ->title;
        $product->description = $requ->description;
       // $product->slug = Str::slug($product->title);
        $product->price = $requ->price;
        $product->status = $requ->status;
        $product->quantity = $requ->quantity;
        $product->offer_price = $requ->offer_price;

        $product->save();


        return redirect()->route('seller.products.view');
    }

   public function products_delete($id, Request $requ){
        
        Product::destroy($id);

        session()->flash('success', 'Product has deleted successfully');
        return redirect()->route('seller.products.view');
        
        }

    public function products_quantity(){

        $quantity = Product::get('quantity');
        $total = 0;
        foreach($quantity as $value){
        $total = $total + $value['quantity'];
        }
        
        return view('seller.pages.product.total_products')->with('total',$total);
    }


    // Category functionality
        

    public function category_view()
    {
        $category = Category::orderBy('id','asc')->get();
        return view('seller.pages.category.category_view')->with('category', $category);
    }

    public function create_category(){
        
        return view('seller.pages.category.category_add');

    }

    public function store_category(CategoryRequest $requ){
        

        if($requ->hasFile('image'))
        {

        $category = new Category();

        $category->name = $requ->category_name;
        $category->description = $requ->description;
        $category->parent_id = $requ->parent_id;    
        $file = $requ->file('image');
        $filename =  time().".".$file->getClientOriginalExtension();
        $file->move('images/category', $filename);
        $category->image = $filename;

        $category->save();
        
        }

        session()->flash('success','a new catagory has been added successfully!!');

        return redirect()->route('seller.category.category_view');

    }

    public function edit_category($id)
    {
        $category = Category::find($id);
        return view('seller.pages.category.category_edit')->with('category', $category);
    }

    public function update_category(CategoryRequest $requ, $id)
    {
        $category = Category::find($id);

        $category->name = $requ->category_name;
        $category->description = $requ->description;
        $category->parent_id = $requ->parent_id;

        $category->save();
        session()->flash('success', 'category has updated successfully');
        return redirect()->route('seller.category.category_view');
    }

    public function delete_category($id)

    {
        Category::destroy($id);

        session()->flash('success', 'Category has deleted successfully');
        return redirect()->route('seller.category.category_view');
    }


    //Order Functionality..........................................



   public function order_view()
   {
    $order = Order::orderBy('id','asc')->get();
    
    return view('seller.pages.order.order_view')->with('order', $order);;
   }

    public function order_details($id)

    {
        $order = Order::find($id);

        return view('seller.pages.order.order_details')->with('order',$order);
    }

    public function order_delete($id)

    {
        Order::destroy($id);

        session()->flash('success', 'Order has deleted successfully');
        return redirect()->route('order.order_view');

    }

    public function total_order()

    {

        $total = Order::count();

        return view('seller.pages.order.total_order')->with('total',$total);
    }

    public function total_amount(){

        $total = Order::get('Amount');
        $sum = 0;
        
        foreach($total as $value){
        $sum = $sum + $value['Amount'];
        }
        return view('seller.pages.order.total_amount')->with('sum',$sum);
    }

}



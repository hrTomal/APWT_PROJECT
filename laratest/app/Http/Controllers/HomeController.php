<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    //
    public function index(Request $req){
       // echo "Welcome Home";
     
       //$name='Foyaz Ahmed';
      // $id = '1234';
    
    //value Pass demo

       //1.  return  view('home.index',['name'=>'Foyaz Ahmed']);
    /*  2.   return view('home.index')
                            ->with('name','Foyaz Ahmed')
                            ->with('id','1234');
    */
    /*  3.   return view('home.index')
                            ->withName('Foyaz Ahmed')
                            ->withId('1234');
    */   
    /* 4.    return view('home.index')
                            ->withName($name)
                            ->withId($id);
    */    
            if($req->session()->has('name')){
            return view('home.index', compact('name'));
            } else{
               $req->session()->flash('msg','Invalid user log in first.....');
               echo "somthing wrong";
               //return redirect('/login');
            }                            
    }

    public function create(){

        return  view('home.create');
    }

    public function store(Request $requ){
        //inset into dab or model
        $product = new Product();
        $product->id  =  $requ->productId;
        $product->ProductName  =  $requ->ProductName;
        $product->Price      =  $requ->price;
        $product->Type       =  $requ->productType;
        $product->Status     =  $requ->status;
        $product->Quantity   =  $requ->quantity;
        $product->Review     =  $requ->review;
        $product->Offer      =  $requ->offer;
        $product->SellerId   =  $requ->sId;

        $product->save();


        return  redirect('/home/userlist');
       // echo $requ->username;
    }

    public function edit($id){
        //inset into db or model
        //return  redirect('/home/userlist');
        $product = Product::find($id);

        return  view('home.edit')->with('product',$product);
    }

    public function update($id, Request $requ){
        //update into db or model
        $product =  Product::find($id);
        
        $product->ProductName  =  $requ->username;
       // $product->Password   =  $requ->password;
        $product->Price      =  $requ->price;
        $product->Type       =  $requ->productType;
        $product->Status     =  $requ->status;
        $product->Quantity   =  $requ->quantity;
        $product->Review     =  $requ->review;
        $product->Offer      =  $requ->offer;
        $product->SellerId   =  $requ->sId;

        $product->save();


    
         return  redirect('/home/userlist');
        //return  view('home.list')->with('userlist',$update);
         //return  view('home.edit')->with('id',$id);
    }

    public function delete($id, Request $requ){
        //delete from db or model
        $product = Product::find($id);
        //print_r($product);
       return  view('home.delete')->with('product',$product);
    }

    public function destroy($id, Request $requ){
        
        if(Product::destroy($id))
        {
            return redirect('/home/userlist');
        }else{
            return redirect('/home/delete'.$id);        
        }
    }

    public function show($id){
        $product = Product::find($id);

       // echo $id;
        //print_r($product);
        return view('home.details')->with('product',$product);
    }

    public function userlist(){
        // echo "Welcome Home";
       $product = Product::all();
      // $product = $this->getUserlist();
       return  view('home.list')->with('product',$product);
     }


}

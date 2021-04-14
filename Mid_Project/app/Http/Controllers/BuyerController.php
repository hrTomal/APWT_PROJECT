<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Person;
use App\Message;
use Carbon\Carbon;
class BuyerController extends Controller
{
    public function buyer_list(){

        $person = Person::orderBy('id','asc')->where('type','buyer')->get();
        // echo "fz";
        // print_r($person);

        return view('buyer.buyer_list')->with('person', $person);
    }

    public function buyer_message($id){
    	
    	$date = Carbon::now();
     

    	return view('buyer.message')->with('date',$date);
    }

    public function send_message(MessageRequest $requ,$id){

    	$message = new Message();

    	$message->id = $id;
    	$message->text = $requ->msg;
    	$message->date = $requ->date;

    	$message->save();

    	session()->flash('success','successfully sent message');

    	return redirect()->route('seller.pages.index');
    }
}

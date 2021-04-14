<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class NoticeController extends Controller
{
    public function index(){

       $notice = Notice::all();
  
       return  view('seller.pages.notice.index')->with('notice',$notice);
    }
}

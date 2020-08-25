<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class danhmuccontroller extends Controller
{
    public function danhmuc(){
    	$all = DB::table('sanpham')->limit(6)->get();
    	$link = '../public/img/';

    	return view('danhmuc',[
    		'all'  =>$all,
    		'link' => $link
    	]);
    }
}

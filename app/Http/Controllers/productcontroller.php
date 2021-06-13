<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productcontroller extends Controller
{
    //
    function index(){
        $data =  product::all();
        return view('product',['data'=> $data]);
    }
    function detail($id){
        $data1 =  product::find($id);
        return view('detail',['data1'=> $data1]);
    }
}

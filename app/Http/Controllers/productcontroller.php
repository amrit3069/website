<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Session;
use Illuminate\Support\Facades\DB;



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
    function search(Request $request){
        $data = product::where('name','like', '%'.$request->input('search').'%')->get();
        return view('search',['data'=> $data]);
    }

    function add_to_cart(Request $request){
        if($request->session()->has('user')){
            $cart = new cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    
    static function cartcount(){
        $user_id = Session::get('user')['id'];
        return cart::where('user_id',$user_id)->count();
    }
    function cartlist(){
        $user_id = Session::get('user')['id'];
        $product = DB::table('cart')
        ->join('product','cart.product_id','=','product.id')
        ->where('cart.user_id',$user_id)
        ->select('product.*','cart.id as cart_id')
        ->get();
        return view('cartlist',['productlist'=>$product]);

    }

    function removeitem($id){
        cart::destroy($id);
        return redirect('cartlist');

    }
    function order(){
        $user_id = Session::get('user')['id'];
        $order = DB::table('cart')
        ->join('product','cart.product_id','=','product.id')
        ->where('cart.user_id',$user_id)
        ->sum('product.price');
        return view('ordernow',['order'=>$order]);
    }
}

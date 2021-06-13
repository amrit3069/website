<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class usercontroller extends Controller
{
    //
    function login(Request $request){
        $user =  User::where(['email'=>$request->email])->first();
        if(!$user || !Hash::check($request->pswd,$user->password)){
            return "username or password is incorrect";
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/');
        }
    }
}

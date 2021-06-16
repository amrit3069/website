<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\productcontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});
Route::view('register','register');
Route::post('/login',[usercontroller::class,'login']);
Route::post('/register',[productcontroller::class,'register']);
Route::get('/',[productcontroller::class,'index']);
Route::get('detail/{id}',[productcontroller::class,'detail']);
Route::get('search',[productcontroller::class,'search']);
Route::post('add_to_cart',[productcontroller::class,'add_to_cart']);
Route::get('cartlist',[productcontroller::class,'cartlist']);
Route::get('removeitem/{id}',[productcontroller::class,'removeitem']);
Route::get('order',[productcontroller::class,'order']);
Route::post('placeorder',[productcontroller::class,'placeorder']);
Route::get('myorders',[productcontroller::class,'myorders']);









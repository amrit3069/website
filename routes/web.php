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
ROute::post('/login',[usercontroller::class,'login']);
ROute::get('/',[productcontroller::class,'index']);
ROute::get('detail/{id}',[productcontroller::class,'detail']);
ROute::get('search',[productcontroller::class,'search']);



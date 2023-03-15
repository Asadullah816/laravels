<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Usercontoller;
use App\http\Controller\Usercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get("user",[Usercontoller::class,"loadview"]);
// Route::post('/login',[Usercontoller::class,"getData"]);
// Route::view('inner','inner');
// Route::view("general","general");
// Route::view('noaccess',"noaccess");
// Route::group(['middleware'=>['protectedpage']], function(){
//     Route::view("login","login");
    
// });
<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Usercontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::post("login",[Usercontroller::class,"loadview"]);
// Route::get('login', function(){
//     return view('login');
// });
Route::view("login","login")->middleware("Protectedpage");
// Route::group(["middleware"=>["Protectedpage"]],function(){
//     Route::view("welcome", "welcome");
// });
    Route::view("welcome", "welcome");
<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\User;
use App\http\Controllers\ViewController;
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
// Route::view("about",'/about');
// Route::view("contact",'/contact');
// Route::view("practice",'practice');
// Route::get('user/{id}',[User::class,'show']);
// Route::view("user","user");
Route::get('users/{user}', [ViewController::class,'loadview']);
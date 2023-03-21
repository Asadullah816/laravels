<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\models\User;
// use Illuminate\Support\Facades\DB;
use DB;
class UserController extends Controller
{
    //
    // function index()
    // {
    //     return DB::select("select * from users"); 
  
    // }
    // function loginpage()
    // {
    //     echo "Your form is submitted";
    // }
    function loginpage(Request $req)
    {
        return $req->input();
    }
}

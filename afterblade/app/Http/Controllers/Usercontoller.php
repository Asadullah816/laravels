<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontoller extends Controller
{
    // function loadview()
    // {
    //     $data=["Name1","Name2","Name3","Name4","Name5","Name6","Name7","Name8"];
    //     return view("users",["users"=>$data]);
    //     // return view('users',["name"=>'sum']);
    // }
  function getData(Request $req)
    {
        return $req->input();
    }
}

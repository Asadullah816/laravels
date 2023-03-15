<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function loadview($name)
    {
        return view('users',['name'=>$name]);
    }
}

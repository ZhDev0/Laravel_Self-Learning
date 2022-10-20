<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(){
        $name = "Hello hicham";
        return view('index',compact("name"));
    }
}

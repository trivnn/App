<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $date=[
            "a"=>"xin chao",
            "b"=>"hello",
            "c"=>"vietnam",
        ];
        return view('test', $date);
      
    }
}

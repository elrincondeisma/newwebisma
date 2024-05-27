<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //
    public function index($name){
        return "ok dentro del controller $name";
    }

    public function rutaPost(Request $request){
        return "ok dentro del controller $request->name";
    }
}

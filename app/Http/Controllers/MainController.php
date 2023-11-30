<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function form(){
        return view('main');
    }

    public function meta_data(){
        return view('meta_data');
    }
}

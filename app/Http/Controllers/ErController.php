<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErController extends Controller
{
    function getError(){
        return view('frontend.404');
    }
    
}

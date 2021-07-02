<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


class ErController extends Controller
{
    function getError(){
        return view('frontend.404');
    }
    
}

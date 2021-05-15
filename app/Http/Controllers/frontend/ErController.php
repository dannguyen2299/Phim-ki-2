<?php

use Illuminate\Http\Request;
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;


class ErController extends Controller
{
    function getError(){
        return view('frontend.404');
    }
    
}

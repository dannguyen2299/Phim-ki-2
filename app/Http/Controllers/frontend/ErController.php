<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErController extends Controller
{
    function getError(){
        return view('frontend.404');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function getIndex(){
        return view('frontend.index');
    }
}

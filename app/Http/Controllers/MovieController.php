<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    function GetMovie(){
        return  view('frontend.movie');
    }
    function GetPage(){
        return  view('frontend.page');
    }

}

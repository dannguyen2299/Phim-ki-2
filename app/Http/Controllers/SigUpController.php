<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigUpController extends Controller
{
    function GetSigUp(){
        return view('frontend.sign-up');
    }
}

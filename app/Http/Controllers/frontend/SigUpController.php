<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SigUpController extends Controller
{
    function GetSigUp(){
        return view('frontend.sign-up');
    }
}

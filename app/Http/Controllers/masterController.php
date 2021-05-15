<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class masterController extends Controller
{
    function getCategory(){
        $all = DB::table('category')->get();
        return view('frontend.master.master')->with('all_category',$all);
    }
}

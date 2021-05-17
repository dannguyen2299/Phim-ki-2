<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class MovieController extends Controller
{
    function GetMovie(){
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();
        return  view('frontend.movie',$data);
    }
    function GetPage(){
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();
        return  view('frontend.page',$data);
    }

    
}

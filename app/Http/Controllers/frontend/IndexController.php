<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    function getIndex(){
        // $data['movie']=DB::table('movie')->get();
        $data['movie']=DB::select('select * from movie order by year ASC');
        $data['movie_up']=DB::select('select * from movie order by year DESC LIMIT 8');

        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();
        return view('frontend.index',$data);
    }
    
}

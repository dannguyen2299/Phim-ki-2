<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    function getIndex(){
        // $data['cou']=DB::select('select movie.movie_name , movie.view, movie.url_image , COUNT(episode.movie_id) as num
        // FROM movie 
        // Inner JOIN episode ON  movie.movie_id= episode.movie_id');

        $data['movie']=DB::select('select * from movie order by year ASC');
        $data['movie_up']=DB::select('select * from movie  order by year DESC LIMIT 8');
        $data['movie_v']=DB::select('select * from movie where nation_id=1');
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();
        return view('frontend.index',$data);
    }
    
}

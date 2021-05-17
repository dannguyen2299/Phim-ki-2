<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Redirect;


class MovieController extends Controller
{
    function GetMovie($movie_id,$episode_id,$server){
       
        $movies = DB::table('movie')->join('nation','nation.nation_id','=','movie.nation_id')->select('movie.*','nation.*','movie.status as movie_status','nation.status as nation_status')->get();
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();

        $data['movie_detail']=DB::table('movie')->join('nation','movie.nation_id','=','nation.nation_id')->where("movie_id",$movie_id)->first();

        $data['movie_page']=DB::table('episode')->join('movie','episode.movie_id','=','movie.movie_id')->where("episode_id",$episode_id)->first();

        $data['movie_page1']=DB::table('episode')->join('movie','episode.movie_id','=','movie.movie_id')->where("episode.movie_id",$movie_id)->get();

    //    $data['movie_page']=DB::table('episode')->join('movie','movie.movie_id','=','episode.movie_id')->get();
    // $movie_page=DB::select("SELECT * FROM episode inner join movie on movie.movie_id=episode.movie_id WHERE episode.movie_id=".$movie_id."" );
        

       

    $a=$data['movie_detail']->nation_id;
    $data['movie_nation']=DB::table('movie')->select('movie.*')->where('movie.nation_id',$a)->where('movie_id','<>',$movie_id)->get();

    $episode_nums = array();
    foreach($movies as &$movie){
        $episode_num = DB::table('movie')
        ->join('episode','episode.movie_id','=','movie.movie_id')
        ->where('movie.movie_id',$movie->movie_id)
        ->where('episode.status','1')->get();
        $episode_nums[$movie->movie_id] = count($episode_num);
    }
        // echo $movie_id;

        // $data['movie_page']=DB::table('episode')->where('episode.movie_id',$movie_id)->first();

        return  view('frontend.movie',$data)->with('episode_nums',$episode_nums)->with('server',$server);
    }

    function GetPage($movie_id){
        $movies = DB::table('movie')
        ->join('nation','nation.nation_id','=','movie.nation_id')->select('movie.*','nation.*','movie.status as movie_status','nation.status as nation_status')->get();
       //Navbar
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();

        $data['movie_detail']=DB::table('movie')->where("movie_id",$movie_id)->join('nation','movie.nation_id','=','nation.nation_id')->first();
        $a=$data['movie_detail']->nation_id;
        $data['movie_cat']=DB::table('category')->select('category_name')->join('category_detail','category_detail.category_id','=','category.category_id')->where('category_detail.movie_id',$movie_id)->distinct()->get();
        $data['movie_nation']=DB::table('movie')->select('movie.*')->where('movie.nation_id',$a)->where('movie_id','<>',$movie_id)->get();

        $episode_nums = array();
        foreach($movies as &$movie){
            $episode_num = DB::table('movie')
            ->join('episode','episode.movie_id','=','movie.movie_id')
            ->where('movie.movie_id',$movie->movie_id)
            ->where('episode.status','1')->get();
            $episode_nums[$movie->movie_id] = count($episode_num);
        }
        
       
        return  view('frontend.page',$data)->with('episode_nums',$episode_nums);
    }

    
}

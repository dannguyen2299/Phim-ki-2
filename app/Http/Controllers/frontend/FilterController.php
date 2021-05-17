<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    function GetFilter($category_id){
        $movies = DB::table('movie')
        ->join('nation','nation.nation_id','=','movie.nation_id')->select('movie.*','nation.*','movie.status as movie_status','nation.status as nation_status')->get();

        // $data['movie_cat']=DB::table('category')->select('category_name')->join('category_detail','category_detail.category_id','=','category.category_id')->where('category_detail.movie_id',$movie_id)->distinct()->get();
        
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();

        $episode_nums = array();
        foreach($movies as &$movie){
            $episode_num = DB::table('movie')
            ->join('episode','episode.movie_id','=','movie.movie_id')
            ->where('movie.movie_id',$movie->movie_id)
            ->where('episode.status','1')->get();
            $episode_nums[$movie->movie_id] = count($episode_num);
        }
        $data['category_nation']=DB::table('movie')->join('nation','movie.nation_id','=','nation.nation_id')->where('movie_id',$category_id)->get();
       
        $category_by_id=DB::select('select * from movie inner join category_detail on movie.movie_id = category_detail.movie_id where category_detail.category_id = '.$category_id.' group by movie.movie_id');

        return view('frontend.filter',$data)->with('episode_nums',$episode_nums)->with('category_by_id',$category_by_id);
    }

    function GetNation($nation_id){
        $movies = DB::table('movie')
        ->join('nation','nation.nation_id','=','movie.nation_id')->select('movie.*','nation.*','movie.status as movie_status','nation.status as nation_status')->get();

        // $data['movie_cat']=DB::table('category')->select('category_name')->join('category_detail','category_detail.category_id','=','category.category_id')->where('category_detail.movie_id',$movie_id)->distinct()->get();
        
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();

        $episode_nums = array();
        foreach($movies as &$movie){
            $episode_num = DB::table('movie')
            ->join('episode','episode.movie_id','=','movie.movie_id')
            ->where('movie.movie_id',$movie->movie_id)
            ->where('episode.status','1')->get();
            $episode_nums[$movie->movie_id] = count($episode_num);
        }
        $data['category_by_id']=DB::table('movie')->join('nation','movie.nation_id','=','nation.nation_id')->where('movie.nation_id',$nation_id)->get();
       

        return view('frontend.filter',$data)->with('episode_nums',$episode_nums);
    }
}
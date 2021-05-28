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



        $data['movie_page2']=DB::table('episode')->join('movie','episode.movie_id','=','movie.movie_id')->where("episode.movie_id",$movie_id)->get();


        //Lấy thắng đầu tiên của số tập ()
        $data['movie_page3']=DB::table('episode')->join('movie','episode.movie_id','=','movie.movie_id')->where("episode.movie_id",$movie_id)->where("episode.episode_id",$episode_id)->first();
       
        // Sô tổng số tập theo movie id
        $data['movie_page4']=DB::table('episode')->join('movie','episode.movie_id','=','movie.movie_id')->where("episode.movie_id",$movie_id)->get();

     

       

    $a=$data['movie_detail']->nation_id;
    $data['movie_nation']=DB::table('movie')->select('movie.*')->where('movie.nation_id',$a)->where('movie_id','<>',$movie_id)->get();

    $episode_nums = array();
    foreach($movies as &$movie){
        $episode_num = DB::table('movie')
        ->join('episode','episode.movie_id','=','movie.movie_id')
        ->where('movie.movie_id',$movie->movie_id)
        ->where('episode.status','1')->get();
        $episode_nums[$movie->movie_id] = count($episode_num);

        
        //* Tổng số view
        $views = 0;
        foreach($episode_num as &$value){
            $views = $views + $value->view;
        }
        $view_nums[$movie->movie_id] = $views;

    }

         // Truy vấn quảng cáo
         $data['ads_banner1']=DB::table('advertisement')->where('ad_location',1)->where('status',1)->orderBy('ad_id','desc')->first();

         $data['ads_banner2']=DB::table('advertisement')->where('ad_location',2)->where('status',1)->orderBy('ad_id','desc')->first();
 
         $data['ads_banner3']=DB::table('advertisement')->where('ad_location',3)->where('status',1)->orderBy('ad_id','desc')->first();
 
         $data['ads_banner4']=DB::table('advertisement')->where('ad_location',4)->where('status',1)->orderBy('ad_id','desc')->first();
         // End

        // $data['movie_page']=DB::table('episode')->where('episode.movie_id',$movie_id)->first();

        return  view('frontend.movie',$data)->with('episode_nums',$episode_nums)->with('view_nums',$view_nums)->with('server',$server)->with('episode_id',$episode_id);
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
        $rates = array();
        $user_rates = array();

        foreach($movies as &$movie){
            $episode_num = DB::table('movie')
            ->join('episode','episode.movie_id','=','movie.movie_id')
            ->where('movie.movie_id',$movie->movie_id)
            ->where('episode.status','1')->get();
            $episode_nums[$movie->movie_id] = count($episode_num);
        
            //* Tổng số view
            $views = 0;
            foreach($episode_num as &$value){
                $views = $views + $value->view;
            }
            $view_nums[$movie->movie_id] = $views;
            $data['movie_page3']=DB::table('episode')->join('movie','episode.movie_id','=','movie.movie_id')->where("episode.movie_id",$movie_id)->first();
            // $data['movie_page3']=DB::table('episode')->join('movie','episode.movie_id','=','movie.movie_id')->where("episode.movie_id",$movie_id)->where("episode.episode_id",$episode_id)->first();

            
            $rate = DB::table('movie_detail')->where('movie_detail.movie_id',$movie->movie_id)->avg('rate');
            $rates[$movie->movie_id] = round($rate);


            $user_rate = DB::table('movie_detail')->where('movie_detail.movie_id',$movie->movie_id)->count('user_id');
            $user_rates[$movie->movie_id]= $user_rate;

        }
         // Truy vấn quảng cáo
         $data['ads_banner1']=DB::table('advertisement')->where('ad_location',1)->where('status',1)->orderBy('ad_id','desc')->first();

         $data['ads_banner2']=DB::table('advertisement')->where('ad_location',2)->where('status',1)->orderBy('ad_id','desc')->first();
 
         $data['ads_banner3']=DB::table('advertisement')->where('ad_location',3)->where('status',1)->orderBy('ad_id','desc')->first();
 
         $data['ads_banner4']=DB::table('advertisement')->where('ad_location',4)->where('status',1)->orderBy('ad_id','desc')->first();
         // End
       
        return  view('frontend.page',$data)->with('episode_nums',$episode_nums)->with('view_nums',$view_nums)->with('rates',$rates)->with('user_rates',$user_rates);
    }

    
}
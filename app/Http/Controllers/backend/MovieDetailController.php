<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class MovieDetailController extends Controller
{
    public function movie_detail(){
        $movies = DB::table('movie')
        ->join('nation','nation.nation_id','=','movie.nation_id')->select('movie.*','nation.*','movie.status as movie_status','nation.status as nation_status')->get();

        foreach($movies as &$movie){
            
            //* Tổng số tập
            $episodes = DB::table('movie')
            ->join('episode','episode.movie_id','=','movie.movie_id')
            ->where('movie.movie_id',$movie->movie_id)
            ->where('episode.status','1')->get();
            $episode_nums[$movie->movie_id] = count($episodes);

            //* Tổng số view
            $views = 0;
            foreach($episodes as &$value){
                $views = $views + $value->view;
            }
            $view_nums[$movie->movie_id] = $views;
        }

        //* Tính tổng số follow và trung binh rate
        $rate = array();
        $follow = array();
        foreach($movies as &$movie){
            $movie_detail = DB::table('movie_detail')->where('movie_id',$movie->movie_id)->get();
            $sum_follow = 0;
            $sum_rate = 0;
            foreach($movie_detail as &$value){
                $sum_follow = $sum_follow + $value->follow;
                $sum_rate = $sum_rate + $value->rate;
            }
            if (count($movie_detail)!=0){
                $rate_value = $sum_rate/count($movie_detail);
            }
            $rate[$movie->movie_id] = ROUND($rate_value,2);
            $follow[$movie->movie_id] = $sum_follow;
        }

        return view('admin.movie_detail.list')->with('movies',$movies)
        ->with('rate',$rate)->with('follow',$follow)
        ->with('view_nums',$view_nums)->with('episode_nums',$episode_nums);

    }
}

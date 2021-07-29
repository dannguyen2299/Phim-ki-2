<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    function getIndex(){
        // Get movie by id
        $movies = DB::table('movie')->select('movie.movie_id')->get();
        // Get movie by content page
        $data['movie']=$this->getFilmNominate();
        $data['movie_up']=$this->getFilmByEpisodeNew();
        $data['movie_v']=$this->getFilmByNation(1);

        // Get detail film
        $detail = new DetailFilmController();
        $episode_nums = $detail->getEpisodeByMovie($movies);
        $view_nums = $detail->getViewByMovie($movies);
        $rate_obj = new RateController();       
        $rates = $rate_obj->getRateByMovie($movies);

        // Get data navbar
        $nav = new NavController();
        $data['nation'] = $nav->getNation();
        $data['category_l'] = $nav->getCategory();

        // Get Data ads
        $ads = new AdsController();
        $data['ads_banner1'] = $ads->getAdsByLocation(1);
        $data['ads_banner2']= $ads->getAdsByLocation(2);

        //Top View
        $day_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('day_views')->limit(20)->get();
        $month_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('month_views')->limit(20)->get();
        $year_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('year_views')->limit(20)->get();
        echo "<script>console.log($day_views)</script>";
        $data['day_views'] = $day_views;
        $data['month_views']= $month_views;
        $data['year_views']= $year_views;


        return view('frontend.index',$data)->with('movies',$movies)
        ->with('episode_nums',$episode_nums)
        ->with('view_nums',$view_nums)->with('rates',$rates);
    }
    public function getFilmByNation($id){
        return $data['movie_v']=DB::select('select * from movie where nation_id = '.$id);
    }
    public function getFilmByEpisodeNew(){        
        return $data['movie_up']=DB::select('select * from movie  order by year DESC LIMIT 8');
    }
    public function getFilmNominate(){
        return $data['movie']=DB::select('select * from movie order by year ASC');
    }
}

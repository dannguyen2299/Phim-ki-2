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
        $data['movie']=$this->getNominate();
        $data['movie_up']=$this->getFilmByEpisodeNew();
        $data['movie_v']=$this->getFilmByNation(1);

        // Get detail film
        $episode_nums = $this->getEpisodeByMovie($movies);
        $view_nums = $this->getViewByMovie($movies);
        $rates = $this->getRateByMovie($movies);

        // Get data navbar
        $nav = new NavController();
        $data['nation'] = $nav->getNation();
        $data['category_l'] = $nav->getCategory();

      // Get Data ads
        $ads = new AdsController();
        $data['ads_banner1'] = $ads->getAdsByLocation(1);
        $data['ads_banner2']= $ads->getAdsByLocation(2);

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
    public function getNominate(){
        return $data['movie']=DB::select('select * from movie order by year ASC');
    }
    public function getRateByMovie($movies){
        $rates = array();
        foreach($movies as &$movie){
            $rate = DB::table('movie_detail')->where('movie_id',$movie->movie_id)->avg('rate');
            $rates[$movie->movie_id] = round($rate,1);
        }
        return $rates;
    }
    public function getViewByMovie($movies){
        $view_nums = array();
        foreach($movies as &$movie){
            $episodes = DB::table('movie')
            ->join('episode','episode.movie_id','=','movie.movie_id')
            ->where('movie.movie_id',$movie->movie_id)
            ->where('episode.status','1')->get();
            $views = 0;
            foreach($episodes as &$value){
                $views = $views + $value->view;
            }
            $view_nums[$movie->movie_id] = $views;
        }
        return $view_nums;
    }
    public function getEpisodeByMovie($movies){
        $episode_nums = array();
        foreach($movies as &$movie){
            $episodes = DB::table('movie')
            ->join('episode','episode.movie_id','=','movie.movie_id')
            ->where('movie.movie_id',$movie->movie_id)
            ->where('episode.status','1')->get();
            $episode_nums[$movie->movie_id] = count($episodes);
        }
        return $episode_nums;
    }
    
}

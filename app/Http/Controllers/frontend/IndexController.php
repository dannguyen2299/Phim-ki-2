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

        $data['week_views'] = $this->get_movie_order_by('week_views');
        $data['month_views']= $this->get_movie_order_by('month_views');
        $data['year_views']= $this->get_movie_order_by('year_views');      
        

        return view('frontend.index',$data)->with('movies',$movies)
        ->with('episode_nums',$episode_nums)
        ->with('view_nums',$view_nums)->with('rates',$rates);
    }


    public function getFilmByNation($id){
        return $data['movie_v']=DB::select('select * from movie where nation_id = '.$id);
    }
    public function getFilmByEpisodeNew(){        
        return $data['movie_up']=DB::select('SELECT movie.movie_id,movie.total_eps, movie.movie_name, movie.url_image FROM movie INNER JOIN episode ON episode.movie_id = movie.movie_id GROUP BY(movie.movie_id) ORDER BY(episode.episode_id) DESC LIMIT 0,8');
    }
    public function getFilmNominate(){
        return $data['movie']=DB::select('select * from movie order by year ASC');
    }

    private function get_movie_order_by($option){
        return DB::select("SELECT movie.movie_id, movie.movie_name, movie.url_image, SUM(episode.week_view) as week_views, SUM(episode.month_view) as month_views, SUM(episode.year_view) as year_views, a.rating as rate from movie JOIN episode on movie.movie_id = episode.movie_id LEFT JOIN (select movie_id, AVG(rate) as rating from movie_detail GROUP BY movie_id) as a on movie.movie_id = a.movie_id WHERE movie.status=1 and episode.status=1 GROUP BY movie.movie_id, movie.movie_name ORDER BY $option");
        
    }
}

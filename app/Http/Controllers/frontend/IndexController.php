<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    function getIndex(){
        $user_id=Session::get('user_id');
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

        //phim da luu
        if ($user_id){$data['saved_movie'] = $this->get_saved_movie($user_id);}  
        
        //Phim bo hot
        $sql1 = "SELECT movie.*, SUM(episode.view) as views FROM movie JOIN category_detail on category_detail.movie_id = movie.movie_id JOIN category on category.category_id = category_detail.category_id join episode on movie.movie_id = episode.movie_id WHERE category.category_id = 1 AND movie.status = 1 GROUP BY movie.movie_id ORDER BY views DESC LIMIT 0,8";
        $data['movie_hot1'] = DB::select($sql1);    
        
        //Phim le hot
        $sql2 = "SELECT movie.*, SUM(episode.view) as views FROM movie JOIN category_detail on category_detail.movie_id = movie.movie_id JOIN category on category.category_id = category_detail.category_id left join episode on movie.movie_id = episode.movie_id WHERE category.category_id = 2 AND movie.status = 1 GROUP BY movie.movie_id ORDER BY views DESC LIMIT 0,8";
        $data['movie_hot2'] = DB::select($sql2);

        return view('frontend.index',$data)
        ->with('movies',$movies)
        ->with('episode_nums',$episode_nums)
        ->with('view_nums',$view_nums)->with('rates',$rates);
    }


    public function getFilmByNation($id){
        return $data['movie_v']=DB::select('select * from movie where nation_id = '.$id .' and status = 1');
    }
    public function getFilmByEpisodeNew(){        
        return $data['movie_up']=DB::select('SELECT  movie.movie_id,movie.total_eps, movie.movie_name, movie.url_image FROM movie INNER JOIN episode ON episode.movie_id = movie.movie_id GROUP BY(movie.movie_id) ORDER BY max(episode.episode_id) desc LIMIT 0,8');
    }
    public function getFilmNominate(){
        return $data['movie']=DB::select('select * from movie order by year ASC');
    }

    private function get_movie_order_by($option){
        return DB::select("SELECT movie.movie_id, movie.movie_name, movie.url_image, SUM(episode.week_view) as week_views, SUM(episode.month_view) as month_views, SUM(episode.year_view) as year_views, a.rating as rate from movie JOIN episode on movie.movie_id = episode.movie_id LEFT JOIN (select movie_id, AVG(rate) as rating from movie_detail GROUP BY movie_id) as a on movie.movie_id = a.movie_id WHERE movie.status=1 and episode.status=1 GROUP BY movie.movie_id, movie.movie_name ORDER BY $option DESC");
    }
  
    private function get_saved_movie($user_id){
        return DB::select("SELECT movie.movie_id, movie.movie_name, movie.url_image, SUM(view) as view, a.rating as rate from movie LEFT JOIN episode on movie.movie_id = episode.movie_id LEFT JOIN (select movie_id, AVG(rate) as rating from movie_detail GROUP BY movie_id) as a on movie.movie_id = a.movie_id LEFT JOIN movie_detail on movie.movie_id = movie_detail.movie_id WHERE movie_detail.user_id = $user_id AND movie_detail.follow = 1 AND movie.status=1 GROUP BY movie.movie_id, movie.movie_name ORDER BY movie_detail.idd DESC");
    }
}

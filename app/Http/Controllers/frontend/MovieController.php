<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Redirect;


class MovieController extends Controller
{
    function GetMovie($movie_id, $episode_id, $server)
    {

        $movies = DB::table('movie')->join('nation', 'nation.nation_id', '=', 'movie.nation_id')->select('movie.*', 'nation.*', 'movie.status as movie_status', 'nation.status as nation_status')->get();
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();

        $data['movie_detail'] = DB::table('movie')->join('nation', 'movie.nation_id', '=', 'nation.nation_id')->where("movie_id", $movie_id)->first();



        $data['movie_page2'] = DB::table('episode')->join('movie', 'episode.movie_id', '=', 'movie.movie_id')->where("episode.movie_id", $movie_id)->get();


        //Lấy thắng đầu tiên của số tập ()
        $data['movie_page3'] = DB::table('episode')->join('movie', 'episode.movie_id', '=', 'movie.movie_id')->where("episode.movie_id", $movie_id)->where("episode.episode_id", $episode_id)->first();

        // Sô tổng số tập theo movie id
        $data['movie_page4'] = DB::table('episode')->join('movie', 'episode.movie_id', '=', 'movie.movie_id')->where("episode.movie_id", $movie_id)->get();





        $a = $data['movie_detail']->nation_id;
        $data['movie_nation'] = DB::table('movie')->select('movie.*')->where('movie.nation_id', $a)->where('movie_id', '<>', $movie_id)->get();

        $episode_nums = array();
        foreach ($movies as &$movie) {
            $episode_num = DB::table('movie')
                ->join('episode', 'episode.movie_id', '=', 'movie.movie_id')
                ->where('movie.movie_id', $movie->movie_id)
                ->where('episode.status', '1')->get();
            $episode_nums[$movie->movie_id] = count($episode_num);
            $views = 0;
            foreach ($episode_num as &$value) {
                $views = $views + $value->view;
            }
            $view_nums[$movie->movie_id] = $views;
        }

        // Get Data ads
        $ads = new AdsController();
        $data['ads_banner1'] = $ads->getAdsByLocation(1);
        $data['ads_banner2'] = $ads->getAdsByLocation(2);

        // $data['movie_page']=DB::table('episode')->where('episode.movie_id',$movie_id)->first();

        return  view('frontend.movie', $data)->with('episode_nums', $episode_nums)->with('view_nums', $view_nums)->with('server', $server)->with('episode_id', $episode_id);
    }

    function GetPage($movie_id){
        $movies = DB::table('movie')->select('movie.movie_id')->get();
        
        // Get data navbar
        $nav = new NavController();
        $data['nation'] = $nav->getNation();
        $data['category_l'] = $nav->getCategory();
        
        //Get Film by movie id and rate in movie
        $data['movie_detail']=DB::table('movie')->where("movie_id",$movie_id)->join('nation','movie.nation_id','=','nation.nation_id')->first();
        $data['movie_cat']= $this->getCategoryToFilm($movie_id);
        $data['episode']= $this->getEpisodeByFilm($movie_id);
        $rate_obj = new RateController();       
        $rates = $rate_obj->getRateByMovie($movies);
        $user_rates = $rate_obj->getCountByUser($movie_id);
        
        // Film same nation
        $data['movie_nation']= $this->getFilmBySameNation($movie_id, $data['movie_detail']->nation_id);
        $detail = new DetailFilmController();
        $episode_nums = $detail->getEpisodeByMovie($movies);
        $view_nums = $detail->getViewByMovie($movies);
       
        // Get Data ads
        $ads = new AdsController();
        $data['ads_banner2']= $ads->getAdsByLocation(2);
     
        // Folow
        $follow = $this->handlingFolow(Session::get('user_id'),$movie_id);
             
        return  view('frontend.page',$data)->with('episode_nums',$episode_nums)->with('view_nums',$view_nums)->with('rates',$rates)->with('user_rates',$user_rates)->with('follow',$follow)->with('dan_user_id',Session::get('user_id'));
    }
    function handlingFolow($dan_user_id, $movie_id){
        $sql_dan=DB::table('movie_detail')->where('user_id',$dan_user_id)->where('movie_id',$movie_id)->get();
       
        if($sql_dan->count()==0){
             $a=2;  //ko ton tai trong bang 
        }else{
            $sql_dan_1=DB::table('movie_detail')->where('user_id',$dan_user_id)->where('movie_id',$movie_id)->where('follow',1)->get();
            $sql_dan_2=DB::table('movie_detail')->where('user_id',$dan_user_id)->where('movie_id',$movie_id)->where('follow',0)->get();
            if($sql_dan_1->count()==1){
                 $a=1;// co trong bang movie_detail  và follow=1
            }
            elseif($sql_dan_2->count()==1){
                 $a=0; // co trong bảng nhưng follow =0
            }
             $a;

        }
        return $a;
    }
    function InFollow($movie_id, $user_id){
        // follow cho trường hợp chưa tồn tại trong bảng
        DB::table('movie_detail')->insert([
            'rate' => '',
            'follow' => '1',
            'status' => '',
            'movie_id' => $movie_id,
            'user_id' => $user_id
        ]);
        return redirect()->back();
    }
    function BackFollow($movie_id, $user_id){
        // follow cho TH đã tồn tại trong bảng
        DB::table('movie_detail')
            ->where('movie_id', $movie_id)->where('user_id', $user_id)
            ->update(['follow' => 1]);
        return redirect()->back();
    }
    function DeleFollow($movie_id, $user_id){
        // hủy follow 
        DB::table('movie_detail')
            ->where('movie_id', $movie_id)->where('user_id', $user_id)
            ->update(['follow' => 0]);
        return redirect()->back();
    }
    public function getEpisodeByFilm($movie_id){
        return $data['movie_page3']=DB::table('episode')->join('movie','episode.movie_id','=','movie.movie_id')->where("episode.movie_id",$movie_id)->first();
    }
    public function getCategoryToFilm($movie_id){
        return $data['movie_cat'] = DB::table('category')->select('category_name')->join('category_detail', 'category_detail.category_id', '=', 'category.category_id')->where('category_detail.movie_id', $movie_id)->distinct()->get();
    }

    public function getFilmBySameNation($movie_id, $nation_id){
        return $data['movie_nation'] = DB::table('movie')->select('movie.*')->where('movie.nation_id', $nation_id)->where('movie_id', '<>', $movie_id)->get();      
    }
}

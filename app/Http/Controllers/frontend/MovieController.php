<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
// use Illuminate\Support\Facades\Redirect;


class MovieController extends Controller
{
    function GetMovie($movie_id,$episode_id,$server){

        // Get movie by id
        $movies = DB::table('movie')->select('movie.movie_id')->get();
       
        // Get data navbar
        $nav = new NavController();
        $data['nation'] = $nav->getNation();
        $data['category_l'] = $nav->getCategory();

          //Get episode 
        $data['movie_detail']=DB::table('movie')->join('nation','movie.nation_id','=','nation.nation_id')->where("movie_id",$movie_id)->first();
        $data['movie_page2']=DB::table('episode')->join('movie','episode.movie_id','=','movie.movie_id')->where("episode.movie_id",$movie_id)->get();
        //Lấy thắng đầu tiên của số tập ()
        $data['movie_page3']=DB::table('episode')->where("episode.movie_id",$movie_id)->where("episode.episode_id",$episode_id)->get();
        $data['movie_page4']=DB::table('episode')->join('movie','episode.movie_id','=','movie.movie_id')->where("episode.movie_id",$movie_id)->get();
        $data['movie_cat']= $this->getCategoryToFilm($movie_id);
     
        // Film same nation
        $data['movie_nation']= $this->getFilmBySameNation($movie_id, $data['movie_detail']->nation_id);
        $detail = new DetailFilmController();
        $episode_nums = $detail->getEpisodeByMovie($movies);
        $view_nums = $detail->getViewByMovie($movies);
        $rate_obj = new RateController();       
        $rates = $rate_obj->getRateByMovie($movies);

        // Get Data ads
        $ads = new AdsController();
        $data['ads_banner2']= $ads->getAdsByLocation(2);
    
        return  view('frontend.movie',$data)->with('episode_nums',$episode_nums)
        ->with('rates',$rates)->with('view_nums',$view_nums)->with('server',$server)
        ->with('episode_id',$episode_id);
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
        $data['movie_page4']=DB::table('episode')->join('movie','episode.movie_id','=','movie.movie_id')->where("episode.movie_id",$movie_id)->get();
        $data['episode']= $this->getEpisodeByFilm($movie_id);
        $rate_obj = new RateController();       
        $rates = $rate_obj->getRateByMovie($movies);
        $user_rates = $rate_obj->getCountByUser($movie_id);
        $status_rate = $rate_obj->statusUser($movie_id);
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
             
        return  view('frontend.page',$data)
        ->with('episode_nums',$episode_nums)->with('view_nums',$view_nums)
        ->with('rates',$rates)->with('user_rates',$user_rates)
        ->with('follow',$follow)->with('dan_user_id',Session::get('user_id'))->with('status_rate',$status_rate);
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
    public function errorMessage(){
        $content=$_POST['content'];
        $episode_id=$_POST['episode_id'];

        $dan_sql_check_content=DB::table('report')->where('episode_id',$episode_id)->get();
        if(count($dan_sql_check_content)==1){  // episode_id đã có trong bảng report
            if($dan_sql_check_content[0]->is_fixed==1){
                DB::table('report')
              ->where('episode_id', $episode_id)
              ->update(['is_fixed' => 0]);
            }
           
        }else{   // ngược lại
            if($content==""){ // content rỗng
                $content="Phim không xem được";

                DB::table('report')->insert([
                    'content' => $content,
                    'episode_id' => $episode_id,
                    'created_at'=>Carbon::now()->day()
                ]);
               
            }else{
                DB::table('report')->insert([
                    'content' => $content,
                    'episode_id' => $episode_id,
                    'created_at'=>Carbon::now()->day()
                ]);
               
            }
        }
        Session::put('dan_error',1); 
        Session::put('dan_err_episode',$episode_id); 
        Session::put('message','Báo lỗi thành công, cảm ơn quý khán giả!');
        return redirect()->back();
    }
}

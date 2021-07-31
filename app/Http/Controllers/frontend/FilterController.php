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


        //Top View
        $data['week_views'] = $this->get_movie_order_by('week_views');
        $data['month_views']= $this->get_movie_order_by('month_views');
        $data['year_views']= $this->get_movie_order_by('year_views');

        // $data['movie_cat']=DB::table('category')->select('category_name')->join('category_detail','category_detail.category_id','=','category.category_id')->where('category_detail.movie_id',$movie_id)->distinct()->get();
        
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();

        $episode_nums = array();
        $view_nums = array();
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

        $data['category_nation']=DB::table('movie')->join('nation','movie.nation_id','=','nation.nation_id')->where('movie_id',$category_id)->get();
       
        // $category_by_id=DB::select('select * from movie inner join category_detail on movie.movie_id = category_detail.movie_id where category_detail.category_id = '.$category_id.' group by movie.movie_id LIMIT 0,8');
        
        $data['category_by_id']=DB::table('movie')->join('category_detail','movie.movie_id','=','category_detail.movie_id')->where('category_detail.category_id',$category_id)->groupBy('movie.movie_id')->paginate(8);
        // Truy vấn quảng cáo
        $data['ads_banner1']=DB::table('advertisement')->where('ad_location',1)->where('status',1)->orderBy('ad_id','desc')->first();

        $data['ads_banner2']=DB::table('advertisement')->where('ad_location',2)->where('status',1)->orderBy('ad_id','desc')->get();
        // End

        return view('frontend.filter',$data)->with('episode_nums',$episode_nums)->with("view_nums",$view_nums);
    }

    function GetNation($nation_id){
        $movies = DB::table('movie')
        ->join('nation','nation.nation_id','=','movie.nation_id')->select('movie.*','nation.*','movie.status as movie_status','nation.status as nation_status')->get();

        // $data['movie_cat']=DB::table('category')->select('category_name')->join('category_detail','category_detail.category_id','=','category.category_id')->where('category_detail.movie_id',$movie_id)->distinct()->get();
        
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();


        //Top View
        $data['week_views'] = $this->get_movie_order_by('week_views');
        $data['month_views']= $this->get_movie_order_by('month_views');
        $data['year_views']= $this->get_movie_order_by('year_views');

        
        $episode_nums = array();
        $view_nums = array();
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

        $data['category_by_id']=DB::table('movie')->join('nation','movie.nation_id','=','nation.nation_id')->where('movie.nation_id',$nation_id)->paginate(8);
     // Truy vấn quảng cáo
     $data['ads_banner1']=DB::table('advertisement')->where('ad_location',1)->where('status',1)->orderBy('ad_id','desc')->first();

     $data['ads_banner2']=DB::table('advertisement')->where('ad_location',2)->where('status',1)->orderBy('ad_id','desc')->get();
     // End

        return view('frontend.filter',$data)->with('episode_nums',$episode_nums)->with("view_nums",$view_nums);
    }
    function GetNewMovie(){
        $movies = DB::table('movie')
        ->join('nation','nation.nation_id','=','movie.nation_id')->select('movie.*','nation.*','movie.status as movie_status','nation.status as nation_status')->get();

        // $data['movie_cat']=DB::table('category')->select('category_name')->join('category_detail','category_detail.category_id','=','category.category_id')->where('category_detail.movie_id',$movie_id)->distinct()->get();
        
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();


        //Top View
        $data['week_views'] = $this->get_movie_order_by('week_views');
        $data['month_views']= $this->get_movie_order_by('month_views');
        $data['year_views']= $this->get_movie_order_by('year_views');

        
        $episode_nums = array();
        $view_nums = array();
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

        $data['category_by_id']=DB::table('movie')->orderBy('movie_id','desc')->paginate(8);
        // Truy vấn quảng cáo
        $data['ads_banner1']=DB::table('advertisement')->where('ad_location',1)->where('status',1)->orderBy('ad_id','desc')->first();

        $data['ads_banner2']=DB::table('advertisement')->where('ad_location',2)->where('status',1)->orderBy('ad_id','desc')->get();
        // End

        return view('frontend.filter',$data)->with('episode_nums',$episode_nums)->with("view_nums",$view_nums);
    }
    function GetMovieVN(){
        $movies = DB::table('movie')
        ->join('nation','nation.nation_id','=','movie.nation_id')->select('movie.*','nation.*','movie.status as movie_status','nation.status as nation_status')->get();

        // $data['movie_cat']=DB::table('category')->select('category_name')->join('category_detail','category_detail.category_id','=','category.category_id')->where('category_detail.movie_id',$movie_id)->distinct()->get();
        
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();


        //Top View
        $data['week_views'] = $this->get_movie_order_by('week_views');
        $data['month_views']= $this->get_movie_order_by('month_views');
        $data['year_views']= $this->get_movie_order_by('year_views');

        
        $episode_nums = array();
        $view_nums = array();
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

        

        $data['category_by_id']=DB::table('movie')->where('nation_id',1)->orderBy('movie_id','desc')->paginate(8);
       
       // Truy vấn quảng cáo
       $data['ads_banner1']=DB::table('advertisement')->where('ad_location',1)->where('status',1)->orderBy('ad_id','desc')->first();

       $data['ads_banner2']=DB::table('advertisement')->where('ad_location',2)->where('status',1)->orderBy('ad_id','desc')->get();
       // End
        return view('frontend.filter',$data)->with('episode_nums',$episode_nums)->with("view_nums",$view_nums);
    }

    private function get_movie_order_by($option){
        return DB::select("SELECT movie.movie_id, movie.movie_name, movie.url_image, SUM(episode.week_view) as week_views, SUM(episode.month_view) as month_views, SUM(episode.year_view) as year_views, a.rating as rate from movie JOIN episode on movie.movie_id = episode.movie_id LEFT JOIN (select movie_id, AVG(rate) as rating from movie_detail GROUP BY movie_id) as a on movie.movie_id = a.movie_id WHERE movie.status=1 and episode.status=1 GROUP BY movie.movie_id, movie.movie_name ORDER BY $option");

    }
}
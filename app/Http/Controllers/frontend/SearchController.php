<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function GetSearch(Request $request){
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();

        $keywords=$request->keywords_submit;


        $movies = DB::table('movie')
        ->join('nation','nation.nation_id','=','movie.nation_id')->select('movie.*','nation.*','movie.status as movie_status','nation.status as nation_status')->get();

        $categories = array();
        foreach($movies as &$movie){
            $movie_categories = DB::table('category_detail')
            ->join('category','category.category_id','=','category_detail.category_id')
            ->where('category_detail.movie_id',$movie->movie_id)
            ->where('category_detail.status','1')
            ->where('category.status','1')->get();
            $str_category = '';
            foreach($movie_categories as &$cate){
                $str_category = $str_category.$cate->category_name.", ";
            }
            $categories[$movie->movie_id] = $str_category;
        }

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
        $search_movie=DB::table('movie')->where('status',1)->where('movie_name','like','%' .$keywords. '%')->paginate(4);
       

        return view('frontend.search',$data)->with('movies',$movies)->with('episode_nums',$episode_nums)->with('categories',$categories)->with('search_movie',$search_movie)->with("view_nums",$view_nums);
    }
}

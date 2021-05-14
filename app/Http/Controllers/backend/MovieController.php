<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class MovieController extends Controller
{
    

    //* Thanh - Admin
    public function list_movie(){
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
        foreach($movies as &$movie){
            $episode_num = DB::table('movie')
            ->join('episode','episode.movie_id','=','movie.movie_id')
            ->where('movie.movie_id',$movie->movie_id)
            ->where('episode.status','1')->get();
            $episode_nums[$movie->movie_id] = count($episode_num);
        }

        return view('admin.movie.list')->with('movies',$movies)->with('episode_nums',$episode_nums)->with('categories',$categories);
    }

    public function add_movie(){
        $nations = DB::table('nation')->where('status','1')->get();
        $categories = DB::table('category')->where('status','1')->get();
        return view('admin.movie.add')->with('nations',$nations)->with('categories',$categories);
    }

    public function edit_movie($movie_id){

    }

    public function update_movie($movie_id){

    }
    
    public function save_movie(REQUEST $request, $movie_id){
        // movie
        $data = array();
        $data['movie_name'] = $request->movie_name;
        $data['year'] = $request->movie_year;
        $data['view'] = $request->movie_view;
        $data['introduct'] = $request->movie_introduce;
        $data['length'] = $request->movie_length;
        $data['url_trailer'] = $request->movie_trailer;
        $data['url_image'] = $request->movie_image;
        $data['url_cmt_fb'] = $request->movie_cmt;
        $data['status'] = $request->status;
        $data['nation_id'] = $request->movie_nation;

        DB::table('movie')->insert($data);

        // category
        $cate = array();
        $cate[''] = 1;

        Session::put('message','Add Movie Successfully');
        return Redirect::to('add-category');
    }
    
    public function delete_movie($movie_id){

    }

    public function active($movie_id){
        DB::table('movie')->where('movie_id','=',$movie_id)->update(['status'=>1]);
        Session::put('message','Active Movie Successfully');
        return Redirect::to('admin_1/list-movie');
    }

    public function unactive($movie_id){
        DB::table('movie')->where('movie_id','=',$movie_id)->update(['status'=>0]);
        Session::put('message','Unactive Movie Successfully');
        return Redirect::to('admin_1/list-movie');
    }
}

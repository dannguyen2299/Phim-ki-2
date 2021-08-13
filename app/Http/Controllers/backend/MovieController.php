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

        return view('admin.movie.list')->with('movies',$movies)->with('episode_nums',$episode_nums)->with('view_nums',$view_nums)->with('categories',$categories);
    }

    public function add_movie(){
        $nations = DB::table('nation')->where('status','1')->get();
        $categories = DB::table('category')->where('status','1')->get();
        return view('admin.movie.add')->with('nations',$nations)->with('categories',$categories);
    }

    public function edit_movie($movie_id){
        $movie_edit = DB::table('movie')->where('movie_id',$movie_id)->get();
        $nations = DB::table('nation')->where('status','1')->get();
        $categories = DB::table('category')->where('status','1')->get();
        $detail_categories = DB::table('category_detail')->where('status','1')->where('movie_id',$movie_id)->get();
        return view('admin.movie.edit')->with('movie_edit',$movie_edit)
        ->with('nations',$nations)->with('categories',$categories)->with('detail_categories',$detail_categories);
    }

    public function update_movie(Request $request, $movie_id){
        // movie
        
        
        $data = array();
        $data['movie_name'] = $request->movie_name==''?$message="Your activity Unsuccessfully":$request->movie_name;
        $data['year'] = $request->movie_year==''?$message="Your activity Unsuccessfully":$request->movie_year;
        $data['total_eps'] = $request->movie_episodes==''?$message="Your activity Unsuccessfully":$request->movie_episodes;
        $data['introduce'] = $request->movie_introduce==''?$message="Your activity Unsuccessfully":$request->movie_length;
        $data['length'] = $request->movie_length==''?$message="Your activity Unsuccessfully":$request->movie_length;
        $data['url_trailer'] = $request->movie_trailer==''?$message="Your activity Unsuccessfully":$request->movie_trailer;
        $data['url_image'] = $request->movie_image==''?$message="Your activity Unsuccessfully":$request->movie_image;
        $data['url_cmt_fb'] = $request->movie_cmt==''?$message="Your activity Unsuccessfully":$request->movie_cmt;
        $data['status'] = $request->sl_status==''?$message="Your activity Unsuccessfully":$request->sl_status;
        $data['nation_id'] = $request->movie_nation==''?$message="Your activity Unsuccessfully":$request->movie_nation;
        if (isset($message)){
            Session::put('message',$message);   
            return Redirect::to('admin_1/list-movie');
        }
        DB::table('movie')->where('movie_id','=',$movie_id)->update($data);

        // category

        if ($request->movie_category != null){
            $cates = array();
            $cate = array();
            $size = count($request->movie_category);
            for ($i = 0; $i < $size; $i++){
                $cate['status'] = 1;
                $cate['movie_id'] = $movie_id;
                $cate['category_id'] = $request->movie_category[$i];
                $cates[]=$cate;
            }
            
            DB::table('category_detail')->where('movie_id',$movie_id)->delete();
            DB::table('category_detail')->insert($cates);
        }
        else {
            DB::table('category_detail')->where('movie_id',$movie_id)->delete();
        }

        Session::put('message','Update Movie Successfully');
        return Redirect::to('admin_1/list-movie');
    }
    
    public function save_movie(REQUEST $request){
        // movie
        $regex_nums = "/[a-z]/i";
        if (preg_match($regex_nums, $request->movie_year) == 1){
            $movie_year = 0;
        } else {
            $movie_year = $request->movie_year;
        }
        
        if (preg_match($regex_nums, $request->movie_episodes) == 1){
            $movie_year = 0;
        } else {
            $movie_year = $request->movie_year;
        }
        
        $data = array();
        $data['movie_name'] = $request->movie_name==''?$message="Your activity Unsuccessfully":$request->movie_name;
        $data['year'] = $request->movie_year==''?$message="Your activity Unsuccessfully":$request->movie_year;
        $data['total_eps'] = $request->movie_episodes==''?$message="Your activity Unsuccessfully":$request->movie_episodes;
        $data['introduce'] = $request->movie_introduce==''?$message="Your activity Unsuccessfully":$request->movie_length;
        $data['length'] = $request->movie_length==''?$message="Your activity Unsuccessfully":$request->movie_length;
        $data['url_trailer'] = $request->movie_trailer==''?$message="Your activity Unsuccessfully":$request->movie_trailer;
        $data['url_image'] = $request->movie_image==''?$message="Your activity Unsuccessfully":$request->movie_image;
        $data['url_cmt_fb'] = $request->movie_cmt==''?$message="Your activity Unsuccessfully":$request->movie_cmt;
        $data['status'] = $request->sl_status==''?$message="Your activity Unsuccessfully":$request->sl_status;
        $data['nation_id'] = $request->movie_nation==''?$message="Your activity Unsuccessfully":$request->movie_nation;
        if (isset($message)){
            Session::put('message',$message);   
            return Redirect::to('admin_1/add-movie');
        }
        DB::table('movie')->insert($data);

        // category
        $movie_id = DB::table('movie')->orderby('movie_id','desc')->first();
        $url_cmt_fb = $data['url_cmt_fb'].$movie_id->movie_id;
        DB::table('movie')->where('movie.movie_id',$movie_id->movie_id)->update(['url_cmt_fb' => $url_cmt_fb]);

        if ($request->movie_category != null){
            $cates = array();
            $cate = array();
            $size = count($request->movie_category);
            for ($i = 0; $i < $size; $i++){
                $cate['status'] = 1;
                $cate['movie_id'] = $movie_id->movie_id;
                $cate['category_id'] = $request->movie_category[$i];
                $cates[]=$cate;
            }
            DB::table('category_detail')->insert($cates);
        }

        Session::put('message','Add Movie Successfully');
        return Redirect::to('admin_1/add-movie');
    }
    
    public function delete_movie($movie_id){
        DB::table('category_detail')->where('movie_id',$movie_id)->delete();
        DB::table('movie')->where('movie_id',$movie_id)->delete();
        Session::put('message','Delete Movie Successfully');
        return Redirect::to('admin_1/list-movie');
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

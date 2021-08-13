<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class EpisodeController extends Controller
{
    
    
    //* Admin ở đây
    public function list_episode($movie_id){
        $movie = DB::table('movie')->where('movie_id',$movie_id)->get()[0];
        $episodes = DB::table('episode')->where('movie_id',$movie_id)->get();
        return view('admin.episode.list')->with('episodes',$episodes)->with('movie',$movie);
    }

    public function add_episode(){
        return view('admin.episode.add');
    }

    public function save_episode(Request $request){
        $data = array();
        $data['episode_name'] = $request->episode_name==''?$message="Your activity Unsuccessfully":$request->episode_name;
        $data['url_first'] = $request->url_first==''?$message="Your activity Unsuccessfully":$request->url_first;
        $data['url_second'] = $request->url_second==''?$message="Your activity Unsuccessfully":$request->url_second;
        $data['view'] = 0; // ban đầu view = 0;
        $data['status'] = $request->sl_status==''?$message="Your activity Unsuccessfully":$request->sl_status;
        $data['movie_id'] = $request->movie_id;
        if ($message){
            Session::put('message',$message);   
            return Redirect::to('admin_1/list-episode/'.$request->movie_id);
        }
        DB::table('episode')->insert($data);
        Session::put('message','Add Episode Successfully');
        return Redirect::to('admin_1/list-episode/'.$request->movie_id);
    }

    public function edit_episode($episode_id){
        $episode = DB::table('episode')
        ->join('movie','movie.movie_id','=','episode.movie_id')
        ->where('episode_id',$episode_id)->get();
        
        return view('admin.episode.edit')->with('episode',$episode);
    }

    public function update_episode(Request $request, $episode_id){
        $movie_id = DB::table('episode')->where('episode_id',$episode_id)->get()[0]->movie_id;

        $data = array();
        $data['episode_name'] = $request->episode_name==''?$message="Your activity Unsuccessfully":$request->episode_name;
        $data['url_first'] = $request->url_first==''?$message="Your activity Unsuccessfully":$request->url_first;
        $data['url_second'] = $request->url_second==''?$message="Your activity Unsuccessfully":$request->url_second;
        $data['status'] = $request->sl_status==''?$message="Your activity Unsuccessfully":$request->sl_status;
        if ($message){
            Session::put('message',$message);   
            return Redirect::to('admin_1/list-episode/'.$movie_id);
        }
        DB::table('episode')->where('episode_id',$episode_id)->update($data);
        Session::put('message','Update Episode Successfully');
        return Redirect::to('admin_1/list-episode/'.$movie_id);
    }

    public function delete_episode($episode_id){
        $movie_id = DB::table('episode')->where('episode_id',$episode_id)->get()[0]->movie_id;
        DB::table('episode')->where('episode_id',$episode_id)->update(['status'=>1]);

        DB::table('episode')->where('episode_id',$episode_id)->delete();
        Session::put('message','Delete Episode Successfully');
        return Redirect::to('admin_1/list-episode/'.$movie_id);
    }

    public function active($episode_id){
        $movie_id = DB::table('episode')->where('episode_id',$episode_id)->get()[0]->movie_id;
        DB::table('episode')->where('episode_id',$episode_id)->update(['status'=>1]);

        Session::put('message','Active Episode Successfully');
        return Redirect::to('admin_1/list-episode/'.$movie_id);
    }

    public function unactive($episode_id){
        $movie_id = DB::table('episode')->where('episode_id',$episode_id)->get()[0]->movie_id;
        DB::table('episode')->where('episode_id',$episode_id)->update(['status'=>0]);

        Session::put('message','Unactive Episode Successfully');
        return Redirect::to('admin_1/list-episode/'.$movie_id);
        
    }
}

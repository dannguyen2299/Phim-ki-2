<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
    
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ReportController extends Controller
{
    function in_report($episode_id){
        $search_report=DB::table('report')->where('episode_id',$episode_id)->get();
         
        if($search_report->count()==0){
            DB::table('report')->insert([
                'email' => 'kayla@example.com',
                'votes' => 0
            ]);

            return redirect()->back();
        }
        elseif($search_report->count()==1){
            
            return redirect()->back();
        }
        // return view('admin.admin_layout');
    }

    public function list_report(){
        $reports = DB::table('report')
        // ->join('user','user.user_id','=','report.user_id')
        ->join('episode','episode.episode_id','=','report.episode_id')
        ->join('movie','movie.movie_id','episode.movie_id')->get();
        
        return view('admin.report.list')->with('reports',$reports);
    }

    public function fix_report($report_id){
        $report = DB::table('report')->where('report_id',$report_id)->first();
        $episode = DB::table('episode')
        ->join('movie','movie.movie_id','=','episode.movie_id')
        ->where('episode_id',$report->episode_id)->get();
        
        return view('admin.report.fix')->with('episode',$episode)->with('report',$report);
    }

    public function update_report(Request $request, $episode_id, $report_id){
        $data = array();
        $data['episode_name'] = $request->episode_name;
        $data['url_first'] = $request->url_first;
        $data['url_second'] = $request->url_second;
        $data['status'] = $request->sl_status;
        DB::table('episode')->where('episode_id',$episode_id)->update($data);
        
        $is_fixed = $request->is_fixed;
        if ($is_fixed == '1'){
            DB::table('report')->where('report_id',$report_id)->update(['is_fixed'=>1]);
            Session::put('message','Fix Report Successfully');
            Session::put('alert','alert alert-success');
        }
        else {
            DB::table('report')->where('report_id',$report_id)->update(['is_fixed'=>0]);
            Session::put('message','You have not fixed');
            Session::put('alert','alert alert-danger');
        }
        return Redirect::to('admin_1/list-report');
    }

    public function delete_report($report_id){
        DB::table('report')->where('report_id',$report_id)->delete();
        Session::put('message','Delete Report Successfully');
        Session::put('alert','alert alert-success');
        return Redirect::to('admin_1/list-report');
    }
        
    public function fixed($report_id){
        DB::table('report')->where('report_id','=',$report_id)->update(['is_fixed'=>1]);
        Session::put('message','Fixed This Report');
        Session::put('alert','alert alert-success');
        return Redirect::to('admin_1/list-report');
    }

    public function not_fixed($report_id){
        DB::table('report')->where('report_id','=',$report_id)->update(['is_fixed'=>0]);
        Session::put('message','Not Fixed This Report');
        Session::put('alert','alert alert-danger');
        return Redirect::to('admin_1/list-report');
    }
}

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
        $day_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('day_views')->limit(20)->get();
        $month_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('month_views')->limit(20)->get();
        $year_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('year_views')->limit(20)->get();
        
        //Select danh mục loại phim
        $data['category_parent']=DB::table('category')->where('parentID',1)->get();
        //Select danh mục thể loại
        $data['category_son']=DB::table('category')->where('parentID',0)->get();
        //Select năm phát hành
        $data['yearR']=DB::table('movie')->groupBy('year')->get();

        $data['day_views'] = $day_views;
        $data['month_views']= $month_views;
        $data['year_views']= $year_views;

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


        //Select danh mục loại phim
        $data['category_parent']=DB::table('category')->where('parentID',1)->get();
        //Select danh mục thể loại
        $data['category_son']=DB::table('category')->where('parentID',0)->get();
        //Select năm phát hành
        $data['yearR']=DB::table('movie')->groupBy('year')->get();



        //Top View
        $day_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('day_views')->limit(20)->get();
        $month_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('month_views')->limit(20)->get();
        $year_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('year_views')->limit(20)->get();
        
        $data['day_views'] = $day_views;
        $data['month_views']= $month_views;
        $data['year_views']= $year_views;

        
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


        //Select danh mục loại phim
        $data['category_parent']=DB::table('category')->where('parentID',1)->get();
        //Select danh mục thể loại
        $data['category_son']=DB::table('category')->where('parentID',0)->get();
        //Select năm phát hành
        $data['yearR']=DB::table('movie')->groupBy('year')->get();


        //Top View
        $day_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('day_views')->limit(20)->get();
        $month_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('month_views')->limit(20)->get();
        $year_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('year_views')->limit(20)->get();
        
        $data['day_views'] = $day_views;
        $data['month_views']= $month_views;
        $data['year_views']= $year_views;

        
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

        //Select danh mục loại phim
        $data['category_parent']=DB::table('category')->where('parentID',1)->get();
        //Select danh mục thể loại
        $data['category_son']=DB::table('category')->where('parentID',0)->get();
        //Select năm phát hành
        $data['yearR']=DB::table('movie')->groupBy('year')->get();


        //Top View
        $day_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('day_views')->limit(20)->get();
        $month_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('month_views')->limit(20)->get();
        $year_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('year_views')->limit(20)->get();
        
        $data['day_views'] = $day_views;
        $data['month_views']= $month_views;
        $data['year_views']= $year_views;

        
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

    function GetFilterMovie(Request $request){

        $movies = DB::table('movie')
        ->join('nation','nation.nation_id','=','movie.nation_id')->select('movie.*','nation.*','movie.status as movie_status','nation.status as nation_status')->get();

        // $data['movie_cat']=DB::table('category')->select('category_name')->join('category_detail','category_detail.category_id','=','category.category_id')->where('category_detail.movie_id',$movie_id)->distinct()->get();
        
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();

        //Select danh mục loại phim
        $data['category_parent']=DB::table('category')->where('parentID',1)->get();
        //Select danh mục thể loại
        $data['category_son']=DB::table('category')->where('parentID',0)->get();
        //Select năm phát hành
        $data['yearR']=DB::table('movie')->groupBy('year')->get();


        //Top View
        $day_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('day_views')->limit(20)->get();
        $month_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('month_views')->limit(20)->get();
        $year_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('year_views')->limit(20)->get();
        
        $data['day_views'] = $day_views;
        $data['month_views']= $month_views;
        $data['year_views']= $year_views;

        
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

        

        //$data['category_by_id']=DB::table('movie')->where('nation_id',1)->orderBy('movie_id','desc')->paginate(8);
       
       // Truy vấn quảng cáo
       $data['ads_banner1']=DB::table('advertisement')->where('ad_location',1)->where('status',1)->orderBy('ad_id','desc')->first();

       $data['ads_banner2']=DB::table('advertisement')->where('ad_location',2)->where('status',1)->orderBy('ad_id','desc')->get();
       // End
        


        $sl_all=$request->sl_all;
        $category=$request->category;
        $kind=$request->kind;
        $nation=$request->nation;
        $year=$request->year;
       

        if($sl_all=="1"){
            $data['category_by_id']=DB::table('movie')->groupBy('movie.movie_id')->orderBy('movie.movie_id','desc')->paginate(8);
           
        }
        if($sl_all=="2"){
            $data['category_by_id']=DB::table('movie')
            ->join('episode','movie.movie_id','=','episode.movie_id')
            ->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')
            ->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))
            ->where([['movie.status','1'],['episode.status','1']])
            ->groupBy('movie.movie_id')->orderBy('month_views')
            ->limit(20)
            ->paginate(8);
        
        }  
        if($category!=""){
           // echo $category;
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->where('movie.movie_id',$category)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);
        }
        if($kind!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->where('movie.movie_id',$kind)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);
        }
        if($nation!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.nation_id',$nation)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);

        }
        if($year!=""){
            $data['category_by_id']=DB::table('movie')
            ->where('movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);
        }


        if($sl_all=="1" && $category!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->where('movie.movie_id',$category)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->orderBy('movie.movie_id','desc')
            ->paginate(8);
        }
        if($sl_all=="2" && $category!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->join('episode','movie.movie_id','=','episode.movie_id')
            ->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')
            ->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))
            ->where('movie.movie_id',$category)
            ->where([['movie.status','1'],['episode.status','1']])
            ->groupBy('movie.movie_id')
            ->orderBy('month_views')
            ->limit(20)
            ->paginate(8);

        }
        if($sl_all=="1" && $kind!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->where('movie.movie_id',$kind)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->orderBy('movie.movie_id','desc')
            ->paginate(8);
        }
        if($sl_all=="2" && $kind!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->join('episode','movie.movie_id','=','episode.movie_id')
            ->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')
            ->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))
            ->where('movie.movie_id',$kind)
            ->where([['movie.status','1'],['episode.status','1']])
            ->groupBy('movie.movie_id')
            ->orderBy('month_views')
            ->limit(20)
            ->paginate(8);
        }
        if($sl_all=="1" && $nation!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.nation_id',$nation)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->orderBy('movie.movie_id','desc')
            ->paginate(8);
        }
        if($sl_all=="2" && $nation!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->join('episode','movie.movie_id','=','episode.movie_id')
            ->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')
            ->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))
            ->where('movie.nation_id',$nation)
            ->where([['movie.status','1'],['episode.status','1']])
            ->groupBy('movie.movie_id')
            ->orderBy('month_views')
            ->limit(20)
            ->paginate(8);
        }
        if($sl_all=="1" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->where('movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->orderBy('movie.movie_id','desc')
            ->paginate(8);
        }
        if($sl_all=="2" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('episode','movie.movie_id','=','episode.movie_id')
            ->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')
            ->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))
            ->where('movie_id',$year)
            ->where([['movie.status','1'],['episode.status','1']])
            ->groupBy('movie.movie_id')
            ->orderBy('month_views')
            ->limit(20)
            ->paginate(8);
        }


        if($category!="" && $kind!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->where('movie.movie_id',$category)
             ->where('movie.movie_id',$kind)
             ->where('movie.status',1)
             ->groupBy('movie.movie_id')
             ->paginate(8);
       
        }
         if($category!="" && $nation!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.movie_id',$category)
            ->where('movie.nation_id',$nation)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);
        }
        if($category!="" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->where('movie.movie_id',$category)
            ->where('movie.movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);

        } 


        if($kind!="" && $nation!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.movie_id',$kind)
            ->where('movie.nation_id',$nation)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);
        }
        if($kind!="" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->where('movie.movie_id',$kind)
            ->where('movie.movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);
        }


        if($nation!="" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.nation_id',$nation)
            ->where('movie.movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);
        }


        if($category!="" && $kind!="" && $sl_all=="1"){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            
            ->where('movie.movie_id',$category)
            ->where('movie.movie_id',$kind)
            
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->orderBy('movie.movie_id','desc')
            ->paginate(8);
        }
        if($category!="" && $kind!="" && $sl_all=="2"){
            $data['category_by_id']=DB::table('movie')
            ->join('episode','movie.movie_id','=','episode.movie_id')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')
            ->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))
            ->where('movie.movie_id',$category)
            ->where('movie.movie_id',$kind)
            ->where([['movie.status','1'],['episode.status','1']])
            ->groupBy('movie.movie_id')
            ->orderBy('month_views')
            ->limit(20)
            ->paginate(8);         
        }


        if($category!="" && $sl_all=="1" && $nation!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.movie_id',$category)
            ->where('movie.nation_id',$nation)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->orderBy('movie_id','desc')
            ->paginate(8);
        }
        if($category!="" && $sl_all=="2" && $nation!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('episode','movie.movie_id','=','episode.movie_id')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')
            ->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))
            ->where('movie.movie_id',$category) 
            ->where('movie.nation_id',$nation)
            ->where([['movie.status','1'],['episode.status','1']])
            ->groupBy('movie.movie_id')->orderBy('month_views')
            ->limit(20)
            ->paginate(8);
        }
        if($category!="" && $sl_all=="1" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->where('movie.movie_id',$category)
            ->where('movie.movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->orderBy('movie.movie_id','desc')
            ->paginate(8);
        }
        if($category!="" && $sl_all=="2" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('episode','movie.movie_id','=','episode.movie_id')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')
            ->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))
            ->where('movie.movie_id',$category)
            ->where('movie.movie_id',$year)
            ->where([['movie.status','1'],['episode.status','1']])
            ->groupBy('movie.movie_id')->orderBy('month_views')
            ->limit(20)
            ->paginate(8);
        }

        if($category!="" && $kind!="" && $nation!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.movie_id',$category)
            ->where('movie.movie_id',$kind)
            ->where('movie.nation_id',$nation)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);
        }
        if($category!="" && $kind!="" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->where('movie.movie_id',$category)
            ->where('movie.movie_id',$kind)
            ->where('movie.movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);
        }

        if($category!="" && $year!="" && $nation!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.movie_id',$category)
            ->where('movie.nation_id',$nation)
            ->where('movie.movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);
        }


        if($kind!="" && $year!="" && $nation!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.movie_id',$kind)
            ->where('movie.nation_id',$nation)
            ->where('movie.movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);
        }
       
        
        if($sl_all=="1" && $kind!="" && $nation!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->join('nation','movie.nation_id','=','nation.nation_id')           
            ->where('movie.movie_id',$kind)
            ->where('movie.nation_id',$nation)           
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->orderBy('movie.movie_id','desc')
            ->paginate(8);
        }
        if($sl_all=="2" && $kind!="" && $nation!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('episode','movie.movie_id','=','episode.movie_id')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->join('nation','movie.nation_id','=','nation.nation_id')   
            ->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')
            ->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))
            ->where('movie.movie_id',$kind)
            ->where('movie.nation_id',$nation) 
            ->where([['movie.status','1'],['episode.status','1']])
            ->groupBy('movie.movie_id')->orderBy('month_views')
            ->limit(20)
            ->paginate(8);
        }
        if($sl_all=="1" && $kind!="" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')  
            ->where('movie.movie_id',$kind)
            ->where('movie.movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->orderBy('movie.movie_id','desc')
            ->paginate(8);
        }
        if($sl_all=="2" && $kind!="" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('episode','movie.movie_id','=','episode.movie_id')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')  
            ->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')
            ->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))
            ->where('movie.movie_id',$kind)
            ->where('movie.movie_id',$year)
            ->where([['movie.status','1'],['episode.status','1']])
            ->groupBy('movie.movie_id')->orderBy('month_views')
            ->limit(20)
            ->paginate(8);  
        }
        if($category!="" && $kind!="" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')  
            ->where('movie.movie_id',$category)
            ->where('movie.movie_id',$kind)
            ->where('movie.movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);
        }
        if($nation!="" && $sl_all=="1" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.movie_id',$nation)
            ->where('movie.movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->orderBy('movie.movie_id','desc')
            ->paginate(8);
        }
        if($nation!="" && $sl_all=="2" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('episode','movie.movie_id','=','episode.movie_id')
            ->join('nation','movie.nation_id','=','nation.nation_id')

            ->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')
            ->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))
            ->where('movie.movie_id',$nation)
            ->where('movie.movie_id',$year)

            ->where([['movie.status','1'],['episode.status','1']])
            ->groupBy('movie.movie_id')->orderBy('month_views')
            ->limit(20)
            ->paginate(8);

            
        }
        if($nation!="" && $kind!="" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')  
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.movie_id',$kind)
            ->where('movie.movie_id',$nation)
            ->where('movie.movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);
        }
        if($sl_all=="1" && $category!="" && $kind!="" && $nation!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')  
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.movie_id',$category)
            ->where('movie.movie_id',$kind)
            ->where('movie.movie_id',$nation)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->orderBy('movie.movie_id','desc')
            ->paginate(8);
        }
        if($sl_all=="2" && $category!="" && $kind!="" && $nation!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('episode','movie.movie_id','=','episode.movie_id')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')  
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.movie_id',$category)
            ->where('movie.movie_id',$kind)
            ->where('movie.movie_id',$nation)
            ->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')
            ->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))
            ->where([['movie.status','1'],['episode.status','1']])
            ->groupBy('movie.movie_id')->orderBy('month_views')
            ->limit(20)
            ->paginate(8); 
        }
        if($category!="" && $nation!="" && $kind!="" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')  
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.movie_id',$category)
            ->where('movie.movie_id',$kind)
            ->where('movie.movie_id',$nation)
            ->where('movie.movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->paginate(8);
        }
        if($category!="" && $sl_all=="1" && $kind!="" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')  
            ->where('movie.movie_id',$category)
            ->where('movie.movie_id',$kind)
            ->where('movie.movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->orderBy('movie.movie_id','desc')
            ->paginate(8);
        }
        if($category!="" && $sl_all=="2" && $kind!="" && $year!=""){
            $data['category_by_id']=DB::table('movie')
            ->join('episode','movie.movie_id','=','episode.movie_id')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')  
            ->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')
            ->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))
            ->where('movie.movie_id',$category)
            ->where('movie.movie_id',$kind)
            ->where('movie.movie_id',$year)
            ->where([['movie.status','1'],['episode.status','1']])
            ->groupBy('movie.movie_id')->orderBy('month_views')
            ->limit(20)
            ->paginate(8);           
        }
        if($category!="" && $nation!="" && $year!="" && $sl_all=="1"){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.movie_id',$category)
            ->where('movie.nation_id',$nation)
            ->where('movie.movie_id',$year)
            ->where('movie.status',1) 
            ->groupBy('movie.movie_id')
            ->orderBy('movie.movie_id','desc')
            ->paginate(8);
        }
        if($category!="" && $nation!="" && $year!="" && $sl_all=="2"){
            $data['category_by_id']=DB::table('movie')
            ->join('episode','movie.movie_id','=','episode.movie_id')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->join('nation','movie.nation_id','=','nation.nation_id')

            ->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')
            ->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))
            ->where('movie.movie_id',$category)
            ->where('movie.nation_id',$nation)
            ->where('movie.movie_id',$year)
            ->where([['movie.status','1'],['episode.status','1']])
            ->groupBy('movie.movie_id')->orderBy('month_views')
            ->limit(20)
            ->paginate(8);

           
        }
        if($kind!="" && $nation!="" && $year!="" && $sl_all=="1"){
            $data['category_by_id']=DB::table('movie')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->where('movie.movie_id',$kind)
            ->where('movie.nation_id',$nation)
            ->where('movie.movie_id',$year)
            ->where('movie.status',1)
            ->groupBy('movie.movie_id')
            ->orderBy('movie.movie_id','desc')
            ->paginate(8);

           
        }
        if($kind!="" && $nation!="" && $year!="" && $sl_all=="2"){
            $data['category_by_id']=DB::table('movie')
            ->join('episode','movie.movie_id','=','episode.movie_id')
            ->join('category_detail','movie.movie_id','=','category_detail.movie_id')
            ->join('nation','movie.nation_id','=','nation.nation_id')
            ->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')
            ->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))
            ->where('movie.movie_id',$kind)
            ->where('movie.nation_id',$nation)
            ->where('movie.movie_id',$year)
            ->where([['movie.status','1'],['episode.status','1']])
            ->groupBy('movie.movie_id')->orderBy('month_views')
            ->limit(20)
            ->paginate(8);
           
        }
       if($category=="" && $nation=="" && $kind=="" && $year=="" && $sl_all==""){
           $data['category_by_id']=DB::table('movie')
           ->where('movie.status',1)
           ->groupBy('movie.movie_id')
           ->paginate(8);
       }
        return view('frontend.filtermovie',$data)->with('episode_nums',$episode_nums)->with("view_nums",$view_nums);
        //return view('frontend.filter',$data);
    }
  
}
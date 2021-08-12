<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Routing\UrlGenerator;
class FilterController extends Controller
{
    function GetFilter($category_id){
        
        $movies = DB::table('movie')
        ->join('nation','nation.nation_id','=','movie.nation_id')->select('movie.*','nation.*','movie.status as movie_status','nation.status as nation_status')->get();

       //Select danh mục loại phim
       $data['category_parent']=DB::table('category')->where('parentID',1)->orWhere('parentID',2)->get();
       //Select danh mục thể loại
       $data['category_son']=DB::table('category')->where('parentID',0)->get();
       //Select năm phát hành
       $data['yearR']=DB::table('movie')->groupBy('year')->get();
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
        
        $data['category_by_id']=DB::table('movie')->join('category_detail','movie.movie_id','=','category_detail.movie_id')->join('category','category.category_id','=','category_detail.category_id')->where('category_detail.category_id',$category_id)->groupBy('movie.movie_id')->paginate(8);
        // Truy vấn quảng cáo
        $data['ads_banner1']=DB::table('advertisement')->where('ad_location',1)->where('status',1)->orderBy('ad_id','desc')->first();

        $data['ads_banner2']=DB::table('advertisement')->where('ad_location',2)->where('status',1)->orderBy('ad_id','desc')->get();
        // End
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
        $data['category_parent']=DB::table('category')->where('parentID',1)->orWhere('parentID',2)->get();
        //Select danh mục thể loại
        $data['category_son']=DB::table('category')->where('parentID',0)->get();
        //Select năm phát hành
        $data['yearR']=DB::table('movie')->groupBy('year')->get();



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


        //Select danh mục loại phim
        $data['category_parent']=DB::table('category')->where('parentID',1)->orWhere('parentID',2)->get();
        //Select danh mục thể loại
        $data['category_son']=DB::table('category')->where('parentID',0)->get();
        //Select năm phát hành
        $data['yearR']=DB::table('movie')->groupBy('year')->get();


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

        $data['category_by_id']=DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->groupBy('movie.movie_id')->orderBy('max','desc')->select('movie.movie_id','movie.total_eps', 'movie.movie_name', 'movie.url_image',DB::raw("MAX(episode.episode_id) as max"))->paginate(8);

        // $data['category_by_id']=DB::table('movie')->orderBy('movie_id','desc')->paginate(8);
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
        $data['category_parent']=DB::table('category')->where('parentID',1)->orWhere('parentID',2)->get();
        //Select danh mục thể loại
        $data['category_son']=DB::table('category')->where('parentID',0)->get();
        //Select năm phát hành
        $data['yearR']=DB::table('movie')->groupBy('year')->get();


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

    function GetFilterMovie(Request $request){

        $movies = DB::table('movie')
        ->join('nation','nation.nation_id','=','movie.nation_id')->select('movie.*','nation.*','movie.status as movie_status','nation.status as nation_status')->get();

        // $data['movie_cat']=DB::table('category')->select('category_name')->join('category_detail','category_detail.category_id','=','category.category_id')->where('category_detail.movie_id',$movie_id)->distinct()->get();
        
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();

        //Select danh mục loại phim
        $data['category_parent']=DB::table('category')->where('parentID',1)->orWhere('parentID',2)->get();
        //Select danh mục thể loại
        $data['category_son']=DB::table('category')->where('parentID',0)->get();
        //Select năm phát hành
        $data['yearR']=DB::table('movie')->groupBy('year')->get();


        //Top View
        // $day_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('day_views')->limit(20)->get();
        // $month_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('month_views')->limit(20)->get();
        // $year_views = DB::table('movie')->join('episode','movie.movie_id','=','episode.movie_id')->leftJoin('movie_detail','movie.movie_id','=','movie_detail.movie_id')->select('movie.*', DB::raw('SUM(day_view) as day_views, SUM(month_view) as month_views, SUM(year_view) as year_views, AVG(rate) as rate'))->where([['movie.status','1'],['episode.status','1']])->groupBy('movie.movie_id')->orderBy('year_views')->limit(20)->get();
        
//Top View
$data['week_views'] = $this->get_movie_order_by('week_views');
$data['month_views']= $this->get_movie_order_by('month_views');
$data['year_views']= $this->get_movie_order_by('year_views');

        // $data['day_views'] = $day_views;
        // $data['month_views']= $month_views;
        // $data['year_views']= $year_views;

        
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

        
        if($sl_all==""){
            $sl_all="'%'";
        }
        if( $category==""){
            $category="%";
        }
        if( $kind==""){
            $kind="%";
        }
        if( $nation=="" ){
            $nation="%";
        }
        if( $year==""){
            $year="%";
        }
        $item_page=8;

        $url=$request->fullUrl();
        parse_str(parse_url($url)['query'], $params);
     
        // // $page=1;
        

        if(!isset($_GET['page'])){
            $number_page=1;
        }
        else{
            $page=$_GET['page'];
            $number_page=(int)$page;
        }
        //return response()->json($number_page);
        
        $offset=((int)$number_page-1)*$item_page;
       

        $category_filter="SELECT mov.*, sum(episode.view) as views from (SELECT movie.* FROM movie LEFT JOIN category_detail on movie.movie_id=category_detail.movie_id LEFT JOIN category on category_detail.category_id=category.category_id LEFT JOIN nation on movie.nation_id=nation.nation_id WHERE category.category_id like '$category' AND nation.nation_id like '$nation' AND movie.year like '$year' GROUP BY movie.movie_id) as mov LEFT JOIN category_detail on mov.movie_id = category_detail.movie_id LEFT JOIN category on category_detail.category_id = category_detail.category_id LEFT JOIN episode on mov.movie_id = episode.movie_id WHERE category.category_id like '$kind' GROUP BY mov.movie_id ORDER BY $sl_all DESC LIMIT $item_page OFFSET $offset";
        // 
         $totalRecord="SELECT COUNT(movie_id) FROM (SELECT mov.*, sum(episode.view) as views from (SELECT movie.* FROM movie LEFT JOIN category_detail on movie.movie_id=category_detail.movie_id LEFT JOIN category on category_detail.category_id=category.category_id LEFT JOIN nation on movie.nation_id=nation.nation_id WHERE category.category_id like '$category' AND nation.nation_id like '$nation' AND movie.year like '$year' GROUP BY movie.movie_id) as mov LEFT JOIN category_detail on mov.movie_id = category_detail.movie_id LEFT JOIN category on category_detail.category_id = category_detail.category_id LEFT JOIN episode on mov.movie_id = episode.movie_id WHERE category.category_id like '$kind' GROUP BY mov.movie_id ORDER BY $sl_all DESC) AS movi";
      



     $data['category_filter']=DB::select($category_filter);

       $totalRecord=DB::select($totalRecord);
      
      foreach($totalRecord as $key => $value)
      {
          $totalRecord[$key] = (array) $value;
      }   
      /*** show the results ***/  
      $totalItems= $totalRecord[0]['COUNT(movie_id)'];
      //return response()->json($totalItems);
      if((int)$totalItems % $item_page==0){
            $totalPages=(int)$totalItems / $item_page;
      }
      else{
        $totalPages=(int)$totalItems / $item_page +1;
      }

     
     //$duyy=(int)$duy;
   // var_dump($params);
//    foreach($params as $key => $value)
//    {
//        $params[$key] = (array) $value;
//    }   
//    /*** show the results ***/  
//    $page= $params[0]['page'];
    
      //return response()->json($duyy);
       

//return response()->json($duy);
       // return response()->json($data);

    
        return view('frontend.filtermovie',$data)->with('episode_nums',$episode_nums)->with("view_nums",$view_nums)->with("item_page",$item_page)->with("totalPages",$totalPages)->with("number_page",$number_page);
        
    }
  
    private function get_movie_order_by($option){
        return DB::select("SELECT movie.movie_id, movie.movie_name, movie.url_image, SUM(episode.week_view) as week_views, SUM(episode.month_view) as month_views, SUM(episode.year_view) as year_views, a.rating as rate from movie JOIN episode on movie.movie_id = episode.movie_id LEFT JOIN (select movie_id, AVG(rate) as rating from movie_detail GROUP BY movie_id) as a on movie.movie_id = a.movie_id WHERE movie.status=1 and episode.status=1 GROUP BY movie.movie_id, movie.movie_name ORDER BY $option DESC");

    }

}
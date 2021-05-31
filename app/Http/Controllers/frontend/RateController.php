<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RateController extends Controller
{
    public function postRate(Request $request){   
        $data = array(); 
        $data['rate'] = (int)$request->index;
        $data['follow'] = 0;
        $data['status'] = 1;
        $data['movie_id'] = (int)$request->product_id;
        $data['user_id'] = Session::get('user_id');

        $user = DB::table('movie_detail')->Where('movie_detail.movie_id',$request->product_id)->where('user_id',Session::get('user_id'))->first();
        if (isset($user)) {
            DB::table('movie_detail')->Where('movie_detail.movie_id',$request->product_id)->where('user_id',Session::get('user_id'))->update($data);
        }else{
            DB::table('movie_detail')->insert($data);
        }
        return redirect()->route('index');
    }
    public function getRateByMovie($movies){
        $rates = array();
        foreach($movies as &$movie){
            $rate = DB::table('movie_detail')->where('movie_id',$movie->movie_id)->avg('rate');
            $rates[$movie->movie_id] = round($rate,1);
        }
        return $rates;
    }
    public function getCountByUser($movie_id)
    {
        return 
        $user_rates = DB::table('movie_detail')->where('movie_detail.movie_id',$movie_id)->count('user_id');
    }
}
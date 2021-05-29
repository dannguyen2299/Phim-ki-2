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
        // return response()->json($data);
    }
}
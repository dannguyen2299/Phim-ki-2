<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdsController extends Controller
{
    public function getAdsByLocation($location){
        if($location==1){
            $data['ads_banner1']=DB::table('advertisement')->where('ad_location',1)->where('status',1)->orderBy('ad_id','desc')->first();
            return $data['ads_banner1'];
        }else{
            $data['ads_banner2']=DB::table('advertisement')->where('ad_location',2)->where('status',1)->orderBy('ad_id','desc')->get(); 
            return $data['ads_banner2'];
        }
    }
}

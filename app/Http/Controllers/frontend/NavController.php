<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class NavController extends Controller
{
    public function getNation(){
        return $data['nation'] = DB::table('nation')->where('status','1')->get();
    }
    public function getCategory(){
        return $data['category_l'] = DB::table('category')->where('status','1')->get();
    }
}

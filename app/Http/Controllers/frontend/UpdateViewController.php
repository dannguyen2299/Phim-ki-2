<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UpdateViewController extends Controller
{
    public function update_view(Request $request){
        $episode = DB::table('episode')->where('episode_id',$request->episode_id)->first();
        $view = $episode->view + 1;
        DB::table('episode')->where('episode_id',$request->episode_id)->update(['view'=>$view]);
        return redirect()->route('index');
    }
}

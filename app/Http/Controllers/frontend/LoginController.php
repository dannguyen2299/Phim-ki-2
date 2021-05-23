<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    function getLogin(){
        $data['nation'] = DB::table('nation')->get();
        $data['category_l'] = DB::table('category')->get();
        return view('frontend.login',$data);
    }
    function processLogin(Request $rq){

        // $user = DB::table('user')->where('email','=',$rq->email)->where('password',$rq->password)->where('status','=',1)->first();
        $email = $rq->email;
        $password = $rq->password;

        if(Auth::attempt(['email'=>$email,'password'=>$password,'status'=>1])){
            Session::put('user_id',Auth::user()->user_id);
            Session::put('name',Auth::user()->name);
            Session::put('role_id',Auth::user()->role_id);
            
            if(Session::get('role_id')==3){
                return redirect()->route('index');
            }else{
                return redirect()->route('admin');
            }

        }else{
            $error = "Đăng nhập của bạn không đúng!";
            return redirect()->route('login')->with("error",$error);
        }
    }
    function logout(){
        Session::flush();
        return redirect()->route('index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginBRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class Login_backController extends Controller
{
    function getLoginB(){
        return view('admin.login');
    }
  function postLogin(LoginBRequest $r){
    //   $email=$r->email;
    //   $password=$r->password;
    // if(Auth::attempt(['email' => $email, 'password' => $password])){
    //     return redirect('admin_1');
    // }else{
    //     return redirect()->back();
    // } 

    
  }
}

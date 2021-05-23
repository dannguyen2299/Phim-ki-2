<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\LoginBRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{   

    function getUser(){
        $list_user = DB::select('SELECT user.user_id, user.name,user.email,user.password,role.role_name,user.status FROM user 
        INNER JOIN role on user.role_id = role.role_id
        ');
        return view('admin.user.all_user')->with('list_user',$list_user);
    }

    function addUser(){
        $role_user = DB::table('role')->orderByDesc('role_id')->get();
        return view('admin.user.add_user')->with('role_user',$role_user);
    }

    function saveUser(Request $request){
        Session::put('message',null);
        Session::put('message_1',null);

        try{
            $data = array();
            $data['email'] = $request->user_email;
            $data['password'] = $request->user_password;
            $data['name'] = $request->user_name;
            $data['role_id'] = $request->user_role;
            $data['status'] = $request->user_status;
            DB::table('user')->insert($data);
            Session::put('message','Add Category Successfully');        
        }catch(Exception $e){
            Session::put('message_1','Error insert Database because same email');

        }
        return Redirect::to('admin_1/add-user');
       
    }
    public function active($user_id){
        DB::table('user')->where('user_id','=',$user_id)->update(['status'=>1]);
        return Redirect::to('admin_1/user');
    }

    public function unactive($user_id){
        DB::table('user')->where('user_id','=',$user_id)->update(['status'=>0]);
        return Redirect::to('admin_1/user');
    }

    function delete_user($user_id){
        DB::table('user')->where('user_id',$user_id)->delete();
        return Redirect::to('admin_1/user');
    }
    function edit_user($user_id){
        $role_user = DB::table('role')->get();
        $user = DB::table('user')->where('user_id',$user_id)->get(); 
        return view('admin.user.edit_user')->with('user',$user)->with('role_user',$role_user);
    }
    function update_user(Request $request, $user_id){
        try{
        
        
        $data['email'] = $request->user_email;
        $data['password'] = $request->user_password;
        $data['name'] = $request->user_name;
        $data['role_id'] = $request->user_role;
        $data['status'] = $request->user_status;

        DB::table('user')->where('user_id','=',$user_id)->update($data);
        Session::put('message','Update Category Successfully');
        }catch(Exception $e){
            Session::put('message_1','Error insert Database because same email');

        }
        return Redirect::to('admin_1/user');
    }
    
}

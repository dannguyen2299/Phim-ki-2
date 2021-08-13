<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function add_category(Request $request){
        return view('admin.category.add');
    }
    
    public function edit_category($category_id){
        $category = DB::table('category')->where('category_id','=',$category_id)->get();
        return view('admin.category.edit')->with('category',$category);
    }
    
    public function update_category(Request $request, $category_id){
        $data = array();
        $data['category_name'] = $request->category_name==''?$message="Your activity Unsuccessfully":$request->category_name;
        $data['status'] = $request->sl_status==''?$message="Your activity Unsuccessfully":$request->sl_status;
        if ($message){
            Session::put('message',$message);   
            return Redirect::to('admin_1/list-category');
        }
        DB::table('category')->where('category_id','=',$category_id)->update($data);
        Session::put('message','Update Category Successfully');
        return Redirect::to('admin_1/list-category');
    }
    
    public function save_category(Request $request){
        $data = array();
        $data['category_name'] = $request->category_name==''?$message="Your activity Unsuccessfully":$request->category_name;
        $data['status'] = $request->sl_status==''?$message="Your activity Unsuccessfully":$request->sl_status;
        if ($message){
            Session::put('message',$message);   
            return Redirect::to('admin_1/add-category');
        }
        DB::table('category')->insert($data);
        Session::put('message','Add Category Successfully');
        return Redirect::to('admin_1/add-category');
    }
    
    public function list_category(){
        $all = DB::table('category')->get();
        return view('admin.category.list')->with('all_category',$all);
    }

    public function delete_category($category_id){
        DB::table('category')->where('category_id',$category_id)->delete();
        Session::put('message','Delete Category Successfully');
        return Redirect::to('admin_1/list-category');
    }

    public function active($category_id){
        DB::table('category')->where('category_id','=',$category_id)->update(['status'=>1]);
        Session::put('message','Active Category Successfully');
        return Redirect::to('admin_1/list-category');
    }

    public function unactive($category_id){
        DB::table('category')->where('category_id','=',$category_id)->update(['status'=>0]);
        Session::put('message','Unactive Category Successfully');
        return Redirect::to('admin_1/list-category');
    }
}

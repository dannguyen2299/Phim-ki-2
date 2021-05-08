<?php

namespace App\Http\Controllers;

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
        $category = DB::table('category')->where('id_category','=',$category_id)->get();
        return view('admin.category.edit')->with('category',$category);
    }
    
    public function update_category(Request $request, $category_id){
        $data = array();
        $data['name_category'] = $request->category_name;
        $data['status'] = $request->sl_status;

        DB::table('category')->where('id_category','=',$category_id)->update($data);
        Session::put('message','Update Category Successfully');
        return Redirect::to('list_category');
    }
    
    public function save_category(Request $request){
        $data = array();
        $data['name_category'] = $request->category_name;
        $data['status'] = $request->sl_status;

        DB::table('category')->insert($data);
        Session::put('message','Add Category Successfully');
        return Redirect::to('add_category');
    }
    
    public function list_category(){
        $all = DB::table('category')->get();
        return view('admin.category.list')->with('all_category',$all);
    }

    public function delete_category($category_id){
        DB::table('category')->where('id_category',$category_id)->delete();
        Session::put('message','Delete Category Successfully');
        return Redirect::to('list_category');
    }
}

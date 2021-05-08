<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add_category(){
        return view('admin.category.add');
    }
    
    public function edit_category(){
        return view('admin.category.edit');
    }
    
    public function list_category(){
        return view('admin.category.list');
    }
}

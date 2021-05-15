<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    function getBackend(){
        return view('admin.admin_layout');
    }
}

<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    function getBackend(){
        return view('admin.admin_layout');
    }
}

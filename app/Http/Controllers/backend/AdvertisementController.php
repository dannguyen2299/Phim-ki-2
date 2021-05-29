<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AdvertisementController extends Controller
{
    public function list_advertisement(){
        $advertisements = DB::table('advertisement')->get();
        return view('admin.advertisement.list')->with('advertisements',$advertisements);
    }
    public function add_advertisement(){
        return view('admin.advertisement.add');
    }
    public function save_advertisement(Request $request){
        $data = array();
        $data['ad_name'] = $request->ad_name;
        $data['partner'] = $request->partner;
        $data['partner_email'] = $request->partner_email;
        $data['partner_phone'] = $request->partner_phone;
        $data['url_banner'] = $request->url_banner;
        $data['link_banner'] = $request->link_banner;
        $data['start_date'] = $request->start_date;
        $data['end_date'] = $request->end_date;
        $data['price'] = $request->price;
        $data['have_paid'] = $request->have_paid;
        $data['ad_location'] = $request->ad_location;
        $data['status'] = $request->status;

        DB::table('advertisement')->insert($data);
        Session::put('message','Add Advertisement Successfully');
        return Redirect::to('admin_1/add-advertisement');
    }
    public function edit_advertisement($id){
        $advertisement = DB::table('advertisement')->where('ad_id',$id)->get()[0];
        return view('admin.advertisement.edit')->with('advertisement',$advertisement);
    }
    public function update_advertisement(Request $request, $id){
        $data = array();
        $data['ad_name'] = $request->ad_name;
        $data['partner'] = $request->partner;
        $data['partner_email'] = $request->partner_email;
        $data['partner_phone'] = $request->partner_phone;
        $data['url_banner'] = $request->url_banner;
        $data['link_banner'] = $request->link_banner;
        $data['start_date'] = $request->start_date;
        $data['end_date'] = $request->end_date;
        $data['price'] = $request->price;
        $data['have_paid'] = $request->have_paid;
        $data['ad_location'] = $request->ad_location;
        $data['status'] = $request->status;

        DB::table('advertisement')->where('ad_id',$id)->update($data);
        Session::put('message','Update Advertisement Successfully');
        return Redirect::to('admin_1/list-advertisement');
    }
    public function delete_advertisement($id){
        DB::table('advertisement')->where('ad_id',$id)->delete();
        Session::put('message','Delete Advertisement Successfully');
        return Redirect::to('admin_1/list-advertisement');
    }
    public function active($id){
        DB::table('advertisement')->where('ad_id','=',$id)->update(['status'=>1]);
        Session::put('message','Active Advertisement Successfully');
        return Redirect::to('admin_1/list-advertisement');
    }

    public function unactive($id){
        DB::table('advertisement')->where('ad_id','=',$id)->update(['status'=>0]);
        Session::put('message','Unactive Advertisement Successfully');
        return Redirect::to('admin_1/list-advertisement');
    }
}

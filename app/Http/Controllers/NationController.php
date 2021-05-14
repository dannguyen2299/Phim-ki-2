<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    
    use Illuminate\Support\Facades\DB;
    use App\Http\Requests;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\Redirect;

    class NationController extends Controller{


        public function add_nation(Request $request){
            return view('admin.nation.add');
            
        }
        
        public function edit_nation($nation_id){
            $nation = DB::table('nation')->where('nation_id','=',$nation_id)->get();
            return view('admin.nation.edit')->with('nation',$nation);
        }
        
        public function update_nation(Request $request, $nation_id){
            $data = array();
            $data['nation_name'] = $request->nation_name;
            $data['status'] = $request->sl_status;
    
            DB::table('nation')->where('nation_id','=',$nation_id)->update($data);
            Session::put('message','Update Nation Successfully');
            return Redirect::to('admin_1/list-nation');
        }
        
        public function save_nation(Request $request){
            $data = array();
            $data['nation_name'] = $request->nation_name;
            $data['status'] = $request->sl_status;
    
            DB::table('nation')->insert($data);
            Session::put('message','Add Nation Successfully');
            return Redirect::to('admin_1/add-nation');
        }
        
        public function list_nation(){
            $all = DB::table('nation')->get();
            return view('admin.nation.list')->with('all_nation',$all);
        }
    
        public function delete_nation($nation_id){
            DB::table('nation')->where('nation_id',$nation_id)->delete();
            Session::put('message','Delete Nation Successfully');
            return Redirect::to('admin_1/list-nation');
        }
        
        public function active($nation_id){
            DB::table('nation')->where('nation_id','=',$nation_id)->update(['status'=>1]);
            Session::put('message','Active Nation Successfully');
            return Redirect::to('admin_1/list-nation');
        }

        public function unactive($nation_id){
            DB::table('nation')->where('nation_id','=',$nation_id)->update(['status'=>0]);
            Session::put('message','Unactive Nation Successfully');
            return Redirect::to('admin_1/list-nation');
        }
    }
?>
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('123');
        DB::table('user')->delete();
        DB::table('user')->insert([
            ['user_id'=>1,'email'=>'tranduy@gmail.co','password'=>$password,'name'=>'Trần Thanh Duy','provider'=>'Super Admin','role_id'=>1,'status'=>1],
            ['user_id'=>2,'email'=>'huyhoang@gmail.com','password'=>$password,'name'=>'Phan Huy Hoàng','provider'=>'Super Admin','role_id'=>1,'status'=>1],
            ['user_id'=>3,'email'=>'thanh@gmail.com','password'=>$password,'name'=>'Kiều Đăng Thành','provider'=>'Super Admin','role_id'=>'2','status'=>0],
            ['user_id'=>4,'email'=>'tuananh@gmail.com','password'=>$password,'name'=>'Phạm Tuấn Anh','provider'=>'Super Admin','role_id'=>3,'status'=>1],
            ['user_id'=>5,'email'=>'dan@gmail.com','password'=>$password,'name'=>'Nguyễn Viết Dân','provider'=>'Super Admin','role_id'=>1,'status'=>0],
          
        ]);
        //
    }
}

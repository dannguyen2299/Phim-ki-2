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
        DB::table('user')->delete();
        DB::table('user')->insert([
            ['user_id'=>1,'email'=>'tranduy@gmail.com','username'=>'admin','name'=>'Trần Thanh Duy','created_at'=>Carbon::create('1999-02-17'),'role_id'=>1,'status'=>1],
            ['user_id'=>2,'email'=>'huyhoang@gmail.com','username'=>'admin1','name'=>'Phan Huy Hoàng','created_at'=>Carbon::create('1999-02-17'),'role_id'=>1,'status'=>1],
            ['user_id'=>3,'email'=>'thanh@gmail.com','username'=>'admin2','name'=>'Kiều Đăng Thành','created_at'=>Carbon::create('1999-02-17'),'role_id'=>'2','status'=>0],
            ['user_id'=>4,'email'=>'tuananh@gmail.com','username'=>'admin3','name'=>'Phạm Tuấn Anh','created_at'=>Carbon::create('1999-02-17'),'role_id'=>1,'status'=>1],
            ['user_id'=>5,'email'=>'dan@gmail.com','username'=>'admin4','name'=>'Nguyễn Viết Dân','created_at'=>Carbon::create('1999-02-17'),'role_id'=>1,'status'=>0],
            ['user_id'=>6,'email'=>'thanhyeuquynh@gmail.com','username'=>'admin5','name'=>'T S2 Q','created_at'=>Carbon::create('1999-02-17'),'role_id'=>1,'status'=>1],
            ['user_id'=>7,'email'=>'quynhthichthanh@gmail.com','username'=>'admin6','name'=>'Q S2 T','created_at'=>Carbon::create('1999-02-17'),'role_id'=>1,'status'=>0]

        ]);
        //
    }
}

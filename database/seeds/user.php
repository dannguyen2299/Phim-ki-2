<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            ['user_id'=>1,'email'=>'tranduy@gmail.com','username'=>'admin','pass'=>'123456','name'=>'Trần Thanh Duy','status'=>1],
            ['user_id'=>2,'email'=>'huyhoang@gmail.com','username'=>'admin1','pass'=>'123456','name'=>'Phan Huy Hoàng','status'=>1],
            ['user_id'=>3,'email'=>'thanh@gmail.com','username'=>'admin2','pass'=>'123456','name'=>'Kiều Đăng Thành','status'=>0],
            ['user_id'=>4,'email'=>'tuananh@gmail.com','username'=>'admin3','pass'=>'123456','name'=>'Phạm Tuấn Anh','status'=>1],
            ['user_id'=>5,'email'=>'dan@gmail.com','username'=>'admin4','pass'=>'123456','name'=>'Nguyễn Viết Dân','status'=>0],
            ['user_id'=>6,'email'=>'thanhyeuquynh@gmail.com','username'=>'admin5','pass'=>'123456','name'=>'T S2 Q','status'=>1],
            ['user_id'=>7,'email'=>'quynhthichthanh@gmail.com','username'=>'admin6','pass'=>'123456','name'=>'Q S2 T','status'=>0],

        ]);
        //
    }
}

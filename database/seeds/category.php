<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category')->delete();
         DB::table('category')->insert([
            ['id_category'=>1,'name_category'=>'Phim Bộ','status'=>1],
            ['id_category'=>2,'name_category'=>'Phim Lẻ','status'=>1],
            ['id_category'=>3,'name_category'=>'Phim Thuyết Minh','status'=>0],
            ['id_category'=>4,'name_category'=>'Phim 18+','status'=>0],
            ['id_category'=>5,'name_category'=>'Phim Taihen','status'=>1],
            ['id_category'=>6,'name_category'=>'Phim Nhật Bổn','status'=>1],
            ['id_category'=>7,'name_category'=>'Phim Việt Nam','status'=>1],
            ['id_category'=>8,'name_category'=>'Phim Việt Nam','status'=>1],
            ['id_category'=>9,'name_category'=>'Phim Việt','status'=>1],
         ]);
    }
}

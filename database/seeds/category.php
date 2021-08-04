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
            ['category_id'=>1,'category_name'=>'Phim Bộ','status'=>1,'parentID'=>1],
            ['category_id'=>2,'category_name'=>'Phim Lẻ','status'=>1,'parentID'=>1],
            ['category_id'=>3,'category_name'=>'Phim Thuyết Minh','status'=>0,'parentID'=>0],
            ['category_id'=>4,'category_name'=>'Phim 18+','status'=>0,'parentID'=>0],
            ['category_id'=>5,'category_name'=>'Phim Taihen','status'=>1,'parentID'=>0],
            ['category_id'=>6,'category_name'=>'Phim Nhật Bổn','status'=>1,'parentID'=>0],
            ['category_id'=>7,'category_name'=>'Phim Việt Nam','status'=>1,'parentID'=>0],
            ['category_id'=>8,'category_name'=>'Phim Việt Nam','status'=>1,'parentID'=>0],
            ['category_id'=>9,'category_name'=>'Phim Việt','status'=>1,'parentID'=>0]
         ]);
    }
}

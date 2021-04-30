<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class message extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('message')->delete();
        DB::table('message')->insert([
            ['id_message'=>1,'name'=>'duy','email'=>'duy@gmail.com','message'=>'Không xem được phim','id_episode'=>1],
            ['id_message'=>2,'name'=>'thanh','email'=>'thanh@gmail.com','message'=>'Xem không được phim','id_episode'=>1],
            ['id_message'=>3,'name'=>'dan','email'=>'dan@gmail.com','message'=>'Phim không xem được','id_episode'=>2],
            ['id_message'=>4,'name'=>'hoang','email'=>'hoang@gmail.com','message'=>'Xem được phim không','id_episode'=>2],
            ['id_message'=>5,'name'=>'anh','email'=>'anh@gmail.com','message'=>'Phim được xem không','id_episode'=>3],
        ]);
    }
}

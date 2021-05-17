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
            ['message_id'=>1,'user_name'=>'duy','user_email'=>'duy@gmail.com','content'=>'Không xem được phim','episode_id'=>1],
            ['message_id'=>2,'user_name'=>'thanh','user_email'=>'thanh@gmail.com','content'=>'Xem không được phim','episode_id'=>1],
            ['message_id'=>3,'user_name'=>'dan','user_email'=>'dan@gmail.com','content'=>'Phim không xem được','episode_id'=>2],
            ['message_id'=>4,'user_name'=>'hoang','user_email'=>'hoang@gmail.com','content'=>'Xem được phim không','episode_id'=>2],
            ['message_id'=>5,'user_name'=>'anh','user_email'=>'anh@gmail.com','content'=>'Phim được xem không','episode_id'=>3]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class report extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('report')->delete();
        DB::table('report')->insert([
            ['report_id'=>1,'content'=>'Không xem được phim','created_at'=>Carbon::create('1999-02-17'),'episode_id'=>1,'user_id'=>1],
            ['report_id'=>2,'content'=>'Xem không được phim','created_at'=>Carbon::create('1999-02-17'),'episode_id'=>1,'user_id'=>2],
            ['report_id'=>3,'content'=>'Phim không xem được','created_at'=>Carbon::create('1999-02-17'),'episode_id'=>2,'user_id'=>3],
            ['report_id'=>4,'content'=>'Xem được phim không','created_at'=>Carbon::create('1999-02-17'),'episode_id'=>2,'user_id'=>1],
            ['report_id'=>5,'content'=>'Phim được xem không','created_at'=>Carbon::create('1999-02-17'),'episode_id'=>3,'user_id'=>5]
        ]);
    }
}

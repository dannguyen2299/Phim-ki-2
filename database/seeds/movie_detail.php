<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class movie_detail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movie_detail')->delete();
        DB::table('movie_detail')->insert([
            ['idd'=>1,'rate'=>5,'follow'=>1,'status'=>1,'movie_id'=>1,'user_id'=>1],
            ['idd'=>2,'rate'=>6,'follow'=>0,'status'=>0,'movie_id'=>1,'user_id'=>2],
            ['idd'=>3,'rate'=>7,'follow'=>1,'status'=>1,'movie_id'=>2,'user_id'=>2],
            ['idd'=>4,'rate'=>8,'follow'=>0,'status'=>0,'movie_id'=>2,'user_id'=>1],
            ['idd'=>5,'rate'=>9,'follow'=>1,'status'=>1,'movie_id'=>1,'user_id'=>3],
            ['idd'=>6,'rate'=>10,'follow'=>1,'status'=>0,'movie_id'=>2,'user_id'=>1]
        ]);
    }
}

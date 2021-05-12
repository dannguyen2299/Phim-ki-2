<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class category_detail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category_detail')->delete();
        DB::table('category_detail')->insert([
            ['idd'=>1,'status'=>1,'movie_id'=>1,'category_id'=>1],
            ['idd'=>2,'status'=>0,'movie_id'=>1,'category_id'=>1],
            ['idd'=>3,'status'=>1,'movie_id'=>2,'category_id'=>2],
            ['idd'=>4,'status'=>0,'movie_id'=>2,'category_id'=>2],
            ['idd'=>5,'status'=>1,'movie_id'=>1,'category_id'=>1],
            ['idd'=>6,'status'=>0,'movie_id'=>3,'category_id'=>3],
        ]);
    }
}

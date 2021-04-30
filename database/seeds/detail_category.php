<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class detail_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detail_category')->delete();
        DB::table('detail_category')->insert([
            ['idd'=>1,'status'=>1,'id_film'=>1,'id_category'=>1],
            ['idd'=>2,'status'=>0,'id_film'=>1,'id_category'=>1],
            ['idd'=>3,'status'=>1,'id_film'=>2,'id_category'=>2],
            ['idd'=>4,'status'=>0,'id_film'=>2,'id_category'=>2],
            ['idd'=>5,'status'=>1,'id_film'=>1,'id_category'=>1],
            ['idd'=>6,'status'=>0,'id_film'=>3,'id_category'=>3],
        ]);
    }
}

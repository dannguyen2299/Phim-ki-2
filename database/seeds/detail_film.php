<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class detail_film extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detail_film')->delete();
        DB::table('detail_film')->insert([
            ['idd'=>1,'rate'=>5,'follow'=>100,'status'=>1,'id_film'=>1,'id_user'=>1],
            ['idd'=>2,'rate'=>6,'follow'=>200,'status'=>0,'id_film'=>1,'id_user'=>2],
            ['idd'=>3,'rate'=>7,'follow'=>300,'status'=>1,'id_film'=>2,'id_user'=>2],
            ['idd'=>4,'rate'=>8,'follow'=>400,'status'=>0,'id_film'=>2,'id_user'=>1],
            ['idd'=>5,'rate'=>9,'follow'=>500,'status'=>1,'id_film'=>1,'id_user'=>3],
            ['idd'=>6,'rate'=>10,'follow'=>600,'status'=>0,'id_film'=>2,'id_user'=>1],
        ]);
    }
}

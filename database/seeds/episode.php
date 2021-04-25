<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class episode extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episode')->delete();
        DB::table('episode')->insert([
            ['id_episode'=>1,'name_episode'=>'Nooooooooooo','url_first'=>'a.com','url_second'=>'b.com','status'=>1,'id_film'=>1],
            ['id_episode'=>2,'name_episode'=>'Nooooooooooo','url_first'=>'a.com','url_second'=>'b.com','status'=>0,'id_film'=>2],
            ['id_episode'=>3,'name_episode'=>'Nooooooooooo','url_first'=>'a.com','url_second'=>'b.com','status'=>1,'id_film'=>3],
            ['id_episode'=>4,'name_episode'=>'Nooooooooooo','url_first'=>'a.com','url_second'=>'b.com','status'=>0,'id_film'=>4],
            ['id_episode'=>5,'name_episode'=>'Nooooooooooo','url_first'=>'a.com','url_second'=>'b.com','status'=>1,'id_film'=>1],
        ]);
        //
    }
}

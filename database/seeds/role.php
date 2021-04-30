<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('role')->delete();
        DB::table('role')->insert([
            ['id_role'=>1,'name_role'=>'name1','status'=>1,'id_user'=>1],
            ['id_role'=>2,'name_role'=>'name2','status'=>0,'id_user'=>2],
            ['id_role'=>3,'name_role'=>'name3','status'=>1,'id_user'=>3],
            ['id_role'=>4,'name_role'=>'name4','status'=>0,'id_user'=>4],
            ['id_role'=>5,'name_role'=>'name5','status'=>1,'id_user'=>3],
            ['id_role'=>6,'name_role'=>'name6','status'=>0,'id_user'=>2],
        ]);
    }
}

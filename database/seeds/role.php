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
            ['role_id'=>1,'role_name'=>'name1','status'=>1,'user_id'=>1],
            ['role_id'=>2,'role_name'=>'name2','status'=>0,'user_id'=>2],
            ['role_id'=>3,'role_name'=>'name3','status'=>1,'user_id'=>3],
            ['role_id'=>4,'role_name'=>'name4','status'=>0,'user_id'=>4],
            ['role_id'=>5,'role_name'=>'name5','status'=>1,'user_id'=>3],
            ['role_id'=>6,'role_name'=>'name6','status'=>0,'user_id'=>2],
        ]);
    }
}

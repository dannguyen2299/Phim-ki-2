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
            ['role_id'=>1,'role_name'=>'Admin_1','status'=>1],
            ['role_id'=>2,'role_name'=>'Admin_2','status'=>1],
            ['role_id'=>3,'role_name'=>'Member','status'=>1]
        ]);
    }
}

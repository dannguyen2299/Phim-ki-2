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
            ['role_name'=>'Super Admin','level' => 0,'status'=>1],
            ['role_name'=>'Admin','level' => 1,'status'=>1],
            ['role_name'=>'Member','level' => 3,'status'=>1],
        ]);
    }
}

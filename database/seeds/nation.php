<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class nation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nation')->delete();
        DB::table('nation')->insert([
            ['nation_id'=>1,'nation_name'=>'Việt Nam','status'=>1],
            ['nation_id'=>2,'nation_name'=>'Mỹ','status'=>0],
            ['nation_id'=>3,'nation_name'=>'Trung Quốc','status'=>1],
            ['nation_id'=>4,'nation_name'=>'Ý','status'=>1],
            ['nation_id'=>5,'nation_name'=>'Ninh Bình','status'=>0],
            ['nation_id'=>6,'nation_name'=>'Thái Bình','status'=>1],
            ['nation_id'=>7,'nation_name'=>'Thanh Hóa','status'=>0],
        ]);
        //
    }
}

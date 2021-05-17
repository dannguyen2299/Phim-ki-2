<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class partner extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('partner')->delete();
        DB::table('partner')->insert([
            ['partner_id'=>1,'partner_name'=>1,'phone'=>'03246451321','email'=>'partner@gmail.com','address'=>'Hoang Mai Ha Noi 1','status'=>1],
            ['partner_id'=>2,'partner_name'=>1,'phone'=>'03246451321','email'=>'partner@gmail.com','address'=>'Hoang Mai Ha Noi 2','status'=>1],
            ['partner_id'=>3,'partner_name'=>2,'phone'=>'03246451321','email'=>'partner@gmail.com','address'=>'Hoang Mai Ha Noi 3','status'=>1],
            ['partner_id'=>4,'partner_name'=>2,'phone'=>'03246451321','email'=>'partner@gmail.com','address'=>'Hoang Mai Ha Noi 4','status'=>1],
            ['partner_id'=>5,'partner_name'=>1,'phone'=>'03246451321','email'=>'partner@gmail.com','address'=>'Hoang Mai Ha Noi 5','status'=>1],
            ['partner_id'=>6,'partner_name'=>3,'phone'=>'03246451321','email'=>'partner@gmail.com','address'=>'Hoang Mai Ha Noi 6','status'=>1]
        ]);
    }
}

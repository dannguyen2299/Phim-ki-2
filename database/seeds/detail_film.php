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
    }
}

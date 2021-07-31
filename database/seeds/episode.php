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
            ['episode_id'=>1,'episode_name'=>'Tập 1','url_first'=>'Ws-QlpSltr8','url_second'=>'Ws-QlpSltr8','view'=>1000,'status'=>1,'movie_id'=>1],
            ['episode_id'=>2,'episode_name'=>'Tập 2','url_first'=>'Ws-QlpSltr8','url_second'=>'Ws-QlpSltr8','view'=>120,'status'=>0,'movie_id'=>2],
            ['episode_id'=>3,'episode_name'=>'Tập 3','url_first'=>'Ws-QlpSltr8','url_second'=>'Ws-QlpSltr8','view'=>240,'status'=>1,'movie_id'=>3],
            ['episode_id'=>4,'episode_name'=>'Tập 4','url_first'=>'Ws-QlpSltr8','url_second'=>'Ws-QlpSltr8','view'=>2360,'status'=>0,'movie_id'=>4],
            ['episode_id'=>5,'episode_name'=>'Tập 5','url_first'=>'Ws-QlpSltr8','url_second'=>'Ws-QlpSltr8','view'=>6000,'status'=>1,'movie_id'=>1],

            // thêm mới
            ['episode_id'=>6,'episode_name'=>'Tập 1','url_first'=>'LDPVeaEsuaQ','url_second'=>'LDPVeaEsuaQ','view'=>115000,'status'=>1,'movie_id'=>333],
            ['episode_id'=>7,'episode_name'=>'Tập 2','url_first'=>'DEwSE_B_LmQ','url_second'=>'DEwSE_B_LmQ','view'=>88000,'status'=>1,'movie_id'=>333],
            ['episode_id'=>8,'episode_name'=>'Tập 3','url_first'=>'vvHX6wrKOkI','url_second'=>'vvHX6wrKOkI','view'=>75300,'status'=>1,'movie_id'=>333],
            ['episode_id'=>9,'episode_name'=>'Tập 4','url_first'=>'tZcmMK96Jdc','url_second'=>'tZcmMK96Jdc','view'=>123530,'status'=>1,'movie_id'=>333],


            ['episode_id'=>10,'episode_name'=>'Tập 1','url_first'=>'it60_ZIbdzE','url_second'=>'uGHIilh3Whg','view'=>86860,'status'=>1,'movie_id'=>61],
            ['episode_id'=>11,'episode_name'=>'Tập 2','url_first'=>'tThFiSfGEtg','url_second'=>'xajvh-S0HiM','view'=>76686,'status'=>1,'movie_id'=>61],
            ['episode_id'=>12,'episode_name'=>'Tập 3','url_first'=>'qUoVdg9DLoc','url_second'=>'lz5AXZ1QFj0','view'=>44554,'status'=>1,'movie_id'=>61],
            ['episode_id'=>13,'episode_name'=>'Tập 4','url_first'=>'MqXZK2wihj0','url_second'=>'TpgAfxpqeoo','view'=>60400,'status'=>1,'movie_id'=>61],
            ['episode_id'=>14,'episode_name'=>'Tập 5','url_first'=>'AO6khtUHHko','url_second'=>'AO6khtUHHko','view'=>63343,'status'=>1,'movie_id'=>61],
            ['episode_id'=>15,'episode_name'=>'Tập 6','url_first'=>'Vd8HYBLk5o4','url_second'=>'Vd8HYBLk5o4','view'=>12314,'status'=>1,'movie_id'=>61],
            ['episode_id'=>16,'episode_name'=>'Tập 7','url_first'=>'0yiBoQ9OTS0','url_second'=>'0yiBoQ9OTS0','view'=>24242,'status'=>1,'movie_id'=>61],
            ['episode_id'=>17,'episode_name'=>'Tập 8','url_first'=>'EBPmAbN842c','url_second'=>'EBPmAbN842c','view'=>42522,'status'=>1,'movie_id'=>61],

            ['episode_id'=>18,'episode_name'=>'Tập 1','url_first'=>'K7IShf7ofsA','url_second'=>'K7IShf7ofsA','view'=>86860,'status'=>1,'movie_id'=>16],
            ['episode_id'=>19,'episode_name'=>'Tập 2','url_first'=>'PG2IsSVRM4o','url_second'=>'PG2IsSVRM4o','view'=>76686,'status'=>1,'movie_id'=>16],
            ['episode_id'=>20,'episode_name'=>'Tập 3','url_first'=>'D1aHSQy5IXs','url_second'=>'D1aHSQy5IXs','view'=>44554,'status'=>1,'movie_id'=>16],
            ['episode_id'=>21,'episode_name'=>'Tập 4','url_first'=>'KrlUn9RGMWo','url_second'=>'KrlUn9RGMWo','view'=>60400,'status'=>1,'movie_id'=>16],
            ['episode_id'=>22,'episode_name'=>'Tập 5','url_first'=>'45Qy9Mg3owI','url_second'=>'45Qy9Mg3owI','view'=>63343,'status'=>1,'movie_id'=>16],
            ['episode_id'=>23,'episode_name'=>'Tập 6','url_first'=>'SVLJVA9LMpc','url_second'=>'SVLJVA9LMpc','view'=>12314,'status'=>1,'movie_id'=>16],
            ['episode_id'=>24,'episode_name'=>'Tập 7','url_first'=>'DW2o-kc70hA','url_second'=>'DW2o-kc70hA','view'=>24242,'status'=>1,'movie_id'=>16],
            ['episode_id'=>25,'episode_name'=>'Tập 8','url_first'=>'1wNqBPoWfDw','url_second'=>'1wNqBPoWfDw','view'=>42522,'status'=>1,'movie_id'=>16],


        ]);
        //
    }
}

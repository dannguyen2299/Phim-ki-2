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
            ['episode_id'=>1,'episode_name'=>'Tập 1','url_first'=>'https://www.youtube.com/embed/Ws-QlpSltr8','url_second'=>'https://www.youtube.com/embed/Ws-QlpSltr8','status'=>1,'movie_id'=>1],
            ['episode_id'=>2,'episode_name'=>'Tập 2','url_first'=>'https://www.youtube.com/embed/Ws-QlpSltr8','url_second'=>'https://www.youtube.com/embed/Ws-QlpSltr8','status'=>0,'movie_id'=>2],
            ['episode_id'=>3,'episode_name'=>'Tập 3','url_first'=>'https://www.youtube.com/embed/Ws-QlpSltr8','url_second'=>'https://www.youtube.com/embed/Ws-QlpSltr8','status'=>1,'movie_id'=>3],
            ['episode_id'=>4,'episode_name'=>'Tập 4','url_first'=>'https://www.youtube.com/embed/Ws-QlpSltr8','url_second'=>'https://www.youtube.com/embed/Ws-QlpSltr8','status'=>0,'movie_id'=>4],
            ['episode_id'=>5,'episode_name'=>'Tập 5','url_first'=>'https://www.youtube.com/embed/Ws-QlpSltr8','url_second'=>'https://www.youtube.com/embed/Ws-QlpSltr8','status'=>1,'movie_id'=>1],
        ]);
        //
    }
}

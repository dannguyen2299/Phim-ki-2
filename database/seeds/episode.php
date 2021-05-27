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
            ['episode_id'=>1,'episode_name'=>'Tập 1','url_first'=>'https://www.youtube.com/embed/Ws-QlpSltr8','url_second'=>'https://www.youtube.com/embed/QBiy3G0Opbs','view'=>1000,'status'=>1,'movie_id'=>1],
            ['episode_id'=>2,'episode_name'=>'Tập 2','url_first'=>'https://www.youtube.com/embed/xWWa66Ts4vM','url_second'=>'https://www.youtube.com/embed/2E_D132mOmA','view'=>120,'status'=>0,'movie_id'=>2],
            ['episode_id'=>3,'episode_name'=>'Tập 3','url_first'=>'https://www.youtube.com/embed/1X3wVtLM7Z0','url_second'=>'https://www.youtube.com/embed/XxlEGjjnyoo','view'=>240,'status'=>1,'movie_id'=>3],
            ['episode_id'=>4,'episode_name'=>'Tập 4','url_first'=>'https://www.youtube.com/embed/hvyPOrylF5E','url_second'=>'https://www.youtube.com/embed/RsZseLKXXUc','view'=>2360,'status'=>0,'movie_id'=>4],
            ['episode_id'=>5,'episode_name'=>'Tập 5','url_first'=>'https://www.youtube.com/embed/1X3wVtLM7Z0','url_second'=>'https://www.youtube.com/embed/2E_D132mOmA','view'=>6000,'status'=>1,'movie_id'=>1],
        ]);
        //
    }
}

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
            ['episode_id'=>1,'episode_name'=>'Nooooooooooo','url_first'=>'https://www.youtube.com/embed/Ws-QlpSltr8','url_second'=>'https://www.youtube.com/watch?v=RhPIciEZetE&ab_channel=MixiGaming','status'=>1,'movie_id'=>1],
            ['episode_id'=>2,'episode_name'=>'Nooooooooooo','url_first'=>'https://www.youtube.com/embed/h1ajyQo3oaM','url_second'=>'https://www.youtube.com/watch?v=RhPIciEZetE&ab_channel=MixiGaming','status'=>0,'movie_id'=>2],
            ['episode_id'=>3,'episode_name'=>'Nooooooooooo','url_first'=>'https://www.youtube.com/embed/KVHimR1vf0o','url_second'=>'https://www.youtube.com/watch?v=RhPIciEZetE&ab_channel=MixiGaming','status'=>1,'movie_id'=>3],
            ['episode_id'=>4,'episode_name'=>'Nooooooooooo','url_first'=>'https://www.youtube.com/embed/H96ceHhGtD8','url_second'=>'https://www.youtube.com/watch?v=RhPIciEZetE&ab_channel=MixiGaming','status'=>0,'movie_id'=>4],
            ['episode_id'=>5,'episode_name'=>'Nooooooooooo','url_first'=>'https://www.youtube.com/embed/Ws-QlpSltr8','url_second'=>'https://www.youtube.com/watch?v=RhPIciEZetE&ab_channel=MixiGaming','status'=>1,'movie_id'=>1],
        ]);
        //
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class movie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie')->delete();
        DB::table('movie')->insert([
            ['movie_id'=>1,'movie_name'=>'50 Sắc Thái','year'=>'2019','view'=>100000,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'a.url','url_image'=>'b.img','url_cmt_fb'=>'c.facebook','status'=>1,'nation_id'=>1],
            ['movie_id'=>2,'movie_name'=>'51 Sắc Thái','year'=>'2020','view'=>100000,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'a.url','url_image'=>'b.img','url_cmt_fb'=>'c.facebook','status'=>1,'nation_id'=>2],
            ['movie_id'=>3,'movie_name'=>'52 Sắc Thái','year'=>'2021','view'=>100000,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'a.url','url_image'=>'b.img','url_cmt_fb'=>'c.facebook','status'=>1,'nation_id'=>3],
            ['movie_id'=>4,'movie_name'=>'53 Sắc Thái','year'=>'2022','view'=>100000,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'a.url','url_image'=>'b.img','url_cmt_fb'=>'c.facebook','status'=>1,'nation_id'=>4],
            ['movie_id'=>5,'movie_name'=>'54 Sắc Thái','year'=>'2023','view'=>100000,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'a.url','url_image'=>'b.img','url_cmt_fb'=>'c.facebook','status'=>1,'nation_id'=>5],
            ['movie_id'=>6,'movie_name'=>'55 Sắc Thái','year'=>'2024','view'=>100000,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'a.url','url_image'=>'b.img','url_cmt_fb'=>'c.facebook','status'=>1,'nation_id'=>6],
        ]);
        //
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class film extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film')->delete();
        DB::table('film')->insert([
            ['id_film'=>1,'name_film'=>'50 Sắc Thái','year'=>'2019','number_view'=>100000,'introduce_film'=>'Phim kể về mối tình giữa T và Q','time'=>'1:08:00','url_trailer'=>'a.url','url_image'=>'b.img','url_image_2'=>'d.img','url_cmt_fb'=>'c.facebook','status'=>1,'id_nation'=>1],
            ['id_film'=>2,'name_film'=>'51 Sắc Thái','year'=>'2020','number_view'=>100000,'introduce_film'=>'Phim kể về mối tình giữa T và Q','time'=>'1:08:00','url_trailer'=>'a.url','url_image'=>'b.img','url_image_2'=>'d.img','url_cmt_fb'=>'c.facebook','status'=>1,'id_nation'=>2],
            ['id_film'=>3,'name_film'=>'52 Sắc Thái','year'=>'2021','number_view'=>100000,'introduce_film'=>'Phim kể về mối tình giữa T và Q','time'=>'1:08:00','url_trailer'=>'a.url','url_image'=>'b.img','url_image_2'=>'d.img','url_cmt_fb'=>'c.facebook','status'=>1,'id_nation'=>3],
            ['id_film'=>4,'name_film'=>'53 Sắc Thái','year'=>'2022','number_view'=>100000,'introduce_film'=>'Phim kể về mối tình giữa T và Q','time'=>'1:08:00','url_trailer'=>'a.url','url_image'=>'b.img','url_image_2'=>'d.img','url_cmt_fb'=>'c.facebook','status'=>1,'id_nation'=>4],
            ['id_film'=>5,'name_film'=>'54 Sắc Thái','year'=>'2023','number_view'=>100000,'introduce_film'=>'Phim kể về mối tình giữa T và Q','time'=>'1:08:00','url_trailer'=>'a.url','url_image'=>'b.img','url_image_2'=>'d.img','url_cmt_fb'=>'c.facebook','status'=>1,'id_nation'=>5],
            ['id_film'=>6,'name_film'=>'55 Sắc Thái','year'=>'2024','number_view'=>100000,'introduce_film'=>'Phim kể về mối tình giữa T và Q','time'=>'1:08:00','url_trailer'=>'a.url','url_image'=>'b.img','url_image_2'=>'d.img','url_cmt_fb'=>'c.facebook','status'=>1,'id_nation'=>6],
        ]);
        //
    }
}

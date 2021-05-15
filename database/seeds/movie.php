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
            ['movie_id'=>1,'movie_name'=>'50 Sắc Thái','year'=>'2019','total_eps'=>16,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'https://www.youtube.com/watch?v=RhPIciEZetE&ab_channel=MixiGaming','url_image'=>'https://lh3.googleusercontent.com/-X2cYTL2vNmg/YBIiaygwW_I/AAAAAABB-NM/z3h85BbyxY07Q8B3zaBcDbqH0XA77J89ACLcBGAsYHQ/1601822090731-3ad6153e803a52aaa29b0e7fa71d81f8.jpg','url_cmt_fb'=>'https://web_movie/1','status'=>1,'nation_id'=>1],
            ['movie_id'=>2,'movie_name'=>'51 Sắc Thái','year'=>'2020','total_eps'=>16,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'https://www.youtube.com/watch?v=RhPIciEZetE&ab_channel=MixiGaming','url_image'=>'https://lh3.googleusercontent.com/-X2cYTL2vNmg/YBIiaygwW_I/AAAAAABB-NM/z3h85BbyxY07Q8B3zaBcDbqH0XA77J89ACLcBGAsYHQ/1601822090731-3ad6153e803a52aaa29b0e7fa71d81f8.jpg','url_cmt_fb'=>'https://web_movie/2','status'=>1,'nation_id'=>2],
            ['movie_id'=>3,'movie_name'=>'52 Sắc Thái','year'=>'2021','total_eps'=>16,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'https://www.youtube.com/watch?v=RhPIciEZetE&ab_channel=MixiGaming','url_image'=>'https://lh3.googleusercontent.com/-X2cYTL2vNmg/YBIiaygwW_I/AAAAAABB-NM/z3h85BbyxY07Q8B3zaBcDbqH0XA77J89ACLcBGAsYHQ/1601822090731-3ad6153e803a52aaa29b0e7fa71d81f8.jpg','url_cmt_fb'=>'https://web_movie/3','status'=>1,'nation_id'=>3],
            ['movie_id'=>4,'movie_name'=>'53 Sắc Thái','year'=>'2022','total_eps'=>16,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'https://www.youtube.com/watch?v=RhPIciEZetE&ab_channel=MixiGaming','url_image'=>'https://lh3.googleusercontent.com/-X2cYTL2vNmg/YBIiaygwW_I/AAAAAABB-NM/z3h85BbyxY07Q8B3zaBcDbqH0XA77J89ACLcBGAsYHQ/1601822090731-3ad6153e803a52aaa29b0e7fa71d81f8.jpg','url_cmt_fb'=>'https://web_movie/4','status'=>1,'nation_id'=>4],
            ['movie_id'=>5,'movie_name'=>'54 Sắc Thái','year'=>'2023','total_eps'=>16,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'https://www.youtube.com/watch?v=RhPIciEZetE&ab_channel=MixiGaming','url_image'=>'https://lh3.googleusercontent.com/-X2cYTL2vNmg/YBIiaygwW_I/AAAAAABB-NM/z3h85BbyxY07Q8B3zaBcDbqH0XA77J89ACLcBGAsYHQ/1601822090731-3ad6153e803a52aaa29b0e7fa71d81f8.jpg','url_cmt_fb'=>'https://web_movie/5','status'=>1,'nation_id'=>5],
            ['movie_id'=>6,'movie_name'=>'55 Sắc Thái','year'=>'2024','total_eps'=>16,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'https://www.youtube.com/watch?v=RhPIciEZetE&ab_channel=MixiGaming','url_image'=>'https://lh3.googleusercontent.com/-X2cYTL2vNmg/YBIiaygwW_I/AAAAAABB-NM/z3h85BbyxY07Q8B3zaBcDbqH0XA77J89ACLcBGAsYHQ/1601822090731-3ad6153e803a52aaa29b0e7fa71d81f8.jpg','url_cmt_fb'=>'https://web_movie/6','status'=>1,'nation_id'=>6],
        ]);
        //
    }
}

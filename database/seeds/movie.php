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
            ['movie_id'=>1,'movie_name'=>'BÀN TAY DIỆT QUỶ','view'=>'1200','year'=>'2019','total_eps'=>16,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'https://www.youtube.com/embed/Ws-QlpSltr8','url_image'=>'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/b/t/btdq_main_poster_1.jpg','url_cmt_fb'=>'https://www.facebook.com/movie/group5/1','status'=>1,'nation_id'=>1],
 ['movie_id'=>2,'movie_name'=>'PALM SPRINGS: MỞ MẮT THẤY HÔM QUA','view'=>'1300','year'=>'2020','total_eps'=>16,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'https://www.youtube.com/embed/h1ajyQo3oaM','url_image'=>'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/t/e/teaser_poster_1_1__1.jpg','url_cmt_fb'=>'https://www.facebook.com/movie/group5/2','status'=>1,'nation_id'=>2],
['movie_id'=>3,'movie_name'=>'CỤC NỢ HÓA CỤC CƯNG','view'=>'1800','year'=>'2021','total_eps'=>16,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'https://www.youtube.com/embed/KVHimR1vf0o','url_image'=>'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/r/s/rsz_main_poster_cncc_1.jpg','url_cmt_fb'=>'https://www.facebook.com/movie/group5/3','status'=>1,'nation_id'=>3],
['movie_id'=>4,'movie_name'=>'ĐIỆP VIÊN SIÊU LẦY','view'=>'12200','year'=>'2022','total_eps'=>16,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'https://www.youtube.com/embed/H96ceHhGtD8','url_image'=>'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/m/a/main-poster_ms1_1.jpg','url_cmt_fb'=>'https://www.facebook.com/movie/group5/4','status'=>1,'nation_id'=>4],
['movie_id'=>5,'movie_name'=>'CHIẾN BINH CUỐI CÙNG: CỘI NGUỒN CỦA QUỶ','view'=>'11200','year'=>'2023','total_eps'=>16,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'https://www.youtube.com/embed/Ws-QlpSltr8','url_image'=>'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/p/o/poster-the-last-warrior_1__1.jpg','url_cmt_fb'=>'https://www.facebook.com/movie/group5/5','status'=>1,'nation_id'=>5],
['movie_id'=>6,'movie_name'=>'THÁM TỬ LỪNG DANH CONAN: VIÊN ĐẠN ĐỎ','view'=>'10200','year'=>'2024','total_eps'=>16,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'https://www.youtube.com/embed/RhPIciEZetE&ab_channel=MixiGaming','url_image'=>'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/c/o/conan_24_-_main_poster_1__1.jpg','url_cmt_fb'=>'https://www.facebook.com/movie/group5/6','status'=>1,'nation_id'=>6],
['movie_id'=>7,'movie_name'=>'TRÙM CUỐI SIÊU ĐẲNG','view'=>'9000','year'=>'2024','total_eps'=>16,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'https://www.youtube.com/embed/r_csOHN9JRI','url_image'=>'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/b/o/boss_level_-_payoff_poster_1__1.jpg','url_cmt_fb'=>'https://www.facebook.com/movie/group5/7','status'=>1,'nation_id'=>6],
['movie_id'=>8,'movie_name'=>'ONG NHÍ PHIÊU LƯU KÝ: GIẢI CỨU CÔNG CHÚA KIẾN','view'=>'9000','year'=>'2024','total_eps'=>16,'introduce'=>'Phim kể về mối tình giữa T và Q','length'=>'1:08:00','url_trailer'=>'https://www.youtube.com/embed/wWV4T5M6KHE','url_image'=>'https://www.cgv.vn/media/catalog/product/cache/1/small_image/190x260/052b7e4a4f6d2886829431e534ef7a43/m/a/main_poster_mtb_1__1.jpg','url_cmt_fb'=>'https://www.facebook.com/movie/group5/8','status'=>1,'nation_id'=>6],
            
        ]);
        //
    }
}

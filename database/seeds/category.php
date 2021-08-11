<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category')->delete();
        DB::table('category')->insert([
            ['category_id' => 1, 'category_name' => 'Phim Bộ', 'status' => 1,'parentID'=>1],
            ['category_id' => 2, 'category_name' => 'Phim Lẻ', 'status' => 1,'parentID'=>2],

            ['category_id' => 3, 'category_name' => 'Phim Chiếu Rạp', 'status' => 1,'parentID'=>0],
            ['category_id' => 4, 'category_name' => 'Phim 18+', 'status' => 1,'parentID'=>0],
            ['category_id' => 5, 'category_name' => 'Phim Châu Á', 'status' => 1,'parentID'=>0],
            ['category_id' => 6, 'category_name' => 'Phim Viễn Tưởng', 'status' => 1,'parentID'=>0],
            ['category_id' => 7, 'category_name' => 'Phim Kinh Dị', 'status' => 1,'parentID'=>0],
            ['category_id' => 8, 'category_name' => 'Phim Chiến Tranh', 'status' => 1,'parentID'=>0],

            ['category_id' => 9, 'category_name' => 'Phim Tâm Lý', 'status' => 1,'parentID'=>0],
            ['category_id' => 10, 'category_name' => 'Phim Hoạt Hình', 'status' => 1,'parentID'=>0],
            ['category_id' => 11, 'category_name' => 'Phim Hành Động', 'status' => 1,'parentID'=>0],
            ['category_id' => 12, 'category_name' => 'Phim Cổ Trang', 'status' => 1,'parentID'=>0],
            ['category_id' => 13, 'category_name' => 'Phim Thần Thoại', 'status' => 1,'parentID'=>0],
            ['category_id' => 14, 'category_name' => 'Phim Võ Thuật', 'status' => 1,'parentID'=>0],

        ]);
    }
}

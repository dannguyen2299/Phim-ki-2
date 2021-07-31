<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class category_detail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category_detail')->delete();
        DB::table('category_detail')->insert([

            ['idd' => 1, 'status' => 1, 'movie_id' => 1, 'category_id' => 1],
            ['idd' => 2, 'status' => 0, 'movie_id' => 1, 'category_id' => 1],
            ['idd' => 3, 'status' => 1, 'movie_id' => 2, 'category_id' => 2],
            ['idd' => 4, 'status' => 0, 'movie_id' => 2, 'category_id' => 2],
            ['idd' => 5, 'status' => 1, 'movie_id' => 1, 'category_id' => 1],
            ['idd' => 6, 'status' => 0, 'movie_id' => 3, 'category_id' => 3],

            // Thêm mới
            ['idd' => 7, 'status' => 1, 'movie_id' => 9, 'category_id' => 11],

            ['idd' => 8, 'status' => 1, 'movie_id' => 10, 'category_id' => 1],
            ['idd' => 9, 'status' => 1, 'movie_id' => 10, 'category_id' => 5],
            ['idd' => 10, 'status' => 1, 'movie_id' => 10, 'category_id' => 9],

            ['idd' => 11, 'status' => 1, 'movie_id' => 11, 'category_id' => 1],
            ['idd' => 12, 'status' => 1, 'movie_id' => 11, 'category_id' => 10],

            ['idd' => 13, 'status' => 1, 'movie_id' => 12, 'category_id' => 1],
            ['idd' => 14, 'status' => 1, 'movie_id' => 12, 'category_id' => 6],
            ['idd' => 15, 'status' => 1, 'movie_id' => 12, 'category_id' => 11],

            ['idd' => 16, 'status' => 1, 'movie_id' => 13, 'category_id' => 1],
            ['idd' => 17, 'status' => 1, 'movie_id' => 13, 'category_id' => 10],

            ['idd' => 18, 'status' => 1, 'movie_id' => 14, 'category_id' => 1],
            ['idd' => 19, 'status' => 1, 'movie_id' => 14, 'category_id' => 10],

            ['idd' => 20, 'status' => 1, 'movie_id' => 15, 'category_id' => 1],
            ['idd' => 21, 'status' => 1, 'movie_id' => 15, 'category_id' => 10],
            ['idd' => 22, 'status' => 1, 'movie_id' => 15, 'category_id' => 14],
            ['idd' => 23, 'status' => 1, 'movie_id' => 15, 'category_id' => 11],

            ['idd' => 24, 'status' => 1, 'movie_id' => 16, 'category_id' => 1],
            ['idd' => 25, 'status' => 1, 'movie_id' => 16, 'category_id' => 5],
            ['idd' => 26, 'status' => 1, 'movie_id' => 16, 'category_id' => 9],
            ['idd' => 27, 'status' => 1, 'movie_id' => 16, 'category_id' => 12],

            ['idd' => 28, 'status' => 1, 'movie_id' => 17, 'category_id' => 1],
            ['idd' => 29, 'status' => 1, 'movie_id' => 17, 'category_id' => 10],
            ['idd' => 30, 'status' => 1, 'movie_id' => 17, 'category_id' => 11],
            ['idd' => 31, 'status' => 1, 'movie_id' => 17, 'category_id' => 14],

            ['idd' => 32, 'status' => 1, 'movie_id' => 18, 'category_id' => 1],
            ['idd' => 33, 'status' => 1, 'movie_id' => 18, 'category_id' => 5],
            ['idd' => 34, 'status' => 1, 'movie_id' => 18, 'category_id' => 12],
            ['idd' => 35, 'status' => 1, 'movie_id' => 18, 'category_id' => 14],

            ['idd' => 36, 'status' => 1, 'movie_id' => 19, 'category_id' => 2],
            ['idd' => 37, 'status' => 1, 'movie_id' => 19, 'category_id' => 7],
            ['idd' => 38, 'status' => 1, 'movie_id' => 19, 'category_id' => 11],

            ['idd' => 39, 'status' => 1, 'movie_id' => 20, 'category_id' => 2],
            ['idd' => 40, 'status' => 1, 'movie_id' => 20, 'category_id' => 11],

            ['idd' => 41, 'status' => 1, 'movie_id' => 21, 'category_id' => 2],
            ['idd' => 42, 'status' => 1, 'movie_id' => 21, 'category_id' => 5],
            ['idd' => 43, 'status' => 1, 'movie_id' => 21, 'category_id' => 7],

            ['idd' => 44, 'status' => 1, 'movie_id' => 22, 'category_id' => 2],
            ['idd' => 45, 'status' => 1, 'movie_id' => 22, 'category_id' => 12],

            ['idd' => 46, 'status' => 1, 'movie_id' => 23, 'category_id' => 2],
            ['idd' => 47, 'status' => 1, 'movie_id' => 23, 'category_id' => 9],
            ['idd' => 48, 'status' => 1, 'movie_id' => 23, 'category_id' => 11],

            ['idd' => 49, 'status' => 1, 'movie_id' => 24, 'category_id' => 2],
            ['idd' => 50, 'status' => 1, 'movie_id' => 24, 'category_id' => 11],

            ['idd' => 51, 'status' => 1, 'movie_id' => 25, 'category_id' => 2],
            ['idd' => 52, 'status' => 1, 'movie_id' => 25, 'category_id' => 7],
            ['idd' => 53, 'status' => 1, 'movie_id' => 25, 'category_id' => 10],
            ['idd' => 54, 'status' => 1, 'movie_id' => 25, 'category_id' => 11],

            ['idd' => 55, 'status' => 1, 'movie_id' => 26, 'category_id' => 1],
            ['idd' => 56, 'status' => 1, 'movie_id' => 26, 'category_id' => 5],
            ['idd' => 57, 'status' => 1, 'movie_id' => 26, 'category_id' => 9],
            ['idd' => 58, 'status' => 1, 'movie_id' => 26, 'category_id' => 11],

            ['idd' => 59, 'status' => 1, 'movie_id' => 27, 'category_id' => 2],
            ['idd' => 60, 'status' => 1, 'movie_id' => 27, 'category_id' => 3],
            ['idd' => 61, 'status' => 1, 'movie_id' => 27, 'category_id' => 6],
            ['idd' => 62, 'status' => 1, 'movie_id' => 27, 'category_id' => 8],

            ['idd' => 63, 'status' => 1, 'movie_id' => 28, 'category_id' => 2],
            ['idd' => 64, 'status' => 1, 'movie_id' => 28, 'category_id' => 5],
            ['idd' => 65, 'status' => 1, 'movie_id' => 28, 'category_id' => 11],

            ['idd' => 66, 'status' => 1, 'movie_id' => 29, 'category_id' => 1],
            ['idd' => 67, 'status' => 1, 'movie_id' => 29, 'category_id' => 5],
            ['idd' => 68, 'status' => 1, 'movie_id' => 29, 'category_id' => 10],

            ['idd' => 69, 'status' => 1, 'movie_id' => 30, 'category_id' => 1],
            ['idd' => 70, 'status' => 1, 'movie_id' => 30, 'category_id' => 6],
            ['idd' => 71, 'status' => 1, 'movie_id' => 30, 'category_id' => 10],

            ['idd' => 72, 'status' => 1, 'movie_id' => 31, 'category_id' => 1],
            ['idd' => 73, 'status' => 1, 'movie_id' => 31, 'category_id' => 9],
            ['idd' => 74, 'status' => 1, 'movie_id' => 31, 'category_id' => 10],

            ['idd' => 75, 'status' => 1, 'movie_id' => 32, 'category_id' => 1],
            ['idd' => 76, 'status' => 1, 'movie_id' => 32, 'category_id' => 5],
            ['idd' => 77, 'status' => 1, 'movie_id' => 32, 'category_id' => 8],
            ['idd' => 78, 'status' => 1, 'movie_id' => 32, 'category_id' => 10],

            ['idd' => 79, 'status' => 1, 'movie_id' => 333, 'category_id' => 1],
            ['idd' => 80, 'status' => 1, 'movie_id' => 333, 'category_id' => 5],
            ['idd' => 81, 'status' => 1, 'movie_id' => 333, 'category_id' => 10],

            ['idd' => 82, 'status' => 1, 'movie_id' => 34, 'category_id' => 1],
            ['idd' => 83, 'status' => 1, 'movie_id' => 34, 'category_id' => 5],
            ['idd' => 84, 'status' => 1, 'movie_id' => 34, 'category_id' => 10],
            ['idd' => 85, 'status' => 1, 'movie_id' => 34, 'category_id' => 11],

            ['idd' => 86, 'status' => 1, 'movie_id' => 35, 'category_id' => 1],
            ['idd' => 87, 'status' => 1, 'movie_id' => 35, 'category_id' => 10],
            ['idd' => 88, 'status' => 1, 'movie_id' => 35, 'category_id' => 14],

            ['idd' => 89, 'status' => 1, 'movie_id' => 36, 'category_id' => 11],
            ['idd' => 90, 'status' => 1, 'movie_id' => 36, 'category_id' => 10],
            ['idd' => 91, 'status' => 1, 'movie_id' => 36, 'category_id' => 14],

            ['idd' => 92, 'status' => 1, 'movie_id' => 37, 'category_id' => 2],
            ['idd' => 93, 'status' => 1, 'movie_id' => 37, 'category_id' => 5],
            ['idd' => 94, 'status' => 1, 'movie_id' => 37, 'category_id' => 10],

            ['idd' => 95, 'status' => 1, 'movie_id' => 38, 'category_id' => 1],
            ['idd' => 96, 'status' => 1, 'movie_id' => 38, 'category_id' => 5],
            ['idd' => 97, 'status' => 1, 'movie_id' => 38, 'category_id' => 10],

            ['idd' => 98, 'status' => 1, 'movie_id' => 39, 'category_id' => 1],
            ['idd' => 99, 'status' => 1, 'movie_id' => 39, 'category_id' => 8],
            ['idd' => 100, 'status' => 1, 'movie_id' => 39, 'category_id' => 9],
            ['idd' => 101, 'status' => 1, 'movie_id' => 39, 'category_id' => 11],

            ['idd' => 102, 'status' => 1, 'movie_id' => 40, 'category_id' => 2],
            ['idd' => 103, 'status' => 1, 'movie_id' => 40, 'category_id' => 8],
            ['idd' => 104, 'status' => 1, 'movie_id' => 40, 'category_id' => 11],

            ['idd' => 105, 'status' => 1, 'movie_id' => 41, 'category_id' => 2],
            ['idd' => 106, 'status' => 1, 'movie_id' => 41, 'category_id' => 8],
            ['idd' => 107, 'status' => 1, 'movie_id' => 41, 'category_id' => 11],

            ['idd' => 108, 'status' => 1, 'movie_id' => 42, 'category_id' => 2],
            ['idd' => 109, 'status' => 1, 'movie_id' => 42, 'category_id' => 8],
            ['idd' => 110, 'status' => 1, 'movie_id' => 42, 'category_id' => 11],

            ['idd' => 111, 'status' => 1, 'movie_id' => 43, 'category_id' => 2],
            ['idd' => 112, 'status' => 1, 'movie_id' => 43, 'category_id' => 8],
            ['idd' => 113, 'status' => 1, 'movie_id' => 43, 'category_id' => 11],

            ['idd' => 114, 'status' => 1, 'movie_id' => 44, 'category_id' => 2],
            ['idd' => 115, 'status' => 1, 'movie_id' => 44, 'category_id' => 8],
            ['idd' => 116, 'status' => 1, 'movie_id' => 44, 'category_id' => 11],

            ['idd' => 117, 'status' => 1, 'movie_id' => 45, 'category_id' => 2],
            ['idd' => 118, 'status' => 1, 'movie_id' => 45, 'category_id' => 8],
            ['idd' => 119, 'status' => 1, 'movie_id' => 45, 'category_id' => 11],

            ['idd' => 120, 'status' => 1, 'movie_id' => 46, 'category_id' => 2],
            ['idd' => 121, 'status' => 1, 'movie_id' => 46, 'category_id' => 8],
            ['idd' => 122, 'status' => 1, 'movie_id' => 46, 'category_id' => 11],

            ['idd' => 123, 'status' => 1, 'movie_id' => 47, 'category_id' => 2],
            ['idd' => 124, 'status' => 1, 'movie_id' => 47, 'category_id' => 8],
            ['idd' => 125, 'status' => 1, 'movie_id' => 47, 'category_id' => 11],

            ['idd' => 126, 'status' => 1, 'movie_id' => 48, 'category_id' => 2],
            ['idd' => 127, 'status' => 1, 'movie_id' => 48, 'category_id' => 8],
            ['idd' => 128, 'status' => 1, 'movie_id' => 48, 'category_id' => 11],

            ['idd' => 129, 'status' => 1, 'movie_id' => 49, 'category_id' => 2],
            ['idd' => 130, 'status' => 1, 'movie_id' => 49, 'category_id' => 6],
            ['idd' => 131, 'status' => 1, 'movie_id' => 49, 'category_id' => 7],
            ['idd' => 132, 'status' => 1, 'movie_id' => 49, 'category_id' => 11],
            ['idd' => 133, 'status' => 1, 'movie_id' => 49, 'category_id' => 13],

            ['idd' => 134, 'status' => 1, 'movie_id' => 50, 'category_id' => 2],
            ['idd' => 135, 'status' => 1, 'movie_id' => 50, 'category_id' => 6],
            ['idd' => 136, 'status' => 1, 'movie_id' => 50, 'category_id' => 11],
            ['idd' => 137, 'status' => 1, 'movie_id' => 50, 'category_id' => 13],

            ['idd' => 138, 'status' => 1, 'movie_id' => 51, 'category_id' => 2],
            ['idd' => 139, 'status' => 1, 'movie_id' => 51, 'category_id' => 11],
            ['idd' => 140, 'status' => 1, 'movie_id' => 51, 'category_id' => 14],

            ['idd' => 141, 'status' => 1, 'movie_id' => 52, 'category_id' => 2],
            ['idd' => 142, 'status' => 1, 'movie_id' => 52, 'category_id' => 5],
            ['idd' => 143, 'status' => 1, 'movie_id' => 52, 'category_id' => 7],
            ['idd' => 144, 'status' => 1, 'movie_id' => 52, 'category_id' => 13],
            ['idd' => 145, 'status' => 1, 'movie_id' => 52, 'category_id' => 14],

            ['idd' => 146, 'status' => 1, 'movie_id' => 53, 'category_id' => 2],
            ['idd' => 147, 'status' => 1, 'movie_id' => 53, 'category_id' => 5],
            ['idd' => 148, 'status' => 1, 'movie_id' => 53, 'category_id' => 7],
            ['idd' => 149, 'status' => 1, 'movie_id' => 53, 'category_id' => 13],
            ['idd' => 150, 'status' => 1, 'movie_id' => 53, 'category_id' => 14],

            ['idd' => 151, 'status' => 1, 'movie_id' => 54, 'category_id' => 1],
            ['idd' => 152, 'status' => 1, 'movie_id' => 54, 'category_id' => 5],
            ['idd' => 153, 'status' => 1, 'movie_id' => 54, 'category_id' => 14],

            ['idd' => 154, 'status' => 1, 'movie_id' => 55, 'category_id' => 1],
            ['idd' => 155, 'status' => 1, 'movie_id' => 55, 'category_id' => 6],
            ['idd' => 156, 'status' => 1, 'movie_id' => 55, 'category_id' => 13],
            ['idd' => 157, 'status' => 1, 'movie_id' => 55, 'category_id' => 14],

            ['idd' => 158, 'status' => 1, 'movie_id' => 56, 'category_id' => 2],
            ['idd' => 159, 'status' => 1, 'movie_id' => 56, 'category_id' => 3],
            ['idd' => 160, 'status' => 1, 'movie_id' => 56, 'category_id' => 8],
            ['idd' => 161, 'status' => 1, 'movie_id' => 56, 'category_id' => 14],

            ['idd' => 162, 'status' => 1, 'movie_id' => 57, 'category_id' => 2],
            ['idd' => 163, 'status' => 1, 'movie_id' => 57, 'category_id' => 8],
            ['idd' => 164, 'status' => 1, 'movie_id' => 57, 'category_id' => 14],

            ['idd' => 165, 'status' => 1, 'movie_id' => 58, 'category_id' => 1],
            ['idd' => 166, 'status' => 1, 'movie_id' => 58, 'category_id' => 5],
            ['idd' => 167, 'status' => 1, 'movie_id' => 58, 'category_id' => 8],

            ['idd' => 168, 'status' => 1, 'movie_id' => 59, 'category_id' => 2],
            ['idd' => 169, 'status' => 1, 'movie_id' => 59, 'category_id' => 8],
            ['idd' => 170, 'status' => 1, 'movie_id' => 59, 'category_id' => 11],

            ['idd' => 171, 'status' => 1, 'movie_id' => 60, 'category_id' => 1],
            ['idd' => 172, 'status' => 1, 'movie_id' => 60, 'category_id' => 10],

            ['idd' => 173, 'status' => 1, 'movie_id' => 61, 'category_id' => 1],
            ['idd' => 174, 'status' => 1, 'movie_id' => 61, 'category_id' => 5],
            ['idd' => 175, 'status' => 1, 'movie_id' => 61, 'category_id' => 12],
            ['idd' => 176, 'status' => 1, 'movie_id' => 61, 'category_id' => 13],

        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class advertisement extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('advertisement')->delete();
        DB::table('advertisement')->insert([
            ['ad_id'=>1,'ad_name'=>"Tên Quảng Cáo 1",'url_banner'=>'https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-3.jpg','start_date'=>'21/1/2021','end_date'=>'21/2/2021','price'=>'500000','have_paid'=>'1','partner_id'=>1,'status'=>1],
            ['ad_id'=>2,'ad_name'=>"Tên Quảng Cáo 2",'url_banner'=>'https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-3.jpg','start_date'=>'21/1/2021','end_date'=>'21/2/2021','price'=>'500000','have_paid'=>'1','partner_id'=>1,'status'=>1],
            ['ad_id'=>3,'ad_name'=>"Tên Quảng Cáo 3",'url_banner'=>'https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-3.jpg','start_date'=>'21/1/2021','end_date'=>'21/2/2021','price'=>'500000','have_paid'=>'1','partner_id'=>3,'status'=>1],
            ['ad_id'=>4,'ad_name'=>"Tên Quảng Cáo 4",'url_banner'=>'https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-3.jpg','start_date'=>'21/1/2021','end_date'=>'21/2/2021','price'=>'500000','have_paid'=>'1','partner_id'=>4,'status'=>1],
            ['ad_id'=>5,'ad_name'=>"Tên Quảng Cáo 5",'url_banner'=>'https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-3.jpg','start_date'=>'21/1/2021','end_date'=>'21/2/2021','price'=>'500000','have_paid'=>'1','partner_id'=>2,'status'=>1],
            ['ad_id'=>6,'ad_name'=>"Tên Quảng Cáo 6",'url_banner'=>'https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-3.jpg','start_date'=>'21/1/2021','end_date'=>'21/2/2021','price'=>'500000','have_paid'=>'1','partner_id'=>2,'status'=>1]
        ]);

    }
}

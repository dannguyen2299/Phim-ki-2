<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            ['ad_id'=>1,'ad_name'=>"Tên Quảng Cáo 1",'partner'=>'partner','partner_email'=>'partner@gmail.com','partner_phone'=>'094511641561','url_banner'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlHPJDyweEkCR7qhLjMZgdD1omVB-pcU0SKw&usqp=CAU','link_banner'=>'https://shopee.vn/','start_date'=>Carbon::create('2020-01-14'),'end_date'=>Carbon::create('2021-03-21'),'price'=>'500000','have_paid'=>'1','ad_location'=>1,'status'=>1],
            ['ad_id'=>2,'ad_name'=>"Tên Quảng Cáo 2",'partner'=>'partner','partner_email'=>'partner@gmail.com','partner_phone'=>'094511641561','url_banner'=>'https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-3.jpg','link_banner'=>'https://shopee.vn/','start_date'=>Carbon::create('2020-01-14'),'end_date'=>Carbon::create('2021-03-21'),'price'=>'500000','have_paid'=>'1','ad_location'=>2,'status'=>1],
            ['ad_id'=>3,'ad_name'=>"Tên Quảng Cáo 3",'partner'=>'partner','partner_email'=>'partner@gmail.com','partner_phone'=>'094511641561','url_banner'=>'https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-3.jpg','link_banner'=>'https://shopee.vn/','start_date'=>Carbon::create('2020-01-14'),'end_date'=>Carbon::create('2021-03-21'),'price'=>'500000','have_paid'=>'1','ad_location'=>2,'status'=>1],
            ['ad_id'=>4,'ad_name'=>"Tên Quảng Cáo 4",'partner'=>'partner','partner_email'=>'partner@gmail.com','partner_phone'=>'094511641561','url_banner'=>'https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-3.jpg','link_banner'=>'https://shopee.vn/','start_date'=>Carbon::create('2020-01-14'),'end_date'=>Carbon::create('2021-03-21'),'price'=>'500000','have_paid'=>'1','ad_location'=>2,'status'=>1],
            ['ad_id'=>5,'ad_name'=>"Tên Quảng Cáo 5",'partner'=>'partner','partner_email'=>'partner@gmail.com','partner_phone'=>'094511641561','url_banner'=>'https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-3.jpg','link_banner'=>'https://shopee.vn/','start_date'=>Carbon::create('2020-01-14'),'end_date'=>Carbon::create('2021-03-21'),'price'=>'500000','have_paid'=>'1','ad_location'=>0,'status'=>1],
            ['ad_id'=>6,'ad_name'=>"Tên Quảng Cáo 6",'partner'=>'partner','partner_email'=>'partner@gmail.com','partner_phone'=>'094511641561','url_banner'=>'https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-3.jpg','link_banner'=>'https://shopee.vn/','start_date'=>Carbon::create('2020-01-14'),'end_date'=>Carbon::create('2021-03-21'),'price'=>'500000','have_paid'=>'1','ad_location'=>0,'status'=>1]
        ]);

    }
}

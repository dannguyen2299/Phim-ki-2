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
            ['ad_id'=>1,'ad_name'=>"Tên Quảng Cáo 1",'partner'=>'partner','partner_email'=>'partner@gmail.com','partner_phone'=>'094511641561','url_banner'=>'https://hackernoon.com/hn-images/1*j41hMsYft-ifSvXuWOb7Gg.png','link_banner'=>'https://scontent-hkt1-1.xx.fbcdn.net/v/t1.18169-9/19883982_456639714699257_8165702824973041824_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=w6W7tJdbZk0AX9N-jGK&_nc_ht=scontent-hkt1-1.xx&oh=6762c854b90674309e9fbd9b2271f4a5&oe=60D5779E','start_date'=>Carbon::create('2020-01-14'),'end_date'=>Carbon::create('2021-03-21'),'price'=>'500000','have_paid'=>'1','ad_location'=>1,'status'=>1],
            ['ad_id'=>2,'ad_name'=>"Tên Quảng Cáo 2",'partner'=>'partner','partner_email'=>'partner@gmail.com','partner_phone'=>'094511641561','url_banner'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlHPJDyweEkCR7qhLjMZgdD1omVB-pcU0SKw&usqp=CAU','link_banner'=>'https://scontent-hkt1-1.xx.fbcdn.net/v/t1.18169-9/19883982_456639714699257_8165702824973041824_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=w6W7tJdbZk0AX9N-jGK&_nc_ht=scontent-hkt1-1.xx&oh=6762c854b90674309e9fbd9b2271f4a5&oe=60D5779E','start_date'=>Carbon::create('2020-01-14'),'end_date'=>Carbon::create('2021-03-21'),'price'=>'500000','have_paid'=>'1','ad_location'=>2,'status'=>1],
            ['ad_id'=>3,'ad_name'=>"Tên Quảng Cáo 3",'partner'=>'partner','partner_email'=>'partner@gmail.com','partner_phone'=>'094511641561','url_banner'=>'https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-3.jpg','link_banner'=>'https://scontent-hkt1-1.xx.fbcdn.net/v/t1.18169-9/19883982_456639714699257_8165702824973041824_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=w6W7tJdbZk0AX9N-jGK&_nc_ht=scontent-hkt1-1.xx&oh=6762c854b90674309e9fbd9b2271f4a5&oe=60D5779E','start_date'=>Carbon::create('2020-01-14'),'end_date'=>Carbon::create('2021-03-21'),'price'=>'500000','have_paid'=>'1','ad_location'=>2,'status'=>1],
            ['ad_id'=>4,'ad_name'=>"Tên Quảng Cáo 4",'partner'=>'partner','partner_email'=>'partner@gmail.com','partner_phone'=>'094511641561','url_banner'=>'https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-3.jpg','link_banner'=>'https://scontent-hkt1-1.xx.fbcdn.net/v/t1.18169-9/19883982_456639714699257_8165702824973041824_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=w6W7tJdbZk0AX9N-jGK&_nc_ht=scontent-hkt1-1.xx&oh=6762c854b90674309e9fbd9b2271f4a5&oe=60D5779E','start_date'=>Carbon::create('2020-01-14'),'end_date'=>Carbon::create('2021-03-21'),'price'=>'500000','have_paid'=>'1','ad_location'=>0,'status'=>1],
            ['ad_id'=>5,'ad_name'=>"Tên Quảng Cáo 5",'partner'=>'partner','partner_email'=>'partner@gmail.com','partner_phone'=>'094511641561','url_banner'=>'https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-3.jpg','link_banner'=>'https://scontent-hkt1-1.xx.fbcdn.net/v/t1.18169-9/19883982_456639714699257_8165702824973041824_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=w6W7tJdbZk0AX9N-jGK&_nc_ht=scontent-hkt1-1.xx&oh=6762c854b90674309e9fbd9b2271f4a5&oe=60D5779E','start_date'=>Carbon::create('2020-01-14'),'end_date'=>Carbon::create('2021-03-21'),'price'=>'500000','have_paid'=>'1','ad_location'=>0,'status'=>1],
            ['ad_id'=>6,'ad_name'=>"Tên Quảng Cáo 6",'partner'=>'partner','partner_email'=>'partner@gmail.com','partner_phone'=>'094511641561','url_banner'=>'https://inanaz.com.vn/wp-content/uploads/2020/02/mau-banner-quang-cao-3.jpg','link_banner'=>'https://scontent-hkt1-1.xx.fbcdn.net/v/t1.18169-9/19883982_456639714699257_8165702824973041824_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=w6W7tJdbZk0AX9N-jGK&_nc_ht=scontent-hkt1-1.xx&oh=6762c854b90674309e9fbd9b2271f4a5&oe=60D5779E','start_date'=>Carbon::create('2020-01-14'),'end_date'=>Carbon::create('2021-03-21'),'price'=>'500000','have_paid'=>'1','ad_location'=>0,'status'=>1]
        ]);

    }
}

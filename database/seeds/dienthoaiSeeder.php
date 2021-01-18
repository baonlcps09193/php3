<?php

use Illuminate\Database\Seeder;

class dienthoaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<300; $i++ ) {
            DB::table('dienthoai')->insert([
                [ 'ten_DT' => 'Oppo XA ' . $i, 'gia'=>mt_rand(700000, 1000000),'gia_km'=>0, 'url_hinh'=>'', 'mo_ta'=>'','ngay_cap_nhat'=>Now(),'an_hien'=>1,'hot'=>1, 'bai_viet'=>'','ghi_chu'=>'','id_loai'=>2],
                [ 'ten_DT' => 'Iphone xs Max ' . $i, 'gia'=>mt_rand(500000, 800000),'gia_km'=>0, 'url_hinh'=>'','mo_ta'=>'','ngay_cap_nhat'=>Now() ,'an_hien'=>1,'hot'=>1,'bai_viet'=>'','ghi_chu'=>'','id_loai'=>3],
                [ 'ten_DT' => 'Nokia Pro ' . $i, 'gia'=>mt_rand(250000, 500000),'gia_km'=>0,'url_hinh'=>'','mo_ta'=>'','ngay_cap_nhat'=>Now(),'an_hien'=>1,'hot'=>0,'bai_viet'=>'','ghi_chu'=>'','id_loai'=>1],
            ]);            
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class chungloaiSeederandloaispSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chungloai')->insert([
            ['ten_CL' => 'Điện Thoại','thu_tu'=>1,'an_hien'=>1],
            ['ten_CL' => 'Laptop','thu_tu'=>2,'an_hien'=>1],
            ['ten_CL' => 'Máy ảnh ','thu_tu'=>3,'an_hien'=>1],
        ]);

        DB::table('loaisp')->insert([
            ['ten_loai' => 'Sam sung','thu_tu'=>1,'an_hien'=>1,'id_CL'=>1,'url_hinh'=>''],
            ['ten_loai' => 'HTC','thu_tu'=>2,'an_hien'=>1,'id_CL'=>1,'url_hinh'=>''],
            ['ten_loai' => 'Apple','thu_tu'=>3,'an_hien'=>1,'id_CL'=>1,'url_hinh'=>''],
            ['ten_loai' => 'LG','thu_tu'=>4,'an_hien'=>1,'id_CL'=>1,'url_hinh'=>''],
            ['ten_loai' => 'Motorola','thu_tu'=>5,'an_hien'=>1,'id_CL'=>1,'url_hinh'=>''],
            ['ten_loai' => 'Mobel','thu_tu'=>6,'an_hien'=>0,'id_CL'=>1,'url_hinh'=>''],  
        ]);
    }
}

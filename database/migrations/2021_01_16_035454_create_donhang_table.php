<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->increments('id_DH');
            $table->bigInteger('id_user')->unsigned();
            $table->dateTime('thoi_diem_dat_hang');
            $table->dateTime('thoi_diem_giao_hang');
            $table->string('ten_nguoi_nhan', 30);
            $table->string('dien_thoai_nguoi_nhan', 30);
            $table->string('dia_chi', 200);
            $table->double('tong_tien', 8, 2);
            $table->string('ghi_chu', 200);
            $table->boolean('an_hien');
            $table->tinyInteger('trang_thai');
            $table->tinyInteger('phuong_thuc_thanh_toan');
            $table->tinyInteger('phuong_thuc_giao_hang');
            $table->double('tien_ship', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}

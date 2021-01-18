<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDienthoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dienthoai', function (Blueprint $table) {
            $table->increments('id_DT');
            $table->string('ten_DT', 30)->unique();
            $table->string('mo_ta', 500);
            $table->datetime('ngay_cap_nhat');
            $table->double('gia', 8, 2);
            $table->double('gia_km', 8, 2);
            $table->string('url_hinh', 200);
            $table->integer('so_luong_ton_kho')->default(0);
            $table->boolean('an_hien');
            $table->boolean('hot');
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
        Schema::dropIfExists('dienthoai');
    }
}

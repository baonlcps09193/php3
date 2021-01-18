<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaispTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaisp', function (Blueprint $table) {
            $table->increments('id_loai');
            $table->string('ten_loai', 30)->unique();
            $table->integer('thu_tu');
            $table->boolean('an_hien');
            $table->unsignedInteger('id_CL');
            $table->string('url_hinh', 200);
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
        Schema::dropIfExists('loaisp');
    }
}

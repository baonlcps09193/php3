<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThanhvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanhvien', function (Blueprint $table) {
            $table->increments('id_TV');
            $table->string('ho_ten', 30);
            $table->string('username', 30);
            $table->string('password', 30);
            $table->string('email', 100);
            $table->string('random_key', 50);
            $table->boolean('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thanhvien');
    }
}

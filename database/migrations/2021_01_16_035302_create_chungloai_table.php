<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChungloaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chungloai', function (Blueprint $table) {
            $table->increments('id_CL');
            $table->string('ten_CL', 30)->unique();
            $table->integer('thu_tu');
            $table->boolean('an_hien');
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
        Schema::dropIfExists('chungloai');
    }
}

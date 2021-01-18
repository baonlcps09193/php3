<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditDienthoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dienthoai', function(Blueprint $table) {
            $table->text('bai_viet');
            $table->string('ghi_chu', 255);
            $table->unsignedInteger('id_loai');
            $table->foreign('id_loai')->references('id_loai')->on('loaisp')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

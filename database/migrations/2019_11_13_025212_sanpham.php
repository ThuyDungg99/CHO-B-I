<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten_sp');
            $table->integer('so_luong');
            $table->text('mo_ta_sp');
            $table->string('loai_sp');
            $table->string('anh');
            $table->string('phan_loai');
            $table->integer('gia_thuong');
            $table->integer('gia_khuyen_mai');
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

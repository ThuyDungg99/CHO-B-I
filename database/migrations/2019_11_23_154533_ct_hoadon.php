<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CtHoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_hoadon', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_hoadon');
            $table->integer('so_luong');
            $table->integer('id_sanpham');
            $table->integer('don_gia');
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

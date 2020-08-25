<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Khachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name');
            $table->string('ho_ten');
            $table->string('mat_khau');
            $table->integer('sdt');
            $table->string('dia_chi');
            $table->string('gioi_tinh');
            $table->string('tu_cach');
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

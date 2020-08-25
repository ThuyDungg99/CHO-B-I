<?php

use Illuminate\Database\Seeder;

class sanpham extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('sanpham')->insert([
    		'ten_sp' => 'Balo Phượt vải bố cao cấp Canvas size 55cm',
    		'so_luong' => '20',
    		'mo_ta_sp' => 'mo ta',
    		'loai_sp' => 'new',
    		'anh' => '../public/img/do_phuot_1.jpg',
    		'phan_loai' => 'balo',
    		'gia_thuong' => '350',
    		'gia_khuyen_mai' => '250'
    	]); 
    }
}

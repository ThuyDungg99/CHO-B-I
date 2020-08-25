<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('dangnhap','Mycontroller@getdangnhap');
Route::post('dangnhap','Mycontroller@postdangnhap');


Route::get('dangky','Mycontroller@dangky');


Route::post('xuly_dangky','Mycontroller@xulydangky');

route::get('dangxuat','Mycontroller@dangxuat');

route::get('trangchu','indexcontroller@trangchu');
route::get('/','indexcontroller@trangchu');
route::get('danhmuc','danhmuccontroller@danhmuc');

route::get('ajax_xemthem',function(){
	return view('ajaxxemthem');
});
route::get('ajax_danhgia',function(){
	return view('ajax_danhgia');
});

route::get('trang_sp','indexcontroller@trang_sp');

route::get('timkiem',['as' => 'timkuem' ,'uses' => 'indexcontroller@timkiem']);

route::get('index_search',function(Request $request){
	$key =  $_GET["key"];
	session()->put('key',$key);
	return redirect('timkiem');

});

route::get('muahang/{id}/{tensanpham}',['as'=> 'muahang','uses'=>'indexcontroller@muahang']);

route::get('giohang',['as'=> 'giohang','uses'=>'indexcontroller@giohang']);

route::get('xoasanpham/{id}',['as'=> 'xoasanpham', 'uses' => 'indexcontroller@xoa']);

route::post('capnhat',['as' => 'capnhat' , 'uses' => 'indexcontroller@capnhat']);

route::get('xoaallsp','indexcontroller@xoaall');

route::get('thanhtoan','indexcontroller@thanhtoan');

route::post('capnhapdc','indexcontroller@capnhapdc');

route::post('dat_hang','indexcontroller@dathang');

route::get('canhan','indexcontroller@canhan');

route::get('admin','Admincontroller@admin');

route::get('admin_sua/{id}','Admincontroller@sua');

route::post('xuly_them','Admincontroller@xulythem');

route::post('xuly_sua',['as' => 'xuly_sua' , 'uses' => 'Admincontroller@xulysua']);

route::get('xoa_sp/{id}','Admincontroller@xoasp');

route::get('xoadonhang/{id}',"Admincontroller@xoadonhang");

route::post('timdonhang',"Admincontroller@timdonhang");

Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');

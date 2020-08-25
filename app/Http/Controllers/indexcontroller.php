<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\phantrang;
use session;
use Cart;
use file;
use App\product;

class indexcontroller extends Controller
{
    public function trangchu(Request $request){
    	$link = '../public/img/';
    	$anh1 = DB::table('sanpham')->where('id',1)->get();
    	$anh2 = DB::table('sanpham')->where('id',2)->get();
    	$anh3 = DB::table('sanpham')->where('id',3)->get();
    	$anh4 = DB::table('sanpham')->where('id',4)->get();
    	$anh5 = DB::table('sanpham')->where('id',5)->get();
    	$anh6 = DB::table('sanpham')->where('id',6)->get();

    	$sp   = DB::table('sanpham')->select('anh')->where('loai_sp','pho bien')->get();

    	$sanpham = phantrang::where('loai_sp','pho bien')->paginate(8);
        session()->put('key',$request->key);
 
    	/*foreach ($sp as $row) {
    	
    	foreach ($row as $key => $value) {
    		echo $key." -> ".$value;
    		echo "</br>";
    	}}*/
    	return view('trangchu',[
    		'link' => $link,
    		'anh1' => $anh1,
    		'anh2' => $anh2,
    		'anh3' => $anh3,
    		'anh4' => $anh4,
    		'anh5' => $anh5,
    		'anh6' => $anh6,
    		'sanpham'   => $sanpham
    	]);
    }

    public function trang_sp(){
        $sanpham = $_GET['sp'];

        // Lượt xem của sản phẩm
        $sessionKey = 'products_'.$sanpham;
        $sessionView = Session()->get($sessionKey);
        $product = product::findOrFail($sanpham);
        if (!$sessionView) { //nếu chưa có session
            Session()->put($sessionKey, 1); //set giá trị cho session
            $product->increment('views');
        }



        
        $sp = DB::table('sanpham')->where('id',$sanpham)->get();
        foreach ($sp as $value) {}
            $tt = DB::table('sanpham')->where('phan_loai',$value->phan_loai)->inRandomOrder()->limit(3)->get();

        $cmt = DB::table('danhgia')->where('id_sp',$sanpham)->get();
        return view('trang_sp',[
            'tt'=>$tt,
            'sp'=>$sp,
            'cmt'=>$cmt

        ]);
    }

    public function timkiem(Request $req){
        $key = $req->key;
        if (session()->has('key')) {
            $key = session()->get('key');
            $tk = DB::table('sanpham')->where('ten_sp','like','%'.$key.'%')->orwhere('gia_khuyen_mai',$key)->get();
        }
        else{

            $tk = DB::table('sanpham')->where('ten_sp','like','%'.$req->key.'%')->get();

        }
        $muc = $req->muc;
        if ($muc== "0") {
            $end = "100";
            $tk = DB::table('sanpham')->whereBetween('gia_khuyen_mai', [$muc, $end])->get();
        }
        if ($muc== "100") {
            $end = "200";
            $tk = DB::table('sanpham')->whereBetween('gia_khuyen_mai', [$muc, $end])->get();
        }
        if ($muc== "200") {
            $end = "500";
            $tk = DB::table('sanpham')->whereBetween('gia_khuyen_mai', [$muc, $end])->get();
        }
        if ($muc== "500") {
            $end = "1000";
            $tk = DB::table('sanpham')->whereBetween('gia_khuyen_mai', [$muc, $end])->get();
        }
        if ($muc== "1000") {
            $end = "10000";
            $tk = DB::table('sanpham')->whereBetween('gia_khuyen_mai', [$muc, $end])->get();
        }

        
        return view('timkiem',[
            'tk' => $tk,
            'key' => $key,

        ]);
    }


    public function muahang($id){
        if (session()->has('name')) {
            $product_buy = DB::table('sanpham')->where('id',$id)->first();
        Cart::add(array('id'=>$id,'name'=>$product_buy->ten_sp,'qty' =>1, 'price'=>$product_buy->gia_khuyen_mai,'weight' => 0,'options'=>array('img'=>$product_buy->anh)));
        $content = Cart::content();

        return redirect()->route('giohang');
        }
        else{
            ?>
            <script type="text/javascript">
                alert("bạn chưa đăng nhập");
            </script>
            <?php
            return redirect('dangnhap');
        }


        
    }
    public function giohang(){
       $content = Cart::content();
       $cart = Cart::count();
       session()->put('count',$cart);
       $total = Cart::total();
       $tt=0;
       foreach ($content as $key) {
           $tt += $key->price*$key->qty;
       }
       return view('giohang',['content'=>$content,'total'=>$total,'tt'=>$tt]);
   }
   public function xoa($id){
    Cart::remove($id);
    return redirect()->route('giohang');
}

public function capnhat(Request $request){
    $qty = $request->Qtycart;
    $rowid = $request->rowIdCart;
    Cart::update($rowid,$qty);
    return redirect('giohang'); 
}
public function xoaall(){
    Cart::destroy();
    return redirect('giohang');
}
public function thanhtoan(Request $request){
    $sdt = $request->sdt;
    $dc = $request->dc;
    $name = session()->get('name');
    $content = Cart::content();
    $total = Cart::total();
    $total=0;
    foreach ($content as $key) {
       $total += $key->price*$key->qty;
   }

   $tt = DB::table('khachhang')->where('user_name',$name)->first();
   return view('muahang',['tt' => $tt,'content' => $content,'total' => $total]);
}
public function capnhapdc(Request $request){
    $sdt = $request->sdt;
    $dc = $request->dc;
    $name = session()->get('name');
    if ($sdt == null || $dc == null) {
        return redirect('thanhtoan');
    }
    else{
        $update = DB::table('khachhang')->where('user_name',$name)->update(['dia_chi' => $dc,'sdt' => $sdt]);
        return redirect('thanhtoan');
    }
}

public function dathang(Request $request){
    if (isset($request->submit)) {
        $content = Cart::content();
        $total = 0;
        foreach ($content as $key) {
            $total += $key->price*$key->qty;
        }
        $user = session()->get('name');
        $data = DB::table('khachhang')->where('user_name',$user)->first();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $id = $data->id;
        $date = date("Y-m-d");
        $time = date("H:i:s");
        if (isset($id)&&isset($date)&&isset($time)&&isset($total)) {
            DB::table('hoadon')->insert([
                'id_khachhang' => $id,
                'ngay_mua'     => $date,
                'thoi_gian'    => $time,
                'tong_tien'    => $total
            ]);
            foreach ($content as $key) {
                $dl1 = DB::table('hoadon')->where('thoi_gian',$time)->first();
                $sql = DB::table('sanpham')->where('id',$key->id)->first();
                $cl = $sql->so_luong - $key->qty;
                DB::table('sanpham')->where('id',$key->id)->update(['so_luong' => $cl ]);
                DB::table('ct_hoadon')->insert([
                    'id_hoadon'    => $dl1->id,
                    'so_luong'     => $key->qty,
                    'id_sanpham'   => $key->id,
                    'don_gia'      => $key->price
                ]);
            }
            Cart::destroy();
            session()->forget('count');
            return redirect('trangchu');
        }

    }
}
public function canhan(){
    $user = session()->get('name');
    $data = DB::table('khachhang')->where('user_name',$user)->first();

    $donhang = DB::table('hoadon')->where('id_khachhang',$data->id)->get();
    foreach ($donhang as $key) {
        $ctdonhang = DB::table('ct_hoadon')->where('id_hoadon',$key->id)->get();
    }
    return view('canhan',['data' => $data]);
}




}

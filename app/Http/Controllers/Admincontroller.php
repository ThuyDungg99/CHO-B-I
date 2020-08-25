<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Admincontroller extends Controller
{
	public function admin(){


		if (session()->has('admin')) {
			$xem = DB::table('sanpham')->orderby('id','DESC')->get();
			$qlkh = DB::table('khachhang')->where('tu_cach','khachhang')->get();
			$donhang = DB::table('hoadon')->orderby('id','DESC')->get();
			$doanhthu = DB::table('hoadon')
			->select(DB::raw('count(*) as id1,ngay_mua'),DB::raw('SUM(tong_tien) as total'))
			->orderby('id','DESC')
			->groupBy('ngay_mua')
			->get();

			$doanhthu2 = DB::table('hoadon')
			->select(DB::raw('count(*) as id1,ngay_mua'),DB::raw('SUM(tong_tien) as total'))
			->orderby('id','DESC')
			->groupBy('ngay_mua')
			->get();

			$dem = $doanhthu2->count();
			$start = $dem-10;
			$doanhthu1 = DB::table('hoadon')
			->select('ngay_mua',DB::raw('count(*) as id'),DB::raw('SUM(tong_tien) as total'))
			->orderby('id','ASC')
			->groupBy('ngay_mua')
			->offset($start)
			->limit(10)
			->get();

			return view('admin',[
				'xem' => $xem,
				'qlkh' => $qlkh, 
				'donhang' => $donhang,
				'doanhthu' => $doanhthu,
				'doanhthu1' => $doanhthu1
			]);
		}
		else{
			return redirect('dangnhap');
		}

	} 
	public function xulythem(Request $request){
		if ($request->tro_lai) {
			return redirect('admin?menu=xemsanpham');
		}
		if ($request->them_moi) {
			if ($request->ten == null || $request->ck_editor == null || $request->sl == null || $request->loai == null || $request->anh == null || $request->phan_loai == null || $request->gia_thuong == null || $request->gia_khuyen_mai == null) {
				?>
				<script type="text/javascript">
					alert("Chưa nhập đầy đủ thông tin");
					history.back();
				</script>
				<?php
			}
			else{
				$file = $request->file('anh');
				$ten = $request->ten;
				$mota = $request->ck_editor;
				$sl = $request->sl;
				$loai = $request->loai;
				$anh = $file->getClientOriginalName('anh');
				$file->move('img',$anh);
				$pl = $request->phan_loai;
				$gt = $request->gia_thuong;
				$gkm = $request->gia_khuyen_mai;
				DB::table('sanpham')->insert([
					'ten_sp'         => $ten,
					'so_luong'       => $sl,
					'mo_ta_sp'       => $mota,
					'loai_sp'        => $loai,
					'anh'            => $anh,
					'phan_loai'      => $pl,
					'gia_thuong'     => $gt,
					'gia_khuyen_mai' => $gkm
				]);
				?>
				<script type="text/javascript">
					alert("Đã thêm sản phẩm thành công");
					window.location="admin?menu=xemsanpham";

				</script>
				<?php
			}
		}
	}

	public function sua($id){
		$data = DB::table('sanpham')->where('id',$id)->first();
		return view('admin_sua',['data' => $data]);
	}

	public function xulysua(Request $request){
		if ($request->tro_lai) {
			return redirect('admin?menu=xemsanpham');
		}
		if ($request->sua) {
			if ($request->hasFile('anh')) {
				echo "<br>";
				$file = $request->file('anh');
				$anh = $file->getClientOriginalName('anh');
			}
			else{
				$anh = $request->anhcu;
			}
			DB::table('sanpham')->where('id',$request->id)->update([
				'ten_sp'         => $request->ten,
				'so_luong'       => $request->sl,
				'mo_ta_sp'       => $request->ck_editor1,
				'loai_sp'        => $request->loai,
				'anh'            => $anh,
				'phan_loai'      => $request->pl,
				'gia_thuong'     => $request->gia_thuong,
				'gia_khuyen_mai' => $request->gia_khuyen_mai
			]);
			?>
			<script type="text/javascript">
				alert("Bạn đã sửa sản phẩm thành công");
				window.location="admin?menu=xemsanpham";

			</script>
			<?php
			
		}
	}

	public function xoasp($id){
		DB::table('sanpham')->where('id',$id)->delete();
		return redirect('admin?menu=xemsanpham');
	}

	public function xoadonhang($id){
		DB::table('hoadon')->where('id',$id)->delete();
		DB::table('ct_hoadon')->where('id_hoadon',$id)->delete();
		return redirect('admin?menu=quanlydonhang&lc=tc');
	}

	public function timdonhang(Request $request){
		$date = $request->date;
		session()->put('date',$date);
		return redirect('admin?menu=quanlydonhang&lc=t');
	}

}

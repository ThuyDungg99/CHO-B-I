<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class Mycontroller extends Controller
{
	public function getdangnhap(){
		return view('dangnhap');
	}
	public function postdangnhap(Request $request){
		$user = $request->input('user');
		$password = $request->input('pass');
		$data = DB::table('khachhang')->where('user_name',$user)->where('mat_khau',$password)->where('tu_cach',"khachhang")->first();
		if ($data == true) {
			session()->put('name', $data->user_name);
			?>
			<script type="text/javascript">
				alert('Đăng nhập thành công');
				window.location="trangchu";
			</script>
			<?php
		}
		else{
			?>
			<script type="text/javascript">
				alert('user và mật khẩu không đúng');
				history.back();
			</script>
			<?php
		}
		
		$admin = DB::table('khachhang')->where('user_name',$user)->where('mat_khau',$password)->where('tu_cach',"admin")->first();
		if ($admin == true) {
			session()->put('admin',  $user);
			return redirect('admin');
		}

	}

	public function dangky(){
		return view('dangky');
	}
	public function xulydangky(Request $request){
		$username = $request->username;
		$name = $request->ho_ten;
		$sdt = $request->phone;
		$mk = $request->matkhau;
		$dc = $request->diachi;
		$gt = $request->gioitinh;
		if ($username == null || $name == null || $sdt == null || $mk == null || $dc == null || $gt == null) {
			?>
			<script type="text/javascript">
				alert("Bạn chưa nhập đầy đủ thông tin");
				history.back();
			</script>
			<?php
		}
		else{
			$user = DB::table('khachhang')->where('user_name',$username)->first();
			$sdt1 = DB::table('khachhang')->where('sdt',$sdt)->first();
			if ($user == true || $sdt1 == true) {
				?>
				<script type="text/javascript">
					alert("User name hoặc số điện thoại đã tồn tại");
					history.back();
				</script>
				<?php
			}
			else{
				$tucach = "khachhang";
				DB::table('khachhang')->insert([
					'user_name' => $username,
					'ho_ten'    => $name,
					'mat_khau'  => $mk,
					'sdt'		=> $sdt,
					'dia_chi'   => $dc,
					'gioi_tinh' => $gt,
					'tu_cach'   => $tucach
				]);
				?>
				<script type="text/javascript">
					alert("bạn đã đăng ký tài khoản thành công");
					window.location ="dangnhap";
				</script>
				<?php
			}
		}
		
	}
	public function dangxuat(){
		session()->flush();
		return redirect('dangnhap');
	}
}


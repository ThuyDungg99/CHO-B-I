<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>trang ca nhan</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{ asset('../public/css/css.css') }}">
	<link rel="stylesheet" href="{{ asset('../public/css/trang_sp.css') }}">
	<link rel="stylesheet" href="{{ asset('../public/css/trang_ca_nhan.css') }}">
	<script type="text/javascript">
		$(window).on('scroll', function() {
			if($(window).scrollTop()) {
				$('nav').addClass('black');
			} 
			else{
				$('nav').removeClass('black');
			}
		})
	</script>
	<style type="text/css">
		body{
			background-color: rgb(245, 245, 245);
		}
		.user{
			color: white;
			font-size: 20px;
		}
		.top_menu1{
			background-color: black;
		}
	</style>
</head>
<body>
	@extends('extend/menu')
	<div class="tong"></div>
	<div class="anh_dai_dien">
		<i class="fas fa-camera"></i>
		<p>Click để đăng ảnh</p>
	</div>
	<div class="container tt_ca_nhan">
		<div class="row ten">{{$data->ho_ten}}
		</div>
		<div class="row ten_truong ten_truong1">06CNTT01</div>
		<div class="row ten_truong" style="margin-bottom: 30px">Khoa Hệ Thống Thông Tin và Viễn Thám</div>
		<div class="row">
			<div class="row tong_ttcn" style="width: 100%">
				<div class="col-md-3"><i class="fas fa-birthday-cake"></i> &nbsp 16/05/1999</div>
				<div class="col-md-4"><i class="fas fa-envelope"></i> &nbsp shopvivu@gmail.com</div>
				<div class="col-md-5"><i class="fas fa-map-marker-alt"></i> &nbsp {{$data->dia_chi}}'</div>
			</div> 
			<div class="row tong_ttcn" style="width: 100%">
				<div class="col-md-3"><i class="fas fa-phone"></i> &nbsp {{$data->sdt}}</div>
				<div class="col-md-4"><i class="fab fa-facebook-f"></i> &nbsp fb.com/shopvivu</div>
			</div>
		</div>
	</div>


	<div class="container" style="margin-top: 50px;">
		<div class="row" >
			<div class="col-md-3" style="font-size: 25px;"><i class="fas fa-file-invoice" style="color:blue"></i>&nbsp <span style="color: red">Hóa Đơn</span></div>
			<div class="col-md-9">
			<?php
			$user = session()->get('name');
			$data = DB::table('khachhang')->where('user_name',$user)->first();

			$donhang = DB::table('hoadon')->where('id_khachhang',$data->id)->orderby('id','DESC')->get();
			foreach ($donhang as $key) {
				$ctdonhang = DB::table('ct_hoadon')->where('id_hoadon',$key->id)->get();
				echo '<div class="row" style="margin-bottom:20px;padding:10px;background-color:white;boder:solid">';
				echo'	
				<div class="col-md-12">
					<div class="row" style="font-size:20px;font-family: sans-serif;border-bottom:solid 1px #929292">
						<div class="col-md-6">shopvivu</div>
						<div class="col-md-6" style="float:right"><p style="float:right">'.$key->thoi_gian.'&nbsp&nbsp'.$key->ngay_mua.'</p></div>
					</div>
				</div>';
				echo '<div class="col-md-12">';
				foreach ($ctdonhang as $value) {
					$sp = DB::table('sanpham')->where('id',$value->id_sanpham)->first();
					echo '
						<div class="row" style="padding:10px 0px 10px 0px;;border-bottom:solid 1px #929292;">
							<div class="col-md-2"><img src="../public/img/'.$sp->anh.'"style="height: 100px; width: 100px;" alt=""></div>
							<div class="col-md-8">'.$sp->ten_sp.'</br>x'.$value->so_luong.'</div>
							<div class="col-md-2"><p style="float:right">'.number_format($value->don_gia,3).'đ</p></div>
						</div>
					';
				}
				echo '</div>';
				echo'
					<div class="col-md-12">
						<div class="row" style="font-size:20px;padding:8px;">
							<div class="col-md-6"></div>
							<div class="col-md-6" style="float:right"><p style="float:right"><span style="color: red;font-size:28px;font-weight: bold"></span></p></div>
						</div>
					</div>
				';
				echo '</div>';
			}

			?>
			
					
			</div>

		</div>
	</div>

	@extends('extend/footer')
</body>
</html>
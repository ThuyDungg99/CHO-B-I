<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{ asset('../public/css/css.css') }}">
	<link rel="stylesheet" href="{{ asset('../public/css/trang_sp.css') }}">
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
	<form action="" method="get">
		<div style="position: none;top: 170px;" class="in_put"><input class="search" name="key" type="text" placeholder="Quick Search"><button class="btn" type="submit"><span class="fa fa-search"></span></button></div>
	
	<div style="top: 170px;position: absolute;font-size: 23px;padding-left: 110px">
		Từ khóa tìm kiếm: {{$key}}
	</div>
	<div class="container-fluid" style="margin-top: 250px;">
		<div class="row">
			<div class="col-md-3">
				<div class="row" >
					<div class="col-md-3"></div>
					<div class="col-md-9">
						<h3>Mức Giá</h3></br>
						<input style="" type="checkbox" name="muc" value="0"> &nbsp;Dưới 100.000 Đ<br>
						<input style="" type="checkbox" name="muc" value="100"> &nbsp;Từ 100.000 - 200.000 Đ<br>
						<input style="" type="checkbox" name="muc" value="200"> &nbsp;Từ 200.000 - 500.000 Đ<br>
						<input style="" type="checkbox" name="muc" value="500"> &nbsp;Từ 500.000 - 1.000.000 Đ<br>
						<input style="" type="checkbox" name="muc" value="1000"> &nbsp;Trên 1.000.000 Đ<br>
						<input style="margin-top: 20px;background-color: red;color: white;border: none;height: 40px;width:60px;font-weight: 300;letter-spacing: 1px;font-family: sans-serif;border-radius: 5px;" type="submit" value="Tìm" name="">
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="row chua_sp">
					@if(!session()->has('key'))
					@foreach($tk as $va)
					<div class="sp_1" style="width: 300px;">
						<div class="chua_anh">
							<img src="../public/img/{{$va->anh}}" alt="">
						</div>
						<a id="aten_sp" href="trang_sp?sp={{$va->id}}"><div class="ten_sp" style="overflow-y: hidden;width: 100%;height: 35px;padding: 5px;line-height: 35px;">{{$va->ten_sp}}</div></a>
						<div class="gia_sp">
							<div>{{number_format($va->gia_khuyen_mai,3)}} đ</div>
							<div class="pice_gach">{{number_format($va->gia_thuong,3)}} đ</div>
						</div>
						<button onclick="mua_hang()"><a href="{!!  url('muahang',[$va->id,$va->ten_sp]) !!}" style="color: white;text-decoration: none" title="">Thêm vào giỏ hàng</a></button>
					</div>
					@endforeach
					@endif
					@if(session()->has('key'))
					@foreach($tk as $va)
					<div class="sp_1" style="width: 300px;">
						<div class="chua_anh">
							<img src="../public/img/{{$va->anh}}" alt="">
						</div>
						<a id="aten_sp" href="trang_sp?sp={{$va->id}}"><div class="ten_sp" style="overflow-y: hidden;width: 100%;height: 35px;padding: 5px;line-height: 35px;">{{$va->ten_sp}}</div></a>
						<div class="gia_sp">
							<div>{{number_format($va->gia_khuyen_mai,3)}} đ</div>
							<div class="pice_gach">{{number_format($va->gia_thuong,3)}} đ</div>
						</div>
						<button onclick="mua_hang()"><a href="{!!  url('muahang',[$va->id,$va->ten_sp]) !!}" style="color: white;text-decoration: none" title="">Thêm vào giỏ hàng</a></button>
					</div>
					@endforeach
					<?php session()->forget('key') ?>
					@endif

				</div>
			</div>
		</div>
	</div>
	</form>
	@extends('extend/footer')
</body>
</html>
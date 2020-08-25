
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Giỏ hàng</title>
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

		$(document).ready(function(){
			$(".updatecart").click(function(){
				var qty = $(this).parent().parent().parent().parent().find(".qty").val();

			});
		});
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
	<div class="container" style="margin-top: 120px;">
		<div class="row">
			<div class="col-md-12" style="height:70px;line-height:70px;"><h1>GIỎ  HÀNG</h1></div>
		</div>
		<div  class="row" style="height:50px;background:white;font-size:18px;line-height:50px;margin-bottom:20px;">
			<div class="col-md-5">Sản phẩm</div>
			<div class="col-md-2">Đơn giá</div>
			<div class="col-md-2">Số lượng</div>
			<div class="col-md-1">Số tiền</div>
			<div class="col-md-2" style="text-align: center;">Thao tác</div>
		</div>
		<form method="POST" action="{!! route('capnhat') !!}">
			@foreach($content as $item)
			<?php
			$sl = DB::table('sanpham')->where('id',$item->id)->first();
			?>
			<div class="row" style="margin-bottom: 20px;background-color: white;padding: 10px;color: black">
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-3"><img src="../public/img/{{$item->options->img}}" style="height: 100px; width: 100px;" alt=""></div>
						<div class="col-md-9"><a style="text-decoration: none;" href="trang_sp?sp={{$item->id}}" title="">{{ $item->name }}</a></div>
					</div>
				</div>
				<div class="col-md-2">{{number_format($item->price,3)}}đ</div>
				<div class="col-md-2"><input style="width:50px;" type="number" name="Qtycart" min="0" max="{{$sl->so_luong}}" value="{{ $item->qty }}">
				<input class="form-control" type="hidden" value="{{ $item->rowId }}" name="rowIdCart">
				</div>
				<div class="col-md-1">{{ number_format($item->price*$item->qty,3) }}đ</div>
				<div class="col-md-2">
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-4">
							<button type="submit" style="border:none; background-color: white;color: blue" title="" class="updatecart" id="{{ $item->rowId }}"><i class="fas fa-sync-alt"></i></button>
						</div>
						<div class="col-md-5">
							<a href="{!! url('xoasanpham',['id'=>$item->rowId]) !!}"><i class="fas fa-times"  style="color: blue"></i></a>
						</div>
					</div>
				</div>
			</div>

			@endforeach
			{!! csrf_field() !!}
		</form>
		

		<div class="container" style="bottom: 15px;background: white;height: 120px;padding:20px;border-top: solid 8px rgba(0,0,0,0.05);width:100%;">
			<div class="col-md-12" style="margin-bottom: 10px;border-bottom: solid 3px rgb(245, 245, 245);padding-bottom: 10px;">
				<div class="row" style="font-size:18px">
					<div class="col-md-10" >Tổng tiền hàng ({{session()->get('count')}} sản phẩm)</div>
					<div class="col-md-2">{{number_format($tt,3)}}đ</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3"><button style="background: #dd4b39;border: none;height: 40px;padding: 0px 20px 0px 20px;font-family: sans-serif;"><a style="color: white;text-decoration: none"
						href="xoaallsp">Xóa Bỏ Giỏ Hàng</a></button></div>
					<div class="col-md-3"></div>
						<div class="col-md-3"></div>
						<div class="col-md-3" style="display: flex;justify-content: center;"><button style="background: #dd4b39;border: none;height: 40px;padding: 0px 20px 0px 20px;font-family: sans-serif;"><a style="color: white;text-decoration: none"
							href="thanhtoan">Mua Hàng</a></button></div>

						</div>
					</div>
				</div>

			</div>
			@extends('extend/footer')
		</body>
		</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>mua hàng</title>
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


	<div class="container" style="margin-top: 110px;margin-bottom: 20px">
		<div class="" style="height:70px;line-height:70px;"><h1>Thanh Toán</h1></div>
		<div class="row" style="background: white;padding: 20px;font-size: 18px;">
			<div class="col-md-12" style="color: #E2472F; ">
				<i class="fas fa-map-marker-alt"></i>&nbsp&nbspĐịa Chỉ Nhận Hàng
			</div>
			<div class="col-md-12" style="margin-top: 10px;">
				<div class="row">
					<div class="col-md-10">
						{{$tt->ho_ten}}&nbsp&nbsp&nbsp+{{$tt->sdt}}&nbsp&nbsp&nbsp{{$tt->dia_chi}}&nbsp&nbsp&nbsp<span style="color: #929292;">mặc định</span>
					</div>
					<div class="col-md-2" id="btn1" data-toggle="modal" data-target="#exampleModalCenter" style="color:blue;cursor: pointer;">+ Thay đổi địa chỉ</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="container">
		<div  class="row" style="height:50px;background:white;font-size:18px;line-height:50px;margin-bottom:10px;">
			<div class="col-md-7">Sản phẩm</div>
			<div class="col-md-2">Đơn giá</div>
			<div class="col-md-2">Số lượng</div>
			<div class="col-md-1">Số tiền</div>
		</div>
		@foreach($content as $va)
		<div class="container row" style="background: white;padding:10px;width:110%;margin-bottom: 30px;">
			<div class="col-md-7">
				<div class="row">
					<div class="col-md-3">
						<img src="../public/img/{{$va->options->img}}" style="height: 100px; width: 100px;" alt="">
					</div>
					<div class="col-md-9">
						{{$va->name}}
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="row">
					<div class="col-md-12">{{number_format($va->price,3)}}</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="row">
					<div class="col-md-5" style="text-align:center">{{$va->qty}}</div>
				</div>
			</div>
			<div class="col-md-1">{{number_format($va->price*$va->qty,3)}}</div>

		</div>
		@endforeach
		

	</div>



	<div class="container" style="padding: 20px;background: white;font-family: sans-serif;margin-bottom: 50px;margin-top: 40px;">
		<div class="row">
			<div class="col-md-12" style="font-size: 20px;font-weight: bold;border-bottom: solid 2px #f5f5f5;padding-bottom: 20px;">Phương thức thanh toán</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="font-size: 17px;border-bottom: solid 2px #f5f5f5;padding: 20px;">Thanh toán khi nhận hàng</div>
		</div>
		<div class="row" style="border-bottom: solid 2px #f5f5f5">
			<div class="col-md-12">
				<div class="row" style="margin: 10px 0px 10px 0px">
					<div class="col-md-8"></div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">Tổng tiền hàng</div>
							<div class="col-md-6">{{number_format($total,3)}} đ</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin: 20px 0px 10px 0px">
					<div class="col-md-8"></div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">Phí vận chuyển</div>
							<div class="col-md-6">0 đ</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin: 20px 0px 10px 0px;height: 50px;">
					<div class="col-md-8"></div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">Tổng thanh toán</div>
							<div class="col-md-6" style="color: red; font-size: 23px">{{number_format($total,3)}} đ</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"></div>
			<div class="col-md-3" style="padding: 25px;">
				<form action="dat_hang" method="post" accept-charset="utf-8">
					<input type="submit" style="width: 100%;height: 40px;background: red;color: white;border:none;" value="Đặt Hàng" name="submit">
					{!! csrf_field() !!}
				</form>
			</div>
		</div>
	</div>



	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content" style="width: 50%;margin: auto;">
				<div class="modal-header">
					<h5 class="modal-title" style="font-size: 23px;font-weight: bold;margin-bottom: 10px;" id="exampleModalLongTitle">Thay Đổi Địa Chỉ</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="capnhapdc" method="post" accept-charset="utf-8">
						<div class="row">
							<div class="col-md-12">
								<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;margin-bottom: 15px;" type="text" name="sdt" placeholder="Số điện thoại">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;margin-bottom: 30px;" type="text" name="dc" placeholder="Địa chỉ">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;background: #E2472F;color:white" type="submit" name="submit" value="Cập nhật">
							</div>
						</div>
						{!! csrf_field()!!}
					</form>
				</div>
			</div>
		</div>
	</div>
	@extends('extend/footer')
</body>
</html>
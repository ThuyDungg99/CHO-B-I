<?php
$danhmuc = DB::table('sanpham')->select('phan_loai')->groupby('phan_loai')->get();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Danh Mục</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{ asset('../public/css/css.css') }}">
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
	<script>
		var toancuc=1
		$(document).ready(function(){
			$("#xemthem").click(function(){
				toancuc = toancuc + 1;
				$.get("ajax_xemthem", {trang:toancuc} , function(data){
					$("#cho_them").append(data);
				});
			});
		});
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
	@extends('extend/menu');
	
	<div class="container-fluid" style="margin-top: 100px;">
		<div class="row">
			<div class="col-md-2">
				<ul class="list-group" style="font-size: 19px;">
					<li class="list-group-item"><a href="danhmuc" title="">Danh Mục</a></li>
					@foreach($danhmuc as $value)
					<li class="list-group-item" style="padding-left: 30px;"><a style="color: black;text-decoration: none" href="danhmuc?dm={{$value->phan_loai}}" title="">{{ ucwords($value->phan_loai) }}</a></li>
					@endforeach
				</ul>

			</div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10 chua_sp" id="cho_them">
						<?php

//if tp danhmuc
						if (isset($_GET['dm'])) {
							?>
							@foreach($danhmuc as $value)
							<?php
							if ($_GET['dm'] == "$value->phan_loai") {
								$dm = $value->phan_loai;
								$dm = DB::table('sanpham')->where('phan_loai',$dm)->get();
								foreach ($dm as $v) {
									?>
									<div class="sp_1" style="width: 280px">
										<div class="chua_anh">
											<img src="{{$link.$v->anh}}" alt="">
										</div>
										<a id="aten_sp" href="trang_sp?sp={{$v->id}}"><div class="ten_sp" style="overflow-y: hidden;width: 100%;height: 35px;padding: 5px;line-height: 35px;">{{$v->ten_sp}}</div></a>
										<div class="gia_sp">
											<div>{{number_format($v->gia_khuyen_mai,3)}} đ</div>
											<div class="pice_gach">{{number_format($v->gia_thuong,3)}} đ</div>
										</div>
										<button onclick="mua_hang()"><a href="{!!  url('muahang',[$v->id,$v->ten_sp]) !!}" style="color: white;text-decoration: none" title="">Thêm vào giỏ hàng</a></button>
									</div>
									<?php
								}
							}
							?>
							@endforeach
							<?php
						}

//else all danhmuc
						else{
							?>
							@foreach($all as $row)
							<div class="sp_1" style="width: 280px;">
								<div class="chua_anh" >
									<img src="{{$link.$row->anh}}" alt="" >
								</div>
								<a id="aten_sp" href="trang_sp?sp={{$row->id}}"><div class="ten_sp" style="overflow-y: hidden;width: 100%;height: 35px;padding: 5px;line-height: 35px;">{{$row->ten_sp}}</div></a>
								<div class="gia_sp">
									<div>{{number_format($row->gia_khuyen_mai,3) }}</div>
									<div class="pice_gach">{{number_format($row->gia_thuong,3) }}</div>
								</div>
								<button onclick="mua_hang()"><a href="{!!  url('muahang',[$row->id,$row->ten_sp]) !!}" style="color: white;text-decoration: none" title="">Thêm vào giỏ hàng</a></button>
							</div>
							@endforeach
							<?php
						}
						?>
						
					</div>
					<div class="col-md-1"></div>
				</div>
				<?php
//nút xem thêm
				if (!isset($_GET['dm'])) {
					?>
					<div class="row" style="margin-top: 40px;">
						<input id="xemthem" style="width: 100px; margin: auto;" type="submit" name="submit" value="Xem thêm">
					</div>
					<?php
				}
				?>
				
			</div>
			
		</div>
		<div class="row">
			@extends('extend/footer')
		</div>
	</div>
	
	
	
	
</body>
</html>
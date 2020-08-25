

<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
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
	<style type="text/css">
		.pagination{
			display: flex;
			justify-content: center;
			margin-top: 50px;
		}
		.user{
			color: white;
			font-size: 20px;
		}
		.signup{ 
			width: 1000px !important;
		}
		.ten_sp{
			overflow-y: hidden;
			width: 100%;
			height: 40px;
			padding: 5px;
			line-height: 35px;
		}
		@media screen and (max-width: 992px ){
			.ten_sp{
				height: 68px;
			}
		}
	</style>
</head>
<body>
	<div class="wrapper" id="home">
		
		<section class="sec1"><img class="anh" src="../public/img/anh_banner.jpg">
			<div class="tc tieu_chi1"><i class="far fa-dot-circle"></i>Hãy bắt đầu hành trình của bạn tại đây</div>
			<div class="tc tieu_chi2"><i class="far fa-dot-circle"></i>Nhiều ưu đãi mới</div>
			<div class="tc tieu_chi3"><i class="far fa-dot-circle"></i>Sản phẩm tốt nhất cho bạn</div>
			<div class="cau_td">
				<div>Bạn muốn một chuyến đi nhiều niềm vui và ý nghĩa.</div>
				<div>Hãy chuẩn bị cho điều đó tại đây.</div>
			</div>
			<form action="index_search">
				<div class="in_put"><input class="search" name="key" type="text" placeholder="Quick Search" required=""><button class="btn" type="submit"><span class="fa fa-search"></span></button></div>
			</form>
		</section>
		@extends('extend/menu');


		<div class="tong">
			<div class="tieu_de_sp1">Sản Phẩm Mới</div>
			<div class="chua_sale123">
				<div class="anh_sale anh_sale1 box">
					<div class="imgBox">
						@foreach($anh1 as $value)
						<img class="img_sale1" src="{{$link.$value->anh}}" alt="">
						@endforeach
						
						<div class="sale">
							Sale
						</div>
					</div>
					
					<div class="details">
						<div class="content">
							<h2>Sale tới 50%</h2>
							<button onclick="mua_hang()" class="them_vao_gio_hang"><a href="{!!  url('muahang',[$value->id,$value->ten_sp]) !!}" style="color: white;text-decoration: none" title="">Thêm vào giỏ hàng</a></button>
						</div>
					</div>
				</div>
				<div class="chua_sale23">
					<div class="anh_sale anh_sale2 box">
						<div class="imgBox">
							@foreach($anh2 as $value)
							<img class="img_sale1" src="{{$link.$value->anh}}" alt="">
							@endforeach
							<div class="sale sale2">
								Sale
							</div>
						</div>

						<div class="details">
							<div class="content content_1">
								<h2>Sale tới 50%</h2>
								<button onclick="mua_hang()" class="them_vao_gio_hang"><a href="{!!  url('muahang',[$value->id,$value->ten_sp]) !!}" style="color: white;text-decoration: none" title="">Thêm vào giỏ hàng</a></button>
							</div>
						</div>
					</div>
					<div class="anh_sale anh_sale3 box">
						<div class="imgBox">
							@foreach($anh3 as $value)
							<img class="img_sale1" src="{{$link.$value->anh}}" alt="">
							@endforeach
							<div class="sale sale2">
								Sale
							</div>
						</div>

						<div class="details">
							<div class="content content_1">
								<h2>Sale tới 50%</h2>
								<button onclick="mua_hang()" class="them_vao_gio_hang"><a href="{!!  url('muahang',[$value->id,$value->ten_sp]) !!}" style="color: white;text-decoration: none" title="">Thêm vào giỏ hàng</a></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div  id="congnghe"></div>
			<div class="chua_sale456">
				<div class="chua_sale45">
					<div class="anh_sale4 box">
						<div class="imgBox">
							@foreach($anh4 as $value)
							<img class="img_sale1" src="{{$link.$value->anh}}" alt="">
							@endforeach
						</div>
						<div class="details details1">
							<div class="content content_2">
								<div class="camera">camera</div>
								<div class="camera pice">$250</div>
								<button onclick="mua_hang()" class="them_vao_gio_hang"><a href="{!!  url('muahang',[$value->id,$value->ten_sp]) !!}" style="color: white;text-decoration: none" title="">Thêm vào giỏ hàng</a></button>
							</div>
						</div>
					</div>
					<div class="tin_sale tin_sale1">ƯU ĐÃI ĐẶC BIỆT VÀ 10% <div>GIẢM GIÁ</div> CHO CAMERA</div>
					<div class="tin_sale tin_sale1" style="overflow: hidden;">ƯU ĐÃI ĐẶC BIỆT VÀ 10% <div>GIẢM GIÁ</div> CHO Kính Bulldog</div>
					<div class="anh_sale5 box">
						<div class="imgBox">
							@foreach($anh5 as $value)
							<img class="img_sale1" src="{{$link.$value->anh}}" alt="">
							@endforeach
						</div>
						<div class="details details1">
							<div class="content content_2">
								<div class="camera">Kính Bulldog</div>
								<div class="camera pice">$250</div>
								<button onclick="mua_hang()" class="them_vao_gio_hang"><a href="{!!  url('muahang',[$value->id,$value->ten_sp]) !!}" style="color: white;text-decoration: none" title="">Thêm vào giỏ hàng</a></button>
							</div>
						</div>
					</div>
				</div>
				<div class="anh_sale6">
					@foreach($anh6 as $value)
					<img class="img_sale1" src="{{$link.$value->anh}}" alt="">
					@endforeach
				</div>
			</div>
		</div>

		<div class="tong_2">
			<div class="tieu_de_sp1">Sản Phẩm Phổ Biến</div>
			<div class="thanh_menu" id="dobiker">
				<div class="menu" onclick="doimau(1)" id="dophuot" >Đồ phượt</div>
				<div class="menu" onclick="doimau(2)" id="dungcuphuot">Dụng cụ phượt</div>
				<div class="menu" onclick="doimau(3)" id="congnghee">Công nghệ</div>
			</div>
			<div class="chua_sp" >
				@foreach($sanpham as $row)
				<div class="sp_1">
					<div style="float: left;position: absolute;background-color: black;color: white;margin: 7px;padding: 0 5px 0 5px;"><i class="fas fa-eye"></i> {{$row->views}}</div>
					<div class="chua_anh">
						<img src="{{$link.$row->anh}}" alt="">
					</div>
					<a id="aten_sp" href="trang_sp?sp={{$row->id}}"><div class="ten_sp" >{{$row->ten_sp}}</div></a>
					<div class="gia_sp">
						<div>{{number_format($row->gia_khuyen_mai,3)}} đ</div>
						<div class="pice_gach">{{number_format($row->gia_thuong,3)}} đ</div>
					</div>
					<button onclick="mua_hang()"><a href="{!!  url('muahang',[$row->id,$row->ten_sp]) !!}" style="color: white;text-decoration: none" title="">Thêm vào giỏ hàng</a></button>

				</div>

				@endforeach
			</div>
			{{ $sanpham->links() }}
		</div>
		@extends('extend/footer')

		
	</div>



</body>
</html>
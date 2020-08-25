<style type="text/css" media="screen">
	.canhan:hover{
		background-color: none;
		color: white;
	}
	.sc:hover{
		background-color: white;
		color: black;
	}
	@media screen and (max-width: 992px ){
			
		}
</style>
<?php

$name = session()->get('name');
$danhmuc = DB::table('sanpham')->select('phan_loai')->groupby('phan_loai')->get();
?>
<nav class="top_menu1" style="z-index: 1;">
	<div class="logo">
		<img class="anh_logo" src="../public/img/logo.jpg">
	</div>
	<ul>
		<li><a href="trangchu" style="font-family: sans-serif;">Home</a></li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false" style="margin-top: -12px;font-family: sans-serif;">Danh Mục</a>
			<div class="dropdown-menu" style="background: black;">
				<a class="dropdown-item sc" style="height: 50px;padding-top: 0px;line-height: 50px;" href="danhmuc">Danh Mục</a>
				@foreach($danhmuc as $value)
				<a class="dropdown-item sc" style="height: 50px;padding-top: 0px;line-height: 50px;" href="danhmuc?dm={{ $value->phan_loai }}">{{ $value->phan_loai }}</a>
				@endforeach
				
			</div>
		</li>
		<li><a href="#lienhe" style="font-family: sans-serif;">Liên Hệ</a></li>
		<li>
			@if(session()->has('name'))	
			<div class="user">
				<div class="dropdown">
					<a class="nav-link canhan dropdown-toggle" style="margin-top: -12px;font-family: sans-serif;" href="#" id="dropdownMenuLink" data-toggle="dropdown">
						<i class="fas fa-user-circle"></i>&nbsp{{$name}}
					</a>

					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="color: black;background-color: black;margin-left: 30px;">
						<a class="dropdown-item" style="height: 50px;line-height: 50px;padding-top: 0px;" href="canhan">Xem đơn hàng</a>
						<a class="dropdown-item" style="height: 50px;line-height: 50px;padding-top: 0px;" href="canhan">Xem thông tin</a>
					</div>
					<li>
					<a class="active signup" href="dangxuat">Sign up</a></li>
				</div>
				

			</div>

			@endif
			@if(!session()->has('name'))	
			<div class="user">
				<a href="trang_ca_nhan.php" title="" style="color;white;text-decoration:none">&nbsp</a>&nbsp <a class="active signup" href="dangnhap">Log in</a>
			</div>
			@endif

		</li>
		<li style="color: white;line-height: 80px;margin-left: 30px;font-size: 20px;">
			<a href="giohang" title=""><i class="fas fa-shopping-cart"></i>
				<div style="position: absolute;top: 0px;right:115px;">
					@if(session()->has('count'))
					{{session()->get('count')}}
					@else
					0
					@endif

				</div>
			</a>
		</li>
	</ul>
</nav>

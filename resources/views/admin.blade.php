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
	<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
	<style type="text/css" media="screen">
		body{
			background-color: rgb(245, 245, 245);
			font-family: Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
			color: #858796;
		}
		.menu{
			background-color: #4e73df;
		}
		.tong_menu{
			height: 100%;
		}
		.menu_top{
			background-color: white;
			height: 4.375rem;
			line-height: 4.375rem;
			box-shadow: 0px 2px 15px 0px rgba(32,33,36,0.13);
		}
		.fa-laugh-wink{
			color: white;
			font-size: 30px;
		}
		.menu_tp{
			color: white;
			font-size: .85rem;
			font-weight: 700;

		}
		a{
			text-decoration: none !important;
			color: rgba(255,255,255,.8);
		}
		a:hover{
			color:white;
		}
		.content{
			background-color: white;
			margin: 0rem 1rem 3.375rem 1rem;
			box-shadow: 1px 2px 15px 3px rgba(32,33,36,0.13);
			padding: 15px 18px 15px 18px;
			border-radius: 7px;
		}
		.td{
			font-size: 1.85rem;
			height: 5.5rem;
			line-height: 5.5rem;
			padding-left: 30px;
			color: #5a5c69!important;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row tong_menu">

			{{-- menu trái --}}

			<div class="col-md-2 menu">
				<div class="row" style="height: 4.375rem;border-bottom: solid 1px white;margin: 0px 5px 0px 5px;line-height: 4.375rem">
					<div class="col-md-12" style="text-align: center;">
						<i class="fas fa-laugh-wink"></i>&nbsp&nbsp&nbsp<span style="color:white;font-weight: 800;letter-spacing: .05rem;">Thùy Dung</span>
					</div>
					<div class="col-md-12 menu_tp">
						<i class="fas fa-fw fa-tachometer-alt"></i>&nbsp&nbsp<a href="admin?menu=xemsanpham" title="">Xem sản phẩm</a><span style="float: right;color: rgba(255,255,255,.8);"><i class="fas fa-angle-right"></i></span>
					</div>
					<div class="col-md-12 menu_tp">
						<i class="fas fa-users"></i>&nbsp&nbsp<a href="admin?menu=quanlykhachhang" title="">Quản lý khách hàng</a><span style="float: right;color: rgba(255,255,255,.8);"><i class="fas fa-angle-right"></i></span>
					</div>
					<div class="col-md-12 menu_tp">
						<i class="fas fa-tasks"></i>&nbsp&nbsp<a href="admin?menu=quanlydonhang&lc=tc" title="">Quản Lý Đơn Hàng</a><span style="float: right;color: rgba(255,255,255,.8);"><i class="fas fa-angle-right"></i></span>
					</div>
					<div class="col-md-12 menu_tp">
						<i class="fas fa-eye"></i>&nbsp&nbsp<a href="admin?menu=xemdoanhthu" title="">Xem Doanh Thu</a><span style="float: right;color: rgba(255,255,255,.8);"><i class="fas fa-angle-right"></i></span>
					</div>
				</div>
			</div>
			
			{{-- nội dung --}}

			<div class="col-md-10">

				{{-- menu top --}}

				<div class="row menu_top">
					<div class="col-md-9">
						<nav class="navbar navbar-light bg-light" style="height: 4.375rem">
							<form class="form-inline">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
								<button class="btn btn-outline-success my-2 my-sm-0" style="background-color: #4e73df;color: white;border: none" type="submit">Search</button>
							</form>
						</nav>
					</div>
					<div class="col-md-1" style="font-size: 15px;padding-right: 0px;">
						<button class="btn my-2 my-sm-0" style="background-color: #4e73df;color: white;border: none" type="submit"><a href="dangxuat" title="">SIGN UP</a></button>
					</div>
					<div class="col-md-1" style="font-size: 15px;padding-right: 0px;">
					@if(session()->has('admin'))
						<span style="float: right;font-weight: bold;">{{Session::get('admin')}}</span>
					@endif
					</div>
					<div class="col-md-1" style="font-size: 25px;">
						<span style="float: left"><i class="fas fa-user-circle"></i></span>
					</div>
				</div>


				{{-- hien thi noi dung --}}

				<?php
				if (isset($_GET["menu"])) {

	//xem san pham
					if ($_GET["menu"] == "xemsanpham") {
						?>
						
						<div class="row td">
							Xem Sản Phẩm
						</div>
						<div class="row content">
							<div class="col-md-12">
								<span data-toggle="modal" data-target="#exampleModalCenter" style="font-size: 18px;float: right;height: 50px;line-height: 50px;cursor: pointer;">+ Thêm sản phẩm mới</span>
							</div>
							@foreach($xem as $value)
							<div class="col-md-12" style="padding:20px 0 20px 0;border-bottom:solid 1px #929292">
								<form action="admin_sua/{{$value->id}}" method="get">
									<div class="row">
										<div class="col-md-2">
											<img style="height:130px;width:150px;" src="../public/img/{{$value->anh}}" alt="">
										</div>
										<div class="col-md-8">{{$value->ten_sp}}
										</br>Số lượng: {{$value->so_luong}}</br>
										Giá: {{number_format($value->gia_khuyen_mai,3)}} đ
									</div>
									<div class="col-md-1">
										<div>
											<input style="height:35px;width:60px;background-color:#4e73df;border:none;color:white;border-radius:5px;text-align:center;line-height:33px;" type="submit" name="sua" value="Sửa" placeholder="">    
										</div>
									</div>
									<div class="col-md-1">
										<div style="height:35px;width:60px;background-color:#4e73df;border:none;color:white;border-radius:5px;text-align:center;line-height:33px;"><a href="xoa_sp/{{$value->id}}" title="">Xóa</a></div>
									</div>
								</div>
								{!! csrf_field() !!}
							</form>
						</div>

						@endforeach
					</div>

					<?php
				}
	//end
	//quan lý khach hang
				if ($_GET["menu"] == "quanlykhachhang") {
					?>
					<div class="row td">
						Quản Lý Khách Hàng
					</div>
					<div class="row content">
						<div class="col-md-12" style="margin-bottom: 20px;margin-top: 10px;">
							<h4>Danh sách các khách hàng</h4>
						</div>
						<div class="col-md-12">
							<table class="table">
								<thead style="background: #4e73df;color:white; ">
									<tr>
										<th scope="col">Họ và tên</th>
										<th scope="col">Số điện thoại</th>
										<th scope="col">Địa chỉ</th>
										<th scope="col">Giới tính</th>
										<th scope="col">Username</th>
										<th scope="col">Mật khẩu</th> 
									</tr>
								</thead>
								@foreach($qlkh as $value)
								<?php
								$count = DB::table('hoadon')->where('id_khachhang',$value->id)->get();
								?>
								<tr>
									<tr>
										<td>{{$value->ho_ten}}</td>
										<td>{{$value->sdt}}</td>
										<td>{{$value->dia_chi}}</td>
										<td>{{$value->gioi_tinh}}</td>
										<td>{{$value->user_name}}</td>
										<td>{{$value->mat_khau}}</td> 
									</tr>
									<tr>
										<td></td>
										<td>Hóa đơn : {{$count->count()}} (đang có)</td>
										<td><button data-toggle="modal" data-target="#exampleModal{{$value->id}}" type="" style="background: #4e73df;border:none; height:40px;color: white;padding: 0px 10px 0px 10px;">xem chi tiết các hóa đơn</button></td>
									</tr>
								</tr>


								

								<!-- Modal -->
								<div class="modal fade" id="exampleModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Chi tiết các hóa đơn</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												@foreach($count as $va)
												<div class="row" style="margin-bottom:20px;padding:10px;background-color:white">
													<div class="col-md-12">
														<div class="row" style="font-size:20px;font-family: sans-serif;border-bottom:solid 1px #929292">
															<div class="col-md-5">shopvivu</div>
															<div class="col-md-7" style="float:right"><p style="float:right">Đơn hàng:&nbsp&nbsp{{$va->ngay_mua}} </p></div>
														</div>
													</div>
													<?php
													$ct = DB::table('ct_hoadon')->where('id_hoadon',$va->id)->get();
													?>
													@foreach($ct as $key)
													<?php
													$sp = DB::table('sanpham')->where('id',$key->id_sanpham)->first();
													?>
													<div class="col-md-12">'
														<div class="row" style="padding:10px 0px 10px 0px;;border-bottom:solid 1px #929292;">
															<div class="col-md-3"><img src="../public/img/{{$sp->anh}}" style="height: 100px; width: 100px;" alt=""></div>
															<div class="col-md-7">{{$sp->ten_sp}}</br> x{{$key->so_luong}}</div>
															<div class="col-md-2"><p style="float:right">{{number_format($key->don_gia,3)}}đ</p></div>
														</div>
													</div>
													@endforeach
													<div class="col-md-12">
														<span style="float:right">Tổng số tiền: &nbsp<span style="color: red;font-size:28px;font-weight: bold">{{number_format($va->tong_tien,3)}}đ</span></span>
													</div>

													
												</div>

												@endforeach
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>



								@endforeach
							</table>
						</div>
					</div>
					<?php
				}
	//end
				
	//quản lý đơn hàng
				if ($_GET["menu"] == "quanlydonhang") {

					?>

					<div class="row td">
						Quản Lý Đơn Hàng
					</div>
					<div class="row content">
						<div class="col-md-12" style="margin-bottom: 20px;margin-top: 10px;">
							<div class="row">
								<div class="col-md-6">
									<h4>Danh sách các hóa đơn</h4>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6">
											<span style="background: #4e73df;float: right;height: 38px;padding: 0 20px 0 20px;line-height: 38px;font-weight: 700;font-family: sans-serif;border-radius: 5px;"><a href="admin.php?menu=quanlydonhang&lc=tc" title="">Tất cả</a></span>
										</div>
										<div class="col-md-6">
											<form action="timdonhang" method="post" accept-charset="utf-8" enctype="multipart/form-data">
												<input style="height: 38px;line-height: 38px;font-family: sans-serif;border-radius: 5px;border: solid 1px;padding: 0 10px 0 10px;" type="date" name="date" value="" placeholder="">
												<input style="background-color: #4e73df;height: 38px;line-height: 38px;border: none;color: white;border-radius: 5px;font-weight: 500;font-family: sans-serif;padding: 0 10px 0 10px;letter-spacing: 1px;" type="submit" name="tim" value="Tìm">
												{!! csrf_field() !!}
											</form>
										</div>
									</div> 
								</div>
							</div>

						</div>
						<?php
						if (isset($_GET["lc"])) {
							if ($_GET["lc"] == "tc") {
								?>
								<div class="col-md-12" style="padding-bottom: 400px;">
									<div class="row" style="height:45px;line-height: 45px;background-color: #4e73df;color: white;">
										<div class="col-md-3">
											Đơn hàng
										</div>
										<div class="col-md-3">
											Tên khách hàng  
										</div>
										<div class="col-md-2">
											Số lượng 
										</div>
										<div class="col-md-2">
											Ngày mua  
										</div>
										<div class="col-md-2">
											<span style="float: right;">Tổng tiền</span>  
										</div>
									</div>
									@foreach($donhang as $value)
									<?php
									$sp = DB::table('ct_hoadon')->where('id_hoadon',$value->id)->get();

									$kh = DB::table('khachhang')->where('id',$value->id_khachhang)->first();
									
									?>
									<div class="row" style="height:50px;line-height: 50px;border-bottom:solid;">
										<div class="col-md-3">
											<div class="row">
												<div class="col-md-6">
													<form action="xoadonhang/{{$value->id}}" method="get" accept-charset="utf-8">
														<input style="height:35px;width:60px;background-color:#4e73df;border:none;color:white;border-radius:5px;text-align:center;line-height:33px;" type="submit" name="xoadonhang" value="Xóa" placeholder="">
														{!! csrf_field() !!}
													</form>
												</div>
												<div class="col-md-6">
													<span data-toggle="modal" style="color:blue;cursor:pointer" data-target="#exampleModal{{$value->id}}">Xem đơn hàng</span>
												</div>
											</div>
										</div>
										<div class="col-md-3">
											{{$kh->ho_ten}}
										</div>
										<div class="col-md-2">
											{{$sp->count()}} sản phẩm 
										</div>
										<div class="col-md-2">
											{{$value->ngay_mua}}&nbsp;/&nbsp;{{$value->thoi_gian}}
										</div>
										<div class="col-md-2">
											<span style="float: right">{{number_format($value->tong_tien,3)}}đ</span>
											
										</div>
									</div>

									

									<!-- Modal -->
									<div class="modal fade" id="exampleModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													@foreach($sp as $va)
													<?php
													$spsp = DB::table('sanpham')->where('id',$va->id_sanpham)->first();
													
													?>
													
													<?php  ?>
													<div class="col-md-12">
														<div class="row" style="padding:10px 0px 10px 0px;border-bottom:solid 1px #929292;">
															<div class="col-md-3"><img src="../public/img/{{$spsp->anh}}" style="height: 100px; width: 100px;" alt=""></div>
															<div class="col-md-7">{{$spsp->ten_sp}}</br> x{{$va->so_luong}}</div>
															<div class="col-md-2"><p style="float:right">{{number_format($va->don_gia,3)}}đ</p></div>
														</div>
													</div>
													@endforeach
													<div class="col-md-12">
														<span style="float:right">Tổng số tiền: &nbsp<span style="color: red;font-size:28px;font-weight: bold">{{number_format($value->tong_tien,3)}}đ</span></span>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>

									@endforeach
								</div>

							</div>

							<?php
						}
						if ($_GET["lc"] == "t") {
							$date = session()->get('date');
							$tim = DB::table('hoadon')->where('ngay_mua',$date)->get();
							?>
							<div class="col-md-12" style="padding-bottom: 400px;">
								<div class="row" style="height:45px;line-height: 45px;background-color: #4e73df;color: white;">
									<div class="col-md-3">
										Đơn hàng
									</div>
									<div class="col-md-3">
										Tên khách hàng  
									</div>
									<div class="col-md-2">
										Số lượng 
									</div>
									<div class="col-md-2">
										Ngày mua  
									</div>
									<div class="col-md-2">
										<span style="float: right;">Tổng tiền</span>  
									</div>
								</div>
								@foreach($tim as $value)
								<?php
								$sp = DB::table('ct_hoadon')->where('id_hoadon',$value->id)->get();

								$kh = DB::table('khachhang')->where('id',$value->id_khachhang)->first();
								?>
								<div class="row" style="height:50px;line-height: 50px;border-bottom:solid;">
									<div class="col-md-3">
										<div class="row">
											<div class="col-md-6">
												<form action="xoadonhang/{{$value->id}}" method="get" accept-charset="utf-8">
													<input style="height:35px;width:60px;background-color:#4e73df;border:none;color:white;border-radius:5px;text-align:center;line-height:33px;" type="submit" name="xoadonhang" value="Xóa" placeholder="">
													{!! csrf_field() !!}
												</form>
											</div>
											<div class="col-md-6">
												<span data-toggle="modal" style="color:blue;cursor:pointer" data-target="#exampleModal{{$value->id}}">Xem đơn hàng</span>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										{{$kh->ho_ten}}
									</div>
									<div class="col-md-2">
										{{$sp->count()}} sản phẩm 
									</div>
									<div class="col-md-2">
										{{$value->ngay_mua}}&nbsp;/&nbsp;{{$value->thoi_gian}}
									</div>
									<div class="col-md-2">
										<span style="float: right">{{number_format($value->tong_tien,3)}}đ</span>
									</div>
								</div>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												@foreach($sp as $va)
												<?php
												$spsp = DB::table('sanpham')->where('id',$va->id_sanpham)->first();
												?>
												<div class="col-md-12">
													<div class="row" style="padding:10px 0px 10px 0px;border-bottom:solid 1px #929292;">
														<div class="col-md-3"><img src="../public/img/{{$spsp->anh}}" style="height: 100px; width: 100px;" alt=""></div>
														<div class="col-md-7">{{$spsp->ten_sp}}</br> x{{$va->so_luong}}</div>
														<div class="col-md-2"><p style="float:right">{{number_format($va->don_gia,3)}}đ</p></div>
													</div>
												</div>
												@endforeach
												<div class="col-md-12">
													<span style="float:right">Tổng số tiền: &nbsp<span style="color: red;font-size:28px;font-weight: bold">{{number_format($value->tong_tien,3)}}đ</span></span>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>

								@endforeach
							</div>

							<?php

						}
					}
				}
	//end 
				
	//quan ly doanh thu
				if ($_GET["menu"] == "xemdoanhthu") {
					?>
					<div class="row td">
						Xem Doanh Thu
					</div>
					<div class="row" style="padding-left: 30px;">
						<div class="col-md-7" style="height: 355px;">
							<div class="row content" style="padding-left: 10px;display: flex;height: 400px;bottom:0px;margin-bottom: 30px;padding-bottom: 100px;">
								<div style="height:100%;border-right: solid 1px;">
									<sapn>3.000.000-</sapn>
								</div>
								<div style="height: 100%;display: flex;bottom:0px;align-items: flex-end;width:500px;margin-bottom: 30px;overflow-y: hidden;">
									@foreach($doanhthu1 as $va1)
									<?php $t = ($va1->total*100)/3000 ?>
									<div style="height:{{$t}}%;width: 40px;background:#4e73df;border: solid 1px;margin: 0 10px 0 5px;"><span style="color:#858796;position:absolute;bottom:0px;transform: rotate(45deg);">{{$va1->ngay_mua}}</span></div>
									@endforeach
								</div>
							</div>
							<div class="row content" style="height: 200px;"></div>
						</div>
						<div class="col-md-4 content" style="padding-bottom: 400px;">
							<div class="col-md-12" style="font-size:13px;line-height: 45px;background-color: #4e73df;color: white;">
								<div class="row">
									<div class="col-md-4">
										Ngày
									</div>
									<div class="col-md-4">
										Tổng Hóa Đơn
									</div>
									<div class="col-md-4">
										<span style="float: right;">Doanh Thu</span>
									</div>
								</div>
							</div>
							@foreach($doanhthu as $value)
							<div class="col-md-12" style="height:50px;line-height: 50px;border-bottom:solid;font-size: 15px;">
								<div class="row">
									<div class="col-md-4">
										{{$value->ngay_mua}}
									</div>
									<div class="col-md-4" style="text-align:center">
										{{$value->id1}}
									</div>
									<div class="col-md-4"><span style="float:right">{{number_format($value->total,3)}}đ</span>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>




					<?php

				}
	//end

			}

		//else
			else{
				?>
				<div class="row td">
					Xem Sản Phẩm
				</div>
				<div class="row content">
					<div class="col-md-12">
						<span data-toggle="modal" data-target="#exampleModalCenter" style="font-size: 18px;float: right;height: 50px;line-height: 50px;cursor: pointer;">+ Thêm sản phẩm mới</span>
					</div>
					@foreach($xem as $value)
					<div class="col-md-12" style="padding:20px 0 20px 0;border-bottom:solid 1px #929292">
						<form action="admin_sua/{{$value->id}}" method="get">
							<div class="row">
								<div class="col-md-2">
									<img style="height:130px;width:150px;" src="../public/img/{{$value->anh}}" alt="">
								</div>
								<div class="col-md-8">{{$value->ten_sp}}
								</br>Số lượng: {{$value->so_luong}}</br>
								Giá: {{number_format($value->gia_khuyen_mai,3)}} đ
							</div>
							<div class="col-md-1">
								<div>
									<input style="height:35px;width:60px;background-color:#4e73df;border:none;color:white;border-radius:5px;text-align:center;line-height:33px;" type="submit" name="sua" value="Sửa" placeholder="">    
								</div>
							</div>
							<div class="col-md-1">
								<div style="height:35px;width:60px;background-color:#4e73df;border:none;color:white;border-radius:5px;text-align:center;line-height:33px;"><a href="" title="">Xóa</a></div>
							</div>
						</div>
						{!! csrf_field() !!}
					</form>
				</div>

				@endforeach
				<?php
			}

			?>


		</div>
	</div>
</div>


{{-- form them san pham --}}

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document" style="border: solid;">
		<div class="modal-content" style="width: 900px;">
			<div class="modal-header">
				<h5 class="modal-title" style="font-size: 23px;font-weight: bold;margin-bottom: 10px;" id="exampleModalLongTitle">Thêm Sản Phẩm Mới<i></i></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="xuly_them" method="post" accept-charset="utf-8" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12" style="margin-bottom: 10px;">
							Tên sản phẩm :
						</div>
						<div class="col-md-12">
							<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;margin-bottom: 15px;" type="text" name="ten" placeholder="Tên sản phẩm">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12" style="margin-bottom: 10px;">
							Mô Tả :
						</div>
						<div class="col-md-12" style="margin-bottom: 30px;">
							<textarea  id="ck_editor" name="ck_editor"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12" style="margin-bottom: 10px;">
							Số lượng :
						</div>
						<div class="col-md-12">
							<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;margin-bottom: 30px;" type="text" name="sl" placeholder="Số lượng">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12" style="margin-bottom: 10px;">
							Loại sản phẩm :
						</div>
						<div class="col-md-12">
							<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;margin-bottom: 30px;" type="text" name="loai" placeholder="Loại sản phẩm">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12" style="margin-bottom: 10px;">
							Ảnh :
						</div>
						<div class="col-md-12">
							<input  type="file" name="anh" style="margin-bottom: 30px;">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12" style="margin-bottom: 10px;">
							Phân loại :
						</div>
						<div class="col-md-12">
							<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;margin-bottom: 30px;" type="text" name="phan_loai" placeholder="Phân loại">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12" style="margin-bottom: 10px;">
									Giá thường :
								</div>
								<div class="col-md-12">
									<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;margin-bottom: 30px;" type="text" name="gia_thuong" placeholder="Giá thường">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12" style="margin-bottom: 10px;">
									Giá khuyến mãi :
								</div>
								<div class="col-md-12">
									<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;margin-bottom: 30px;" type="text" name="gia_khuyen_mai" placeholder="Giá khuyến mãi">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;background: #4e73df;color:white" type="submit" name="them_moi" value="Thêm mới">
						</div>
						<div class="col-md-6">
							<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;background: #4e73df;color:white" id="btn2" type="submit" name="tro_lai" value="Trở lại">
						</div>
					</div>
					{!! csrf_field() !!}
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	CKEDITOR.replace('ck_editor');
</script>

</body>
</html>
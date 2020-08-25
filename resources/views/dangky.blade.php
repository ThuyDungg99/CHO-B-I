<!DOCTYPE html>
<html>
<head>
	<title> Đăng ký </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="{{ asset('../public/css/dangky.css') }}">
</head>
<body>
	<section class="sec1"></section>
	<div class="container-fluid chua_p1"></div>
	<div class="container-fluid tong">
		<div class="row dn">
			<div class="col-md-12 shopvivu">
				shopvivu.com
			</div>
		</div>
		<div class="row chua_tong" style="margin-top: 50px;">
			<div class="col-md-2"></div>
			<div class="col-md-8 p_chua">
				<div class="row">
					<div class="p_chua1">
						<div class="row">
							<div class="col-md-12 logo">
								<img class="anh" src="../public/img/logo.jpg">
							</div>
							<div class="col-md-12 td">
								<p class="stt1 stt"> Không có mảnh đất nào là</p> <br><p class="xl stt">xa lạ.</p><br>	<p class="stt1 stt stt2">Chỉ có kẻ lữ hành là </p><br><p class="nl stt">người lạ.</p>
							</div>
							<div class="col-md-12 arrow">
								<i class="fas fa-arrow-right"></i>
							</div>
						</div>
					</div>
					<div class="p_chua2">
						<form method="post" action="xuly_dangky">
							<div class="row">
								<div class="col-md-12 Register_Here" style="margin-top: 10px;">Register Here</div>
								<div class="col-md-12">
									<i class="fas fa-user fas1"></i><input id="username" type="text" class="nhap" placeholder="Username" name="username">
								</div>
								<div class="col-md-12">
									<i class="fas fa-user fas1"></i><input id="email" type="text" class="nhap" placeholder="Họ và tên" name="ho_ten">
								</div>
								<div class="col-md-12">
									<i class="fas fa-phone fas1"></i><input id="phone" type="text" class="nhap" placeholder="Phone" name="phone">
								</div>
								<div class="col-md-12">
									<i class="fas fa-lock fas1"></i><input id="password" type="text" class="nhap" placeholder="Password" name="matkhau">
								</div>
								
								<div class="col-md-12">
									<i class="fas fa-map-marker-alt fas1"></i><input id="email" type="text" class="nhap" placeholder="Địa Chỉ" name="diachi">
								</div>
								<div class="col-md-12" style="font-size: 18px;height: 50px;line-height: 50px;">
									Giới Tính: &nbsp
									<label>Nam</label>
									<input type="radio" name="gioitinh" value="nam" checked="checked">&nbsp
									<label>Nữ</label>
									<input type="radio" name="gioitinh" value="nu">
								</div>
								<div class="col-md-12 check_box" style="margin-top: 0px;">
									<input class="checkbox" type="checkbox" name="tick"> I Agree Terms And Conditions
								</div>
								<div class="col-md-12 register" style="margin-bottom: 20px">
									<input class="register_now" type="submit" value="register now">
								</div>
							</div>
							{!! csrf_field() !!}
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
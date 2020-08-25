
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="{{ asset('../public/css/dangnhap.css') }}">
	<style type="text/css" media="screen">
		.button{
		width: 100%;
		height: 50px;
		border: none;
		background: #007cc0;
		color: white;
	}
	</style>
</head>
<body>
	<section class="sec1">
	</section>
	<div class="container-fluid chua_p1"></div>
	<div class="container-fluid chua_p2">
		<div class="row dn" style="margin-top: 30px;">
			<div class="col-md-12 td">
				shopvivu.com
			</div>
		</div>
		<div class="row" style="width: 100%;">
			<div class="p_chua" style="margin: auto;left: 0px;margin-top: 30px;">
				<form action="{{URL::to('/dangnhap')}}" method="post" accept-charset="utf-8">

					<div class="row">

						<div class="col-md-12 logo"><img class="anh" src="../public/img/logo.jpg"></div>
						<div class="col-md-12">
							<i class="fas fa-user fas1"></i><input class="nhap" placeholder="User name" type="text" name="user" id="username">
						</div>
						<div class="col-md-12">
							<i class="fas fa-lock fas1"></i><input class="nhap" placeholder="Password" type="password" name="pass" id="password">
						</div>
					
						<div class="col-md-12 log_in">
							<input type="submit" name="" value="LOG IN" class="button">
						</div>
						<div class="col-md-12 forgot">
							<div class="row">
								<div class="col-md-6"><a href="#" style="cursor: default;">FORGOT PASSWORD?</a></div>
								<div class="col-md-6 p2"><a href="dangky">NEW USER? REGISTER</a></div>
							</div>
						</div>
						<div class="col-md-12 col-xs-12 khac">
							Or Login Using :<a href="redirect/facebook"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-google"></i></a>
						</div>

					</div>
					{!! csrf_field() !!}
				</form>
			</div>
		</div>
	</div>
</body>
</html>
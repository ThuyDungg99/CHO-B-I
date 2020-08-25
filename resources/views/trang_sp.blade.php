

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>trang san pham</title>
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
	<script type="text/javascript">
		$(document).ready(function(){ 

    var submit = $("button[type='submit']");//khai báo biến submit form lấy đối tượng nút submit


    submit.click(function()//khi nút submit được click
    {
        //khai báo các biến dữ liệu gửi lên server
        var user = $("textarea[name='user']").val(); //lấy giá trị trong input user

        //Kiểm tra xem trường đã được nhập hay chưa
        if(user == ''){
        	alert('Vui lòng nhập đánh giá');
        	return false;
        }

        //Lấy toàn bộ dữ liệu trong Form
        var dataa = $('form#form_input').serialize();

        //Sử dụng phương thức Ajax.
        $.ajax({
            type : 'GET', //Sử dụng kiểu gửi dữ liệu POST
            url : 'ajax_danhgia?id={{$_GET["sp"]}}', //gửi dữ liệu sang trang data.php
            data : dataa, //dữ liệu sẽ được gửi
            success : function(data)  // Hàm thực thi khi nhận dữ liệu được từ server
            { 
            	if(data == 'false') 
            	{
            		alert('Không có người dùng');
            	}else{
                    $('#contentcmt').append(data); //dữ liệu HTML trả về sẽ được chèn vào trong thẻ có id content
                }
            }
        });
        return false;
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
	@extends('extend/menu')
	<div class="container" id="content">

		<!-- Page Heading/Breadcrumbs -->
		@foreach($sp as $value)

		
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="trangchu">Trang chủ</a>
			</li>
			<li class="breadcrumb-item active">{{ $value->ten_sp }}</li>
		</ol>

		<!-- Intro Content -->
		@endforeach
		
		<div class="row" id="noidung">
			<div class="col-lg-6" id="content_trai">
				<img class="anh_trai" src="../public/img/{{$value->anh}}" alt="">
			</div>
			<div class="col-lg-6" id="content_phai">
				<div class="mol_giay_top">
					<h4>{{ $value->ten_sp }}</h4>
				</div>

				<div class="modal_giay_body1">
					<hr>
					<p>Gía cũ: <strike>{{ number_format($value->gia_thuong,3) }}</strike> đ</p> 
					<span style="color: red !important;">{{ number_format($value->gia_khuyen_mai,3) }} đ</span> <br>
					<span><i class="fas fa-car"></i> Free ship toàn quốc.</span> <br>
					<span><i class="fas fa-shipping-fast"></i> Chuyển phát nhanh.</span>
					<hr>
					<form action="">
						<label>Số lượng: </label>
						<input type="number" name="" id="soluong" min="1" max="{{$value->so_luong}}" style="width: 50px !important"> <br> <br>
						<button onclick="mua_hang()" class="them_vao_gio_hang" style="width: 70px;"><a href="{!!  url('muahang',[$value->id,$value->ten_sp]) !!}" style="color: white;text-decoration: none" title="">Mua</a></button>
					</form>
				</div>
			</div>
		</div>


		<div class="tong_ttct">
			<div class="thong_tin_sp">Thông tin chi tiết :</div>
			<p><?php echo $value->mo_ta_sp ?></p>
		</div>


		<!-- đánh giá -->

		<div class="thong_tin_sp">Đánh giá sản phẩm</div>
		@foreach($cmt as $va)
		<span style="font-size: 19px;"><i class="fas fa-user-circle"> </i>&nbsp&nbsp{{$va->id_khachhang}}
		</span>
		<br>
		<span style="padding-left: 27px;">{{$va->sao}}</span>

		<p style="margin-left: 27px;font-size: 25px;margin-top: 5px;">{{$va->noi_dung}}</p>
		<hr>
		@endforeach
		<div id="contentcmt"></div>
		<form class="form-horizontal" id="form_input">
			<textarea name="user" style="width: 70%; height: 100px;margin-top: 10px;"></textarea><br>
			<button type="submit" style="background: #E2472F;border:none; height: 40px;width: 200px;color: white;font-family: sans-serif;">Đánh Giá</button>
		</form>

		<!-- <i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i>&nbsp<i class="far fa-star"></i><br> -->


		<!-- sản phẩm tương tự -->


		<div class="cmhtt">
			<h2>CÁC MẶT HÀNG TƯƠNG TỰ</h2>
		</div>
		<div class="row" id="mathangtuongtu">
			@foreach($tt as $value1)

			<div class="col-lg-4 mb-4" id="mathangtuongtu_noiodung ">
				<div class="card h-100 text-center" id="mathangtuongtu_body">
					<img class="card-img-top anh_sp" src="../public/img/{{ $value1->anh }}" alt="">
					<div class="card-footer">
						<h5 class="card-title"><a style="text-decoration: none;color: black;" href="trang_sp?sp={{$value1->id}}" title=""><div style="overflow-y: hidden;width: 100%;height: 35px;padding: 5px;line-height: 35px;">{{ $value1->ten_sp }}</div></a></h5>
						<p class="card-text">{{ number_format($value1->gia_khuyen_mai,3) }} đ</p>
						<button type="button" class="btn" style="background-color: #E2472F;color: white;"><a href="{!!  url('muahang',[$value1->id,$value1->ten_sp]) !!}" style="color: white;text-decoration: none" title="">Thêm vào giỏ hàng</a></button>    
					</div>
				</div> 
			</div>

			@endforeach
		</div>
	</div>
	@extends('extend/footer');
</body>
</html>
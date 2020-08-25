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
</head>
<body>
	<div class="container-fluid" style="background-color: #6c757d;;margin: none;">

	<!-- Modal -->
	<div class="" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="" role="document" style="padding: 50px 50px 50px 50px">
			<div class="modal-content" style="">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Sửa Thông Tin Sản Phẩm</h5>
				</div>
				<form action="{{URL::to('xuly_sua')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">


					<div class="modal-body">
						<div class="row">
							<div class="col-md-12" style="margin-bottom: 10px;">
								Tên sản phẩm :
							</div>
							<div class="col-md-12">
								<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;margin-bottom: 15px;" type="text" name="ten" value="{{$data->ten_sp}}">
								<input type="hidden" name="id" value="{{$data->id}}">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" style="margin-bottom: 10px;">
								Mô Tả :
							</div>
							<div class="col-md-12" style="margin-bottom: 30px;">
								<textarea  id="ck_editor1" name="ck_editor1">{{$data->mo_ta_sp}}</textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" style="margin-bottom: 10px;">
								Số lượng :
							</div>
							<div class="col-md-12">
								<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;margin-bottom: 15px;" type="text" name="sl" value="{{$data->so_luong}}">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" style="margin-bottom: 10px;">
								Loại sản phẩm :
							</div>
							<div class="col-md-12">
								<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;margin-bottom: 15px;" type="text" name="loai" value="{{$data->loai_sp}}">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" style="margin-bottom: 10px;">
								Ảnh :
							</div>
							<div class="col-md-12">
								<input  type="file" name="anh" style="margin-bottom: 30px;" value="{{$data->anh}}">
								{{$data->anh}}
								<input type="hidden" name="anhcu" value="{{$data->anh}}">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" style="margin-bottom: 10px;">
								Phân loại :
							</div>
							<div class="col-md-12">
								<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;margin-bottom: 15px;" type="text" name="pl" value="{{$data->phan_loai}}">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12" style="margin-bottom: 10px;">
										Giá thường :
									</div>
									<div class="col-md-12">
										<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;margin-bottom: 30px;" type="text" name="gia_thuong" value="{{$data->gia_thuong}}">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12" style="margin-bottom: 10px;">
										Giá khuyến mãi :
									</div>
									<div class="col-md-12">
										<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;margin-bottom: 30px;" type="text" name="gia_khuyen_mai" value="{{$data->gia_khuyen_mai}}">
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="">
							<div class="col-md-6">
								<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;background: #4e73df;color:white" type="submit" name="sua" value="Cập nhật thông tin">
							</div>
							<div class="col-md-6">
								<input style="width: 100%;height: 45px;border: solid 1px #929292;padding:0px 10px 0px 10px;background: #4e73df;color:white" id="btn2" type="submit" name="tro_lai" value="Trở lại">
							</div>
						</div>
					</div>
					{!! csrf_field() !!}
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
    CKEDITOR.replace('ck_editor1');
	</script>

</div>
</body>
</html>
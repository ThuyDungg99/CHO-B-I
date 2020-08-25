<?php

$conn = mysqli_connect("localhost","root","","cuoi_ky_laravel");
mysqli_set_charset($conn,'utf8');
$sotin1trang = 6;

$trang = $_GET["trang"];

$from = ($trang - 1) * $sotin1trang;

$sql = "SELECT *
FROM sanpham
ORDER BY id ASC
LIMIT $from, $sotin1trang
";

$kq = mysqli_query($conn,$sql);
while ($row  = mysqli_fetch_array($kq)) {
	echo '
	<div class="sp_1" style="width: 280px;">
	<div class="chua_anh">
	<img src="../public/img/'.$row["anh"].'" alt="">
	</div>
	<a id="aten_sp" href="trang_sp?sp='.$row["id"].'"><div class="ten_sp" style="overflow-y: hidden;width: 100%;height: 35px;padding: 5px;line-height: 35px;">'.$row["ten_sp"].'</div></a>
	<div class="gia_sp">
	<div>'.number_format($row["gia_khuyen_mai"],3).'</div>
	<div class="pice_gach">'.number_format($row["gia_thuong"],3).'</div>
	</div>
	<button onclick="mua_hang()">Thêm vào giỏ hàng</button>
	</div>
	';
}

?>
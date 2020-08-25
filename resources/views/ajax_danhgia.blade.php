<?php 
  $user= trim($_GET['user']);
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $name = session()->get('name'); 
?>
<span style="font-size: 19px;"><i class="fas fa-user-circle"> </i>&nbsp&nbsp<?php echo session()->get('name') ?>
</span>
<br>
<span style="padding-left: 27px;"><?php echo $date = date("Y-m-d H:i:s"); ?></span>

 <p style="margin-left: 27px;font-size: 25px;margin-top: 5px;"><?php echo $user; ?></p>
 <hr>

<?php
DB::table('danhgia')->insert([
	'noi_dung' => $user,
	'id_khachhang' => $name,
	'id_sp' => $_GET["id"],
	'anh' => '',
	'sao' => $date
]);
?>

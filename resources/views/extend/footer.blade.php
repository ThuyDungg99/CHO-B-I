<?php
$fp = "../public/demsoluongtruycap.txt";
$fopen = fopen($fp, 'r');
$fr = fread($fopen, filesize($fp));
$fr++;
$fclose = fclose($fopen); 
		// Mở  ghi lại số lượt bằng thuộc tính w, w++
$fopen = fopen($fp,'w');
$fw = fwrite($fopen, $fr);
$fc = fclose($fopen);
?>
<div class="tong_3">
	<div class="dich_vu"><i class="fas fa-dolly"></i><div class="tin_dv">
	Miễn phí vận chuyển</div></div>
	<div class="dich_vu dichvu2"><i class="fas fa-shipping-fast"></i><div class="tin_dv">Chuyển phát nhanh</div></div>
	<div class="dich_vu"><i class="far fa-thumbs-up"></i><div class="tin_dv">Lựa chọn lớn</div></div>
</div>
<div id="lienhe"></div>
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
<!-- Footer -->
<footer class="pt-5 pb-4" id="contact">
	<div class="container" >
		<div class="row" style="padding: 5px 0 10px 0">
			<div class="col-md-3">Số lượng request trang web: {{$fr}}</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
				<h5 class="mb-4 font-weight-bold">ABOUT US</h5>
				<p class="mb-4">Etiam laoreet in ex quis efficitur.</p>
				<ul class="f-address">
					<li>
						<div class="row">
							<div class="col-1"><i class="fas fa-map-marker"></i></div>
							<div class="col-10">
								<h6 class="font-weight-bold mb-0">Address:</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-1"><i class="far fa-envelope"></i></div>
							<div class="col-10">
								<h6 class="font-weight-bold mb-0">Have any questions?</h6>
								<p><a href="#">Support@userthemes.com</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-1"><i class="fas fa-phone-volume"></i></div>
							<div class="col-10">
								<h6 class="font-weight-bold mb-0">Address:</h6>
								<p><a href="#">+XX (0) XX XX-XXXX-XXXX</a></p>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
				<h5 class="mb-4 font-weight-bold">FRESH TWEETS</h5>
				<ul class="f-address">
					<li>
						<div class="row">
							<div class="col-1"><i class="fab fa-twitter"></i></div>
							<div class="col-10">
								<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
								<label>10 Mins Ago</label>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-1"><i class="fab fa-twitter"></i></div>
							<div class="col-10">
								<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
								<label>10 Mins Ago</label>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-1"><i class="fab fa-twitter"></i></div>
							<div class="col-10">
								<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
								<label>10 Mins Ago</label>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
				<h5 class="mb-4 font-weight-bold">LATEST UPDATES</h5>
				<ul class="recent-post">
					<li>
						<label class="mr-3">28 <br><span>APR</span></label>
						<span>Rendomised words which dont look eveable.</span>
					</li>
					<li>
						<label class="mr-3">29 <br><span>APR</span></label>
						<span>Rendomised words which dont look eveable.</span>
					</li>
					<li>
						<label class="mr-3">30 <br><span>APR</span></label>
						<span>Rendomised words which dont look eveable.</span>
					</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
				<h5 class="mb-4 font-weight-bold">CONNECT WITH US</h5>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Your Email Address">
					<span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>
				</div>
				<ul class="social-pet mt-4">
					<li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
					<li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- Copyright -->
<section class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
				<div class="text-center text-white">
					&copy; 2018 Your Company. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
</section>
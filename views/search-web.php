<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>search</title>
        <LINK REL="SHORTCUT ICON"  HREF="views/massagebaby/img/logo.png">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/reset.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/index.css">
</head>
<body>

<?php include_once('views/header.php'); ?>

	<nav class="menu text-center">
		<div class="container">
			<ul >
				<li><a class="smooth" href="<?php echo getUrl('/') ?>">MASSAGEBAY</a></li>
				<li><a class="smooth" href="#">DIỄN ĐÀN</a>
					<ul >
						<li><a class="smooth" href="#">DIỄN ĐÀN</a></li>
						<li><a class="smooth" href="#">DIỄN ĐÀN</a></li>
						<li><a class="smooth" href="#">DIỄN ĐÀN</a></li>
					</ul>
				</li>
				<li><a class="smooth" href="#">TIN TỨC</a></li>
				<li><a class="smooth" href="#">COUNPON</a></li>
				<li><a class="smooth" href="#">LIÊN HỆ</a></li>
			</ul>
		</div>
	</nav>
	<nav class="main-nav">
		<button class="menu-btn" type="button"><i></i></button>
		<ul style="display: none;">                
			<li><a class="smooth" href="#" title="">Massagebay</a></li>
			<li><a class="smooth" href="#" title="">DIỄN ĐÀN</a>
				<ul style="display: none;">
					<li><a class="smooth" href="#" title="">DIỄN ĐÀN</a></li>
					<li><a class="smooth" href="#" title="">DIỄN ĐÀN</a>
					</li>
					<li><a class="smooth" href="#" title="">DIỄN ĐÀN</a></li>
				</ul></li>
				<li><a class="smooth" href="#" title="">Tin tức</a></li>
				<li><a class="smooth" href="#" title="">Coupon</a></li>
				<li><a class="smooth" href="#" title="">Liên hệ</a></li>
			</ul>
		</nav>

		<div class="s-body container">
			<div class="row">
				<div class="col-sm-12 col-md-9">
					<h1 class="h-title"> tìm kiếm </h1>
					<ul class="nav-tabs nav nav-tabs">
						<li class=" border border-bottom-0" ><a  href="<?php echo getUrl('/') ?>"> TẤT CẢ SP</a></li>
						<?php foreach ($cate as $cate): ?>
			<li><a  href="detailcate?id=<?php echo $cate->id ?>"><?php echo $cate->categaries_name ?></a></li>
		<?php endforeach ?>
					</ul>
					<div class="tab-content">
						<div id="menu1" class="tab-pane fade in active">
							<div class="row">
							<?php foreach ($post as $post): ?>
								<div class="colsp col-xs-12 col-sm-6 col-md-4" id="pro-<?php echo $post->id ?>">
									<div class="sanpham">
										<a href="detail?id=<?php echo $post->id ?>" class="c-img"><img alt="" title="" class="imgsanpham" src="<?php echo $post->image ?>"></a>
										<div class="info-sanpham">
										<div style="min-height: 44px;">
											<a class="aa" href=""><?php echo $post->products_name ?></a>
											</div>
											<a href="" class="infosanphan"><?php echo $post->author ?></a><br>
											<span id="price" ><?php echo $post->price ?></span>

											<div class="star-rating"> 
												<div class="star-base">
													<div class="star-rate" style="width:90%"></div> 
													<a dt-value="1" href="#1"></a> 
													<a dt-value="2" href="#2"></a> 
													<a dt-value="3" href="#3"></a> 
													<a dt-value="4" href="#4"></a> 
													<a dt-value="5" href="#5"></a>
												</div>
											</div>
											<p>id san pham:<?php echo $post->id ?>,ten loai:<?php $a=$post->getcate();echo $a->categaries_name ?>, </p>
										</div>
										<button class="btn btn-success AddCart" ProID="<?php echo $post->id ?>" >Thêm giỏ hàng</button>
									</div>
								</div>
								<?php endforeach ?>	
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-3">
					<div class="row">
						<div class="col-sm-12" >
							<div class="check">
								<form action="<?php echo getUrl('search')?>">
									<h2 class="text-center">TÌM KIẾM</h2>
									<div class="ss">
										<p>Tìm kiếm</p>
										<input placeholder="tìm kiếm..." type="search" name="keyword">
										<p>Danh mục</p>
										<select name="cars">
											<option value="">--chọn danh mục--</option>
										</select>
										<br><br>
										<p>Rasting</p>
										<div class="table">
											<div class="cell"><div class="star star-rating"> 
												<div class="star-base">
													<div class="star-rate" style="width:90%"></div> 
													<a dt-value="1" href="#1"></a> 
													<a dt-value="2" href="#2"></a> 
													<a dt-value="3" href="#3"></a> 
													<a dt-value="4" href="#4"></a> 
													<a dt-value="5" href="#5"></a>
												</div>
											</div></div>
											<div class="cell text-right">
												<button type="submit"><i class="fa fa-search"></i></button>

											</div>
										</div>
									</div>
								</form>
							</div>
							<a href=""><img alt="" title=""  src="views/massagebaby/img/qc.jpg" class="qc2 img-responsive"></a>
							<a href=""><img alt="" title=""  src="views/massagebaby/img/qc2.jpg" class="qc2 img-responsive"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="spa"> 
			<div class="container">
				<h2 >Spa tiêu biểu</h2>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" >
						<div class="sanpham2">
							<a href="#"><img alt="" title="" class="img-responsive" src="views/massagebaby/img/img3.jpg"></a>
							<a class="namespa" href="#">Spa LuxuryBoss</a><br>
							<a href="" class="vt">Vũng tàu</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" >
						<div class="sanpham2">
							<a href="#"><img alt="" title="" class="img-responsive" src="views/massagebaby/img/img3.jpg"></a>
							<a class="namespa" href="#">Spa LuxuryBoss</a><br>
							<a href="" class="vt">Vũng tàu</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" >
						<div class="sanpham2">
							<a href="#"><img alt="" title="" class="img-responsive" src="views/massagebaby/img/img3.jpg"></a>
							<a class="namespa" href="#">Spa LuxuryBoss</a><br>
							<a href="" class="vt">Vũng tàu</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" >
						<div class="sanpham2">
							<a href="#"><img alt="" title="" class="img-responsive" src="views/massagebaby/img/img3.jpg"></a>
							<a class="namespa" href="#">Spa LuxuryBoss</a><br>
							<a href="" class="vt">Vũng tàu</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" >
						<div class="sanpham2">
							<a href="#"><img alt="" title="" class="img-responsive" src="views/massagebaby/img/img3.jpg"></a>
							<a class="namespa" href="#">Spa LuxuryBoss</a><br>
							<a href="" class="vt">Vũng tàu</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" >
						<div class="sanpham2">
							<a href="#"><img alt="" title="" class="img-responsive" src="views/massagebaby/img/img3.jpg"></a>
							<a class="namespa" href="#">Spa LuxuryBoss</a><br>
							<a href="" class="vt">Vũng tàu</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" >
						<div class="sanpham2">
							<a href="#"><img alt="" title="" class="img-responsive" src="views/massagebaby/img/img3.jpg"></a>
							<a class="namespa" href="#">Spa LuxuryBoss</a><br>
							<a href="" class="vt">Vũng tàu</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" >
						<div class="sanpham2">
							<a href="#"><img alt="" title="" class="img-responsive" src="views/massagebaby/img/img3.jpg"></a>
							<a class="namespa" href="#">Spa LuxuryBoss</a><br>
							<a href="" class="vt">Vũng tàu</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" >
						<div class="sanpham2">
							<a href="#"><img alt="" title="" class="img-responsive" src="views/massagebaby/img/img3.jpg"></a>
							<a class="namespa" href="#">Spa LuxuryBoss</a><br>
							<a href="" class="vt">Vũng tàu</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="tintuc">
			<div class="container">
				<h2 class="title-tin">Tin tức mới nhất</h2>
				<div class="row">
					<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="tin">
							<a class="c-img" href=""><img class="img-responsive" src="views/massagebaby/img/img6.jpg"></a>
							<div class="ct">
								<a href="#">NỔI BẬT TRÊN KHÔNG GIAN LÀNG QUÊ YÊN TĨNH</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="tin">
							<a class="c-img" href=""><img class="img-responsive" src="views/massagebaby/img/img6.jpg"></a>
							<div class="ct">
								<a href="#">NỔI BẬT TRÊN KHÔNG GIAN LÀNG QUÊ YÊN TĨNH</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="tin">
							<a class="c-img" href=""><img class="img-responsive" src="views/massagebaby/img/img6.jpg"></a>
							<div class="ct">
								<a href="#">NỔI BẬT TRÊN KHÔNG GIAN LÀNG QUÊ YÊN TĨNH</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
						</div>								
					</div>
				</div>
				<div class="text-center">
					<a href="">
						XEM TẤT CẢ
					</a>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="row rowfoot">
					<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="foot">
							<a href="#"><h4 class="hotel" >Về hotel84.com</h4></a>
							<ul class="ulfoot">
								<li><a href="#">Trang chủ</a></li>
								<li><a href="#">điều khoản</a></li>
								<li><a href="#">thông tin cá nhân</a></li>
								<li><a href="#">tin tức công ty</a></li>
								<li><a href="#">hướng dẫn sử dụng liên hệ</a></li>
								<li><a href="#">tin tức công ty</a></li>
								<li><a href="#">liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="foot">
							<a href="#"><h4 class="hotel" >Về hotel84.com</h4></a>
							<ul class="ulfoot">
								<li><a href="#">Trang chủ</a></li>
								<li><a href="#">điều khoản</a></li>
								<li><a href="#">thông tin cá nhân</a></li>
								<li><a href="#">tin tức công ty</a></li>
								<li><a href="#">hướng dẫn sử dụng liên hệ</a></li>
								<li><a href="#">tin tức công ty</a></li>
								<li><a href="#">liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="foot">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="sf container">
					<p>Địa chỉ:số nhà 38b ngách 6/31/5 Đặng Văn Ngữ,phường Phương Liên,quận Đống đa, Hà nội</p>
					<p>Địa chỉ: số nhà 38b ngách 6/31/5 Đặng Văn Ngữ, phường Phương Li</p>
					<p>Địa chỉ: số nhà 38b ngách 6/31/5 Đặng Văn Ngữ, phường Phương LiĐịa chỉ: số nhà 38b ngách 6/31/5 Đặng Văn Ngữ, phường Phương Li</p>
					<p>Số ĐKKD: 0103003424; Ngày cấp: 02/1/2004; Giám đốc: Phan Văn Thu</p>
				</div>
			</div>
		</footer>
		<?php include_once('auth/login.php'); ?>
		<?php include_once('auth/gio-hang.php'); ?>
		<button onclick="topFunction()" class="back-top" id="myBtn" title="Go to top">Top</button>
		<script src="views/massagebaby/js/jquery-2.2.1.min.js" defer></script>	
		<script src="views/massagebaby/js/bootstrap.min.js" defer></script>
		<script src="views/massagebaby/js/jquery.nivo.slider.pack.js" defer></script>
		<script src="views/massagebaby/js/script.js" defer></script>
	</body>
	</html>
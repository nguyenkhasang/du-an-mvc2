<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>chi tiet</title>
        <LINK REL="SHORTCUT ICON"  HREF="views/massagebaby/img/logo.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/reset.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/index.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/chi-tiet.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/tin-tuc.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/frontend/css/animate.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/frontend/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/frontend/css/slick.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/frontend/css/style.css">
	<style>
		.slick-slide{
padding: 5px;
		}
		p img{
			width: 100%;
		}
		.themgiohang{
			padding-top: 0.5rem;
			padding-bottom: 0.5rem;
		}
	</style>
</head>
<body>
<?php include_once ('views/header.php');?>
	<nav class="menu text-center">
		<div class="container">
			<ul >
				<li><a href="<?php echo getUrl('/') ?>">MASSAGEBAY</a></li>
				<li><a href="#">DIỄN ĐÀN</a>
					<ul >
						<li><a href="#">DIỄN ĐÀN</a></li>
						<li><a href="#">DIỄN ĐÀN</a></li>
						<li><a href="#">DIỄN ĐÀN</a></li>
					</ul>
				</li>
				<li><a href="#">TIN TỨC</a></li>
				<li><a href="#">COUNPON</a></li>
				<li><a href="#">LIÊN HỆ</a></li>
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
			<div class="col-sm-12 col-md-9 col-lg-9">
				<nav class="s-bre" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">trang chủ</a></li>
						<li class="breadcrumb-item"><a href="#">chi tiết</a></li>
					</ol>
				</nav>
				<span>06:57 | 26/08/2017</span>
				<div class="nd">
					<h1>
						CHI TIẾT SẢN PHẨM
					</h1>
					<?php foreach ($post as $post): ?>
					<div class="col-sm-12 col-md-12 col-lg-7" style="padding: 0px;">

					
				<div class="col-sm-12 col-md-12 col-lg-12 " style="padding: 0px;">
					<section  class="slider-for">
						<img title="" alt="" src="<?php echo $post->image ?>">
						<img title="" alt="" src="<?php echo $post->image ?>">
						<img title="" alt="" src="<?php echo $post->image ?>">

					</section >
				</div>
				<div class="col-sm-12 col-md-3 col-lg-12 show-for ">
					<section  class="slider-nav">
						<img title="" alt="" src="<?php echo $post->image ?>">
						<img title="" alt="" src="<?php echo $post->image ?>">
						<img title="" alt="" src="<?php echo $post->image ?>">
					</section >
				</div>
					</div>
					<div class=" info-product col-sm-12 col-md-12 col-lg-5 col-xl-5" id="pro-<?php echo $post->id ?>">
						<h3 id="pName"><?php echo $post->products_name ?></h3>
						<img style="display: none;" alt="" title="" class="imgsanpham" src="<?php echo $post->image ?>">
						 <p class="price">mã sản phẩm:<?php echo $post->id ?></p> 
						 <span>gia cũ: <span class="giacu" ><?php echo $post->price ?>$</span></span>
											<h3 id="price" price="<?php echo $post->price_sale ?>" ><?php echo $post->price_sale ?>$</h3>
						 <p>Sản Phẩm Được Thêm Bởi: <?php echo $post->author ?></p>
						 <div class="themgiohang"><strong>LIÊN HỆ: </strong>
						 <button class="btn btn-success AddCart" ProID="<?php echo $post->id ?>" >Thêm giỏ hàng</button></div>

					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<ul class=" nav nav-tabs" style="    text-align: right;
    margin-top: 0px;
    margin-bottom: 0px;
    float:left;padding-top: 1rem;border-bottom: 1px solid #126c38;" role="tablist">
    <li class="nav-item active ">
      <a class="nav-link active activee" data-toggle="tab" href="#home">Thông tin sản phẩm</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Thành phần chính</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Liều dùng và cách dùng</a>
    </li>
  </ul>

  <div class="tab-content" style="min-height: 20rem;padding-top:3rem ;">
    <div id="home" style="width: 100%;" class="tab-pane active"><br>
	<h3>Thông tin sản phẩm</h3>
      <p><?php echo $post->content?></p>
    </div>
    <div id="menu1" class="tab-pane fade"><br>
      <h3>Thành phần chính</h3>
	  <p><?php echo $post->ingredient?></p>
    </div>
    <div id="menu2" class="tab-pane fade"><br>
      <h3>Liều dùng và cách dùng</h3>
	  <p><?php echo $post->instruction?></p>

    </div>
  </div>
					</div>
					<?php endforeach ?>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<h2 class="product-lq" style="color: #7b0200;font-size: 3rem;
    font-weight: bold;
    position: relative;
    border-bottom: solid 1px;
    margin-bottom: 20px;
    line-height: 1;
	font-family: UVNKIEU;">
							<a  href="" class="smooth">sản phẩm cùng danh mục</a>
						</h2>
						<div class="row">
							<?php foreach ($postdetailCate as $postcate):?>
				
				<div class="bdl-product  col-sm-6 col-md-6 col-lg-4">
					<a href="detail?id=<?php echo $postcate->id ?>" class=" wow swing c-img hv-scale hv-light"><img title="" alt="" src="<?php echo $postcate->image ?>"></a>
					<div>
						<h3><a href="detail?id=<?php echo $postcate->id ?>" class="smooth thuoc-dt name-bdl" title=""><?php echo $postcate->products_name ?></a></h3>
						<p>Giảm các triệu chứng đau do bệnh tổn thương dạ dày, hành tá tràng, viêm đại tràng, viêm ruột. </p>
						<a href="" class="smooth bdl-xem" title="">Xem thêm</a>
					</div>
				</div>
						<?php endforeach ?>	
						</div>
					</div>
				</div>
				<div class="star star-rating">
					<div class="star-base">
						<div class="star-rate" style="width:90%"></div>
						<a dt-value="1" href="#1"></a>
						<a dt-value="2" href="#2"></a>
						<a dt-value="3" href="#3"></a>
						<a dt-value="4" href="#4"></a>
						<a dt-value="5" href="#5"></a>
					</div>
				</div>
				<div id="fb-root"></div>
				<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6"></script>
				<!-- Your embedded comments code -->
				<div class="fb-comment-embed"
				data-href="https://www.facebook.com/zuck/posts/10102735452532991?comment_id=1070233703036185"
				data-width="500"></div>
			</div>
			<div class="col-sm-12 col-md-3 col-lg-3">
				<div class="row">
					<div class="col-sm-12" >
						<div class="check">
							<form >
								<h2 class="text-center">TÌM KIẾM</h2>
								<div class="ss">
									<p>Tìm kiếm</p>
									<input type="text" placeholder="tìm kiếm..." name="">
									<p>Thành phố</p>
									<select name="cars">
										<option value="">--chọn diểm đến--</option>
										<option value="">ha noi</option>
										<option value="">hai phong</option>
										<option value="">da nang</option>
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
						<div class="post">
											<h3 class="text-center">  Chủ đề mới nhất</h3>

											<div class="mi-post">
												 <a href=""><img class=" img-responsive" alt="" title="" src="views/massagebaby/img/post.png"></a>
												<div class="mi-info">
												<a href="">Khu du lich sinh</a>
												<p>Ba Be eco khu du lich sinh thai</p>
												</div>
											</div>
											<div class="mi-post">
												<a href=""><img class=" img-responsive" alt="" title="" src="views/massagebaby/img/post.png"></a>
												<div class="mi-info">
												<a href="">Khu du lich sinh</a>
												<p>Ba Be eco khu du lich sinh thai</p>
												</div>
											</div>
											<div class="mi-post">
												<a href=""><img class=" img-responsive" alt="" title="" src="views/massagebaby/img/post.png"></a>
												<div class="mi-info">
												<a href="">Khu du lich sinh</a>
												<p>Ba Be eco khu du lich sinh thai</p>
												</div>
											</div>
											<div class="mi-post">
												<a href=""><img class=" img-responsive" alt="" title="" src="views/massagebaby/img/post.png"></a>
												<div class="mi-info">
												<a href="">Khu du lich sinh</a>
												<p>Ba Be eco khu du lich sinh thai</p>
												</div>
											</div>
										</div>
										<a href=""><img alt="" title=""  src="views/massagebaby/img/qc2.jpg" class="qc2 img-responsive"></a>
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
						<a href="#"><h4>Về hotel84.com</h4></a>
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
						<a href="#"><h4>Về hotel84.com</h4></a>
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
	<script src="views/massagebaby/js/jquery-2.2.1.min.js" defer></script>	
	<script src="views/massagebaby/js/bootstrap.min.js" defer></script>
	<script src="views/massagebaby/js/jquery.nivo.slider.pack.js" defer></script>
	<script src="views/massagebaby/js/script.js" defer></script>
	<script src="views/massagebaby/js/wow.js" type="text/javascript"></script>
<script src="views/massagebaby/js/common.js" type="text/javascript"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="views/massagebaby/js/slick.min.js"></script>

  <script type="text/javascript">
$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  vertical:false,
  arrows:false,
  focusOnSelect: true
});


  </script>
				</body>
				</html>
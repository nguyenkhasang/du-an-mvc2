<header>
		<div class="container">
			<a class="logo" href="<?php echo getUrl('/') ?>" title="">
				<img alt="" title="" class="img-responsive" src="views/massagebaby/img/logo.png" />
			</a>	
			<div class="login">
			<?php 
		if (isset($_SESSION['user'])) {
			include_once('auth/InfoUser.php');
		}
		else{
			echo '<button  data-toggle="modal" data-target="#gio-hang">
			giỏ hàng
		  </button><span style="color: red;" id="ledcart"></span> <b style="color: #007b75;">|</b>  <button  data-toggle="modal" data-target="#dangnhap">
			đăng nhập
		  </button> <b style="color: #007b75;">|</b> 
		  <a  href="form-register">
			đăng ký
		  </a>';
		}
		 ?>
	</div>
		</div>
	</header>
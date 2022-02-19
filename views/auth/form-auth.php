<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>đăng ký</title>
	<LINK REL="SHORTCUT ICON"  HREF="views/massagebaby/img/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="views/massagebaby/css/reset.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/index.css">
<style>
	header a img{
		display: block;
	}
</style>

</head>

<body>
<?php include_once ('views/header.php');?>
<div class="container">
	<form action="<?php echo getUrl('register')?>" method="post" enctype="multipart/form-data" style="width: 50%;margin: auto;">
			<h2><b>Register</b></h2>
			<hr>
			<div>
		<p style="color: red; margin-bottom: 10px;"><?php $msg= isset($_GET['msg'])== true ? $_GET['msg'] : ""; echo $msg;?></p>
		 	</div>
			<br>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="name" placeholder="Nhập username" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" placeholder="Nhập email" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" placeholder="Nhập password" class="form-control">
			</div>
			<div class="form-group">
				<label>Confirm</label>
				<input type="password" name="confirm" placeholder="Nhập lại password" class="form-control">
			</div>
			<br>
			<div class="text-center">
			<button type="submit" class="btn btn-sm btn-success btn-block" name="register">Register</button>
				<a href="<?php echo getUrl('/')?>" class="btn btn-sm btn-danger btn-block">Hủy</a>
			</div>
		</form>
</div>
<footer>
			
			<div class="footer">
				<div class="sf container">
					<p>Địa chỉ:số nhà 38b ngách 6/31/5 Đặng Văn Ngữ,phường Phương Liên,quận Đống đa, Hà nội</p>
					<p>Địa chỉ: số nhà 38b ngách 6/31/5 Đặng Văn Ngữ, phường Phương Li</p>
					<p>Địa chỉ: số nhà 38b ngách 6/31/5 Đặng Văn Ngữ, phường Phương LiĐịa chỉ: số nhà 38b ngách 6/31/5 Đặng Văn Ngữ, phường Phương Li</p>
					<p>Số ĐKKD: 0103003424; Ngày cấp: 02/1/2004; Giám đốc: Phan Văn Thu</p>
				</div>
			</div>
		</footer>
</body>
<script src="views/massagebaby/js/jquery-2.2.1.min.js" defer></script>	
		<script src="/views/massagebaby/js/bootstrap.min.js" defer></script>
		<script src="/views/massagebaby/js/jquery.nivo.slider.pack.js" defer></script>
		<script src="/views/massagebaby/js/script.js" defer></script>
		<script src="/views/massagebaby/js/mvc.js" defer></script>
		<?php include_once('login.php'); ?>
		<?php include_once('gio-hang.php'); ?>
</html>
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

	<title></title>
</head>

<body>
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
</body>
</html>
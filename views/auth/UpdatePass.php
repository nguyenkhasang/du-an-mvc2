<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Update Password</title>
</head>
<body>

<div class="container">
	<form action="<?php echo getUrl('UpdatePass')?>" method="post" enctype="multipart/form-data" style="width:50%;margin: auto;">
			<h2><b>Đổi Password</b></h2>
			<hr>
			<div>
		<p style="color: red; margin-bottom: 10px;"><?php $msg= isset($_GET['msg'])== true ? $_GET['msg'] : ""; echo $msg;?></p>
		 	</div>
			<br>
			<div>
			<input type="hidden" name="id" value="<?php echo $id ?>" class="form-control">
			</div>
			<div class="form-group">
				<label>Password cũ</label>
				<input type="password" name="password" placeholder="Nhập password" class="form-control">
			</div>
			<div class="form-group">
				<label>Password mới</label>
				<input type="password" name="newpassword" placeholder="Nhập password mới" class="form-control">
			</div>
			<div class="form-group">
				<label>Confirm password mới</label>
				<input type="password" name="confirm" placeholder="Nhập lại password" class="form-control">
			</div>
			<br>
			<div class="text-center">
			<button type="submit" class="btn btn-sm btn-success btn-block" name="register">xác nhận</button>
				<a href="<?php echo getUrl('InfoUse')?>" class="btn btn-sm btn-danger btn-block">Hủy</a>
			</div>
		</form>
</div>
</body>
</html>
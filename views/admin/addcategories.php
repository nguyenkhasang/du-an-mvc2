<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>addcate</title>
	<LINK REL="SHORTCUT ICON"  HREF="views/massagebaby/img/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>add categories</title>
</head>
<body>
<div class="container">
<form action="<?php echo getUrl('addcate')?>" method="post" enctype="multipart/form-data">
<div class="form-group">
 					<label>tên cate</label>
 					<input type="text" name="namecate" placeholder="tên cate" class="form-control">
 				</div>
<button type="submit" class="btn btn-sm btn-success">Lưu</button>
 					<a href="<?php echo getUrl('Dashboard')?>" class="btn btn-sm btn-danger">Hủy</a>
</form>
</div>
</body>
</html>
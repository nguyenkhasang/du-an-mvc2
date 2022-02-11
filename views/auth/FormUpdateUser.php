
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container">
	<?php foreach ($InfoUser as $member):?>
<form action="<?php echo getUrl('UpdateUser')?>" method="post" enctype="multipart/form-data" style="width:50%;margin: auto;" >
<div class="form-group">
 					<h3>gmail: <?php echo $member->email?></h3>
 					<h4>vị trí: <?php
                        if ($member->role == 0) {
                          echo 'thành viên';
                        }
                        if ($member->role == 1) {
                        echo 'mods';
                      }
                      if ($member->role == 2) {
                        echo 'admin';
                      }
                         ?></h4>

 				</div>
 				<div class="form-group">
 					<label>tên </label>
 					<input type="text" name="name" value="<?php echo $member->name?>" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>Ảnh</label>
					 <img src="<?php echo $member->avatar ?>" class="img-thumbnail" alt="avatar" width="304" height="236">
 					<input type="file" name="avatar" class="form-control">
 					<input type="hidden" name="avatarcu" value="<?php echo $member->avatar ?>" class="form-control">

 				</div>
				 <div class="form-group">
 					<label>số điện thoại</label>
 					<input type="text" name="phone" value="<?php echo $member->phone ?>" placeholder="phone" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>Địa chỉ</label>
 					<input type="text" name="address" value="<?php echo $member->address ?>" placeholder="địa chỉ" class="form-control">
 				</div>
			    <br>
 				<div class="text-center">
 					<button type="submit" class="btn btn-sm btn-success">Lưu</button>
 					<a href="<?php echo getUrl('InfoUse')?>" class="btn btn-sm btn-danger">Hủy</a>
 				</div>
 			</form>
	<?php endforeach ?>
			 </div>
</body>
</html>
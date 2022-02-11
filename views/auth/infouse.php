<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/styledashboard.css">
	<title>thông tin người dùng</title>
</head>
<body>
<?php $user = $_SESSION['user']; ?>
<div class="container">
  <?php foreach ($InfoUser as $users):?>
  <div class="card" style="width:50%;margin: auto;">
    <img class="card-img-top" src="<?php echo $users->avatar; ?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Gmail: <?php echo $users->email; ?></h4>
	  <h4 class="card-title">Tên:<?php echo $users->name; ?></h4>
	  <h4 class="card-title">Vai Trò:
	  <?php
	  if ($users->role == 0) {
		  echo 'thành viên';
	  }
	  if ($users->role == 1) {
		echo 'mods';
	}
	if ($users->role == 2) {
		echo 'admin';
	}
	  ?></h4>
	  <h4 class="card-title"> Số Điện Thoại:<?php if(isset($users->phone)){
		  echo $users->phone;
	  }
	  else{
		  echo 'trống';
	  } ?></h4>
      <p class="card-text"> Địa Chỉ:<?php
       if(isset($users->address)){
		  echo $users->address;
	  }
	  else{
		echo 'trống';
	} ?>
	</p>
      <a href="FormUpdateUser?id=<?php echo $users->id ?>" class="btn btn-success">Cập nhật thông tin</a>
      <a href="FormUpdatePassUser?id=<?php echo $users->id ?>" class="btn btn-success">đổi password</a>
      <a href="<?php echo getUrl('/')?>" class="btn btn-primary">Quay Lại</a>
    </div>
  </div>
  <?php endforeach ?>
</div>
</body>
</html>
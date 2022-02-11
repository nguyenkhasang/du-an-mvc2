
<html>
<link rel="stylesheet" type="text/css" href="views/massagebaby/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/reset.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	</style>
<?php $user = $_SESSION['user']; ?>
<div class="dropdown">
<button  data-toggle="modal" data-target="#gio-hang">
			giỏ hàng
		  </button><span style="color: red;" id="ledcart"></span> <b style="color: #007b75;">|</b>
    <button style="    border: 0px;" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
	<?php echo $user['email']; ?>
    </button>
    <div class="dropdown-menu">
      <?php if ($user['role'] == 1 or $user['role'] == 2) {
		  echo '<li><a style="color: #28a745;" class="dropdown-item" href="Dashboard">Dashboard</a></li>';
	  }  ?>
      <li><a style="color: #007b75;" class="dropdown-item " href="InfoUse">Thông Tin Cá Nhân</a></li>
      <li><a style="color: red;" class="dropdown-item " href="logout">Đăng Xuất</a></li>
    </div>
  </div>

</html>
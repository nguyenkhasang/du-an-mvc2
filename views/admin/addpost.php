
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>addpost</title>
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
<form action="<?php echo getUrl('addpost')?>" method="post" enctype="multipart/form-data">
	<?php $user=($_SESSION['user']);?>
 				<div>
			        <label>Tác giả</label> 
			        <select name="author" class="form-control">


			                <option value="<?php echo $user['email']; ?>"><a href=""><?php echo $user['email']; ?></a></option>
			        </select>
			    </div>
			    <br>
			    <div>
			        <label>Danh mục</label> 
			        <select name="categorise_id" class="form-control">
			        	<option value="0">Chọn danh mục</option>
			        <?php 
			            foreach ($cate as $cate) {
			                ?>
			                <option value="<?=$cate->id?>"><?=$cate->categaries_name ?></option>
			                <?php
			            }
			             ?>
			        </select>
			    </div>
			    <br>
 				<div class="form-group">
 					<label>tên sản phẩm</label>
 					<input type="text" name="products_name" placeholder="tên sản phẩm" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>giá</label>
 					<input type="text" name="price" placeholder="giá" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>giá sale</label>
 					<input class="form-control editor" placeholder="giá sale" name="price_sale" >
 				</div>
 				<div class="form-group">
 					<label>Ảnh</label>
 					<input type="file" name="image" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>Nội dung</label>
 					<textarea class="form-control editor" name="content" ></textarea>
 				</div>
				 <div class="form-group">
 					<label>Thành Phần Chính</label>
 					<textarea class="form-control editor" name="ingredient" ></textarea>
 				</div><div class="form-group">
 					<label>Hướng Dẫn Sử Dụng</label>
 					<textarea class="form-control editor" name="instruction" ></textarea>
 				</div>
			    <br>
 				<div class="text-center">
 					<button type="submit" class="btn btn-sm btn-success">Lưu</button>
 					<a href="<?php echo getUrl('Dashboard')?>" class="btn btn-sm btn-danger">Hủy</a>
 				</div>
 			</form>
			 </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>updatepost</title>
	<LINK REL="SHORTCUT ICON"  HREF="views/massagebaby/img/logo.png">
</head>
<body>
	<?php $user=($_SESSION['user']);$post=$post[0]; ?>
<form style="width: 80%;margin: auto;" action="<?php echo getUrl('updatepost')?>" method="post" enctype="multipart/form-data">
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
			        	<option value="1">Chọn danh mục</option>
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
			     <input type="hidden" name="id" value="<?= $post->id ?>" class="form-control">
 				<div class="form-group">
 					<label>tên sản phẩm</label>
 					<input type="text" name="products_name" value="<?= $post->products_name ?>" placeholder="tên sản phẩm" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>giá</label>
 					<input type="text" name="price" value="<?= $post->price ?>" placeholder="giá" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>giá sale</label>
 					<input class="form-control editor" placeholder="giá sale" name="price_sale" value="<?= $post->price_sale ?>" >
 				</div>
 				<div class="form-group">
 					<label>Ảnh</label>
                                        <img src="<?= $post->image ?>" style="width:15%;" alt="anh san pham">
 					<input type="file" name="image" class="form-control">
 					<input type="hidden" name="imagecu" value="<?= $post->image ?>" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>Nội dung</label>
 					<textarea class="form-control editor" name="content" ><?= $post->content ?></textarea>
 				</div>
				 <div class="form-group">
 					<label>Thành phần</label>
 					<textarea class="form-control editor" name="ingredient" ><?= $post->ingredient ?></textarea>
 				</div>
				 <div class="form-group">
 					<label>cách dùng</label>
 					<textarea class="form-control editor" name="instruction" ><?= $post->instruction ?></textarea>
 				</div>
			    <br>
 				<div class="text-center">
 					<button type="submit" class="btn btn-sm btn-success">Lưu</button>
 					<a href="<?php echo getUrl('Dashboard')?>" class="btn btn-sm btn-danger">Hủy</a>
 				</div>
 			</form>
</body>
</html>
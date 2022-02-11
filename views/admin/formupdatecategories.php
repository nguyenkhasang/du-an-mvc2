<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>updatecate</title>
	<LINK REL="SHORTCUT ICON"  HREF="views/massagebaby/img/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="container">
<form action="<?php echo getUrl('updatecate')?>" method="post" enctype="multipart/form-data">
	<?php $cate=$cate[0]; ?>
			<input type="hidden" value="<?=$cate->id?>" name="id">
	<input type="" name="categories_name" value=" <?= $cate->categaries_name ?> ">
	<button class="btn btn-success" type="submit"> update</button>
	<a href="<?php echo getUrl('listcategories')?>" class="btn btn-sm btn-danger">Hủy</a>
</form>
</div>
</body>
</html>
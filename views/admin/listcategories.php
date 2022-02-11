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
	<style type="text/css">
	</style>
</head>
<body>
	<div class="container-fluid" >
    <a href="<?php echo getUrl('/')?>">home</a>
		<a href="listpost">list products</a>
		<a href="listcategories">list categoris</a>
		
	</div>
<div class="container">
<table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead class="thead-dark">
                    <tr>
                      <th>id</th>
                      <th>ten cate</th>
                      <th><a class="btn btn-success" href="formaddcate">them</a></th>
                    </tr>
</thead>
                    <?php foreach ($cate as $cate): ?>
                      <tr>
                        <td><?php echo $cate->id ?></td>       
                        <td><?php echo $cate->categaries_name ?></td>
                        <td>
                          <a class="btn btn-primary" href="<?php echo getUrl('formupdatecate?id='.$cate->id) ?> ">update
                          </a><hr>
                          <a class="btn btn-danger" href="<?php echo getUrl('delete-cate?id='.$cate->id)?>" style="float: left;">delete
                          </a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                </table>

</div>
<div>
	
</div>
</body>
</html>
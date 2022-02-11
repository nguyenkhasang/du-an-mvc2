<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/styledashboard.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/index.css">


	<title>DASHBOARD</title>
	<style type="text/css">
  .nav-link{
    font-size: 1.2rem;
  }
	</style>
</head>
<body>
<?php $user = $_SESSION['user']; ?>
	<div class="container-fluid" >
		<a class="btn btn-success" href="<?php echo getUrl('/')?>">home</a>
		
	</div>
<div class="container">
</div>
<div class="background">
<div class="container-fluid">
	<div class="row">
		<div class="name-title col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<h2>DASHBOARD</h2>
			<img style="width: 250px;" src="views/massagebaby/img/logo.png">
      <img src="<?php echo $user['avatar']?>" alt="">
      <h2 style="color: red;">chào <?php
                        if ($user['role'] == 0) {
                          echo 'thành viên: ';
                        }
                        if ($user['role'] == 1) {
                        echo 'mods: ';
                      }
                      if ($user['role'] == 2) {
                        echo 'admin: ';
                      }
                         echo $user['name']; echo '('.$user['email'].')';?></h2>
		</div>
		<div class=" option-nav col-sm-2 col-md-2 col-lg-2 col-xl-2">
			<ul class=" nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="tab1" data-toggle="tab" href="#home">list Sản Phẩm:
        <b style="color: red;"><?php  echo $allpost; ?></b>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " id="tab2" data-toggle="tab" href="#menu1">list Danh Mục:
      <b style="color: red;"><?php  echo count($cate); ?></b>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="tab3" data-toggle="tab" href="#menu2">Thành Viên:
      <b style="color: red;"><?php  echo count($member); ?></b>
      </a>
    </li>
     <li class="nav-item">
      <a class="nav-link" id="tab4" data-toggle="tab" href="#menu3">Tổng Đơn Hàng
      <b style="color: red;"><?php echo $carts ?></b>
      <p>mới</p><b style="color: red;"><?php  echo count($cartnew); ?></b>
      <p>cũ</p><b style="color: red;"><?php  echo count($cartold); ?></b>
      </a>
    </li>
  </ul>
		</div>
		<div class=" tab-content col-option col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <div id="home" class="container tab-pane active" >
        <table  class="table table-bordered table-striped table-hover post" id="dataTable" width="100%" cellspacing="0">
<thead class="thead-dark">
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>gia goc</th>
                      <th>gia sale</th>
                      <th>Image</th>
                      <th>Categories</th>
                      <th>author</th>
                      <th>Content/Thành Phần/Hướng Dẫn</th>
                      <th><a class="btn btn-success" href="addformpost">them</a></th>
                    </tr>
</thead>
                    <?php foreach ($post as $post): ?>
                      <tr>
                        <td><?php echo $post->id ?></td>
                        <td><?php echo $post->products_name ?></td>
                        <td><?php echo $post->price ?></td>       
                        <td><?php echo $post->price_sale ?></td>    
                        <td>
                          <img style="width: 200px; height: auto;" src="<?=$post->image?>" >
                        </td>
                        <td><?php $a=$post->getcate();echo $a[0]->categaries_name ?></td>
                        <td><?php echo $post->author ?></td>    
                        <td>
                        <button class=" btn btn-info" data-toggle="modal" data-target="#a<?php echo $post->id ?>">xem chi tiết</button>
                        <div class="container">
  <!-- Button to Open the Modal -->
  <!-- The Modal -->
  <div class="modal fade" id="a<?php echo $post->id ?>">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">

  <table  class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
<thead class="thead-dark">
                    <tr>
                      <th>Content</th>
                      <th>Thành Phần</th>
                      <th>Hướng Dẫn</th>
                    </tr>
                    <td><?php echo $post->content ?></td>
                    <td><?php echo $post->ingredient ?></td>    
                        <td><?php echo $post->instruction ?></td>  
                </table>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                      </div>
                        </td>         
                        <td>
                          <a class="btn btn-primary" href="<?php echo getUrl('updateformpost?id='.$post->id) ?> ">update
                          </a><hr>
                          <a class="btn btn-danger" onclick="return confirm('bạn chắc chắn muốn xóa Sản Phẩm này?');" href="<?php echo getUrl('delete-post?id='.$post->id)?>" style="float: left;">delete
                          </a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                    
                </table>
                <div class="te-pagination">
						<a class="smooth pagehome" onclick="pagehomedow()" ><i class="fa fa-angle-left"></i></a>
						<strong id="homepages">1</strong>
						<a class="smooth pagehome" onclick="pagehomeup()"> <i class="fa fa-angle-right"></i></a>
					</div>

        </div>
<div id="menu1" class="container tab-pane fade">
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
                          <a class="btn btn-danger" onclick="return confirm('khi xóa categories tất cả sản phẩm bên trong cũng sẽ bi xóa, bạn chắc chắn muốn xóa?');" href="<?php echo getUrl('delete-cate?id='.$cate->id)?>" style="float: left;">delete
                          </a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                </table>
    </div>
    <div id="menu2" class="container tab-pane fade">
    <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead class="thead-dark">
                    <tr>
                      <th>id</th>
                      <th>ten gmail</th>
                      <th>avatar</th>
                      <th>ten member</th>
                      <th> vị trí</th>
                      <th> số điện thoại</th>
                      <th> địa chỉ</th>
                      <th></th>

</thead>
                    <?php foreach ($member as $member): ?>
                      <tr>
                        <td><?php echo $member->id ?></td>       
                        <td><?php echo $member->email ?></td>
                        <td><img src="<?php echo $member->avatar ?>" alt=""></td>
                        <td><?php echo $member->name ?></td>
                        <td><?php
                        if ($member->role == 0) {
                          echo 'thành viên';
                        }
                        if ($member->role == 1) {
                        echo 'mods';
                      }
                      if ($member->role == 2) {
                        echo 'admin';
                      }
                         ?></td>
                        <td><?php echo $member->phone ?></td>
                        <td><?php echo $member->address ?></td>
                        <td>
                          <a class="btn btn-primary" href="<?php echo getUrl('UpRoleMember?id='.$member->id) ?> ">Up Role
                          </a><hr>
                           <?php if ($member->role != 0) {
                             echo '<a class="btn btn-secondary" href="'.getUrl('DowRoleMember?id='.$member->id).'">Dow Role
                             </a><hr>';
                           }?>
                          <a class="btn btn-danger" href="<?php echo getUrl('delete-member?id='.$member->id)?>" style="float: left;">delete
                          </a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                </table>
    </div>
    <div id="menu3" class="container tab-pane fade">
    <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<h1 style="    text-align: center;
    padding-top:0rem;
    font-size: 2rem;color:#28a745;">
     ĐƠN HÀNG MỚI
                          </h1>
<thead class="thead-dark">
                    <tr>
                      <th>id đơn hàng</th>
                      <th>id khách hàng</th>
                      <th>tên khách</th>
                      <th>phone khách</th>
                      <th> địa chỉ khách</th>
                      <th> tóm tắt đơn hàng</th>
                      <th> thới gian đặt</th>
                      <th></th>
</thead>
                    <?php foreach ($cartnew as $cart): ?>
                      <tr>
                        <td><?php echo $cart->id ?></td>       
                        <td><?php  if ($cart->iduser=="") {
                          echo 'khách chưa ĐK';
                        }else{echo $cart->iduser;} ?></td>
                        <td><?php echo $cart->name ?></td>
                        <td><?php echo $cart->phone ?></td>
                        <td><?php echo $cart->address ?></td>
                        <td><button class=" btn btn-info" data-toggle="modal" data-target="#a<?php echo $cart->id ?>">xem chi tiết</button>
                        <div class="container">
  <!-- Button to Open the Modal -->
  <!-- The Modal -->
  <div class="modal fade" id="a<?php echo $cart->id ?>">
  <div class="modal-dialog modal-lg">

      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h2 class="modal-title">đơn hàng</h2>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
    <img style="width: 230px;
    margin: auto;
    padding-bottom: 2rem;
    display: block;" src="views/massagebaby/img/logo.png">

  <table  class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
<thead class="thead-dark">
                    <tr>
                      <th>mã</th>
                      <th>tên</th>
                      <th>Image</th>
                      <th>Đơn giá</th>
                      <th>số lượng</th>
                      <th>thành tiền</th>
                    </tr>
</thead>
<tbody>
<?php echo $cart->carttable ?>
</tbody>
                </table>
                <h3>tên: <b style="color: red;"><?php echo $cart->name ?></b> </h3>
                <h3>phone: <b style="color: red;"><?php echo $cart->phone ?></b></h3>
                <h3>địa chỉ: <b style="color: red;"><?php echo $cart->address ?></b></h3>
                <h3>thới gian đặt: <b style="color: red;"><?php echo $cart->date ?></b></h3>
                <h3>đơn vị vận chuyển: <b style="color: red;"><?php echo $cart->transport ?></b></h3>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                      </div>
                      </td>
                        <td><?php echo $cart->date ?></td>
                        <td>
                          <a class="btn btn-primary" onclick="return confirm('dơn hàng đã được sử lý?');" href="<?php echo getUrl('controlcart?id='.$cart->id) ?> ">đã sử lý
                          </a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                </table>
                <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<h1 style="    text-align: center;
    padding-top: 15rem;
    font-size: 2rem;">ĐƠN HÀNG DÃ SỬ LÝ</h1>
<thead class="thead-dark">
                    <tr>
                      <th>id đơn hàng</th>
                      <th>id khách hàng</th>
                      <th>tên khách</th>
                      <th>phone khách</th>
                      <th> địa chỉ khách</th>
                      <th> tóm tắt đơn hàng</th>
                      <th> thới gian đặt</th>
                      <th></th>
</thead>
                    <?php foreach ($cartold as $cart): ?>
                      <tr>
                        <td><?php echo $cart->id ?></td>       
                        <td><?php  if ($cart->iduser=="") {
                          echo 'khách chưa ĐK';
                        }else{echo $cart->iduser;} ?></td>
                        <td><?php echo $cart->name ?></td>
                        <td><?php echo $cart->phone ?></td>
                        <td><?php echo $cart->address ?></td>
                        <td><button class=" btn btn-info" data-toggle="modal" data-target="#a<?php echo $cart->id ?>">xem chi tiết</button>
                        <div class="container">
  <!-- Button to Open the Modal -->
  <!-- The Modal -->
  <div class="modal fade" id="a<?php echo $cart->id ?>">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h2 class="modal-title">đơn hàng</h2>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
    <img style="width: 230px;
    margin: auto;
    padding-bottom: 2rem;
    display: block;" src="views/massagebaby/img/logo.png">

  <table  class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
<thead class="thead-dark">
                    <tr>
                      <th>mã</th>
                      <th>tên</th>
                      <th>Image</th>
                      <th>Đơn giá</th>
                      <th>số lượng</th>
                      <th>thành tiền</th>
                    </tr>
</thead>
<tbody>
<?php echo $cart->carttable ?>
</tbody>
                </table>
                <h3>tên: <b style="color: red;"><?php echo $cart->name ?></b> </h3>
                <h3>phone: <b style="color: red;"><?php echo $cart->phone ?></b></h3>
                <h3>địa chỉ: <b style="color: red;"><?php echo $cart->address ?></b></h3>
                <h3>thới gian đặt: <b style="color: red;"><?php echo $cart->date ?></b></h3>
                <h3>đơn vị vận chuyển: <b style="color: red;"><?php echo $cart->transport ?></b></h3>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                      </div>
                      </td>
                        <td><?php echo $cart->date ?></td>
                        <td>
                          
                          <a class="btn btn-danger" onclick="return confirm('xóa đơn hàng?');" href="
                          <?php echo getUrl('delete-cart?id='.$cart->id)?>&tab=4" style="float: left;">delete
                          </a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                </table>
    </div>



		</div>
	</div>
</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="views/massagebaby/js/js.dashboard.js" defer></script>

</body>
</html>
<div class="container">
  <!-- Button to Open the Modal -->
 

  <!-- The Modal -->
  <div class="modal fade" id="dangnhap">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">form đăng nhập</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
    <img style="width: 230px;
    margin: auto;
    padding-bottom: 2rem;
    display: block;" src="views/massagebaby/img/logo.png">
		<div class="alert alert-warning">
    <strong></strong> <?php $msg= isset($_GET['msg'])== true ? $_GET['msg'] : ""; echo $msg;?>
  </div>
		<form action="<?php echo getUrl('login')?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Nhập email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="Nhập password" name="password">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" name="login" class="btn btn-primary">Submit</button>
  </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
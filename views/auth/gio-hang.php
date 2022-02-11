<style>
.money{
  color: red;
}
.moneys{
  color: red;
  font-size: 1.2rem;
}
</style>

<div class="container">
  <!-- Button to Open the Modal -->
 

  <!-- The Modal -->
  <div class="modal fade" id="gio-hang">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">giỏ hàng</h4>
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
<tbody></tbody>
                </table>
<?php 
if (isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
}
?>

  <form  method="post" action="<?php echo getUrl('orders')?>" enctype="multipart/form-data">
    <div class="form-group">
	<input type="hidden" class="form-control" id="carttext" placeholder="Nhập tên của bạn" name="carttext" required>
	<label for="email">tên:</label>
      <input type="text" class="form-control" id="name" value="<?php  $name=isset($user)== true ? $user['name'] : ""; echo $name;?>" placeholder="Nhập tên của bạn" name="name" required>
    </div>
      <input type="hidden" class="form-control" id="id" value="<?php  $id=isset($user)== true ? $user['id'] : ""; echo $id;?>" placeholder="Nhập tên của bạn" name="iduser">
    <div class="form-group">
      <label for="pwd">số điện thoại</label>
      <input type="number" class="form-control" value="<?php  $phone=isset($user)== true ? $user['phone'] : ""; echo $phone;?>"  placeholder="Nhập số phone" id="phone" name="phone" required minlength="10" >
    </div>
    <div class="form-group">
      <label for="pwd">địa chỉ nhận hàng</label>
      <input type="text" class="form-control" value="<?php  $address=isset($user)== true ? $user['address'] : ""; echo $address;?>"  placeholder="Nhập địa chỉ" id="address" name="address" required>
    </div>
    <button  class="btn btn-primary">mua hàng</button>
	<p id="demo" style="color: red;"></p>
  </form>
       
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="views/massagebaby/js/cookie.js"></script>
	<script src="views/massagebaby/js/giohang.js" defer></script>
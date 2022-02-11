<!DOCTYPE html>
<html lang="en">
<head>
<style>
.money{
  color: red;
}
.moneys{
  color: red;
  font-size: 1.2rem;
}
</style>
	<meta charset="UTF-8">
        	<title>mua hàng</title>
        <LINK REL="SHORTCUT ICON"  HREF="views/massagebaby/img/logo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/reset.css">
	<link rel="stylesheet" type="text/css" href="views/massagebaby/css/index.css">
	<title>Document</title>
</head>
<body>
<?php include_once ('views/header.php');?>
<div class="transport" style="width: 70%;margin: auto;padding-top: 5rem;padding-bottom: 5rem;">
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
    <div class="form-group">
	<label for="email">tên:<?php echo $name ?></label>
      <input type="hidden" class="form-control" id="name" value="<?php echo $name ?>" placeholder="Nhập tên của bạn" name="name" required>
    </div>
      <input type="hidden" class="form-control" id="id" value="<?php  $id=isset($user)== true ? $user['id'] : ""; echo $id;?>" placeholder="Nhập tên của bạn" name="iduser">
    <div class="form-group">
      <label for="pwd">số điện thoại:<?php echo $phone ?></label>
      <input type="hidden" class="form-control" value="<?php echo $phone ?>"  placeholder="Nhập số phone" id="phone" name="phone" required minlength="10">
    </div>
    <div class="form-group">
      <label for="pwd">địa chỉ nhận hàng:<?php echo $address ?></label>
      <input type="hidden" class="form-control" value="<?php echo $address ?>"  placeholder="Nhập địa chỉ" id="address" name="address" required>
    </div>
	<div class="form-group">
      <p>đơn vị vận chuyển:</p>
	  <select id="transport">
											<option value="Viettel Post">--Viettel Post--</option>
											<option value="Giao Hàng Tiết Kiệm">--Giao Hàng Tiết Kiệm--</option>
											<option value="J&T Express">--J&T Express--</option>
											<option value="Express">--Express--</option>
											<option value="Ninja Van">--Ninja Van--</option>
										</select>
    </div>
    <button onclick="ajax()"  class="btn btn-primary">mua hàng</button>
	<p id="demo" style="color: red;"></p>
</div>
<footer>
			<div class="container">
				<div class="row rowfoot">
					<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="foot">
							<a href="#"><h4 class="hotel" >Về hotel84.com</h4></a>
							<ul class="ulfoot">
								<li><a href="#">Trang chủ</a></li>
								<li><a href="#">điều khoản</a></li>
								<li><a href="#">thông tin cá nhân</a></li>
								<li><a href="#">tin tức công ty</a></li>
								<li><a href="#">hướng dẫn sử dụng liên hệ</a></li>
								<li><a href="#">tin tức công ty</a></li>
								<li><a href="#">liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<div class="foot">
							<a href="#"><h4 class="hotel" >Về hotel84.com</h4></a>
							<ul class="ulfoot">
								<li><a href="#">Trang chủ</a></li>
								<li><a href="#">điều khoản</a></li>
								<li><a href="#">thông tin cá nhân</a></li>
								<li><a href="#">tin tức công ty</a></li>
								<li><a href="#">hướng dẫn sử dụng liên hệ</a></li>
								<li><a href="#">tin tức công ty</a></li>
								<li><a href="#">liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="foot">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="sf container">
					<p>Địa chỉ:số nhà 38b ngách 6/31/5 Đặng Văn Ngữ,phường Phương Liên,quận Đống đa, Hà nội</p>
					<p>Địa chỉ: số nhà 38b ngách 6/31/5 Đặng Văn Ngữ, phường Phương Li</p>
					<p>Địa chỉ: số nhà 38b ngách 6/31/5 Đặng Văn Ngữ, phường Phương LiĐịa chỉ: số nhà 38b ngách 6/31/5 Đặng Văn Ngữ, phường Phương Li</p>
					<p>Số ĐKKD: 0103003424; Ngày cấp: 02/1/2004; Giám đốc: Phan Văn Thu</p>
				</div>
			</div>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="views/massagebaby/js/cookie.js"></script>
		<?php include_once('auth/login.php'); ?>
		<script>

	var	cart= JSON.parse(localStorage['cart']);
   drawCheckout();
function drawCheckout(){
			$('tbody').empty();
			var ckUnit = "";
			var totalMoney = 0;
			var	outcart="";
			for (var i = 0; i < cart.length; i++) {
				totalMoney += cart[i].price * cart[i].quantity;
				ckUnit += `
					<tr>
						<td>${cart[i].id}</td>
						<td>${cart[i].productName}</td>
						<td>
							<img style="width: 100px; height: auto;" src="${cart[i].imageUrl}" alt="">
						</td>
            <td>
							<b><span class="unit-price money">${cart[i].price}$</span></b>
						</td>
            <td>
			${cart[i].quantity}
							
						</td>
						<td>
							<b><span class="unit-price money">${cart[i].price * cart[i].quantity}$</span></b>
						</td>
					</tr>			
				`;
			outcart +=`SP:${i} id sản phẩm: ${cart[i].id}, tên sản phẩm:${cart[i].productName}, đơn giá sản phẩm: $${cart[i].price}, số lương:${cart[i].quantity}, thành tiền:${cart[i].price * cart[i].quantity}~~~~~~~~~
			`;
			}
			ckUnit += `
				<tr>
      
					<td colspan="5">Total Price:   </td>
					<td><b class="moneys">${totalMoney}$</b></td>
				</tr>
			`;
			outcart +=` tổng đơn hàng:$${totalMoney}`;
      var ledcart = '('+cart.length+' SP)';
      document.getElementById("ledcart").innerHTML = ledcart;
	//   document.getElementById("carttable").innerHTML = ckUnit;
	//   document.getElementById("carttext").value = outcart;
	// Cookies.set('cartpro', cart, { expires: 7, path: '/' });
	var jsoncart= JSON.stringify(cart);
	 localStorage.setItem("cart", jsoncart);
			$('tbody').append(ckUnit);
		};
		function ajax(){
			var name = document.getElementById("name").value;
			var id = document.getElementById("id").value;
			var phone = document.getElementById("phone").value;
			var address = document.getElementById("address").value;
			var transport = document.getElementById("transport").value;
			var carttable = "";
			var totalMoney = 0;
			var	carttext="";
			for (var i = 0; i < cart.length; i++) {
				totalMoney += cart[i].price * cart[i].quantity;
				carttable += `
					<tr>
						<td>${cart[i].id}</td>
						<td>${cart[i].productName}</td>
						<td>
							<img style="width: 100px; height: auto;" src="${cart[i].imageUrl}" alt="">
						</td>
            <td>
							<b>$<span class="unit-price">${cart[i].price}</span></b>
						</td>
            <td>
							${cart[i].quantity}
						</td>
						<td>
							<b>$<span class="unit-price">$${cart[i].price * cart[i].quantity}</span></b>
						</td>
					</tr>			
				`;
				carttext +=`SP:${i} id sản phẩm: ${cart[i].id}, tên sản phẩm:${cart[i].productName}, đơn giá sản phẩm: $${cart[i].price}, số lương:${cart[i].quantity}, thành tiền:$${cart[i].price * cart[i].quantity}~~~~~~~~~
			`;
			}
			carttable += `
				<tr>
					<td colspan="5">Total Price</td>
					<td><b>$${totalMoney}</b></td>
				</tr>
			`;
			carttext +=` tổng đơn hàng:$${totalMoney}`;


		$.post("cart",
		{
			name: name,
			id: id,
			phone: phone,
			address: address,
			carttable: carttable,
			transport: transport,
			carttext: carttext
  },
  function(data){
	cart=[];
	var jsoncart= JSON.stringify(cart);
	 localStorage.setItem("cart", jsoncart);
	 ledcart = '('+cart.length+' SP)';
      document.getElementById("ledcart").innerHTML = ledcart;
	  $(".transport").empty();
	  $(".transport").append(data);
  });
};
		</script>
</body>
</html>
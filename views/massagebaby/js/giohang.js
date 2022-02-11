// --------------------------------------giỏ hàng=======================================================
//   var homepage= document.getElementById('homepages').innerHTML;
//  homepage = Number(homepage);
// function pagehomeup(){
// homepage = homepage + 1;
// $('#homepages').empty();
// $('#homepages').append(homepage);

// ajaxcon();
// };

// function pagehomedow(){
// 	if (homepage > 1) {
// homepage = homepage - 1;
// $('#homepages').empty();
// $('#homepages').append(homepage);
// ajaxcon();
// 	}
// };
// function ajaxcon(){
// 	$.post("pagehome",{page:homepage},function(data){
// 	$('#propagehome').empty();
// 	$('#propagehome').append(data);
// })
// };
var cart=[];
$(document).ready(function(){
	$('.AddCart').on('click', function AddCart(){
		$(document).ready();
		var ProId = $(this).attr('ProID');
    var img = $('#pro-'+ProId).find('img').attr('src');
    var pName = $('#pro-'+ProId).find('#pName').text();
    var price = $('#pro-'+ProId).find('#price').attr('price');
    var obj ={
      id: ProId,
      imageUrl: img,
      productName: pName,
      price: price
    };
    // Check san pham co trong gio hang hay chua
    var flag = false;
				for (var i = 0; i < cart.length; i++) {
					if(cart[i].id == obj.id){
						flag = true;
						break;
					}
				}
        // san pham chua co trong gio hang
				if(flag === false){
					obj.quantity = 1;
					cart.push(obj);
				}else{ // san pham da co trong gio hang
					cart[i].quantity += 1;
				}
				drawCheckout();

	});
});
cart= JSON.parse(localStorage['cart']);
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
							<b><span class="unit-price money">${cart[i].price}</span>$</b>
						</td>
            <td>
							<input type="number" style="width: 50px; height: auto;margin-bottom: 0.5rem;
}" onchange="changeUnitQuantity(this, ${cart[i].id})" name="" value="${cart[i].quantity}" min="1" step="1">
							<button type="button" onclick="removeUnit(${cart[i].id})" class="btn btn-danger">
								xóa
							</button>
						</td>
						<td>
							<b><span class="unit-price money">${cart[i].price * cart[i].quantity}</span>$</b>
						</td>
					</tr>			
				`;
			outcart +=`SP:${i} id sản phẩm: ${cart[i].id}, tên sản phẩm:${cart[i].productName}, đơn giá sản phẩm: ${cart[i].price}$, số lương:${cart[i].quantity}, thành tiền:${cart[i].price * cart[i].quantity}~~~~~~~~~
			`;
			}
			ckUnit += `
				<tr>
					<td colspan="5">Total Price</td>
					<td><b class="moneys">${totalMoney}$</b></td>
				</tr>
			`;
			outcart +=` tổng đơn hàng:${totalMoney}`;
      var ledcart = '('+cart.length+' SP)';
      document.getElementById("ledcart").innerHTML = ledcart;
	//   document.getElementById("carttable").innerHTML = ckUnit;
	//   document.getElementById("carttext").value = outcart;
	// Cookies.set('cartpro', cart, { expires: 7, path: '/' });
	var jsoncart= JSON.stringify(cart);
	 localStorage.setItem("cart", jsoncart);
			$('tbody').append(ckUnit);
		}
    function removeUnit(id){
			// Check san pham co trong gio hang hay chua
			for (var i = 0; i < cart.length; i++) {
				if(cart[i].id == id){
					cart.splice(i, 1);
					break;
				}
			}

			drawCheckout();
		}

		function changeUnitQuantity(e, id){
			var ipValue = e.value;
			if(ipValue > 0){
				for (var i = 0; i < cart.length; i++) {
					if(cart[i].id == id){
						cart[i].quantity = ipValue;
						break;
					}
				}
				drawCheckout();
			}else{
				removeUnit(id);
			}
		}
// 		function CheckValidate(){
// 			var name = document.getElementById("name").value;
// 			var phone = document.getElementById("phone").value;
// 			var address = document.getElementById("address").value;
// 			var text;
// 			if (isNaN(name) || isNaN(phone) || isNaN(address)) {
//     text = "bạn chưa điền thông tin";
// 	document.getElementById("demo").innerHTML = text;
// 	break;
//   } else {
// 	ajax();
//   }
// 		};

		 function ajax(){
			var name = document.getElementById("name").value;
			var id = document.getElementById("id").value;
			var phone = document.getElementById("phone").value;
			var address = document.getElementById("address").value;
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
			carttext: carttext
  },
  function(data, status){
	alert( data + "\nStatus: " + status);
	cart=[];
	var jsoncart= JSON.stringify(cart);
	 localStorage.setItem("cart", jsoncart);
	 ledcart = '('+cart.length+' SP)';
      document.getElementById("ledcart").innerHTML = ledcart;
	  $('tbody').empty();
  });
};
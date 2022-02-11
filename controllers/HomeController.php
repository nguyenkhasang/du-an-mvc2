<?php 
require_once'./models/Post.php';
require_once'./models/Categories.php';
require_once'./models/Use.php';
require_once'./models/Cart.php';
class HomeController
{
	function showWeb()
	{
		// var_dump($_COOKIE['cartpro']);die;
		// $data=$_POST['name'];
		// if (isset($s)) {
		// 	echo $data;die;
		// }
		$post= Post::allpage(['id',0,9]);
		$cate= cate::all();
		include_once 'views/show-web.php';
	}
	function pagehome()
	{
		$page=$_POST['page'];
		settype($page,"int");
		// var_dump($page);die;
		$page= $page*9-9;
		// var_dump($page);die;
		$post= Post::allpage(['id',$page,9]);
		foreach ($post as $post) {
			$catepostpage=cate::Where(['id','=',$post->cate_id])->first();
			echo '<div class="colsp col-xs-12 col-sm-6 col-md-4" id="pro-'.$post->id.'" >
			<div class="sanpham">
				<a href="detail?id='.$post->id.'" class="c-img"><img alt="" title="" class="imgsanpham" src="'.$post->image.'"></a>
				<div class="info-sanpham">
				<div style="min-height: 44px;">
					<a class="aa" id="pName" href="detail?id='.$post->id.'">'.$post->products_name.'</a>
					</div>
					<a href="" class="infosanphan">'.$post->author.'</a><br>
					<span>gia cũ: <span class="giacu" >'. $post->price .'$</span></span>
											<h3 id="price" price="'. $post->price_sale .'" >'. $post->price_sale .'$</h3>
					<div class="star-rating"> 
						<div class="star-base">
							<div class="star-rate" style="width:90%"></div> 
							<a dt-value="1" href="#1"></a> 
							<a dt-value="2" href="#2"></a> 
							<a dt-value="3" href="#3"></a> 
							<a dt-value="4" href="#4"></a> 
							<a dt-value="5" href="#5"></a>
						</div>
					</div>
					<p>id san pham:'.$post->id.', loại:'.$catepostpage[0]->categaries_name.'</p>
					<p>
											'. $post->content .'
											</p>
				</div>
				<button class="btn btn-success AddCart"  ProID="'.$post->id.'" >Thêm giỏ hàng</button>
			</div>
		</div>';
		}
	}
	function pagepost()
	{
		$page=$_POST['page'];
		settype($page,"int");
		// var_dump($page);die;
		$page= $page*5-5;
		// var_dump($page);die;
		$post= Post::allpage(['id',$page,5]);
		foreach ($post as $post) {
			$catepostpage=cate::Where(['id','=',$post->cate_id])->first();
			$text="'bạn chắc chắn muốn xóa Sản Phẩm này?'";
			echo '<tr>
			<td>'.$post->id.'</td>
			<td>'.$post->products_name.'</td>
			<td>'.$post->price.'</td>       
			<td>'.$post->price_sale.'</td>    
			<td>
			  <img style="width: 200px; height: auto;" src="'.$post->image.'" >
			</td>
			<td>'.$catepostpage[0]->categaries_name.'</td>
			<td>'.$post->author.'</td>    
			<td> 
			<button class=" btn btn-info" data-toggle="modal" data-target="#a'. $post->id .'">xem chi tiết</button>
                        <div class="container">
  <!-- Button to Open the Modal -->
  <!-- The Modal -->
  <div class="modal fade" id="a'. $post->id .'">
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
                    <td>'. $post->content .'</td>
                    <td>'. $post->ingredient .'</td>    
                        <td>'. $post->instruction .'</td>  
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
			  <a class="btn btn-primary" href="updateformpost?id='.$post->id.' ">update
			  </a><hr>
			  <a class="btn btn-danger" onclick="return confirm('.$text.');" href="delete-post?id='.$post->id.'" style="float: left;">delete
			  </a>
			</td>
		  </tr>';
		}
	}
	function detail()
	{
		$id=$_GET['id'];
		$post=Post::Where(['id','=',$id])->first();
		$idcate=$post[0]->cate_id;
		$postdetailCate=Post::Wherelimit(['cate_id','=',$idcate,'LIMIT 3'])->first();
		include_once ('views/detail.php');
	}
	public function search(){
		$cate = cate::all();

		$keyword = $_GET['keyword'];
		$post = Post::where(['products_name', 'like' , "%$keyword%" ])->first();
		include_once 'views/search-web.php';
	}
	function Dashboard()
	{
		$user = $_SESSION['user'];
 if ($user['role'] != 1 && $user['role'] != 2) {
		echo '<h1>BẠN KHÔNG ĐƯỢC CẤP PHÉP TRUY CẬP VÀO TRANG NÀY</h1>';die;
	 }
		$post= Post::allpage(['id',0,5]);
		$allpost= Post::CountColTab(['id']);
		$cate= cate::all();
		$member= User::all();
		$new=0;
		$old=1;
		$cartnew=Cart::Where(['control','=',$new])->first();
		$cartold=Cart::Where(['control','=',$old])->first();
		$carts= Cart::CountColTab(['id']);
		include_once ('views/admin/Dashboard.php');
	}
	function cart()
	{
		$iduser=$_POST['id'];
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$carttable=$_POST['carttable'];
		$carttext=$_POST['carttext'];
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$date = date('H:i:s - d/m/Y');
		$transport=$_POST['transport'];
		$model= new Cart();
		$model->insert(compact('iduser','name', 'phone', 'address', 'carttable', 'carttext', 'date', 'transport'));
		echo '<h1 style="color: #0cab4b;text-align: center;font-size: 2rem;">đặt hàng thành công !!</h1><h3> cảm ơn bạn <p style="color: red;">'.$name.'</p> đã đặt hàng. đơn hàng của bạn đã được đặt thàng công, nhân viên cửa hàng sẽ liên hệ sớm nhất theo số <p style="color: red;">'.$phone.'</p> bạn vui lòng nhấc máy để xác nhận đơn hàng </h3>
		<a class="btn btn-success" href="/">home</a>
		';
	}
	function deletecart()
	{
		$user = $_SESSION['user'];
 if ($user['role'] != 1 && $user['role'] != 2) {
		echo '<h1>BẠN KHÔNG ĐƯỢC CẤP PHÉP TRUY CẬP VÀO TRANG NÀY</h1>';die;
	 }
		$id= $_GET['id'];
		$cart = Cart::find($id);
		$cart->deletes();
		header('location:'.getUrl('Dashboard?tab=4'));
	}
	function controlcart()
	{
		$user = $_SESSION['user'];
 if ($user['role'] != 1 && $user['role'] != 2) {
		echo '<h1>BẠN KHÔNG ĐƯỢC CẤP PHÉP TRUY CẬP VÀO TRANG NÀY</h1>';die;
	 }
		$id= $_GET['id'];
		$control=1;
		$model=new Cart();
		$model->update(compact('id', 'control'));
		header('location:'.getUrl('Dashboard?tab=4'));
	}
	function orders()
	{
		$name=$_POST['name'];
		$iduser=$_POST['iduser'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		include_once ('views/confirmcart.php');
	}

}
 ?>
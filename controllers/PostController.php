<?php 
require_once'./models/Post.php';
require_once'./models/Categories.php';
require_once'./models/Use.php';
class PostController
{
	function deletepost()
	{
		$user = $_SESSION['user'];
 if ($user['role'] != 1 && $user['role'] != 2) {
		echo '<h1>BẠN KHÔNG ĐƯỢC CẤP PHÉP TRUY CẬP VÀO TRANG NÀY</h1>';die;
	 }
		$id= $_GET['id'];
		$post = post::find($id);
		$post->deletes();
		header('location:'.getUrl('Dashboard'));
	}
	function addformpost()
	{
		$cate=cate::all();
		include_once('views/admin/addpost.php');
	}
	function addpost()
	{
		$user = $_SESSION['user'];
 if ($user['role'] != 1 && $user['role'] != 2) {
		echo '<h1>BẠN KHÔNG ĐƯỢC CẤP PHÉP TRUY CẬP VÀO TRANG NÀY</h1>';die;
	 }
		$products_name=$_POST['products_name'];
		$cate_id=$_POST['categorise_id'];
		$price=$_POST['price'];
		$price_sale=$_POST['price_sale'];
		$author=$_POST['author'];
		$content=$_POST['content'];
		$ingredient=$_POST['ingredient'];
		$instruction=$_POST['instruction'];
		$image=$_FILES['image'];
		if($image['size'] > 0){
			$ext = pathinfo($image['name'], PATHINFO_EXTENSION);
			$fileName = $author. '-' . uniqid() . '.' . $ext;
			move_uploaded_file($image['tmp_name'], 'public/uploads/'.$fileName);
			$image = 'public/uploads/'.$fileName;
		}else{
			$image = "not image";
		}
		
		$model = new Post();
		 
		$model->insert(compact('products_name', 'cate_id', 'price', 'price_sale', 'image', 'author', 'content', 'ingredient', 'instruction'));
		

		header('location:'.getUrl('Dashboard'));

	}
	function updateformpost()
	{
		$cate=cate::all();
		$id=$_GET['id'];
		$post=Post::Where(['id','=',$id])->first();
		include_once('views/admin/updateformpost.php');
	}
	function updatepost()
	{
		$user = $_SESSION['user'];
 if ($user['role'] != 1 && $user['role'] != 2) {
		echo '<h1>BẠN KHÔNG ĐƯỢC CẤP PHÉP TRUY CẬP VÀO TRANG NÀY</h1>';die;
	 }
		$id=$_POST['id'];
		$products_name=$_POST['products_name'];
		$cate_id=$_POST['categorise_id'];
		$price=$_POST['price'];
		$price_sale=$_POST['price_sale'];
		$author=$_POST['author'];
		$content=$_POST['content'];
		$ingredient=$_POST['ingredient'];
		$instruction=$_POST['instruction'];
		$image=$_FILES['image'];
		if($image['size'] > 0){
			$ext = pathinfo($image['name'], PATHINFO_EXTENSION);
			$fileName = $author. '-' . uniqid() . '.' . $ext;
			move_uploaded_file($image['tmp_name'], 'public/uploads/'.$fileName);
			$image = 'public/uploads/'.$fileName;
		}else{
			$image = $_POST['imagecu'];
		}
		$model = new Post();
		$model->update(compact('id','products_name', 'cate_id', 'price', 'price_sale', 'image', 'author', 'content', 'ingredient', 'instruction'));
		

		header('location:'.getUrl('Dashboard'));
	}

}

 ?>
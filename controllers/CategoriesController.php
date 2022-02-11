<?php 
require_once'./models/Post.php';
require_once'./models/Categories.php';
require_once'./models/Use.php';
class CategoriesController
{
	function deletecategories()
	{
		$user = $_SESSION['user'];
 if ($user['role'] != 1 && $user['role'] != 2) {
		echo '<h1>BẠN KHÔNG ĐƯỢC CẤP PHÉP TRUY CẬP VÀO TRANG NÀY</h1>';die;
	 }
		$id= $_GET['id'];
		$post = Post::where(['cate_id', '=', $id])->first();
		for ($i=0; $i < count($post) ; $i++) { 
			$post[$i]->deletes();
		}
		$cate = cate::find($id);
		$cate->deletes();
		header('location:'.getUrl('Dashboard?tab=2'));
	}
	function formupdatecate()
	{
		$id=$_GET['id'];
		$cate=Cate::Where(['id','=',$id])->first();
		include_once('views/admin/formupdatecategories.php');
	}
	function updatecate()
	{
		$user = $_SESSION['user'];
 if ($user['role'] != 1 && $user['role'] != 2) {
		echo '<h1>BẠN KHÔNG ĐƯỢC CẤP PHÉP TRUY CẬP VÀO TRANG NÀY</h1>';die;
	 }
		$id=$_POST['id'];
		$categaries_name=$_POST['categories_name'];
		$model=new cate();
		$model->update(compact('id', 'categaries_name'));
		header('location:'.getUrl('Dashboard?tab=2'));

	}
	function formaddcate()
	{
		include_once('views/admin/addcategories.php');
	}
	function addcate()
	{
		$user = $_SESSION['user'];
 if ($user['role'] != 1 && $user['role'] != 2) {
		echo '<h1>BẠN KHÔNG ĐƯỢC CẤP PHÉP TRUY CẬP VÀO TRANG NÀY</h1>';die;
	 }

		$categaries_name=$_POST['namecate'];
		$model = new cate();
		$model->insert(compact('categaries_name'));
		header('location:'.getUrl('Dashboard?tab=2'));
	}
	function detailCate()
	{
		$cate= cate::all();
		$id=$_GET['id'];
		$detailCate=cate::Where(['id','=',$id])->first();
		$postdetailCate=Post::Where(['cate_id','=',$id])->first();
		include_once ('views/detailcate.php');
	}

}
 ?>
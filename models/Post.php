<?php 
require_once './models/BaseModel.php';
class Post extends basemodel
{
	public $tableName='products';
	function getcate()
	{
		// $cate_id= $post->cate_id;
		$name= cate::find($this->cate_id);
		return $name;
	}
}


 ?>
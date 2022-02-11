<?php 
class BaseModel
{
	function __construct()
	{
	$this->conn = new PDO('mysql:host=127.0.0.1;dbname=mvc;charset=utf8', 'root', '');
	 //$this->conn = new PDO('mysql:host=fdb27.runhosting.com;dbname=3749395_mvc;charset=utf8', '3749395_mvc', ':})r^j5Z01q)Q^aS');
	}
	public static function all()
	{
		$model=new static();
		$query = "select * from $model->tableName";
		$stmt = $model->conn->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_CLASS, get_class());

	}
	public static function allpage($arr)
	{
		$model=new static();
		$query = "select * from $model->tableName ORDER BY $arr[0] ASC LIMIT $arr[1],$arr[2]";
		$stmt = $model->conn->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_CLASS, get_class());

	}
	public static function Where($arr)
	{
		$model=new static();
		$model->queryBuilder="select * from $model->tableName where $arr[0] $arr[1] '$arr[2]'";
		return $model;
	}
	public static function Wherelimit($arr)
	{
		$model=new static();
		$model->queryBuilder="select * from $model->tableName where $arr[0] $arr[1] '$arr[2]' $arr[3]";
		return $model;
	}
	public function first(){
 		$stmt = $this->conn->prepare($this->queryBuilder);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
		return $result;
 	}
 	public function insert($arr){
		$this->queryBuilder = "insert into $this->tableName ";
		$cols = " (";
		$vals = " (";
		foreach ($arr as $key => $value) {
			$cols .= " $key,";
			$vals .= " :$key,";
		}

		$cols = rtrim($cols, ',');
		$vals = rtrim($vals, ',');

		$cols .= ") ";
		$vals .= ") ";

		$this->queryBuilder .= $cols . ' values ' . $vals;

		$stmt = $this->conn
					->prepare($this->queryBuilder);
		foreach ($arr as $key => &$value) {
			$stmt->bindParam(":$key", $value);
		}
		$stmt->execute();

	}	
	static function find($id)
	{
		$model = new static();
		$model->queryBuilder = "select * from $model->tableName where id = $id";
		$stmt = $model->conn->prepare($model->queryBuilder);
		$stmt->execute();
		$rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		if(count($rs) > 0){
			return $rs[0];
		}

		return $rs;
	}
	public function getcate()
	{
		 $cate_id= $this->cate_id;
		 $model = new static();
		$model->queryBuilder = "select * from categaries where id = $cate_id";
		$stmt = $model->conn->prepare($model->queryBuilder);
		$stmt->execute();
		$rss = $stmt->fetchAll(PDO::FETCH_CLASS, get_class());
		return $rss;

	}
	public function deletes()
	{
		 $model = new static();

		$sql="delete from $this->tableName where id = $this->id";
		$stmt= $this->conn->prepare($sql);
		$stmt->execute();
		return true;
	}
	public function update($arr)
	{
		$this->queryBuilder = "update $this->tableName set ";
		
		foreach ($arr as $key => $value) {
			$this->queryBuilder .= " $key = :$key,";
		}

		$this->queryBuilder = rtrim($this->queryBuilder, ',');
		$this->queryBuilder .= " where id = :id";

		$stmt = $this->conn
					->prepare($this->queryBuilder);
		foreach ($arr as $key => &$value) {
			$stmt->bindParam(":$key", $value);
		}
		$stmt->bindParam(":$id", $this->id);
		$stmt->execute();
	}
	public static function CountColTab($arr)
	{
		$model=new static;
		$queryBuilder= "SELECT COUNT($arr[0]) FROM $model->tableName ";
		$stmt = $model->conn->prepare($queryBuilder);
		$stmt->execute();
		return $stmt->fetchColumn();

	}
	}
 ?>
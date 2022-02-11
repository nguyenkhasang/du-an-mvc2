<?php
require_once'./models/Post.php';
require_once'./models/Categories.php';
require_once'./models/Use.php';
class UserController
{
	function infouser()
	{
		$user = $_SESSION['user'];
		$id = $user['id'];
		$InfoUser= User::Where(['id','=',$id])->first();

		include_once ('views/auth/infouse.php');
	}
	function logout()
	{
		session_destroy();
				header('location:'.getUrl('/'));
	}
	function formregister()
	{
		include_once ('views/auth/form-auth.php');
	}
	function register()
	{
		if(isset($_POST["register"])){

			$name = isset($_POST['name']) == true ? $_POST['name'] : "";
			$email = isset($_POST['email']) == true ? $_POST['email'] : "";
			$password = $_POST['password'];
			$cfpassword = $_POST['confirm'];

			$user = User::where(['email', '=', $email])->first();
			$getemail = count($user);
			$a=0;
			if ($getemail == $a) {
				if($password == $cfpassword && $password != '' && $email != '' && $name != ''){
				$password = md5($password);
				$model = new User();
				$model->insert(compact('name', 'email', 'password'));



			        	header('location:'.getUrl('form-register?msg= bạn đã đăng kí thánh công'));die;

			}
				
				else{
					header('location:'.getUrl('form-register?msg=Vui lòng kiểm tra lại thông tin nhập!'));die;
			}
		}
		else{
			    header('location:'.getUrl('form-register?msg=Email đã có người sử dụng'));
				die;
		}
			}	 		
	}
	function formlogin()
	{
		include_once ('views/auth/login.php');
	}
	function login()
	{
		if(isset($_POST["login"])){

			$email = isset($_POST['email']) == true ? $_POST['email'] : "";
			$password = md5(isset($_POST['password']) == true ? $_POST['password'] : "");
			if($email == "" || $password == ""){
				header('location:'.getUrl('?msg=Email hoặc Password rỗng!'));die;
			}

			$user = User::where(['email', '=', $email])->first();
			// var_dump($user);die;
			$user = $user[0];
			$emails = $user->email;
			$passwords = $user->password;
			if ($email==$emails) {

				if ($password==$passwords) {
					$_SESSION['user'] = [
				'id' => $user->id,
				'email' => $user->email,
				'avatar' => $user->avatar,
				'role' => $user->role,
				'phone' => $user->phone,
				'address' => $user->address,
				'name' => $user->name
				];
				header('location:'.getUrl('/'));

			}
			else{
				header('location:'.getUrl('?msg= Password không đúng!'));die;
			}

			}
			else{
				header('location:'.getUrl('?msg=Email  không đúng!'));die;
			}
		}
	}
	function FormUpdateUser()
	{
		$user = $_SESSION['user'];
		$userid= $_GET['id'];
		if ($userid != $user['id']) {
			echo '<h1> LỖI XÁC THỰC</h1>';die;
		}
		$InfoUser= User::Where(['id','=',$userid])->first();
		include_once ('views/auth/FormUpdateUser.php');
	}
	function UpdateUser()
	{
		$user = $_SESSION['user'];
		$author = $user['email'];
		$id = $user['id'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$avatar=$_FILES['avatar'];
		if($avatar['size'] > 0){
			$ext = pathinfo($avatar['name'], PATHINFO_EXTENSION);
			$fileName = $author. '-' . uniqid() . '.' . $ext;
			move_uploaded_file($avatar['tmp_name'], 'public/uploads/'.$fileName);
			$avatar = 'public/uploads/'.$fileName;
		}else{
			$avatar = $_POST['avatarcu'];
		}
		$model = new User();
		$model->update(compact('id','name', 'phone', 'address', 'avatar'));
		

		header('location:'.getUrl('InfoUse'));
	}
	function UpRoleMember()
	{
		$id = $_GET['id'];
		// print_r($id);die;
		$member= User::Where(['id', '=', $id])->first();
		$role=$member[0]->role;
		//  print_r($member[0]);die;
		if($role == 1 or $role == 2) {
			echo 'member đã là mod không thể up role <br> <li><a style="color: #28a745;" class="dropdown-item" href="Dashboard">Dashboard</a></li>';die;
		}
		$id = $_GET['id'];
		$role= $role + 1;
		$model = new User();
		$model->update(compact('id', 'role'));
		header('location:'.getUrl('Dashboard?tab=3'));
		  

	}
	function DowRoleMember()
	{
		$id = $_GET['id'];
		$member= User::Where(['id', '=', $id])->first();
		$role=$member[0]->role;
		if($role == 0) {
			echo 'member đã là thành viên không thể dow role <br> <li><a style="color: #28a745;" class="dropdown-item" href="Dashboard">Dashboard</a></li>';die;
		}
		$user = $_SESSION['user'];
		$RoleUser=$user['role'];
		if($role >= $RoleUser) {
			echo 'bạn không thể dow role này <br> <li><a style="color: #28a745;" class="dropdown-item" href="Dashboard">Dashboard</a></li>';die;
		}
		$id = $_GET['id'];
		$role= $role - 1;
		$model = new User();
		$model->update(compact('id', 'role'));
		header('location:'.getUrl('Dashboard?tab=3'));
	}
	function DeleteMember()
	{
		$id = $_GET['id'];
		$member= User::Where(['id', '=', $id])->first();
		$role=$member[0]->role;
		$user = $_SESSION['user'];
		$RoleUser=$user['role'];
		if($role >= $RoleUser) {
			echo 'bạn không thể xóa tài khoản này <br> <li><a style="color: #28a745;" class="dropdown-item" href="Dashboard">Dashboard</a></li>';die;
		}
		$deleteuser = User::find($id);
		$deleteuser->deletes();
		header('location:'.getUrl('Dashboard?tab=3'));

	}
	function FormUpdatePassUser()
	{
		$user = $_SESSION['user'];
		$id = $user['id'];
		include_once ('views/auth/UpdatePass.php');
	}
	function UpdatePass()
	{
		$id = $_POST['id'];
		$password = $_POST['password'];
		$newpassword = $_POST['newpassword'];
		$confirm = $_POST['confirm'];
		$member= User::Where(['id', '=', $id])->first();

		if ($password =='' || $newpassword =='' || $confirm =='') {
			header('location:'.getUrl('FormUpdatePassUser?msg= Vui Lòng Điền Đủ Dữ Liệu'));die;
		}
		$passwordcu= $member[0]->password;
		if ($passwordcu != md5($password)) {
			header('location:'.getUrl('FormUpdatePassUser?msg= mật khẩu cũ không đúng '));die;
		}
		if ($newpassword != $confirm) {
			header('location:'.getUrl('FormUpdatePassUser?msg= nhập lại pasword mới không khớp nhau '));die;
		}
		$password = md5($newpassword);
		$model = new User();
		$model->update(compact('id', 'password'));
		header('location:'.getUrl('FormUpdatePassUser?msg= chúc mừng bạn password được đổi thành công'));
	}
}
?>
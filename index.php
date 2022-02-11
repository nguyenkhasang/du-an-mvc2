<?php 

session_start();

?>
<?php 
 $url = isset($_GET['url']) == true ? $_GET['url'] : "/";

 // function dd($var){
 // 	echo "<pre>";
 // 	var_dump($var);print_r();
 // 	die;
 // }
// lấy ra url gốc của project
 function getUrl($path = ""){
 	$currentUrlpath = $GLOBALS['url'];
 	$absoluteUrl = strtok("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",'?');
 	if($currentUrlpath != "/"){
 		$absoluteUrl = str_replace("$currentUrlpath", "", $absoluteUrl);
 	}
 	return $path == "/" ? $absoluteUrl : $absoluteUrl.$path;
 }


 ?><?php 

 	require_once 'controllers/HomeController.php';
 	require_once 'controllers/PostController.php';
 	require_once 'controllers/CategoriesController.php';
 	require_once 'controllers/UserController.php';



 	switch ($url) {
 		case '/':
 		$ctl = new HomeController();
 		$ctl->showWeb();
 		break;
 		case 'detail':
 		$ctl = new HomeController();
 		$ctl->detail();
 		break;
 		case 'detailcate':
 		$ctl= new CategoriesController();
 		$ctl->detailCate();
 		break;
 		case 'form-register':
 		$ctl=new UserController();
 		$ctl->formregister();
 		break;
 		case 'register':
 		$ctl= new UserController();
 		$ctl->register();
 		break;
 		case 'form-login':
 		$ctl= new UserController();
 		$ctl->formlogin();
 		break;
 		case 'login':
 		$ctl= new UserController();
 		$ctl->login();
 		break;
 		case 'logout':
 		$ctl = new UserController();
 		$ctl->logout();
 		break;
 		case 'Dashboard':
 		$ctl= new HomeController();
 		$ctl-> Dashboard();
 		break;
 		case 'delete-post':
 		$ctl= new PostController();
 		$ctl-> deletepost();
 		break;
 		case 'delete-cate':
 		$ctl= new CategoriesController();
 		$ctl-> deletecategories();
 		break;
 		case 'addformpost':
 		$ctl= new PostController();
 		$ctl-> addformpost();
 		break;
 		case 'addpost':
 		$ctl= new PostController();
 		$ctl-> addpost();
 		break;
 		case 'updateformpost':
 		$ctl= new PostController();
 		$ctl-> updateformpost();
 		break;
 		case 'updatepost':
 		$ctl= new PostController();
 		$ctl-> updatepost();
 		break;
 		case 'formupdatecate':
 		$ctl=new CategoriesController();
 		$ctl-> formupdatecate();
 		break;
 		case 'updatecate':
 		$ctl=new CategoriesController();
 		$ctl-> updatecate();
 		break;
		case 'formaddcate':
		$ctl=new CategoriesController();
		$ctl-> formaddcate();
		break;
		case 'addcate':
		$ctl=new CategoriesController();
		$ctl-> addcate();
		break;
 		case 'search':
 		$ctl=new HomeController();
 		$ctl-> search();
 		break;
		case 'InfoUse':
		$ctl=new UserController();
		$ctl->infouser();
		break;
		case 'FormUpdateUser':
		$ctl=new UserController();
		$ctl->FormUpdateUser();
		break;
		case 'UpdateUser':
		$ctl=new UserController();
		$ctl->UpdateUser();
		break;
		case 'UpRoleMember':
		$ctl=new UserController();
		$ctl->UpRoleMember();
		break;
		case 'DowRoleMember':
		$ctl=new UserController();
		$ctl->DowRoleMember();
		break;
		case 'delete-member':
		$ctl=new UserController();
		$ctl->DeleteMember();
		break;
		case 'FormUpdatePassUser':
		$ctl=new UserController();
		$ctl->FormUpdatePassUser();
		break;
		case 'UpdatePass':
		$ctl=new UserController();
		$ctl->UpdatePass();
		break;
		case 'cart':
		$ctl=new HomeController();
		$ctl->cart();
		break;
		case 'delete-cart':
		$ctl=new HomeController();
		$ctl->deletecart();
		break;
		case 'controlcart':
		$ctl=new HomeController();
		$ctl->controlcart();
		break;
		case 'pagehome':
		$ctl=new HomeController();
		$ctl->pagehome();
		break;
		case 'pagepost':
		$ctl=new HomeController();
		$ctl->pagepost();
		break;
		case 'orders':
		$ctl=new HomeController();
		$ctl->orders();
		break;
	case 'user-detail': // hien thi chi tiet thong tin 1 user 
						// dua vao id tren url
	break;
	
	default:
	echo "<h1>Khong tim thay! ^(^-^)^ !</h1>";
	break;
}

?>
<?php
if(isset($_GET["module"])){
	$module = $_GET["module"];

	switch($module) {
		case "about" :
			include('module/about.php');
		break;
		case "donate" :
			include('module/donate.php');
		break;
		case "login" :
			include('module/login.php');
		break;
		case "donatur" :
			include('module/donatur.php');
		break;
		case "tambah" :
			include('module/tambah.php');
		break;
		case "tambah-proses" :
			include('module/tambah-proses.php');
		break;
		case "hapus" :
			include('module/hapus.php');
		break;
		case "edit" :
			include('module/edit.php');
		break;
		case "edit-proses" :
			include('module/edit-proses.php');
		break;
		case "signin" :
			include('module/signin.php');
		break;
		case "admin" :
			include('module/admin.php');
		break;
		case "member" :
			include('module/member.php');
		
		break;
		default:
	        include('module/home.php');

		
	}
}else{
	include('module/home.php');
}


?>
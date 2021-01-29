<?php 
include 'koneksi.php';

$username = isset($_POST['username']) ? $_POST['username'] : '';
$tel = isset($_POST['tel']) ? $_POST['tel'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['pass']) ? $_POST['pass'] : '';

 
$cekEmail = mysqli_query($koneksi, "SELECT * FROM users where email='$email'");

if($cekEmail->num_rows == 0){
	$daftar = mysqli_query($koneksi, "INSERT INTO users VALUES ('$email', '$password', '$username', '$level', '$tel')");
	if($daftar){
		echo '<script language="javascript">alert("Anda berhasil Daftar!"); document.location="../donasiku.com/?module=login";</script>';
	} else {
		echo '<script language="javascript">alert("Anda gagal Daftar!"); document.location="../donasiku.com/?module=signin";</script>';
	}
}else{
	echo "Daftar gagal, email sudah terdaftar!";
}

?>
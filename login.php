<?php 
include 'koneksi.php';
 
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$query = mysqli_query($koneksi, "select * from users where email='$email' and password='$password'");

$cek = mysqli_num_rows($query);
$r = mysqli_fetch_assoc($query);

if($cek){
	session_start();

	$_SESSION['email'] = $r['email'];
	$_SESSION['password'] = $r['password'];
	$_SESSION['nama'] = $r['nama'];
	if($r['level'] == 'admin'){
			$_SESSION['admin']=$r['email'];
			echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="../donasiku.com/?module=admin";</script>';
			print($_SESSION['admin']);
		}else{
			$_SESSION['member']=$r['email'];
			echo '<script language="javascript">alert("Anda berhasil Login Member!"); document.location="../donasiku.com/?module=member";</script>';
		}
}else{
	echo "Login gagal";
}
?>
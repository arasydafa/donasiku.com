<?php
//session_start();

if(!isset($_SESSION['member'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../donasiku.com/";</script>';
}else{
?>

<h1>Halo, <span style="color:orange"><?php echo $_SESSION['nama'];?></span></h1>
<a href="../donasiku.com/?module=donate.php"></a>


<?php
}
?>
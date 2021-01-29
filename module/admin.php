<?php

if(!isset($_SESSION['admin'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../donasiku.com/";</script>';
}else{
?>

<h1>Halaman Admin <span style="color:orange"><?php echo $_SESSION['nama'];?></span></h1>


<?php
}
?>
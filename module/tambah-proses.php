<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
		$id= isset($_POST['id_donatur']) ? $_POST['id_donatur'] : '';
		$nama = isset($_POST['nama_donatur']) ? $_POST['nama_donatur'] : '';
		$email = isset($_POST['email_donatur']) ? $_POST['email_donatur'] : '';
		$norek = isset($_POST['norek_donatur']) ? $_POST['norek_donatur'] : '';
		$jml = isset($_POST['jml_donatur']) ? $_POST['jml_donatur'] : '';
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($koneksi, "INSERT INTO donatur VALUES(NULL,'$id' '$nama', '$email', '$norek', '$jml')") or die(mysqli_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="?module=donatur">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="?module=donatur">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>
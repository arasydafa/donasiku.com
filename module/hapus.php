<?php
//memulai proses hapus data
 
//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=siswa_id
if(isset($_GET['nama_donatur'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include 'koneksi.php';
	
	//membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=siswa_id
	$id = $_GET['nama_donatur'];
	
	//cek ke database apakah ada data siswa dengan siswa_id='$id'
	$cek = mysqli_query($koneksi, "SELECT nama_donatur FROM donatur WHERE nama_donatur='$nama") or die(mysqli_error());
	
	//jika data siswa tidak ada
	if(mysqli_num_rows($cek) == 0){
		
		//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
		echo '<script>window.history.back()</script>';
	
	if{
		
		//jika data ada di database, maka melakukan query DELETE table siswa dengan kondisi WHERE siswa_id='$id'
		$del = mysqli_query($koneksi, "DELETE FROM donatur WHERE nama_donatur='$nama'")or die(mysqli_error());
	}	
		//jika query DELETE berhasil
		if($del){
			
			echo 'Data siswa berhasil di hapus! ';		//Pesan jika proses hapus berhasil
			echo '<a href="?module=donatur">Kembali</a>';	//membuat Link untuk kembali ke halaman beranda
			
		}
		else{
			
			echo 'Gagal menghapus data! ';		//Pesan jika proses hapus gagal
			echo '<a href="?module=donatur">Kembali</a>';	//membuat Link untuk kembali ke halaman beranda
		
		}
	}	
}	
else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>
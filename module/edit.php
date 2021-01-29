<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="?module=donatur">Beranda</a> / <a href="?module=tambah">Tambah Data</a></p>
	
	<h3>Edit Data</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include 'koneksi.php';
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	 if (isset($_GET['id'])) {
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysqli_query($koneksi, "SELECT * FROM donatur WHERE id_donatur='$id'");
	 }
	//cek apakah data dari hasil query ada atau tidak
	if(mysqli_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysqli_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="?module=edit?id=" method="post">
		<input type="hidden" name="id" value="<?php echo $id['id_donatur']; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" value="<?php echo $data['email_donatur']; ?>" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama_donatur']; ?>" required></td>
			</tr>
			<tr>
				<td>Nomor Rekening</td>
				<td>:</td>
				<td><input type="text" name="norek" value="<?php echo $data['norek_donatur']; ?>" required></td>
			</tr>
			<tr>
				<td>Jumlah Donasi</td>
				<td>:</td>
				<td><input type="text" name="jml" value="<?php echo $data['jml_donatur']; ?>" required></td>
			</tr>
				
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>
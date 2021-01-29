<!DOCTYPE html>
<html>
<head>
	<title>Donatur</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="?module=donatur">Beranda</a> / <a href="?module=tambah">Tambah Data</a></p>
	
	<h3>Data Donatur</h3>
	
	<table cellpadding="6" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>id.</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Nomor Rekening</th>
			<th>Jumlah Donasi</th>
			<th>Edit</th>
		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		$id= isset($_POST['id_donatur']) ? $_POST['id_donatur'] : '';
		$nama = isset($_POST['nama_donatur']) ? $_POST['nama_donatur'] : '';
		$email = isset($_POST['email_donatur']) ? $_POST['email_donatur'] : '';
		$norek = isset($_POST['norek_donatur']) ? $_POST['norek_donatur'] : '';
		$jml = isset($_POST['jml_donatur']) ? $_POST['jml_donatur'] : '';
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysqli_query($koneksi, "SELECT * FROM donatur ORDER BY id_donatur ASC") or die();
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysqli_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$id = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysqli_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$id.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['nama_donatur'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['email_donatur'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['norek_donatur'].'</td>';	//menampilkan data jurusan dari database
					echo '<td>'.$data['jml_donatur'].'</td>';	//menampilkan data jurusan dari database
					echo '<td><a href="?module=edit?id='.$data['id_donatur'].'">Edit</a> / <a href="?module=hapus?id='.$data['id_donatur'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				
				$id++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
</body>
</html>
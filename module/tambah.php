<!DOCTYPE html>

<html>
<head>
	<title>Simple CRUD</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="?module=donatur">Beranda</a> / <a href="?module=tambah">Tambah Data</a></p>
	
	<h3>Tambah Data</h3>
	
	<form action="?module=tambah-proses" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email_donatur" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama_donatur" size="30" required></td>
			</tr>
			<tr>
				<td>Nomor Rekening</td>
				<td>:</td>
				<td><input type="text" name="norek_donatur" size="20" required></td>
			</tr>
			<tr>
				<td>Jumlah Donasi</td>
				<td>:</td>
				<td><input type="text" name="jml_donatur" required></td>
			</tr>
				</td>
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
  <!--donate-->
	<div id="dn"></div>
	<div id="dnt">
		<p id="donte">Donasi</p>
		<input type="number" placeholder="Nomor Rekening" class="inp" id="" required><br>
		<input type="date" placeholder="MM/DD/YYYY" class="inp" id="exp" required><br>
		<input type="number" placeholder="CVV" class="inp" id="cvv" required><br>
		<input type="number" placeholder="Jumlah Donasi (IDR)" class="inp" id="rp" required><br>
		<input type="button" value="Donasi" id="btn2" onclick="msg()">
	</div>
	
<?php

  include('koneksi.php');

  $id= isset($_POST['id_donatur']) ? $_POST['id_donatur'] : '';
	$nama = isset($_POST['nama_donatur']) ? $_POST['nama_donatur'] : '';
	$email = isset($_POST['email_donatur']) ? $_POST['email_donatur'] : '';
	$norek = isset($_POST['norek_donatur']) ? $_POST['norek_donatur'] : '';
	$jml = isset($_POST['jml_donatur']) ? $_POST['jml_donatur'] : '';

	$input = mysqli_query($koneksi, "INSERT INTO donatur VALUES(NULL,'$id' '$nama', '$email', '$norek', '$jml')") or die(mysqli_error());
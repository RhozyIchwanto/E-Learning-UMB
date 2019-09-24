<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit();
}

require 'function/function.php';

// cek apakah tombol sumbit udah di tekan apa belum
if (isset($_POST["submit"])) {
	// cek apakah data berhasil di tambahkan apa tidak
	if (inputmhs($_POST) >0) {
		echo "
		<script>
		alert('data berhasil di tambahkan!');
		document.location.href ='mahasiswa.php';
		</script>
		";
	} else {
		echo "		
		<script>
		alert('Data Gagal di tambahkan');
		</script>";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Input Data Mahasiswa</title>
</head>
<body>

	<h1>Input Data Mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nim">Nim : </label>
				<input type="text" name="nim" id="nim">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="alamat">Alamat : </label>
				<input type="text" name="alamat" id="alamat">
			</li>
			<li>
				<label for="age">Age : </label>
				<input type="text" name="age" id="age">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email">
			</li>
			<li>
				<label for="prodi">Prodi : </label>
				<input type="text" name="prodi" id="prodi">
			</li>
			<li>
				<button type="submit" name="submit">
					Input Data
				</button>
			</li>
		</ul>
	</form>

</body>
</html>
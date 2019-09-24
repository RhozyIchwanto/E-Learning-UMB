<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit();
}
require 'function/function.php';

// ambil id di url
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol sumbit udah di tekan apa belum
if (isset($_POST["submit"])) {

	// cek apakah data berhasil di update apa tidak
	if (updatemhs($_POST) > 0) {
		echo "
		<script>
			alert('data berhasil di update!');
			document.location.href ='mahasiswa.php';
		</script>
		";
	} else {
		echo "		
		<script>
			alert('Gagal di update');
			document.location.href ='mahasiswa.php';
		</script>";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Data Mahasiswa</title>
</head>
<body>

	<h1>Update Data Mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>>
		<ul>
			<li>
				<label for="nim">Nim : </label>
				<input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
			</li>
			<li>
				<label for="alamat">Alamat : </label>
				<input type="text" name="alamat" id="alamat" required value="<?= $mhs["alamat"]; ?>">
			</li>
			<li>
				<label for="age">Age : </label>
				<input type="text" name="age" id="age" required value="<?= $mhs["age"]; ?>">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
			</li>
			<li>
				<label for="prodi">Prodi : </label>
				<input type="text" name="prodi" id="prodi" required value="<?= $mhs["prodi"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">
					Update Data
				</button>
			</li>
		</ul>
	</form>

</body>
</html>
<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit();
}


require 'function/function.php';
$id = $_GET["id"];

if (deletemhs($id) > 0) {
	echo "
		<script>
			alert('data berhasil di hapus!');
			document.location.href ='mahasiswa.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data Gagal di dihapus!');
			document.location.href ='mahasiswa.php';
		</script>
	";
}
?>
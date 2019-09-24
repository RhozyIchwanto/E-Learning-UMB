<?php 
// koneksi databse
$conn = mysqli_connect("localhost", "root", "", "elearning");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function inputmhs($data){
	global $conn;

	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$age = htmlspecialchars($data["age"]);
	$email = htmlspecialchars($data["email"]);
	$prodi = htmlspecialchars($data["prodi"]);

	$query = "INSERT INTO mahasiswa
	VALUES
	('','$nim','$nama','$alamat','$age','$email','$prodi')
	";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function deletemhs($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function updatemhs($data){
	global $conn;

	$id = $data["id"];
	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$age = htmlspecialchars($data["age"]);
	$email = htmlspecialchars($data["email"]);
	$prodi = htmlspecialchars($data["prodi"]);

	$query = "UPDATE mahasiswa SET
	nim = '$nim',
	nama = '$nama',
	alamat = '$alamat',
	age = '$age',
	email = '$email',
	prodi = '$prodi'

	WHERE id = $id
	";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function register($data){
	global $conn;
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$email = stripcslashes($data["email"]);

	// cek username sudah ada apa belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "
		<script>
		alert('Username yang anda masukkan telah tersedia!');
		</script>";
		return false;
	}

	// cek konfirmasi passwprd
	if ($password != $password2) {
		echo "
		<script>
		alert('Konfirmasi Password tidak Sesuai!');
		</script>";
		return false;
	}

	// enkripsi password
	$passwordenkrip = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan user
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username','$email','$passwordenkrip')");

	return mysqli_affected_rows($conn);
}
?>
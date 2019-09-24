<?php 
session_start();
require 'function/function.php';

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil usermane berdasarkan id
	$result = mysqli_query($conn, "SELECT * FROM user WHERE id = $id ");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if ( $key === hash('sha256', $row['username'])) {
		$_SESSION['login']=true;
	}

}

if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit();
}


if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if (mysqli_num_rows($result) === 1) {
		
		// cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"]) ){
			// set session
			$_SESSION["login"] = true;

			// cek remember me
			if (isset($_POST['remember'])) {
				// buat cookie


				setcookie('id', $row['id'], time()+3600);
				setcookie('key', hash('sha256', $row['username']), time()+180);
			}
			header("Location: index.php");
			exit();
		}
	}

	$error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="username" name="username" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="username">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
               <input type="checkbox" name="remember" id="remember">
                Remember Password
              </label>
            </div>
          </div>
          <button type="submit" name="login" class="btn btn-primary btn-block">LOGIN</button>
        </form>
        <div class="text-center">
          <a href="register.php">Register</a>
          <!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

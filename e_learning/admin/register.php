<?php 
require 'function/function.php';


if (isset($_POST["register"])) {
	if (register($_POST) > 0 ) {
		echo "
		<script>
		alert('User baru berhasil di tambahkan!');
		document.location.href ='login.php';
		</script>
		";
	} else {
		mysqli_error($conn);
	}
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

	<title>Admin - Register</title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template-->
	<link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

	<div class="container">
		<div class="card card-register mx-auto mt-5">
			<div class="card-header">Register an Account</div>
			<div class="card-body">
				<form action="" method="post">
					<div class="form-group">
						<div class="form-label-group">
							<input type="text" id="username" name="username" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
							<label for="username">Username</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-label-group">
							<input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="required">
							<label for="email">Email address</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
									<label for="password">Password</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="password" id="password2" name="password2" class="form-control" placeholder="Confirm password" required="required">
									<label for="password2">Confirm password</label>
								</div>
							</div>
						</div>
					</div>
					<button type="submit" name="register" class="btn btn-primary btn-block">
						Register
					</button>
				</form>
				<div class="text-center">
					<a class="d-block small mt-3" href="login.html">Login Page</a>
					<a class="d-block small" href="forgot-password.html">Forgot Password?</a>
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

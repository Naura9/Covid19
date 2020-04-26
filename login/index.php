<?php  
	session_start();
	if(isset($_SESSION['id_petugas']))
	{
		header("Location: http://localhost/corona/index.php");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Form</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a81368914c.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<img class="wave" src="img/wave.png">
		<div class="container">
			<div class="img">
				<img src="img/petugas.svg">
			</div>
			<div class="login-content">
				<form action="proses-login.php" method="post">
					<img src="img/avatar.svg">
					<h2 class="title">Welcome</h2>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-user"></i>
						</div>
						<div class="div">
							<h5>Username</h5>
							<input type="text" name="username" class="input">
						</div>
					</div>

					<div class="input-div pass">
						<div class="i"> 
							<i class="fas fa-lock"></i>
						</div>
						<div class="div">
							<h5>Password</h5>
							<input type="password" name="password" class="input">
						</div>
					</div>

					<a href="#">Forgot Password?</a>
					<button type="submit" class="btn btn-success" name="simpan">Login</button>
				</form>
			</div>
		</div>
    		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>
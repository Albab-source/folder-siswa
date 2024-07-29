<?php
	include "koneksi.php";

	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$sandi = $_POST['password'];

		$selek = mysqli_query($koneksi,"SELECT * FROM anggota WHERE email_anggota = '$email' AND password_anggota = '$sandi'");
		if (mysqli_num_rows($selek)!= 0) {
			$row = mysqli_fetch_assoc($selek);

			session_start();
			$_SESSION['id'] = $row['id'];
			header("location:index.php");
		}else{
			echo "<script>alert ('Your email or your password is incorrec!')</script>";
			header("refresh:2;login.php");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="picture/hand3.jpg">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body style="background: url(picture/fantasy.jpg);background-size: cover;">
  <nav id="card">
	<form method="post">
		<h1>Login</h1>
		<label>E-mail</label><br><input type="email" name="email" class="input">
		<label>Password</label><input type="password" name="password" class="input">
		<input type="submit" name="login" value="login" class="input">
		<a href="forget.php" style="margin-right: 50px;" name="lali">Forget password?</a>
		<a href="daftar.php">Sign-up</a>	
	</form>
  </nav>
</body>
</html>
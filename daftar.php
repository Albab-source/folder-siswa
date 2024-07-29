<?php
include "koneksi.php";
 if (isset($_POST['buat']))
  { 
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $sandi = $_POST['password'];
  $valid = $nama AND $email AND $sandi;

  if (empty($valid)) {
  	echo "<script>alert ('Pastikan untuk mengisi semua kolom!')</script>";
  }else{
	$sql_insert = mysqli_query($koneksi,"insert into anggota  values(
	'',
	'".$_POST['nama']."',
    '".$_POST['email']."',
	'".$_POST['password']."')");
  
  	if (!$sql_insert) { echo "<script>alert ('Data gagal di simpan')</script>";
  		  header("refresh:0;daftar.php");
  	}else{
  		  echo "<script>alert ('Done!')</script>";
  		  header("refresh:0;daftar.php");
  	}
	}
 }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="picture/hand3.jpg">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="CSS/daftar.css">
</head>
<body style="background-image:url('picture/hd.jpg');background-size: cover;">
	<nav id="card">
		<p>HELLO.DOT</p>
		<form method="post" class="form">
			<legend>Create account</legend>
			<label>Name</label><br>
			<input type="text" name="nama" class="input" placeholder="Your name"><br>
			<label>Email</label><br>
			<input type="email" name="email" class="input" placeholder="Enter email"><br>
			<label>Password</label><br>
			<input type="password" name="password" class="input" placeholder="Enter password">
			<a href="login.php"><input type="button" value="Kembali"></a>
			<input type="submit" name="buat" value="Creat">
		</form>
	</nav>
</body>
</html>
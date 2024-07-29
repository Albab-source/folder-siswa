<?php
$server="localhost";
$database="folder_siswa";
$user="root";
$password="";

$koneksi=mysqli_connect($server,$user,$password,$database);
if (!$koneksi){
	echo "<script>alert ('Koneksi Gagal') </script>";
}
?>
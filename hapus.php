<?php
include "koneksi.php";

$id = $_GET['id'];
$sql = mysqli_query($koneksi,"DELETE FROM dbsiswa WHERE siswaID='$id'");
if (!$sql) { echo "<script>alert ('Data gagal di hapus')</script>";
  		  header("refresh:0;daftar.php");
  	}else{
  		  echo "<script>alert ('Done!')</script>";
  		  header("refresh:0;index.php?page=data_santri"); 
  	}
?>
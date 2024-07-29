<?php
$servername = "localhost";
$database = "simpus";
$username = "root";
$password = "";

$koneksi = mysqli_connect($servername, $username, $password, $database);


//cek kondisi apakah koneksi berhasil atau tidak
if (!$koneksi) {
    echo "<script> alert('koneksi gagal') </script>";
}

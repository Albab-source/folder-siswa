<?php
  include "koneksi.php";

  session_start();

  if ($_SESSION['id'] ==null) {
    header("location:login.php");
    exit();
  }
?>
<html>
 <head>
  <link rel="icon" href="picture/hand3.jpg">
  <title>Hello.dot</title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
 </head>
 <body>
  <nav class="menu">
    <label style="font-family: centaur;padding-left: 10px;font-size: 40px;">HELLO.DOT</label>
    <ul>
      <li><a href="?page=beranda">Beranda</a></li>
      <li><a href="#">Student</a>
        <ul>
            <li><a href="?page=santri_baru">Santri Baru</a></li>
            <li><a href="?page=data_santri">Data Santri</a></li>
            <li><a href="?page=profile">Profile Santri</a></li>
        </ul>
      </li>
      <li><a href="?page=ppdb">Insert</a></li>
      <li><a href="#">Contact Us</a>
        <ul>
          <li><a href="?page=logout">Logout</a></li>
        </ul>
      </li>
      <li>&emsp;&emsp;</li>
    </ul>
  </nav>
  <div>
  <?php include "open.php"; ?>
  </div>
 </body>
</html>
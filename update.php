<!DOCTYPE html>
<?php
include "koneksi.php";
//$id = $_GET['id'];
//$try = substr($id, 2);
//echo($id);
	if (isset($_POST['back'])) {
	$id = $_GET['id'];
  // Validasi input
  if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<script>alert('Parameter id tidak ditemukan.');</script>";
    exit;
  }

  // Manipulasi nilai $try
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
  $try = $id; // Gunakan seluruh nilai $id

  // Refresh halaman
  $prevTry = $try;
  header("refresh:0, index.php?page=$try");
}
if (isset($_POST['ubah'])) {
	
	$sql = "UPDATE `dbsiswa` SET 
		`nama_siswa`='".$_POST['name']."',
		`nik`='".$_POST['nik']."',
		`jenis_kelamin`='".$_POST['kelamin']."',
		`alamat`='".$_POST['alamat']."',
		`tempat_lahir`='".$_POST['tempat']."',
		`tgl_lahir`='".$_POST['tgl']."',
		`nama_ayah`='".$_POST['ayah']."',
		`job_ayah`='".$_POST['akerja']."',
		`nama_ibu`='".$_POST['ibu']."',
		`job_ibu`='".$_POST['ikerja']."',
		`telepon`='".$_POST['hp']."'
		 WHERE siswaID = '".$_POST['iid']."'";

	$sql_updt = mysqli_query($koneksi,$sql);
	if (!$sql_updt) {
	echo "<script> alert ('Data gagal disimpan')</script>"; 
	}else{
	$id = $_POST['iid'];
	echo "<script> alert ('Data berhasil disimpan')</script>";
	header("refresh:0, update.php?id=$id");	
	}	
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="picture/hand3.jpg">
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<style type="text/css">
		
		.tabel {margin-left: 8%;
				margin-top: 1%;
				margin-right: 10px;
				}
		.tabel td {font-weight: 700;
				font-family: sans-serif;
				padding: 10px; }
		input { padding: 5px }
	</style>
</head>
<body style="background: whitesmoke;">
  <nav class="menu">
    <label style="font-family: centaur;padding-left: 10px;font-size: 40px;">HELLO.DOT</label>
    <ul>
      <li><a href="index.php?page=beranda">Beranda</a></li>
      <li><a href="#">Student</a>
        <ul>
            <li><a href="index.php?page=santri_baru">Santri Baru</a></li>
            <li><a href="index.php?page=data_santri">Data Santri</a></li>
        </ul>
      </li>
      <li><a href="index.php?page=ppdb">Insert</a></li>
      <li><a href="#">Contact Us</a>
        <ul>
          <li><a href="index.php?page=logout">Logout</a></li>
        </ul>
      </li>
      <li>&emsp;&emsp;</li>
    </ul>
  </nav>
	<?php 
	$id = $_GET['id'];
	$car = "select * from dbsiswa where siswaID = '$id'";
	$srch = mysqli_query($koneksi,$car);
	$data = mysqli_fetch_array($srch);
	?>
<table  class="tabel" >
 <form name="pendaftaran" method="post" action="update.php">
	<tr>
		<td>Nama Lengkap</td>
		<td>
			<input type="hidden" name="iid" value="<?php echo($id)?>">
			<input type="text" name="name" value="<?php echo($data['nama_siswa'])?>" style="width: 325px;"></td>
		<td rowspan="8" style="padding-left: 105px;"><input type="file" value="upload gambar"/></td>
	</tr>
	<tr>
		<td>NIK (Nomor Induk Keluarga)</td>
		<td><input type="text" name="nik" value="<?php echo($data['nik'])?>" style="width: 325px;"></td>
	</tr>
	<tr><td>Jenis Kelamin</td>
		<td><select name="kelamin" style="width: 325px;padding: 5px;">
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option></select></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo($data['alamat'])?>" style="width: 325px;"></td>
	</tr>
	<tr>
		<td>Tempat dan Tanggal lahir</td>
		<td><input type="text" name="tempat" value="<?php echo($data['tempat_lahir'])?>" style="width: 180px;">&emsp;
		<input type="date" name="tgl" value="<?php echo($data['tgl_lahir'])?>" ></td>
	</tr>
	<tr>
		<td>Ayah<br><br>Pekerjaan Ayah</td>
		<td><input type="text" name="ayah" value="<?php echo($data['nama_ayah'])?>" style="width: 325px;"><br>
		<br><input type="text" name="akerja" value="<?php echo($data['job_ayah'])?>" style="width: 325px;"></td>
	</tr>
	<tr>
		<td>Ibu<br><br>Pekerjaan Ibu</td>
		<td><input type="text" name="ibu" value="<?php echo($data['nama_ibu'])?>" style="width: 325px;"><br>
		<br><input type="text" name="ikerja" value="<?php echo($data['job_ibu'])?>" style="width: 325px;"></td>
	</tr>
	<tr>
		<td>Nomor Telephone Orang Tua</td>
		<td><input type="tel" pattern="[0][8][0-9]{10}" name="hp" value="<?php echo($data['telepon'])?>" style="width: 325px;"></td>
	</tr>
	<tr><td colspan="2"><br><input type="submit" name="ubah"style="width:49%;" class="btn">
		<input type="submit" value="Batal" name="back" class="btn" style="width:49%;"/></td></tr>	
 </form>
</table>
</body>
</html>
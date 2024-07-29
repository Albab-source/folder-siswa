<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">	
		.tabel-tpl {margin-left: auto;
				margin-right: auto;
				margin-top: 2%;
				}
		.tabel-tpl td {font-weight: 700;
				font-family: sans-serif;
				padding: 10px; }
		.tabel-tpl th {text-align: left;
				padding: 10px;
				background: gray;
				color:wheat;
				width:150px }
		.bg-white {background: whitesmoke;}
	</style>
</head>
<body class="bg-white">
<table border="0" class="tabel-tpl">
	<thead>
	<tr><td colspan="4"><form method="post">
		<input type="text" name="cari" style="width: 83%;">
		<input type="submit" name="srch" value="Cari"></form></td>
	</tr>
	<tr>
		<th style="text-align: center;width: auto;">No.</th>
		<th>NIS</th>
		<th>Nama Mahasiswa</th>
		<th>NIK</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>Tanggal Lahir</th>
		<th></th>
	</tr>
	</thead>
	<?php
	if (isset($_POST['srch'])) {
		$carii = $_POST['cari'];
		$cari='%'.$carii.'%';
		$tahun=date('Y');
		$sql="select * from dbsiswa where 
		nis_siswa like '$cari' and tahun='$tahun' or 
		nama_siswa like '$cari' and tahun='$tahun' or 
		nik like '$cari' and tahun='$tahun' or 
		jenis_kelamin like '$cari' and tahun='$tahun' or 
		alamat like '$cari' and tahun='$tahun' or 
		tgl_lahir like '$cari' and tahun='$tahun'";
	}else{
		$tahun=date('Y');
		$sql="SELECT * FROM dbsiswa WHERE tahun='$tahun'";
	}
		$no=1;
		$data=mysqli_query($koneksi,$sql);
		while ($dt=mysqli_fetch_array($data)){$tahun=date('Y');
	?>
	<tr>
		<td style="text-align: center;"><?=$no ?></td>
		<td><?=$dt['nis_siswa'] ?></td>
		<td><?=$dt['nama_siswa'] ?></td>
		<td><?=$dt['nik'] ?></td>
		<td><?=$dt['jenis_kelamin'] ?></td>
		<td><?=$dt['alamat'] ?></td>
		<td><?=$dt['tgl_lahir'] ?></td>
		<td style="text-align: center;">
			<?php 
			$conn = $dt['nama_siswa'];
			$co = "santri_baru";
			$con = "Apakah akan menghapus data $conn?"; ?>
			<a href="hapus2.php?id=<?php echo $dt['siswaID'];?>" onclick="return confirm('<?=$con ?>')" > <input type="submit" name="hapus" value="Hapus"></a>
			<a href="update.php?id=<?php echo $dt['siswaID'];echo $co;?>"><input type="submit" name="edit" value="Update"></a></td>
	</tr>

		<?php 
		$no++;
		} ?>

</table>
</body>
</html>
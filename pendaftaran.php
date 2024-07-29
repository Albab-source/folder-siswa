<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PPDB</title>
	<style type="text/css">
		
		.tabel {margin-left: 8%;
				margin-top: 2%;
				margin-right: 10px;
				}
		.tabel td {font-weight: 700;
				font-family: sans-serif;
				padding: 10px; }
		input { padding: 5px }
	</style>
</head>
<body style="background: whitesmoke;">
<table  class="tabel" >
 <form name="pendaftaran" method="post" action="input.php">
	<tr>
		<td>Nama Lengkap</td>
		<td><input type="text" name="name" style="width: 325px;"></td>
		<td rowspan="8" style="padding-left: 105px;"><img src="picture/hello2.png" style="width:500px;height:400px;" align="right"></td>
	</tr>
	<tr>
		<td>NIK (Nomor Induk Keluarga)</td>
		<td><input type="text" name="nik" style="width: 325px;"></td>
	</tr>
	<tr><td>Jenis Kelamin</td>
		<td><select name="kelamin" style="width: 325px;padding: 5px;">
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option></select></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" style="width: 325px;"></td>
	</tr>
	<tr>
		<td>Tempat dan Tanggal lahir</td>
		<td><input type="text" name="tempat" style="width: 180px;">&emsp;
		<input type="date" name="tgl"></td>
	</tr>
	<tr>
		<td>Ayah<br><br>Pekerjaan Ayah</td>
		<td><input type="text" name="ayah" style="width: 325px;"><br>
		<br><input type="text" name="akerja" style="width: 325px;"></td>
	</tr>
	<tr>
		<td>Ibu<br><br>Pekerjaan Ibu</td>
		<td><input type="text" name="ibu" style="width: 325px;"><br>
		<br><input type="text" name="ikerja" style="width: 325px;"></td>
	</tr>
	<tr>
		<td>Nomor Telephone Orang Tua</td>
		<td><input type="tel" pattern="[0][8][0-9]{10}" name="hp" placeholder="08**********" style="width: 325px;"></td>
	</tr>
	<tr><td colspan="2"><br><input type="submit" name="submit"style="width:100%;" class="btn"></td></tr>	
 </form>

</table>

</body>
</html>
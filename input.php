<?php
include "koneksi.php";

  if (isset($_POST['submit'])) {
    $name     = $_POST['name'] ;
    $nik      = $_POST['nik'] ;
    $kelamin  = $_POST['kelamin'] ;
    $alamat   = $_POST['alamat'] ;
    $tmpt     = $_POST['tempat'] ;
    $tgl      = $_POST['tgl'] ;
    $ayah     = $_POST['ayah'] ;
    $akr      = $_POST['akerja'] ;
    $ibu      = $_POST['ibu'] ;
    $ikr      = $_POST['ikerja'] ;
    $hp       = $_POST['hp'] ;
      $dt = $name AND $nik AND $kelamin AND $alamat AND $tmpt AND $tgl AND $ayah AND $akr AND $ibu AND $ikr AND $hp;
  }
  if (!empty($dt))
  { 
    $sql = mysqli_query($koneksi,"select * from dbsiswa");
    $tpl = mysqli_fetch_array($sql);
    $nis = $tpl['nis_siswa'];

    if ($nis==0) {
      $tahun = date('Y');
      $thn = date('y');
      $t = sprintf("1425%03s001",$thn);
    	$sql_insert = mysqli_query($koneksi,"insert into dbsiswa  values(
    	'',
      '".$t."',
    	'".$name."',
      '".$nik."',
    	'".$kelamin."',
      '".$alamat."',
      '".$tmpt."',
      '".$tgl."',
      '".$ayah."',
      '".$akr."',
      '".$ibu."',
      '".$ikr."',
      '".$hp."',
      '".$tahun."')");
    }else{
    $selek = "select * from dbsiswa order by nis_siswa desc limit 1";
    $sqli = mysqli_query($koneksi,$selek);
    $sql = mysqli_fetch_array($sqli);
      $thn = date('y');
      $tahun = date('Y');

    $ex = strval((int)$sql['nis_siswa']+1 );
    $has = substr($ex, 7);
    $sin = sprintf("1425%03s%03s",$thn,$has);

      $sql_insert = mysqli_query($koneksi,"insert into dbsiswa  values(
      '',
      '".$sin."',
      '".$name."',
      '".$nik."',
      '".$kelamin."',
      '".$alamat."',
      '".$tmpt."',
      '".$tgl."',
      '".$ayah."',
      '".$akr."',
      '".$ibu."',
      '".$ikr."',
      '".$hp."',
      '".$tahun."')"); 

      if (!$sql_insert) {
      echo "<script> alert ('Data gagal disimpan')";
      header("refresh:0, index.php?page=ppdb");
    }else{
      echo "<script> alert ('Data berhasil disimpan')";
      header("refresh:0, index.php?page=ppdb");
    }
    }
}
    
?>
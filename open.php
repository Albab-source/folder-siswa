<?php

	if (isset($_GET['page'])) {
		
		switch ($_GET['page']) {
			case 'beranda':
				require_once "beranda.php";
				break;
			case 'login':
				require_once "login.html";
				break;
			case 'ppdb':
				require "pendaftaran.php";
				break;
			case 'data_santri':
				require "santri.php";
				break;
			case 'santri_baru':
				require "santri_baru.php";
				break;
			case 'logout':
				require "logout.php";
				break;
			case 'edit':
				require "update.php";
				break;
			case 'profile':
				require "cetak.php";
				break;
}
}else{
	require_once "beranda.php";}
?>
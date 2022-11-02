<?php 
	include 'lib/koneksi.php';

	$sql = 'SELECT * FROM penjualan';

	$penjualan = $konek->query($sql);

	include 'view/v_matkul.php';
 ?>
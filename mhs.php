<?php 
	include 'lib/koneksi.php';

	$sql = 'SELECT * FROM barang';

	$barang = $konek->query($sql);

	include 'view/v_mhs.php';
 ?>
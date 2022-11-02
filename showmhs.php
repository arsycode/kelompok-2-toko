<?php 
	include 'lib/koneksi.php';
    $id_barang = $_GET['id_barang'];
	$sql = "SELECT * FROM barang WHERE id_barang ='$id_barang'";

	$barang = $konek->query($sql);
    $data = mysqli_fetch_array($barang);
	header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    exit();
 ?>
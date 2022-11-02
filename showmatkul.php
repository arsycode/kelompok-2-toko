<?php 
	include 'lib/koneksi.php';
    $id_transaksi = $_GET['id_transaksi'];
	$sql = "SELECT * FROM penjualan WHERE id_transaksi ='$id_transaksi'";

	$penjualan = $konek->query($sql);
    $data = mysqli_fetch_array($penjualan);
	header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    exit();
 ?>
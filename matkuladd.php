<?php
include "lib/koneksi.php";	
$id_transaksi = $_POST["id_transaksi"];
$id_pelanggan = $_POST["id_pelanggan"];
$tgl_transaksi = $_POST["tgl_transaksi"];
$total_transaksi = $_POST["total_transaksi"];
mysqli_query($konek,"insert into penjualan values ('$id_transaksi','$id_pelanggan','$tgl_transaksi','$total_transaksi')");
header("location:matkul.php");
?>
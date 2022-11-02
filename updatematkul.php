<?php
include "lib/koneksi.php";
$id_transaksi = $_GET["id_transaksi"];
$id_pelanggan = $_POST["id_pelanggan"];
$tgl_transaksi = $_POST["tgl_transaksi"];
$total_transaksi = $_POST["total_transaksi"];
mysqli_query($konek,"UPDATE penjualan SET 
                    id_pelanggan = '$id_pelanggan',
                    tgl_transaksi = '$tgl_transaksi',
                    total_transaksi = '$total_transaksi'
                    WHERE id_transaksi = '$id_transaksi'");
header("location:matkul.php");
?>
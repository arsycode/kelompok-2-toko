<?php
include "lib/koneksi.php";
$id_transaksi = $_GET["id_transaksi"];
$sql = "DELETE FROM penjualan WHERE id_transaksi = ".$id_transaksi;
// mysqli_query($konek,"DELETE FROM dosen WHERE kd_dosen = '$kd_dosen'");
$konek->query($sql);
header("location:matkul.php");
?>
<?php
include "lib/koneksi.php";
$id_barang = $_GET["id_barang"];
$sql = "DELETE FROM barang WHERE id_barang = ".$id_barang;
// mysqli_query($konek,"DELETE FROM dosen WHERE kd_dosen = '$kd_dosen'");
$konek->query($sql);
header("location:mhs.php");
?>
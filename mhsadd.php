<?php
include "lib/koneksi.php";	
$id_barang = $_POST["id_barang"];
$id_kategori = $_POST["id_kategori"];
$nama_barang = $_POST["nama_barang"];
$harga = $_POST["harga"];
$stok = $_POST["stok"];

mysqli_query($konek,"insert into barang values ('$id_barang','$id_kategori','$nama_barang')");
header("location:mhs.php");
?>
<?php
include "lib/koneksi.php";
$id_barang = $_GET["id_barang"];
$id_kategori = $_POST["id_kategori"];
$nama_barang = $_POST["nama_barang"];
$harga = $_GET["harga"];
$stok = $_GET["stok"];
mysqli_query($konek,"UPDATE barang SET 
                    id_kategori = '$id_kategori',
                    nama_barang = '$nama_barang',
                    harga = '$harga',
                    stok = '$stok'
                    WHERE id_barang = '$id_barang'");
header("location:mhs.php");
?>
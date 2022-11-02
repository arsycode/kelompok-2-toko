<?php
$konek = mysqli_connect ("localhost","root","","db_toko");
if (mysqli_connect_errno()){
echo "koneksi gagal :"  .mysqli_connect_error();
}
?>
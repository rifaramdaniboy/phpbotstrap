<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "ramdani";
$koneksi = mysqli_connect($host,$user,$pass,$database);
if($koneksi){
  /*  echo "KONEKSI BERHASIL";*/
}else{
    echo "KONEKSI GAGAL";
}
?>
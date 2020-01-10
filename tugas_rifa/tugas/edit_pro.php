<?php
include ('../koneksi.php');
$id      = $_POST['id'];
$a       = $_POST['nama_barang'];
 $b      = $_POST['jenis_barang'];
 $c      = $_POST['harga_barang'];
 $d      = $_POST['jumlah_barang'];
 $e      = $c*$d;
 $total_pem =$e;
$edit    = "UPDATE ramdani123 SET nama_barang='$a', jenis_barang='$b', harga_barang='$c', jumlah_barang='$d' , total_harga='$e' WHERE id='$id'";
mysqli_query($koneksi, $edit);
header("location:index.php")
?>
<?php
 include ('..\koneksi.php');
 $a       = $_POST['nama_barang'];
 $b       = $_POST['jenis_barang'];
 $c       = $_POST['harga_barang'];
 $d       = $_POST['jumlah_barang'];
 $e       = $c*$d;
 $tambah  = "INSERT INTO ramdani123 SET nama_barang='$a', jenis_barang='$b', harga_barang='$c', jumlah_barang='$d', total_harga='$e'";
 mysqli_query($koneksi, $tambah);
 header("location:index.php");
?>
<?php
include ('..\koneksi.php');
$id       = $_GET['id'];
$delete   ="DELETE FROM ramdani123 WHERE id='$id'";
mysqli_query($koneksi, $delete);
header("location:index.php");
?>
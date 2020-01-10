<?php
include '../database.php';
$tanggal = new Tanggal();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id']; 
	$tanggal_meminjam = $_POST['tanggal_meminjam'];
	$tanggal_kembali= $_POST['tanggal_kembali'];
}

    if ($aksi == "tambah") {
        $tanggal->create($tanggal_meminjam, $tanggal_kembali);      
        header("location:tanggal.php");
    }elseif ($aksi == "update") {
        $tanggal->update($id, $tanggal_meminjam, $tanggal_kembali);
        header("location:tanggal.php");
    }elseif ($aksi == "delete") {
        $tanggal->delete($_GET['id']);
        header("location:tanggal.php");
    }
?>
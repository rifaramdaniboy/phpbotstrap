<?php
include '../database.php';
$informasi = new Informasi();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
	$keadaan_barang = $_POST['keadaan_barang'];
	$kekurangan_barang= $_POST['kekurangan_barang'];
	$kelebihan_barang = $_POST['kelebihan_barang'];
    $kritik = $_POST['kritik'];
}

    if ($aksi == "tambah") {
        $informasi->create($keadaan_barang, $kekurangan_barang, $kelebihan_barang, $kritik);      
        header("location:informasi.php");
    }elseif ($aksi == "update") {
        $informasi->update($id,$keadaan_barang, $kekurangan_barang, $kelebihan_barang, $kritik);
        header("location:informasi.php");
    }elseif ($aksi == "delete") {
        $informasi->delete($_GET['id']);
        header("location:informasi.php");
    }
?>
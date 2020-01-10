<?php
include '../database.php';
$petugas = new Petugas();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
	$nama_petugas = $_POST['nama_petugas'];
	$no_hp= $_POST['no_hp'];
	$alamat_petugas = $_POST['alamat_petugas'];
}

    if ($aksi == "tambah") {
        $petugas->create($nama_petugas, $no_hp, $alamat_petugas);      
        header("location:petugas.php");
    }elseif ($aksi == "update") {
        $petugas->update($id, $nama_petugas, $no_hp, $alamat_petugas);
        header("location:petugas.php");
    }elseif ($aksi == "delete") {
        $petugas->delete($_GET['id']);
        header("location:petugas.php");
    }
?>
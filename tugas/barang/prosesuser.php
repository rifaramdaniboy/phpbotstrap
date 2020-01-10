<?php
include '../database.php';
$user = new User();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
	$no_ktp = $_POST['no_ktp'];
	$nama_peminjam = $_POST['nama_peminjam'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
}

    if ($aksi == "tambah") {
        $user->create($no_ktp, $nama_peminjam, $jenis_kelamin, $alamat);      
        header("location:user.php");
    }elseif ($aksi == "update") {
        $user->update($id, $no_ktp, $nama_peminjam, $jenis_kelamin, $alamat);
        header("location:user.php");
    }elseif ($aksi == "delete") {
        $user->delete($_GET['id']);
        header("location:user.php");
    }
?>
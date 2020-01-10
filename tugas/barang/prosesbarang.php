<?php
include '../database.php';
$barang = new Barang();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
	$nama_barang = $_POST['nama_barang'];
	$jenis_barang = $_POST['jenis_barang'];
	$jumlah_barang = $_POST['jumlah_barang'];
    $harga_sewa = $_POST['harga_sewa'];
}

    if ($aksi == "tambah") {
        $barang->create($nama_barang, $jenis_barang, $jumlah_barang,$harga_sewa);      
         header("location:barang.php");
    }elseif ($aksi == "update") {
        $barang->update($id,$nama_barang, $jenis_barang, $jumlah_barang,$harga_sewa);
        header("location:barang.php");
    }elseif ($aksi == "delete") {
        $barang->delete($_GET['id']);
        header("location:barang.php");
    }
?>
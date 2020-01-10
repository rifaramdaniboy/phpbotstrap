<?php
class Database
{
    public $host = "localhost", $user = "root", $pass, $db = "peminjaman";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
            /*echo "Berhasil";*/
        } else {
            echo "Koneksi Database Gagal";
        }
    }
}
// Data tabel siswa
include 'datapeminjam.php';
include 'databarang.php';
include 'datapetugas.php';
include 'datakembali.php';
include 'informasibarang.php';
// Data tabel DB
$db = new Database();

?>
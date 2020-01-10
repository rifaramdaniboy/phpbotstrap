<?php  
class Informasi extends Database{
	public function index()
    {
        $informasi = mysqli_query($this->koneksi, "select * from informasi_barang");
        return $informasi;
    }	

    // Menambah Data
    public function create($keadaan_barang, $kekurangan_barang, $kelebihan_barang, $kritik)
    {
        mysqli_query(
            $this->koneksi,
            "insert into informasi_barang values(null, '$keadaan_barang', '$kekurangan_barang', '$kelebihan_barang', '$kritik')"
        );
    }

    public function show($id)
    {
        $informasi = mysqli_query($this->koneksi, "select * from informasi_barang where id='$id'");
        return $informasi;
    }

    public function edit($id)
    {
        $informasi = mysqli_query(
            $this->koneksi,
            "select * from informasi_barang where id='$id'"
        );
        return $informasi;
    }

    public function update($keadaan_barang, $kekurangan_barang, $kelebihan_barang, $kritik)
    {
        mysqli_query(
            $this->koneksi,
            "update informasi_barang set keadaan_barang = '$keadaan_barang',
             kekurangan_barang = '$kekurangan_barang', kelebihan_barang = '$kelebihan_barang',
             kritik = '$kritik' where id = '$id'"
        );
    }

    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from informasi_barang where id='$id'");
    }
}
?>
<?php  
class Barang extends Database{
	public function index()
    {
        $barang = mysqli_query($this->koneksi, "select * from data_barang");
        return $barang;
    }	

    // Menambah Data
    public function create($nama_barang,$jenis_barang,$jumlah_barang,$harga_sewa)
    {
        mysqli_query(
            $this->koneksi,
            "insert into data_barang values(null, '$nama_barang', '$jenis_barang', '$jumlah_barang',
            '$harga_sewa')"
        );
    }

    public function show($id)
    {
        $barang = mysqli_query($this->koneksi, "select * from data_barang where id='$id'");
        return $barang;
    }

    public function edit($id)
    {
        $barang = mysqli_query(
            $this->koneksi,
            "select * from data_barang where id='$id'"
        );
        return $barang;
    }

    public function update($id, $nama_barang,$jenis_barang,$jumlah_barang,$harga_sewa)
    {
        mysqli_query(
            $this->koneksi,
            "update data_barang set nama_barang = '$nama_barang', jenis_barang = '$jenis_barang',
             jumlah_barang = '$jumlah_barang', harga_sewa = '$harga_sewa' where id = '$id'"
        );
    }

    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from data_barang where id='$id'");
    }
}
?>
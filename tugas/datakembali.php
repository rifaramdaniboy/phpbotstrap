<?php  
class Tanggal extends Database{
	public function index()
    {
        $tanggal = mysqli_query($this->koneksi, "select * from data_kembali");
        return $tanggal;
    }	

    // Menambah Data
    public function create($tanggal_meminjam, $tanggal_kembali)
    {
        mysqli_query(
            $this->koneksi,
            "insert into data_kembali values(null, '$tanggal_meminjam', '$tanggal_kembali')"
        );
    }

    public function show($id)
    {
        $tanggal = mysqli_query($this->koneksi, "select * from data_kembali where id='$id'");
        return $tanggal;
    }

    public function edit($id)
    {
        $petugas = mysqli_query(
            $this->koneksi,
            "select * from data_kembali where id='$id'"
        );
        return $petugas;
    }

    public function update($id, $tanggal_meminjam, $tanggal_kembali)
    {
        mysqli_query(
            $this->koneksi,
            "update data_kembali set tanggal_meminjam = '$tanggal_meminjam',
             tanggal_kembali = '$tanggal_kembali' where id = '$id'"
        );
    }

    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from data_kembali where id='$id'");
    }
}
?>
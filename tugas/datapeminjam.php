<?php  
class User extends Database{
	public function index()
    {
        $user = mysqli_query($this->koneksi, "select * from data_peminjam");
        return $user;
    }	

    // Menambah Data
    public function create($no_ktp, $nama_peminjam, $jenis_kelamin, $alamat)
    {
        mysqli_query(
            $this->koneksi,
            "insert into data_peminjam values(null, '$no_ktp', '$nama_peminjam', '$jenis_kelamin', '$alamat')"
        );
    }

    public function show($id)
    {
        $user = mysqli_query($this->koneksi, "select * from data_peminjam where id='$id'");
        return $user;
    }

    public function edit($id)
    {
        $user = mysqli_query(
            $this->koneksi,
            "select * from data_peminjam where id='$id'"
        );
        return $user;
    }

    public function update($id, $no_ktp, $nama_peminjam, $jenis_kelamin, $alamat)
    {
        mysqli_query(
            $this->koneksi,
            "update data_peminjam set no_ktp = '$no_ktp', nama_peminjam = '$nama_peminjam', jenis_kelamin = '$jenis_kelamin',
            alamat = '$alamat' where id = '$id'"
        );
    }

    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from data_peminjam where id='$id'");
    }
}
?>
 <?php  
class Petugas extends Database{
	public function index()
    {
        $petugas = mysqli_query($this->koneksi, "select * from data_petugas");
        return $petugas;
    }	

    // Menambah Data
    public function create($nama_petugas, $no_hp, $alamat_petugas)
    {
        mysqli_query(
            $this->koneksi,
            "insert into data_petugas values(null, '$nama_petugas', '$no_hp', '$alamat_petugas')"
        );
    }

    public function show($id)
    {
        $petugas = mysqli_query($this->koneksi, "select * from data_petugas where id='$id'");
        return $petugas;
    }

    public function edit($id)
    {
        $petugas = mysqli_query(
            $this->koneksi,
            "select * from data_petugas where id='$id'"
        );
        return $petugas;
    }

    public function update($id, $nama_petugas,$no_hp,$alamat_petugas)
    {
        mysqli_query(
            $this->koneksi,
            "update data_petugas set nama_petugas = '$nama_petugas', no_hp = '$no_hp',
             alamat_petugas = '$alamat_petugas' where id = '$id'"
        );
    }

    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from data_petugas where id='$id'");
    }
}
?>
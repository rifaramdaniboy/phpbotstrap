<!DOCTYPE html>
<html>
<head>
    <title> Latihan 1</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
        <!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav" style="margin-left: 20px">
          <li class="nav-item active">
            <a class="nav-link" href="#">PT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user.php">Data User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="barang.php">Data Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pinjambarang.php">Pinjam Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tanggal.php">Tanggal Peminjaman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="informasi.php">Informasi Barang</a>
          </li>
        </ul>
      </div>


    </ul>
    <form class="form-inline my-2 my-lg-0" action="login.php" method=" post">
 <button class="btn btn-outline-light my-2 my-sm-0" onclick="return confirm('Apakah Anda Yakin Mau Logout ?')" type="submit">
 Logout</button>
    <?php
if(isset($_SESSION['submit'])) {
    unset($_SESSION);
    session_destroy();
    echo "<script>alert('Anda Berhasil Logout'); 
        window.location.href='login.php'</script>";
    header("location:login.php");
} 
?>
    </form>
  </div>
</nav>                                              
        <!-- End Header -->

        <!-- Content -->

    <?php
    include '../database.php';
    $barang= new Barang();
    foreach ($barang->edit($_GET['id']) as $data){
    $id = $data['id'];
    $nama_barang = $data['nama_barang'];
    $jenis_barang = $data['jenis_barang'];
    $jumlah_barang = $data['jumlah_barang'];
    $harga_sewa = $data['harga_sewa'];
    }
    ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10" style="padding:20px">
                    <div class="card">
                        <div class="card-header">Edit Data User</div>
                        <div class="card-body">
                            <form action="prosesbarang.php?aksi=update" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="form-group">
                                    <label >Nama Barang</label>
                                    <input type="text" name="nama_barang" class="form-control" 
                                    value="<?php echo $data['nama_barang'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label >Jenis Barang</label>
                                    <input type="text" name="jenis_barang" class="form-control" 
                                    value="<?php echo $data['jenis_barang'] ?>" required>
                                </div>                                      
                                <div class="form-group">
                                    <label>Jumlah Barang</label>
                                    <input type="number" name="jumlah_barang" class="form-control"
                                    value="<?php echo $data['jumlah_barang'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Harga Sewa</label>
                                    <input type="text" name="harga_sewa" class="form-control" value="<?php echo $data['harga_sewa'] ?>"
                                    required>
                                </div>
                                <div class="form-group">
                                    <a href="barang.php" class="btn btn-danger btn-block:">Kembali</a>
                                    <button type="submit" name="save" class="btn btn-success btn-block:">Simpan
                                    </button>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                                
        
        <!-- End Content-->

        <!-- footer -->
        <footer>
            <center><b>&copy; 2019 SMK ASSALAAM</b></center>

        </footer>
        <!--  End Footer-->

        <!-- Js -->
        <script  src="assets/js/jquery-3.4.1.min.js"></script>
        <script src=" assets/js/bootstrap.bundle.min.js"></script>
        <script src=" assets/js/bootstrap.bundle.js"></script>

        <!-- End Js -->

</body>
</html>
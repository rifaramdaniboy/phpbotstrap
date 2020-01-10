<?php 
session_start();
if ($_SESSION['login']) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
		<!-- Header -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-l	abel="Toggle navigation">
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
            <a class="nav-link" href="petugas.php">Data Petugas</a>
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
		<div class="container-fluid">
		<br><center><h2 class="header-text">Data Barang</h2></center>
		<div class="row justify-content-center">
			<div class="col-md-10" style="padding: 20px;">
				<div class="card border-primary">
					<div class="card-body">
					<a href="createbarang.php" class="btn btn-primary btn-block:">+ Tambah Barang</a>
					<br><br>
						<table class="table">
						<tr>
							<th>No</th>
							<th>Barang</th>
							<th>Jenis Barang</th>
							<th>Jumlah Barang</th>
							<th>Harga Sewa</th>
							<th></th>
							<th colspan="3">Aksi</th>
						</tr>
						<?php
						include '../database.php';
						$barang = new Barang();
						$no = 1;
						foreach ($barang->index() as $data) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['nama_barang']; ?></td>
							<td><?php echo $data['jenis_barang']; ?></td>
							<td><?php echo $data['jumlah_barang']; ?></td>
							<td><?php echo $data['harga_sewa'];?></td>
							<td><a href="showbarang.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-primary btn-block:">Show</a></td>
                            <td><a href="editbarang.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-warning btn-block:">Edit</a></td>
                            <td>
                            <a class="btn btn-outline-danger btn-block:" href="prosesbarang.php?id=<?php echo $data['id']; ?> &aksi=delete"
                               onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data Ini ?')">Delete</a>
                             </td>
						</tr>
						<?php } ?>
						</table>
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
<?php
 } else {
	echo "<script>";
	echo "alert('Anda Belum Login, Silahkan Login Terlebih Dahulu.');
			window.location.href='login.php'";
	echo "</script";
	}
 ?>
</html>
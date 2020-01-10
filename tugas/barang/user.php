<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
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
	<a href="createuser.php" class="btn btn-primary btn-block:">+ Tambah User</a>
	<div class="container-fluid">
		<br><center><h2 class="header-text">Data User</h2></center>
		<div class="row justify-content-center">
			<div class="col-md-8" style="padding: 20px;">
				<div class="card border-primary">
					<div class="card-body">
					<br><br>
						<table class="table">
						<tr>
							<th>No</th>
							<th>No Ktp</th>
							<th>Nama Peminjam</th>
							<th>Jenis Kelamin</th>
							<th>Alamat</th>
							<th></th>
							<th colspan="3">Aksi</th>
						</tr>
						<?php
						include '../database.php';
							$user = new User();
						$no = 1;
						foreach ($user->index() as $data) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['no_ktp']; ?></td>
							<td><?php echo $data['nama_peminjam']; ?></td>
							<td><?php echo $data['jenis_kelamin']; ?></td>
							<td><?php echo $data['alamat']; ?></td>
							<td><a href="showuser.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-primary btn-block:">Show</a></td>
                            <td><a href="edituser.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-warning btn-block:">Edit</a></td>
                            <td>
                            <a class="btn btn-outline-danger btn-block:" href="prosesuser.php?id=<?php echo $data['id']; ?> &aksi=delete"
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
</body>
</html>

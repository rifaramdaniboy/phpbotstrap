<!DOCTYPE html>
<html>
<head>
	<title>Show Barang</title>
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

    <?php
    include '../database.php';
    $informasi= new Informasi();
    foreach ($informasi->edit($_GET['id']) as $data){
    $keadaan_barang = $data['keadaan_barang'];
	$kekurangan_barang = $data['kekurangan_barang'];
	$kelebihan_barang = $data['kelebihan_barang'];
	$kritik = $data['kritik'];
    }
    ?>
		<div class="container">
		<br><center><h2 class="header-text">Data User</h2></center>
			<div class="row justify-content-center">
				<div class="col-md-10" style="padding:20px">
					<div class="card">
						<div class="card-body">
							<form action="proses.php?aksi=update" method="post">
								<div class="form-group">
									<label >Keadaan Barang </label>
									<input type="text" name="keadaan_barang" class="form-control" value="<?php echo $keadaan_barang?>" readonly >
								</div>							
								<div class="form-group">
									<label>Kekurangan Barang</label>
                                    <textarea name="kekurangan_barang" cols="40" class="form-control" readonly>
                                    	<?php echo $kekurangan_barang; ?></textarea>	
								</div>
								<div class="form-group">
									<label>Kelebihan Barang</label>
                                    <textarea name="kelebihan_barang" cols="40" class="form-control" readonly><?php echo $kelebihan_barang; ?></textarea>	
								</div>
								<div class="form-group">
									<label>Kritik</label>
                                    <textarea name="kritik" cols="40" class="form-control" readonly><?php echo $kritik; ?></textarea>	
								</div>
								<a href="informasi.php" class="btn btn-danger btn-block:">Back</a>
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
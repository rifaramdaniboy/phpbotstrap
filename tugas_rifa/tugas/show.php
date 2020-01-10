<?php
include ('..\koneksi.php');
$id       = $_GET['id'];
$produk    = mysqli_query($koneksi, "SELECT*FROM ramdani123 WHERE id='$id'");
$data     = mysqli_fetch_array($produk);
?>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <title>www.https//tugas crud</title>
</head>
<body>
  <font style="font-family: lucida calligraphy">
    <center><h2></h2></center>
    <br>
    <br>
    <div class="container">
    <form action="edit_pro.php" method="POST">
     <div class="form-group">
       <label > Nama Barang :</label>
       <input type="text" class="form-control" name="nama_barang" value="<?php echo $data['nama_barang']; ?>" readonly>
     </div>
     <div class="form-group">
       <label > Jenis Barang :</label>
       <input type="text" class="form-control" name="jenis_barang" value="<?php echo $data['jenis_barang']; ?>" readonly>
     </div>
     <div class="form-group">
       <label > Harga Barang :</label>
       <input type="text" class="form-control" name="harga_barang" value="<?php echo $data['harga_barang']; ?>" readonly>
     </div>
     <div class="form-group">
       <label > Jumlah Barang :</label>
       <input type="text" class="form-control" name="jumlah_barang" value="<?php echo $data['jumlah_barang']; ?>"readonly>
     </div>
     <div class="form-group">
       <label > Total Harga :</label>
       <input type="text" class="form-control" name="total_harga" value="<?php echo $data['total_harga']; ?>"readonly>
     </div>
    </form>
    </div>
</body>
</html>
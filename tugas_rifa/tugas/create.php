<!DOCTYPE html>
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
    <form action="create_pro.php" method="POST">
     <div class="form-group">
       <label > Nama Barang :</label>
       <input type="text" class="form-control" name="nama_barang">
     </div>
     <div class="form-group">
       <label > Jenis Barang :</label>
       <input type="text" class="form-control" name="jenis_barang">
     </div>
     <div class="form-group">
       <label > Harga Barang :</label>
       <input type="text" class="form-control" name="harga_barang">
     </div>
     <div class="form-group">
       <label > Jumlah Barang :</label>
       <input type="text" class="form-control" name="jumlah_barang">
     </div>
     <button type="submit" class="btn btn-info active btn-lg" name="save">Simpan</button>
    </form>
    </div>
</body>
</html>
  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <center><h2>Data Diri Pembeli</h2></center>
   <div class="container">
        <div class="row" style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Table Pembeli</div>
                        <div class="card-body">
                <!--isi disini-->
                <form action="belibuku.php" method="post">
                <div class="form-group">
                <label for="">Nama  </label>
                <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                <label for="">alamat  </label>
                <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Jenis Kelamin </label><br>
                <label>laki Laki<input type="radio" name="jk" required value="laki" class="form-control"></label>
                <label>Perempuan<input type="radio" name="jk" required value="pere" class="form-control"></label>
                </div>  
                <div class="form-group">
               
                </div>
                <div class="form-group">
                <label for="">Masukan Jumlah Siswa</label>
                <input type="number" name="jml" class="form-control">
                </div>
                
                    <div class="form-group">
                        <button type="submit" name="simpan" class="btn btn-primary">Proses</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        
                        </div>
         
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PROSES NAMA</title>
</head>
<body>

<?php
if (isset($_POST['simpan'])) {
    $jml_form=$_POST['jml'];
    
?>    
    <div class="container">
        <div class="row" style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">isi</div>
                        <div class="card-body">
    
    <form action="prosesuh.php" method="post">
   <?php for ($a=1; $a <= $jml_form; $a++) {?>
    <div class="form-group">
        <label for="">Nama Barang</label>
        <input type="text" name="nama[]" class="form-control" required><br><br>
    </div>
    <div class="form-group">
        <label for="">Kode Barang</label>
        <input type="text" name="kdbr[]" class="form-control"><br><br>
    </div>
    
    <div class="form-group">
        <label for="">Jenis Barang</label>
        
    </d     iv>
    
    <div class="form-group">
    <label for="">Harga Barang</label>
    <input type="number" min="1" name="hrg[]" class="form-control"><br><br>
    </div>

    <div class="form-group">
        <label for="">Jumlah Barang</label>
        <input type="number" name="jml[]" class="form-control"><br><br>
    </div>
    <hr>
    <hr>
      
    
    <div class="form-group">
        <button type="submit" name="lanjut" class="btn btn-primary">Proses</button>
            <button type="reset" class="btn btn-warning">Reset</button>           
                </div>
    <?php }
    ?>
    <input type="hidden" name="nama" value="<?php echo $nama ?>">
    <input type="hidden" name="kdbr" value="<?php echo $kdbr ?>">
    <input type="hidden" name="jnbr" value="<?php echo $jnbr ?>">
    <input type="hidden" name="hrg" value="<?php echo  $hrg ?>">
    <input type="hidden" name="jml" value="<?php echo  $jml ?>">
    
    <hr>
    </form>
    </div>
    </div>
        </div>
            </div>
                </div>
                    </div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  
    
        
        
</body>
</html>
    <?php } ?>
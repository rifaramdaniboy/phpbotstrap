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
    
    <form action="hidebuku.php" method="post">
   <?php for ($a=1; $a <= $jml_form; $a++) {?>
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" name="nama[]" class="form-control" required><br><br>
    </div>

    <div class="form-group">
        <label for="">Kelas</label>
        <input type="text" min="1" name="kls[]" class="form-control"><br><br>
    </div>
    
    <div class="form-group">
        <label for="">Nilai Harian</label>
        <input type="number" name="nh[]" class="form-control"><br><br>
    </div>
    
    <div class="form-group">
    <label for="">Nilai UTS</label>
    <input type="number" min="1" name="nut[]" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Nilai UAS</label>
        <input type="number" name="nua[]" class="form-control"><br><br>
    </div>
    <br><br>
    <hr>
    <hr>
      

    <?php }
    ?>
    <input type="hidden" name="nama" value="<?php echo $nama ?>">
    <input type="hidden" name="kls" value="<?php echo $kls ?>">
    <input type="hidden" name="nh" value="<?php echo $nh ?>">
    <input type="hidden" name="nut" value="<?php echo $nut ?>">
    <input type="hidden" name="nua" value="<?php echo $nua ?>">
    <input type="submit" name="submit"  value="simpan"
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
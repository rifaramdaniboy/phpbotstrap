<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
   <?php
    if (isset($_POST['simpan'])) {
        $jml_form=$_POST['jml'];
        $nama = $_POST['nama'];
        $kls =  $_POST['kls'];
        $nh = $_POST['nh'];
        $nut = $_POST['nut'];
        $nua = $_POST['nua'];

    }
    
?>
<div class = "container">
  <div class = "col-md-12" style="background-white">
  <center>
   <center><h2>Detail Pembelian Buku</h2></center>
   </center>
   <div class = "table">
   <tr>
   <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Nilai Harian</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
    <th></th>
    </tr>
    <tr>
        <?php
        echo "Nama : " $nama ;
        ?>
       
   
    </tr>    
        </table>
        

          <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
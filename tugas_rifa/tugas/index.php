<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script>
         

            $(document).ready(function(){
                $('#data-produk').DataTable();
            });
    </script>
    <title>www.https//tugas crud</title>
    
</head>
<body>
    <font style="font-family: lucida calligraphy">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="index.php" style="font-size:16px"><b>Data Produk</b></a></li>
            </ul>
        </div>
        </div>
    </nav>
   <center><h2>Struct Pembelian</h2></center>
   <br>
   <br>
   <div class="container">
<a href="create.php" type="button" class="btn btn-info btn-sm">Tambah Data </a>
<br>
   <br>
        <table class="table table-hover table-responsive" id="data-produk">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Harga Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php
            include ('../koneksi.php');
            $tampil = "SELECT*FROM ramdani123";
            $ramdani123 = mysqli_query($koneksi ,$tampil);
            $no = 1;
            $total_pem = 0;
            foreach ($ramdani123 as $data){
            $total_pem = $total_pem + $data['total_harga'];
            ?>
            <tbody>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['nama_barang'] ?></td>
                    <td><?php echo $data['jenis_barang'] ?></td>
                    <td><?php echo $data['harga_barang'] ?></td>
                    <td><?php echo $data['jumlah_barang'] ?></td>
                    <td><?php echo $data['total_harga'] ?></td>
                    <td><a href="show.php?id=<?php echo $data['id']?>" type="button" class="btn btn-primary btn-xs">Show</a>
                    <a href="edit.php?id=<?php echo $data['id']?>" type="button" class="btn-warning">Edit</a>
                    <a href="delete.php?id=<?php echo $data['id']?>"  type="button" class="btn btn-danger btn-xs">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php
            $no++;  
            }
            ?>
                        <tr>
                            <td><h6>Total Pembayaran :  </h6></td>
                            <td>Rp. <?php echo $total_pem; ?></td>
                        </tr>
 
                 
        </table>
   </div>
   <br>
   <br>
                 <footer>
                    <center>&copy;Rifa Ramdani</center>
                 </footer>
</body>
</html>
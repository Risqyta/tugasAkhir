
<?php
include "config/koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="bootstrap/dist/css/global.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>


  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Let's Read</a>
        </div>
     
        </div>
      </div>
    </nav>

    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          <li><a href="bukutamu.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Buku Tamu</i></a></li>
          <li><a href="coba.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Cerpen</i></a></li>
            <li><a href="puisi.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Puisi</i></a></li>
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Buku Tamu</h2>
           <a href="tambahbukutamu.php" class="btn btn-info pull-right" style="margin-bottom: 20px;"><i class="fa fa-plus"></i> Tambah</a>
           <table class="table table-striped">
    <thead>
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">Pekerjaan</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tanggal</th>
     
     
    </thead>

                     <?php
                     $query = $mysqli->query("SELECT * FROM buku_tamu");
                     while ($lihat = mysqli_fetch_array($query)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $lihat['nomer']; ?></td>
                          <td><?php echo $lihat['nama'];?></td>
                          <td><?php echo $lihat['alamat'];?></td>
                          <td><?php echo $lihat['pekerjaan'];?></td>  
                          <td><?php echo date('d-m-Y',strtotime($lihat['tanggal'])); ?></td>                        
                
                        </tr>
                        <?php
                        } ?>
             
                      </table>
                      </div>
                      </div>
                      <? requerire_once "templates/footer.php" ?>
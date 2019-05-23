
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
     
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
      
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          <li><a href="pengembalian.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Cerpen</i></a></li>
            <li><a href="pengembalian.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Quotes</i></a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Buku Tamu</h2>
          <form role="form1" action="prosestambahtamu.php" method="post">
             <table>
                 <div class = "box-body">
                     <div class ="form-group">
                    </div>
                    <div class ="form-group">
                        <label for="exampleInputPassword1">Nomor</label>
                        <input type="text"  name="nomer" class="form-control" placeholder="Nomer..." required>
                    </div>
                    <div class ="form-group">
                        <label for="exampleInputPassword1">Nama </label>
                        <input type="text"  name="nama" class="form-control" placeholder="Nama..." required>
                    </div>
                    <div class ="form-group">
                        <label for="exampleInputPassword1">Pekerjaan</label>
                        <input type="text"  name="pekerjaan" class="form-control" placeholder="Pekerjaan..." required>
                    </div>
                    <div class ="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input type="text"  name="alamat" class="form-control" placeholder="Alamat..." required>
                    </div>
                   
                    <div class ="form-group">
                      <label for="exampleInputPassword1">Tanggal</label>
                      <input type="date"  name="tanggal"
                      class="form-control datepicker" placeholder="Tanggal ..." required>
                    </div>
                    </div>
                    </div>
               <div class="row" style="margin-top: 20px;">
                 <button type="submit" class="btn btn-danger">Tambah Data</button>
             <a href="pegawai.php" class="btn btn-danger">Back </a>
               </div>
           </div>
        </div>
      </div>
    </div>



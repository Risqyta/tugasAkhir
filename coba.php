
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
          <h2 class="page-header">Cerita Pendek</h2>
          
           <table class="table table-striped">
    <thead>
      <th scope="col">Judul</th>
      <th scope="col">Karya</th>
      <th scope="col">Kategori</th>
      <th scope="col">Aksi</th>
      
     
     
    </thead>
    <tbody>
                        <tr>
                          <td><?php echo "Sepucuk Surat Buat Ayah" ?></td>
                          <td><?php echo "Riski Surya Romadhon"?></td>
                          <td><?php echo "Cerpen Kehidupan, Cerpen Keluarga, Cerpen Mengharukan"?></td>
                          <td> 
                            <a href ="cerita1.html" class="btn btn-info">&nbsp;&nbsp;Baca</a>
                            
                          </td> 
</tr>
                          <tbody>
                        <tr>
                          <td><?php echo "Surat Untukmu Yang Tak Pernah Aku Lupakan" ?></td>
                          <td><?php echo "Mutiara Sari"?></td>
                          <td><?php echo "Cerpen Cinta Islami"?></td>
                          <td> 
                            <a href ="cerita2.html" class="btn btn-info">&nbsp;&nbsp;Baca</a>
                            
                          </td> 
                                               
                          
                        </tr>
                        <tbody>
                        <tr>
                          <td><?php echo "Aku Hatiku Pemikiranku dan Keadaan" ?></td>
                          <td><?php echo "Wegga Perkasa Eddyviar"?></td>
                          <td><?php echo "Cerpen Pengalaman Pribadi"?></td>
                          <td> 
                            <a href ="cerita3.html" class="btn btn-info">&nbsp;&nbsp;Baca</a>
                            
                          </td> 
                                              
                        </tr>
                        </tr>
                        <tbody>
                        <tr>
                          <td><?php echo "Batu Yang Hancur Di Hari Yang Gugur" ?></td>
                          <td><?php echo "Aditya Ramadhan"?></td>
                          <td><?php echo "Cerpen Kehidupan, Cerpen Keluarga, Cerpen Sedih"?></td>
                          <td> 
                            <a href ="cerita3.html" class="btn btn-info">&nbsp;&nbsp;Baca</a>
                            
                          </td> 
                                              
                        </tr>
                        <tbody>
                        <tr>
                          <td><?php echo "Surat Pertama Dan Terakhir Dari Malang" ?></td>
                          <td><?php echo "Hanifa"?></td>
                          <td><?php echo "Cerpen Persahabatan, Cerpen Sedih"?></td>
                          <td> 
                            <a href ="cerita3.html" class="btn btn-info">&nbsp;&nbsp;Baca</a>
                            
                          </td> 
                                              
                        </tr>
                     
                      <tbody>
                        <tr>
                          <td><?php echo "Sepucuk Surat Buat Ayah" ?></td>
                          <td><?php echo "Riski Surya Romadhon"?></td>
                          <td><?php echo "Cerpen Kehidupan, Cerpen Keluarga, Cerpen Mengharukan"?></td>
                          <td> 
                            <a href ="cerita1.html" class="btn btn-info">&nbsp;&nbsp;Baca</a>
                            
                          </td> 
                          <tbody>
                        <tr>
                          <td><?php echo "Surat Untukmu Yang Tak Pernah Aku Lupakan" ?></td>
                          <td><?php echo "Mutiara Sari"?></td>
                          <td><?php echo "Cerpen Cinta Islami"?></td>
                          <td> 
                            <a href ="cerita2.html" class="btn btn-info">&nbsp;&nbsp;Baca</a>
                            
                          </td> 
                                               
                          
                        </tr>
                        <tbody>
                        <tr>
                          <td><?php echo "Aku Hatiku Pemikiranku dan Keadaan" ?></td>
                          <td><?php echo "Wegga Perkasa Eddyviar"?></td>
                          <td><?php echo "Cerpen Pengalaman Pribadi"?></td>
                          <td> 
                            <a href ="cerita3.html" class="btn btn-info">&nbsp;&nbsp;Baca</a>
                            
                          </td> 
                                              
                        </tr>
                        </tr>
                        <tbody>
                        <tr>
                          <td><?php echo "Batu Yang Hancur Di Hari Yang Gugur" ?></td>
                          <td><?php echo "Aditya Ramadhan"?></td>
                          <td><?php echo "Cerpen Kehidupan, Cerpen Keluarga, Cerpen Sedih"?></td>
                          <td> 
                            <a href ="cerita3.html" class="btn btn-info">&nbsp;&nbsp;Baca</a>
                            
                          </td> 
                                              
                        </tr>
                        <tbody>
                        <tr>
                          <td><?php echo "Surat Pertama Dan Terakhir Dari Malang" ?></td>
                          <td><?php echo "Hanifa"?></td>
                          <td><?php echo "Cerpen Persahabatan, Cerpen Sedih"?></td>
                          <td> 
                            <a href ="cerita3.html" class="btn btn-info">&nbsp;&nbsp;Baca</a>
                            
                          </td> 
                                              
                        </tr>
                        <?php
                         ?>
             
                      </table>
                      </div>
                      </div>
                      <? requerire_once "templates/footer.php" ?>
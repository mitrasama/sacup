<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistem Informasi Absensi</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <script src="assets/js/jquery-2.1.3.min.js"></script>
	  <script src="assets/js/bootstrap.min.js"></script>
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
      <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="http://localhost/sacup/assets/image/gelora.png"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!--ACCESS MENUS FOR ADMIN-->
                  <li class="active"><a href="<?php echo base_url(); ?>index.php/page/">Dashboard HRD</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/page/pegawai">Pegawai</a></li>
                  <li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown">Absensi <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li ><a href="#">Data Absensi</a></li>
                        <li ><a href="#">Laporan Absensi</a></li>
                    </ul>
				          </li>
                  <li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown">Cuti <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li ><a href="#">Data Cuti</a></li>
                        <li ><a href="#">Laporan Cuti</a></li>
                    </ul>
				          </li>
                  <li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown">Surat Peringatan <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li ><a href="#">Data Surat Peringatan</a></li>
                        <li ><a href="#">Laporan Surat Peringatan</a></li>
                    </ul>
				          </li>
                  <li><a href="#">Pengguna</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('login/logout');?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-Learning STT-NF</title>
  <link rel="shortcut icon" href="../assets/img/logo-nf.png" type="image/x-icon">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/css/simple-sidebar.css')?>" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <a href="<?= base_url('index.php/home/index')?>">
          <h5>E-Learning STT-NF</h5>
        </a>
      </div>
      <div class="list-group list-group-flush">
        <a href="<?= base_url('index.php/home/index')?>" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="<?= base_url('index.php/mahasiswa/index'); ?>" class="list-group-item list-group-item-action bg-light">Mahasiswa</a>
        <a href="<?= base_url('index.php/dosen/index'); ?>" class="list-group-item list-group-item-action bg-light">Dosen</a>
        <a href="<?= base_url('index.php/matakuliah/index'); ?>" class="list-group-item list-group-item-action bg-light">Matakuliah</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Sidebar Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('index.php/login/logout'); ?>">Logout</a>
            </li>
          </ul>
        </div>
        
      </nav>
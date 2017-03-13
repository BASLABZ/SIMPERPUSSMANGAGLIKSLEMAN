<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISTEM INFORMASI PERPUSTAKAAN SMA NEGERI NGAGLIK</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('resource/themes/default/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  Ionicons
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('resource/themes/default/font/css/font-awesome.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('resource/themes/default/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('resource/themes/default/dist/css/skins/_all-skins.min.css'); ?>">
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="<?php //echo base_url('resource/themes/default/plugins/iCheck/flat/blue.css'); ?>"> -->
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('resource/themes/default/plugins/morris/morris.css'); ?>">
 
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('resource/themes/default/plugins/datepicker/datepicker3.css'); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('resource/themes/default/plugins/daterangepicker/daterangepicker-bs3.css'); ?>">
  <!-- bootstrap wysihtml5 - text editor -->
<!--   <link rel="stylesheet" href="<?php // echo base_url('resource/themes/default/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>"> -->
  <link rel="stylesheet" href="<?php echo base_url('resource/themes/default/plugins/datatables/dataTables.bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('resource/themes/default/plugins/select2/select2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('resource/themes/default/plugins/sweetalert/sweetalert.css'); ?>" />
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('home') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><li class="fa fa-home"></li></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIM</b>PERPUSTAKAAN</span>
    </a>
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <!--       <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
               <!--  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
             <center>  <img  class="img-responsive"  src="<?php echo base_url('resource/themes/default/images/logo.jpg'); ?>"></center>
                <p>
                " <?php echo $this->session->userdata('username'); ?>"
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('master/pengguna/profil_pengguna'); ?>/<?php echo $this->session->userdata('user_id'); ?>" class="btn btn-info btn-flat"><span class="fa fa-user"></span> Profil User</a>
                </div>
                <div class="pull-right">
               <button class="btn btn-danger btn-flat" type="submit" id='logout'><span class="fa fa-sign-out"></span> Keluar</button>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img  class="img-responsive" src="<?php echo base_url('resource/themes/default/images/logo.jpg'); ?>">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li><a href="<?php echo base_url('home'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i>
            <span>MASTER</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('master/pengguna'); ?>"><i class="fa fa-user"></i> MASTER PENGGUNA</a></li>
            <li><a href="<?php echo base_url('master/siswa'); ?>"><i class="fa fa-users"></i> MASTER SISWA / ANGGOTA</a></li>
            <li><a href="<?php echo base_url('master/kategoribuku'); ?>"><i class="fa fa-tags"></i> MASTER KATEGORI BUKU</a></li>
            <li><a href="<?php echo base_url('master/penerbit'); ?>"><i class="fa fa-flag"></i> MASTER PENERBIT</a></li>
            <li><a href="<?php echo base_url('master/buku'); ?>"><i class="fa fa-book"></i> MASTER BUKU</a></li>
          </ul>
      </li>
        <li><a href="<?php echo base_url('master/inventory'); ?>"><i class="fa fa-edit"></i> <span>INVENTORI / BARANG</span></a></li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-tv"></i>
            <span>TRANSAKSI</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('transaksi/peminjaman'); ?>"><i class="fa fa-tv"></i> PEMINJAMAN</a></li>
            <li><a href="<?php echo base_url('transaksi/pengembalian'); ?>"><i class="fa fa-tv"></i> PENGEMBALIAN</a></li>
          </ul>
          
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>LAPORAN</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('laporan/reportsiswa'); ?>"><i class="fa fa-file"></i> LAPORAN ANGGOTA</a></li>
            <li><a href="<?php echo base_url('laporan/laporanbuku'); ?>"><i class="fa fa-file"></i> LAPORAN BUKU</a></li>
            <li><a href="<?php echo base_url('laporan/laporaninventori'); ?>"><i class="fa fa-file"></i> LAPORAN INVENTORI</a></li>
            <li><a href="<?php echo base_url('laporan/laporanperkategori'); ?>"><i class="fa fa-file"></i> LAPORAN PEMINJAMAN</a></li>
          </ul>
          
        </li>
      </ul>
    </section>
  </aside>
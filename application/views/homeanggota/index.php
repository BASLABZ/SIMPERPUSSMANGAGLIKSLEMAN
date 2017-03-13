<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PECARIAN BUKU | LIB SMA N 1 NGAGLIK SLEMAN</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('resource/themes/default'); ?>/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('resource/themes/default/font/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('resource/themes/default'); ?>/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url('resource/themes/default'); ?>/dist/css/skins/_all-skins.min.css">
  <style type="text/css">
             .dim_about {box-shadow: inset 0 0 0 rgba(30, 172, 174, 0.39), 0 10px 0 0 rgba(30, 172, 174, 0), 0 8px 10px rgba(123, 83, 83, 0.58);}
    </style>
</head>
<body class="skin-blue layout-boxed sidebar-mini sidebar-collapse">
<div class="wrapper" style="background-color:#ecf0f5; ">
  <header class="main-header">
    <a href="<?php echo base_url('pencarianbukumember/pencarianbuku'); ?>" class="logo">
      <span class="fa fa-search"></span>
      <span class="logo-lg"><span class="fa fa-home"></span></span>
    </a>
    <nav class="navbar navbar-static-top">
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-home"></i></a>
          </li>
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-flag-o"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="content-wrapper" style="padding-right:40px; ">
    <section class="content-header">
      <h1>
        PECARIAN BUKU
        <small>LIB SMA N 1 NGAGLIK SLEMAN</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pencarian Buku</a></li>
        <li class="active">Data Buku</li>
      </ol>
    </section>
    <section class="content">
      <div class="callout callout-info dim_about">
          <div class="row">
            <div class="col-md-2">
            <img src="<?php echo base_url('resource/themes/default/images/logo.jpg'); ?>" class="img-thumbnail dim_about pull-right">
          </div>
          <div class="col-md-9">
            <h4 style="font-size:30px; " align="center">  SISTEM INFORMASI PERPUSTAKAAN & INVENTORY <br> SMA NEGERI NGAGLIK
        </h4>
          </div>
          </div>
      </div>
      <div class="box dim_about">
        <div class="box-header with-border">
          <h3 class="box-title"><span class="fa fa-book"></span> Data Buku</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table class="display table table-bordered table-striped bukulist cell-border">
               <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">No Inventaris</th>
                <th rowspan="2">No ISBN</th>
                <th colspan="3">Buku / Perpustakaan</th>
                <th rowspan="2">Ket.</th>
                <th rowspan="2">Ruang</th>
                <th rowspan="2">Kondisi</th>
            </tr>
            <tr>
                <th>Judul/Pencipta</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
            </tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach ($data as  $value): $kondisi = $value['kondisi'] ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $value['no_inventaris']; ?></td>
                  <td><?php echo $value['ISBN']; ?></td>
                  <td><?php echo $value['judul_buku']; ?></td>
                  <td><?php echo $value['nama_penerbit']; ?></td>
                  <td><?php echo $value['pengarang']; ?></td>
                  <td><?php echo $value['ket']; ?></td>
                  <td><?php echo $value['ruang']; ?></td>
                  <td>
                    <?php 
                        if ($kondisi == 'R') {echo "RUSAK";}
                        else if ($kondisi == 'B') { echo "BAIK";}
                     ?>

                  </td>
                </tr>
          <?php endforeach; ?>
        </tbody>
        </table>
        </div>
        <div class="box-footer">
          <i><b>* Ketikkan Judul Buku / Pengarang Pada Kolom Search Diatas Tabel Untuk Pencarian Buku </b></i>
        </div>
      </div>
    </section>
  </div>
   <footer class="main-footer">
    <div class="pull-right hidden-xs"></div>
    <strong class="pull-right">Copyright &copy; <?php echo date('Y'); ?> <a href="#">LIBSMA - MELISA</a>.All rightsreserved.</strong> 
  </footer>
 <div class="control-sidebar-bg"></div>
</div>
<script src="<?php echo base_url('resource/themes/default/plugins/sweetalert/sweetalert.min.js') ?>"></script>
<script src="<?php echo base_url('resource/themes/default/plugins/jQuery/jQuery-2.2.0.min.js'); ?>"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?php echo base_url('resource/themes/default/bootstrap/js/bootstrap.min.js'); ?> "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url('resource/themes/default/plugins/morris/morris.min.js'); ?> "></script>
<script src="<?php echo base_url('resource/themes/default/plugins/sparkline/jquery.sparkline.min.js'); ?> "></script>
<script src=" <?php echo base_url('resource/themes/default/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>
<script src=" <?php  echo base_url('resource/themes/default/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
<script src=" <?php echo base_url('resource/themes/default/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<script src=" <?php echo base_url('resource/themes/default/plugins/fastclick/fastclick.js'); ?>"></script>
<script src=" <?php echo base_url('resource/themes/default/dist/js/app.min.js'); ?>"></script>
<script src="<?php echo base_url('resource/themes/default/dist/js/demo.js'); ?> "></script>
<script src="<?php echo base_url('resource/themes/default/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('resource/themes/default/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('resource/themes/default/plugins/select2/select2.full.min.js'); ?>">
  </script>
<script type="text/javascript">
  $(function () {
    $(".select2").select2();
});
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
    $('.buku').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
       "scrollX": true,
         "orderCellsTop": true
    });
  });
</script>
  <script>
    $(".bukulist").DataTable({
      language: { 
        search: "Cari Buku / Pengarang Disini  ",
        searchPlaceholder: "Ketikkan Buku/Pengarang" }
    });
  </script>
</body>
</html>

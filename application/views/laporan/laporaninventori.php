<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          <span class="fa fa-print fa-lg"></span> Laporan Inventori Barang 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Laporan</a></li>
        <li class="active">Laporan Inventori Barang</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
               <h3 class="box-title"><a href= "<?php echo base_url('laporan/laporaninventori/cetak'); ?>" class="btn btn-info" target="_BLANK"><span class="fa fa-print"></span> Print</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <section class="content">
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Keterangan</th>
                  <th>Jumlah</th>
                  <th>Lokasi</th>
             
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      foreach ($data as  $row) {
                        echo "<tr>
                                <td>".$no++."</td>
                                <td>".$row['id_barang']."</td>
                                <td>".$row['nama_barang']."</td>
                                <td>".$row['keterangan']."</td>
                                <td>".$row['jumlah']."</td>
                                <td>".$row['lokasi']."</td>
                               
                              
                              </tr>"  ;
                      }
                   ?>
                </tbody>
              </table>
      
      <!-- /.row -->
    </section>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
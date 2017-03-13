<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          <span class="fa fa-print fa-lg"></span> Laporan  siswa 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Laporan </a></li>
        <li class="active">Laporan  siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header"></div>
            <!-- /.box-header -->
            <div class="box-body">
               <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              
              <h3 class="box-title"><a href= "<?php echo base_url('laporan/reportsiswa/cetak'); ?>" target="_BLANK" class="btn btn-info"><span class="fa fa-print fa-lg"></span> Cetak</a></h3>
              
                 <?php echo $this->session->flashdata('Sukses'); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Siswa</th>
                  <th>Nama Siswa</th>
                  <th>NIS</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Kontak</th>
               
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      foreach ($data as  $row) {
                        echo "<tr>
                                <td>".$no++."</td>
                                <td>".$row['siswa_id']."</td>
                                <td>".$row['siswa_nama']."</td>
                                <td>".$row['NIS']."</td>
                                <td>".$row['gender']."</td>
                                <td>".$row['siswa_alamat']."</td>
                                <td>".$row['siswa_kontak']."</td>
                                
                                
                             
                              </tr>"  ;
                      }
                   ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
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
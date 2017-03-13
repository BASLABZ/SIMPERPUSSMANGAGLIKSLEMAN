<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          <span class="fa fa-tags fa-lg"></span> Master Inventori Barang 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master</a></li>
        <li class="active">Master Inventori Barang</li>
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
              <h3 class="box-title"><a href= "<?php echo base_url('master/inventory/add'); ?>" class="btn btn-info"><span class="fa fa-plus"></span> Tambah</a></h3>
               <br><br><br>
              <?php echo $this->session->flashdata('Sukses'); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Keterangan</th>
                  <th>Jumlah</th>
                  <th>Lokasi</th>
                  <th>Aksi</th>
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
                                <td>
                                  <a href='".base_url('master/inventory/edit/'.$row['id_barang'].' ')."' class='btn btn-warning btn-xs' > <span class='fa fa-pencil'></span> Ubah</a>
                                  <a href='".base_url('master/inventory/delete/'.$row['id_barang'].' ')."' class='btn btn-danger btn-xs' > <span class='fa fa-trash'></span> Hapus</a>
                              </td>
                              
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
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          <span class="fa fa-users fa-lg"></span> Master Penerbit Buku 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master</a></li>
        <li class="active">Master Penerbit Buku</li>
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
              <h3 class="box-title"><a href= "<?php echo base_url('master/penerbit/add '); ?>" class="btn btn-info"><span class="fa fa-plus"></span> Tambah</a></h3>
                    <br><br><br>
              <?php echo $this->session->flashdata('Sukses'); ?>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Penerbit</th>
                  <th>Penerbit</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      foreach ($data as  $row) {
                        echo "<tr>
                                <td>".$no++."</td>
                                <td>".$row['penerbit_id']."</td>
                                <td>".$row['nama_penerbit']."</td>
                                 <td>
                                    <a href='".base_url('master/penerbit/edit/'.$row['penerbit_id'].' ')."' class='btn btn-warning btn-xs' > <span  class='fa fa-pencil'></span> Ubah</a>
                                    <a href='".base_url('master/penerbit/delete/'.$row['penerbit_id'].' ')."' class='btn btn-danger btn-xs' > <span class='fa fa-trash'></span> Hapus</a>
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
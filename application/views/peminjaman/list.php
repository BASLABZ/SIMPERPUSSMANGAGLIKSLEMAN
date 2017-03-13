<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          <span class="fa fa-users fa-lg"></span> Transaksi Peminjaman Buku</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Transaksi</a></li>
        <li class="active">Peminjaman  Buku</li>
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
              <h3 class="box-title"><a href= "<?php echo base_url('transaksi/peminjaman/add'); ?>" class="btn btn-info"><span class="fa fa-plus"></span> Tambah</a></h3>
              <br><br><br>
                <?php echo $this->session->flashdata('Sukses'); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No Transaksi</th>
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                  <th>Status Peminjman</th>
                  <th>Nama Anggota</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      foreach ($data as  $row) {
                      
                        echo "<tr>
                                <td>".$no++."</td>
                                <td>".$row['idtemporari']."</td>
                                <td>".$row['tgl_pinjam'] = date('d-m-Y')."</td>
                                <td>".$row['tgl_kembali']."</td>
                                <td>".$row['status_pinjam']."</td>
                                <td>".$row['siswa_nama']."</td>
                                  <td>
                                  <a href='".base_url('transaksi/peminjaman/add_buku/'.$row['idtemporari'].' ')."' class='btn btn-success btn-xs' > <span class='fa fa-eye'></span> Lihat</a>
                                   
                                    <a href='".base_url('transaksi/peminjaman/delete/'.$row['idtemporari'].'')."' class='btn btn-danger btn-xs' > <span class='fa fa-trash'></span> Hapus</a>
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
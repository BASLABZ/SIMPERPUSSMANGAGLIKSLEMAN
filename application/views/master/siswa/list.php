<div class="content-wrapper">
    <section class="content-header">
      <h1>
          <span class="fa fa-users fa-lg"></span> Master siswa 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master</a></li>
        <li class="active">Master siswa</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header"></div>
            <div class="box-body">
               <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
              <a href="<?php echo base_url('master/siswa/tambah'); ?>" class="btn btn-success"><span class="fa fa-plus"></span> TAMBAH</a>
              <a href="<?php echo base_url('laporan/kartu_anggota/cetak_kartu_semua'); ?>" target="_BLANK" class="btn btn-success"><span class="fa fa-print"></span> CETAK SEMUA KARTU ANGGOTA</a>
              
              </h3>
              <br><br><br>
                 <?php echo $this->session->flashdata('Sukses'); ?>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Anggota</th>
                  <th>Nama Siswa</th>
                  <th>NIS</th>
                  <th>Kelas</th>
                  <th>Nama Kelas</th>
                  <th>Jurusan</th>
                  <th>Alamat</th>
                  <th>Foto Siswa</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      foreach ($data as  $row) {
                        $gambar  = $row['foto'];
                        echo "<tr>
                                <td>".$no++."</td>
                                <td>".$row['kodeanggota']."</td>
                                <td>".$row['siswa_nama']."</td>
                                <td>".$row['NIS']."</td>
                                <td>kelas ".$row['kelas']."</td>
                                <td>".$row['namakelas']."</td>
                                <td>".$row['jurusan']."</td>
                                <td>".$row['siswa_alamat']."</td>
                                <td><img class='img-responsive img-thumbnail' style='width:100px; height:100px;' src='".base_url('resource/themes/default/upload/'.$row['foto'])."'/></td>
                               <td>
                                    <a href='".base_url('master/siswa/ubah/'.$row['siswa_id'].' ')."' class='btn btn-warning btn-xs' > <span  class='fa fa-pencil'></span> Ubah</a>
                                    <a target='_BLANK' href='".base_url('laporan/kartu_anggota/cetak_kartu/'.$row['siswa_id'].' ')."' class='btn btn-info btn-xs' > <span class='fa fa-print' ></span> Cetak Kartu</a>
                                    <a href='".base_url('master/siswa/delete/'.$row['siswa_id'].' ')."' class='btn btn-danger btn-xs' > <span class='fa fa-trash'></span> Hapus</a>
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
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          <span class="fa fa-users fa-lg"></span> Master  Buku 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master</a></li>
        <li class="active">Master  Buku</li>
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
                <?php echo $this->session->flashdata('Sukses'); ?>
                <?php echo validation_errors( "<div class='alert alert-danger alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>", "</div>"); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php echo form_open('transaksi/peminjaman/proses_pinjam_buku',[ 'class'=> 'role', 'id' => 'validform']) ?>
              <?php foreach ($data as $row) :?>
                
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="col-xs-2">
                        <div class="form-group">
                          <label>NO. Transaksi</label>
                          <input type="text" readonly class="form-control" name="id_transaksi" value="<?php echo $row['idtemporari']; ?>" />
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="form-group">
                          <label>Nama Siswa / Anggota</label>
                            <select  class="form-control select2" style="width: 100%;" name="id_siswa" required="">
                            <?php  foreach ($optsiswa as $siswa): ?>
                            <option value="<?php echo $siswa['siswa_id']; ?>"> <?php echo $siswa['siswa_nama']; ?> </option>
                            <?php endforeach ?>
                            </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-xs-12">
                    <div class="col-xs-8">
                      <div class="form-group">
                        <label>Cari Buku</label>
                         <select class="form-control select2" style="width: 100%;" name="idbuku" required="">
                            <option selected="selected">Pilih Buku</option>
                            <?php  foreach ($optbuku as $buku): ?>
                            <option value="<?php echo $buku['idbuku']; ?>"> <?php echo $buku['judul_buku']; ?> </option>
                            <?php endforeach ?>
                          </select>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="col-xs-6">
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary"><span class="fa fa-save"> </span> Simpan</button>
                        <a href='<?php echo base_url('transaksi/peminjaman'); ?>' class="btn btn-default"><span class="fa fa-refresh"> </span> Kembali</a>
                        </div>
                      </div>
                    </div>
                  </div>
                
              <?php endforeach ?>
              <?php form_close() ?>
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

      <!-- tampil data buku yang di pinjam -->
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
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No Inventaris</th>
                  <th>Judul Buku</th>
                  <th>Kategori</th>
                  <th>Penerbit</th>
                  <th>Kondisi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      foreach ($get_all as  $value) {
                        echo "<tr>
                                <td>".$no++."</td>
                                <td>".$value['no_inventaris']."</td>
                                <td>".$value['judul_buku']."</td>
                                <td>".$value['nama_kategori']."</td>
                                <td>".$value['nama_penerbit']."</td>
                                <td>".$value['kondisi']."</td>
                                  <td>
                                    <a href='".base_url('transaksi/peminjaman/delete_buku/'.$value['id_transaksi'].'/'.$value['idbuku'].' ')."' class='btn btn-danger btn-xs' > <span class='fa fa-trash'></span> Hapus</a>
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
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
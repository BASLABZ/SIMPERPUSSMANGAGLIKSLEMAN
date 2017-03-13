<div class="content-wrapper">
    <section class="content-header">
      <h1><span class="fa fa-tags fa-lg"></span> Detail Peminjaman</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Transaksi </a></li>
        <li class="active">Detail Transaksi Peminjaman Baru 
        
        </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <label>Transaski Peminjaman Baru</label>
              <hr>
            </div>
            <!-- /.box-header -->
            <!-- cari Siswa Yang Meminjam -->
            <div class="box-body">
              <?php echo $this->session->flashdata('exist'); ?>
                <?php echo validation_errors( "<div class='alert alert-danger alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>", "</div>"); ?>
                <?php echo form_open('transaksi/peminjaman/detail',[ 'class'=> 'role', 'id' => 'validform']) ?>
                
                        <div class="col-md-12">
                          <div class="col-sm-3">
                            <div class="form-group">
                            <label>No.Transaksi</label>
                            <input type="text" class="form-control" readonly required  name="id_transaksi" value="<?php echo $data; ?>" />
                          </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                            <label>Tanggal Pinjam</label>
                            <input type="text" class="form-control" required  name="tgl_pinjam" value="<?php echo $tgl_pinjam; ?>" />
                          </div>
                          </div>
                           <div class="col-sm-3">
                            <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input type="text" class="form-control" required  name="tgl_kembali" value="<?php echo $tgl_kembali; ?>" />
                          </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Status Peminjaman</label>
                              <input type="text" hidden class="form-control" name="status_pinjam" value="<?php  echo $status; ?>">
                            </div>
                          </div>
                          
                        </div>

                        <div class="col-md-12">

                         <div class="col-md-6">
              <div class="form-group">
                <select class="form-control select2" style="width: 100%;" name="id_siswa" required="">
                  <option selected="selected">Pilih Siswa / Anggota</option>
                  <?php  foreach ($optsiswa as $siswa): ?>
                  <option value="<?php echo $siswa['siswa_id']; ?>"> <?php echo $siswa['siswa_nama']; ?> </option>
                  <?php endforeach ?>
                </select>
              </div>
              </div>
                     
                      <div class="col-md-6">
                         <div class="form-group">
                
                <select class="form-control select2" style="width: 100%;" name="id_buku" required="">
                  <option selected="selected">Pilih Buku</option>
                  <?php  foreach ($optbuku as $buku): ?>
                  <option value="<?php echo $buku['buku_id']; ?>"> <?php echo $buku['buku_judul']; ?> </option>
                  <?php endforeach ?>
                </select>
              </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Jumlah</label>
                          <input type="text" name="jumlah" placeholder="jumlah" required="" class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-4">
                          <br>
                            <div class="form-group">
                            <button class="btn btn-success" type="submit" name="simpan"><span class="fa fa-floppy-o"></span> Simpan</button>
                            <button class="btn btn-default" onclick="history.back()" ><span class="fa fa-refresh"></span> Batal</button>
                          </div>
                          </div>
                <?php form_close() ?>
            </div>
            </div>
             <div class="col-md-12">
              <div class="box">
              <div class="box-header">
                  <?php echo $this->session->flashdata('Sukses'); ?>
                  <label>Data Peminjaman Buku</label>
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
                  <th>Judul Buku</th>
                  <th>Jumlah</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
                       
                      </div>
          </div>
        </div>
       </section>
      </div>
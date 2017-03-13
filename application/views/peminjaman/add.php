<?php $status='Dipinjam'; ?>
<div class="content-wrapper">
    <section class="content-header">
      <h1><span class="fa fa-tags fa-lg"></span> Tambah Peminjaman</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Transaksi </a></li>
        <li class="active">Tambah Transaksi Peminjaman Baru 
        
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
                <?php echo form_open('transaksi/peminjaman/add',[ 'class'=> 'role', 'id' => 'validform']) ?>
                        <div class="col-md-12">
                          <div class="col-sm-3">
                            <div class="form-group">
                            <label>No.Transaksi</label>
                            <input type="text" class="form-control" readonly required  name="idtemporari" value="<?php echo $data; ?>" />
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
                            <input type="date" class="form-control" required  name="tgl_kembali" value="<?php echo $tgl_kembali; ?>" />
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
              <label>Cari Siswa/ Anggota</label>
                <?php foreach ($cek as  $cek_r): ?>
                    <?php $cek_row = $cek_r['siswa_id']; echo $cek_row; ?>
                  <?php endforeach ?>
                <select class="form-control select2" style="width: 100%;" name="siswa_id" required>
                  <option selected="selected">Pilih Siswa / Anggota</option>
                  
                  <?php  foreach ($optsiswa as $siswa): ?>
                    <?php echo $sis = $siswa['siswa_id']; ?>
                    <?php if ($cek_row != $sis){ ?>
                    <option value="<?php echo $siswa['siswa_id']; ?>"> <?php echo $siswa['siswa_nama']; ?> </option>
                    <?php }?>
                  <?php endforeach ?>
                </select>
              </div>
              </div>
                     
                      <div class="col-sm-4">
                          <br>
                            <div class="form-group">
                            <button class="btn btn-success" type="submit" name="simpan"><span class="fa fa-floppy-o"></span> Simpan</button>
                            <button class="btn btn-default" onclick="history.back()" ><span class="fa fa-refresh"></span> Batal</button>
                          </div>
                          </div>    
                </div>
            <?php form_close() ?>
            </div>
          </div>
        </div>
       </section>
      </div>

    <!-- modal dari buku -->
    
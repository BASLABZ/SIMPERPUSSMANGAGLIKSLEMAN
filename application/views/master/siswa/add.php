
<div class="content-wrapper">
    <section class="content-header">
      <h1><span class="fa fa-users fa-lg"></span> Tambah Siswa / Aggota</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master </a></li>
        <li class="active">Tambah Siswa / Aggota 
        
        </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header"></div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php echo $this->session->flashdata('exist'); ?>
                <?php echo validation_errors( "<div class='alert alert-danger alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>", "</div>"); ?>
                <?php echo form_open( 'master/siswa/add',[ 'class'=> 'role', 'id' => 'validform']) ?>
                 <div class="form-group">
                   <label>Kode Siswa / Aggota </label>
                   <input  type="text" name="siswa_id" class="form-control" readonly value="<?php echo $data; ?> "  >
                 </div>
                 <div class="form-group">
                   <label>NIS</label>
                   <input type="text" class="form-control" name="NIS" placeholder="NIS (Nomor Induk Siswa)" required >
                 </div>
                 <div class="form-group">
                   <label>Nama Lengkap</label>
                   <input type="text" class="form-control" name="siswa_nama" placeholder="Nama Lengkap" required >
                 </div>
                 <div class="form-group">
                   <label>Jenis Kelamin</label>
                   <select class="form-control" name="gender" required="">
                     <option value="NULL">-Pilih Jenis Kelamin-</option>
                     <option value="Laki-Laki">Laki-Laki</option>
                     <option value="Perempuan">Perempuan</option>
                   </select>
                 </div>

                 <div class="form-group">
                   <label>Alamat</label>
                   <textarea class="form-control" placeholder="alamat" name="siswa_alamat" required=""></textarea>
                 </div>
                 <div class="form-group">
                   <label>Kontak</label>
                   <input type="text" class="form-control" name="siswa_kontak" placeholder="kontak" required="" />
                 </div>
                 <div class="form-group">
                  <button class="btn btn-success" type="submit" name="simpan"><span class="fa fa-floppy-o"></span> Simpan</button>
                  <button class="btn btn-default" onclick="history.back()" ><span class="fa fa-refresh"></span> Batal</button>
                 </div>
                <?php form_close() ?>
            </div>
            </div>
          </div>
        </div>
       </section>
      </div>

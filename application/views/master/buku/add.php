
<div class="content-wrapper">
    <section class="content-header">
      <h1><span class="fa fa-book fa-lg"></span> Tambah  Buku</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Master </a></li>
        <li class="active">Tambah  Buku </li>
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
                <?php echo form_open( 'master/buku/add',[ 'class'=> 'role', 'id' => 'validform']) ?>
                 <div class="form-group">
                   <label>Kode Buku </label>
                   <input  type="text" name="buku_id" class="form-control" readonly value="<?php echo $data; ?> "  >
                 </div>
                 <div class="form-group">
                   <label>Judul Buku </label>
                   <input type="text" class="form-control" name="buku_judul" placeholder="Judul Buku " required >
                 </div>
                 <div class="form-group">
                   <label>pengarang Buku </label>
                   <input type="text" class="form-control" name="buku_pengarang" placeholder="Pengarang Buku " required >
                 </div>
                 <div class="form-group">
                   <label>Keterangan Buku </label>
                   <textarea class="form-control" name="buku_keterangan" required=""></textarea>
                 </div>
                 <div class="form-group">
                   <label>Jumlah Buku </label>
                   <input type="text" class="form-control" name="jumlah" placeholder="Jumlah " required >
                 </div>
                 <div class="form-group">
                   <label>Tahn Terbit </label>
                   <input type="text" class="form-control" name="tahun_terbit" placeholder="Tahun Terbit " required >
                 </div>
                 <div class="form-group">
                   <label>Kategoroi Buku </label>
                  <select class="form-control" name="kategori_id">
                    <option value="NULL">-Pilih Kategori Buku-</option>
                    <?php foreach ($optkategori as $kategori):?>
                      <option value="<?php echo $kategori['kategori_id']; ?>"><?php echo $kategori['nama_kategori']; ?></option>
                    <?php endforeach; ?>
                  </select>
                 </div>
                 <div class="form-group">
                   <label>Penerbit Buku </label>
                  <select class="form-control" name="penerbit_id">
                    <option value="NULL">-Pilih Peberbit Buku-</option>
                   <?php foreach ($optpenerbit as $penerbit):?>
                    <option value="<?php echo $penerbit['penerbit_id']; ?>"><?php echo $penerbit['nama_penerbit']; ?></option>
                   <?php endforeach; ?>
                  </select>
                 </div>
                     <div class="form-group">
                   <label>No Rak</label>
                  <input type="text" class="form-control" name="no_rak" required="" placeholder="No Rak Buku">
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

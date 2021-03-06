<div class="content-wrapper">
    <section class="content-header">
      <h1><span class="fa fa-tags fa-lg"></span> Tambah Data Barang</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master </a></li>
        <li class="active">Tambah Data Barang 
        
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
                <?php echo form_open( 'master/inventory/add',[ 'class'=> 'role', 'id' => 'validform']) ?>
                 <div class="form-group">
                   <label>Kode Barang </label>
                   <input  type="text" name="id_barang" class="form-control" readonly value="<?php echo $data; ?> "  >
                 </div>
                 <div class="form-group">
                   <label>Nama Barang</label>
                   <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" required >
                 </div>
                 <div class="form-group">
                   <label>Keterangan / Kondisi Barang</label>
                   <textarea class="form-control" name="keterangan" class="keterangan / kondisi barang " required=""> </textarea>
                 </div>
                 <div class="form-group">
                   <label>Jumlah Barang</label>
                   <input type="text" class="form-control" name="jumlah" placeholder="jumlah barang" required >
                 </div>
                 <div class="form-group">
                   <label>Lokasi Barang</label>
                   <input type="text" class="form-control" name="lokasi" placeholder="lokasi barang" required >
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

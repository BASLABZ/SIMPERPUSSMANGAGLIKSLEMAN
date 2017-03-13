
<div class="content-wrapper">
    <section class="content-header">
      <h1><span class="fa fa-tags fa-lg"></span> Ubah Kategori Buku</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master </a></li>
        <li class="active">Ubah Kategori Buku</li>
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
                <?php 
                    foreach ($data as  $value) :
                      $kategori_id = $value['kategori_id'];
                      $nama_kategori = $value['nama_kategori'];
                     
                 ?>
                 <?php echo form_open( 'master/kategoribuku/prosesedit/'.$value['kategori_id'],[ 'class'=> 'role', 'id' => 'validform']) ?>
                 <div class="form-group">
                   <label>Kode Kategori </label>
                   <input  type="text" name="kategori_id" class="form-control" readonly value="<?php echo $kategori_id; ?>">
                 </div>
                 <div class="form-group">
                   <label>Nama Kategori</label>
                   <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori" required value="<?php echo $nama_kategori; ?>">
                 </div>
                
                 <div class="form-group">
                  <button class="btn btn-success" type="submit"><span class="fa fa-floppy-o"></span> Ubah</button>
                  <button class="btn btn-default" onclick="history.back()" ><span class="fa fa-refresh"></span> Batal</button>
                 </div>
                <?php form_close() ?>
              <?php endforeach ?>
            </div>
            </div>
          </div>
        </div>
       </section>
      </div>

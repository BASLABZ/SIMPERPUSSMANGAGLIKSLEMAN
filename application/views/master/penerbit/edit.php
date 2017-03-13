
<div class="content-wrapper">
    <section class="content-header">
      <h1><span class="fa fa-users fa-lg"></span> Ubah Penerbit Buku</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master </a></li>
        <li class="active">Ubah Penerbit Buku</li>
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
                      $penerbit_id = $value['penerbit_id'];
                      $nama_penerbit = $value['nama_penerbit'];
                     
                 ?>
                 <?php echo form_open( 'master/penerbit/prosesedit/'.$value['penerbit_id'],[ 'class'=> 'role', 'id' => 'validform']) ?>
                 <div class="form-group">
                   <label>Kode Penerbit </label>
                   <input  type="text" name="penerbit_id" class="form-control" readonly value="<?php echo $penerbit_id; ?>">
                 </div>
                 <div class="form-group">
                   <label>Nama Penerbit</label>
                   <input type="text" class="form-control" name="nama_penerbit" placeholder="Nama Penerbit" required value="<?php echo $nama_penerbit; ?>">
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

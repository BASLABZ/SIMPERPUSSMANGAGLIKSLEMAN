
<div class="content-wrapper">
    <section class="content-header">
      <h1><span class="fa fa-users fa-lg"></span> Ubah Pengguna</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master </a></li>
        <li class="active">Ubah Pengguna</li>
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
                      $user_id = $value['user_id'];
                      $user_nm = $value['user_nm'];
                      $username = $value['username'];
                      $password = $value['password'];
                      $alamat   = $value['user_alamat'];
                      $telp     = $value['user_hp'];
                    
                 ?>
                 <?php echo form_open( 'master/pengguna/prosesedit/'.$value['user_id'],[ 'class'=> 'role', 'id' => 'validform']) ?>
                 <div class="form-group">
                   <label>Kode Penggnua </label>
                   <input  type="text" name="user_id" class="form-control" readonly value="<?php echo $user_id; ?>">
                 </div>
                 <div class="form-group">
                   <label>Nama Lengkap</label>
                   <input type="text" class="form-control" name="user_nm" placeholder="Nama Lengkap" required value="<?php echo $user_nm; ?>">
                 </div>
                 <div class="form-group">
                   <label>Username</label>
                   <input type="text" class="form-control" name="username" placeholder="Username" required value="<?php echo $username; ?>">
                 </div>
                <div class="form-group">
                   <label>Password</label>
                   <input type="password" class="form-control" name="password" placeholder="Password" required value="<?php echo $password; ?>">
                 </div>
                 <div class="form-group">
                   <label>Alamat</label>
                   <textarea class="form-control" placeholder="Alamat" name="user_alamat"><?php echo $alamat; ?></textarea> 
                 </div>
                 <div class="form-group">
                   <label>Kontak</label>
                   <input type="text" class="form-control" placeholder="kontak" name="user_hp" required value="<?php echo $telp; ?>">
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

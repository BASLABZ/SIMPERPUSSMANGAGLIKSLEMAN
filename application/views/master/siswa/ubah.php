<div class="content-wrapper">
    <section class="content-header">
      <h1><span class="fa fa-users fa-lg"></span> Ubah Siswa / Aggota</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master </a></li>
        <li class="active">Ubah Siswa / Aggota</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header"></div>
            <div class="box-body">
                <?php echo $this->session->flashdata('exist'); ?>
                <?php echo validation_errors( "<div class='alert alert-danger alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>", "</div>"); ?>
                   <?php 
                    foreach ($data as  $value) :
                      $siswa_id     = $value['siswa_id'];
                      $NIS          = $value['NIS'];
                      $siswa_nama   = $value['siswa_nama'];
                      $siswa_alamat = $value['siswa_alamat'];
                      $kodeanggota  =  substr($siswa_id, 1);
                      $namakelas    = $value['namakelas'];
                      $jurusan      = $value['jurusan'];
                    
                 ?>
                 <form class="role" method="POST" enctype="multipart/form-data" action="<?php echo base_url('master/siswa/proses_ubah'); ?>">
                 <div class="form-group">
                   <label>Kode Siswa / Aggota </label>
                   <input  type="hidden" name="siswa_id" class="form-control" readonly value="<?php echo $siswa_id; ?> "  >
                   <div class="row">
                     <div class="col-md-4">
                        <select class="form-control select2" name="kelas">
                          <option value="01">Kelas 01</option>
                          <option value="02">Kelas 02</option>
                          <option value="03">Kelas 03</option>
                        </select>
                      </div>
                     <div class="col-md-4">
                       <select class="form-control select2" name="tahunajar">
                         <option value="13/14">2013/2014</option>
                         <option value="14/15">2014/2015</option>
                         <option value="15/16">2015/2016</option>
                         <option value="16/17">2016/2017</option>
                         <option value="17/18">2017/2018</option>
                         <option value="18/19">2018/2019</option>
                         <option value="19/20">2019/2020</option>
                         <option value="20/21">2020/2021</option>
                         <option value="21/22">2021/2022</option>
                         <option value="22/23">2022/2023</option>
                         <option value="23/24">2023/2024</option>
                         <option value="24/25">2024/2025</option>
                         <option value="25/26">2025/2026</option>
                         <option value="26/27">2026/2027</option>
                         <option value="27/28">2027/2028</option>
                         <option value="29/30">2029/2030</option>
                       </select>
                     </div>
                     <div class="col-md-4"><input type="text" class="form-control" placeholder="Isi Kode Anggota" value="<?php echo $kodeanggota; ?>"  name='kodeotomatis'></div>
                   </div>
                 </div>
                 <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Nama Kelas</label>
                         <input type="text" class="form-control" placeholder="isi dengan Nama Kelas" name="namakelas" value="<?php echo $namakelas; ?>">
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Jurusan</label>
                         <input type="text" class="form-control" placeholder="isi dengan Jurusan Siswa" name="jurusan" value="<?php echo $jurusan; ?>">
                       </div>
                     </div>
                   </div>
                   
                 <div class="form-group">
                   <label>NIS</label>
                   <input type="text" class="form-control" name="NIS" placeholder="NIS (Nomor Induk Siswa)" required value="<?php echo $NIS; ?>">
                 </div>
                 <div class="form-group">
                   <label>Nama Lengkap</label>
                   <input type="text" class="form-control" name="siswa_nama" placeholder="Nama Lengkap" required value="<?php echo $siswa_nama; ?>" >
                 </div>
                 <div class="form-group">
                   <label>Alamat</label>
                   <textarea class="form-control" placeholder="alamat" name="siswa_alamat" required=""><?php echo $siswa_alamat; ?></textarea>
                 </div>
                 <div class="form-group">
                   <label><span class="fa fa-upload"></span> Upload Foto</label>
                   <input type="file" name="foto">
                   <img style="margin-top: 10px;" class="img-responsive img-thumbnail" src="<?php echo base_url('resource/themes/default/upload'); ?>/<?php echo $value['foto']; ?>">

                   
                 </div>
                 <div class="form-group">
                  <button class="btn btn-success" type="submit"><span class="fa fa-floppy-o"></span> Simpan</button>
                  <button class="btn btn-default" onclick="history.back()" ><span class="fa fa-refresh"></span> Batal</button>
                 </div>
                </form>
              <?php endforeach ?>
            </div>
            </div>
          </div>
        </div>
       </section>
      </div>

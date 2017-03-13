
<div class="content-wrapper">
    <section class="content-header">
      <h1><span class="fa fa-user fa-lg"></span> Profil Pengguna</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pengguna </a></li>
        <li class="active">Profil Pengguna
        
        </li>
      </ol>
    </section>
    <!-- Main content -->
      <section class="content">
        <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive" src="<?php echo base_url('resource/themes/default/images/logo.jpg'); ?>" alt="User profile picture">

              <h3 class="profile-username text-center">Sistem Informasi Perpustakaan</h3>

              <p class="text-muted text-center">SMA NEGERI NGAGLIK</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                 <center><b>- Petugas Perpustakaan</b> </center> </a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
           
              <li class="active"><a href="#timeline" data-toggle="tab">Data Diri</a></li>
              <li><a href="#settings" data-toggle="tab">Pengaturan</a></li>
               <li><a href="#profil" data-toggle="tab">Profil</a></li>
            </ul>
            <div class="tab-content">
              
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                         <center><i class="fa fa-user fa-lg"></i> <?php echo $this->session->userdata('user_nm'); ?></center>
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                 
                  <!-- END timeline item -->
                  <!-- timeline item -->
                   <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time">Nama Lengkap <i class="fa fa-user"></i> </span>

                      <h3 class="timeline-header no-border"><?php echo $this->session->userdata('user_nm'); ?>
                      </h3>
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-lock bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time">Username <i class="fa fa-lock"></i> </span>

                      <h3 class="timeline-header no-border"><?php echo $this->session->userdata('username'); ?>
                      </h3>
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-map-marker bg-yellow"></i>
                    <div class="timeline-item">
                      <span class="time"><i class="fa  fa-map-marker"></i> Alamat</span>
                      <h3 class="timeline-header"><?php echo $this->session->userdata('user_alamat'); ?></h3>
                    </div>
                  </li>
                  <li>
                    <i class="fa  fa-phone bg-yellow"></i>
                    <div class="timeline-item">
                      <span class="time"><i class="fa  fa-phone"></i> Telp.</span>
                      <h3 class="timeline-header"><?php echo $this->session->userdata('user_hp'); ?></h3>
                    </div>
                  </li>
                 
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name" value="<?php echo $this->session->userdata('username'); ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Password Baru</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="tab-pane" id="profil">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name" value="<?php echo $this->session->userdata('user_nm'); ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $this->session->userdata('username'); ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                      <textarea class="form-control"><?php echo $this->session->userdata('user_alamat'); ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">No Telp.</label>
                      
                    <div class="col-sm-10"><input type="text" class="form-control" id="inputSkills" placeholder="Skills" value="<?php echo $this->session->userdata('user_hp'); ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-info">Ubah</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      </section>
      </div>

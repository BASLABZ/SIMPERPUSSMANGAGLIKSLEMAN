
<?php if ($error != null): ?>
  <script type="text/javascript">
    winload(function() {
      swal("<?php echo $error; ?>","", "warning");
    });
  </script>
<?php endif; ?>
<div class="login-box-body">
    <center>
    <img src="<?php echo base_url('resource/themes/default/images/logo.jpg'); ?>" class="img-responsive">
    </center>
  <div class="panel-heading">
    <p class="login-box-msg">SISTEM INFORMASI PERPUSTAKAAN<br> SMA N NGAGLIK</p>
  </div>
  <div class="panel-body">
  </div>
    <form action="<?php echo $action; ?>" class='role' method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" id="username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8"></div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit"  class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- load login here -->
<script>winload(function() { loader('auth'); }); </script>
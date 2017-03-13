
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISTEM INFORMASI PERPUSTAKAAN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('resource/themes/default/bootstrap/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('resource/themes/default/dist/css/AdminLTE.min.css'); ?> ">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('resource/themes/default/plugins/iCheck/square/blue.css'); ?>">
  <link href="<?php echo base_url('resource/themes/default/plugins/sweetalert/sweetalert.css'); ?>" rel="stylesheet"/>
  <script src="<?php echo base_url('resource/themes/default/plugins/sweetalert/sweetalert.min.js') ?>"></script>
  <script src="<?php echo base_url('resource/themes/default/main.js'); ?>"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
<?php echo $contents; ?>
<!-- jQuery 2.2.0 -->
<script src="<?php echo base_url('resource/themes/default/plugins/jQuery/jQuery-2.2.0.min.js'); ?> "></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('resource/themes/default/bootstrap/js/bootstrap.min.js'); ?> "></script>
<!-- iCheck -->
<script src="<?php echo base_url('resource/themes/default/plugins/iCheck/icheck.min.js'); ?> "></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>

</body>
</html>


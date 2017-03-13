
  <!-- /.content-wrapper -->
   <footer class="main-footer">
    <div class="pull-right hidden-xs">
    
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#">LIB SMA - MELISA</a>.</strong> All rights
    reserved.
  </footer>

 <div class="control-sidebar-bg"></div>
</div>
<script src="<?php echo base_url('resource/themes/default/plugins/sweetalert/sweetalert.min.js') ?>"></script>

<script src="<?php echo base_url('resource/themes/default/plugins/jQuery/jQuery-2.2.0.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('resource/themes/default/bootstrap/js/bootstrap.min.js'); ?> "></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url('resource/themes/default/plugins/morris/morris.min.js'); ?> "></script>
<!-- Sparkline -->
<script src="<?php echo base_url('resource/themes/default/plugins/sparkline/jquery.sparkline.min.js'); ?> "></script>
<!-- jvectormap -->
<!-- jQuery Knob Chart <script src="<?php //echo base_url('resource/themes/default/plugins/knob/jquery.knob.js'); ?> "></script> <script src="<?php //echo base_url('resource/themes/default/plugins/daterangepicker/daterangepicker.js'); ?> -->

<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<!-- datepicker -->
<script src=" <?php echo base_url('resource/themes/default/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>
<!-- Bootstrap WYSIHTML5  -->
<script src=" <?php  echo base_url('resource/themes/default/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>

<!-- Slimscroll -->
<script src=" <?php echo base_url('resource/themes/default/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src=" <?php echo base_url('resource/themes/default/plugins/fastclick/fastclick.js'); ?>"></script>
<!-- AdminLTE  App -->
<script src=" <?php echo base_url('resource/themes/default/dist/js/app.min.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('resource/themes/default/dist/js/demo.js'); ?> "></script>
<script src="<?php echo base_url('resource/themes/default/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('resource/themes/default/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('resource/themes/default/plugins/select2/select2.full.min.js'); ?>">
  </script>
<!-- this for logout -->
<script type="text/javascript">
// $(document).ready( function() {
// $("#txtEditor").Editor();                    
// });
</script>
<script type="text/javascript">
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
});
</script>
<script type="text/javascript">
  $("#logout").click(function(e) {
    e.preventDefault()
      swal({
      title : "",
      text : "Apa anda yakin akan keluar dari sistem ?",
          type : "warning",
          showCancelButton: true,
          confirmButtonColor: "orange",
          confirmButtonText: "Yes",
     },
  function(isConfirm){
    if (isConfirm) {
        window.location="<?php echo base_url('auth/logout'); ?>"; 
    } 
      })
  });
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
    $('.buku').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
       "scrollX": true,
         "orderCellsTop": true
    });
  });
</script>
  <script>
    $(".bukulist").DataTable({
      "scrollX": true
    });
    $('.filtertanggal').datepicker();
  </script>
</body>
</html>

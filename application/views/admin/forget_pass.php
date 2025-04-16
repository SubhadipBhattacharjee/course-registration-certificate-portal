<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Forgot Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('');?>/project/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('');?>/project/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('');?>/project/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Toastr CSS File -->
  <link rel="stylesheet" href="<?php echo base_url();?>project/admin/plugins/toastr/toastr.min.css" type="text/css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>SiteRank Tech Solutions</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><b><i>Your saved password  will be sent to your registered Email Id.</b></i></p>

      <form action="<?php echo base_url('admin/email/check_mail');?>" method="post" id="forget-pass">
        <div class="input-group mb-3">
          <input type="email" name="rec_email" class="form-control" placeholder="Registered Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <input type="submit" class="btn btn-primary btn-block" value="Recover Password">
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="<?php echo base_url('admin/login');?>">Login</a>
      </p>
      <!--<p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>-->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('');?>/project/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery validation -->
<script type="text/javascript" src="<?php echo base_url('');?>/project/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url('');?>/project/admin/dist/js/custom.js"></script>
<!-- JQuery Toaster-->
<script src="<?php echo base_url();?>project/admin/plugins/toastr/toastr.min.js" type="text/javascript"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('');?>/project/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('');?>/project/admin/dist/js/adminlte.min.js"></script>


<script>

<?php if($this->session->flashdata('rec-error')){  ?> 
Command: toastr["error"]("<i><?php echo $this->session->flashdata('rec-error'); ?></i>")
<?php } ?>

<?php if($this->session->flashdata('rec-success')){  ?> 
Command: toastr["success"]("<i><?php echo $this->session->flashdata('rec-success'); ?></i>")
<?php } ?>



toastr.options = {

     "closeButton": true,
     "debug": false,
     "newestOnTop": false,
     "progressBar": false,
     "positionClass": "toast-top-right",
     "preventDuplicates": false,
     "onclick": null,
     "showDuration": "300",
     "hideDuration": "1000",
     "timeOut": "4500",
     "extendedTimeOut": "1000",
     "showEasing": "swing",
     "hideEasing": "linear",
     "showMethod": "fadeIn",
     "hideMethod": "fadeOut"
}

</script>

</body>
</html>

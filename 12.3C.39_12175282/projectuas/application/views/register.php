<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<?echo form_open('login'); ?>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(''); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(''); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(''); ?>assets/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
        <?php echo form_open('login/register'); ?>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Nama Depan" required="required" autofocus="autofocus">
                    <label for="firstname">Nama Depan<span class="required">*</span></label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Nama Belakang" required="required">
                    <label for="lastname">Nama Belakang<span class="required">*</span></label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
                <label for="email">Email<span class="required">*</span></label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="contactno" id="contactno" name="contactno" class="form-control" placeholder="Nomor Kontak" required="required">
                    <label for="contactno">Nomor Kontak<span class="required">*</span></label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="address" id="address" name="address" class="form-control" placeholder="Alamat" required="required">
                    <label for="address">Alamat<span class="required">*</span></label>
                  </div>
                </div>
              </div>
            </div>
                  <div class="text-center">
                     <?php echo form_submit( 'submit', 'Register' , 'class = "btn btn-primary"'); ?>
            <?php echo form_close(); ?>
            <a class="d-block small mt-3" href="<?php echo site_url('login') ?>">Login Page</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(''); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>
</html>

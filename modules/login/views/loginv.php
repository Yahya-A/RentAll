<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css')?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <!-- <form action="../../index3.html" method="post"> -->

      <?php if ($this->session->flashdata('message')) {
        echo '<p class="warning">'.$this->session->flashdata('message').'</p>';
      }?>
      <?php echo form_open('auth/login');?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="username" value="<?php echo set_value('username')?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <p><?php echo form_error('username');?></p>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password')?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <p><?php echo form_error('password');?></p>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" value="Login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        <?php echo form_close();?>
      <p class="mb-0">
        <a href="<?php echo base_url('register')?>" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>

</body>
</html>

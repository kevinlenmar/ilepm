<!DOCTYPE html>
  <head>
    <title>ILEPM</title>
    <link rel="stylesheet" href="assets/loginCSS/bootstrap.min.css">
    <link rel="stylesheet" href="assets/loginCSS/font-awesome.css">
    <link rel="stylesheet" href="assets/loginCSS/ionicons.min.css">
    <link rel="stylesheet" href="assets/loginCSS/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/loginCSS/blue.css">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <b>ILEPM</b>
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="<?php echo base_url();?>login" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="username"/>
            <span class="text-danger"><?php echo form_error('username'); ?></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="password"/>
            <span class="text-danger"><?php echo form_error('password'); ?></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat" style="width: 320px">Sign In</button>
              <?php
                  echo '<small class="text-danger">'.$this->session->flashdata("error");
              ?>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
 <!-- <title>ILEPM(Log in)</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/loginCSS/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/loginCSS/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/loginCSS/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/loginCSS/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/loginCSS/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>ILEPM</b>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?php echo base_url();?>login" method="post">
      <div class="form-group has-feedback">
        <input type="username" class="form-control" placeholder="username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
    
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" style="width: 320px">Sign In</button>
        </div>
       
      </div>
    </form>

    <div class="social-auth-links text-center">
      

    </div>

   
    
  </div>
</div>
<script src="<?php echo base_url();?>assets/loginJS/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/loginJS/bootstrap.min.js"></script>
</body>
</html>

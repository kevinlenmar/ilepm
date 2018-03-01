<!DOCTYPE html>
  <head>
    <title>ILEPM</title>
    <link rel="stylesheet" href="assets/loginCSS/bootstrap.min.css">
    <link rel="stylesheet" href="assets/loginCSS/font-awesome.css">
    <link rel="stylesheet" href="assets/loginCSS/ionicons.min.css">
    <link rel="stylesheet" href="assets/loginCSS/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/loginCSS/blue.css">
    <style type="text/css">
      
    </style>
  </head>
  <body style="background-image: url(assets/dist/img/wat.png); background-repeat: no-repeat; background-size: 100%" class="hold-transition login-page" >
    
    <div class="login-box">
      <div class="form" style="background-color:maroon";>
       <h3 style="color:#ddd4ce; padding-top:20px;"><b><center>ILEPM</center></b></h3>
      <div class="login-logo" >
       
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
              <button type="submit" class="btn btn-primary btn-block btn-flat" style="width: 320px ;background-color: maroon">Sign In</button>
              <?php
                  echo '<small class="text-danger">'.$this->session->flashdata("error");
              ?>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </body>
</html>


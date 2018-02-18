<!DOCTYPE html>
<html>
<head>
  <title>ILEPM</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bower_components/jquery-ui-1.12.1/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" type="text/css" href="<?php echo base_url();?>assets/dist/css/myowncss/myowncss.css">
  <script src="<?php echo base_url();?>assets/bower_components/jquery-ui-1.12.1/jquery-1.12.4.js"></script>
  <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/bower_components/jquery-ui-1.12.1/jquery-ui.js"></script>
  <script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
  <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
  <script src="<?php echo base_url();?>assets/dist/js/jquery.validate.min.js"></script>
</head>  

<body class="hold-transition skin-blue fixed sidebar-mini">
  <div>
    <header class="main-header">
      <a href="<?php echo base_url();?>dashboard" class="logo">
        <span class="logo-lg"><b>ILEPM</b></span>
      </a>
      <nav class="navbar navbar-static-top">
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url().$this->session->userdata('name')->image; ?>" class="user-image">
                <span class="hidden-xs"><?php echo $this->session->userdata('name')->firstname, ' ', $this->session->userdata('name')->lastname; ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?php echo base_url().$this->session->userdata('name')->image; ?>" class="img-circle" alt="User Image"/>
                  <p>
                    <?php echo $this->session->userdata('name')->firstname, ' ', $this->session->userdata('name')->lastname; ?></span>
                    <small><?php echo $this->session->userdata('name')->department; ?></small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo base_url();?>profile" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url();?>signout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
  </div>


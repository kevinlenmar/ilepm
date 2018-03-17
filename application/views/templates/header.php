<!DOCTYPE html>
<html>
<head>
  <title>ILEPM</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/myowncss/myowncss.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bower_components/jquery-ui-1.12.1/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/myowncss/myowncss.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/jquery-confirm.min.css">
<script src="<?php echo base_url();?>assets/bower_components/jquery-ui-1.12.1/jquery-1.12.4.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/jquery-ui-1.12.1/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
<script src="<?php echo base_url();?>assets/dist/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/jquery.jeditable.mini.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/jquery-confirm.min.js"></script>
</head>  

<body class="hold-transition skin-blue fixed sidebar-mini">
  <div>
    <header class="main-header">
      <a href="<?php echo base_url();?>home" class="logo" style="background-color:maroon">
        <span class="logo-lg"><b>ILEPM</b>
        </span>
      </a>
      <nav class="navbar navbar-static-top" style="background-color:maroon">
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- <img src="<?php echo base_url().$this->session->userdata('name')->image; ?>" class="user-image"> -->
                <span class="hidden-xs"><?php echo $this->session->userdata('name')->firstname, ' ', $this->session->userdata('name')->lastname; ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header" style="background-color:maroon">
                  <!-- <img src="<?php echo base_url().$this->session->userdata('name')->image; ?>" class="img-circle" alt="User Image"/> -->
                  <p>
                    <?php echo $this->session->userdata('name')->firstname, ' ', $this->session->userdata('name')->lastname; ?></span>
                    <small><?php echo $this->session->userdata('name')->department; ?></small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-left">
                    <a class="btn btn-default btn-flat" data-toggle="modal"
                     data-target="#profModal">Profile</a>
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

  <div class="modal fade" id="profModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog" role="document" style="width: 450px">
      <div class="modal-content">
        <div class="modal-header">
          <table width="100%">
            <tr>
              <td>
                <h3 class="modal-title" id="exampleModalLabel"><i class="fa fa-address-book-o"></i> User Profile</h3>
              </td>
              <td>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-body">
          <table width="100%">
            <tr>
              <td>
               <h4>Employee ID:</h4>      
             </td>
             <td> 
              <?php echo $this->session->userdata('name')->username; ?>
            </td>
          </tr>
          <tr>
            <td>
             <h4>Full Name:</h4>      
           </td>
           <td> 
            <?php echo $this->session->userdata('name')->firstname, ' ', $this->session->userdata('name')->lastname; ?>
          </td>
        </tr>
        <tr>
         <td>
           <h4>Department:</h4>      
         </td>
         <td>
          <?php echo $this->session->userdata('name')->department; ?>
        </td>
      </tr>
      <tr>
       <td>
         <h4>Contact Number:</h4>      
       </td>
       <td>
        <?php echo $this->session->userdata('name')->contactnumber; ?>
      </td>
    </tr>
  </table>
</div>
<div class="modal-footer">
</div>  
</div>
</div>
</div>
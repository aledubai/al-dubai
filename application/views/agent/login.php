<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Vendor Login</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo base_url(); ?>assets/bootstrap4/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page"  style="background-image: url('../assets/images/login-back.jpg');
  background-repeat: no-repeat;
  background-size: cover;background-position: center;">
    <div class="login-box">
      <div class="login-logo">
        <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/LOGO-2.png" class="img-fluid"></a>
        <!-- <a href="#" class='text-white' >Al-Eizba</a> -->
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Agent Sign In</p>
        <?php $this->load->helper('form'); ?>
        <div class="row">
            <div class="col-md-12">
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
        </div>
        <?php
        $this->load->helper('form');
        $error = $this->session->flashdata('error');
        if($error)
        {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error; ?>                    
            </div>
        <?php }
        $success = $this->session->flashdata('success');
        if($success)
        {
            ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $success; ?>                    
            </div>
        <?php } ?>
        
        <form action="<?php echo base_url(); ?>agent/login/loginMe" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email" required />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            
             <div class="input-group">
                                       <input type="password" class="form-control" placeholder="Password" name="password" required  id="vendor_pass"/>
                                      <div class="input-group-append">
                                         <i id="vendor_eye" onclick="password_toggle('vendor_pass','vendor_eye')" class="btn btn-success fa fa-eye "></i> 
                                        
                                      </div>
                                  </div>

            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
           
            <div class="col-sm-12 ">
              <button type="submit" class="btn btn-primary btn-block btn-flat" value="Sign In" >Sign In</button>
            </div><!-- /.col -->
            
          </div>
          <div class="row">
           
            <div class="col-sm-12">
              <a hidden class="pull-right" href="<?= base_url('agent/register')?>">Register Now</a>
            </div>
            
          </div>
        </form>

        <!--<a href="<?php echo base_url() ?>forgotPassword">Forgot Password</a><br>-->
        
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js" type="text/javascript">
      

    </script>
    <script src="<?php echo base_url();?>assets/js/root-menu.js" type="text/javascript" ></script>
  </body>
</html>
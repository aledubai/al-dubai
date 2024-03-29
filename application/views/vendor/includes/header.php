<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <!-- <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dist/css/admin-style.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    
   
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img src="<?=base_url('assets/images/logo2.png');?>" width="50" ></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="<?=base_url('assets/images/logo2.png');?>" width="50" ><b style="font-size: large;">Al-Eizba</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">



            <!--Notfication Dropdown Menu Starts-->
            <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="notifications_icon">
              <i class="fa fa-bell-o" ></i>
            </a>
            <ul class="dropdown-menu ">
                <li class="header" style="display: inline-block;">Notification</li>
                <li class="header pull-right" style="display: inline-block; color: rgb(97, 167, 224);">View All</li>
                
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu" id="notification_ul_li">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!--Notfication Dropdown Menu Ends-->

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>vendor/setting/profile" class="btn btn-default btn-flat"><i class="fa fa-key"></i>Edit Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>vendor/login/logout" class="btn btn-warning btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <?php

          $isVendorLoggedIn = $this->session->userdata('isVendorLoggedIn');


          if($isVendorLoggedIn)
          {
            ?>
              <ul class="sidebar-menu">
            <li class="header">ADMIN</li>
           
            <li class="treeview">
              <a href="<?php echo base_url() ?>vendor/dashboard" >
                <i class="fa fa-dashboard"></i>
                <span> Dashboard </span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url() ?>vendor/property2" >
                <i class="fa fa-pie-chart"></i>
                <span> Property </span>
              </a>
            </li>
			 <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Salespipeline</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                
                <li><a href="<?php echo base_url() ?>vendor/salespipeline/directinquiry"><i class="fa fa-circle-o"></i> Direct Inquiry</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa fa-retweet"></i> <span>Agency</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?php echo base_url() ?>vendor/agency/managestaff"><i class="fa fa-circle-o"></i> Manage Agent</a></li>
                 
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa fa-retweet"></i> <span>Type</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?php echo base_url() ?>vendor/community"><i class="fa fa-circle-o"></i>Community</a></li>
                <li><a href="<?php echo base_url() ?>vendor/property_type"><i class="fa fa-circle-o"></i>Propert Type</a></li>
                <li><a href="<?php echo base_url() ?>vendor/query_result"><i class="fa fa-circle-o"></i>Query Result</a></li>
                 
              </ul>
            </li>
            

			<?php 
				/*<li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Salespipeline</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?php echo base_url() ?>vendor/salespipeline"><i class="fa fa-circle-o"></i> Contact's</a></li>
               <!--  <li><a href="<?php echo base_url() ?>vendor/salespipeline/leadmanagement"><i class="fa fa-circle-o"></i> Lead Management</a></li> -->
                <li><a href="<?php echo base_url() ?>vendor/salespipeline/directinquiry"><i class="fa fa-circle-o"></i> Direct Inquiry</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-list"></i> <span>Activity Task</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?php echo base_url() ?>vendor/activityplanner/task"><i class="fa fa-circle-o"></i> Activity Task</a></li>
                <li><a href="<?php echo base_url() ?>vendor/activityplanner/notes"><i class="fa fa-circle-o"></i> Activity Notes</a></li>
                <li><a href="<?php echo base_url() ?>vendor/activityplanner/email"><i class="fa fa-circle-o"></i> Activity Emails</a></li>
                <li><a href="<?php echo base_url() ?>vendor/activityplanner/log"><i class="fa fa-circle-o"></i> Activity Log's</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa fa-retweet"></i> <span>Agency</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?php echo base_url() ?>vendor/agency/managestaff"><i class="fa fa-circle-o"></i> Manage Agent</a></li>
                <li><a href="<?php echo base_url() ?>vendor/agency/manageteam"><i class="fa fa-circle-o"></i> Manage Team</a></li>
                <li><a href="<?php echo base_url() ?>vendor/agency/markettingportal"><i class="fa fa-circle-o"></i> Marketting Portal</a></li>
                <li><a href="<?php echo base_url() ?>vendor/agency/wataermarksetting"><i class="fa fa-circle-o"></i> Watermark Setting</a></li>
                <li><a href="<?php echo base_url() ?>vendor/agency/companyprofile"><i class="fa fa-circle-o"></i> Company Profile</a></li>
                <li><a href="<?php echo base_url() ?>vendor/agency/acencysetting"><i class="fa fa-circle-o"></i> Agency Setting</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <i class="fa fa fa-cog"></i> <span>Settings</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?php echo base_url() ?>vendor/setting/profile"><i class="fa fa-circle-o"></i>Profile</a></li>
                <li><a href="<?php echo base_url() ?>vendor/setting/manage_template"><i class="fa fa-circle-o"></i> Manage Templates</a></li>
                <li><a href="<?php echo base_url() ?>vendor/setting/mailing_lists"><i class="fa fa-circle-o"></i> Mailing Lists</a></li>
                <li><a href="<?php echo base_url() ?>vendor/setting/image_bank"><i class="fa fa-circle-o"></i> Image Bank</a></li>
                <li><a href="<?php echo base_url() ?>vendor/setting/floor_plan_bank"><i class="fa fa-circle-o"></i> Floor Plan Banks</a></li>
                <li><a href="<?php echo base_url() ?>vendor/setting/email_notification"><i class="fa fa-circle-o"></i> Email Notification</a></li>
                <li><a href="<?php echo base_url() ?>vendor/setting/password"><i class="fa fa-circle-o"></i> Password</a></li>
              </ul>
            </li>*/
			?>
           <li class="treeview">
              <a href="#">
                <i class="fa fa fa-cog"></i> <span>Settings</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?php echo base_url() ?>vendor/setting/profile"><i class="fa fa-circle-o"></i>Profile</a></li>
                <li><a href="<?php echo base_url() ?>vendor/setting/password"><i class="fa fa-circle-o"></i> Password</a></li>
              </ul>
            </li>
            
          </ul>
            <?php
          }else
          {
            ?>
              <ul class="sidebar-menu">
            <li class="header">Agent</li>
           
            <li class="treeview">
              <a href="<?php echo base_url() ?>agent/dashboard" >
                <i class="fa fa-dashboard"></i>
                <span> Dashboard </span>
              </a>
            </li>
             
           
          </ul>
            <?php
          }
          ?>
          <!-- sidebar menu: : style can be found in sidebar.less -->

          
        </section>
        <!-- /.sidebar -->
      </aside>


<script type="text/javascript">
    //Notification Dropdown Menu JavaScript
    $( document ).ready(function(){

      $("#notifications_icon").on('click',function(){
        $.ajax({
          url:"<?=base_url()?>vendor/notification/notification_list",
          method:"POST",
          data:{get_notification:''},
          dataType:"json",
          success:function(data)
          {
            $("#notification_ul_li").html(data);
          }
        });
      });

    });
</script>



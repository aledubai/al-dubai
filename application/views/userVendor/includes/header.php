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
    <script src="https://kit.fontawesome.com/1c3b263b91.js" crossorigin="anonymous"></script>
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
          <span class="logo-mini"><img src="<?=base_url('assets/images/favicon.png');?>"  ></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="<?=base_url('assets/images/LOGO-2.png');?>" width="116" ><b style="font-size: large;"></b></span>
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
                  <img src="<?php echo base_url(); ?>assets/dist/img/userAvatar.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/dist/img/userAvatar.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <!--div class="pull-left">
                      <a href="<?php echo base_url(); ?>vendor/dashboard/loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change Password</a>
                    </div-->
                    <div class="text-center">
                      <a href="<?php echo base_url(); ?>userVendor/login/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Log out</a>
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
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">USER</li>
           
            <li class="treeview">
              <a href="<?php echo base_url() ?>userVendor/dashboard" >
                <i class="fa fa-dashboard"></i>
                <span> Dashboard </span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url() ?>userVendor/property2" >
                <i class="fa fa-building"></i>
                <span> Property </span>
              </a>
            </li>
            

            <li class="treeview">
              <a href="#">
                <i class="fas fa-funnel-dollar"></i> <span>&nbsp;Salespipeline</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?php echo base_url() ?>userVendor/salespipeline"><i class="fa fa-circle-o"></i> Contact's</a></li>
                <li><a href="<?php echo base_url() ?>userVendor/salespipeline/leadmanagement"><i class="fa fa-circle-o"></i> Lead Management</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-tasks"></i> <span>Activity Task</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?php echo base_url() ?>userVendor/activityplanner/task"><i class="fa fa-circle-o"></i> Activity Task</a></li>
                <li><a href="<?php echo base_url() ?>userVendor/activityplanner/notes"><i class="fa fa-circle-o"></i> Activity Notes</a></li>
                <li><a href="<?php echo base_url() ?>userVendor/activityplanner/email"><i class="fa fa-circle-o"></i> Activity Emails</a></li>
                <li><a href="<?php echo base_url() ?>userVendor/activityplanner/log"><i class="fa fa-circle-o"></i> Activity Log's</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-briefcase"></i> <span>Agency</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?php echo base_url() ?>userVendor/agency/managestaff"><i class="fa fa-circle-o"></i> Manage Staff</a></li>
                <li><a href="<?php echo base_url() ?>userVendor/agency/manageteam"><i class="fa fa-circle-o"></i> Manage Team</a></li>
                <li><a href="<?php echo base_url() ?>userVendor/agency/markettingportal"><i class="fa fa-circle-o"></i> Marketting Portal</a></li>
                <li><a href="<?php echo base_url() ?>userVendor/agency/wataermarksetting"><i class="fa fa-circle-o"></i> Watermark Setting</a></li>
                <li><a href="<?php echo base_url() ?>userVendor/agency/companyprofile"><i class="fa fa-circle-o"></i> Company Profile</a></li>
                <li><a href="<?php echo base_url() ?>userVendor/agency/acencysetting"><i class="fa fa-circle-o"></i> Agency Setting</a></li>
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
                <li><a href="<?php echo base_url() ?>userVendor/setting/profile"><i class="fa fa-circle-o"></i>Profile</a></li>
                <li><a href="<?php echo base_url() ?>userVendor/setting/manage_template"><i class="fa fa-circle-o"></i> Manage Templates</a></li>
                <li><a href="<?php echo base_url() ?>userVendor/setting/mailing_lists"><i class="fa fa-circle-o"></i> Mailing Lists</a></li>
                <li><a href="<?php echo base_url() ?>userVendor/setting/image_bank"><i class="fa fa-circle-o"></i> Image Bank</a></li>
                <li><a href="<?php echo base_url() ?>userVendor/setting/floor_plan_bank"><i class="fa fa-circle-o"></i> Floor Plan Banks</a></li>
                <li><a href="<?php echo base_url() ?>userVendor/setting/email_notification"><i class="fa fa-circle-o"></i> Email Notification</a></li>
                <li><a href="<?php echo base_url() ?>userVendor/setting/password"><i class="fa fa-circle-o"></i> Password</a></li>
              </ul>
            </li>
			     
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


<script type="text/javascript">
    //Notification Dropdown Menu JavaScript
    $( document ).ready(function(){

      $("#notifications_icon").on('click',function(){
        $.ajax({
          url:"<?=base_url()?>userVendor/notification/notification_list",
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



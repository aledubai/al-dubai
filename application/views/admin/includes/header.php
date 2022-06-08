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
          <span class="logo-mini">SP</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b style="font-size: large;">Ale-izba</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
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
                    <!--div class="pull-left">
                      <a href="<?php echo base_url(); ?>admin/dashboard/loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change Password</a>
                    </div-->
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>admin/login/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
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
            <li class="header">ADMIN</li>
           
            <li class="treeview">
              <a href="<?php echo base_url() ?>admin/property" >
                <i class="fa fa-pie-chart"></i>
                <span> Property </span>
              </a>
            </li>

            <li hidden="" class="treeview">
              <a href="<?php echo base_url() ?>admin/language" >
                <i class="fa fa-language"></i>
                <span> Language </span>
              </a>
            </li>

            <!--Working-->
             <li class="treeview">
              <a href="#">
                <i class="fa fa-sitemap"></i> <span>Type</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?php echo base_url() ?>admin/types/buildingList"><i class="fa fa-circle-o"></i>Building List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/businessSecurity"><i class="fa fa-circle-o"></i>Business Security</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/cleaning"><i class="fa fa-circle-o"></i>Cleaning and Maintenance</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/commercialList"><i class="fa fa-circle-o"></i>Commercial List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/communityList"><i class="fa fa-circle-o"></i>Community List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/countNumber"><i class="fa fa-circle-o"></i>Count Numbers</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/developerList"><i class="fa fa-circle-o"></i>Developer List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/emirateList"><i class="fa fa-circle-o"></i>Emirate List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/featuresList"><i class="fa fa-circle-o"></i>Features List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/flooringList"><i class="fa fa-circle-o"></i>Flooring List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/healthList"><i class="fa fa-circle-o"></i>Health and Fitness List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/emailList"><i class="fa fa-circle-o"></i>Instant Email List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/kitchenList"><i class="fa fa-circle-o"></i>Laundry and Kitchen List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/leadList"><i class="fa fa-circle-o"></i>Lead and Purpose List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listAssign"><i class="fa fa-circle-o"></i>List Assigned</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listChecques"><i class="fa fa-circle-o"></i>List Cheques List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listContact"><i class="fa fa-circle-o"></i>List Contact List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listEmail"><i class="fa fa-circle-o"></i>List Email List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listFeature"><i class="fa fa-circle-o"></i>List Feature List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listFrequency"><i class="fa fa-circle-o"></i>List Frequency List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listFurnishing"><i class="fa fa-circle-o"></i>List Furnishing List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listLsm"><i class="fa fa-circle-o"></i>LSM List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listNationality"><i class="fa fa-circle-o"></i>Nationality List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listPropertyStatus"><i class="fa fa-circle-o"></i>Property Status List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listSecure"><i class="fa fa-circle-o"></i>List Secure List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listState"><i class="fa fa-circle-o"></i>State List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listTypeContact"><i class="fa fa-circle-o"></i>Type of Contact List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listMiscellaneous"><i class="fa fa-circle-o"></i>Miscellaneous List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listNotification"><i class="fa fa-circle-o"></i>Notification List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listPet"><i class="fa fa-circle-o"></i>Pet Policy</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listPortal"><i class="fa fa-circle-o"></i>List Portal</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listPorpertyType"><i class="fa fa-circle-o"></i>Property Type</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listPurpose"><i class="fa fa-circle-o"></i>List Purpose</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listFamily"><i class="fa fa-circle-o"></i>Recreation and Family</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listReminder"><i class="fa fa-circle-o"></i>Reminder Email</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listResidential"><i class="fa fa-circle-o"></i>Residential List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listRole"><i class="fa fa-circle-o"></i>List Role</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listSale"><i class="fa fa-circle-o"></i>Sale List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listSalutation"><i class="fa fa-circle-o"></i>Salutation List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listSublocation"><i class="fa fa-circle-o"></i>Sublocation List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listTechnology"><i class="fa fa-circle-o"></i>Technology List</a></li>
                <li><a href="<?php echo base_url() ?>admin/types/listVideo"><i class="fa fa-circle-o"></i>Video Host List</a></li>
              </ul>
            </li>
            <!--Working-->


            <li hidden="" class="treeview">
              <a href="<?php echo base_url() ?>admin/status" >
                <i class="fa fa-toggle-on"></i>
                <span> Status </span>
              </a>
            </li>
            <li hidden="" class="treeview">
              <a href="<?php echo base_url() ?>admin/type" >
                <i class="fa fa-sitemap"></i>
                <span> Types </span>
              </a>
            </li>
            <li hidden="" class="treeview">
              <a href="<?php echo base_url() ?>admin/label" >
                <i class="fa fa-thumb-tack"></i>
                <span> Label </span>
              </a>
            </li>

            <li hidden="" class="treeview">
              <a href="<?php echo base_url() ?>admin/feature" >
                <i class="fa fa-paw"></i>
                <span> Feature </span>
              </a>
            </li>

            <li hidden="" class="treeview">
              <a href="<?php echo base_url() ?>admin/country" >
                <i class="fa fa-globe"></i>
                <span> Country </span>
              </a>
            </li>

            <li hidden="" class="treeview">
              <a href="<?php echo base_url() ?>admin/state" >
                <i class="fa fa-map-marker"></i>
                <span> State </span>
              </a>
            </li>

            <li hidden="" class="treeview">
              <a href="<?php echo base_url() ?>admin/city" >
                <i class="fa fa-flag"></i>
                <span> City </span>
              </a>
            </li>

            <li hidden="" class="treeview">
              <a href="<?php echo base_url() ?>admin/area" >
                <i class="fa fa-cube"></i>
                <span> Area </span>
              </a>
            </li>

            <li hidden="" class="treeview">
              <a href="<?php echo base_url() ?>admin/agency" >
                <i class="fa fa-truck"></i>
                <span> Agency </span>
              </a>
            </li>

            <li hidden="" class="treeview">
              <a href="<?php echo base_url() ?>admin/agent" >
                <i class="fa fa-user"></i>
                <span> Agent </span>
              </a>
            </li>

            
			     
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
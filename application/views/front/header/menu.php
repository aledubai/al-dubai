<style type="text/css">
   /*only for google details restirict*/
   #google_translate_element select{width: 145px}
   #google_translate_element {height: 5px;}
   .goog-te-banner-frame.skiptranslate {
   display: none !important;
   } 
   #goog-gt-tt, .goog-te-balloon-frame{display: none !important;} 
   .goog-text-highlight { background: none !important; box-shadow: none !important;}
   .goog-logo-link{
	   display:none;
   }
   .goog-te-combo{
    text-align: left;
    font-weight: bold;
    background-color: #044f53;
    border-color: #044f53;
    position: relative;
    color: white;
   }
   body {
   top: 0px !important; 
   }
   .AleBoxes img{
		width:100%;
		height:200px;
		
   }
   /*only for google details restirict*/
   .modal {
   display: none; /* Hidden by default */
   position: fixed; /* Stay in place */
   z-index: 10; /* Sit on top */
   padding-top: 100px; /* Location of the box */
   left: 0;
   top: 0;
   width: 100%; /* Full width */
   height: 100%; /* Full height */
   overflow: auto; /* Enable scroll if needed */
   background-color: rgb(0,0,0); /* Fallback color */
   background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
   }
   /* Modal Content */
   .modal-content1 {
   /*background-color: #fefefe;
   margin: auto;
   padding: 20px;
   border: 1px solid #888;
   width: 80%;*/
   position: absolute;
   top: 3rem;
   right: 70px;
   z-index: 6;
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   width: 20rem;
   height: 23em;
   background-color: #222;
   -webkit-box-align: center;
   -ms-flex-align: center;
   align-items: center;
   -webkit-box-pack: center;
   -ms-flex-pack: center;
   justify-content: center;
   }
   .fbBtn1{
   font-size: .6rem;
   font-weight: 700;
   width: 100%;
   height: 2rem;
   padding: 0;
   cursor: pointer;
   letter-spacing: .5px;
   text-transform: uppercase;
   color: #fff;
   border: none;
   border-radius: .2rem;
   background-color: #3c5a98;
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-align: center;
   -ms-flex-align: center;
   align-items: center;
   -webkit-box-pack: space-evenly;
   -ms-flex-pack: space-evenly;
   justify-content: space-evenly;
   }
   .txt{
   color: white;
   }
   .smallTxt{
   font-size: 85%;
   font-weight: 800;
   }
   .logInBtn{
   font-size: .8rem;
   font-weight: 700;
   width: 100%;
   height: 2rem;
   padding: 0;
   cursor: pointer;
   letter-spacing: .5px;
   text-transform: uppercase;
   color: #fff;
   border: none;
   border-radius: .2rem;
   background-color: #28b16d;
   }
   .memberBtn{
   font-size: .8rem;
   font-weight: 700;
   width: 100%;
   height: 2rem;
   padding: 0;
   cursor: pointer;
   letter-spacing: .5px;
   text-transform: uppercase;
   border-radius: .2rem;
   border: 1px solid #fff;
   background-color: transparent;
   color: #fff;
   }

   .userLogin input[type='password']::placeholder
    {   
        text-align: left !important;  
    }
	.cursor_pointer{
		cursor:pointer;
	}
   @media (min-width: 992px)
   {
	.navbar img.fullscreen {
		display:block;
	}
	.navbar img.smallscreen {
		display:none;
	}
	
	
   } 
   @media (max-width: 992px)
   {
	   #nav-school,#nav-restaurant,#nav-hospitals,#nav-parks{
		height:600px !important;
		overflow:auto:
	}
  .listing{padding: 12px !important;}
	.navbar img.fullscreen {
		display:none;
	}
	.navbar img.smallscreen {
		display:block;
	}
   }
 
 @media (max-width: 500px) 
  {
    #modalLog {
      right: 25px;
    }
  } 


   
  
  
</style>
 
   <div class="mycontainer">
      <div class="row justify-content-between p-2" style="background-color: #044f53">
		<div class="col-6">
		   <a href="#" id="language" class="hormenu_a">
                              <span id="w3google-translater" >
                                 <!--  Add a <div> element with the id "google_translate_element" -->
                                 <div id="google_translate_element"> </div>
                                 <script type="text/javascript">
                                    function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({pageLanguage: 'en' ,includedLanguages : 'ar,en'}, 'google_translate_element');
                                    }
                                 </script>
                                 <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                              </span>
                           </a>
		</div>
		<div class="col-6">
		   <ul class="navbar-nav ml-auto aleizba_li mr-5">
			 <?php
                           /*echo "<pre>";
                           print_r($_SESSION);
                           echo "</pre>";*/
                           if($this->session->userdata('isUserLoggedIn') || $this->session->userdata('isVendorLoggedIn'))
                           {
                           ?>
                        <li class="text-white text-right cursor_pointer">


                          <!-- Small button groups (default and split) -->
                           <div class="dropdown">
                            <button class="btn btn-sm tn-secondary dropdown-toggle menu-bg text-white" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <?php
                                if($this->session->userdata('isUserLoggedIn'))
                                {
                                  ?>
                                    <a class="dropdown-item" href="<?=base_url('/userVendor')?>">Manage Account</a>
                                  <?php
                                }else if($this->session->userdata('isVendorLoggedIn'))
                                {
                                   ?>
                                    <a class="dropdown-item" href="<?=base_url('/vendor')?>">Manage Account</a>
                                  <?php
                                }
                              ?>
                               
                              <a class="dropdown-item" href="<?=base_url()?>Homenew/logout" onclick="return confirm('Are You Sure You Want To Log Out! ')" class="text-white"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
                            </div>
                          </div>
                        </li>
                        <?php
                           }else
                           {
                               ?>
                        <li class="text-white text-right cursor_pointer" name="myBtn" id="myBtn" ><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Log In</li>

                      </ul>
					  <div id="myModal" class="modal txt menu_login_modal">
                          <div class="modal-content1" id="modalLog">
                            <span class="close" onclick="close_modal()" style="margin-top: 15px;">&times;</span>
                            <form action="<?php echo base_url(); ?>homenew/loginMe" method="post" class="userLogin">
                              <div class="row">
                                <!-- Success Msg Code-->
                                <div class="col-sm-12">
                                  <!-- Flashdata Code-->
                                  <div class="text-center text-danger">
                                    <?php echo validation_errors(); ?>
                                      
                                  </div>
                                  <?php
                                     $this->load->helper('form');
                                     $error = $this->session->flashdata('errorLogin');
                                     if($error)
                                     {
                                     ?>

                                      <script type="text/javascript">
                                        var modal = document.getElementById("myModal");
                                        modal.style.display = "block";
                                      </script>
                                  <div class="alert alert-danger alert-dismissable">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                     <?php echo $this->session->flashdata('errorLogin'); ?>                    
                                  </div>
                                  <?php } ?>
                                  <?php  
                                     $success = $this->session->flashdata('success');
                                     if($success)
                                     {
                                     ?>
                                  <div class="alert alert-success alert-dismissable">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                     <?php echo $this->session->flashdata('success'); ?>
                                  </div>
                                  <?php } ?>
                                  <!-- Flashdata Code Ends-->
                                </div>
                                <!-- Success Msg Code-->
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="text-center py-2">
                                    <a href="<?php echo base_url();?>">
                                    <img src="<?php echo base_url();?>assets/images/LOGO-2.png" class="" style="width: 60%;"></a>
                                  </div>
                                  <div class="text-center my-1">
                                    <input type="Email" name="email" id="email" class="form-control" placeholder="Email*" required="required">
                                  </div>
                                  <div class="my-2">
                                  
                                  <div class="input-group">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="password*" required="required">
                                      <div class="input-group-append">
                                         <i id="login_eye" onclick="password_toggle('password','login_eye')" class="btn btn-success fa fa-eye "></i> 
                                        
                                      </div>
                                  </div>
                                  </div>
                                  <div class="my-2">
                                    <button type="Submit" class="btn btn-success logInBtn" id="logInBtn">Log In</button>
                                  </div>
                                  <div class="my-2 smallTxt">
                                    <div class="row">
                                      <div class="col-md-6">
                                        <small>
                                          <input type="checkbox" checked name="rememberMe" value="rememberMe"> &nbsp; Remember Me
                                        </small>
                                      </div>
                                      <div class="col-md-6">
                                        <small style="float: right;">Forgot Password?</small>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="my-2 text-center">Are you new to Al-Eizba?</div>
                                  <div class="my-3">
                                    <button type="button" class="memberBtn"><a href="<?php echo base_url();?>sign_Up" style="color: white">Become a free member</a></button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>

                        
                        <?php
                           }
                           
                           ?>
		   </ul>
		</div>
	  </div>
	  <section>
   <nav class="navbar navbar-expand-lg navbar-light ale-dark justify-content-between">
      <a href="<?=base_url();?>">
	  <img src="<?=base_url();?>assets/images/LOGO-1.png" class="fullscreen" style="width: 80%;">
	  <img src="<?=base_url();?>assets/images/LOGO-2.png" class="smallscreen" style="width: 80%;">
	  </a>
       <!-- <a class="navbar-brand" href="#">info@aleizba.com</a>
         <a class="navbar-brand" href="#">+97-154-587-1570</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a id="find_home" class="nav-link" href="<?=base_url();?>propertylist">Find a Home</a>
            </li>
            <li class="nav-item">
               <a id="find_home" class="nav-link" href="<?=base_url();?>companies">Find Agency</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=base_url();?>about">About Us</a>
            </li>
            <!--Hidden Dropdown-->
            <li hidden="" class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Meet a Al-Eizba
               </a>
               <div class="dropdown-menu p-0 m-0" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item cities" href="#">Location</a>
                  <a class="dropdown-item cities" href="#">Name</a>
                  <a class="dropdown-item cities" href="#">Office</a>
               </div>
            </li>
            <!--Hidden Dropdown-->
            <li class="nav-item">
               <a class="nav-link" href="<?=base_url();?>payment_calculator">Payment Calculator</a> 
            </li>
            <!--Hidden Dropdown-->
            <li hidden="" class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Mortgage Calculator
               </a>
               <div class="dropdown-menu p-0 m-0" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item cities" href="#">Payment Calculator</a>
                  <a class="dropdown-item cities" href="#">Land Transfer Tax Calculator</a>
                  <a class="dropdown-item cities" href="#">Affordability calculator</a>
               </div>
            </li>
            <!--Hidden Dropdown-->
            <li class="nav-item">
               <a class="nav-link" href="<?=base_url();?>vendor/login">Vendor Portal</a> 
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?=base_url();?>agent/login">Agent Portal</a> 
            </li>
            <!--Hidden Dropdown-->
            <li hidden="" class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Ideas & How to
               </a>
               <div class="dropdown-menu p-0 m-0" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item cities" href="#">Living Room Blog</a>
                  <a class="dropdown-item cities" href="#">Tips for Buyers</a>
                  <a class="dropdown-item cities" href="#">Commercial Resources</a>
               </div>
            </li>
            <!--Hidden Dropdown-->
            <!--Hidden Bookmarks-->
            <li hidden class="nav-item">
               <a class="nav-link"  href="#"><i class="fa fa-bell notification " aria-hidden="true"></i></a>
            </li>
            <li hidden class="nav-item"> 
               <a class="nav-link" href="#"><i class="fa fa-bookmark bookmark" aria-hidden="true"></i></a>
            </li>
            <li hidden class="nav-item">
               <a class="nav-link" href="#"><i class="fa fa-heart heart" aria-hidden="true"></i></a>
            </li>
            <!--Hidden Bookmarks-->
         </ul>
      </div>
   </nav>
    
</section>
 
<!--Modal Script Start-->
<script>
   // Get the modal
   var modal = document.getElementsByClassName("modal");
   // Get the button that opens the modal
   
   // Get the <span> element that closes the modal
   

   if(document.getElementsByClassName("close"))
   {
    var span = document.getElementsByClassName("close");
    span.onclick = function() {
    modal.style.display = "none";
    }
   }
   // When the user clicks the button, open the modal 
   if(document.getElementById("myBtn"))
   {
    var btn = document.getElementById("myBtn");
    btn.onclick = function() {
     var modal = document.getElementById("myModal");
     modal.style.display = "block";
   }
   }
     
   // When the user clicks on <span> (x), close the modal
  
   // When the user clicks anywhere outside of the modal, close it
   window.onclick = function(event) {
     if (event.target == modal) {
       modal.style.display = "none";
     }
   }
   //document.cookie = "googtrans=/ar";
   
</script>
<!--Modal Script End-->
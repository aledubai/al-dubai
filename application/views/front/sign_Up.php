<!--new homw page main content start here-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ale_style.css">
<style type="text/css">
   body {
   background-color: #f2f2f2;
   }
   h4
   {
   font-weight: bold;
   }
</style>
<style type="text/css">
  #pswd_info .valid,
  #fname_info .valid,
  #email_info .valid,
  #mobile_info .valid
  {
    color:green;
  }
  #pswd_info .invalid ,
  #fname_info .invalid ,
  #mobile_info .invalid ,
   #email_info .invalid
  {
    color:red;
  }
           #pswd_info,
           #fname_info,
           #mobile_info,
           #email_info {
       position: absolute;
        
       right: 50px;
       padding: 15px;
       background: #fefefe;
       font-size: .875em;
       border-radius: 5px;
       box-shadow: 0 1px 3px #ccc;
       border: 1px solid #ddd;
       z-index: 10;
}
#pswd_info h4,
 #email_info h4 ,
 #fname_info h4 ,
 #mobile_info h4 {
   margin:0 0 10px 0;
   padding:0;
   font-weight:normal;
   font-size: 14px;
   text-align: left;
}
#pswd_info ul,
 #email_info ul,
 #fname_info ul,
 #mobile_info ul {
   text-align: left;
}
#pswd_info::before ,
#fname_info::before ,
#email_info::before ,
#mobile_info::before {
   content: "\25B2";
   position:absolute;
   top:-12px;
   left:45%;
   font-size:14px;
   line-height:14px;
   color:#ddd;
   text-shadow:none;
   display:block;
}
</style>
 
 
<section class="ale_signUp">
   <div class="container-fluid wrap-container">
      <div class="row">
         <div class="col-md-12 text-center text-white padMY">
            <h1 class="Bannertext"><strong>Become a Free Member</strong></h1>
         </div>
         <!-- padMY -->
      </div>
   </div>
</section>

<section hidden="">
   <div class="container-fluid wrap-container">
      <div class="row">
         <div class="col-md-6">
            <div class="row">
               <div class="col-md-6 text-center text-white">
                  <h1 class="mem_h1"><strong>Already a member?</strong></h1>
               </div>
               <div class="col-md-6 text-center text-white">
                  <button class="loginBtn">Login</button> 
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section>
   <div class="container-fluid wrap-container">
      <form action="<?=base_url()?>homenew/add_signUp" method="POST" id="singUpForm" enctype="multipart/form-data" autocomplete="off">
         <div class="row">
            <div class="col-md-6 col-xs-12" style="padding: 2rem;">
               <div class="my-2">
                  <h5>Register Now, It's Free!</h5>
               </div>
               <div class="my-2">
                  <p>Post your properties on Bayut.com and directly exhibit them to thousands of potential investors, tenants, buyers agents & brokers and other interested parties.</p>
               </div>
               <div class="my-2">
                  <p>Save your favourite properties to your personal dashboard to view them later at your convenience.</p>
               </div>
               <div class="my-2">
                  <p>Use Bayut.com's integrated e-mail facility to track your potential buying & rental leads.</p>
               </div>
               <div class="my-2">
                  <p>Set-up property email alerts providing you with the latest listings of properties instantly as they appear on Bayut.com.</p>
               </div>
               <div class="my-2">
                  <p>Search for the exact kind of property you are looking for, including hundreds of developments, residential & commercial properties, homes, villas, apartments, plots, shops, offices, complete buildings & floors, warehouses, factories and labour camps.</p>
               </div>
               <div class="my-2">
                  <p>If you would like to advertise more properties or you are a real estate agency, please contact us at (+971) 4 4220098 for details regarding advertising packages.</p>
               </div>
            </div>
            <div class="col-md-6 col-xs-12" id="">
              
              <!--Facebook Button Hidden-->
               <div hidden="" class="my-2">
                  <button class="fbBtn">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                        <path data-name="Path 2764" fill="#fff" d="M24 12a12 12 0 1 0-13.88 11.86v-8.4H7.08V12h3.05V9.36c0-3.01 1.79-4.67 4.53-4.67a18.46 18.46 0 0 1 2.68.23v2.96h-1.51a1.73 1.73 0 0 0-1.96 1.87V12h3.33l-.53 3.47h-2.8v8.38A12 12 0 0 0 24 12z"></path>
                     </svg>
                     Register with Facebook
                  </button>
               </div>
               <!--Facebook Button Hidden-->
               <div class="signUpCol" style="height: unset;" >
                <div class="row">
    <!-- Success Msg Code-->
                <div class="col-sm-12">
                    <!-- Flashdata Code-->
                    <?php
                      if(validation_errors())
                      {
                        ?>
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="text-center text-danger">
                               <?php echo validation_errors(); ?>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <?php
                      }
                    ?>
                    
                    
                    <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error_signup');
                    if($error)
                    {
                    ?>
                    <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error_signup'); ?>                    
                    </div>
                    <?php } ?>
                    
                    <!-- Flashdata Code Ends-->
                </div>
                <!-- Success Msg Code-->
             </div>
                <div class="row">
                <div class="col-sm-12">
                  <?php  
                    $success = $this->session->flashdata('success_signup');
                    if($success)
                    {
                    ?>
                    <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success_signup'); ?>
                    </div>
                    <?php } ?>
                </div>
                
              </div>
                  <div class="my-2">
                     <input type="text" class="form-control" name="fname" id="fname" value="<?php echo set_value('fname'); ?>" placeholder="Name*" data-toggle="tooltip" data-placement="top"   title="Be at least 4 characters" >
                  </div>

                    <div id="fname_info" style="display: none;">
                      <h4>Name must meet the following requirements:</h4>
                      <ul>
                       <li id="fname_length" class="invalid">Be at least <strong>4 characters</strong></li>
                      </ul>
                       </div>

                  <div class="my-3">
                     <input type="email" class="form-control" name="email" id="u_email" value="<?php echo set_value('email'); ?>" placeholder="Email*"  data-toggle="tooltip" data-placement="top"   title="Valid Email &#013; Be at least 6 characters">
                    
                      </div>
                      <div id="email_info" style="display: none;">
                      <h4>Email must meet the following requirements:</h4>
                      <ul>
                      <li id="emailvalid" class="invalid">Valid <strong>Email</strong></li>
                      <li id="emaillength" class="invalid">Be at least <strong>6 characters</strong></li>
                      </ul>
                       </div>
                       

                  <div class="my-2">
                     <label class="signUptxt">This will be your login/username at Al-Eizba.com.</label>
                  </div>
                  <div class="my-3">
                    <div class="input-group">
                          <input type="password" value="<?php echo set_value('password'); ?>" class="form-control" name="password" id="pass" placeholder="Password*" maxlength="20"  >
                        <div class="input-group-append">
                           <i id="signup_eye" onclick="password_toggle('pass','signup_eye')" class="btn btn-success fa fa-eye "></i> 
                          
                        </div>
                    </div>

                 
                  </div>


<div id="pswd_info" style="display: none;">
<h4>Password must meet the following requirements:</h4>
<ul>
<li id="letter" class="invalid">At least <strong>one letter</strong></li>
<li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
<li id="number" class="invalid">At least <strong>one number</strong></li>
<li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
</ul>
 </div>


                  
                  <div class="my-4">
                     <input type="text" class="form-control" name="phone" id="u_mobile" placeholder="Phone No"  maxlength="14" value="<?php echo set_value('phone'); ?>"  >
                     <div id="mobile_info" style="display: none;">
                      <h4>Mobile must meet the following requirements:</h4>
                      <ul>
                      <li id="mobilevalid" class="invalid">Valid <strong>Mobile</strong></li>
                      <li id="mobilelength" class="invalid">Be at least <strong>12 characters</strong></li>
                      </ul>
                       </div>
                  </div>
                   <div class="my-2">
                     <label class="signUptxt">Enter the phone number with Area Code, Example:+971 4 1234567</label>
                  </div>
                  <div class="my-4">
                     <select class="form-control" name="signUpAgent" id="signUpAgent" tabindex="2" >
                        <option value="">Signing Up As*</option>
                        <!--Individual-->
                        <option value="1" <?php if(set_value('signUpAgent')==1){ echo "selected";} ?> >Agent/Broker</option>
                        <option value="2" <?php if(set_value('signUpAgent')==2){ echo "selected";} ?>>Owner</option>
                        <option value="3" <?php if(set_value('signUpAgent')==3){ echo "selected";} ?>>Tenant/Investor</option>
                        <option value="4" <?php if(set_value('signUpAgent')==4){ echo "selected";} ?>>Agency/Brokerage</option>
                        <option value="5" <?php if(set_value('signUpAgent')==5){ echo "selected";} ?>>Appraiser</option>
                        <option value="6" <?php if(set_value('signUpAgent')==6){ echo "selected";} ?>>Builder</option>
                        <option value="7" <?php if(set_value('signUpAgent')==7){ echo "selected";} ?>>Corporate Investor</option>
                        <option value="8" <?php if(set_value('signUpAgent')==8){ echo "selected";} ?>>Developer</option>
                        <option value="9" <?php if(set_value('signUpAgent')==9){ echo "selected";} ?>>Listing Administrator</option>
                        <option value="10" <?php if(set_value('signUpAgent')==10){ echo "selected";} ?>>Mortgage Broker</option>
                        <option value="11" <?php if(set_value('signUpAgent')==11){ echo "selected";} ?>>Property/Asset Manager</option>
                        <option value="12" <?php if(set_value('signUpAgent')==12){ echo "selected";} ?>>Property/Asset Manager</option>
                        <option value="13" <?php if(set_value('signUpAgent')==13){ echo "selected";} ?> >Researcher</option>
                        <!--Company-->
                     </select>
                  </div>
                  <div class="my-2">
                     <input type="checkbox" <?php if(set_value('signUpNameRobot')==1){ echo "checked";} ?> id="signUpNameRobot" name="signUpNameRobot" value="1">
                     <label for="signUpNameRobot">&nbsp;I am not a robot</label>
                  </div>
                  <div class="my-2">
                     <input type="checkbox" <?php if(set_value('signUpNameTerms')==1){ echo "checked";} ?> id="signUpNameTerms" name="signUpNameTerms" value="1">
                     <label for="signUpNameTerms">&nbsp;I have read and I agree to the Al-Eizba.com <a href="<?php echo base_url();?>terms_and_conditions" data-toggle="tooltip" data-placement="top" data-placement="left" title="Read Terms and Conditions Click Here." >Terms and Conditions</a></label>
                  </div>
                  <div class="my-2">
                     <input type="checkbox" id="signUpNameUpdates" name="signUpNameUpdates" value="1" <?php if(set_value('signUpNameUpdates')==1){ echo "checked";} ?>  >
                     <label for="signUpNameUpdates">&nbsp;I would like to receive notifications about newsletters and updates.</label>
                  </div>
                  <div class="my-2">
                     <button type="submit" class="btn btn-success registerBtn" name="signUpNameRegister" id="signUpNameRegister" value="Submit">Register</button>
                  </div>
                </div>
            </div>
         </div>
      </form>




   </div>
</section>
<script type="text/javascript">

 
    $('[data-toggle="tooltip"]').tooltip()
 
 
    function registration_disable()
    {
      $("#signUpNameRegister").prop( "disabled", true );
    }
    function registration_enable()
    {
      $("#signUpNameRegister").prop( "disabled", false );
    }

 

    $('#u_email').keyup(function() {

       var email = $(this).val();
         //validate the length
          var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

           if ( email.length < 6 ) {
               $('#emaillength').removeClass('valid').addClass('invalid');
               registration_disable();
           } else {
               $('#emaillength').removeClass('invalid').addClass('valid');
               registration_enable();
           }

            //validate letter
           if ( emailReg.test(email) ) {
               $('#emailvalid').removeClass('invalid').addClass('valid');
               registration_enable();
           } else {
               $('#emailvalid').removeClass('valid').addClass('invalid');
               registration_disable();
           }

    }).focus(function() {

        $('#email_info').show();
      }).blur(function() {
           $('#email_info').hide();
       });
 $('#fname').keyup(function() {
    var fname = $(this).val();
         //validate the length
          var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

           if ( fname.length < 4 ) {
               $('#fname_length').removeClass('valid').addClass('invalid');
               registration_disable();
           } else {
               $('#fname_length').removeClass('invalid').addClass('valid');
               registration_enable();
           }
         }).focus(function() {
          $('#fname_info').show();
        }).blur(function() {
          $('#fname_info').hide();
        });

      $('#u_mobile').keyup(function() {

       var u_mobile = $(this).val();
         //validate the length
          var phoneno = /^\d{12}$/;

           if ( u_mobile.length < 12  ) {
               $('#mobilelength').removeClass('valid').addClass('invalid');
               registration_disable();
           }else if ( u_mobile.length  > 14  ) {
               $('#mobilelength').removeClass('valid').addClass('invalid');
               registration_disable();
           } else {
               $('#mobilelength').removeClass('invalid').addClass('valid');
               registration_enable();
           }

            //validate letter
           if ( u_mobile.match(phoneno) ) {
               $('#mobilevalid').removeClass('invalid').addClass('valid');
               registration_enable();
           } else {
               $('#mobilevalid').removeClass('valid').addClass('invalid');
               registration_disable();
           }

    }).focus(function() {

        $('#mobile_info').show();
      }).blur(function() {
           $('#mobile_info').hide();
       });
       $('#pass').keyup(function() {
           var pswd = $(this).val();

           //validate the length
           if ( pswd.length < 8 ) {
               $('#length').removeClass('valid').addClass('invalid');
               registration_disable();
           } else {
               $('#length').removeClass('invalid').addClass('valid');
               registration_enable();
           }

           //validate letter
           if ( pswd.match(/[A-z]/) ) {
               $('#letter').removeClass('invalid').addClass('valid');
               registration_enable();
           } else {
               $('#letter').removeClass('valid').addClass('invalid');
               registration_disable();
           }

           //validate capital letter
           if ( pswd.match(/[A-Z]/) ) {
               $('#capital').removeClass('invalid').addClass('valid');
               registration_enable();
           } else {
               $('#capital').removeClass('valid').addClass('invalid');
               registration_disable();
           }

           //validate number
           if ( pswd.match(/\d/) ) {
               $('#number').removeClass('invalid').addClass('valid');
               registration_enable();
           } else {
               $('#number').removeClass('valid').addClass('invalid');
                registration_disable();

           }
       }).focus(function() {

        $('#pswd_info').show();


       }).blur(function() {
           $('#pswd_info').hide();
       });
 
       </script>
<!--End-->
 
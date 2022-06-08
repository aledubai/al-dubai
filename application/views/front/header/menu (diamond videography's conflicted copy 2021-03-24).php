<style type="text/css">

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
    right: 150px;
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
 
</style>
<section>
 <!-- <div id="google_translate_element"></div>
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
  }
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

 
<script type="text/javascript">


 $(document).ready(function(){
     $("#language_checkbox").click(function(){
      var lang = '';
  if ($(this).is(":checked"))
  {
    
    var lang = 'Arabic';
        console.log("checked");
   }else{

    var lang = 'English';
    console.log("not checked");


    
   }

    var $frame = $('.goog-te-menu-frame:first');
      if (!$frame.size()) {
        alert("Error: Could not find Google translate frame.");
         
      }
      $frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();
  });



   });



</script>
<script type="text/javascript">
    $('.translation-links a').click(function() {
      var lang = $(this).data('lang');
      var $frame = $('.goog-te-menu-frame:first');
      if (!$frame.size()) {
        alert("Error: Could not find Google translate frame.");
        return false;
      }
       $('.goog-te-combo').val(theLang);

     
    window.location.reload();
    location.reload();
    });
</script> -->
 
<!-- 
<div id="google_translate_element"></div>
<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }


    $(document).ready(function(){
         $("#language_checkbox").click(function(){
      var theLang = '';
  if ($(this).is(":checked"))
  {
    
    var theLang = 'ar'; 
   }else{

    var theLang = 'en';
  }
  
$('.goog-te-combo').val(theLang).click();
window.location.reload();
        
    

     
  });

setTimeout(function(){ chech_lang(); }, 3000);


     });
 
 function chech_lang()
 {
  var find_home = $("#find_home").text();
   
  if(find_home=='Find a Home')
  {
    $("#language_checkbox").prop('checked', false);
  }else{
    $("#language_checkbox").prop('checked', true);
  }
  
 }
  </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 -->

 <div class="container-fluid"> 
 <div class="row">
  <div class="col-12 p-0 ">
<nav class="navbar navbar-expand-lg navbar-dark  p-0" style="background-color: #044f53">
  <div class="container-fluid">
    <div class="text-center brand-div">
       <!-- <a href="<?php echo base_url();?>index"><img src="<?php echo base_url();?>assets/images/LOGO-2.png" class="img-fluid"></a> -->
    </div>

    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav ml-auto aleizba_li mr-5">
            <li> 
       <div class="dropdown text-white">
        <div class="dropdown-toggle head_adjust " data-toggle="dropdown">CAD
        <span class="caret"></span></div>
        <ul class="dropdown-menu header_drop p-0">
          <li class="cities"><a href="#">CAD - Canadian Dollar</a></li>
          <li class="cities"><a href="#">USD - US Dollar</a></li>
          <li class="cities"><a href="#">AUD - Australian Dollar</a></li>
          <li class="cities"><a href="#">CNY - Chinese Renminbi</a></li>
          <li class="cities"><a href="#">EUR - Euro (European)</a></li>
          <li class="cities"><a href="#">GBP - UK Pound Sterling</a></li>
          <li class="cities"><a href="#">INR - Indian Rupee</a></li>
          <li class="cities"><a href="#">JPY - Japanese Yen</a></li>
          <li class="cities"><a href="#">MXN - Mexican Peso</a></li>
        </ul>
      </div>          
        </li>
         <li class="text-white ml-55 head_adjust" name="myBtn" id="myBtn" ><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Log In </li>

        
        <li class="ml-55">
          <a href="#" id="language" class="hormenu_a">
         
        <i class="fa fa-globe text-white" id="translate-open" aria-hidden="true"></i>
        <i class="fa fa-times text-white" style="display: none;" id="translate-close" aria-hidden="true"></i>

         
        <span id="w3google-translater" style="display: none;">
        
      <!--  Add a <div> element with the id "google_translate_element" -->

      <div id="google_translate_element"> </div>


      <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
      }
      </script>

      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </span>
  </a>
        </li>
        <li   class="ml-55 switch_btn">
          <label class="switch">
           <input type="checkbox" id="language_checkbox" class="language_checkbox" value="1" checked >

          <span class="slider round"></span></label>
        </li>
      </ul>
     </div>
    </div>
   </nav>
  </div>
 </div>
</div>
</section>

<section>
 <!--Modal Page Code Starts-->
       <section>
         <div id="myModal" class="modal txt">
            <div class="modal-content1" id="modalRes">
               <span class="close" style="margin-top: 15px;">&times;</span>
               <section>
                <div class="row">
                <!-- Success Msg Code-->
                <div class="col-sm-12">
                    <!-- Flashdata Code-->

                    <div class="text-center text-danger">
                       <?php echo validation_errors(); ?>
                    </div>
                    <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                    ?>
                    <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
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
                      <form action="<?php echo base_url(); ?>homenew/userLogin" method="post">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="text-center my-2">
                                 <button class="fbBtn1">

                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path data-name="Path 2764" fill="#fff" d="M24 12a12 12 0 1 0-13.88 11.86v-8.4H7.08V12h3.05V9.36c0-3.01 1.79-4.67 4.53-4.67a18.46 18.46 0 0 1 2.68.23v2.96h-1.51a1.73 1.73 0 0 0-1.96 1.87V12h3.33l-.53 3.47h-2.8v8.38A12 12 0 0 0 24 12z"></path></svg>

                                 Continue with Facebook</button>
                              </div>
                              <div class="text-center">
                                 OR
                              </div>
                              <div class="text-center my-1">
                                 <input type="Email" class="form-control" placeholder="Email*" required="required">
                              </div>
                              <div class="my-2">
                                 <input type="password" class="form-control" placeholder="password*" required="required">
                              </div>
                              <div class="my-2">
                                 <button type="Submit" class="logInBtn">Log In</button>
                              </div>

                              <div class="my-2 smallTxt">
                                 <div class="row">
                                  <div class="col-md-6">
                                    <small>
                                      <input type="radio" name="rememberMe"
                                      <?php if (isset($rememberMe) && $rememberMe=="rememberMe") echo "checked";?>
                                      value="rememberMe"> &nbsp; Remember Me
                                    </small>
                                  </div>
                                  <div class="col-md-6">
                                    <small style="float: right;">Forgot Password?</small>
                                  </div>
                                 </div>
                              </div>

                              <div class="my-2 text-center">
                                 Are you new to Al-Eizba?
                              </div>

                              <div class="my-3">
                                 <button type="button" class="memberBtn"><a href="<?php echo base_url();?>sign_Up" style="color: white">Become a free member</a></button>
                              </div>

                           </div>
                        </div>
                     </form>
                 
               </section>
            </div>
         </div>
      </section>
      <!--Modal Page Code Ends-->
</section>

<section>
  <nav class="navbar navbar-expand-lg navbar-light ale-dark justify-content-between">
    <a href="<?php echo base_url();?>index"><img src="<?php echo base_url();?>assets/images/LOGO-1.png" class="" style="width: 80%;"></a>
    <!-- <a class="navbar-brand" href="#">info@aleizba.com</a>
    <a class="navbar-brand" href="#">+97-154-587-1570</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
         <a id="find_home" class="nav-link" href="<?php echo base_url();?>propertylist">Find a Home</a>
         
      </li>

      <li class="nav-item">
         <a class="nav-link" href="<?php echo base_url();?>about">About Us</a>
         
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
         <a class="nav-link" href="<?php echo base_url();?>">Payment Calculator</a> 
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
         <a class="nav-link" href="<?php echo base_url();?>vendor/login">Agent Portal</a> 
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

      <li class="nav-item">
         <a class="nav-link"  href="#"><i class="fa fa-bell notification " aria-hidden="true"></i></a>
      </li>
      <li class="nav-item"> 
         <a class="nav-link" href="#"><i class="fa fa-bookmark bookmark" aria-hidden="true"></i></a>
         
      </li>
      <li class="nav-item">
         
         <a class="nav-link" href="#"><i class="fa fa-heart heart" aria-hidden="true"></i></a>
         
      </li>
       
    </ul>
     
  </div>
</nav>
<!--
 <div class="container-fluid ">
  <div class="row">
   <div class="col-md-12 bg-white" style="border-bottom: 1px solid #cbcbcb;">
    <ul class="list-style zxdg1234 mb-0 d-flex">
      <li><button class="btn ale_home_btn mfind"><a href="#">Find a Home</a></button></li>
      <li> 
       <div class="dropdown">
        <button class="btn ale_home_btn dropdown-toggle" type="button" data-toggle="dropdown">Meat a Ale-Izba
        <span class="caret"></span></button>
        <ul class="dropdown-menu ale_dropdown header_drop text-white">
          <li class="cities zxcvwhite"><a href="#">Location</a></li>
          <li class="cities zxcvwhite"><a href="#">Name</a></li>
          <li class="cities zxcvwhite"><a href="#">Office</a></li>
        </ul>
      </div>          
        </li>

       <li>
         <div class="dropdown">
        <button class="btn ale_home_btn dropdown-toggle" type="button" data-toggle="dropdown"> Mortgage Calculator
        <span class="caret"></span></button>
        <ul class="dropdown-menu ale_dropdown header_drop">
          <li class="cities zxcvwhite"><a href="#">Payment Calculator</a></li>
          <li class="cities zxcvwhite"><a href="#">Land Transfer Tax Calculator</a></li>
          <li class="cities zxcvwhite"><a href="#">Affordability calculator</a></li>
        </ul>
      </div> 
      </li>
      <li>
         <div class="dropdown">
        <button class="btn ale_home_btn dropdown-toggle" type="button" data-toggle="dropdown">Ideas & How to
        <span class="caret"></span></button>
        <ul class="dropdown-menu ale_dropdown header_drop">
          <li class="cities zxcvwhite"><a href="#">Living Room Blog</a></li>
          <li class="cities zxcvwhite"><a href="#">Tips for Buyers</a></li>
          <li class="cities zxcvwhite"><a href="#">Commercial Resources</a></li>
        </ul>
      </div>

      </li>
      <li class="ale-icon text-center">
        <a href="#"><i class="fa fa-bell notification " aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-bookmark bookmark" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-heart heart" aria-hidden="true"></i></a>

      </li>
       </ul>
      </div>
    </div>
  </div>-->
</section>
<!-- 
<section class="my-nav d-none">
 <div class="container "> 
  <div class="row">
    <div class="col-sm-2">
      <form>
          <select name="language" id="" class="form-control my-control">
          <option value="English">English</option>
          <option value="Hindi">Hindi</option>    
          <option value="Others">Others</option>
          </select>
     </form>
    </div>



     <div class="col-sm-3 offset-md-3 mt-1">
      <div class="top-bar-real fl-right text-white ">
     <sapn><i class="fa fa-heart top_white" aria-hidden="true"></i></sapn>
     <span>Favourite properties</span>
   </div>     
 </div>


    <div class="col-sm-2 mt-1">
    <div class="top-bar-real fl-right text-white">
     <sapn><i class="fa fa-star top_white" aria-hidden="true"></i></sapn>
     <span>Saved searches</span>
   </div>
   </div> 

   <div class="col-sm-2 mt-1">
    <div class="top-bar-real text-left text-white">
      <form>
     <sapn><i class="fa fa-user-circle top_white" aria-hidden="true"></i></sapn>
     <span>Log in</span>
   </form>
   </div>
  </div>
 </div>
</div>
</section>


<section class="my-nav-bg d-none">
  <div class="container wrap-container">
   <div class="row">
    <div class="col-md-12">
<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="<?php echo base_url();?>">Ale-izba</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link ABXY_nav" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link ABXY_nav" href="<?php echo base_url();?>companies">Find an Agency</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ABXY_nav" href="<?php echo base_url();?>floorplan">Floor Plans</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link ABXY_nav dropdown-toggle" href="<?php echo base_url();?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Guides
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url();?>">Action</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url();?>">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link ABXY_nav dropdown-toggle" href="<?php echo base_url();?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
Market Intelligence
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url();?>">Action</a>
          <a class="dropdown-item" href="<?php echo base_url();?>">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url();?>">Something else here</a>
        </div>
      </li>
        <li class="nav-item">
        <a class="nav-link ABXY_nav" href="<?php echo base_url();?>">Agent Portal</a>
      </li>

    </ul>

  </div>
</nav>


    </div>
   </div>
  </div>
</section>



 -->

 <!--Modal Script Start-->
<script>
// Get the modal
var modal = document.getElementById("myModal");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<!--Modal Script End-->
<!--new homw page main content start here-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/animate/animate.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> -->
<style type="text/css">
   body {
   background-color: #f2f2f2;
   }
</style>
<section class="ale_contact">
   <div class="container-fluid wrap-container padMY ">
      <div class="row">
         <div class="col-md-12">
            <h1 class="Bannertext1"><strong>Contact Us</strong></h1>
         </div>
         <!-- padMY -->
      </div>
   </div>
</section>
<section>
   <div class="container-fluid wrap-container my-3">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="section-title text-center">
               <h3><strong>Contact Us</strong></h3>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="outer_home">
               <div class="row">
                  <div class="col-md-6 col-xs-12">
                     <!--Start-->
                     <section class="mb-4">
                        <!--Section heading-->
                        <h4 class="h1-responsive my-2">We want to hear from you</h4>
                        <!--Section description-->
                        <p class="w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                           a matter of hours to help you.
                        </p>
                        <div class="row">
                           <!--Grid column-->
                           <div class="col-md-9 mb-md-0 mb-5">
                              <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                                 <!--Grid row-->
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="md-form mb-0">
                                          <label for="subject" class="">Topic</label>
                                          <select class="form-control" name="Before" id="Before">
                                             <option value="">General Inquiries</option>
                                             <option value="">Searching and Viewing Listings</option>
                                             <option value="">Help Contacting an Al-Eizba<small>&copy;</small></option>
                                             <option value="">Mobile App Support</option>
                                             <option value="">Listing Support for Al-Eizba<small>&copy;</small></option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <!--Grid row-->
                                 <!--Grid row-->
                                 <div class="row my-2">
                                    <!--Grid column-->
                                    <div class="col-md-6">
                                       <div class="md-form mb-0">
                                          <label for="name" class="">First Name<span class="text-danger">*</span></label>
                                          <input type="text" id="name" name="name" class="form-control">
                                       </div>
                                    </div>
                                    <!--Grid column-->
                                    <!--Grid column-->
                                    <div class="col-md-6">
                                       <div class="md-form mb-0">
                                          <label for="email" class="">Last Name<span class="text-danger">*</span></label>
                                          <input type="text" id="email" name="email" class="form-control">
                                       </div>
                                    </div>
                                    <!--Grid column-->
                                 </div>
                                 <!--Grid row-->
                                 <!--Grid row-->
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="md-form mb-0">
                                          <label for="subject" class="">Email<span class="text-danger">*</span></label>
                                          <input type="text" id="subject" name="subject" class="form-control">
                                       </div>
                                    </div>
                                 </div>
                                 <!--Grid row-->
                                 <!--Grid row-->
                                 <div class="row my-2">
                                    <!--Grid column-->
                                    <div class="col-md-12">
                                       <div class="md-form">
                                          <label for="message">Message<span class="text-danger">*</span></label>
                                          <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                       </div>
                                    </div>
                                 </div>
                                 <!--Grid row-->
                              </form>
                              <div class="text-center text-md-left">
                                 <a href="#" class="btn home_meet_btn">Send</a>
                              </div>
                           </div>
                           <!--Grid column-->
                        </div>
                     </section>
                     <!-- END-->
                  </div>
                  <div class="col-md-6 col-xs-12">
                     <!--Start-->
                     <div class="real_gif">
                        <img src="<?php echo base_url();?>assets/images/contact.gif" class="img-fluid ">
                     </div>
                     <!--End-->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--End-->
<!-- END -->
<script src="<?php echo base_url();?>assets/js/wow.js"> </script>
<script>
   new WOW().init();
</script>
<!-- banner  text animation -->
<script type="text/javascript">
   var textWrapper = document.querySelector('.Bannertext1');
   textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
   
   anime.timeline({loop: true})
   .add({
     targets: '.Bannertext1 .letter',
     translateX: [40,0],
     translateZ: 0,
     opacity: [0,1],
     easing: "easeOutExpo",
     duration: 1200,
     delay: (el, i) => 500 + 30 * i
   }).add({
     targets: '.Bannertext1 .letter',
     translateX: [0,-30],
     opacity: [1,0],
     easing: "easeInExpo",
     duration: 1100,
     delay: (el, i) => 100 + 30 * i
   });
</script>
<!-- Search css ################################################### -->
<!--Pagination
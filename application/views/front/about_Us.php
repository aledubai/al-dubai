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
<section class="ale_about">
   <div class="container-fluid wrap-container padMY ">
      <div class="row">
         <div class="col-md-12 ">
            <h1 class="Bannertext1"><strong>About Us</strong></h1>
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
               <h3><strong>About Us</strong></h3>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="outer_home">
               <div class="row">
                  <div class="col-md-6 col-xs-12">
                     <!--Start-->
                     <section class="mb-4 my-5">
                        <!--Section description-->
                        <p class="w-responsive mx-auto  text-justify mb-5">
						<strong>Al-Eizba</strong> is the leading real estate and rental marketplace dedicated to empowering consumers with data, inspiration, and knowledge around the place they call home, and connecting them with the best local professionals who can help. <strong>Al-Eizba</strong> provides up-to-date and reliable information that makes finding your dream property easy and enjoyable. <strong>Al-Eizba</strong> is popular with sellers, buyers, and renters.
						</p>
						<p class="w-responsive mx-auto text-justify mb-5">
						<strong>Al-Eizba</strong> provides listing information for residential, commercial and rental properties across Dubai, UAE. Whether you have just started looking or you are ready to make that big purchase, <strong>Al-Eizba</strong> is updated daily to ensure you have access to the latest and most accurate property listings. Features such as the mortgage calculator, social sharing, neighborhood demographics, and ability to connect with local <strong>Al-Eizba</strong>, are all available to help you find your dream property. Start your search today.

						</p>
						
                           
                     </section>
                     <!-- END-->
                  </div>
                  <div class="col-md-6 col-xs-12">
                     <!--Start-->
                     <div class="real_gif">
                        <img src="<?php echo base_url();?>assets/images/aboutUs.gif" class="img-fluid ">
                     </div>
                     <!--End-->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ale_aboutBg">
</section>
<section>
   <div class="container-fluid wrap-container my-3">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="section-title text-center">
               <h3><strong>How Al-Eizba Can Help</strong></h3>
            </div>
         </div>
      </div>
      <div class="row">
         <!--Start-->
         <div class="col-md-8">
            <div class="outer_home">
               <div class="row">
                  <div class="col-md-12 col-xs-12">
                     <!--Start-->
                     <div class="ale_aboutMr">Meet an Al-Eizba</div>
                     <section class="mb-4 my-5">
                        <!--Section description-->
                        <p class="w-responsive mx-auto mb-5">
                           If you're looking for a home, choosing a Al-Eizba should be your first step.
                           <br>
                           Al-Eizba can help connect you with Al-Eizba to find somewhere that’s the right fit for you!
                        </p>
                        <div class="text-center text-md-left">
                           <a href="#" class="btn home_meet_btn">Meet an Al-Eizba</a>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </div>
         <!--End-->
         <!--Start-->
         <div class="col-md-4">
            <div class="row">
               <div class="col-md-12 col-xs-12">
                  <div style="width: 95%;">
                     <img src="<?php echo base_url();?>assets/images/aboutSale.gif" class="img-fluid ">
                  </div>
               </div>
            </div>
         </div>
         <!--End-->
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
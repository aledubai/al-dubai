<link href="<?php echo base_url();?>assets/css/lightslider.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/animate/animate.css">
<style type="text/css">
   #listing {
    position: absolute;
    width: 90%;
    height: 410px;
    overflow: auto;
    top: 0px;
    cursor: pointer;
    overflow-x: hidden;
}
   .featureTab img
   {
   width: 40px;
   height: 40px;
   margin: auto;
   }
   .modal-backdrop {
   position: unset;
   top: unset;
   right: unset;
   bottom: unset;
   left: unset;
   z-index: unset;
   background-color: unset;
   }
   .total_price_content span,
   .total_amount_content span
   {
   text-align: center;
   margin: 0px 10px;
   display: inline-flex;
   }
   .form-bottom
   {
   margin-bottom: 2px !important;
   }
   #carouselExampleControls .carousel-item img
   {
   height: 600px;
   width: 800px;
   }
   form .contact_message,
   form .contact_mobile,
   form .contact_email,
   form .contact_name
   {
   font-size: 13px;
   }
   input::placeholder{
   text-align: right;
   }
   h1 small{
   font-size: 40%;
   }
   .scrollspy-example {
   height: 70vh;
   margin-top: .5rem;
   overflow-x: hidden;
   } 
   .mapForm>div{
   height: 200px;
   }
   .modal-content {
   width: 100%;
   height: 83vh;
   }
   .demo {
   width:450px;
   }
   .carousel-item,
   .modernOuterDiv,
   .cursor_pointer
   {
   cursor: pointer;
   }
   .carousel-item img
   {
   height: 60vh;
   width: 100%;
   }
   .carousel-indicators li{
   width: 66px;
   height: 30px;
   }
   #navbar-example2 ul {
   list-style: none outside none;
   padding-left: 0;
   margin-bottom:0;
   }
   #navbar-example2 li {
   display: block;
   float: left;
   margin-right: 6px;
   cursor:pointer;
   }
   img {
   display: block;
   height: auto;
   max-width: 100%;
   }
   .carousel-indicators li {
   height: 44px;
   }
   .carousel-indicators{
   width: 100%;
   left: 0px;
   margin: 0px;
   padding: 10px; 
   background-color: #00000096;
   position: absolute;
   bottom: 0px;
   }
   form input[type=text]::placeholder,
   form  input[type=email]::placeholder,
   form input[type=number]::placeholder,
   form textarea::placeholder{
   text-align: left;
   }
   input[type=text]:focus,
   input[type=email]:focus,
   input[type=number]:focus,
   textarea:focus{
   border-color:#00000061 !important;
   }
   .form-check-label{
   font-size: 14px;
   }
   .featureTab {
   display: block;
   width: 100%;
   padding: 1.375rem .75rem;
   margin: 2px;
   font-size: 1rem;
   line-height: 1.5;
   line-height: 1.5;
   color: #495057;
   background-color: #f5f5f5;
   background-clip: padding-box;
   border: 1px solid #f5f5f5;
   border-radius: .25rem;
   transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
   }
   .modal-header .close {
   padding: 30px 15px 0px 0px;
   }
   .AleBoxes img
   {
   width: 267px;
   height: 200px;
   }
   .myTab li
   {
   width: unset;
   }
   @media (min-width: 992px)
   {
   .modal-lg {
   max-width: 1000px;
   } 

   }
   @media (min-width: 576px)
   {
   .modal-dialog {
   min-width: 125vh;
   margin: -9vh auto;
   }  
   .modal-dialog-video {
   min-width: 81vh;
    margin: 0vh auto;
   } 
     
   }   
   @media (max-width: 576px)
   {
   .AleBoxes img
   {
   width: 100%;
   height: 100%;
   } 
   }
   @media   (max-width: 990px)
   {
   .modal-content {
   height: 195vh;
   }
   .modal-dialog-video .modal-content {
   height: 85vh;
   }
   .per_month_content h1,
   .total_amount_content h1,
   .breakdown_content h1
   {
   font-size: 1.5rem;
   font-weight: 700;
   }
   }                                              
</style>

<section class="ale_calc">
   <div class="container-fluid wrap-container padMY ">
      <div class="row">
         <div class="col-md-12 ">
            <h1 class="Bannertext1"><strong>Calculator</strong></h1>
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
               <h3><strong>Calculator</strong></h3>
            </div>
         </div>
      </div>

   <div class="row mt-3">
   <div class="col-md-12 col-xs-12 mb-3 ">
      <div class="MyDivdrop bg-white p-3">
               <h6>Calculator</h6>
               <hr>
               <p>Calculate and view the monthly mortgage for your property</p>
               <!--Calculator New Content Starts-->
               <div>
                  <div  >
                     <!--Calculator Row Starts-->
                     <div class="row p-4">
                        <!--Calculator First Column Starts-->
                        <div class="col-sm-7 col-md-7  col-xs-6 ">
                           <!--Calculator Inner Content Row Starts-->
                           <div class="row">
                              <!--Calculator First Column Content 1 Starts-->
                              <div class="col-sm-12">
                                 <div class="row">
                                    <div class="col-sm-12">Total Price</div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="input-group mb-6">
                                          <input type="text" class="form-control" aria-describedby="basic-addon1" id="total_price_aed" value="" />
                                          
                                          <span class="input-group-text" id="basic-addon1">AED</span>
                                       </div>
                                       <input type="hidden"  id="total_price_aed_hidden" value="" />
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="py-3">
                                          <input type="range" class="form-control-range" id="totalPriceRange"  value="80" min="0" max="100"/>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12 pt-5">
                                 <div class="row">
                                    <div class="col-sm-12">Loan Period</div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="input-group mb-6">
                                          <input type="text" class="form-control"  aria-describedby="basic-addon1"  id="loanperiod" >
                                          <span class="input-group-text" id="basic-addon1">Years</span>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="py-3">
                                          <input type="range" class="form-control-range" id="loanPeriodRange"  min="1" max="30" step="1" value="25">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12 pt-5">
                                 <div class="row">
                                    <div class="col-sm-12">Down Payment</div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="input-group mb-6">
                                          <div class="input-group-prepend">
                                             <input type="text" class="form-control"  id="downpayment"  >
                                             <span class="input-group-text" id="down_payment_perc">20%</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="py-3">
                                          <input type="range" class="form-control-range" min="10" max="80" id="downPaymentRange" step="1" value="20" onchange="downPaymentRanges(this.value)">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12 pt-5">
                                 <div class="row">
                                    <div class="col-sm-12">Interest Rate</div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="input-group mb-6">
                                          <input type="text" disabled class="form-control"  aria-describedby="basic-addon1" id="interestrate" value="3.49">
                                          <span class="input-group-text" id="basic-addon1">%</span>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="py-3">
                                          <input type="range" disabled  class="form-control-range" id="interestRateRange"  value="3.49" step="0.5" onchange="interestRateRanges(this.value)" >
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--Calculator Inner Content Row Ends-->
                        </div>
                        <div class="col-sm-5 col-md-5  col-xs-6 ">
                           <div class="bg-white text-center  pt-3  pl-3  pr-3 ">
                              <div class="row total_price_content">
                                 <div class="col-sm-12 col-md-12  col-xs-12">
                                    <span>
                                       AED 
                                       <h2 class="text-dark" id="total_price" >1,750,000</h2>
                                    </span>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-12 col-md-12  col-xs-12">
                                    <p>per month</p>
                                 </div>
                              </div>
                              <div class="total_amount_content">
                              </div>
                              <div class="row total_amount_content">
                                 <div class="col-sm-12 col-md-12  col-xs-12">
                                    <p class="text-muted">TOTAL LOAN AMOUNT</p>
                                    <span>
                                       AED 
                                       <h2 class="text-dark"  id="total_amount">4,901</h2>
                                    </span>
                                 </div>
                              </div>
                              <div class="breakdown_content">
                                 <p  class="text-muted">PAYMENT BREAKDOWN</p>
                                 <div class="row m-0">
                                    <div class="col-sm-12 col-xs-12 col-md-12 p-3">
                                       <div class="progress  bg-dark">
                                          <div class="progress-bar bg-info" role="progressbar" id="payment_breakdown" aria-valuenow="70"
                                             aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6 col-md-6 col-xs-6 text-left">Interest</div>
                                    <div class="col-sm-6 col-md-6 col-xs-6  text-right">Principal</div>
                                 </div>
                              </div>
                              <div class="pt-3">
                                 <a href="<?=base_url()?>" class="btn btn-danger btn-sm text-center"><small><b>APPLY FOR PRE-APPROVAL</b></small></a>
                                 <div  class="text-center pt-3 ">
                                    <h6 class="text-dark py-3"> <small>Powered By</small> Megatask.com</h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
             </div>
           </div>
         </section>

<!--Calculator Script Start-->
<script type="text/javascript">
   function getdownpayments()
   {
       var downPaymentRange = $("#downPaymentRange").val();
         $("#down_payment_perc").html(downPaymentRange+" %");
   
        var total_price_aed = $("#total_price_aed").val();
   
        var downpayment = total_price_aed*downPaymentRange/100;
         $("#downpayment").val(downpayment);
         
   }
   function get_hidden_amount()
   {
        var total_price_aed_hidden = $("#total_price_aed_hidden").val();
        var totalPriceRange = $("#totalPriceRange").val();
        
         var actual_total_price = total_price_aed_hidden*totalPriceRange/80;
         $("#total_price_aed").val(actual_total_price*1);
      
         
   }

   function getloanperiod()
   {
       var loanPeriodRange = $("#loanPeriodRange").val();
         
         $("#loanperiod").val(loanPeriodRange);
         $("#payment_breakdown").css("width",(loanPeriodRange)+"%");
   
    
   }
   
   $(document).on('input', '#totalPriceRange', function() {

      get_hidden_amount();
      getdownpayments();
      calculations();
    });
   $(document).on('input', '#downPaymentRange', function() {
      getdownpayments();
      calculations();
    });
   $(document).on('input', '#total_price_aed', function() {

      getdownpayments();
      calculations();
    });
   $(document).on('input', '#loanPeriodRange', function() {
         
         getloanperiod();
         calculations();
   
   });
function calculations() {
        var loan = document.getElementById("total_price_aed").value;
        var month = (document.getElementById("loanperiod").value)*12
        var int = document.getElementById("interestrate").value;
        
        var down = document.getElementById("downpayment").value;
        var amount = parseInt(loan);
        var months = parseInt(month);
        var down = parseInt(down);
        var annInterest = parseFloat(int);
        var monInt = annInterest / 1200;
        var calculation = ((monInt + (monInt / (Math.pow((1 + monInt), months) -1))) * (amount - (down))).toFixed(2);
  
    document.getElementById("total_price").innerHTML = calculation;
    document.getElementById("total_amount").innerHTML = (calculation*month).toFixed(2);
}



   $(document).on('input', '#totalPriceRange', function() {
   /*alert($(this).val());*/
   var total_price_aed = $("#total_price_aed").val();
   total_price_aed = parseInt(total_price_aed)
   var pricerange = $(this).val();
   
    calculations();
   });

 $(document).ready(function(){
     getdownpayments();
     getloanperiod();
     calculations();
   });
</script>
<!--Calculator Script End-->

<!--Text Animation Script Starts-->
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
<!--Text Animation Script Ends-->

   
  
  
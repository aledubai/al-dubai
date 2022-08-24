<!-- <script src='https://kit.fontawesome.com/a076d05399.js' ></script> -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link href="<?php echo base_url();?>assets/css/lightslider.css" rel="stylesheet" type="text/css"/>

<style type="text/css">

  .msg-success {
  background-color: #28a745;
}
 

.msg-danger {
  background-color:  #dc3545;
}
  .msg {
  position: fixed;
  top: 40px;
  z-index: 9;
  right: 2%;
  padding: 10px 20px;
  border-radius: 5px;
  color: white;
  font-size: 14px;
  font-weight: 800;
  box-shadow: 0 0 14px rgba(0, 0, 0, 0.05);
}

.animate {
  opacity: 0;
  display: none;
  transition: all 1s;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animate.active {
  opacity: 1;
  display: block;
  transform: translateX(-50%) translateY(-50%);
}

.slide-in-down {
  transform: translateY(-100%) translateX(-50%);
}

   #listing {
	   position: absolute;
	   padding:0px;
    width: 90%;
    height: 410px;
    overflow: auto;
    top: 0px;
    cursor: pointer;
    overflow-x: hidden;
} 
.listing img{
	    max-width:unset;
}  
.listing {
	   padding:0px;
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
   
   #agent_form1 .form-bottom
   {
   margin-bottom:10px  !important;
   }
   #agent_form1 .contact_name,
	#agent_form1  .contact_message,
   #agent_form1  .contact_mobile,
   #agent_form1  .contact_email
   {
    font-size: 16px   !important ;
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
/*   .AleBoxes img
   {
   width: 267px;
   height: 200px;
   }*/
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

   @media (max-width: 500px) 
  {
    #seeAlsoBtn {
       padding-top: 2rem!important;
    }
  }
   @media (max-width: 500px) 
  {
    #heightAgent {
           height: 105% !important;
    }
  } 

   @media (max-width: 500px) 
  {
    .mediaMargin {
           margin-left: -2.5rem !important;
    }
  }                                           
</style>
<div class="msg animate slide-in-down"></div>
<section>
   <div class="container-fluid wrap-container">
      <div class="row">
         <div class="col-sm-12">
            <nav aria-label="breadcrumb"  >
               <ol   class="breadcrumb aleBreadcrumb " >
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>propertylist">All Property</a></li>
                  <li class="breadcrumb-item"><?=$property->EnTitle?></li>
              
               </ol>
            </nav>
         </div>
      </div>
   </div>
</section>
<section>

   <div class="container-fluid wrap-container">
      <div class="row">
         <div class="col-md-8 col-xs-12 pb-2  pt-2">
            <div class="propImg">
               <!--Carousel Content Start-->
               <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false" >
                  <div class="carousel-inner">
                     <?php


                     /*lat: -33.867,
         lng: 151.195*/
                     
                     $property_lat = (isset($property->prop_lat) && $property->prop_lat!=='') ? $property->prop_lat  :0.00;
                     $property_lng = (isset($property->prop_lng) && $property->prop_lng!=='') ? $property->prop_lng  :0.00;

                      $latlang = $property_lat.", ".$property_lng;
                      $propeerty_location = $property->location;






                        $caresual_slide = "";
                        $gallery_slide = "";
                        $thumb_slide = "";
                        if(isset($property_img[0]) && !empty($property_img[0]))
                        {
                            $property_img = $property_img[0];
                        
                            //$all_images = $property_img['image'];
                            if($property_img->image !=='')
                            {
                              //ECHO $property_img->image;
                              $encoded_images = json_decode($property_img->image) ;
                                    
                              for ($i=0; $i < count($encoded_images); $i++) 
                              { 
                        
                                  $active_caresual = ' ';
                                  if($i==0){
                                    $active_caresual = 'active';
                                  }
                        
                                  $imag_url = base_url().'uploads/property/'.$encoded_images[$i];
                        
                        
                                  $caresual_slide .= '<div data-toggle="modal" data-target=".bd-popup-modal-lg" class="carousel-item  '.$active_caresual.'">';
                                  $caresual_slide .= '<img src="'.$imag_url.'" class="d-block w-100" alt="'.$property->meta_alt.'">';
                                  $caresual_slide .= '</div>';
                        
                        
                                  $gallery_slide.='<div class="carousel-item '.$active_caresual.'" > <img src="'.$imag_url.'" > </div>';
                         
                                  $thumb_slide.= ' <li class="list-inline-item '.$active_caresual.'">
                                      <a id="carousel-selector-'.$i.'"   data-slide-to="'.$i.'" data-target="#custCarousel">
                                        <img src="'.$imag_url.'" class="img-fluid">
                                      </a>
                                    </li>';
                        
                        
                        
                              }
                            }else{
                        
                                $i = 0;
                              $active_caresual = ' ';
                                  
                                    $active_caresual = 'active';
                                   
                              $imag_url = base_url().'uploads/property/default-property.jpg';
                        
                            $caresual_slide .= '<div data-toggle="modal" data-target=".bd-popup-modal-lg"  class="carousel-item '.$active_caresual.'">';
                            $caresual_slide .= '<img src="'.$imag_url.'" class="d-block w-100" alt="...">';
                            $caresual_slide .= '</div>';
                            $gallery_slide.='<div class="carousel-item  '.$active_caresual.'"> <img src="'.$imag_url.'"></div>';
                        
                            $thumb_slide.= ' <li class="list-inline-item '.$active_caresual.'">
                                      <a id="carousel-selector-'.$i.'"   data-slide-to="'.$i.'" data-target="#custCarousel">
                                        <img src="'.$imag_url.'" class="img-fluid">
                                      </a>
                                    </li>';
                            }
                        }else
                        {
                           $imag_url = base_url().'uploads/property/default-property.jpg';
                        
                            $caresual_slide .= '<div class="carousel-item '.$active_caresual.'">';
                            $caresual_slide .= '<img src="'.$imag_url.'" class="d-block w-100" alt="...">';
                            $caresual_slide .= '</div>';
                            $gallery_slide.='<div class="carousel-item  '.$active_caresual.'"> <img src="'.$imag_url.'"></div>';
                        
                            $thumb_slide.= ' <li class="list-inline-item '.$active_caresual.'">
                                      <a id="carousel-selector-'.$i.'"   data-slide-to="'.$i.'" data-target="#custCarousel">
                                        <img src="'.$imag_url.'" class="img-fluid">
                                      </a>
                                    </li>';
                        
                                    
                           
                        }
                        
                        
                        
                        echo $caresual_slide;
                        ?>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
               <div class="row" style="position: absolute;bottom: 10px;left: 30px;">
                  <div class="col-sm-12 pt-2 pb-2">
                     <button type='button' id="show_map" class="btn btn-info btn-sm " data-toggle="modal" data-target=".bd-popup-modal-lg"><i class="fas fa-map-marked-alt" aria-hidden="true"></i>
                     &nbsp;Map</button>


                     <button data-toggle="modal" data-target=".video-request-popup-modal-lg"  class="btn btn-info btn-sm  "><i class="fa fa-video-camera" aria-hidden="true"></i>
                     &nbsp;Request Video</button>
                  </div>
               </div>
            </div>
         </div>
         <!--Agent Details Section Start-->
         <div class="col-md-4 col-xs-12 pb-2  pt-2">
            <div class="AleAgent bg-white pt-3 pl-3 pr-3" style="height: 100%;" id="heightAgent">
               <?php
                  $message = "I would like to inquire about your property Al-Eizba -(".$property->external_reference."). Please contact me at your earliest convenience.";
                   $formid = "agent_form1";
                  
                  //include agent contact form start  
                  include "contact-agent-form.php"
                  //include agent contact form end 
                  ?>
               <div id="myModal" class="modal">
                  <div class="modal-content">
                     <span class="close AleClose">&times;</span>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="EmailTape text-left">
                              <p>Email Ale-Izba</p>
                           </div>
                           <div class="modalAle text-left ModalSpace">
                              <img src="<?php echo base_url();?>assets/images/agentFirst.png" class="img-fluid mt-2 " style="width: 60px;">
                              <p class="mb-0"><strong>To:</strong>&nbsp;Agent Name (Agent Designation)</p>
                              <p><i class="fa fa-phone" aria-hidden="true"></i><strong>&nbsp;&nbsp;Agent Phone Number</strong></p>
                           </div>
                        </div>
                     </div>
                     <!--First Row Start-->
                     <div class="row">
                        <div class="col-sm-6 text-left">
                           <div class="ModalSpace">
                              <form>
                                 <label>First Name</label>
                                 <input type="text"  name="name" placeholder="" pattern="" class="form-control">
                              </form>
                           </div>
                        </div>
                        <div class="col-sm-6 text-left">
                           <div class="ModalSpace">
                              <form>
                                 <label>Last Name</label>
                                 <input type="text"  name="name" placeholder="" pattern="" class="form-control">
                              </form>
                           </div>
                        </div>
                     </div>
                     <!--First Row End-->
                     <!--Second Row Start-->
                     <div class="row">
                        <div class="col-sm-12 text-left">
                           <div class="ModalSpace">
                              <form>
                                 <label>Subject</label>
                                 <input type="text"  name="name" placeholder="" pattern="" class="form-control">
                              </form>
                           </div>
                        </div>
                     </div>
                     <!--Second Row End-->
                     <!--Third Row Start-->
                     <div class="row">
                        <div class="col-sm-12 text-left">
                           <div class="ModalSpace">
                              <form>
                                 <label>Message</label>
                                 <textarea placeholder="Enter Your Message" class="form-control"></textarea>
                                 <!-- <input type="textarea"  name="name" placeholder="" pattern="" class="form-control"> -->
                              </form>
                           </div>
                        </div>
                     </div>
                     <!--Second Row End-->
                     <!--Button Row Start-->
                     <div class="row">
                        <div class="col-sm-12 text-left">
                           <div class="ModalSpace">
                              <form>
                                 <a href="#" id="" class="btn modalBtn">Submit</a><br>
                              </form>
                           </div>
                        </div>
                     </div>
                     <!--Button Row End-->
                  </div>
               </div>
               <!--Email Modal End-->
            </div>
         </div>
      </div>
   </div>
</section>
<div class="modal fade bd-popup-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header border-0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                           <ul class="nav nav-tabs" role="tablist">
                              <li class="nav-item  py-2 mx-2 ">
                                 <a id="propPhoto-tab" data-toggle="tab" href="#propPhoto" role="tab" class=" btn btn-info btn-sm nav-item nav-link active " aria-controls="propPhoto" aria-selected="true">
                                 <i class="fas fa-images" aria-hidden="true"></i>&nbsp;&nbsp;Photos</a>
                              </li>
                              <?php


                                 if(isset($property_plan[0]) && !empty($property_plan[0]))
                                 {
                                  
                                    $property_plan = $property_plan[0];
                                 
                                    if(isset($property_plan->image) && $property_plan->image !=='')
                                    {
                                 
                                 
                                 
                                 
                                      ?>
                              <li class="nav-item py-2  mx-2 ">
                                 <a id="propFloorPhoto-tab" data-toggle="tab" href="#propFloorPhoto" role="tab" class="btn btn-info btn-sm nav-item nav-link" aria-controls="propFloorPhoto" aria-selected="true">
                                 <i class="fas fa-photo-video" aria-hidden="true"></i>&nbsp;&nbsp;Floor Plan</a>
                              </li>
                              <?php
                                 $plan_gallery_slide = '';
                                  $plan_thumb_slide ='';
                                    
                                   $encoded_plans = json_decode($property_plan->image) ;
                                    
                                   
                                         
                                   for ($i=0; $i < count($encoded_plans); $i++) 
                                   { 
                                 
                                 
                                      $active_caresual = ' ';
                                      if($i==0){
                                      $active_caresual = 'active';
                                      }
                                 
                                      $plan_image_url = base_url().'uploads/propertyplans/'.$encoded_plans[$i];
                                 
                                 
                                 
                                 
                                      $plan_gallery_slide.='<div class="carousel-item  '.$active_caresual.'"> <img src="'.$plan_image_url.'"></div>';
                                 
                                      $plan_thumb_slide.= ' <li class="list-inline-item '.$active_caresual.'">
                                      <a id="carousel-selector-'.$i.'"   data-slide-to="'.$i.'" data-target="#planCarousel">
                                      <img src="'.$plan_image_url.'" class="img-fluid">
                                      </a>
                                      </li>';
                                 
                                 
                                 
                                       
                                      }
                                    }
                                  }
                                  ?>
                              <li class="nav-item py-2  mx-2 ">
                                 <a id="propMap-tab" data-toggle="tab" href="#propMap" role="tab" class="btn btn-info nav-item btn-sm nav-link" aria-controls="propMap" aria-selected="true">
                                 <i class="fas fa-map-marked-alt" aria-hidden="true"></i>&nbsp;&nbsp;Map</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body p-0">
            <div class="container">
               <div class="row">
                  <div class="col-sm-8">
                     <div class="tab-content" id="nav-tabContent">
                        <div class="row">
                           <div class="col-sm-12">
                              <div  class="tab-pane fade show active"   role="tabpanel" aria-labelledby="propPhoto-tab"  id="propPhoto" style="display: block;">
                                 <div id="custCarousel" class="carousel slide" data-ride="carousel" data-interval="false"  align="center">
                                    <div class="carousel-inner">
                                       <?php
                                          echo $gallery_slide;
                                          ?>
                                    </div>
                                 </div>
                                 <!-- Left right --> 
                                 <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
                                 <span class="carousel-control-prev-icon"></span>
                                 </a>
                                 <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span>
                                 </a>
                                 <!-- Thumbnails -->
                                 <ol class="carousel-indicators list-inline">
                                    <?php
                                       echo $thumb_slide;
                                       ?>
                                 </ol>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="tab-pane fade" id="propFloorPhoto"  role="tabpanel" aria-labelledby="propFloorPhoto-tab" style="display: none;">
                                 <div id="planCarousel" class="carousel slide" data-ride="carousel" align="center">
                                    <div class="carousel-inner">
                                       <?php
                                          echo $plan_gallery_slide;
                                          ?>
                                    </div>
                                 </div>
                                 <!-- Left right --> 
                                 <a class="carousel-control-prev" href="#planCarousel" data-slide="prev">
                                 <span class="carousel-control-prev-icon"></span>
                                 </a>
                                 <a class="carousel-control-next" href="#planCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span>
                                 </a>
                                 <!-- Thumbnails -->
                                 <ol class="carousel-indicators list-inline">
                                    <?php
                                       echo $plan_thumb_slide;
                                       ?>
                                 </ol>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="tab-pane fade" id="propMap"  role="tabpanel" aria-labelledby="propMap-tab" style="display: none;">
                                 <div id="map-property2" style="border:0;width: 100%;height:64vh"></div>
                                  
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-4 col-md-4  col-sm-4 text-center">
                     <?php
                        $formid = "agent_form2";
                           //include agent contact form start  
                           include "contact-agent-form.php"
                           //include agent contact form end 
                           ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade video-request-popup-modal-lg p-0" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-video  modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header border-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body p-0">
            <div class="container">
               <div class="row">
                <div class="col-xs-12 col-md-12  col-sm-12 text-center">
                     <?php
                        $formid = "agent_form3";
                           //include agent contact form start  
                           include "contact-agent-form.php"
                           //include agent contact form end 
                           ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade bd-popup-modal-location" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header border-0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <nav>
                        <div class="nav nav-tabs tabActiveLists" id="nav-tab" role="tablist">
                           <a class="btn btn-sm  btn-outline-info p-2 mx-2 nav-item nav-link active tabActiveList" id="nav-property-tab" data-toggle="tab" href="#nav-property" role="tab" aria-controls="nav-property" aria-selected="true"> PROPERTY</a>
                           <a class="btn btn-sm btn-outline-info p-2 mx-2 nav-item nav-link tabActiveList" id="nav-school-tab" data-toggle="tab" href="#nav-school" role="tab" aria-controls="nav-school" aria-selected="false">SCHOOLS</a>
                           <a class="btn btn-sm btn-outline-info p-2 mx-2 nav-item nav-link tabActiveList" id="nav-restaurant-tab" data-toggle="tab" href="#nav-restaurant" role="tab" aria-controls="nav-restaurant" aria-selected="false">RESTAURANTS</a>
                           <a class="btn btn-sm btn-outline-info p-2 mx-2 nav-item nav-link tabActiveList" id="nav-hospitals-tab" data-toggle="tab" href="#nav-hospitals" role="tab" aria-controls="nav-hospitals" aria-selected="false">HOSPITALS</a>
                           <a class="btn btn-sm btn-outline-info p-2 mx-2 nav-item nav-link tabActiveList" id="nav-parks-tab" data-toggle="tab" href="#nav-parks" role="tab" aria-controls="nav-parks" aria-selected="false">PARKS</a>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body p-0">
            <div class="tab-content" id="nav-tabContent">
               <div class="container location">
                  <div  class="row" >
                     <div class="col-sm-8 col-md-8  col-lg-8 ">
                        <div id="map-property"></div>
                     </div>
                     <div class="col-sm-4 col-md-4 col-lg-4 ">
                           <div class="tab-pane fade show active" id="nav-property" role="tabpanel" aria-labelledby="nav-property-tab">
                                <div class="mt-1">
                                 <h4 class="text-center mb-0"><strong><?php
                                    $salutiaon = '';
                                    
                                    if(isset($property_landlord->Salutation) && $property_landlord->Salutation>0)
                                    {
                                        
                                        $salutiaon  = $SalutaionList[$property_landlord->Salutation];
                                    }
                                    
                                    $fullname = $salutiaon." ".$property_landlord->FullName; 
                                    
                                     
                                    
                                    
                                     
                                    ?></strong> <?=$fullname;?></h4>
                                 <p class="mb-0 text-center  text-dark ">&nbsp;&nbsp;AGENT NAME:<strong>&nbsp;<?=$fullname;?></strong></p>
                              </div>
                              <hr  >
                              <div class="text-center">
                                 <a href="<?php echo base_url();?>propertylist" >
                                    <p class="mb-0 text-success"><strong>VIEW ALL PROPERTIES&nbsp;&nbsp;></strong></p>
                                 </a>
                              </div>
                           </div>
                              <!--school tab start-->
                            <div class=" tab-pane fade" id="nav-school" role="tabpanel" aria-labelledby="nav-school-tab" >
                           <div id="listing"  class="listing">
                             <table id="resultsTable">
                               <tbody id="resultsschool"></tbody>
                             </table>
                           </div>
                           
                        </div>
                        <!--school tab start-->
                        <!--restaurant tab start-->
                        <div class="row tab-pane fade" id="nav-restaurant" role="tabpanel" aria-labelledby="nav-restaurant-tab">
                           <div id="listing"  class="listing">
                             <table id="resultsTable">
                               <tbody id="resultsrestaurant"></tbody>
                             </table>
                           </div>  
                        </div>
                      <!--restaurant tab end-->
                      <!--hospitals tab end-->
                       <div  class="tab-pane fade" id="nav-hospitals" role="tabpanel" aria-labelledby="nav-hospitals-tab">
                                  <div id="listing" class="listing">
                                      <table id="resultsTable">
                                        <tbody id="resultshospital"></tbody>
                                      </table>
                                    </div>
                              </div>
                      <!--hospitals tab end-->
                      <!--parks tab end-->
                       <div  class=" tab-pane fade" id="nav-parks" role="tabpanel" aria-labelledby="nav-parks-tab">
                        <div id="listing"  class="listing">
                             <table id="resultsTable">
                               <tbody id="resultspark"></tbody>
                             </table>
                           </div>
                           </div>
                      <!--parks tab end-->
                        
                     </div>
                  </div>
				  <div style="display: none">
                             <div id="info-content">
                               <table>
                                 <tr id="iw-url-row" class="iw_table_row">
                                   <td id="iw-icon" class="iw_table_icon"></td>
                                   <td id="iw-url"></td>
                                 </tr>
                                 <tr id="iw-address-row" class="iw_table_row">
                                   <td class="iw_attribute_name">Address:</td>
                                   <td id="iw-address"></td>
                                 </tr>
                                 <tr id="iw-phone-row" class="iw_table_row">
                                   <td class="iw_attribute_name">Telephone:</td>
                                   <td id="iw-phone"></td>
                                 </tr>
                                 <tr id="iw-rating-row" class="iw_table_row">
                                   <td class="iw_attribute_name">Rating:</td>
                                   <td id="iw-rating"></td>
                                 </tr>
                                 <tr id="iw-website-row" class="iw_table_row">
                                   <td class="iw_attribute_name">Website:</td>
                                   <td id="iw-website"></td>
                                 </tr>
                               </table>
                             </div>
                           </div>
						   
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Property Image Section End-->
<!--Title & Price Section Start-->
<section class="py-3">
   <div class="container-fluid wrap-container">
      <div class="row">
         <!--First Column Start-->
         <div class="col-md-8 col-xs-12 my-2 pl-2 ">
            <div class="bg-white   p-3">
               <div class="row">
                  <div class="col-sm-8">
                     <h5><strong>AED <?=number_format($property->rent); ?> </strong> </h5>
                  </div>
                  <div class="col-sm-4">
                     <div class="mediaMargin">

                      

                        <ul class="d-flex list-style">
                           <li class="dps">

                              <?php
                                 //print_r($bookmarks);
                                  $bookmardisable =  0;
                                 if(!empty($bookmarks))
                                 {
                                      $bookmarks = $bookmarks[0];
                                      if(isset($bookmarks->property_id) && $bookmarks->property_id !=='')
                                      {
                                         $bookmardisable =  1;
                                      } 
                                       
                                 }
                                 ?>
                              <button type="button"  name="bookmark" id="bookmark" class="btn btn-info btn-info btn-sm" ><i class="fa fa-bookmark" aria-hidden="true"></i> &nbsp;Save</button>
                              <input type="hidden" name="data-bookmrk" id="data-bookmrk" value="<?php echo $bookmardisable;?>" />
                           </li>
                           <li class="dps">
                            <div class="btn-group">
                              <button type="button" class="btn btn-info btn-info ml-2  btn-sm  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Share on Facebook</a>
                                <a class="dropdown-item" href="#">Share on Twitter</a>
                                <a class="dropdown-item" href="#">Share on WhatsApp</a>
                                <a class="dropdown-item" href="#">Share on G-mail</a>
                                <a class="dropdown-item" href="#">Share on E-mail</a>
                                
                              </div>
                            </div>
                             
                          </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class=" ">
                        <div class="alePrice">
                           <h1><?=$property->EnTitle?></h1>
                           <h2> <?=$property->location?></h2>
                           <div class="mt-3">
                              <span class="ale_fa"><i class="fa fa-bed" aria-hidden="true"></i>
                              <span class="ale_faTxt">&nbsp;<?=$property->beds?> Bed</span></span>
                              <span class="ale_fa ml-2"><i class="fa fa-bath" aria-hidden="true"></i>
                              <span class="ale_faTxt">&nbsp;<?=$property->baths?> Bath</span></span>
                              <span class="ale_fa ml-2"><i class="fa fa-area-chart" aria-hidden="true"></i>
                              <span class="ale_faTxt">&nbsp;<?=$property->plot_area?> Sqft</span></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--Buttons Start-->
            <!--Buttons End-->
         </div>
         <!--First Column End-->
         <!--Second Column Start-->
         <div class="col-md-4 col-xs-12 my-2   ">
            <div class=" bg-white p-4">
               <a href="#">
                  <div class="row">
                     <div class="col-sm-4 p-0 ">
                        <img src="<?php echo base_url();?>assets/images/ajman.jpg" class="img-fluid img-thumbnail"> 
                     </div>
                     <div class="col-sm-8 py-3">
                        <h6 class="text-dark"><strong><?=substr($property->EnTitle, 0, 20);?></strong></h6>
                        <p class="text-dark" >See the community attraction<br>and lifestyles.</p>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <!--Second Column Start-->
      </div>
   </div>
</section>
<!--Title & Price Section End-->
<!--Details & Overview Section Start-->
<section>
   <div class="container-fluid wrap-container">
   <div class="row mt-3">
   <div class="col-md-8 col-xs-12 mb-3 ">
      <div class="MyDivdrop bg-white p-3">
         <nav id="navbar-example2" class="navbar navbar-left ">
            <ul class="nav nav-pills">
               <li class="nav-item">
                  <a  href="#overview"  class="nav-link btn btn-outline-info  btn-sm  ">
                  <strong><i class="fa fa-building" aria-hidden="true"></i>&nbsp;&nbsp;Overview</strong></a>
               </li>
               <li class="nav-item">
                  <a  href="#neighbourhood" class="nav-link  btn btn-sm btn-outline-info "><strong><i class="fas fa-map-marked-alt" aria-hidden="true"></i>&nbsp;&nbsp;Neighbourhood</strong></a>
               </li>
               <li class="nav-item">
                  <a  href="#trends"  class="nav-link  btn btn-sm btn-outline-info ">
                  <strong><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Trends</strong></a>
               </li>
               <li class="nav-item">
                  <a href="#calculator"  class="nav-link btn btn-sm btn-outline-info ">
                  <strong><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;&nbsp;Calculator</strong></a>
               </li>
            </ul>
         </nav>
         <div data-spy="scroll" class="scrollspy-example" data-target="#navbar-example2" data-offset="0">
            <div  id="overview"  class="tab-pane fade  show" >
               <!--Description Section Start-->
               <h6>Description</h6>
               <hr>
               <h6><strong><?=str_replace( "\n", '<br />',$property->EnTitle);?></strong></h6>
               <p><?=str_replace( "\n", '<br />',$property->description);?></p>
               <!--Description Section End-->
               <!--Property Details Section Starts-->
               <h6 class="mt-4">Property Summary</h6>
               <hr>
               <div class="row mt-3">
                  <div class="col-sm-3">
                     <h6><strong>Type</strong></h6>
                     <p><?=$propertyType_name?></p>
                  </div>
                  <div class="col-sm-3">
                     <h6><strong>Purpose</strong></h6>
                     <p><?=$purposeList_name?></p>
                  </div>
                  <div class="col-sm-3">
                     <h6><strong>Reference Number</strong></h6>
                     <p>#<?=$property->external_reference?></p>
                  </div>
                  <div class="col-sm-3">
                     <h6><strong>Completion</strong></h6>
                     <p>Ready</p>
                  </div>
                  <div class="col-sm-3">
                     <h6><strong>Added On</strong></h6>
                     <p><?php if(isset($property->date_at) && $property->date_at !=='0000-00-00 00:00:00'){ echo date('jS  F Y',strtotime($property->date_at)); }?></p>
                  </div>
                  <div class="col-sm-3">
                     <h6><strong>Built in</strong></h6>
                     <p><?=$property->year_built?></p>
                  </div>
                  <div class="col-sm-3">
                     <h6><strong>Parking Available</strong></h6>
                     <p><?php
                        if($property->parking >0)
                        {
                         echo "Yes"; 
                        }else{
                          echo "No";
                        }
                        ?>
                     </p>
                  </div>
               </div>
               <!--Property Details Section Ends-->
               <!--Features & Amenities Section Start-->
               <h6 class="mt-4">Features/Amenities</h6>
               <hr>
               <?php
                  if(isset($property_feature) && !empty($property_feature))
                  {
                  
                      $property_feature = $property_feature[0];
                  
                      ?>
               <div class="row mt-3">
                  <?php 
                     if(isset($property_feature->BuildingList) && !empty($property_feature->BuildingList))
                     {
                     
                          
                         $EncodedBuildingList = $property_feature->BuildingList;
                         $BuildingListData = json_decode($EncodedBuildingList);
                         foreach ($BuildingListData as $k =>$v)
                         {
                           ?>
                  <div class=" col-sm-3">
                     <div class="featureTab">
                        <div class="text-center">
                           <img  src="<?=base_url()?>/assets/images/icon/aminities/<?=$BuildingListIcon[$k]?>">
                           <div class="py-2">
                              <small><strong><?=$BuildingList[$k]?></strong></small>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php 
                     }
                     }
                     if(isset($property_feature->RecreationAndFamily) && !empty($property_feature->RecreationAndFamily))
                     {
                     
                     
                     $EncodedRecreation = $property_feature->RecreationAndFamily;
                     $RecreationtData = json_decode($EncodedRecreation);
                     foreach ($RecreationtData as $k =>$v)
                     {
                       ?>
                  <div class=" col-sm-3">
                     <div class="featureTab">
                        <div class="text-center">
                           <img  src="<?=base_url()?>/assets/images/icon/aminities/<?=$RecreationAndFamilyIcon[$k]?>">
                           <div class="py-2">
                              <small><strong><?=$RecreationAndFamily[$k]?></strong></small>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php 
                     }
                     }
                     if(isset($property_feature->HealthAndFitness) && !empty($property_feature->HealthAndFitness))
                     {
                     
                     
                     $EncodedHealthAnd = $property_feature->HealthAndFitness;
                     $HealthAndtData = json_decode($EncodedHealthAnd);
                     foreach ($HealthAndtData as $k =>$v)
                     {
                       ?>
                  <div class=" col-sm-3">
                     <div class="featureTab">
                        <div class="text-center">
                           <img  src="<?=base_url()?>/assets/images/icon/aminities/<?=$HealthAndFitnessIcon[$k]?>">
                           <div class="py-2">
                              <small><strong><?=$HealthAndFitness[$k]?></strong></small>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php 
                     }
                     }
                     
                     if(isset($property_feature->LaundryAndKitchen) && !empty($property_feature->LaundryAndKitchen))
                     {
                     
                     
                     $EncodedLaundryAnd = $property_feature->LaundryAndKitchen;
                     $LaundryAndData = json_decode($EncodedLaundryAnd);
                     foreach ($LaundryAndData as $k =>$v)
                     {
                       ?>
                  <div class=" col-sm-3">
                     <div class="featureTab">
                        <div class="text-center">
                           <img  src="<?=base_url()?>/assets/images/icon/aminities/<?=$LaundryAndKitchenIcon[$k]?>">
                           <div class="py-2">
                              <small><strong><?=$LaundryAndKitchen[$k]?></strong></small>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php 
                     }
                     }
                     if(isset($property_feature->BusinessAndSecurity) && !empty($property_feature->BusinessAndSecurity))
                     {
                     
                     
                     $EncodedBusinessAnd = $property_feature->BusinessAndSecurity;
                     $BusinessAndData = json_decode($EncodedBusinessAnd);
                     foreach ($BusinessAndData as $k =>$v)
                     {
                       ?>
                  <div class=" col-sm-3">
                     <div class="featureTab">
                        <div class="text-center">
                           <img  src="<?=base_url()?>/assets/images/icon/aminities/<?=$BusinessAndSecurityIcon[$k]?>">
                           <div class="py-2">
                              <small><strong><?=$BusinessAndSecurity[$k]?></strong></small>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php 
                     }
                     }
                     if(isset($property_feature->Miscellaneous) && !empty($property_feature->Miscellaneous))
                     {
                     
                     
                     $EncodedMiscellaneous = $property_feature->Miscellaneous;
                     $MiscellaneousData = json_decode($EncodedMiscellaneous);
                     foreach ($MiscellaneousData as $k =>$v)
                     {
                       ?>
                  <div class=" col-sm-3">
                     <div class="featureTab">
                        <div class="text-center">
                           <img  src="<?=base_url()?>/assets/images/icon/aminities/<?=$MiscellaneousListIcon[$k]?>">
                           <div class="py-2">
                              <small><strong><?=$MiscellaneousList[$k]?></strong></small>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php 
                     }
                     }
                     if(isset($property_feature->Technology) && !empty($property_feature->Technology))
                     {
                     
                     
                     $EncodedTechnology = $property_feature->Technology;
                     $TechnologyData = json_decode($EncodedTechnology);
                     foreach ($TechnologyData as $k =>$v)
                     {
                       ?>
                  <div class=" col-sm-3">
                     <div class="featureTab">
                        <div class="text-center">
                           <img  src="<?=base_url()?>/assets/images/icon/aminities/<?=$TechnologyListIcon[$k]?>">
                           <div class="py-2">
                              <small><strong><?=$TechnologyList[$k]?></strong></small>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php 
                     }
                     }
                     
                     if(isset($property_feature->Features) && !empty($property_feature->Features))
                     {
                     
                     
                     $EncodedFeatures = $property_feature->Features;
                     $TechnologyData = json_decode($EncodedFeatures);
                     foreach ($TechnologyData as $k =>$v)
                     {
                       ?>
                  <div class=" col-sm-3">
                     <div class="featureTab">
                        <div class="text-center">
                           <img  src="<?=base_url()?>/assets/images/icon/aminities/<?=$FeaturesListIcon[$k]?>">
                           <div class="py-2">
                              <small><strong><?=$FeaturesList[$k]?></strong></small>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php 
                     }
                     }
                     if(isset($property_feature->CleaningAndMaintenance) && !empty($property_feature->CleaningAndMaintenance))
                     {
                     
                     
                     $EncodedCleaningAnd = $property_feature->CleaningAndMaintenance;
                     $CleaningAndData = json_decode($EncodedCleaningAnd);
                     foreach ($CleaningAndData as $k =>$v)
                     {
                       ?>
                  <div class=" col-sm-3">
                     <div class="featureTab">
                        <div class="text-center">
                           <img  src="<?=base_url()?>/assets/images/icon/aminities/<?=$FeaturesListIcon[$k]?>">
                           <div class="py-2">
                              <small><strong><?=$FeaturesList[$k]?></strong></small>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php 
                     }
                     }
                     
                     }
                     
                     
                     ?>
               </div>
               <!--Features & Amenities Section End-->
            </div>
            <div id="neighbourhood"  class="tab-pane fade show " >
               <h6  >@Location & Nearby</h6>
               <hr>
               <!--Map Content Starts-->
               <div class="row">
                  <div class="col-sm-3 cursor_pointer" id="locationDiv" data-toggle="modal" data-target=".bd-popup-modal-location">
                     <div class="card bg-white">
                        <img class="modernOuterDiv card-img-top" src="<?=base_url()?>/assets/images/icon/iconLocationCardView_noinline.svg" alt="Card image cap">
                        <div class="card-body p-1 text-center">
                           <p class="card-title">LOCATION ></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-3 cursor_pointer"  id="schoolDiv"  data-toggle="modal" data-target=".bd-popup-modal-location">
                     <div class="card bg-white">
                        <img class="modernOuterDiv card-img-top" src="<?=base_url()?>/assets/images/icon/iconSchoolCardView_noinline.svg" alt="Card image cap">
                        <div class="card-body p-1 text-center">
                           <p class="card-title">SCHOOLS ></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-3 cursor_pointer"  id="restaurantDiv"  data-toggle="modal" data-target=".bd-popup-modal-location">
                     <div class="card bg-white">
                        <img class="modernOuterDiv card-img-top" src="<?=base_url()?>/assets/images/icon/iconRestaurantCardView_noinline.svg" alt="Card image cap">
                        <div class="card-body p-1 text-center">
                           <p class="card-title">RESTAURANTS ></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-3 cursor_pointer " id="hospitalDiv"  data-toggle="modal" data-target=".bd-popup-modal-location">
                     <div class="card bg-white">
                        <img class="modernOuterDiv card-img-top" src="<?=base_url()?>/assets/images/icon/iconHospitalCardView_noinline.svg" alt="Card image cap">
                        <div class="card-body p-1 text-center">
                           <p class="card-title">HOSPITALS ></p>
                        </div>
                     </div>
                  </div>
               </div>
               <!--Map Content Ends-->
            </div>
            <div id="trends" class="tab-pane fade active show">

               <h6>Trends</h6>
               <hr>
               <p><?php echo $property->EnTitle;?>, <?php echo $property->beds;?>  bed,  <?php echo number_format($property->area);?> sqft, <?=$propertyType_name?> <?=$purposeList_name?>.</p>
               <div class="row">
                  <div class="col-sm-12">
                     <div id="chart_div" style="width: 100%; height: 500px;">
                     </div>
                  </div>
               </div>
               <p>Popularity comparison of <?php echo $property->beds;?>  Bed <?=$propertyType_name?>  in <?php echo $property->location;?> </p>
               <div class="row">
                  <div class="col-sm-12">
                     <div id="dual_x_div" style="height: 500px;">
                     </div>
                  </div>
               </div>
            </div>
            <div  id="calculator"  class="tab-pane fade active show">
               <h6>Calculator</h6>
               <hr>
               <p>Calculate and view the monthly mortgage on this apartment</p>
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
                                          <input type="text" class="form-control" aria-describedby="basic-addon1" id="total_price_aed" value="<?=$property->rent;?>" />
                                          
                                          <span class="input-group-text" id="basic-addon1">AED</span>
                                       </div>
                                       <input type="hidden"  id="total_price_aed_hidden" value="<?=$property->rent;?>" />
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
                     <!--Calculator Row Ends-->
                  </div>
                  <!--Calculator Tab Content Ends-->
               </div>
               <!-- tab-content -->
            </div>
         </div>
         <!--Row-->
      </div>
   </div>
   <!--Side Column Start With Col-SM-3-->
   <div class="col-md-4 col-xs-12" style="height: 30vh;">
      <div class="bg-white" >
         <div class="row">
            <div class="col-sm-12 ">
               <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action">
                     <p class="text-dark text-center"><strong>Useful Links</strong></p>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">Properties for sale in Dubai</a>
                  <a href="#" class="list-group-item list-group-item-action">Properties for sale in Arabian Ranches</a>
               </div>
            </div>
         </div>
         <div class="row  ">
            <div class="col-sm-12  p-3 text-center">
               <button class="btn btn-outline-info btn-sm"><i class="fas fa-flag" aria-hidden="true"></i>&nbsp;&nbsp;Report this property</button>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="mt-3 mb-3">
   <div class="container-fluid wrap-container">
      <?php $i = 1;
         if(isset($get_related_property) && !empty($get_related_property))
         {
         
         
         ?>
      <div class="row ">
         <div class="col-sm-12 pb-0" id="seeAlsoBtn">
            <a href="<?php echo base_url()?>propertylist/index?category=<?=base64_encode($property->type)?>" class="btn btn-info btn-sm">See Also</a>
         </div>
      </div>
      <div class="row">
         <?php
            // $get_related_property = $get_related_property[0];
            
            /* echo "<pre>";
            print_r($get_related_property);
            echo "</pre>";*/
              foreach($get_related_property as   $value)
              {
            
            
                 if(isset($value->image) and $value->image!=='')
                   {
                   
                   $thumb='';
                   $image_data= json_decode($value->image);
                   //print_r( $image_data);
                   $thumb =   $image_data[0];
                   }else
                   {
                   $thumb='';
                   }
                         
            
                   $ttitle = str_replace('(', '', $value->EnTitle); 
                   $ttitle = str_replace(')', '', $ttitle); 
                   $ttitle = str_replace(' ', '-', $ttitle);
                   $ttitle = str_replace(',', '', $ttitle); 
                   
                 ?> 
         <div class="col-md-3 col-xs-12 mainDiv mt-4">
            
               <div class="AleBoxes">
                   <a href="<?php echo base_url();?>propertydetails/<?=($value->slug_url)?>" class="propertyDetails">
                    <?php
                     if(isset($thumb) and  $thumb!=='')
                      {
                      ?>
                  <img  src="<?php echo base_url();?>uploads/property/<?=$thumb?>" class="img-fluid">
                  <?php
                     }else
                     {
                         ?>
                  <img  src="<?php echo base_url();?>uploads/property/default-property.jpg" class="img-fluid">
                  <?php
                     }
                     ?></a>
                  <div class="property-cont">
                  <h5 class="property-title">
                     <span><strong>AED  <?php echo number_format($value->rent); ?></strong></span>
                     <span class="pull-right awsomeAle" style="cursor: pointer;" onclick="bookmarkToggle('asd','dasd','asd','asd')"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                  </h5>
                   <div class="d-flex mt-3 text-center">
                     <span class="ale_faci">&nbsp;<?php echo  $value->beds; ?>&nbsp;&nbsp;<i class="fa fa-bed" aria-hidden="true"></i><br>
                     <span class="ale_pop">Bedrooms</span></span>
                     <span class="ale_faci">&nbsp;<?php echo $value->baths; ?>&nbsp;&nbsp;<i class="fa fa-bath" aria-hidden="true"></i><br>
                     <span class="ale_pop">Bathrooms</span></span>
                     <span class="ale_faci">&nbsp;&nbsp;&nbsp;<i class="fa fa-home" aria-hidden="true"></i><br>
                     <span class="ale_pop">Condo</span></span>   
                  </div>
                  <!-- <p class="mt-3"><?php echo $value->landlord; ?></p> -->
                </div>
                
           <div class="row m-2 mb-3">
                    <div class="col-sm-8">
                      <button type="button contact-by-call" data-toggle="modal" data-target="#PhoneModal" data-userid="<?php echo $value->id;?>"  data-phone="<?php echo $value->comp_phone;?>"  data-mobile="<?php echo $value->comp_mobile;?>" data-email="<?php echo $value->comp_email;?>" class="btn btn-primary btn-sm home_meet_btn m-0"> <i class="fa fa-phone" aria-hidden="true"></i> Call</button>
                      <button type="button contact-by-email" data-toggle="modal" data-target="#emailModal"  data-userid="<?php echo $value->id;?>"  data-phone="<?php echo $value->comp_phone;?>"  data-mobile="<?php echo $value->comp_mobile;?>" data-email="<?php echo $value->comp_email;?>"  data-landlord_id="<?php echo $value->landlord_id;?>"  data-comp_name="<?php echo $value->comp_name;?>"  data-comp_img="<?php echo base_url().'uploads/vendor/'.$value->comp_profile;?>" data-comp_url="<?php echo base_url()."companies/".$value->comp_url."/".base64_encode($value->comp_userid);?>" class="btn btn-secondary btn-sm home_meet_btn m-0"> <i class="fa fa-envelope" aria-hidden="true"></i> E-Mail</button>  
                     
                      </div>
                      <div class="col-sm-4">
                        <a href="<?php echo base_url()."companies/".$value->comp_url."/".base64_encode($value->comp_userid);?>">
                          <img src="<?php echo base_url().'uploads/vendor/'.$value->comp_profile;?>"  style="width:100%;height:60px;background:unset">
                        </a>
                       
                      </div>
                  </div>
               </div>
            
         </div>
         <?php 
            }  
            }
            ?>
      </div>
   </div>
       <input id="autocomplete" hidden="" placeholder="Enter a city" type="text" value="<?=$propeerty_location?>"/>

</section>

<div class="modal fade" id="PhoneModal" tabindex="-1" role="dialog" aria-labelledby="PhoneModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="width: auto;height: auto;padding: 15px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Contact Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mobile_number_content">
          
        </div>
       
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content"  style="width: 48%;height: auto;padding: 15px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Agent</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
          include_once ("contact-form-model.php");
        ?>
      </div>
    </div>
  </div>
</div>

    
    <script>
       $('#PhoneModal').on('hidden.bs.modal', function (event) {
         $('.mobile_number_content').html('');
      });
      $('#PhoneModal').on('shown.bs.modal', function (event) {

        var button = $(event.relatedTarget) 
          $('.mobile_number_content').html('');
           var userid =  button.data("userid");
           var phone =  button.data("phone");
           var mobile =  button.data("mobile");
           console.log(userid,phone,mobile);
      var html_content= '<table class="table ">';

      var html_content= html_content+'<tr><th colspan="2" class="text-center">Contact Details</td></tr>';  
      if(phone.length >0)
      {
        var href_phone =  phone.replace(" ", "");
        var html_content= html_content+'<tr><th scope="row">Phone Number : </th><td><a href="tel:'+href_phone+'">'+phone+'</a></td></tr>';  
      } 
      if(mobile.length >0)
      {
         var href_mobile =  mobile.replace(" ", "");
        var html_content= html_content+'<tr><th scope="row">Mobile  Number : </th><td><a href="tel:'+href_mobile+'">'+mobile+'</a></td></tr>';  
      }
      
      var html_content= html_content+'</table>';
      if(phone.length >0 || mobile.length >0)
      {

      }else
      {
          html_content= html_content+'<tr> <td>Not Found</td></tr>'; 

      }
      $('.mobile_number_content').html(html_content);
      });
    
    $('#emailModal').on('shown.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var comp_img =  button.data("comp_img");
          var comp_url =  button.data("comp_url");
          var comp_name =  button.data("comp_name");
          var property_id =  button.data("userid");
          var landlord_id =  button.data("landlord_id");
        $('.company-image').html('<img src="'+comp_img+'"  style="width:100px;height: 60px;background:unset">');
       $('.company-name').html(comp_name);
       $('.company-url').attr('href',comp_url);
       $("#contact-form-model input[name=property_id]").val(property_id);
       $("#contact-form-model input[name=landlord_id]").val(landlord_id);
        
         

    });
     $('#emailModal').on('hidden.bs.modal', function (event) {
      $('.company-image').html('');
      $("#contact-form-model input[name=property_id]").val('');
       $("#contact-form-model input[name=landlord_id]").val('');
      $('.company-name').html('');
      $('.company-url').attr('href',"#");
      $(this)
        .find("input,textarea,select")
           .val('')
           .end()
        .find("input[type=checkbox], input[type=radio]")
           .prop("checked", "")
           .end();
     });
      $("#contact-form-model").submit(function(event){
          
       event.preventDefault()
       
      var contactForm = $(this);
      
          $.ajax({
               type: 'POST',
               url: "<?=base_url()?>propertydetails/insert_contactus", 
               data: contactForm.serialize(),
               success:function(response){
                    
                  if(response.status == 'success') 
                  {
                     $(".error_message").removeClass( "text-danger" );
                     $(".error_message").addClass( "text-success" );
                     $(".error_message").html(response.message);
                     window.location.reload();
                     $("#contact-form-model")
                      .find("input,textarea,select")
                         .val('')
                         .end()
                      .find("input[type=checkbox], input[type=radio]")
                         .prop("checked", "")
                         .end();
                      
                  }
                  if(response.status == 'error')
                  {
   
                     $(".error_message").removeClass( "text-success" );
                     $(".error_message").addClass( "text-danger" );
                     $(".error_message").html(response.message); 
   
                  }
                 
                  
                   return false;
               }
         }); 
         
          
      });
    </script>
<!--Properties Suggestion Section End-->
<!--Bar Graph JavaScript Start-->

<script type="text/javascript">
 // press div for popup
   $("#locationDiv").click(function(){
       
        $(".location .tab-pane").hide();
        $("#nav-property").show();
        $(".tabActiveLists .tabActiveList").removeClass("active");
        
         $(".location .tab-pane").addClass("fade");
          $("#nav-property").removeClass("fade");
         $("#nav-property-tab").addClass("active");
         
          
         
        setTimeout(function(){ search(); }, 1000);

		
      }); 
   $("#hospitalDiv").click(function(){
      
        $(".location .tab-pane").hide();
        $("#nav-hospitals").show();

         $(".tabActiveLists .tabActiveList").removeClass("active");
         $(".location .tab-pane").addClass("fade");
          $("#nav-hospitals").removeClass("fade");
         $("#nav-hospitals-tab").addClass("active");
         setTimeout(function(){ search('hospital'); }, 1000);
		
      });  
   $("#schoolDiv").click(function(){
    
        $(".location .tab-pane").hide();
        $("#nav-school").show();
         $(".tabActiveLists .tabActiveList").removeClass("active");
         $(".location .tab-pane").addClass("fade");
          $("#nav-school").removeClass("fade");
         $("#nav-school-tab").addClass("active");

         setTimeout(function(){ search('school'); }, 1000);
		 
      });  
   $("#restaurantDiv").click(function(){
      
        $(".location .tab-pane").hide();
        $("#nav-restaurant").show();
        $(".tabActiveLists .tabActiveList").removeClass("active");
        $(".location .tab-pane").addClass("fade");
          $("#nav-restaurant").removeClass("fade");
         $("#nav-restaurant-tab").addClass("active");

        setTimeout(function(){ search('restaurant'); }, 1000);
		
      }); 

//press tab button
   $("#nav-property-tab").click(function(){
    
        $(".location .tab-pane").hide();
        $("#nav-property").show();
		    search();
      });
   
   $("#nav-school-tab").click(function(){
          
        $(".location .tab-pane").hide();
        $("#nav-school").show();
		search('school');
      });
   
   $("#nav-restaurant-tab").click(function(){
      
        $(".location .tab-pane").hide();
        $("#nav-restaurant").show();
		search('restaurant');
      });
   $("#nav-hospitals-tab").click(function(){
      
        $(".location .tab-pane").hide();
        $("#nav-hospitals").show();
		search('hospital');
      });
   $("#nav-parks-tab").click(function(){
      
        $(".location .tab-pane").hide();
        $("#nav-parks").show();
		search('park');
      });
   
   
   
   
   
   
      $("#propPhoto-tab").click(function(){
        $("#nav-tabContent .tab-pane").hide();
        $("#propPhoto").show();
      });
   
       $("#propFloorPhoto-tab").click(function(){
        $("#nav-tabContent .tab-pane").hide();
        $("#propFloorPhoto").show();
      }); 
       $("#propMap-tab").click(function(){
        $("#nav-tabContent .tab-pane").hide();
        $("#propMap").show();
      }); 
       $("#show_map").click(function(){
          $("#nav-tabContent .tab-pane").removeClass("active");
          $("#nav-tabContent .tab-pane").removeClass("show");
          $(".nav-link").removeClass("active");

          $("#nav-tabContent .tab-pane").hide();
          $("#propMap").show();
          $("#propMap").addClass("show");
          $("#propMap").addClass("active");
          $("#propMap-tab").addClass("active");
          search();
      });



          
        $( document ).ready(function(){
           var uri_strings = '<?=uri_string(true)?>';
            $("#bookmark").click(function(){
                var condition = $("#data-bookmrk").val();

                
              if(condition==1)
              {
                 var urll = "<?=base_url()?>propertydetails/remove_bookmarks";
                 var bookmrk = 0;
              }else
              {
                var urll = "<?=base_url()?>propertydetails/insert_bookmarks";
                var bookmrk = 1;
              }
               
            $.ajax({

                  type: 'post',
                  url: urll, 
                  data: {property_id:'<?=$property->id?>',uri_strings:uri_strings,},
                  success:function(response){
                       $("#data-bookmrk").val(bookmrk)
                      if(response.status) 
                     {
                         
                        

                       if(response.status == 'success') 
                     {
                        $msgSuccess = response.message;
                          render('success');
                          
                       }else if(response.status == 'error')
                       {
                        $msgDanger = response.message;
                          render('danger');
                       }else if(response.status =='errorLogin')
                       {
                         menu_login_modal_show();
                       }
                       setTimeout(function(){ hide(); }, 3000);  
                       }
                     }
            });
            
         
       });
             search();
        });
       
   function bookmarkToggle(bookmarkid,data_bookmark,properyid,uri_strings)
 {
  var condition = $("#'"+data_bookmark+"'").val();
    alert(bookmarkid);
                
              
 } 

 function bookmarkToggle1(bookmarkid,data_bookmark,properyid,uri_strings)
 {

                var condition = $("#'"+data_bookmark+"'").val();
                alert(condition);
              if(condition==1)
              {
                 var urll = "<?=base_url()?>propertydetails/remove_bookmarks";
                 var bookmrk = 0;
              }else
              {
                var urll = "<?=base_url()?>propertydetails/insert_bookmarks";
                var bookmrk = 1;
              }
               
            $.ajax({

                  type: 'post',
                  url: urll, 
                  data: {property_id:properyid,uri_strings:uri_strings},
                  success:function(response){
                    console.log(response);
                       $("#"+data_bookmark).val(bookmrk)
                      if(response.status) 
                     {
                         
                        

                       if(response.status == 'success') 
                     {
                        $msgSuccess = response.message;
                          render('success');
                          
                       }else if(response.status == 'error')
                       {
                        $msgDanger = response.message;
                          render('danger');
                       }else if(response.status =='errorLogin')
                       {
                         menu_login_modal_show();
                       }
                       setTimeout(function(){ hide(); }, 3000);  
                       }
                     }
            });
 }
       
</script>
<script type="text/javascript">
   google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawStuff);
    
    function drawStuff() {
    var data = new google.visualization.arrayToDataTable([
    ['Galaxy', 'Distance', 'Brightness'],
    ['Canis Major Dwarf', 8000, 23.3],
    ['Sagittarius Dwarf', 24000, 4.5],
    ['Ursa Major II Dwarf', 30000, 14.3],
    ['Lg. Magellanic Cloud', 50000, 0.9],
    ['Bootes I', 60000, 13.1]
    ]);
    
    
    var options = {
    width: 750,
    chart: {
      title: '',
      subtitle: ''
    },
    bars: 'horizontal', // Required for Material Bar Charts.
    series: {
      0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
      1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
    },
    axes: {
      x: {
        distance: {label: 'parsecs'}, // Bottom x-axis.
        brightness: {side: 'top', label: 'apparent magnitude'} // Top x-axis.
      }
    }
    };
    
    var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
    chart.draw(data, options);
    };
</script>
<!--Bar Graph JavaScript End-->
<!--Line Graph JavaScript Start-->
<script type="text/javascript">
   google.charts.load('current', {packages: ['corechart', 'line']});
   google.charts.setOnLoadCallback(drawLineColors);
   
   function drawLineColors() {
       var data = new google.visualization.DataTable();
       data.addColumn('number', 'X');
       data.addColumn('number', 'Dogs');
       data.addColumn('number', 'Cats');
   
       data.addRows([
         [0, 0, 0],    [1, 10, 5],   [2, 23, 15],  [3, 17, 9],   [4, 18, 10],  [5, 9, 5],
         [6, 11, 3],   [7, 27, 19],  [8, 33, 25],  [9, 40, 32],  [10, 32, 24], [11, 35, 27],
         [12, 30, 22], [13, 40, 32], [14, 42, 34], [15, 47, 39], [16, 44, 36], [17, 48, 40],
         [18, 52, 44], [19, 54, 46], [20, 42, 34], [21, 55, 47], [22, 56, 48], [23, 57, 49],
         [24, 60, 52], [25, 50, 42], [26, 52, 44], [27, 51, 43], [28, 49, 41], [29, 53, 45],
         [30, 55, 47], [31, 60, 52], [32, 61, 53], [33, 59, 51], [34, 62, 54], [35, 65, 57],
         [36, 62, 54], [37, 58, 50], [38, 55, 47], [39, 61, 53], [40, 64, 56], [41, 65, 57],
         [42, 63, 55], [43, 66, 58], [44, 67, 59], [45, 69, 61], [46, 69, 61], [47, 70, 62],
         [48, 72, 64], [49, 68, 60], [50, 66, 58], [51, 65, 57], [52, 67, 59], [53, 70, 62],
         [54, 71, 63], [55, 72, 64], [56, 73, 65], [57, 75, 67], [58, 70, 62], [59, 68, 60],
         [60, 64, 56], [61, 60, 52], [62, 65, 57], [63, 67, 59], [64, 68, 60], [65, 69, 61],
         [66, 70, 62], [67, 72, 64], [68, 75, 67], [69, 80, 72]
       ]);
   
       var options = {
         hAxis: {
           title: 'Time'
         },
         vAxis: {
           title: 'Popularity'
         },
         colors: ['#a52714', '#097138']
       };
   
       var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
       chart.draw(data, options);
     }
   
</script>
<!-- collapse js -->
<script>
   var coll = document.getElementsByClassName("collapsible");
   var i;
   
   for (i = 0; i < coll.length; i++) {
     coll[i].addEventListener("click", function() {
       this.classList.toggle("collapseactive");
       var content = this.nextElementSibling;
       if (content.style.maxHeight){
         content.style.maxHeight = null;
       } else {
         content.style.maxHeight = content.scrollHeight + "px";
       } 
     });
   }
</script>
<!-- end -->
<!-- tab js  --> 
 
<script>
   // Get the modal
   var modal = document.getElementById("carouselModal");
   
   // Get the button that opens the modal
   var btn = document.getElementById("carouselExampleControls");
   
   // Get the <span> element that closes the modal
   var span = document.getElementsByClassName("carouselClose1")[0];
   
   window.onclick = function(event) {
     if (event.target == modal ) {
       modal.style.display = "none";
     }
   }
    
</script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/gallery.js"></script>
<script type="text/javascript">
   var _gaq = _gaq || [];
   _gaq.push(['_setAccount', 'UA-36251023-1']);
   _gaq.push(['_setDomainName', 'jqueryscript.net']);
   _gaq.push(['_trackPageview']);
   
   (function() {
     var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
   })();
   
</script>
<script src="<?php echo base_url();?>assets/js/lightslider.js"></script>
<script>
   $('#lightSlider').lightSlider({
    gallery: true,
    item: 1,
    loop:true,
    slideMargin: 0,
    thumbItem: 9
   });
</script>

<script type="text/javascript">
   $( document ).ready(function(){
      $("#agent_form1").submit(function(event){
          
       event.preventDefault()
       
      var contactForm = $(this);
      
          $.ajax({
               type: 'POST',
               url: "<?=base_url()?>propertydetails/insert_contactus", 
               data: contactForm.serialize(),
               success:function(response){
                    
                  if(response.status == 'success') 
                  {
                     $(".error_message").removeClass( "text-danger" );
                     $(".error_message").addClass( "text-success" );
                     $(".contact_name").val('');
                     $(".contact_email").val('');
                     $(".contact_mobile").val('');
                     setblank();
                  }
                  if(response.status == 'error')
                  {
   
                     $(".error_message").removeClass( "text-success" );
                     $(".error_message").addClass( "text-danger" );
   
                  }
                   setblank();
                  $(".error_message").html(response.message); 
                   return false;
               }
         }); 
         
          
      });
   $("#agent_form2").submit(function(event){
        
       
      var contactForm = $(this);
         $.ajax({
               type: 'post',
               url: "<?=base_url()?>propertydetails/insert_contactus", 
               data: contactForm.serialize(),
               success:function(response){
                   
                  if(response.status == 'success') 
                  {
                     $(".error_message").removeClass( "text-danger" );
                     $(".error_message").addClass( "text-success" );
                     $(".contact_name").val('');
                     $(".contact_email").val('');
                     $(".contact_mobile").val('');
                     setblank();
                  }
                  if(response.status == 'error')
                  {
   
                     $(".error_message").removeClass( "text-success" );
                     $(".error_message").addClass( "text-danger" );
   
                  }
                   setblank();
                  $(".error_message").html(response.message); 
               }
         }); 
         
         return false;
      });
   $("#agent_form3").submit(function(event){
        
       
      var contactForm = $(this);
         $.ajax({
               type: 'post',
               url: "<?=base_url()?>propertydetails/insert_contactus", 
               data: contactForm.serialize(),
               success:function(response){
                   
                  if(response.status == 'success') 
                  {
                     $(".error_message").removeClass( "text-danger" );
                     $(".error_message").addClass( "text-success" );
                     $(".contact_name").val('');
                     $(".contact_email").val('');
                     $(".contact_mobile").val('');
                     setblank();
                  }
                  if(response.status == 'error')
                  {
   
                     $(".error_message").removeClass( "text-success" );
                     $(".error_message").addClass( "text-danger" );
   
                  }
                   setblank();
                  $(".error_message").html(response.message); 
               }
         }); 
         
         return false;
      });
   /*$(".call_action").click(function()
   {
    alert("hellow");
     var number = $(".call_action").data("call_val");
     $(".call_trigger").text(number);
      
   });  */
   });
   
   function show_number(idd,nujmber)
   {
    $(".call_trigger"+idd).text(nujmber);
   }
   function setblank()
   {
      setTimeout(function(){ 
      $(".error_message").html('');
   
      }, 3000);
    }
   
</script>
<script type="text/javascript">



  /*calculation start*/

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
   function setloanRange()
   {
       var loanperiod = $("#loanperiod").val();
         
         $("#loanPeriodRange").val(loanperiod);
         $("#payment_breakdown").css("width",(loanperiod)+"%");
   
    
   } 
   function setTotalPriceRange()
   {
       var loanperiod = $("#loanperiod").val();
         
         $("#loanPeriodRange").val(loanperiod);
         $("#payment_breakdown").css("width",(loanperiod)+"%");
   
    
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
$(document).keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
         
         
        setTotalPriceRange();
        setloanRange();
         calculations();
   
   
    }
});



/*calculation end*/


</script>
 <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map-property,#map-school , 
      #map-hospital , 
      #map-park, 
      #map-restaurant  {
        width: 100%;height:64vh
      }
       
   </style>
   
   <script type="text/javascript">
   /*var types = ["lodging", "restaurant", "stadium"];*/
     var types = ["school", "restaurant", "hospital", "park"];
    
   var map, places, infoWindow;
   var markers = [];
   var autocomplete, geocoder;
    
   var countryRestrict = {
     'country': 'us'
   };
   var MARKER_PATH = 'https://developers.google.com/maps/documentation/javascript/images/marker_green';
   var MARKER_BASEPATH = 'https://maps.google.com/mapfiles/ms/micons/';



/*
   var MARKER_PATH = '<?=base_url()?>assets/images/markers/';
   var MARKER_BASEPATH = '<?=base_url()?>assets/images/markers/';*/
   var customIcons = {
      
     restaurant: {
       icon: MARKER_BASEPATH + "red.png"
     },
     school: {
       icon: MARKER_BASEPATH + "green.png"
     },
     hospital: {
       icon: MARKER_BASEPATH + "red.png"
     },
     park: {
       icon: MARKER_BASEPATH + "blue.png"
     }
   };
   var hostnameRegexp = new RegExp('^https?://.+?/');

   var countries = {
     'us': {
       center: {
         lat: <?=$property_lat;?>,
         lng: <?=$property_lng;?>
          
       },
       zoom: 10
     },
   };

   function initMap() {
      
  latlng = new google.maps.LatLng(<?=$latlang?>);
     map = new google.maps.Map(document.getElementById('map-property'), {
       zoom: countries['us'].zoom,
       center: countries['us'].center,
       mapTypeControl: false,
       panControl: false,
       zoomControl: false,
       streetViewControl: false
     });
      
        geocoder = new google.maps.Geocoder();
        infoWindow = new google.maps.InfoWindow({
       content: document.getElementById('info-content')
     });

 new google.maps.Marker({
          position: latlng,
          map,
          title: "<?=$propeerty_location?>",
        });
     // Create the autocomplete object and associate it with the UI input control.
     // Restrict the search to the default country, and to place type "cities".
     autocomplete = new google.maps.places.Autocomplete(
       /** @type {!HTMLInputElement} */
       (
         document.getElementById('autocomplete')), {
         types: ['(cities)'],
         componentRestrictions: countryRestrict
       });
     places = new google.maps.places.PlacesService(map);
  }
  function initMap2() {
  const myLatLng = countries['us'].center;
  const map2 = new google.maps.Map(document.getElementById("map-property2"), {
    zoom: 12,
    center: myLatLng,
  });
  new google.maps.Marker({
    position: myLatLng,
    map:map2,
    title: "<?=$propeerty_location?>",
  });
}

   
   </script>
   <script src="<?=base_url()?>assets/js/googel_map_functions.js"></script>
   <script type="text/javascript">
      // when page loaded
       window.onload = function() {
        search();
        initMap2();
        if('<?=$property_lat?>'==0.00)
        {
          codeAddress("<?=$propeerty_location?>"); 
        }
         
        
      };



   </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvghjFMkr-wHP0DxCaROqVO5_v3LM9-FA&libraries=places&callback=initMap" async defer></script>

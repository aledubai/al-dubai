<script src='https://kit.fontawesome.com/a076d05399.js' ></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" type="text/css" href="css/slideshow.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slideshow.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/example.css">

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
         <div class="col-md-8 col-xs-12">
            <div class="propImg">
               <!--Carousel Content Start-->
               <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <?php
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


                                $caresual_slide .= '<div class="carousel-item  '.$active_caresual.'">';
                                $caresual_slide .= '<img src="'.base_url().'uploads/property/'.$encoded_images[$i].'" class="d-block w-100" alt="...">';
                                $caresual_slide .= '</div>';

                                $gallery_slide.='<div id="img-'.$i.'" data-img-id="'.$i.'" class="img-wrapper '.$active_caresual.'" style="background-image: url(\''.base_url().'uploads/property/'.$encoded_images[$i].'\')"></div>';


                                $thumb_slide .='<li data-thumb-id="'.$i.'" class="thumb  '.$active_caresual.'" style="background-image: url(\''.base_url().'uploads/property/'.$encoded_images[$i].'\')"></li>';
                                



                            }
                          }
                      }else
                      {
                          $caresual_slide .= '<div class="carousel-item '.$active_caresual.'">';
                          $caresual_slide .= '<img src="'.base_url().'uploads/property/default-property.jpg" class="d-block w-100" alt="...">';
                          $caresual_slide .= '</div>';


                                 $gallery_slide.='<div id="img-'.$i.'" data-img-id="'.$i.'" class="img-wrapper '.$active_caresual.'" style="background-image: url(\''.base_url().'uploads/property/default-property.jpg\')"></div>';

                                  $thumb_slide .='<li data-thumb-id="'.$i.'" class="thumb  '.$active_caresual.'" style="background-image: url(\''.base_url().'uploads/property/default-property.jpg\')"></li>';
                         
                      }



                  echo $caresual_slide;
                    ?>
                     <!--<div class="carousel-item active">
                            <img src="<?php echo base_url();?>uploads/property/default-property.jpg" class="d-block w-100" alt="...">
                         </div>
                     <div class="carousel-item">
                        <img src="<?php echo base_url();?>assets/images/bg_4.jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="<?php echo base_url();?>assets/images/bg_4.jpg" class="d-block w-100" alt="...">
                     </div>-->
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

               <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  ...
                </div>
              </div>
            </div>

            <!-- Small modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>

            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  ...
                </div>
              </div>
            </div>
               <div id="carouselModal" class="modal">
                  <div class="carouselModalContent" id="modal2">
                     <span class="carouselClose1" style="margin-top: 15px;">&times;</span>
                     <section>
                        <div class="container filterContainer">
                           <div class="row">
                              <div class="col-sm-8">
                                 <!--Tab Menu Starts-->
                                 <div class="form-control">
                                    <ul class="nav nav-tabs myTab" role="tablist">
                                       <li class="nav-item propPoptab py-2">
                                          <a data-toggle="tab" href="#propPhoto" role="tab" class="propPop">
                                          <strong><i class="fas fa-images" aria-hidden="true"></i>&nbsp;&nbsp;Photos</strong></a>
                                       </li>

                                       <?php

                                       if(isset($property_plan[0]) && !empty($property_plan[0]))
                                       {
                                          $property_plan = $property_plan[0];

                                          if(isset($property_plan->image) && $property_plan->image !=='')
                                          {




                                            ?>
                                            <li class="nav-item propPoptab py-2" style="margin-left: 7%;">
                                              <a data-toggle="tab" href="#propFloorPhoto" role="tab" class="propPop">
                                              <strong><i class="fas fa-photo-video" aria-hidden="true"></i>&nbsp;&nbsp;Floor Plan</strong></a>
                                           </li>
                                            <?php
                                              $plan_caresual_slide = '';
                                              $plan_indicater  = '';
                                                 
                                                $encoded_plans = json_decode($property_plan->image) ;
                                                      
                                                for ($i=0; $i < count($encoded_plans); $i++) 
                                                { 

                                                    $active_plan_caresual = ' ';
                                                    if($i==0){
                                                      $active_plan_caresual = 'active';
                                                    }


                                                    $plan_caresual_slide .= '<div class="carousel-item  '.$active_plan_caresual.'">';
                                                    $plan_caresual_slide .= '<img src="'.base_url().'uploads/propertyplans/'.$encoded_plans[$i].'" class="d-block w-100" alt="...">';
                                                    $plan_caresual_slide .= '</div>';




                                                   /* $plan_gallery_slide.='<div id="img-'.$i.'" data-img-id="'.$i.'" class="img-wrapper '.$active_plan_caresual.'" style="background-image: url(\''.base_url().'uploads/propertyplans/'.$encoded_plans[$i].'\')"></div>';


                                                    $plan_thumb_slide .='<li data-thumb-id="'.$i.'" class="thumb  '.$active_plan_caresual.'" style="background-image: url(\''.base_url().'uploads/propertyplans/'.$encoded_plans[$i].'\')"></li>';*/


                                                      $plan_indicater .='<li data-target="#carouselExampleIndicators"  data-slide-to="'.$i.'" class="'.$active_plan_caresual.'"></li>';
                                                    
                                                     



                                                }
                                               




                                          }
                                          
                                       }
                                        

                                        
                                        

                                       ?>
                                       
                                       <li class="nav-item propPoptab py-2" style="margin-left: 12%;">
                                          <a data-toggle="tab" href="#propMap" role="tab" class="propPop">
                                          <strong><i class="fas fa-map-marked-alt" aria-hidden="true"></i>&nbsp;&nbsp;Map</strong></a>
                                       </li>
                                    </ul>
                                 </div>
                                 <!--Tab Menu Ends-->
                                 <!--Tab Modal Content Starts-->
                                 <div class="tab-content myTab_content"  style="background-color: black; height: 95%;">
                                    <!-- caresul gallary  Starts-->
                                    <div id="propPhoto" class="tab-pane fade in text-black p-3 active show" role="tabpanel">
                                       <!--New--> 
                                       <!-- Below are the images in the gallery -->
                                       <div id="slideshow"  class="fullscreen">
                                        <?php
                                          echo $gallery_slide;

                                        ?>
                                         
                                        
                                          <!--  thumbnails of above images -->
                                          <div class="thumbs-container bottom">
                                             <div id="prev-btn" class="prev">
                                                <i class="fa fa-chevron-left fa-3x"></i>
                                             </div>
                                             <ul class="thumbs">
                                                <?php
                                                  echo $thumb_slide;

                                                ?>
                                                
                                              </ul>
                                             <div id="next-btn" class="next">
                                                <i class="fa fa-chevron-right fa-3x"></i>
                                             </div>
                                          </div>
                                           <!--  thumbnails of above images end her-->
                                       </div>

                                       <!--New-->
                                        
                                     </div>
                                    
                                    <!--Plan Modal Tab Content Starts-->
                                    <div id="propFloorPhoto" class="tab-pane fade in text-black p-3" role="tabpanel">
                                       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                          <ol class="carousel-indicators">
                                            <?=$plan_indicater?>
                                          </ol>
                                          <div class="carousel-inner">
                                            <?php
                                              echo $plan_caresual_slide;
                                            ?><a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                             <span class="sr-only">Previous</span>
                                             </a>
                                             <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                             <span class="sr-only">Next</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                    <!--Plan Modal Tab Content Ends-->
                                    <!--Third Modal Tab Content Starts-->
                                    <div id="propMap" class="tab-pane fade in text-black p-3" role="tabpanel">
                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359630.09737905!2d-113.7240346513082!3d36.2460939887435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1613992814033!5m2!1sen!2sin" width="93%" height="90%" style="border:0; position: absolute; top:11%;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                    <!--Third Modal Tab Content Ends-->
                                 </div>
                                 <!--Tab Modal Content Starts-->
                              </div>
                              <div class="col-sm-4">
                                 <div class="agentDetails">
                                    <h2 class="mb-0"><strong>COMPANY ddd</strong></h2>
                                    <p class="mb-0">&nbsp;&nbsp;COMPANY NAME</p>
                                    <p class="mb-0">&nbsp;&nbsp;REFERENCE NUMBER</p>
                                    <p class="mb-0">&nbsp;&nbsp;PERMIT NUMBER</p>
                                    <p class="mb-0">&nbsp;&nbsp;AGENT NAME:<strong>&nbsp;NAME</strong></p>
                                 </div>
                                 <!--Side Content Starts-->
                                 <div class="agentProp">
                                    <hr>
                                    <div class="text-center">
                                       <a href="<?php echo base_url();?>propertylist" style="color: green;">
                                          <p class="mb-0"><strong >VIEW ALL PROPERTIES&nbsp;&nbsp;></strong></p>
                                       </a>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                       <p class="mb-0"><strong>Contact Agent for more information</strong></p>
                                    </div>
                                    <div class="py-1">
                                       <input type="text" class="form-control input-sm" style="width: 95%;" name="" id="" placeholder="Name*" required="required">
                                    </div>
                                    <div class="py-2">
                                       <input type="Email" class="form-control input-sm" style="width: 95%;" name="" id="" placeholder="Email*" required="required">
                                    </div>
                                    <div>
                                       <input type="number" class="form-control input-sm" style="width: 95%;" name="" id="" placeholder="Phone*" required="required">
                                    </div>
                                    <div class="py-2">
                                       <textarea type="text" class="form-control input-sm" style="width: 95%;" name="" id="" placeholder="Message*" required="required"></textarea>
                                    </div>
                                    <div class="py-1">
                                       <input type="checkbox" id="propCheck" name="propCheck" value="propCheck">
                                       <small for="propCheck">&nbsp;Keep me informed about similar properties.</small>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <div class=" emailBtn1">
                                          <a href="tel:121" class="btn modalCallBtn mr-3"><i class="fas fa-phone-alt" aria-hidden="true"></i>&nbsp;&nbsp;Call</a><br>
                                       </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div class=" emailBtn1">
                                              <a href="mailto:megatask@gmail.com id="btnEmail" type="button" class="btn modalEmailBtn mr-3" onclick="myFunction()"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Send Email</a>
                                           </div>
                                         </div>
                                       
                                    </div>
                                    
                                 </div>
                                 <!--Side Content Ends-->
                              </div>
                           </div>
                           <!--Row Closed-->
                        </div>
                        <!--Container Closed-->
                     </section>
                     <!--Section Closed-->
                  </div>
               </div>
               <!--Carousel Modal Content End-->
               <!--Buttons on Image Start-->
               <ul class="d-flex list-style ulPos">
                  <li class="dps"><a href="#" class="btn directionBtn"><i class="fas fa-map-marked-alt" aria-hidden="true"></i>
                     &nbsp;Map</a>
                  </li>
                  <li class="dps"><a href="#" class="btn directionBtn"><i class="fa fa-video-camera" aria-hidden="true"></i>
                     &nbsp;Request Video</a>
                  </li>
               </ul>
               <!--Buttons on Image End-->
            </div>
         </div>
         <!--Agent Details Section Start-->
         <div class="col-md-4 col-xs-12">
            <div class="AleAgent bg-white pt-3 pl-3" style="height: 100%;">
               <div class="mt-1">
                  <h4 class="text-center mb-0"><strong><?php
                  $salutiaon = '';

                  if(isset($property_landlord->Salutation) && $property_landlord->Salutation>0)
                  {
                      
                      $salutiaon  = $SalutaionList[$property_landlord->Salutation];
                  }

              $fullname = $salutiaon." ".$property_landlord->FullName; 

                   


                   
                  ?></strong><?=$fullname;?></h4>
                   
                  <p class="mb-0 text-center">&nbsp;&nbsp;REFERENCE NUMBER</p>
                  <p class="mb-0 text-center">&nbsp;&nbsp;PERMIT NUMBER</p>
                  <p class="mb-0 text-center">&nbsp;&nbsp;AGENT NAME:<strong>&nbsp;<?=$fullname;?></strong></p>
               </div>
               <hr>


               <div class="text-center">
                  <a href="<?php echo base_url();?>propertylist"  style="color: green;">
                     <p class="mb-0"><strong>VIEW ALL PROPERTIES&nbsp;&nbsp;></strong></p>
                  </a>
               </div>
               <hr>
               <div>
                  <form class="contact-agent" name="" id="" action="" >
                    <div class="text-center">
                        <p class="mb-0"><strong>Contact Agent for more information</strong></p>
                     </div>
                     <div class="py-1">
                        <input type="text" class="form-control input-sm" style="width: 95%;" name="" id="" placeholder="Name*" required="required">
                     </div>
                     <div class="py-2">
                        <input type="Email" class="form-control input-sm" style="width: 95%;" name="" id="" placeholder="Email*" required="required">
                     </div>
                     <div>
                        <input type="number" class="form-control input-sm" style="width: 95%;" name="" id="" placeholder="Phone*" required="required">
                     </div>
                     <div class="py-2">
                      <?php
                      $message = "I would like to inquire about your property Al-Eizba -(".$property->external_reference."). Please contact me at your earliest convenience.";
                     ?>
                        <textarea class="form-control input-sm" style="width: 95%;" placeholder="Message*" required="required"><?=$message?></textarea>
                         
                     </div>
                     <div class="py-1">
                        <input type="checkbox" id="propCheck" name="propCheck" value="propCheck">
                        <small for="propCheck">&nbsp;Keep me informed about similar properties.</small>
                     </div>
                     <div class="row pt-3 pb-3">
                          <div class="col-sm-6 mb-2">
                            <div class=" emailBtn1">
                              <a href="tel:121" class="btn mr-3 btn-lg EmailBtn "><i class="fas fa-phone-alt" aria-hidden="true"></i>&nbsp;&nbsp;Call</a><br>
                           </div>
                          </div>
                          <div class="col-sm-6  mb-2">
                            <div class=" emailBtn1">
                                  <a href="mailto:megatask@gmail.com" id="btnEmail" type="button" class="btn mr-3 EmailBtn btn-lg " onclick="myFunction()"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Send Email</a>
                               </div>
                             </div>
                           
                      </div>
                     <!-- <div class="prBtn">
                        <div class="pull-right emailBtn1">
                           <a href="#" id="myBtn1" class="btn CallBtn mr-3" onclick="myFunction()"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Email</a><br>
                        </div>
                        <div class="ByMail callbtn pull-left">
                           <a href="#" id="myBtn" class="btn EmailBtn mr-3"><i class="fas fa-phone-alt" aria-hidden="true"></i>&nbsp;&nbsp;Call</a><br>
                        </div>
                     </div> -->
                  </form>
               </div>
               <!--Agent Details Section End-->
               <!--SnackBar Content Ends-->
               <div id="snackbar">Message Sent</div>
               <!--SnackBar Content Starts-->
               <!--Email Modal Start-->
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
<!--Property Image Section End-->
<!--Title & Price Section Start-->
<section class="py-3">
   <div class="container-fluid wrap-container">
      <div class="row">
         <!--First Column Start-->
         <div class="col-md-8 col-xs-12 my-2 pl-2 ">
            <div class="bg-white   p-3">
                <div class="row">
                    <div class="col-sm-8"><h3><strong>AED <?=number_format($property->rent); ?> </strong> </h3></div>
                    <div class="col-sm-4">
                      <div class=" ">
                         <ul class="d-flex list-style">
                            <li class="dps"><a href="#" class="btn priceBtn m-0 mr-1 "><i class="fa fa-bookmark" aria-hidden="true"></i>
                               &nbsp;Save</a>
                            </li>
                            <li class="dps"><a href="#" class="btn priceBtn  m-0"><i class="fa fa-share-alt" aria-hidden="true"></i>
                               &nbsp;Share</a>
                            </li>
                         </ul>
                      </div>
                    </div>
                 
                    <div class="col-sm-12">
                        <div class=" ">
                          <div class="alePrice">
                             
                             <h5><?=$property->EnTitle?><br> <?=$property->location?></h5>
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
                    <h6 class="text-lef "><strong><?=substr($property->EnTitle, 0, 20);?></strong></h6>
                    <p >See the community attraction<br>and lifestyles.</p>
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
   <div class="col-md-8 col-xs-12">
      <div class="MyDivdrop bg-white">
         <div class="form-control">
            <ul class="nav nav-tabs myTab" role="tablist">
               <li class="nav-item propPoptab py-2">
                  <a data-toggle="tab" href="#menu" role="tab" class="propPop">
                  <strong><i class="fa fa-building" aria-hidden="true"></i>&nbsp;&nbsp;Overview</strong></a>
               </li>
               <li class="nav-item propPoptab py-2">
                  <a data-toggle="tab" href="#menu1" role="tab" class="propPop">
                  <strong><i class="fas fa-map-marked-alt" aria-hidden="true"></i>&nbsp;&nbsp;Neighbourhood</strong></a>
               </li>
               <li class="nav-item propPoptab py-2">
                  <a data-toggle="tab" href="#menu2" role="tab" class="propPop">
                  <strong><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Trends</strong></a>
               </li>
               <li class="nav-item propPoptab py-2">
                  <a data-toggle="tab" href="#menu3" role="tab" class="propPop">
                  <strong><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;&nbsp;Calculator</strong></a>
               </li>
            </ul>
         </div>
         <!--Tab Content Starts-->
         <div class="tab-content myTab_content">
            <!--Overview Tab Content Starts-->
            <div id="menu" class="tab-pane fade in text-black p-3 active show" role="tabpanel">
               <!--Description Section Start-->
               <h5>Description</h5>
               <hr>
               <h6><strong><?=str_replace( "\n", '<br />',$property->EnTitle);?></strong></h6>
               <p><?=str_replace( "\n", '<br />',$property->description);?></p>
               <!--Description Section End-->
               <!--Property Details Section Starts-->
               <h5 class="mt-4">Property Summary</h5>
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
               <h5 class="mt-4">Features/Amenities</h5>
               <hr>
               <pre>
               
            <?php
            // print_r($property);
            // print_r($property_feature);
            ?>
   </pre>
 
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
                    <div class="featureTab col-sm-3">
                       <div class="text-center">
                          <i class="fa fa-building" style="font-size: 20px;" aria-hidden="true"></i><br>
                          <div class="py-2">
                             <small><strong><?=$BuildingList[$k]?></strong></small>
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
                    <div class="featureTab col-sm-3">
                       <div class="text-center">
                          <i class="fa fa-building" style="font-size: 20px;" aria-hidden="true"></i><br>
                          <div class="py-2">
                             <small><strong><?=$RecreationAndFamily[$k]?></strong></small>
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
                    <div class="featureTab col-sm-3">
                       <div class="text-center">
                          <i class="fa fa-building" style="font-size: 20px;" aria-hidden="true"></i><br>
                          <div class="py-2">
                             <small><strong><?=$HealthAndFitness[$k]?></strong></small>
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
                    <div class="featureTab col-sm-3">
                       <div class="text-center">
                          <i class="fa fa-building" style="font-size: 20px;" aria-hidden="true"></i><br>
                          <div class="py-2">
                             <small><strong><?=$LaundryAndKitchen[$k]?></strong></small>
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
                    <div class="featureTab col-sm-3">
                       <div class="text-center">
                          <i class="fa fa-building" style="font-size: 20px;" aria-hidden="true"></i><br>
                          <div class="py-2">
                             <small><strong><?=$BusinessAndSecurity[$k]?></strong></small>
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
                    <div class="featureTab col-sm-3">
                       <div class="text-center">
                          <i class="fa fa-building" style="font-size: 20px;" aria-hidden="true"></i><br>
                          <div class="py-2">
                             <small><strong><?=$MiscellaneousList[$k]?></strong></small>
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
                    <div class="featureTab col-sm-3">
                       <div class="text-center">
                          <i class="fa fa-building" style="font-size: 20px;" aria-hidden="true"></i><br>
                          <div class="py-2">
                             <small><strong><?=$TechnologyList[$k]?></strong></small>
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
                    <div class="featureTab col-sm-3">
                       <div class="text-center">
                          <i class="fa fa-building" style="font-size: 20px;" aria-hidden="true"></i><br>
                          <div class="py-2">
                             <small><strong><?=$FeaturesList[$k]?></strong></small>
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
                    <div class="featureTab col-sm-3">
                       <div class="text-center">
                          <i class="fa fa-building" style="font-size: 20px;" aria-hidden="true"></i><br>
                          <div class="py-2">
                             <small><strong><?=$FeaturesList[$k]?></strong></small>
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
            <!--Overview Tab Content Ends-->
            <!--Neighbourhood Tab Content Starts-->
            <div id="menu1" class="tab-pane fade p-3 active show">
               <h5>Location & Nearby</h5>
               <hr>
               <!--Map Content Starts-->
               <div class="row">
                  <div class="col-sm-3">
                     <div class="mapForm">
                        <div>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359630.09737905!2d-113.7240346513082!3d36.2460939887435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1613992814033!5m2!1sen!2sin" width="75%" height="50%" style="border:0; position: absolute; top:10%;" 
                              allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="text-center" style="top: 72%; position: absolute;">
                           <h6><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOCATION&nbsp;&nbsp;></strong></h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-3">
                     <div class="mapForm">
                        <div>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359630.09737905!2d-113.7240346513082!3d36.2460939887435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1613992814033!5m2!1sen!2sin" width="75%" height="50%" style="border:0; position: absolute; top:10%;" 
                              allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="text-center" style="top: 72%; position: absolute;">
                           <h6><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SCHOOLS&nbsp;&nbsp;></strong></h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-3">
                     <div class="mapForm">
                        <div>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359630.09737905!2d-113.7240346513082!3d36.2460939887435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1613992814033!5m2!1sen!2sin" width="75%" height="50%" style="border:0; position: absolute; top:10%;" 
                              allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="text-center" style="top: 72%; position: absolute;">
                           <h6><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RESTAURANTS&nbsp;&nbsp;></strong></h6>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-3">
                     <div class="mapForm">
                        <div>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359630.09737905!2d-113.7240346513082!3d36.2460939887435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1613992814033!5m2!1sen!2sin" width="75%" height="50%" style="border:0; position: absolute; top:10%;" 
                              allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="text-center" style="top: 72%; position: absolute;">
                           <h6><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PARKS&nbsp;&nbsp;></strong></h6>
                        </div>
                     </div>
                  </div>
               </div>
               <!--Map Content Ends-->
            </div>
            <!--Neighbourhood Tab Content Ends-->
            <!--Trends Tab Content Starts-->
            <div id="menu2" class="tab-pane fade p-3 active show">
               <h5>Trends</h5>
               <hr>
               <p>Arabian Ranches 5 bed, 9,000 sqft, Villas Sale.</p>
               <div class="row">
                  <div class="col-sm-12">
                     <div id="chart_div" style="width: 800px; height: 500px;">
                     </div>
                  </div>
               </div>
               <p>Popularity comparison of 5 Bed Villas in Mirador (Arabian Ranches)</p>
               <div class="row">
                  <div class="col-sm-12">
                     <div id="dual_x_div" style="height: 500px;">
                     </div>
                  </div>
               </div>
            </div>
            <!--Trends Tab Content Ends-->
            <!--Calculator Tab Content Starts-->
            <div id="menu3" class="tab-pane fade p-3 active show">
               <h5>Calculator</h5>
               <hr>
               <p>Calculate and view the monthly mortgage on this apartment</p>
               <!--Calculator New Content Starts-->
               <div>
                  <div class="f6ec3e3e">
                     <!--Calculator Row Starts-->
                     <div class="row">
                        <!--Calculator First Column Starts-->
                        <div class="col-sm-6">
                           <!--Calculator Inner Content Row Starts-->
                           <div class="row">
                              <!--Calculator First Column Content 1 Starts-->
                              <div class="col-sm-6">
                                 <div>
                                    <strong>
                                       <p>Total Price</p>
                                    </strong>
                                    <input type="text-center" class="form-control" name="">
                                    <span class="input-group-btn">
                                    <button type="button" class="btnInside"><small>AED</small></button>
                                    </span>
                                 </div>
                                 <div class="py-2">
                                    <strong>
                                       <p>Loan Period</p>
                                    </strong>
                                    <input type="text-center" class="form-control" name="">
                                    <span class="input-group-btn">
                                    <button type="button" class="btnInside1"><small>Years</small></button>
                                    </span>
                                 </div>
                                 <div>
                                    <strong>
                                       <p>Down Payment</p>
                                    </strong>
                                    <input type="text-center" class="form-control" name="">
                                    <span class="input-group-btn">
                                    <button type="button" class="btnInside2"><small>20%</small></button>
                                    </span>
                                 </div>
                                 <div class="py-2">
                                    <strong>
                                       <p>Interest Rate</p>
                                    </strong>
                                    <input type="text-center" class="form-control" name="">
                                    <span class="input-group-btn">
                                    <button type="button" class="btnInside3"><small>%</small></button>
                                    </span>
                                 </div>
                              </div>
                              <!--Calculator First Column Content 1 Ends-->
                              <!--Calculator First Column Content 2 Starts-->
                              <div class="col-sm-6">
                                 <div class="py-5">
                                    <input type="range" class="form-control-range" id="formControlRange">
                                 </div>
                                 <div class="py-4">
                                    <input type="range" class="form-control-range" id="formControlRange">
                                 </div>
                                 <div class="py-5">
                                    <input type="range" class="form-control-range" id="formControlRange">
                                 </div>
                                 <div class="py-2">
                                    <input type="range" class="form-control-range" id="formControlRange">
                                 </div>
                              </div>
                              <!--Calculator First Column Content 2 Ends-->
                           </div>
                           <!--Calculator Inner Content Row Ends-->
                        </div>
                        <!--Calculator First Column Ends-->
                        <!--Calculator Second Column Starts-->
                        <div class="col-sm-6">
                           <div class="text-center py-2">
                              <div>
                                 <span id="first" style="font-size: 100%;">AED</span>
                                 <span id="second" style="font-size: 200%;">Price</span>
                              </div>
                              <div style="padding-left: 7%;">
                                 <span><b>per month</b></span>
                              </div>
                              <div class="py-2" style="color: #82898f">
                                 <span><b>Total Loan Amount</b></span>
                              </div>
                              <div>
                                 <span id="first" style="font-size: 100%;">AED</span>
                                 <span id="second" style="font-size: 200%;">Price</span>
                              </div>
                              <div class="py-2" style="color: #82898f">
                                 <span><b>Payment Breakdown</b></span>
                              </div>
                              <div class="py-2">                       
                                 <input type="range" class="form-control-range1" id="formControlRange">
                              </div>
                              <div>
                                 <span class="pull-left" style="padding-left: 22%;">Interest</span>
                                 <span class="pull-right" style="padding-right: 22%;">Principal</span>
                              </div>
                              <div class="py-5">
                                 <a href="#" type="button" role="Submit" style="background-color: #ad2124; color: #fff; font-weight: 700;border-radius: .4rem; font-size: 1rem; width: 64%; height: 36px; padding: 3%;"><small><b>APPLY FOR PRE-APPROVAL</b></small></a>
                              </div>
                           </div>
                        </div>
                        <!--Calculator Second Column Ends-->
                        <div style="margin-left: 300px;">
                           <span style="font-size: 80%;">Powered By</span>
                           <span style="font-size: 120%;">Megatask.com</span>
                        </div>
                     </div>
                     <!--Calculator Row Ends-->
                  </div>
                  <!--Calculator Tab Content Ends-->
               </div>
               <!-- tab-content -->
            </div>
            <!-- bg-white -->
         </div>
         <!-- row -->
      </div>
      <!--Row-->
   </div>
   <!--Side Column Start With Col-SM-3-->
   <div class="col-md-4 col-xs-12">
      <div class="AleAgent bg-white"  style="height: 42%;">
        
         <div class="row">
            <div class="col-sm-12 ">
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action"><p class="text-dark text-center"><strong>Useful Links</strong></p></a>
                <a href="#" class="list-group-item list-group-item-action">Properties for sale in Dubai</a>
                <a href="#" class="list-group-item list-group-item-action">Properties for sale in Arabian Ranches</a>
                <br><br><br><br>
                <button class="btn EmailBtn btn-outline-secondary btn-lg  "><i class="fas fa-flag" aria-hidden="true"></i>&nbsp;&nbsp;Report this property</button>
                 
                 
              </div>
            </div>
          </div>
          
      </div>
   </div>
   <!--Side Column Start With Col-SM-3-->
</section>
<!--Side Column Section Start-->  
<!--<section style="width: 24%; position: absolute; top: 94%; left: 70%;">
   <div class="container-fluid wrap-container bg-white" style="height: 525px;">
    <div class="row">
      <div class="col-sm-8">
       
        <div class="form-control my-2" style="width: 125%; height: 7%; background-color: #f5f5f5;">
              <p>Useful Links</p>
            </div>
   
            <div class="propDetails" style="margin-right: -18%;">
   
              <div class="py-2">
              <a style="color: grey;" href="#">Properties for sale in Dubai</a>
            </div>   
   
            <div class="py-2">
              <a style="color: grey;" href="#">Properties for sale in Arabian Ranches</a>
            </div> 
   
            <div class="py-2">
              <a style="color: grey;" href="#">Properties for sale in Mirador</a>
            </div> 
   
            <div class="py-2">
              <a style="color: grey;" href="#">Villas for sale in Dubai</a>
            </div> 
   
            <div class="py-2">
              <a style="color: grey;" href="#">Villas for sale in Arabian Ranches</a>
            </div> 
   
            <div class="py-2">
              <a style="color: grey;" href="#">Villas for sale in Mirador</a>
            </div> 
   
            <div class="py-2">
              <a style="color: grey;" href="#">5 Bedroom Villas for sale in Dubai</a>
            </div> 
   
            <div class="py-2">
              <a style="color: grey;" href="#">5 Bedroom Villas for sale in Arabian</a>
            </div> 
   
            <div class="py-2">
              <a style="color: grey;" href="#">5 Bedroom Villas for sale in Mirador</a>
            </div> 
   
            <div class="py-2">
              <a href="#" class="btn reportBtn"><i class="fas fa-flag" aria-hidden="true"></i>&nbsp;&nbsp;Report this property</a>
            </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>-->
<!--Side Column Section End-->
<!--Details & Overview Section End-->
<!--Properties Suggestion Section Start-->
<section>
   <div class="container-fluid wrap-container">
      <div class="row">
         <?php $i = 1;
          
          
           if(isset($get_related_property) && !empty($get_related_property))
           {

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
                          
                 ?> 
                   <div class="col-md-3 col-xs-12 mainDiv mt-4">
                      <a href="<?php echo base_url();?>propertydetails/get_details/<?=$value->id?>" class="propertyDetails">
                         <div class="AleBoxes">
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
                          ?>
                            <div class="property-cont"> 
                            <h3 class="property-title">
                               <span><strong>AED  <?php echo number_format($value->rent); ?></strong></span>
                               <span class="pull-right awsomeAle"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                            </h3>
                             <p><?=substr($value->EnTitle, 0, 40) ?></p>
                            <div class="d-flex mt-3 text-center">
                               <span class="ale_faci">&nbsp;<?php echo  $value->beds; ?>&nbsp;&nbsp;<i class="fa fa-bed" aria-hidden="true"></i><br>
                               <span class="ale_pop">Bedrooms</span></span>
                               <span class="ale_faci">&nbsp;<?php echo $value->baths; ?>&nbsp;&nbsp;<i class="fa fa-bath" aria-hidden="true"></i><br>
                               <span class="ale_pop">Bathrooms</span></span>
                               <span class="ale_faci">&nbsp;&nbsp;&nbsp;<i class="fa fa-home" aria-hidden="true"></i><br>
                               <span class="ale_pop">Condo</span></span>   
                            </div>
                            <!-- <p class="mt-3"><?php echo $value->landlord; ?> -->
                              </div>
                         </div>
                      </a>
                   </div>
                   <?php 
              }  
           }
          /*while($i <= 4){ ?> 
         <div class="col-md-3 col-xs-12 mainDiv mt-4">
            <a href="<?php echo base_url();?>alepropertydetails" class="propertyDetails">
               <div class="AleBoxes">
                  <img src="<?php echo base_url();?>assets/images/flat_1.jpg" class="img-fluid">
                  <h3 class="mt-4">
                     <span><strong>$213,000</strong></span>
                     <span class="pull-right awsomeAle"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                  </h3>
                  <p>3 BENWOOD Court, Stoney Creek, Ontario</p>
                  <div class="d-flex mt-3 text-center">
                     <span class="ale_faci">&nbsp;1<i class="fa fa-bed" aria-hidden="true"></i><br>
                     <span class="ale_pop">Bedrooms</span></span>
                     <span class="ale_faci ml-5">&nbsp;2<i class="fa fa-bath" aria-hidden="true"></i><br>
                     <span class="ale_pop">Bathrooms</span></span>
                     <span class="ale_faci ml-5">&nbsp;<i class="fa fa-home" aria-hidden="true"></i><br>
                     <span class="ale_pop">Condo</span></span>   
                  </div>
                  <p class="mt-3">RE/MAX METROPOLIS REALTY, Brokerage</p>
               </div>
            </a>
         </div>
         <?php $i++; }*/ ?>
      </div>
   </div>
</section>
<!--Properties Suggestion Section End-->
<!--Bar Graph JavaScript Start-->
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
   width: 800,
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
<!--Line Graph JavaScript End-->
<script type="text/javascript">
   var owl = $('.owl-carousel');
   owl.owlCarousel({
       loop:true,
       nav:true,
       margin:10,
       responsive:{
           0:{
               items:1
           },
           600:{
               items:3
           },            
           960:{
               items:5
           },
           1200:{
               items:6
           }
       }
   });
   
   
   owl.on('mousewheel', '.owl-stage', function (e) {
       if (e.deltaY>0) {
           owl.trigger('next.owl');
       } else {
           owl.trigger('prev.owl');
       }
       e.preventDefault();
   });
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
   function openCity(evt, cityName) {
     var i, tabcontent, tablinks;
     tabcontent = document.getElementsByClassName("tabcontent");
     for (i = 0; i < tabcontent.length; i++) {
       tabcontent[i].style.display = "none";
     }
     tablinks = document.getElementsByClassName("tablinks");
     for (i = 0; i < tablinks.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" active", "");
     }
     document.getElementById(cityName).style.display = "block";
     evt.currentTarget.className += " active";
   }
</script> 
<!-- end -->
<script type="text/javascript">
   $(document).on('click','.nav-link.active', function(){
   var href = $(this).attr('href').substring(1);
   $(this).removeClass('active');
   $('.tab-pane[id="'+ href +'"]').removeClass('active');
   })
</script>
<!--Carousel Modal JavaScript Start-->
<script>
   // Get the modal
   var modal = document.getElementById("carouselModal");
   
   // Get the button that opens the modal
   var btn = document.getElementById("carouselExampleControls");
   
   // Get the <span> element that closes the modal
   var span = document.getElementsByClassName("carouselClose1")[0];
   
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
     if (event.target == modal ) {
       modal.style.display = "none";
     }
   }
</script>
<!--Carousel Modal JavaScript End-->
<!--SnackBAr-->
<script>
   function myFunction() {
     var x = document.getElementById("snackbar");
     x.className = "show";
     setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
   }
</script>
<!--SnackBAr-->
<!-- end -->
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
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
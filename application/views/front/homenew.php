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
<div class="row">
                <div class=" offset-sm-3 col-sm-6">
                  <?php  
                    $success = $this->session->flashdata('successVerify');
                    if($success)
                    {
                    ?>
                    <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('successVerify'); ?>
                    </div>
                    <?php } ?>
                     <?php
                     
                    $error = $this->session->flashdata('errorVerify');
                    if($error)
                    {
                    ?>
                    <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('errorVerify'); ?>                    
                    </div>
                    <?php } ?>
                </div>
                
              </div>
<section id="img">
  <div class="ale_home" id="comImg">
   <div class="container-fluid wrap-container padMY ">
      <div class="row">
         <div class="col-md-12 text-center text-white">
            <h1 class="Bannertext"><strong>Search 189,197 listings from trusted Al-Eizba</strong></h1>
         </div>
         <!-- padMY -->
      </div>
      <div class="container my-5">
         <div class="row">
            <div class="col-md-6">
               <ul class="nav nav-tabs" id="myTab1" role="tablist">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link btn btn-warning btn-sm" id="home-tab" data-toggle="tab" href="#home" role="tab button" aria-controls="home" aria-selected="false" onclick="clicked()">
                     <b><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Residential</b>
                     </a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link btn btn-dark btn-sm" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" onclick="myFunctionCom()">
                     <b><i class="fa fa-building" aria-hidden="true"></i>&nbsp;&nbsp;Commercial</b>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <?php
            //print_r($bookmarks);
              $searchDisable ='';
              if(!empty($recent))
              {
                 $recent = $recent[0];
              if(isset($recent->search) && $recent->search !=='')
              {
                $searchDisable =  "disabled";
              }
              }
            ?>
         <!-- filter section-->
         <?php include_once "searchForm.php" ?>
         <!--// filter section-->
      </div>
      <!--    <!-============================= commercial form start here=======================--> 
      <div class="row searchBar hidden" id="searchBar2">
         <div class="col-md-12 bg-white radius p-0 HomeAle m-auto">
            <form name="form3" action="<?=base_url()?>propertylist/index" method="GET" id="commercialListForm">
               <div class="d-flex bg-white radius">
                  <!-- input serach Bar -->
                  <input type="text" placeholder="City,Neighbourhood or MLS Number"  name="search" class="form-control ale-izba_placeholder ">
                  <!-- end -->
                  <!-- min-price -->
                  <div class="p-2 ">
                     <select data-placeholder="Min Price" class="chosen-select form-control" tabindex="2" name="minPriceComFilter">
                        <option value=""></option>
                        <?php 
                           $option = '';
                           for ($i = 0; $i < 12; $i++) {
                             $startAmount=25000;
                             $option .= '<option value="'.$startAmount*$i.'">'.number_format($startAmount*$i).'</option>';
                           } 
                             echo  $option ;
                           ?>
                     </select>
                  </div>
                  <!-- end -->
                  <!-- unlimited -->
                  <div class="p-2 ">
                     <select data-placeholder="Max Price" class="chosen-select form-control" tabindex="2" name="maxPriceComFilter">
                        <option value=""></option>
                        <?php 
                           $option = '';
                           for ($i = 0; $i < 12; $i++) {
                             $startAmount=250000;
                             $option .= '<option value="'.$startAmount*$i.'">'.number_format($startAmount*$i).'</option>';
                           }
                             echo  $option ;
                           ?> 
                     </select>
                  </div>
                  <!-- end -->
                  <!-- Bed -->
                  <div class="p-2 ">
                     <select data-placeholder="Building Size" class="chosen-select form-control" tabindex="2" name="landSizeComFilter">
                        <option value=""></option>
                        <?php 
                           $option = '';
                           $startAmount=400;
                           for ($i = 0; $i < 5; $i++) {
                             
                             $option .= '<option value="'.$startAmount*$i.'">'.number_format($startAmount*$i).'</option>';
                           }
                             echo  $option ;
                           ?> 
                     </select>
                  </div>
                  <!-- end -->
                  <!-- Bath -->
                  <div class="p-2 ">
                     <select data-placeholder="Land Size" class="chosen-select form-control" tabindex="2" name="buildSizeComFilter">
                        <option value=""></option>
                        <?php 
                           $option = '';
                           $startAmount=400;
                           for ($i = 0; $i < 7; $i++) {
                             
                             $option .= '<option value="'.$startAmount*$i.'">'.number_format($startAmount*$i).'</option>';
                           }
                             echo  $option ;
                           ?> 
                     </select>
                  </div>
                  <!-- end -->
                  <!-- search button  -->
                  <div class="p-2 ml-5">
                     <button type="submit" class="searchAleForm " id="modalSearch"><b><i class="fa fa-search" aria-hidden="true"></i></b></button>
                     <a hidden href="#" class="searchAleForm "><i class="fa fa-search" aria-hidden="true"></i></a>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
 </div>
 <!--New-->
</section>


<!--Image Change Script-->

<script>
function myFunctionCom() {
   document.getElementById("comImg").style.backgroundImage = "url(assets/images/Dubai-Wallpaper-23.jpg)";
}
function clicked()
{
  if(img==1)
  {
    document.getElementById("comImg").style.backgroundImage = "url(assets/images/indexBg1.jpg)";
    return img=0;
  }
  else
  {
    document.getElementById("comImg").style.backgroundImage = "url(assets/images/indexBg1.jpg)";
    return img=1;
  }
}
</script>





<section class="ale_tag">
   <div class="container-fluid">
      <div  class="row">
         <div class="col-md-9">
            <h4 class="asdf000 "><strong>Need help finding a Al-Eizba?</strong>&nbsp;<span class="browser">Browse thousands of local Al-Eizba.</span></h4>
         </div>
         <div class="col-md-3 col-xs-3 fl-right" align=center>
            <a href="<?php echo base_url();?>propertylist" class="btn get_btn wow bounceInRight" target="_blank">Get Started</a>
         </div>
      </div>
   </div>
</section>
<section class="latest-property">
   <div class="container-fluid wrap-container">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="section-title text-center">
               <h3 class=" wow fadeIn">Latest <span class="sub-heading"> Properties</span></h3>
            </div>
         </div>
      </div>
      <div class="row ">
         <!-- START -->
         <?php
          if(isset($get_latest_property) && !empty($get_latest_property))
          {
            foreach($get_latest_property as   $value)
            {
            
            
               if(isset($value->image) and $value->image!=='')
                 {
                   $thumb='';
                   $image_data= json_decode($value->image);
                   $thumb =   $image_data[0];
                 }
                 else
                 {
                    $thumb='';
                 }
                       
            
                 $ttitle = str_replace('(', '', $value->EnTitle); 
                 $ttitle = str_replace(')', '', $ttitle); 
                 $ttitle = str_replace(' ', '-', $ttitle);
                 $ttitle = str_replace(',', '', $ttitle); 
                 
               ?> 
         <div class="col-md-3 col-xs-12 mainDiv mt-4">
            <!-- <a href="<?php echo base_url();?>propertydetails/get_details/<?=base64_encode($value->id)?>/<?=$ttitle?>" class="propertyDetails"> -->
            <a href="<?php echo base_url();?>propertydetails/<?=($value->slug_url)?>" class="propertyDetails">
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
                  <p>&nbsp;<?=substr($value->EnTitle, 0, 40) ?></p>
                  <div class="d-flex mt-3 text-center">
                     <span class="ale_faci">&nbsp;<?php echo  $value->beds; ?>&nbsp;&nbsp;<i class="fa fa-bed" aria-hidden="true"></i><br>
                     <span class="ale_pop">Bedrooms</span></span>
                     <span class="ale_faci">&nbsp;<?php echo $value->baths; ?>&nbsp;&nbsp;<i class="fa fa-bath" aria-hidden="true"></i><br>
                     <span class="ale_pop">Bathrooms</span></span>
                     <span class="ale_faci"><i class="fa fa-home" aria-hidden="true"></i><br>
                     <span class="ale_pop">Condo</span></span>   
                  </div>
                  <!-- <p class="mt-3"><?php echo $value->landlord; ?></p> -->
                  </div>
               </div>
            </a>
         </div>
         <?php 
            }
          }
            
            ?>
         <!-- END -->
      </div>
   </div>
</section>
<section hidden="">
   <div class="container-fluid wrap-container">
      <div class="row">
         <div class="col-md-12 text-center my_quel  ">
            <div class="section-title text-center">
               <h3 class=" wow fadeIn"><strong >Latest Living Room Posts</strong></h3>
            </div>
         </div>
      </div>
      <div class="row ">
         <div class="col-md-4 my-2 wow fadeInLeft">
            <a href="#">
               <div class="axb_ale_blog hoverable">
                  <img src="<?php echo base_url();?>assets/images/blog1.jpg" class="img-fluid">
                  <div class="blog-content p-3">
                     <div class=" blog_btn mb-3">
                        <span>10 February</span><span>&nbsp;&nbsp;&nbsp;-by ALE-IZBA</span>
                     </div>
                     <h5 class="text-black">Whistler, British Columbia: Canada’s Champion of Year-Round Alpine Terrain</h5>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-md-4 my-2 wow fadeIn">
            <a href="#">
               <div class="axb_ale_blog  hoverable">
                  <img src="<?php echo base_url();?>assets/images/blog2.jpg" class="img-fluid">
                  <div class="blog-content p-3">
                     <div class=" blog_btn mb-3">
                        <span>11 February</span><span>&nbsp;&nbsp;&nbsp;-by ALE-IZBA</span>
                     </div>
                     <h5 class="text-black">Looking to Buy a Cottage? Here’s What You Need to Know</h5>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-md-4 my-2 wow fadeInRight">
            <a href="#">
               <div class="axb_ale_blog  hoverable">
                  <img src="<?php echo base_url();?>assets/images/blog3.jpg" class="img-fluid">
                  <div class="blog-content p-3">
                     <div class=" blog_btn mb-3">
                        <span>12 February</span><span>&nbsp;&nbsp;&nbsp;-by ALE-IZBA</span>
                     </div>
                     <h5 class="text-black ">Celebrating Living Room’s Anniversary With Our Writers’ Favourites</h5>
                  </div>
               </div>
            </a>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 text-center mt-5">
            <a href="" class="btn more_post wow bounceInDown">More Post</a>
         </div>
      </div>
   </div>
</section>
<section class="my-bg">
   <div class="container-fluid wrap-container">
      <div class="row">
         <div class="col-md-12 text-center my_quel">
            <div class="section-title text-center">
               <h3 class="dark-heading"><strong>Popular Searches</strong></h3>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="outer_home">
               <div class="row">
                  <div class="col-md-12 col-xs-12">
                    <div class="row">

                      <div class="col-sm-4">
                        <div class="list-heading"><h3 class=""><i class="fa fa-building-o" aria-hidden="true"></i> OFFICE</h3></div>
                        <ul class="under-list">

 

                       <?php
                         
                              if(!empty($get_office_searches))
                              {
                                $inccc = .20;
                                foreach($get_office_searches as $key => $value)
                                {
                                   
                                    if($value->location !=='')
                                  {
                                     $my_str = ltrim($value->location);
                                    $escape_with_hyphen  = str_replace(" ","-",$my_str);
                                     $escape_with_hyphen  = strtolower($escape_with_hyphen);
                                  ?>


                                   
                                    
                                    <li class="popular-search" data-wow-delay="<?php echo $inccc;?>s"><a href="<?php echo base_url();?>propertylist/popular/<?php echo $escape_with_hyphen?>/office"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <?php echo strtoupper($value->location)?></a></li> 

                                  

                                   <?php
                                  }

                                  $inccc = $inccc +.05;
                                }
                              }
                            ?>



                      </ul>

                      </div>


                      <div class="col-sm-4">
                          <div class="list-heading"><h3 class=""><i class="fa fa-building-o" aria-hidden="true"></i> APARTMENT</h3></div>
                         <ul class="under-list">

                        <!-- <li class="popular-search" data-wow-delay="<?php echo $inccc;?>s">APARTMENT</li> --> 

                        
                       <?php
                         /* echo "<pre>";
                              print_r($get_apartment_searches);
                              echo "</pre>";*/
                              if(!empty($get_apartment_searches))
                              {
                                $inccc = .20;
                                foreach($get_apartment_searches as $key => $value)
                                {

                                  if($value->location !=='')
                                  {
                                     $my_str = ltrim($value->location);
                                    $escape_with_hyphen  = str_replace(" ","-",$my_str);
                                     $escape_with_hyphen  = strtolower($escape_with_hyphen);
                                  ?>


                                   
                                    
                                    <li class="popular-search" data-wow-delay="<?php echo $inccc;?>s"><a href="<?php echo base_url();?>propertylist/popular/<?php echo $escape_with_hyphen?>/apartment"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <?php echo strtoupper($value->location)?></a></li> 

                                  

                                   <?php
                                  }
                                   
                                   
                                  $inccc = $inccc +.05;
                                }
                              }
                            ?>



                      </ul>

                      </div>


                      <div class="col-sm-4">
                            <div class="list-heading"><h3 class=""><i class="fa fa-building-o" aria-hidden="true"></i> VILLAS</h3></div>
                           <ul  class="under-list" >

                        <!-- <li class="popular-search" data-wow-delay="<?php echo $inccc;?>s">VILLAS</li> --> 

                        
                       <?php
                        /*  echo "<pre>";
                              print_r($get_villa_searches);
                              echo "</pre>";*/
                              if(!empty($get_villa_searches))
                              {
                                $inccc = .20;
                                foreach($get_villa_searches as $key => $value)
                                {
                                   
                                  if($value->location !=='')
                                  {
                                     $my_str = ltrim($value->location);
                                    $escape_with_hyphen  = str_replace(" ","-",$my_str);
                                     $escape_with_hyphen  = strtolower($escape_with_hyphen);
                                  ?>


                                   
                                    
                                    <li class="popular-search" data-wow-delay="<?php echo $inccc;?>s"><a href="<?php echo base_url();?>propertylist/popular/<?php echo $escape_with_hyphen?>/villas"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <?php echo strtoupper($value->location)?></a></li> 

                                  

                                   <?php
                                  }
                                  $inccc = $inccc +.05;
                                }
                              }
                            ?>



                      </ul>

                      </div>

                     </div>




                  </div>
                  <!-- <div class="col-md-4 col-xs-12">
                     
                  </div>
                  <div class="col-md-4 col-xs-12">
                      
                  </div> -->
               </div>
            </div>
         </div>
         <!-- <div class="col-md-4 wow bounceInRight">
            <div class="real_gif">
               <img src="<?php echo base_url();?>assets/images/real.gif" class="img-fluid ">
            </div>
            </div> -->
      </div>
   </div>
</section>

<section class="most-popular">
   <div class="container-fluid wrap-container">
      <!-- <div class="row">
         <div class="col-md-12 text-center my_quel">
            <div class=" LookAle">
               <h3><strong>What Are You Looking For?</strong></h3>
            </div>
         </div>
         </div> -->
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="section-title text-center">
               <h3 ><strong>Properties In Most Popular Places</strong></h3>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 my-2 wow rotateInUpRight " data-wow-delay=".20s">
            <a href="<?php echo base_url();?>propertylist">
               <div class="modernOuter text-center">
                  <div class="ModernCustom text-center">
                     <img src="<?php echo base_url();?>assets/images/villa.png" class="img-fluid">
                  </div>
                  <h4 class="mt-3">Modern Villa</h4>
                  <p>Here's the 50,000-foot view: The term “modern” typically refers to a very distinctive architectural style of home that was built from the early 1900s to the 1950s.</p>
               </div>
            </a>
         </div>
         <div class="col-md-3 my-2 wow rotateInUpRight " data-wow-delay=".30s">
            <a href="<?php echo base_url();?>propertylist">
               <div class="modernOuter text-center">
                  <div class="ModernCustom text-center">
                     <img src="<?php echo base_url();?>assets/images/househome.png" class="img-fluid">
                  </div>
                  <h4 class="mt-3">Family House</h4>
                  <p>Family House will be a beacon of mutual understanding, harmonious coexistence, and peace among people of faith and goodwill. It consists of a mosque, church.</p>
               </div>
            </a>
         </div>
         <div class="col-md-3 my-2 wow rotateInUpRight " data-wow-delay=".40s">
            <a href="<?php echo base_url();?>propertylist">
               <div class="modernOuter text-center">
                  <div class="ModernCustom text-center">
                     <img src="<?php echo base_url();?>assets/images/townhouse.png" class="img-fluid">
                  </div>
                  <h4 class="mt-3">Town House</h4>
                  <p>Townhouses are becoming increasingly popular with residents in Dubai. The longer you live in the city, the more your circumstances change and the more.</p>
               </div>
            </a>
         </div>
         <div class="col-md-3 my-2 wow rotateInUpRight " data-wow-delay=".50s">
            <a href="<?php echo base_url();?>propertylist">
               <div class="modernOuter text-center">
                  <div class="ModernCustom text-center">
                     <img src="<?php echo base_url();?>assets/images/appartment.png" class="img-fluid">
                  </div>
                  <h4 class="mt-3">Apartment</h4>
                  <p>Most Booked Apartments in Dubai This Month Golden Sands Hotel Apartments 8856 apartment reviews ; Millennium Place Barsha Heights Hotel Apartments.</p>
               </div>
            </a>
         </div>
      </div>
   </div>
</section>
<section class="key-role">
   <div class="container-fluid wrap-container">
      <div class="row">
         <div class="col-md-12 text-center my_quel">
            <div class="section-title text-center">
               <h3 class="dark-heading"><strong>5 Key Roles Your Al-Eizba Plays</strong></h3>
            </div>
         </div>
      </div>
      <div class="row wow bounceInUp ">
         <div class="col-md-12">
            <div class="infotesti">
               <div id="demo" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                     <li data-target="#demo" data-slide-to="0" class="active"></li>
                     <li data-target="#demo" data-slide-to="1"></li>
                     <li data-target="#demo" data-slide-to="2"></li>
                  </ul>
                  <!-- The slideshow -->
                  <div class="carousel-inner ">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-4 office-meet">
                              <img src="<?php echo base_url();?>assets/images/meeting1.jpg"  class="img-fluid" alt="...">
                           </div>
                           <div class="col-md-8 my-5 testimonial-conrent">
                              <!-- <h4>5 Key Roles Your Ale-Izba Plays</h4> -->
                              <h1 class="ml7">
                                 <span class="text-wrapper">
                                 <span class="letters">1. Paper Pros</span>
                                 </span>
                              </h1>
                              <p>Sales agents work for vendors to sell their property. Agents can be involved in a range of tasks within an agency, or they can focus on one or two tasks, depending on the size of the agency. Larger agencies tend to employ specialists, for example, they may hire a copywriter to write marketing materials.</p>
                              <p>The responsibilities of sales agents include appraising properties, marketing properties, arranging inspections, negotiating sales, and coordinating legal work.</p>
                              <p>

                                Agents say they love helping people through the process of buying and selling homes, which can be stressful and is often the largest financial transaction of a person's life. </p>
                              <a href="<?php echo base_url();?>contact" class="btn home_meet_btn dark-button">Meet a Al-Eizba</a>  
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-4 office-meet">
                              <img src="<?php echo base_url();?>assets/images/office2.jpg"  class="img-fluid" alt="...">
                           </div>
                           <div class="col-md-8 my-5 testimonial-conrent">
                              <!-- <h4>5 Key Roles Your Ale-Izba Plays</h4> -->
                              <h1 class="ml7">
                                 <span class="text-wrapper">
                                 <span class="letters">2. Marketing Experts</span>
                                 </span>
                              </h1>
                              
                              <p style="text-align: justify;">

The real estate industry has moved into the digital age. Today’s renters and home buyers use the internet as their primary source of information, searching for properties and realtors online. Nearly half of all buyers discover their new homes online. If you’re a property owner or real estate agent, your digital presence is just as important as your personal network.</p>
<p>
The real estate agents use various digital, as well as traditional methods, to promote or market a property. They post the listing and the desired price of the property on all online real estate portals. This helps in reaching the buyers on a wider scale. He/she conducts an open house for your property on your behalf and meets the potential buyers. Therefore, it saves your time and energy.</p>
                              <a href="<?php echo base_url();?>contact" class="btn home_meet_btn dark-button">Meet a Al-Eizba</a>  
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-4 office-meet">
                              <img src="<?php echo base_url();?>assets/images/meeting3.jpg"  class="img-fluid" alt="...">
                           </div>
                           <div class="col-md-8 my-5 testimonial-conrent">
                              <!-- <h4>5 Key Roles Your Ale-Izba Plays</h4> -->
                              <h1 class="ml7">
                                 <span class="text-wrapper">
                                 <span class="letters">3. Pricing Advisors</span>
                                 </span>
                              </h1>
                              <p>Property managers look after property on behalf of their owners. Property managers can look after residential, commercial, or industrial property. The role involves finding tenants, ensuring that the rent has been paid, arranging repairs, marketing the property, and negotiating leases.
                              </p>
                              <p>

Property managers can help people in the community find rental accommodation and help them manage the property they are in. Property managers can be particularly helpful to disadvantaged communities when they take the time to understand their problems and find ways to solve them.</p>
                              <a href="<?php echo base_url();?>contact" class="btn home_meet_btn dark-button">Meet a Al-Eizba</a>  
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-4 office-meet">
                              <img src="<?php echo base_url();?>assets/images/meeting4.jpg"  class="img-fluid" alt="...">
                           </div>
                           <div class="col-md-8 my-5 testimonial-conrent">
                              <!-- <h4>5 Key Roles Your Ale-Izba Plays</h4> -->
                              <h1 class="ml7">
                                 <span class="text-wrapper">
                                 <span class="letters">4. Negotiator Extraordinaires</span>
                                 </span>
                              </h1>
                              <p>Negotiating a property sale can be intimidating; a REALTOR® has the experience to get you the best deal so you don’t leave any money on the table. </p>
                              <p>A real estate agent serves as a negotiator. It is his/her duty to get the best sale price while assisting a property seller. On the other hand, he is responsible to negotiate and get the lowest quote when his/her client is a property buyer. Throughout the process, it is the duty of the negotiator to ensure that the deals are fair and the interests’ of the clients are protected.</p>
                              <a href="<?php echo base_url();?>contact" class="btn home_meet_btn dark-button">Meet a Al-Eizba</a>  
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-4 office-meet">
                              <img src="<?php echo base_url();?>assets/images/meeting5.jpg"  class="img-fluid" alt="...">
                           </div>
                           <div class="col-md-8 my-5 testimonial-conrent">
                              <!-- <h4>5 Key Roles Your Ale-Izba Plays</h4> -->
                              <h1 class="ml7">
                                 <span class="text-wrapper">
                                 <span class="letters">5. Your Home Buying MVPs</span>
                                 </span>
                              </h1>
                              <p>Buying or selling the biggest asset of your life is stressful. A REALTOR® can help keep your emotions in check throughout the complex and time-consuming process.</p>
                              <p>Like every organisation, having a good support team can be the difference between success and failure. Real estate receptionists can be particularly important because they can be the first point of contact, and set the tone for all future transactions. Support staff in a real estate business can perform a range of duties, from reception to receiving rent, to typing, and can be an excellent way to learn about the business, and a great first step on your real estate career path.</p>
                              <a href="<?php echo base_url();?>contact" class="btn home_meet_btn dark-button">Meet a Al-Eizba</a>  
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev next_click" href="#demo" data-slide="prev">
                     <img src="<?php echo base_url();?>assets/images/left_click.svg">
                     <!--  <span class="carousel-control-prev-icon"></span> -->
                  </a>
                  <a class="carousel-control-next next_click" href="#demo" data-slide="next">
                     <img src="<?php echo base_url();?>assets/images/right.svg">
                     <!--  <span class="carousel-control-next-icon"></span> -->
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="video-section">
   <div class="container-fluid wrap-container">
    <div class="AleVideo">
      <div class="row">
         <div class="col-md-12 text-center VideoIcon">
            <div class="  verycenter">
               <a href="https://www.facebook.com/aleizbahousing/videos" target="_blank"><i class="fa fa-youtube-play fa-4x scale-down-center" aria-hidden="true"></i></a>
            </div>
         </div>
         </div>
      </div>
   </div>
</section>
<section class="SaleBg ">
   <div class="container-fluid wrap-container mt-5">
      <div class="row">
         <div class="col-md-6">
            <div class="born_ale ">
               <h2 class="text-white mt-5">We were born to be Al-Eizba.</h2>
               
               <p class="text-white">Buying and selling homes is in our DNA.<br>
                  Get the knownledge ,expertise and dedication<br> 
                  of a Al-Eizba on your side.
               </p>
            </div>
            <!--Android & IOS Playstore Badge-->
            <!-- <div class="d-flex badge p-0 mt-5">
               <a href="#"><img src="<?php echo base_url();?>assets/images/google-play-badge.png" class="img-fluid"></a>
               <a href="#"><img src="<?php echo base_url();?>assets/images/app-store.png" class="img-fluid ml-2"></a>
            </div> -->
            <!--Android & IOS Playstore Badge-->
         </div>
         <div class="col-md-6 d-none d-sm-block mobileRes text-right">
            <img src="<?php echo base_url();?>assets/images/mobileSale.png" class="img-fluid">
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
   var textWrapper = document.querySelector('.Bannertext');
   textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
   
   anime.timeline({loop: true})
   .add({
     targets: '.Bannertext .letter',
     translateX: [40,0],
     translateZ: 0,
     opacity: [0,1],
     easing: "easeOutExpo",
     duration: 1200,
     delay: (el, i) => 500 + 30 * i
   }).add({
     targets: '.Bannertext .letter',
     translateX: [0,-30],
     opacity: [1,0],
     easing: "easeInExpo",
     duration: 1100,
     delay: (el, i) => 100 + 30 * i
   });
</script>
<!-- Search css ################################################### -->
<script>
   // Get the modal
   var modal = document.getElementById("myModal");
   
   // Get the button that opens the modal
   var btn = document.getElementById("myBtn");
   
   // Get the <span> element that closes the modal
   var span = document.getElementsByClassName("close")[0];
   
   // When the user clicks the button, open the modal 
   // btn.onclick = function() {
   //   modal.style.display = "block";
   // }
   
   // When the user clicks on <span> (x), close the modal
   // span.onclick = function() {
   //   modal.style.display = "none";
   // }
   
   // When the user clicks anywhere outside of the modal, close it
   window.onclick = function(event) {
     if (event.target == modal) {
       modal.style.display = "none";
     }
   }
</script>
<!--Modal Script End-->
<!--Datepicker Script Start-->
<!-- 
   <script>
     $( function() {
       $( "#datepicker" ).datepicker();
     } );
   
   
     $( function() {
       $( "#datepicker1" ).datepicker();
     } );
   </script> -->
<!--Datepicker Script End-->
<script type="text/javascript">
   // window.activeFormName = "form1";
   // window.activeFormName = "form2";
   // window.activeFormName = "form3";
   
   
   
   
   window.searchUrl = "<?php echo  base_url('propertylist/index?');?>";
   window.currentPageNo = "&page=1";
   
   
   $(document).ready(function(){
   $("#propertylistForm").submit(function(){
     allSearchAction();
     return false;
   });
   });
   
   $(document).ready(function(){
   $("#propertylistForm1").submit(function(){
     allSearchAction();
     return false;
   });
   });
   
   // New Add Today Start
   $(document).ready(function(){
   $('#residentialListForm').submit(function() {
     getResidentialModalData();
     getShortByData();
     return false;
   });
   });
   //New Add Today End
   
   //New Add Today Start
   // $(document).ready(function(){
   //     $("#commercialListForm").submit(function(){
   //        getCommercialModalData();
   //        getShortByData();
   //        return false;
   //     });
   // });
   //New Add Today End
   
   $('#PropertySortBy').on('change', function() {
   allSearchAction();
   return false;
   });
   
   
   // pagination click
   $('.page-item').on('click', function() {
   window.currentPageNo = $(this).attr("data-page");
   allSearchAction();
   return false;
   });
   
   
   
   // functions 
   // ===================================================
   // function search 
   function allSearchAction(){
   getSearchFormData();
   getCommercialSearchFormData();
   getShortByData();
   window.location.href = window.searchUrl+window.currentPageNo;
   }
   // function get form data 
   function getSearchFormData(){
   var search = $('[name*="search"]' ).val();
   var minPrice = $('[name*="minPrice"]' ).val();
   var maxPrice = $('[name*="maxPrice"]' ).val();
   var bed = $('[name*="bed"]' ).val();
   var bath = $('[name*="bath"]' ).val();
   window.searchUrl = window.searchUrl+"search="+search+"&minPrice="+minPrice+"&maxPrice="+maxPrice+"&bed="+bed+"&bath="+bath;
   window.location.href=searchUrl;
   }
   
   
   // function get commercial form data=================
   function getCommercialSearchFormData(){
   var searchCom = $('[name="searchCom"]' ).val();
   var minPriceCom = $('[name="minPriceCom"]' ).val();
   var maxPriceCom = $('[name="maxPriceCom"]' ).val();
   var landCom = $('[name="landCom"]' ).val();
   
   window.searchUrl = window.searchUrl+"&searchCom="+searchCom+"&minPriceCom="+minPriceCom+"&maxPriceCom="+maxPriceCom+"&landCom="+landCom;
   }
   
   
   // function get Residential Filter Modal
   
   function getResidentialModalData(){
   var searchResFilter = $('[name*="searchResFilter"]').val();
   var propertyResFilter = $('[name*="propertyResFilter"]').val();
   var transactionResFilter = $('[name*="transactionResFilter"]').val();
   var minPriceResFilter = $('[name*="minPriceResFilter"]').val();
   var maxPriceResFilter = $('[name*="maxPriceResFilter"]').val();
   var bedsResFilter = $('[name*="bedsResFilter"]').val();
   var bathsResFilter = $('[name*="bathsResFilter"]').val();
   var landResFilter = $('[name*="landResFilter"]').val();
   var yearBuiltResFilter = $('[name*="yearBuiltResFilter"]').val();
   var keywordsResFilter = $('[name*="keywordsResFilter"]').val();
   
   window.searchUrl = window.searchUrl+"searchResFilter="+searchResFilter+"&propertyResFilter="+propertyResFilter+"&transactionResFilter="+transactionResFilter+"&minPriceResFilter="+minPriceResFilter+"&maxPriceResFilter="+maxPriceResFilter+"&bedsResFilter="+bedsResFilter+"&bathsResFilter="+bathsResFilter+"&landResFilter="+landResFilter+"&yearBuiltResFilter"+yearBuiltResFilter+"&keywordsResFilter="+keywordsResFilter;
   
   window.location.href = window.searchUrl+window.currentPageNo;
   }
   
   // function get Residential Filter Modal End
   
   // function get Commercial Filter Modal
   
   function getCommercialModalData(){
   var searchComFilter = $('[name*="searchComFilter"]').val();
   var propertyComFilter = $('[name*="propertyComFilter"]').val();
   var transactionComFilter = $('[name*="transactionComFilter"]').val();
   var minPriceComFilter = $('[name*="minPriceComFilter"]').val();
   var maxPriceComFilter = $('[name*="maxPriceComFilter"]').val();
   var landSizeComFilter = $('[name*="landSizeComFilter"]').val();
   var yearBuiltComFilter = $('[name*="yearBuiltComFilter"]').val();
   var keywordsComFilter = $('[name*="keywordsComFilter"]').val();
   
   window.searchUrl = window.searchUrl+"searchComFilter="+searchComFilter+"propertyComFilter="+propertyComFilter+"transactionComFilter="+transactionComFilter+"minPriceComFilter="+minPriceComFilter+"maxPriceComFilter="+maxPriceComFilter+"landSizeComFilter="+landSizeComFilter+"yearBuiltComFilter="+yearBuiltComFilter+"keywordsComFilter="+keywordsComFilter;
   
   window.location.href = window.searchUrl+window.currentPageNo;
   }
   
   // function get Commercial Filter Modal End
   
   
   // function get PropertySortBy 
   function getShortByData(){
   var PropertySortBy = $('[name*="PropertySortBy"]' ).val();
   if(PropertySortBy != '')
   
   window.searchUrl = window.searchUrl+"&PropertySortBy="+PropertySortBy;
   }
   //End =================================================
   $(".searchAleForm").click(function(){
   
   getSearchFormData();
   });
   
   
   
   //IP Adress and History
   // $("#searchBtn").click(function()
   
   
</script>
 
<!--Pagination
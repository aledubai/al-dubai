<!--Style Tag Starts-->
<style type="text/css">
   /* The Modal (background) */
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
   .modal-content {
   background-color: #fefefe;
   margin: auto;
   padding: 20px;
   border: 1px solid #888;
   width: 80%;
   }
   /* The Close Button */
   .close {
   color: #aaaaaa;
   float: right;
   font-size: 28px;
   font-weight: bold;
   }
   .close:hover,
   .close:focus {
   color: #000;
   text-decoration: none;
   cursor: pointer;
   }
   #icon{
   position:absolute;
   right: 30px;
   top:42px;
   }
   #check {
   position:absolute;
   left:30px;
   top:45px;
   }
   #checkName{
   position:absolute;
   left:55px;
   top:40px;
   }
   #modalSearch{
   color: #fff;
   background-color: #94ca60;
   width: 150px;
   height: 50px;
   border-radius: 20px;
   border: none;
   cursor: pointer;
   }
   #modalSearch:hover {
   box-shadow: 0 10px 14px 0 rgba(0,0,0,0.24),0 15px 40px 0 rgba(0,0,0,0.19);
   }
   #modalReset{
   color: #23A1C0;
   background-color: #fff;
   width: 150px;
   height: 50px;
   border-radius: 20px;
   border: 2px solid #ccc;
   cursor: pointer;
   }
   #modalReset:hover {
   box-shadow: 0 10px 14px 0 rgba(0,0,0,0.24),0 15px 40px 0 rgba(0,0,0,0.19);
   }
   .nav-tabs .nav-link.active {
   color: white;
   background-color: black;
   opacity: 0.7;
   }

   .select-form{
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #796d68;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ffffff;
    border-radius: .25rem;
   }

   select.select-form:not([size]):not([multiple]) {
    height: calc(2.25rem + 12px);
}

.select-form:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ced4da!important;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 0%)!important;
  }

  .formLeft{
        position: relative;
    left: 7rem;
  }
  .ale-izba_placeholder{
    width: 190%;
  }


  @media (max-width: 500px) 
  {
   .ale-izba_placeholder {
      width: 100%;
    }
  } 
  
  @media (max-width: 500px) 
  {
   .formLeft {
       position: relative;
    left: 0rem;
    }
  } 

</style>
<!-- search section-->
<div class="tab-content" id="myTabContent">
   <div class="tab-pane  show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <section class="homelist_bg">
         <div class="container-fluid wrap-container pt-2 pb-2">
            <div class="row mb-4">
               <div class="col-md-12 bg-white radius p-0">
                  <form name="form1" action="<?=base_url()?>propertylist/index" method="GET" id="propertylistForm" 
                    onsubmit="return false">
                     <div class="row">
                        <div class="col-sm-6 col-xs-12">
                           <div class="row">
                              <div class="col-sm-4 col-xs-6">
                                 <input type="text" placeholder="City,Neighbourhood or MLS Number" name="search" id="search" class="form-control ale-izba_placeholder" value="<?php if(isset($_GET['search'])){ echo $_GET['search'];}?>" >
                              </div>
                              <div class="col-sm-4 col-xs-6 formLeft">
                                 <div class="p-2 ">
                                    <select data-placeholder="Min Price" class="select-form" name="minPrice" tabindex="2 ">
                                       <option value="">Min Price</option>
                                       <?php 
                                          $option = '';
                                            
                                             for ($i = 0; $i < 12; $i++) {
                                              $startAmount=25000;
                                                $selecteds = '';
                                                if(isset($_GET['minPrice']) && $_GET['minPrice'] ==$startAmount*$i)
                                                {
                                                  $selecteds = 'selected';
                                                }
                                                 $option .= '<option value="'.$startAmount*$i.'" '.$selecteds .'>'.number_format($startAmount*$i).'</option>';
                                                }
                                              
                                             echo  $option ;
                                          ?>                     
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4  col-xs-6 formLeft">
                                 <div class="p-2 ">
                                    <select data-placeholder="Max Price" class=" select-form" name="maxPrice" tabindex="2 ">
                                       <option value="">Max Price</option>
                                       <?php 
                                          $option = '';
                                            
                                             for ($i = 0; $i < 12; $i++) {
                                              $startAmount=250000;
                                          
                                          
                                                $selecteds = '';
                                                if(isset($_GET['maxPrice']) && $_GET['maxPrice'] ==$startAmount*$i)
                                                {
                                                $selecteds = 'selected';
                                                }
                                                 $option .= '<option value="'.$startAmount*$i.'"  '.$selecteds .'>'.number_format($startAmount*$i).'</option>';
                                             }
                                             echo  $option ;
                                          ?>                     
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="row">
                              <div class="col-sm-4 col-xs-12 formLeft">
                                 <div class="p-2 ">
                                    <select data-placeholder="Beds" class="select-form" name="bed" tabindex="2 ">
                                       <option value="0_">Beds</option>
                                       <?php 
                                          $option = '';
                                          for ($i = 0; $i < 6; $i++) {
                                             
                                             $selecteds = '';
                                                  if(isset($_GET['bed']) && $_GET['bed'] == $i)
                                                  {
                                                  $selecteds = 'selected';
                                                  }
                                          
                                            $option .= '<option value="'.$i.'_" '.$selecteds .' >'. $i.'</option>';
                                            if($i!==0)
                                            {
                                              $selecteds = '';
                                                  if(isset($_GET['bed']) && $_GET['bed'] =="'.$i.'_+")
                                                  {
                                                  $selecteds = 'selected';
                                                  }
                                          
                                              $option .= '<option value="'.$i.'_+" '.$selecteds .' >'.$i.'+</option>';  
                                            }
                                            
                                          }
                                            echo  $option ;
                                          ?> 
                                       <!-- <option value="1_">1</option>
                                          <option value="1_+">1+</option>
                                          <option value="2_">2</option>
                                          <option value="2_+">2+</option>
                                          <option value="3_">3</option>
                                          <option value="3_+">3+</option>
                                          <option value="4_">4</option>
                                          <option value="4_+">4+</option>
                                          <option value="5_">5</option>
                                          <option value="5_+">5+</option> -->
                                    </select>
                                 </div>
                                 <!-- end -->
                                 <!-- Bath -->
                              </div>
                              <div class="col-sm-4 col-xs-12 formLeft">
                                 <div class="p-2 ">
                                    <select data-placeholder="Baths" class="select-form" name="bath" tabindex="2 ">
                                       <option value="0_">Baths</option>
                                       <?php 
                                          $option = '';
                                          for ($i = 0; $i < 6; $i++) {
                                             
                                             $selecteds = '';
                                                  if(isset($_GET['bath']) && $_GET['bath'] =="'.$i.'_")
                                                  {
                                                  $selecteds = 'selected';
                                                  }
                                          
                                            $option .= '<option value="'.$i.'_" '.$selecteds .' >'. $i.'</option>';
                                            if($i!==0)
                                            {
                                              $selecteds = '';
                                                  if(isset($_GET['bath']) && $_GET['bath'] =="'.$i.'_+")
                                                  {
                                                  $selecteds = 'selected';
                                                  }
                                          
                                              $option .= '<option value="'.$i.'_+" '.$selecteds .' >'.$i.'+</option>';  
                                            }
                                            
                                          }
                                            echo  $option ;
                                          ?> 
                                       <!-- <option value="1_">1</option>
                                          <option value="1_+">1+</option>
                                          <option value="2_">2</option>
                                          <option value="2_+">2+</option>
                                          <option value="3_">3</option>
                                          <option value="3_+">3+</option>
                                          <option value="4_">4</option>
                                          <option value="4_+">4+</option>
                                          <option value="5_">5</option>
                                          <option value="5_+">5+</option> -->
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4  col-xs-12  ">
                                 <div class="p-2">
                                    <button <?php echo $searchDisable;?> name="searchBtn" id="searchBtn" style="border: 0px solid;cursor: pointer;" type="submit" class="searchAleForm" ><i class="fa fa-search" aria-hidden="true"></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <!-- <div class=" col-md-2  list-home ">
                  <button type="button" class="btn bannerBtn3 pull-right" id="myBtn">Filter <i class="fa fa-filter" aria-hidden="true"></i></button>
               </div> -->
            </div>
         </div>
      </section>
   </div>


   <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <section class="homelist_bg">
         <div class="container-fluid wrap-container pt-2 pb-2">
            <div class="row mb-4">
               <div class="col-md-12 bg-white radius p-0">
                  <form name="form2" action="<?=base_url()?>propertylist/index" method="GET" id="propertylistForm1" 
                    onsubmit="return false">
                     <div class="row">
                        <div class="col-sm-6 col-xs-12">
                           <div class="row">
                              <div class="col-sm-4 col-xs-6">
                                 <input type="text" placeholder="City,Neighbourhood or MLS Number" name="searchCom" id="searchCom" class="form-control ale-izba_placeholder" value="<?php if(isset($_GET['searchCom'])){ echo $_GET['searchCom'];}?>" >
                              </div>
                              <div class="col-sm-4 col-xs-6 formLeft">
                                 <div class="p-2 ">
                                    <select data-placeholder="Min Price" class="select-form" name="minPriceCom" tabindex="2 ">
                                       <option value="">Min Price</option>
                                       <?php 
                                          $option = '';
                                            
                                             for ($i = 0; $i < 12; $i++) {
                                              $startAmount=25000;
                                                $selecteds = '';
                                                if(isset($_GET['minPriceCom']) && $_GET['minPriceCom'] ==$startAmount*$i)
                                                {
                                                  $selecteds = 'selected';
                                                }
                                                 $option .= '<option value="'.$startAmount*$i.'" '.$selecteds .'>'.number_format($startAmount*$i).'</option>';
                                                }
                                              
                                             echo  $option ;
                                          ?>                     
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4  col-xs-6 formLeft">
                                 <div class="p-2 ">
                                     <select data-placeholder="Max Price" class="select-form" name="maxPriceCom" tabindex="2 ">
                                       <option value="">Max Price</option>
                                       <?php 
                                          $option = '';
                                            
                                             for ($i = 0; $i < 12; $i++) {
                                              $startAmount=250000;
                                          
                                          
                                                $selecteds = '';
                                                if(isset($_GET['maxPriceCom']) && $_GET['maxPriceCom'] ==$startAmount*$i)
                                                {
                                                $selecteds = 'selected';
                                                }
                                                 $option .= '<option value="'.$startAmount*$i.'"  '.$selecteds .'>'.number_format($startAmount*$i).'</option>';
                                             }
                                             echo  $option ;
                                          ?>                     
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="row">
                              <div class="col-sm-4 col-xs-12 formLeft">
                                  <div class="p-2 ">
                                    <select data-placeholder="Building Size" class="select-form" name="buildingSizeCom" tabindex="2 ">
                                      <option value="0_">Any</option>
                                      <option value="1_+">0-5,000 sqft</option>
                                      <option value="2_+">5,001-15,000 sqft</option>
                                      <option value="5_+">15,001-20,000 sqft</option>
                                      <option value="10_+">20,001-25,000 sqft</option>
                                      <option value="50_+">30,001-35,000 sqft</option>
                                      <option value="100_+">40,001-45,000 sqft</option>
                                      <option value="200_+">50,001-75,000 sqft</option>
                                      <option value="300_+">75,001-100,000 sqft</option>
                                      <option value="400_+">100,001-150,000 sqft</option>
                                      <option value="500_+">150,001-200,000 sqft</option>
                                      <option value="1000_+">200,001-250,000 sqft</option>
                                      <option value="1000_+">Over 250,000 sqft</option>
                                    </select>
                                  </div>
                                 <!-- end -->
                                 <!-- Bath -->
                              </div>
                              <div class="col-sm-4 col-xs-12 formLeft">
                                <div class="p-2 ">
                                  <select data-placeholder="Land Size" class="select-form" name="landCom" tabindex="2 ">
                                    <option value="0_">Any</option>
                                    <option value="1_+">1+ acres</option>
                                    <option value="2_+">2+ acres</option>
                                    <option value="5_+">5+ acres</option>
                                    <option value="10_+">10+ acres</option>
                                    <option value="50_+">50+ acres</option>
                                    <option value="100_+">100+ acres</option>
                                    <option value="200_+">200+ acres</option>
                                    <option value="300_+">300+ acres</option>
                                    <option value="400_+">400+ acres</option>
                                    <option value="500_+">500+ acres</option>
                                    <option value="1000_+">1000+ acres</option>
                                  </select>
                                </div>
                    <!-- end -->
                              </div>
                              <div class="col-sm-4  col-xs-12">
                                 <div class="p-2">
                                    <button <?php echo $searchDisable;?> name="searchBtn" id="searchBtn" style="border: 0px solid;cursor: pointer;" type="submit" class="searchAleForm" ><i class="fa fa-search" aria-hidden="true"></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <!-- <div class=" col-md-2  list-home ">
                  <button type="button" class="btn bannerBtn3 pull-right" id="myBtn">Filter <i class="fa fa-filter" aria-hidden="true"></i></button>
               </div> -->
            </div>
         </div>
      </section>
   </div>
</div>
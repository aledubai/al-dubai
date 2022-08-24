      
  <!--Datepicker CSS & JS Starts-->
      <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
  <!--Datepicker CSS & JS Ends-->

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

.modalSearch{
    color: #fff;
    background-color: #94ca60;
    width: 150px;
    height: 50px;
    border-radius: 20px;
    border: none;
    cursor: pointer;
}

.modalSearch:hover {
  box-shadow: 0 10px 14px 0 rgba(0,0,0,0.24),0 15px 40px 0 rgba(0,0,0,0.19);
}


.modalReset{
  color: #23A1C0;
  background-color: #fff;
  width: 150px;
  height: 50px;
  border-radius: 20px;
  border: 2px solid #ccc;
  cursor: pointer;
}

.modalReset:hover {
  box-shadow: 0 10px 14px 0 rgba(0,0,0,0.24),0 15px 40px 0 rgba(0,0,0,0.19);
}

.nav-tabs .nav-link.active {
    color: white;
    background-color: black;
    opacity: 0.7;
    }

@media (max-width: 500px) 
  {
    .mobileModal {
          margin-right: 1.5rem !important;
width: 88% !important;
height: 69rem !important;
    }
  } 

  @media (max-width: 500px) 
  {
    #myTab {
       position: absolute;
    top: -60px;
    left: -182px;
    }
  }  


  @media (max-width: 500px) 
  {
   .Residential_wp {
       width: 9rem !important;
       padding: 10px 18px;
    }
  } 

   @media (max-width: 500px) 
  {
   .Commercial_wp {
       width: 9.5rem !important;
       padding: 10px 18px;
    }
  } 

   @media (max-width: 500px) 
  {
   .modalSearch {
           width: 110px;
    height: 40px;
    }
  } 

   @media (max-width: 500px) 
  {
   .modalReset {
           width: 110px;
    height: 40px;
    }
  }

   @media (max-width: 500px) 
  {
   #searchMobView {
           padding-top: 1.5rem!important;
  
  width: 100%;

    }
  } 

.inputMobileView{
  width: 195%;
}


  @media (max-width: 500px) 
  {
   .inputMobileView {
          width: 100%;
    }
  } 

   @media (max-width: 500px) 
  {
   .searchMobileView {
          margin-bottom: 15px;
    }
  } 

.chosen-container{
  position: relative;
  left: 7rem;
}

  @media (max-width: 500px) 
  {
   .chosen-container {
           position: relative;
  left: 0rem;
    }
  } 

   @media (max-width: 500px) 
  {
   .searchMobView {
       width: 100%;
    }
  } 


</style>
<!-- Style Tag Ends-->

<div class="row" id="searchMobView">
<!-- form Start here  -->
   <section class="homelist_bg col-sm-10">
      <div class="container-fluid wrap-container pt-2 pb-2" style="padding-left: 40px;">
        <div class="row mb-4">
          <div class="col-md-12 bg-white radius p-0">
               <form name="form1" action="<?=base_url()?>propertylist/index" method="GET" id="propertylistForm">
                <div class="row">
                  <div class="col-sm-6 col-xs-12">
                    <div class="row">
                      <div class="col-sm-4 col-xs-6">
                  <!-- input serach Bar -->
                  <input type="text" placeholder="City,Neighbourhood or MLS Number" name="search" class="form-control ale-izba_placeholder inputMobileView" value="<?php if(isset($_GET['search'])){ echo $_GET['search'];}?>" >
                </div>
                  <!-- end -->
                  <!-- min-price -->
                   <div class="col-sm-4 col-xs-6">
                  <div class="p-2 ">
                     <select data-placeholder="Min Price" class="chosen-select form-control inputMobileView" name="minPrice" tabindex="2 ">
                        <option value=""></option>
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
                  <!-- end -->
                  <!-- unlimited -->
                   <div class="col-sm-4 col-xs-6">
                  <div class="p-2 ">
                     <select data-placeholder="Max Price" class="chosen-select form-control inputMobileView" name="maxPrice" tabindex="2 ">
                        <option value=""></option>

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
                  <!-- end -->
                </div>
              </div>


                  <div class="col-sm-6 col-xs-12">
                    <div class="row">
                      <div class="col-sm-4 col-xs-6">
                  <!-- Bed -->
                  <div class="p-2 ">
                     <select data-placeholder="Beds" class="chosen-select form-control inputMobileView" name="bed" tabindex="2 ">
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
                </div>
                  <!-- end -->
                  <!-- Bath -->
                      <div class="col-sm-4 col-xs-6">
                  <div class="p-2 ">
                     <select data-placeholder="Baths" class="chosen-select form-control inputMobileView" name="bath" tabindex="2 ">
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
                  <!-- end -->
                  <!-- search button  -->
                      <div class="col-sm-4 col-xs-6">
                  <div class="p-2">
                     <button style="border: 0px solid;" type="submit" class="searchAleForm searchMobileView" ><i class="fa fa-search" aria-hidden="true"></i></button>
                  </div>
                </div>
               </div>
            </div>
          </form>
            <!--Form Close Tag-->
            
         </div>
      </div>
   </section>

   <section class="col-sm-2">
     <div class=" col-md-2  list-home ">
               <button type="button" class="btn bannerBtn3 " id="filterBtn">Filter <i class="fa fa-filter" aria-hidden="true"></i></button>
            </div>
   </section>
 </div>

<section>
  
 <!--Modal Page Code Starts-->

    <div id="filterModal" class="modal">

      <!--Switch Button Start-->

        <div class="col-md-12" style="margin-left: 190px;">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
            <a class="nav-link btn Residential_wp" id="home-tab" data-toggle="tab" href="#home" role="tab button" aria-controls="home" aria-selected="true" style="margin: 10px;"><b><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Residential</b></a>
            </li>
            <li class="nav-item" role="presentation">
            <a class="nav-link btn Commercial_wp" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="margin: 10px;"><b><i class="fa fa-building" aria-hidden="true"></i>&nbsp;&nbsp;Commercial</b></a>
            </li>
            </li>
            </ul>

        </div>


      <!--Switch Button Ends-->


  <!-- Residential Modal content -->
  <div class="modal-content mobileModal" id="modalRes">

    <span class="close closeModal" style="margin-top: 15px;">&times;</span>

    <div class="tab-content" id="myTabContent">

    <!-- Residential Modal Div Starts-->
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

      <!-- Residential Modal Starts-->
      <section>
  <div class="container filterContainer">
    <form name= "form2" action="<?=base_url()?>propertylist/index" method="GET" id="residentialListForm">
   <div class="row">
   <div class="col-sm-12">
   <input type="text" placeholder="City,Neighbourhood or MLS Number"  name="searchResFilter" class="form-control ale-filter ">
    <!-- <h4>Search Filters</h4> -->
   </div>
   </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-3">
      <label>Property Type</label>
          <select placeholder="Property Type" class=" form-control" name="propertyResFilter">
              <option value="">Select</option>
              <?php foreach ($getResidentialList as $k =>$v){
              ?>
              <option value="<?=$k ?>"><?= $v ?></option>
              <?php } ?>
          </select>
        </div>

        <div class="col-md-3">
      <label>Transaction Type </label>
          <select placeholder="Transaction Type" class=" form-control" name="transactionResFilter">
            <option value="">Select</option>
              <?php foreach ($PurposeList as $k =>$v){
              ?>
              <option value="<?=$k ?>"><?= $v ?></option>
              <?php } ?>
          </select>
        </div>


        <div class="col-md-3">
      <label>Min Price</label>
          <select placeholder="Min Price" class=" form-control" name="minPriceResFilter">
            <option value="">Select Price</option>
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


        <div class="col-md-3">
      <label>Max Price</label>
          <select placeholder="Max Price" class=" form-control" name="maxPriceResFilter">
            <option value="">Select Price</option>
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
      </div>

    <div class="row" style="margin-top: 10px;">
        <div class="col-md-3">
      <label>Beds</label>
          <select placeholder="Beds" class=" form-control" name="bedsResFilter">
            <option value="0_">Any</option>
            <option value="1_">1</option>
            <option value="1_+">1+</option>
            <option value="2_">2</option>
            <option value="2_+">2+</option>
            <option value="3_">3</option>
            <option value="3_+">3+</option>
            <option value="4_">4</option>
            <option value="4_+">4+</option>
            <option value="5_">5</option>
            <option value="5_+">5+</option>
          </select>
        </div>

        <div class="col-md-3">
      <label>Baths</label>
          <select placeholder="Baths" class=" form-control" name="bathsResFilter">
            <option value="0_">Any</option>
            <option value="1_">1</option>
            <option value="1_+">1+</option>
            <option value="2_">2</option>
            <option value="2_+">2+</option>
            <option value="3_">3</option>
            <option value="3_+">3+</option>
            <option value="4_">4</option>
            <option value="4_+">4+</option>
            <option value="5_">5</option>
            <option value="5_+">5+</option>
          </select>
        </div>

        <div class="col-md-3">
      <label>Land Size</label>
          <select placeholder="Land Size" class=" form-control" name="landResFilter">
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

        <div class="col-md-3">
      <label>Year Built</label>
            <input type="text" class="form-control" name="yearBuiltResFilter" id="yearBuiltResFilter"><i class="fa fa-calendar" aria-hidden="true" id="icon"></i>
        </div>
    </div>


      <div class="row" style="margin-top: 10px;">
        <div class="col-md-3">
      <label>Building Type</label>
          <select placeholder="Building Type" class=" form-control" name="buildingTypeResFilter">
            <option value="0_">Any</option>
            <option value="1_+">House</option>
            <option value="2_+">Row/Townhouse</option>
            <option value="5_+">Apartment</option>
            <option value="10_+">Duplex</option>
            <option value="50_+">Triplex</option>
            <option value="100_+">Fourplex</option>
            <option value="200_+">Garden Home</option>
            <option value="300_+">Mobile Home</option>
            <option value="400_+">Manufactured Home/Mobile</option>
            <option value="500_+">Special Purpose</option>
            <option value="1000_+">Residential Commercial Mix</option>
            <option value="1000_+">Manufactured Home</option>
            <option value="1000_+">Commercial Apartment</option>
            <option value="1000_+">Two Apartment House</option>
            <option value="1000_+">Park Model Mobile Home</option>
          </select>
        </div>

        <div class="col-md-3">
      <label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" class="form-control" name="chkOpenHouse" disabled="" style="background-color: white;">
          <input type="checkbox" name="chkOpenHouseResFilter" id="check" value="1" data-hashkey="OpenHouse">
          <label for="chkOpenHouse" class="checkboxLabel" id="checkName">Open Houses Only</label>
        </div>

       <div class="col-md-6">
      <label>Keywords</label>
          <input type="text" placeholder="Waterfront, Garage, Pool..."  name="keywordsResFilter" class="form-control filterInner ">
       </div>
      </div>


      <div class="row" style="margin-top: 50px;">
        <div class="col-md-12 text-center">
          <button type="Reset" name="submitReset" class="modalReset"  ><b>Reset&nbsp;&nbsp;<i class="fa fa-undo" aria-hidden="true"></i></b></button>
          <button type="submit" name="submitSearch" class="modalSearch"  ><b>Search&nbsp;&nbsp;<i class="fa fa-search" aria-hidden="true"></i></b></button>
      </div>
      </div> 
    </form>
    </div>
  </section>
  <!-- Residential Modal Ends-->
  </div>
  <!-- Residential Modal Div Ends-->

    <!-- Commercial Modal Div Starts-->
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      

        <!-- Commercial Modal Starts-->
      <section>
  <div class="container filterContainer">
    <form name="form3" action="<?=base_url()?>propertylist/index" method="GET" id="commercialListForm">
   <div class="row">
   <div class="col-sm-12">
   <input type="text" placeholder="City,Neighbourhood or MLS Number"  name="searchComFilter" class="form-control ale-filter ">
    <!-- <h4>Search Filters</h4> -->
   </div>
   </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-3">
      <label>Property Type</label>
          <select placeholder="Property Type" class=" form-control" name="propertyComFilter">
              <option value="">Select</option>
              <?php foreach ($getCommercialList as $k =>$v){
              ?>
              <option value="<?=$k ?>"><?= $v ?></option>
              <?php } ?>
          </select>
        </div>

        <div class="col-md-3">
      <label>Transaction Type </label>
          <select placeholder="Transaction Type" class=" form-control" name="transactionComFilter">
            <option value="">Select</option>
              <?php foreach ($PurposeList as $k =>$v){
              ?>
              <option value="<?=$k ?>"><?= $v ?></option>
              <?php } ?>
          </select>
        </div>


        <div class="col-md-3">
      <label>Min Price</label>
          <select placeholder="Min Price" class=" form-control" name="minPriceComFilter">
            <option value="">Select Price</option>
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


        <div class="col-md-3">
      <label>Max Price</label>
          <select placeholder="Max Price" class=" form-control" name="maxPriceComFilter">
            <option value="">Select Price</option>
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
      </div>

    <div class="row" style="margin-top: 10px;">
         <div class="col-md-3">
      <label>Building Size</label>
          <select placeholder="Building Size" class=" form-control" name="buildingSizeComFilter">
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



         <div class="col-md-3">
      <label>Land Size</label>
          <select placeholder="Land Size" class=" form-control" name="landSizeComFilter">
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

        <div class="col-md-3">
      <label>Year Built</label>
            <input type="text" class="form-control" name="yearBuiltComFilter" id="yearBuiltComFilter"><i class="fa fa-calendar" aria-hidden="true" id="icon"></i>
        </div>
    </div>


      <div class="row" style="margin-top: 10px;">
       <div class="col-md-6">
      <label>Keywords</label>
          <input type="text" placeholder="Waterfront, Garage, Pool..."  name="keywordsComFilter" class="form-control filterInner ">
       </div>
      </div>


      <div class="row" style="margin-top: 50px;">
        <div class="col-md-12 text-center">
          <button type="Reset" class="modalReset"><b>Reset&nbsp;&nbsp;<i class="fa fa-undo" aria-hidden="true"></i></b></button>
          <button type="submit" class="modalSearch"><b>Search&nbsp;&nbsp;<i class="fa fa-search" aria-hidden="true"></i></b></button>
          <input hidden name="formCom" id="formCommercial" value="searchComAll">
      </div>
      </div> 
  </form>
    </div>
  </section>
  <!-- Commercial Modal Ends-->
  </div>
  <!-- Commercial Modal Div Ends-->

    </div>
      
  </div>
</div>

<!--Modal Page Code Ends-->


 <!--Commercial Search Starts-->
   <section hidden="" class="homelist_bg">
      <div class="container-fluid wrap-container pt-2 pb-2">
         <div class="row">
            <div class="col-md-10 bg-white radius p-0">
               <form name="form4" action="<?=base_url()?>propertylist/index" method="GET" id="propertylistForm1">
               <div class="d-flex bg-white radius">
                  <!-- input serach Bar -->
                  <input type="text" placeholder="City,Neighbourhood or MLS Number" name="searchCom" id="searchCom" class="form-control ale-izba_placeholder" value="<?php if(isset($_GET['searchCom'])){ echo $_GET['searchCom'];}?>" >
                  <!-- end -->
                  <!-- min-price -->
                  <div class="p-2 ">
                     <select data-placeholder="Min Price" class="chosen-select form-control" name="minPriceCom" tabindex="2 ">
                        <option value=""></option>
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
                  <!-- end -->
                  <!-- unlimited -->
                  <div class="p-2 ">
                     <select data-placeholder="Max Price" class="chosen-select form-control" name="maxPriceCom" tabindex="2 ">
                        <option value=""></option>

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
                  <!-- end -->
                  <!-- Bed -->
                  <div class="p-2 ">
                     <select data-placeholder="Building Size" class="chosen-select form-control" name="buildingSizeCom" tabindex="2 ">
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
                  <div class="p-2 ">
                     <select data-placeholder="Land Size" class="chosen-select form-control" name="landCom" tabindex="2 ">
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
                  <!-- search button  -->
                  <div class="p-2">
                     <button style="border: 0px solid;" type="submit" class="searchAleForm" ><i class="fa fa-search" aria-hidden="true"></i></button>
                  </div>
               </div>
            </div>
          </form>
            <!--Form Close Tag-->
            <div class=" col-md-2  list-home ">

               <!-- <a href="" class="btn bannerBtn3 pull-right " id="myBtn">Filter <i class="fa fa-filter" aria-hidden="true"></i></a> -->

               <button type="button" class="btn bannerBtn3 pull-right" id="filterBtn">Filter<i class="fa fa-filter" aria-hidden="true"></i></button>

              
            </div>
         </div>
      </div>
   </section>
   <!--Commercial Search Ends-->



   <!--Result Section Start-->
   <section>
      <div class="container-fluid wrap-container">
         <div class="row mt-4">
            <div class="col-md-4 aleHeading">
               <h5>Results: <?php 

               echo (isset($property_list['number_list']) ? $property_list['number_list'] : '0');
                ;
               ?> Listings</h5>
               <span class="sort mt-2">
                  <h6>Sort By</h6>
               </span>
               <span>
                  <select data-placeholder="" class="form-control listingBox" name="PropertySortBy" id="PropertySortBy" tabindex="2">
                     <option value="" hidden=""></option>
                     <option value="AscPrice">Price (low to high)</option>
                     <option value="DescPrice">Price (high to low)</option>
                     <option value="DescDate">Date Posted (new to old)</option>
                     <option value="AscDate">Date Posted (old to new)</option>
                  </select>
               </span>
            </div>
            <div class="col-md-6 text-center  ">
               <div class="section-title text-center mb-0">
                  <h1><?php echo (isset($typename) && $typename !=='')?(@$typename.' in '.@$communityname):'Al-eizba Real Estate Listings';?></h1>
               </div>
            </div>
            <div hidden="" class="col-md-4 ">
               <div class="ml-55 switch_btn pull-right mt-1">
                  <label class="switch">
                  <input type="checkbox" checked>
                  <span class="slider round"></span></label>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Result Section Start-->
   <!--Property Result Section Start-->
   <section>
      <div class="container-fluid wrap-container">
      <div class="row">
      <?php $i = 1; 
      if (isset($property_list['result'])) {

        $property_lists=$property_list['result'];


         /*print_r($property_lists);*/
        foreach ($property_lists as $value){
         
         // echo "<pre>";
         
         // print_r($property_lists);
         // echo "</pre>";
           // var_dump($value->image);
         
         
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


          $ttitle = strtolower($value->EnTitle); 
          $ttitle = str_replace('(', '', $ttitle); 
          $ttitle = str_replace(')', '', $ttitle); 
          $ttitle = str_replace(' ', '-', $ttitle);
          $ttitle = str_replace(',', '', $ttitle);
         
         ?>
      <div class="col-md-3 col-xs-12 mainDiv mt-4">
         <!-- <a href="<?php echo base_url();?>propertydetails/get_details/<?=base64_encode($value->id)?>/<?=$ttitle?>" class="propertyDetails"> -->
          <div class="AleBoxes">
          <a href="<?php echo base_url();?>propertydetails/<?=($value->slug_url)?>" class="propertyDetails">
            
               <?php
                  if(isset($thumb) and  $thumb!=='')
                  {
                  ?>
               <img style="height: 205px; width: 450px;" src="<?php echo base_url();?>uploads/property/<?=$thumb?>" class="img-fluid">
               <?php
                  }else
                  {
                      ?>
               <img style="height: 205px; width: 450px;" src="<?php echo base_url();?>uploads/property/601a4a47beef8.jpg" class="img-fluid">
               <?php
                  }
                  
                  ?>
              <div class="property-cont">
               <h5 class="property-title">
                  <span><strong>AED <?php echo number_format($value->rent); ?></strong></span>
                  <span class="pull-right awsomeAle"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
               </h5>
               <p><?php     echo $new_string =  mb_strimwidth($value->EnTitle.", ".$value->location, 0, 45, "..");
 /*echo "$value->EnTitle"; echo "$value->location"*/?></p>
               <div class="d-flex mt-3 text-center">
                  <span class="ale_faci">&nbsp;<?php echo "$value->beds"; ?> <i class="fa fa-bed" aria-hidden="true"></i><br>
                  <span class="ale_pop">Bedrooms</span></span>
                  <span class="ale_faci">&nbsp;<?php echo "$value->baths"; ?> <i class="fa fa-bath" aria-hidden="true"></i><br>
                  <span class="ale_pop">Bathrooms</span></span>
                  <!-- <span class="ale_faci ml-5">&nbsp;<?php echo "$value->area"; ?> <i class="fa fa-area-chart" aria-hidden="true"></i></i><br> -->
                  <span class="ale_faci">
                     &nbsp;<i class="fa fa-home" aria-hidden="true"></i><br>
                     <!-- <span class="ale_pop">Area</span></span>  -->  
                     <span class="ale_pop">Condo</span>
                  </span>
               </div>
               <!-- <p class="mt-3"><?php echo "$value->landlord"; ?></p> -->
             </div>
                
           
         </a>

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
      <?php $i++;  }
        
      }
          ?>
   </section>
   <!--Pagination Start-->


   </div>
   </div>
   <!--Pagination End-->      


<section>
   <div class="container-fluid wrap-container"  style="margin-top: 10px;">
      <!-- pagination-->
      <?php echo $this->pagination->create_links(); ?> 
       <?php 
       /*print_r($pagination);*/
        if(isset($pagination['pageScript']) && !empty($pagination['pageScript'])){ ?>
       <div class="row"> 
           <div class="col-sm-12">
               <nav aria-label="Page navigation example">
                 <ul class="pagination">
                   <?php 
                   if(isset($pagination['totalPage']) && ($pagination['currentPageNo'] != 1)){ ?>
                   <li class="page-item" data-page="<?php echo "&page=".($pagination['currentPageNo']-1) ?>" ><a class="page-link" href="javascript:void(0)" >Previous</a></li>
                   <?php } ?>
                   <?php foreach($pagination['pageScript'] as $k=>$v){ ?>
                   <li class="page-item " data-page="<?php echo "&page=".($k) ?>" ><a class="page-link" href="javascript:void(0)"><?php echo $k; ?></a></li>
                   <?php } ?>
                   <?php if(isset($pagination['totalPage']) && $pagination['currentPageNo'] != $pagination['totalPage'] ){ ?>
                   <li class="page-item" data-page="<?php echo "&page=".($pagination['currentPageNo']+1) ?>" ><a class="page-link" href="javascript:void(0)">Next</a></li>
                   <?php } ?>
                 </ul>
               </nav>
           </div>
       </div> 
       <?php } ?>
       <!--// pagination-->
   </div>

   <?php
   $global_search_string = (isset($_GET['search']) && $_GET['search'] !=='') ? $_GET['search'] :'';
   ?>
</section>   

<div class="modal fade" id="PhoneModal" tabindex="-1" role="dialog" aria-labelledby="PhoneModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
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
    <div class="modal-content">
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



<!--Modal Script Start-->

    
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
    <script>
// Get the modal
var modal = document.getElementById("filterModal");

// Get the button that opens the modal
var btn = document.getElementById("filterBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeModal")[0];

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


<!--Datepicker Script Start-->

<!-- <script>
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

 

if("<?=$global_search_string?>")
{
  $.ajax
  ({
   type: 'post',
   url: "<?=base_url()?>alehome/insert_history", 
   data: {search:"<?=$global_search_string?>"},
 });
}
</script>

<!--Pagination-->


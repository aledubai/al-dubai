<!-- form Start here  -->
 <section class="homelist_bg">
  <div class="container-fluid wrap-container pt-2 pb-2">
    <div class="row">
    <div class="col-md-10 bg-white radius p-0">
      <div class="d-flex bg-white radius">


        <!-- input serach Bar -->
  
         <input type="text" placeholder="City,Neighbourhood or MLS Number"  name="search" class="form-control ale-izba_placeholder ">

        
        <!-- end -->


     <!-- min-price -->
        <div class="p-2 ">
          <select data-placeholder="Min Price" class="chosen-select form-control" tabindex="2 ">
            <option value=""></option>
            <option value="">0</option>
            <option value="">25,000</option>
            <option value="">50,000</option>
            <option value="">75,000</option>
            <option value="">100,000</option>
            <option value="">125,000</option>
            <option value="">150,000</option>
            <option value="">175,000</option>
            <option value="">200,000</option>
            <option value="">225,000</option>
            <option value="">250,000</option>
            <option value="">275,000</option>
            <option value="">300,000</option>
          </select>
        </div>
    <!-- end -->

       <!-- unlimited -->
        <div class="p-2 ">
          <select data-placeholder="Unlimited" class="chosen-select form-control" tabindex="2 ">
            <option value=""></option>
            <option value="">Unlimited</option>
            <option value="">75,000</option>
            <option value="">100,000</option>
            <option value="">125,000</option>
            <option value="">150,000</option>
            <option value="">175,000</option>
            <option value="">200,000</option>
            <option value="">225,000</option>
            <option value="">250,000</option>
            <option value="">275,000</option>
            <option value="">300,000</option>
          </select>
        </div>
    <!-- end -->


           <!-- Bed -->
        <div class="p-2 ">
          <select data-placeholder="Beds" class="chosen-select form-control" tabindex="2 ">
            <option value=""></option>
            <option value="">Beds</option>
            <option value="">1</option>
            <option value="">1+</option>
            <option value="">2</option>
            <option value="">2+</option>
            <option value="">3</option>
            <option value="">3+</option>
            <option value="">4</option>
            <option value="">4+</option>
            <option value="">5</option>
            <option value="">5+</option>
            
          </select>
        </div>
    <!-- end -->

          <!-- Bath -->
        <div class="p-2 ">
          <select data-placeholder="Baths" class="chosen-select form-control" tabindex="2 ">
            <option value=""></option>
            <option value="">Baths</option>
            <option value="">1</option>
            <option value="">1+</option>
            <option value="">2</option>
            <option value="">2+</option>
            <option value="">3</option>
            <option value="">3+</option>
            <option value="">4</option>
            <option value="">4+</option>
            <option value="">5</option>
            <option value="">5+</option>
          </select>
        </div>
        <!-- end -->
     
      <!-- search button  -->
      <div class="p-2">
         <a href="#" class="searchAleForm "><i class="fa fa-search" aria-hidden="true"></i></a>
        </div>
       </div>
      </div>

      <div class=" col-md-2  list-home ">
       <a href="<?php echo base_url();?>" class="btn bannerBtn3 pull-right ">Filter <i class="fa fa-filter" aria-hidden="true"></i></a>
      </div>
     </div>
    </div>
   </section>



  <section>
   <div class="container-fluid wrap-container">
   	<div class="row mt-4">
     <div class="col-md-4 aleHeading">
      <h5>Results: 129,006 Listings</h5>
       <span class="sort mt-2"><h6>Sort By</h6></span>
        <span>  
        	<select data-placeholder="" class="form-control listingBox" tabindex="2">
            <option value="">Date Posted (new to old)</option>
            <option value="">Date Posted (new to old)</option>
            <option value="">Date Posted (old to new)</option>
            <option value="">Price (low to high)</option>
            <option value="">Price (high to low)</option> 
            </select>
	   </span>
	  </div>

 
     <div class="col-md-4 text-center  ">
      <div class="section-title text-center mb-0">
     <h3>Ale-Izba Real Estate Listings</h3>
    </div>
   </div>



	     <div class="col-md-4 ">
          <div class="ml-55 switch_btn pull-right mt-1">
           <label class="switch">
            <input type="checkbox" checked>
           <span class="slider round"></span></label>
          </div>
	     </div>
	   	</div>
	   </div>
	  </section>

   
      <section>
       <div class="container-fluid wrap-container"> 	
        <div class="row">
         <?php $i = 1; while($i <= 12){ ?> 
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
     <?php $i++; } ?>
   </div>
 </div>
 
    </section>



      	 


	
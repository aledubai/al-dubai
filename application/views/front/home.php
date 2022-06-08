 
<!---------------- layout-1  ------------------->

<section>
  <div class="container wrap-container ">
   <div class="row">
    <div class="col-md-4 p-0">

<form class="example" action="" style="margin:auto;max-width:90%s">
  <input type="text" placeholder="Search.." name="search2" class="form-control my_search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>

<div class="col-md-2 fl-right mt-1">
<form>
  <select name="cars" id="cars" class="form-control tag_control">
    <option value="volvo">Agent Listing</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>

</form>
</div>
<div class="col-md-2 fl-right mt-1">
<form>
  <select name="cars" id="cars" class="form-control tag_control">
    <option value="volvo">Any Price</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>

</form>
</div>


<div class="col-md-2 fl-right mt-1">
<form>
  <select name="cars" id="cars" class="form-control tag_control">
    <option value="volvo">All Beds</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>

</form>
</div>

<div class="col-md-2 fl-right mt-1">
<form>
  <select name="cars" id="cars" class="form-control tag_control">
    <option value="volvo">More</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>

</form>
</div>
</div>
</div>
</div>
</section>

<section class="form-bg mt-4">
  <div class="container wrap-container">
    <div class="row">
      <div class="col-md-12 p-0">
        <div class="row mt-3">
          <div class="col-md-2 fl-right ">
          <form>
            <label class="my_label">Purpose</label>
            <select name="cars" id="cars" class="form-control tag_control new_control">
              <option value="volvo">Buy</option>
              <option value="saab">Rent</option>
   
            </select>
          </form>
          </div>

           <div class="col-sm-4">
           <form>
             <label class="my_label">location</label>
            <input type="text" id="fname" name="fname" placeholder="" class="form-control new_control tag-control">
           </form>
           </div>


         <div class="col-md-3 fl-right">
            <label class="my_label">property type</label>
              <select name="cars" id="cars" class="form-control tag_control new_control">
              <option value="volvo">Residential</option>
              <option value="saab">Rent</option>
   
            </select>
            </div> 

              <div class="col-md-3 fl-right">
            <label class="my_label"> Price (AED)</label>
              <select name="cars" id="cars" class="form-control tag_control new_control">
              <option value="volvo">0</option>
              <option value="saab">Rent</option>
   
            </select>
            </div>
          </div>
        </div>
      </div>

       <div class="row mt-4 pb-4">
      <div class="col-md-12 p-0">
        <div class="row">
          <div class="col-md-2 fl-right ">
          <form>
            <label class="my_label">beds</label>
            <select name="cars" id="cars" class="form-control tag_control new_control">
              <option value="volvo">All</option>
              <option value="saab">Rent</option>
   
            </select>
          </form>
          </div>

           <div class="col-sm-2">
           <form>
             <label class="my_label">AREA (SQFT)</label>
              <select name="cars" id="cars" class="form-control tag_control new_control">
              <option value="volvo">0</option>
              <option value="saab">Rent</option>
      
           </select>
           </form>
           </div>
          <div class="col-sm-1">
           <form>
             <label class="my_label">bath</label>
              <select name="cars" id="cars" class="form-control tag_control new_control">
              <option value="volvo">All</option>
              <option value="saab">Rent</option>
      
           </select>
           </form>
           </div>


         <div class="col-md-3 fl-right">
              <form>
             <label class="my_label">Keywords</label>
            <input type="text" id="fname" name="fname" placeholder="" class="form-control new_control tag-control">
           </form>
            </div> 

              <div class="col-md-2 fl-right">
              <form>
             <label class="my_label">agency</label>
            <input type="text" id="fname" name="fname" placeholder="" class="form-control new_control tag-control">
           </form>
            </div>


            <div class="col-md-2 fl-right">

             <a href="#" class="btn save_btn"><i class="fa fa-star"></i> Save Search</a>
            </div>
          </div>
        </div>
      </div>
     </div>

</section>



<!-- ---------------------------layout-1-end--------------------------- -->


<section>
<div class="container wrap-container mt-5">
  <div class="row">
   <div class="col-md-8">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb my-breadcrumb p-0">
    <li class="breadcrumb-item"><a href="#" class="tag">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dubai</li>
  </ol>
 </nav>
    <h5 class="pro_heading mt-2"><strong>Properties for sale in UAE</strong></h5>

   </div>
  </div>

 <div class="row">
  <div class="col-md-8">
   <div id="btnContainer">
    <button class="btn fl-right btnChange grid_button"  data-target="grid"  ><i class="fa fa-th-large"></i></button> 
    <button class="btn active fl-right btnChange  list_button" data-target="list" ><i class="fa fa-bars"></i></button>
 </div>


<br>

<div class="row mt-5">
  <?php $i = 1; while($i <= 6){ ?>
  <!-- list start start here  -->
  <div class="col-sm-12 mb-3 listMainCon">
    <div class="row p-3"> 
       <div class="col-sm-5 p-0 listImgCon">   
        <div class="main_roll">
         <img src="<?php echo base_url();?>assets/images/flat_1.jpg" class="img-fluid">
         </div>
        </div>
        <div class="col-sm-7 p-0 content_area listContentCon">
          <div class="ml-4 all_set">
              <h3><strong><span class="my_aed">AED</span> 837,000</strong></h3>
              <p>Scale Tower, Business Bay, Dubai</p>
              <p>Apartment</p>
              <a href="#" class="place">Burj khalifa View | Canal View | Creek View</a>
              <div class="facility mt-3">
              <span class="facility_icon"><i class="fa fa-bed" aria-hidden="true"></i>&nbsp;1</span>
              <span class="facility_icon ml-5"><i class="fa fa-bath" aria-hidden="true"></i>&nbsp;2</span>
              <span class="facility_icon ml-5"><i class="fa fa-th-large" aria-hidden="true"></i>&nbsp;965sq ft</span>
              <br>
              <div class="mt-4">


   <!-- call btn start here -->

<div class="btn call_btn" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Call</div>

<div id="id01" class="modal">

  <form class="modal-content">
    <div class="modal_container">
      <div class="row">
      <div class="col-sm-12 text-center">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
        <h4><strong>Contact Us</strong></h4>


        <div class="modal_query text-center">
        <div class="row">
        <div class="col-sm-3 mt-3">
        <span class="fl-left modal_adv"><i class="fa fa-phone" aria-hidden="true"></i></span>
        </div>

         <div class="col-sm-9 mt-3 ">
         <a href="#"class="fl-left ml-4" style="font-size:20px;">+123456789</a>


            </div>
          </div>  <!-- row -->

        <div class="row row_border">
        <div class="col-sm-12 mt-3">
        <p class=" text-center quote_wp">Please quote property reference</p>
        <p class="quote_wp"><strong>Realestate - 362-Ap-R-1731</strong></p>
        <p class="text-center">when calling us.</p>
           
           </div>
          </div> <!-- row -->
         </div>
       </div>
     </div>
    </div>
  </form>
</div>

<div class="btn call_btn ml-3" onclick="document.getElementById('id02').style.display='block'"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Mail</div>

  <div id="id02" class="modal">
  <form class="modal-content">
    <div class="modal_container">
      <div class="row">
      <div class="col-sm-12 text-center">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
        <h4><strong>Contact Agent</strong></h4>

        <div class="modal_query text-center">
         <div class="row">
          <div class="col-sm-12 mt-2 text-center">
           <img src="<?php echo base_url();?>assets/images/mail-better.jpg" class="img-fluid" alt="">
            <p>Betterhomes propertise</p>
            <p class="mb-0 dubai_rera">RERA# 12065</p>
            <p class="mb-0 dubai_rera">DED# 684748</p>
            <p class="mb-0 dubai_rera">Permit# 7116820900</p>
            <p><strong>Agent:</strong>&nbsp;Gareth Davies</p>
            <p>Ale-izba - mccone-1898419</p>

            <form>         
            <input type="tel" id="phone" name="phone" placeholder="NAME*" class="form-control agent_con"><br>           
            <input type="tel" id="phone" name="phone" placeholder="EMAIL*" class="form-control agent_con"><br>
            
            <input type="tel" id="phone" name="phone" placeholder="PHONE*" class="form-control agent_con"><br>
            <textarea placeholder="I would like to inquire about your property Bayut - ID87463486. Please contact me at your earliest convenience." class="form-control agent_con"></textarea><br>
             <div class="cus_check text-left">
              <input type="checkbox" name="" value="" checked>
             <label>Keep me informed about similar properties.</label>
           </div>
           <div class="fl-left text-left">
            <a href="#" class="btn call_min_btn">
            <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Call</a>
          </div>
             <div class="">
            <a href="#" class="btn mail_min_btn fl-right">&nbsp;send mail</a>
          </div>
            </form>
   


        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </form>
        </div>



        </div>
        </div>
        </div> 
        </div><!--// col-6-->
        </div><!--// end sub row-->
        </div><!--end col-12-->  

  <?php $i++; } ?>

 
 </div>
   </div>



   <!-- right side section start here -->

   <div class="col-md-4">
    <div class="right_br">
    <div class="ale_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462562.84786846966!2d54.9475529501834!3d25.07570732815455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1610982289918!5m2!1sen!2sin" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
    <div class="right_panel text-center mt-5">
     <p>Be the first to hear about new properties</p>
      <a href= "" class="btn btn_bell"><i class="fa fa-bell" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Alert me of new properties</a>

   </div>

    <div class="ale_details">
      <a href="#">
      <img src="<?php echo base_url();?>assets/images/ale_details.jpg" class="img-fluid">
      <div class="axe">
      <h5><strong>Dubai Marina</strong></h5>
       <p>See the community<br>attractions and lifestyle</p>
     </div>
    </a>
    </div>

    <div class="short_links mt-4">
      <h6><strong>Apartment types</strong></h6>

      <ul class="list-style p-0 alex_app">
      <li><a href="#">1 bedroom apartments for Sale in Dubai Marina</a></li>    
      <li><a href="#">2 bedroom apartments for Sale in Dubai Marina</a></li>    
      <li><a href="#">3 bedroom apartments for Sale in Dubai Marina</a></li>    
      <li><a href="#">4 bedroom apartments for Sale in Dubai Marina</a></li>    
    
      </ul>
    </div>


    <div class="short_links mt-4">
      <h6><strong>Near Dubai Marina</strong></h6>

      <ul class="list-style p-0 alex_app">
      <li><a href="#">Apartments for sale in Jumeirah Lake Towers (JLT)</a></li>    
      <li><a href="#">Apartments for sale in Jumeirah Beach Residence (JBR)</a></li>    
      <li><a href="#">Apartments for sale in Discovery Gardens</a></li>    
      <li><a href="#">Apartments for sale in Palm Jumeirah</a></li>    
      <li><a href="#">Apartments for sale in The Views</a></li>    
    
      </ul>
    </div>
   </div>
 </div>
   <!-- end -->
  </div>
 </div>
</section>

<!----------------------------- end ------------------------------>

<!--- list and grid js --->

<script type="text/javascript">
  $(document).ready(function(){
    $(".btnChange").click(function(){
      var target = $(this).attr("data-target");
      if(target  == 'grid' ){
        $(".listMainCon").removeClass('col-sm-12').addClass('col-sm-6');
        $(".listImgCon").removeClass('col-sm-5').addClass('col-sm-12');
        $(".listContentCon").removeClass('col-sm-7').addClass('col-sm-12');
      }
      if(target  == 'list' ){
        $(".listMainCon").removeClass('col-sm-6').addClass('col-sm-12');
        $(".listImgCon").removeClass('col-sm-12').addClass('col-sm-5');
        $(".listContentCon").removeClass('col-sm-12').addClass('col-sm-7');
      }
    });
  });
</script>

<!------ end ------>




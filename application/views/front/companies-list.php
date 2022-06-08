 

<section>
	<div class="container my_quel wrap-container">
     <div class="row">
      <div class="col-md-12  text-center my-bom">
        <h1><strong>Featured Agencies</strong></h1>
     
       </div>
      </div>

     <div class="row">
      <div class="col-md-8 col-xs-12 text-center">
        <div class="row">

          <?php

          if(!empty($agency_profile))
          {
            foreach ($agency_profile as $key => $value) {

              
               ?>
                <div class="col-md-4 col-xs-12">
                  <div class="companies_border p-2" >
                   <a href="<?php echo base_url('companies/'.$value->slug_url.'/'.base64_encode($value->user_id))?>">
                     <img src="<?php echo base_url();?>uploads/vendor/<?php echo @$value->image;?>" style="width: 100%;" alt="">
                   </a>
                    </div>
                    <br>
                    <h6>
                      <?php echo @$value->ProfileName;?>
                    </h6>
                </div>
               <?php
            }
          }

          ?>
          
          
        </div>
        
        
      </div>
    </div>
 
       <br>
      </div>
     </div>
    </div>
</section>  
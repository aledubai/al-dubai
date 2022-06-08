 
<section>
	<div class="container my_quel wrap-container">
     <div class="row">
      <div class="col-md-12  text-center my-bom">
        <h1><strong><?php echo @$company_data->ProfileName;?></strong></h1>
     
       </div>
      </div>

     <div class="row">
      <div class="col-md-12 col-xs-12 text-center">
        <div class="row">
          <div class="col-md-3 col-xs-12">
            <div class="companies_border  p-2">
              <img src="<?php echo base_url();?>uploads/vendor/<?php echo @$company_data->image;?>" style="width: 100%;" class="img-fluid" alt="">
              </div>
          </div>
          <div class="col-md-9 col-xs-12">
            <div class="table-responsive">
              <table class="table border" >
                 <!-- <tr>
                    <td>Agents:</td>
                    <td></td>
                  </tr>
                  -->
                  <tr>
                    <td>Properties:</td>
                    <td><?php echo @count($company_property_data);?></td>
                  </tr>
                  <tr>
                    <td>Services&nbsp;Areas: </td>
                    <td style="text-align: justify;"><?php echo @$company_data->ServiceArea;?></td>
                  </tr>
                  <!--<tr>
                    <td>Property&nbsp;Types:</td>
                    <td></td>
                    
                  </tr>
                  <tr>
                    <td>Properties&nbsp;for:</td>
                    <td></td>
                  </tr>-->
              </table>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12 text-left">
            <h4>Description</h4>
            <p><?php echo @$company_data->ProfileAboutMeEn;?></p>
          </div>
        </div>
        
        
      </div>
      

   </div>
  <div class="row ">
         <!-- START -->
         <?php
          if(isset($company_property_data) && !empty($company_property_data))
          {
            foreach($company_property_data as   $value)
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
                

            $ttitle = strtolower($value->EnTitle); 
            $ttitle = str_replace('(', '', $ttitle); 
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
                     <div class="property-cont" >
                  <h3 class="mt-4">
                     <span><strong>AED  <?php echo number_format($value->rent); ?></strong></span>
                     <span class="pull-right awsomeAle"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                  </h3>
                  <p>&nbsp;<?=substr($value->EnTitle, 0, 40) ?></p>
                  <div class="d-flex mt-3 text-center">
                     <span class="ale_faci">&nbsp;<?php echo  $value->beds; ?>&nbsp;&nbsp;<i class="fa fa-bed" aria-hidden="true"></i><br>
                     <span class="ale_pop">Bedrooms</span></span>
                     <span class="ale_faci ">&nbsp;<?php echo $value->baths; ?>&nbsp;&nbsp;<i class="fa fa-bath" aria-hidden="true"></i><br>
                     <span class="ale_pop">Bathrooms</span></span>
                     <span class="ale_faci  ">&nbsp;&nbsp;&nbsp;<i class="fa fa-home" aria-hidden="true"></i><br>
                     <span class="ale_pop">Condo</span></span>   
                  </div>

                  <p class="mt-3"><?php echo $value->landlord; ?></p>
                   </div>
               </div>
            </a>
         </div>
         <?php 
            }
          }else
          {
            ?>
              <p> No Record Found..</p>
            <?php
          }
            
            ?>
         <!-- END -->

      </div>
       <br>
      </div>
     </div>
    </div>
</section>  
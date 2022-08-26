 <?php
      $salutiaon = '';
      $vendor_name = '';
         
         $company_detail  ='';




      if(isset($company_details->ProfileName) && $company_details->ProfileName !=='')
        {  
            $company_detail="<a href='".base_url()."companies/".$company_details->slug_url."/".base64_encode($company_details->user_id)."'>";
            $company_detail.="<img   src='".base_url()."uploads/vendor/".@$company_details->image."'   >";
             $company_detail.="</a>";
            $vendor_name = $company_details->ProfileName;
      }

      if(isset($property_landlord->Salutation) && $property_landlord->Salutation>0)
      {
          
          $salutiaon  = $SalutaionList[$property_landlord->Salutation];
      }
      
      $fullname = $salutiaon." ".$property_landlord->FullName; 

      ?>
           


  
   <!-- <?=$company_detail;?> -->
   <div class="agent-img-detail">
     <?=$company_detail;?>
   </div>
 
<?php
 
   if(strlen($vendor_name) >0)
   {
      ?>
<div class="mt-1 text-center">
   
   <p class="mb-0 text-center">&nbsp;&nbsp;Vendor:<strong>&nbsp;<?=$vendor_name;?></strong></p>
</div>
      <?php
   }
?>
  
<?php
 
   if(strlen($fullname) >2)
   {
      ?>
<div class="mt-1 text-center">
   
   <p class="mb-0 text-center">&nbsp;&nbsp;AGENT NAME:<strong>&nbsp;<?=$fullname;?></strong></p>
</div>
      <?php
   }
?>


<div class="view-property-btn">
   <a href="<?php echo base_url();?>propertylist" class="text-success">
      <button type="button" class="btn btn-default btn-xs">VIEW ALL PROPERTIES</button>     
   </a>
</div>
<hr class="mt-2" >
<div class="text-dark details-form">
   <div class="row">
      <div class="col-sm-12">
         <span class="error_message" ></span>
      </div>
   </div>
 
   <span>Contact Agent for more information.</span>
   <form class="form-horizontal" method="post" id="<?=$formid?>" >
      <div class="form-group form-bottom">
         <input type="text" class="form-control form-control-sm contact_name" name="contact_name" placeholder="Full Name" required="required" autocomplete="off">
      </div>
      <div class="form-group form-bottom">
         <input type="email" class="form-control form-control-sm contact_email" name="contact_email" placeholder="Email" required="required" autocomplete="off">
      </div>
      <div class="form-group form-bottom">
         <input type="text" class="form-control form-control-sm contact_mobile"  name="contact_mobile" placeholder="Mobile" maxlength="10" required="required" autocomplete="off">
      </div>
      <div class="form-group form-bottom">
         <input type="hidden" name="landlord_id"   value="<?php echo $property_landlord->id?>"> 
         <input type="hidden" name="property_id" value="<?php echo $property->id?>">
         <textarea class="form-control form-control-sm contact_message" name="contact_message" placeholder="Message" rows="4" autocomplete="off"><?php echo $message;?></textarea>
      </div>
      <div class="form-check mb-1">
         
         <label class="form-check-label" >
            <input type="checkbox" class="form-check-input"  name="keep_me_inform" value="1"> Keep me informed about similar properties.</label>
      </div>
      <div class="form-group form-bottom">
         <?php 
            if(isset($property_landlord->Mobile) && $property_landlord->Mobile !=='')
            {
              ?>
         <a href="tel:<?=$property_landlord->Mobile?>" onclick="show_number('<?=$formid?>','<?=$property_landlord->Mobile?>')" class="btn btn-info btn-sm btn-block mt-2 call_action<?=$formid?>" name="call_action<?=$formid?>" ><i class="fa fa-phone " aria-hidden="true"></i>&nbsp;<span class="call_trigger<?=$formid?>">Call<span></a>
         <?php
            }
            ?>
         <button type="submit" class="btn btn-info  btn-sm btn-block  mt-2" value="submit<?=$formid?>">Send Email</button>
      </div>
   </form>
</div>

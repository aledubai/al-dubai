 
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
                    <span class="ale_faci">&nbsp;0&nbsp;&nbsp;<i class="fa fa-product-hunt" aria-hidden="true"></i><br>
                            <span class="ale_pop">Parking</span>
                        </span>  
                  </div>

                  <p class="mt-3"><?php echo $value->landlord; ?></p>
                   </div>
               
            </a>
              <div class="row m-2 mb-3">
                    <div class="col-12 feature-box">
                      <div class="col-6 butns">  
                      <button type="button contact-by-call" data-toggle="modal" data-target="#PhoneModal" data-userid="<?php echo $value->id;?>"  data-phone="<?php echo $value->comp_phone;?>"  data-mobile="<?php echo $value->comp_mobile;?>" data-email="<?php echo $value->comp_email;?>" class="btn btn-primary btn-sm home_meet_btn m-0 btn-block"> <i class="fa fa-phone" aria-hidden="true"></i> Call</button>
                      </div>

                       <div class="col-6 butns">
                      <button type="button contact-by-email" data-toggle="modal" data-target="#emailModal"  data-userid="<?php echo $value->id;?>"  data-phone="<?php echo $value->comp_phone;?>"  data-mobile="<?php echo $value->comp_mobile;?>" data-email="<?php echo $value->comp_email;?>"  data-landlord_id="<?php echo $value->landlord_id;?>"  data-comp_name="<?php echo $value->comp_name;?>"  data-comp_img="<?php echo base_url().'uploads/vendor/'.$value->comp_profile;?>" data-comp_url="<?php echo base_url()."companies/".$value->comp_url."/".base64_encode($value->comp_userid);?>" class="btn btn-secondary btn-sm home_meet_btn m-0 btn-block"> <i class="fa fa-envelope" aria-hidden="true"></i> E-Mail</button>  
                   </div>
                     
                      </div>
                      <!-- <div class="col-sm-4">
                        <a href="<?php echo base_url()."companies/".$value->comp_url."/".base64_encode($value->comp_userid);?>">
                          <img src="<?php echo base_url().'uploads/vendor/'.$value->comp_profile;?>"  style="max-width: 50px;background: unset;max-height: 50px;">
                        </a>
                       
                      </div> -->
                  </div>
            </div>
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

<div class="modal fade" id="PhoneModal" tabindex="-1" role="dialog" aria-labelledby="PhoneModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content agent-modal" style="width: 100%;">
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
  <div class="modal-dialog" role="document"  >
    <div class="modal-content" style="width: 100%;">
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
           var phone =  button.data("phone").toString();
           var mobile =  button.data("mobile").toString();
           console.log(userid,phone,mobile);
      var html_content= '<table class="table ">';

      var html_content= html_content+'';  
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
      
      
      if(phone.length >0 || mobile.length >0)
      {

      }else
      {
          var html_content= html_content+'<tr> <td>Not Found</td></tr>'; 

      }
      var html_content= html_content+'</table>';
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
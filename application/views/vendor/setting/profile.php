<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
   .btn-rc
   {
   color: #fff;
   background-color: #33be8b;
   border-color: #33be8b;
   }
   .btn-rc:hover
   {
   color: #fff;
   background-color: #278e68;
   border-color: #278e68;
   }
   .attach_btn
   {
   color: green;
   background: #ffffff;
   border-color:  green;
   }
   .attach_btn:hover
   {
   color: green;
   background: #ffffff !important;
   border-color:  green;
   }
   .custom-file-input::-webkit-file-upload-button
   {
   visibility: hidden;
   width: 120px;
   display: inline-block;
   }
   .custom-file-input::before
   {
   content: 'Choose Image';
   display: inline-block;
   border: 1px solid #999;
   border-radius: 3px;
   padding: 5px 8px;
   outline: none;
   white-space: nowrap;
   -webkit-user-select: none;
   cursor: pointer;
   font-weight: 400;
   background-color: #33be8b !important;
   color: #fff ;
   }
</style>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         <i class="fa fa-user" aria-hidden="true"></i> Company Profile
      </h1>
   </section>
   <!-- main-container-->
   <section class="content">
      <div class="box">
         <!-- Content Starts Now-->
         <!-- First Column Starts-->
         <div class="box-body">
            <form action="<?=base_url()?>vendor/setting/add_setting_profile" method="POST" id="settingProfile"  enctype="multipart/form-data" >
               <div class="row">
                  <div class="col-sm-12">
                     <!-- Flashdata Code-->
                     <?php
                        $this->load->helper('form');
                        $error = $this->session->flashdata('error');
                        if($error)
                        {
                        ?>
                     <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('error'); ?>                    
                     </div>
                     <?php } ?>
                     <?php  
                        $success = $this->session->flashdata('success');
                        if($success)
                        {
                        ?>
                     <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('success'); ?>
                     </div>
                     <?php } ?>
                     <!-- Flashdata Code Ends-->
                     <?php
                        /*print_r($profile_data);*/
                        
                        
                        ?>
                  </div>
                  <div class="col-sm-6">
                     <?php
                        if(!empty($profile_data))
                        {
                        
                        
                            ?>
                     <input type="hidden" readonly class="form-control input-sm" name="settingProfileID" id="settingProfileID"  value="<?php echo @$profile_data->id;?>">
                     <?php
                        }
                        ?>
                     <input type="hidden" readonly name="user_id" id="user_id"   value="<?php echo @$this->session->userdata ( 'userId' );?>">
                     <h4 style="margin-left: 10px;"><b>BASIC INFORMATION</b></h4>
                     <div class="box-body">
                        <div class="form-group">
                           <div class="row">
                              <label for="ProfileEmail" class="col-sm-3 control-label">Email:<span class="text-danger">*</span></label>
                              <div class="col-sm-9">
                                 <input type="email" class="form-control input-sm" name="ProfileEmail" id="ProfileEmail" required   value="<?php echo @$profile_data->ProfileEmail;?>" style="text-transform: lowercase;">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <label for="ProfileName" class="col-sm-3 control-label">Name:<span class="text-danger">*</span></label>
                              <div class="col-sm-9">
                                 <input type="text" class="form-control input-sm" name="ProfileName" id="ProfileName" required="required" value="<?php echo @$profile_data->ProfileName;?>">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <label for="ProfileName" class="col-sm-3 control-label">Slug:<span class="text-danger">*</span></label>
                              <div class="col-sm-9">
                                <span id="msg_slug"></span>
                                <input type="text" class="form-control input-sm" name="slug_url" id="slug_url" readonly value="<?php echo @$profile_data->slug_url;?>">
                                <span class="text-danger" onclick="change_slug_btn()">Change</span>
                            </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <label for="ProfileBRN" class="col-sm-3 control-label">BRN:</label>
                              <div class="col-sm-9">
                                 <input type="text" class="form-control input-sm" name="ProfileBRN" id="ProfileBRN" value="<?php echo @$profile_data->ProfileBRN;?>">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <label for="ProfileNameAr" class="col-sm-3 control-label">Name In Arabic:</label>
                              <div class="col-sm-9">
                                 <input type="text" class="form-control input-sm" name="ProfileNameAr" id="ProfileNameAr" value="<?php echo @$profile_data->ProfileNameAr;?>">
                              </div>
                           </div>
                        </div>
                        <!-- CkEditor New Code-->
                        <div class="form-group">
                           <div class="row">
                              <label for="ProfileAboutMe" class="col-sm-3 control-label">Description:</label>
                              <div class="col-sm-9">
                                 <div class="btn-group pull-left">
                                    <input type="button" name="BtnLanguageAr" id="BtnLanguageAr"  class="btn btn-sm btn-xs " value="AR"   />
                                    <input   type="button"  name="BtnLanguageEn" id="BtnLanguageEn" class="btn btn-rc btn-sm btn-xs " value="EN" />
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- CkEditor New Body Code-->
                        <div class="form-group">
                           <div class="row">
                              <div class="col-sm-9 pull-right">
                                 <div id="EnLanguage">
                                    <textarea id="ProfileAboutMeEn" name="ProfileAboutMeEn"><?php echo @$profile_data->ProfileAboutMeEn;?></textarea> 
                                 </div>
                                 <div id="ArLanguage" style="display: none;">
                                    <textarea  id="ProfileAboutMeAr" name="ProfileAboutMeAr"><?php echo @$profile_data->ProfileAboutMeAr;?></textarea>  
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Second Column Starts-->
                  <div class="col-sm-6">
                     <h4 style="margin-left: 10px;"><b>POSTAL INFORMATION</b></h4>
                     <div class="box-body">
                        <div class="form-group">
                           <div class="row">
                              <label for="ProfileZipCode" class="col-sm-3 control-label">Service Area <span class="text-danger">*</span> </label>
                              <div class="col-sm-9">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <textarea  Title="ServiceArea" class="form-control" required name="ServiceArea" id='ServiceArea' class="form-control input-sm"><?php echo @$profile_data->ServiceArea;?></textarea> 
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <label for="ProfilePrimaryNo" class="col-sm-3 control-label">Phone Number  <span class="text-danger">*</span> <i class="fa fa-question-circle" aria-hidden="true"></i> </label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control input-sm" name="phone_numbr" id="phone_numbr"  value="<?php echo @$profile_data->phone_numbr;?>">
                                     
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <label for="ProfileSecondaryNo" class="col-sm-3 control-label">Mobile Number <span class="text-danger">*</span></label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control input-sm" name="mobile_number" id="mobile_number"  value="<?php echo @$profile_data->mobile_number;?>">
                            </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <label for="ProfileFax" class="col-sm-3 control-label">Fax:</label>
                              <div class="col-sm-9">
                                 <div class="row">
                                    <div class="col-sm-3">
                                       <input type="text" class="form-control input-sm" name="ProfileFaxFirst" id="ProfileFaxFirst" value="<?php echo @$profile_data->ProfileFaxFirst;?>" >
                                    </div>
                                    <div class="col-sm-3">
                                       <input type="text" class="form-control input-sm" name=" ProfileFaxSecond" id="  ProfileFaxSecond" value="<?php echo @$profile_data->ProfileFaxSecond;?>" >
                                    </div>
                                    <div class="col-sm-6">
                                       <input type="text" class="form-control input-sm" name="ProfileFaxThird" id=" ProfileFaxThird"  value="<?php echo @$profile_data->ProfileFaxThird;?>" >
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <label for="ProfileZipCode" class="col-sm-3 control-label">Zip Code:</label>
                              <div class="col-sm-9">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <input type="text" class="form-control input-sm" name="ProfileZipCode" id="ProfileZipCode" value="<?php echo @$profile_data->ProfileZipCode;?>"  >
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <label for="ProfileAddress" class="col-sm-3 control-label">Address:</label>
                              <div class="col-sm-9">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <textarea  Title="Address" class="form-control" name="ProfileAddress" id='ProfileAddress' class="form-control input-sm"><?php echo @$profile_data->ProfileAddress;?></textarea> 
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <label for="ProfileCountry" class="col-sm-3 control-label">Country:<span class="text-danger">*</span></label>
                              <div class="col-sm-9">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <select class="form-control input-sm"  name="ProfileCountry" id="ProfileCountry" required >
                                          <option value="">Select Country</option>
                                          <?php foreach ($listNationality as $k =>$v){ ?>
                                          <option value="<?=$k ?>" <?php if(@$profile_data->ProfileCountry == $k){ echo "selected";}?> value="<?=$k ?>"><?= $v ?></option>
                                          <?php } ?>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <label for="image" class="col-sm-3 control-label">Image:</label>
                              <div class="col-sm-9">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <input type="file" class="form-control input-sm" name="image" id="image" value="<?php echo @$profile_data->image;?>">
                                       <img style="height: 90px;width:90px;" src="<?php echo base_url().'uploads/vendor/'?><?php echo @$profile_data->image;?>">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <h4 style="margin-left: 10px;"><b>User Notification</b></h4>
                              <div class="col-sm-9">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <input class="form-check-input" type="checkbox" value="<?php if(@$profile_data->ProfileNotify ==1){ echo "1";}?>" name="ProfileNotify" id="ProfileNotify"> <b>Play sound on new notification</b> 
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group col-sm-12">
                     <div class="form-group pull-right">                            
                        <button type="submit" class="btn btn-success" name="submit" id="submit"><i class="fa fa-check" aria-hidden="true"></i>Submit</button>&nbsp;&nbsp;&nbsp;  
                     </div>
                  </div>
                  <div class="form-group pull-right">
                     <div class="row">
                        <div class="col-sm-12">
                           <span id="profilemessage"></span>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </section>
</div>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
     function change_slug_btn()
   {
    var isreadoly  =$("#slug_url").is('[readonly]') ;
    if(isreadoly)
    {
            $("#slug_url").removeAttr('readonly');
    }else
    {
        $("#slug_url").attr("readonly","readonly");
    }
     
        
   }
     function convertToSlug(Text)
    {
        return Text
           .toLowerCase()
           .replace(/ /g,'-')
           .replace(/[^\w-]+/g,'')
           ;
    }
    function check_slug()
       {
        $("#msg_slug").html('Please Wait..'); 
           var slug_url = $("#slug_url").val();
           var id ="<?php echo @$profile_data->id;?>";
             $.ajax(
                 {
                   type:"POST",
                   url:"<?php echo base_url()?>vendor/setting/check_slug",
                   data:'slug_url='+slug_url+"&id="+id,
                   success:function(returnVal)
                   {
                    
                     $("#msg_slug").html(''); 
                     if(returnVal == 'not_login')
                     {
                       //window.location.href = "<?php echo base_url()?>login";
                     }
                     else if(returnVal == 'slug_exist')
                     {
                        $("#submit").attr('disabled','disabled');
                         $("#msg_slug").html('Already Exist');
                       $("#msg_slug").css('color','red'); 
                     }else if(returnVal == 'slug_available')
                     {
                       
                       $("#msg_slug").html('Available');
                       $("#msg_slug").css('color','green');
       
                        $("#submit").removeAttr('disabled');
                     }
                     
                   }
                 });
       }
     $(document).on('input', '#ProfileName', function() {
       var name = $("#ProfileName").val();
       var slug_url = convertToSlug(name);
       $("#slug_url").val(slug_url);
       check_slug();
          

    });
     $(document).on('input', '#slug_url', function() {
                                                       var name = $("#slug_url").val();
                                                       var slug_url = convertToSlug(name);
                                                       $("#slug_url").val(slug_url);
                                                       check_slug();
                                                          
                                                   
                                                   });
   $(document).ready(function(){
        
        




        $('#BtnLanguageEn').click(function(){
           $('#BtnLanguageAr').removeClass('btn-rc');
           $('#BtnLanguageEn').addClass('btn-rc');
           $('#ArLanguage').hide();
           $('#EnLanguage').show();
   
       });
   
       $('#BtnLanguageAr').click(function(){
           $('#BtnLanguageEn').removeClass('btn-rc');
           $('#BtnLanguageAr').addClass('btn-rc');
           $('#EnLanguage').hide();
           $('#ArLanguage').show();
   
       });
    CKEDITOR.replace( 'ProfileAboutMeEn', 
                       { 
                       toolbar: 
                       [
                           { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike' ] },      
                           { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList' ] },
                           { name: 'styles', items: [ 'Styles', 'Format' ] 
                           },
                           ]
                           });
       //CkEditorAr
   
       CKEDITOR.replace( 'ProfileAboutMeAr', 
                       { 
                       toolbar: 
                       [
                           { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike' ] },      
                           { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList' ] },
                           { name: 'styles', items: [ 'Styles', 'Format' ] 
                           },
                           ]
                           });
   
                            });
</script>
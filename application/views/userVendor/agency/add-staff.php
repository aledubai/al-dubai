

<!-- Add Staff Modal Start  -->
<style>
     .form-horizontal .control-label
        {
            
            text-align: left;
    font-weight: 400;
    font-size: 12px;
        }
         
        .input-group-addon,
        .input-sm,
        .input-group-sm>.input-group-btn>.btn,
        .input-group-sm>.form-control,
        select.input-sm
        {
            height: 25px;
            padding: 1px 5px;
            font-size: 12px;
            line-height: 1.5;
        } 
        .fa-map-marker{font-size: 19px}
        .text-danger
        {
            color: #ff0500;
            vertical-align: middle;
        }

        /*
            CUSTOME UPLOAD FILE CSS START
        */

        .custom-file-input::-webkit-file-upload-button {
          visibility: hidden;
          width: 120px;
          display: inline-block;
        }
         
        .custom-file-input::before {
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
<div class="themeModal hidden" id="themeStaff">
    <div class="themeModalCon">
        <div class="row">
            <div class="col-sm-12">
                <span class="themeModalBtnClose" >x</span>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <h6 class="text-left" >ADD STAFF</h6>
                    
                </div>
                     
            </div>
            <div class="row">
                 <div class="col-sm-6 text-right">
                    <span id="staffmessage"  class="formmessage"></span>
                </div> 
                 
            </div>
            <hr>
            <form class="form-horizontal" action="<?=base_url()?>/userVendor/agency/add_new_staff" id="StaffForm" enctype="multipart/form-data" >
            <!-- col-12-->
                <div class="col-sm-6 mt-4">
                    <h6><b>BASIC INFORMATION</b></h6>
                    <div class="row">
                        <input type="hidden" name="StaffActionMode" id="StaffActionMode" value="Add" />
                        <input type="hidden" name="StaffID" id="StaffID"/>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="StaffName" class="col-sm-2 control-label">Name:<strong class="text-danger">*</strong></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="StaffName" name="StaffName" required="" / >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="NameInArabic" class="col-sm-2 control-label">Name&nbsp;In&nbsp;Arabic</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="NameInArabic" name="NameInArabic">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StaffEmail" class="col-sm-2 control-label">Email:<strong class="text-danger">*</strong></label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control input-sm" id="StaffEmail" name="StaffEmail" placeholder="User Name"  required="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StaffBRN" class="col-sm-2 control-label">BRN:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="StaffBRN" name="StaffBRN" placeholder="BRN" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StaffPassword" class="col-sm-2 control-label">Password:<strong class="text-danger">*</strong></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="password" class="form-control input-sm" id="StaffPassword" name="StaffPassword"  required="" />    
                                        <span class="input-group-addon"><i class="fa fa-eye" id="StaffPasswordToggle"></i></span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StaffRePassword" class="col-sm-2 control-label">Re-Type:<strong class="text-danger">*</strong></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="password" class="form-control input-sm" id="StaffRePassword" name="StaffRePassword"  required="" />   
                                        <span class="input-group-addon"><i id="StaffRePasswordToggle" class="fa fa-eye"></i></span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StaffTeam" class="col-sm-2 control-label">Team:</label>
                                <div class="col-sm-10">
                                    <select   class="form-control input-sm" name="StaffTeam" id="StaffTeam" title="Team">
                                          <option value="">Select</option>
                                         <?php foreach ($listAssignTo as $k =>$v){
                                                ?>
                                            <option value="<?=$k ?>"><?= $v ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StaffAboutYou" class="col-sm-2 control-label">About&nbsp;You:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="StaffAboutYou" id='StaffAboutYou' class="form-control input-sm" ></textarea> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="StaffAboutYou" class="col-sm-2 control-label">Add Image</label>
                                <div class="col-sm-10">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input " name="StaffuploadImage"  id="StaffuploadImage" style="width: 130px;">
                                        
                                          
                                    </div>
                                    <div class="row">
                                        <div id="Staffpreview">

                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    
                    </div>
                </div>
                <!--// col-12-->
                <!-- col-12-->
                <div class="col-sm-6 mt-4">
                    <h5><b>CONTACT INFORMATION</b></h5>
                    <div class="row">
                            <div class="box-body">
                            <div class="form-group">
                                <label  class="col-sm-2 control-label" style="display: inline-flex;">Primary:<i class="fa fa-question-circle"></i><strong class="text-danger">*</strong></label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control input-sm" name="StaffPrimaryTextFirst" id="StaffPrimaryTextFirst"   required="" />
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control input-sm" name="StaffPrimaryTextSecond" id="StaffPrimaryTextSecond"   required="" />
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control input-sm" name="StaffPrimaryTextThird" id="StaffPrimaryTextThird" required="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" form-group">
                                <label  class="col-sm-2 control-label"  >Secondary:</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control input-sm" name="StaffSecondaryTextFirst" id="StaffSecondaryTextFirst"  />
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control input-sm" name="StaffSecondaryTextSecond" id="StaffSecondaryTextSecond"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label"  >Fax:</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control input-sm" name="StaffFaxFirst" id="StaffFaxFirst"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control input-sm" name="StaffFaxSecond" id="StaffFaxSecond"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control input-sm" name="StaffFaxThird" id="StaffFaxThird"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" form-group">
                                <label for="StaffAddress" class="col-sm-2 control-label"  >Address:</label>
                                <div class="col-sm-10">
                                    <div class="">
                                        <input type="text" class="form-control input-sm" name="StaffAddress" id="StaffAddress"/>
                                    </div>
                                </div>
                            </div>
                            <div class=" form-group">
                                <label for="StaffZip" class="col-sm-2 control-label"  >Zip:</label>
                                <div class="col-sm-10">
                                    <div class="">
                                        <input type="text" class="form-control input-sm" name="StaffZip" id="StaffZip"/>
                                    </div>
                                </div>
                            </div>
                            <div class=" form-group">
                                <label for="StaffNationality" class="col-sm-2 control-label"  >Nationality:</label>
                                <div class="col-sm-10">
                                    <div class="">
                                        <select   class="form-control input-sm" name="StaffNationality" id="StaffNationality" title="Nationality">
                                            <option value="">Select Country</option>
                                            <?php foreach ($listNationality as $k =>$v){
                                            ?>
                                            <option value="<?=$k ?>"><?= $v ?></option>
                                            <?php } ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class=" form-group">
                                <label for="StaffIsActive" class="col-sm-2 control-label"  >Is Active:</label>
                                <div class="col-sm-10">
                                   <div class="row">
                                        <?php 
                                             
                                         foreach ($ActiveInactiveList as $k =>$v){  ?>
                                        <div class="col-sm-6">
                                            <div class="form-row"> 
                                                <input type="radio" name="StaffIsActive" id="StaffIsActive<?=$k?>" value="<?=$k?>"
                                                     <?php echo (isset($k) && $k =='1') ?  'checked' : '';?>
                                                 >&nbsp;&nbsp;&nbsp;
                                                <label for="StaffIsActive<?=$k?>" ><?=$v?></label>
                                            </div>    
                                        </div>
                                        <?php } ?>
                                         
                                    </div>
                                </div>
                            </div>
                            <div class=" form-group">
                                <label for="StaffSkype" class="col-sm-2 control-label"  >Skype:</label>
                                <div class="col-sm-10">
                                    <div class="">
                                        <input type="text" class="form-control input-sm" name="StaffSkype" id="StaffSkype"/>
                                    </div>
                                </div>
                            </div>
                            <div class=" form-group">
                                <label for="StaffWhatsApp" class="col-sm-2 control-label"  >Whats&nbsp;App:</label>
                                <div class="col-sm-10">
                                    <div class="">
                                        <input type="text" class="form-control input-sm" name="StaffWhatsApp" id="StaffWhatsApp"/>
                                    </div>
                                </div>
                            </div>
                             <div class=" form-group">
                                <label for="StaffPassport" class="col-sm-2 control-label"  >Passport&nbsp;No:</label>
                                <div class="col-sm-10">
                                    <div class="">
                                        <input type="text" class="form-control input-sm" name="StaffPassport" id="StaffPassport"/>
                                    </div>
                                </div>
                            </div>

                        </div>    
                    </div>
                </div>
                <!--// col-12-->
                <!-- col-12-->
                <div class="col-sm-12  text-right mt-4">
                    <div class="form-group"> 
                        <button type="button" class="btn btn-outline-rc btn-sm btn-lg BtnClose" >Cancel</button>&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-rc  btn-sm btn-lg" ><i class="fa fa-check"></i>Add</button>&nbsp;&nbsp;&nbsp;  
                    </div>    
                </div>
                <!--// col-12-->
            </form>
         </div>
    </div>    
</div>
<!-- Add Script For Save Data of staff -->

<script type="text/javascript">
     $(function() {

        $("#StaffPasswordToggle").click(function () {
                $(this).toggleClass("fa-eye fa-eye-slash");
               var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
                $("#StaffPassword").attr("type", type);
            });
             $("#StaffRePasswordToggle").click(function () {
                $(this).toggleClass("fa-eye fa-eye-slash");
               var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
                $("#StaffRePassword").attr("type", type);
            });

        $("#StaffForm").on('submit', function(e) {
            e.preventDefault();

            var contactForm = $(this);

            $.ajax({
                url: contactForm.attr('action'),
                type: 'post',
                data: contactForm.serialize(),
                success: function(response){
                    
                    if(response.status == 'success') {
                        $("#staffmessage").removeClass( "text-danger" );
                        $("#staffmessage").addClass( "text-success" );
                        $("#StaffForm")[0].reset();
                        setblank();
                    }
                    if(response.status == 'error') {

                        $("#staffmessage").removeClass( "text-success" );
                        $("#staffmessage").addClass( "text-danger" );
                         
                    }
                    $("#staffmessage").html(response.message);
                         
                }
            });
        });$("#StaffuploadImage").change(function (e) {
                 
                if(this.disabled){
                    return alert('File upload not supported!');
                }
                var F = this.files;
                if (F && F[0]) {
                     
                        readImage(F[0],1);
                    
                }
            });
        $('#StaffuploadImage').on('change', function(e){
                e.preventDefault();  
                if($('#StaffuploadImage').val() == '')  
                {  
                    alert("Please Select the File");  
                }  
            else 
            {  
                var form_data = new FormData();
                 

                    form_data.append("files[0]", document.getElementById('StaffuploadImage').files[0]);
                 
                 
                $.ajax({  
                url:"<?php echo base_url(); ?>userVendor/ajax_upload_file/staff_upload_thumbnail",   
                method:"POST",  
                data:form_data,  
                contentType: false,  
                cache: false,  
                processData:false,  
                dataType: "json",
                success:function(res)  
                {  

                    
                    

                         document.getElementById('StaffuploadImageName').value = res;
                    
                     
                }  
                });  
            }  
            }); 

    });
      function readImage(file,index)
 {
    var reader = new FileReader();
    var image  = new Image();
    reader.readAsDataURL(file);  
    reader.onload = function(_file) {
        image.src = _file.target.result; // url.createObjectURL(file);
        image.onload = function() {
        var w = this.width,
        h = this.height,
        t = file.type, // ext only: // file.type.split('/')[1],
        n = file.name,
        s = ~~(file.size/1024) +'KB';


 
        $('#Staffpreview').html('<div class="col-sm-4 mt-4 alert alert-secondary box-shadow-rc alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> '+
                '<img style="height:160px;width: 100%;" src="' + this.src + '" class="thumb"><input type="hidden"  name="StaffuploadImageName"  id="StaffuploadImageName" style="width:100%;">' +'</div>');
        };
        image.onerror= function() {
            alert('Invalid file type: '+ file.type);return false;
        };      
    };
}
</script>
<!--// themeModal  -->
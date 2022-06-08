            
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
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
        <small>Add, Edit</small>
    </h1>
</section>

    <!-- main-container-->
<section class="content">
    <div class="box">
    <!-- Content Starts Now-->
        <!-- First Column Starts-->

        <div class="box-body">
            <form action="<?=base_url()?>vendor/agency/add_company_profile" method="POST" id="companyForm"  enctype="multipart/form-data" >
            <div class="row">
                <div class="col-sm-6">
                    <h4 style="margin-left: 10px;"><b>BASIC INFORMATION</b></h4>
                        <div class="box-body">

                            <div class="form-group">
                                <div class="row">
                                    <label for="CompanyTitle" class="col-sm-3 control-label">Company Title:<span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" name="CompanyTitle" id="CompanyTitle" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                    <div class="row">
                                        <label for="CompanyTitleInArabic" class="col-sm-3 control-label">Comapny Title In Arabic:</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control input-sm" name="CompanyTitleInArabic" id="CompanyTitleInArabic"  >
                                        </div>
                                    </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="CompanyEmail" class="col-sm-3 control-label">Email:<span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                    <input type="Email" class="form-control input-sm" name="CompanyEmail" id="CompanyEmail" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="CompanyDescription" class="col-sm-3 control-label">Description:</label>
                                    <div class="col-sm-9">
                                       <div class="btn-group pull-left">
                                            <input type="button" name="BtnLanguageAr" id="BtnLanguageAr"  class="btn btn-sm btn-xs " value="AR" />
                                             <input   type="button"  name="BtnLanguageEn" id="BtnLanguageEn" class="btn btn-rc btn-sm btn-xs " value="EN" />
                                        </div>                          
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-9 pull-right">
                                        <div id="EnLanguage">
                                            <textarea class="ckedit" id="CompanyDescriptionEn" name="CompanyDescriptionEn"></textarea> 
                                        </div>
                                        <div id="ArLanguage" style="display: none;">
                                            <textarea class="ckedit" id="CompanyDescriptionAr" name="CompanyDescriptionAr"></textarea>  
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="CompanyLogo" class="col-sm-3 control-label">Logo:</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div id="comLogoPreview">

                                            </div>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="uploadLogo" multiple id="uploadLogo" style="width: 130px;">  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <!-- Second Column Starts-->

                <div class="col-sm-6">
                    <h4 style="margin-left: 10px;"><b>COMPANY INFORMATION</b></h4>
                        <div class="box-body">
                            <div class="form-group">
                                <div class="row">
                                        <label for="CompanyPrimaryNo" class="col-sm-3 control-label">Primary No:<i class="fa fa-question-circle" aria-hidden="true"></i></label>
                                    <div class="col-sm-9">
                                        <div class="row">                          
                                            <div class="col-sm-3">
                                            <input type="text" class="form-control input-sm" name="CompanyPrimaryNoFirst" id="CompanyPrimaryNoFirst"  >
                                            </div>
                                            <div class="col-sm-3">
                                            <input type="text" class="form-control input-sm" name="CompanyPrimaryNoSecond" id="CompanyPrimaryNoSecond"  >
                                            </div>
                                            <div class="col-sm-6">
                                            <input type="text" class="form-control input-sm" name="CompanyPrimaryNoThird" id="CompanyPrimaryNoThird"  >
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                        <label for="com_secondary" class="col-sm-3 control-label">Secondary No:</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control input-sm" name="CompanySecondaryNoFirst" id="CompanySecondaryNoFirst"  >
                                            </div>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control input-sm" name="CompanySecondaryNoSecond" id="CompanySecondaryNoSecond"  >
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                        <label for="CompanyWebsite" class="col-sm-3 control-label">Website:</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-12">
                                            <input type="text" class="form-control input-sm" name="CompanyWebsite" id="CompanyWebsite"  >
                                            </div>                 
                                        </div>
                                    </div>
                                 </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="com_fax" class="col-sm-3 control-label">Fax:</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                <input type="text" class="form-control input-sm" name="CompanyFaxFirst" id="CompanyFaxFirst"  >
                                                </div>
                                                <div class="col-sm-3">
                                                <input type="text" class="form-control input-sm" name=" CompanyFaxSecond" id="  CompanyFaxSecond"  >
                                                </div>
                                                <div class="col-sm-6">
                                                <input type="text" class="form-control input-sm" name=" CompanyFaxThird" id="   CompanyFaxThird"  >
                                                </div>
                                            </div>
                                        </div>
                                 </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="CompanyAddress" class="col-sm-3 control-label">Address:</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                <textarea  Title="Address" class="form-control"   name="CompanyAddress" id='CompanyAddress' class="form-control input-sm"></textarea> 
                                                </div>
                                            </div>
                                        </div>
                                 </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="CompanyCountry" class="col-sm-3 control-label">Country:<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <select class="form-control input-sm" required="required" name="CompanyCountry" id="CompanyCountry">
                                                        <option value="">Select Country</option>
                                                        <?php foreach ($listNationality as $k =>$v){ ?>
                                                        <option value="<?=$k ?>" value="<?=$k ?>"><?= $v ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>    
                                            </div>
                                        </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                        <label for="CompanyState" class="col-sm-3 control-label">State:</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <select class="form-control input-sm" required="" name="CompanyState" id="CompanyState">
                                                            <option value="">Select State</option>
                                                            <?php foreach ($listStateIndia as $k =>$v){ ?>
                                                            <option value="<?=$k ?>" value="<?=$k ?>"><?= $v ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>                            
                                                </div>
                                            </div>
                                 </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="CompanyTradeLicense" class="col-sm-3 control-label">Trade License:</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control input-sm" name="CompanyTradeLicense" id="CompanyTradeLicense"  >
                                                </div>
                                            </div>
                                        </div>
                                 </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="CompanyORN" class="col-sm-3 control-label">ORN:</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control input-sm" name="CompanyORN" id="CompanyORN"  >
                                                </div>  
                                            </div>
                                        </div>
                                 </div>
                            </div>
                        </div>
                </div>

                <!-- Buttons-->

                            <div class="form-group col-sm-12">
                                <div class="form-group pull-right">                            
                                    <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check" aria-hidden="true"></i>Submit</button>&nbsp;&nbsp;&nbsp;  
                                </div>       
                            </div>

                <!-- Success Message Div-->

                            <div class="form-group pull-right">                               
                                <div class="row">
                                    <div class="col-sm-12">
                                        <span id="companymessage"></span>
                                    </div>
                                </div>
                            </div>
            </div>
        </form>
        </div>


            <!-- Box Body Content Ends-->

    </div>
</section>
</div>



<!-- JavaScript Starts-->


<script type="text/javascript">
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

        //CkEditorEn

        CKEDITOR.replace( 'CompanyDescriptionEn', 
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

        CKEDITOR.replace( 'CompanyDescriptionAr', 
                        { 
                        toolbar: 
                        [
                            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike' ] },      
                            { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList' ] },
                            { name: 'styles', items: [ 'Styles', 'Format' ] 
                            },
                            ]
                            });

        //Image Upload Code

        $("#uploadLogo").change(function (e) {
                 
                if(this.disabled){
                    return alert('File upload not supported!');
                }
                var F = this.files;
                if (F && F[0]) {
                     
                        readImage(F[0],1);
                    
                }
            });
        $('#uploadLogo').on('change', function(e){
                e.preventDefault();  
                if($('#uploadLogo').val() == '')  
                {  
                    alert("Please Select the File");  
                }  
            else 
            {  
                var form_data = new FormData();
                 

                    form_data.append("files[0]", document.getElementById('uploadLogo').files[0]);
                 
                 
                $.ajax({  
                url:"<?php echo base_url(); ?>vendor/ajax_upload_file/company_profile_logo", //Image Path defined in ajax upload file  
                method:"POST",  
                data:form_data,  
                contentType: false, 
                cache: false,  
                processData:false,  
                dataType: "json",
                success:function(res)  
                {  
                    document.getElementById('CompanyPuploadImageName').value = res;
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


 
        $('#comLogoPreview').html('<div class="col-sm-8 mt-8 alert alert-secondary box-shadow-rc alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> '+
                '<img style="height:160px;width: 200px;" src="' + this.src + '" class="thumb"><input type="hidden"  name="CompanyPuploadImageName"  id="CompanyPuploadImageName" style="width:200px;">' +'</div>');
        };
        image.onerror= function() {
            alert('Invalid file type: '+ file.type);return false;
        };      
    };


    // Form ID

    $("#companyForm").on('submit', function(e) {
            
            e.preventDefault();

            var companyForm = $(this);

            $.ajax({
                url: companyForm.attr('action'),
                type: 'post',
                data: companyForm.serialize(),
                success: function(response){
                    
                    if(response.status == 'success') {
                        $("#companymessage").removeClass( "text-danger" );
                        $("#companymessage").addClass( "text-success" );
                        $("#companyForm")[0].reset();
                        setblank();
                    }
                    if(response.status == 'error') {

                        $("#companymessage").removeClass( "text-success" );
                        $("#companymessage").addClass( "text-danger" );
                         
                    }
                    $("#companymessage").html(response.message);
                         
                }
            });
        });



    };
      function setblank()
    {
        setTimeout(function(){ 
            $("companymessage").html('');

         }, 3000);
    }
</script>















    					









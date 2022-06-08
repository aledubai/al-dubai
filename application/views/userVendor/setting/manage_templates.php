<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css" />
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<!-- Style Tag-->
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
</style>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
    <section class="content-header">
        <h1 class="text-left"><i class="fa fa-user" aria-hidden="true"></i>Manage Templates<small>Add, Edit</small>
        </h1>   
     </section>



<section class="content">
    <div class="box">

    	<!-- Header Content Starts-->
    	<div class= "box-body table-responsive">
            <table class="table card-table table-vcenter border text-nowrap">
	            <thead>
	            <tr>
	            	<th><button type="button" class="btn btn-success" style="width: 150px;">ALL</button></th>
	            	<th><button type="button" class="btn pull-left" style="width: 150px; margin-left:-160px; background-color: white; border-color: #D3D3D3;">DESCRIPTION</button></th>
	            	<th><button type="button" class="btn" style="width: 150px;  background-color: white; border-color: #D3D3D3;" >EMAIL</button></th>
	            	<th><button type="button" class="btn btn-primary pull-right" style="width: 150px; border-radius: 10px;"><i class="fa fa-plus" aria-hidden="true" style="margin: 5px;"></i>ADD TEMPLATE</button></th>
	            </tr>
	            </thead>
            </table>
        </div>

        <!-- Body Content Starts-->
        <div class="box-body">
        <form action="<?=base_url()?>userVendor/setting/add_setting_template" method="POST" id=""  enctype="multipart/form-data" >
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
                </div>
            <div class="col-sm-12">
                <h4 style="margin-left: 10px;"><b>ADD TEMPLATE</b></h4>
                    <div class="box-body">

                        <div class="form-group">
                            <div class="row">
                                <label for="ProfileTitle" class="col-sm-3 control-label">Title:<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control input-sm" name="ProfileTitle" id="ProfileTitle" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label for="ProfileTemplateType" class="col-sm-3 control-label">Template Type:<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    
                                    <?php foreach ($listEmailTempType as $k =>$v){
                                    ?>
                                        <label for="tempType<?=$k?>" ><input type="radio"  name="ProfileTemplateType" id="ProfileTemplateType<?=$k?>"  value="<?=$k?>" <?php if($k==1){echo "checked";}?> > <?=$v?></label>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php } ?>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label for="ProfileContent" class="col-sm-3 control-label">Content:<span class="text-danger">*</span></label>
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
                                        <textarea class="ProfileContentEn" id="ProfileContentEn" name="ProfileContentEn" required="required" ></textarea>    
                                    </div>
                                    <div id="ArLanguage" style="display: none;">
                                        <textarea class="ProfileContentAr" id="ProfileContentAr" name="ProfileContentAr" required="required" ></textarea>    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <div class="form-group pull-right"> 
                                <button type="reset" class="btn" style="color: green; border-color: green; background-color: white; border-radius:8px;" id="resetBtnFeature">Cancel</button>&nbsp;&nbsp;&nbsp;
                                <button type="Submit" class="btn btn-success" id="doneBtnFeature" style="border-radius:8px;"><i class="fa fa-check" aria-hidden="true"></i>Submit</button>&nbsp;&nbsp;&nbsp;  
                            </div> 
                    	</div>

		<!-- Lower Body Content Starts-->

					<small style="margin-left: 20px;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><a href="#"><b>Advanced Search</b></a></small>
				    <div class="box-body">
				        <div class="row">
				            <div class="collapse" id="collapseExample" >
				                <div class="row" style="margin-left: -5px;">
				                    <div class="col-xs-12">
				                        <div class="box-header form-horizontal">
				                            <h6 class="box-title"><B>TEMPLATES</B></h6>
				                            <div class="box-tools"></div>
				                        </div>
				                    </div>
				                </div><!-- Body Content Starts-->
				                <div class="col-sm-12">
				                    <div class="box-body">
				                        <div class="form-group">
				                            <div class="row">
				                                <label for="ProfileTitleLow" class="col-sm-3 control-label">Title:</label>
				                                <div class="col-sm-9">
				                                    <input type="text" class="form-control input-sm" name="ProfileTitleLow" id="ProfileTitleLow">
				                                </div>
				                            </div>                           
				                        </div>
				                        <div class="form-group col-sm-12">
				                            <div class="form-group pull-right"> 
				                                <button type="reset" class="btn" style="color: green; border-color: green; background-color: white; border-radius:8px;" id="resetBtnFeature">Reset</button>&nbsp;&nbsp;&nbsp;
				                                <button type="button" class="btn btn-success" id="doneBtnFeature" style="border-radius:8px;">Search</button>&nbsp;&nbsp;&nbsp;  
				                            </div> 
				                    	</div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>

        <!-- Lower Body Content Starts-->


	                <div class="row" style="margin-left: -5px;">
	                    <div class="col-xs-12">
	                        <div class="box-header form-horizontal">
	                            <h6 class="box-title"><B>MANAGE TEMPLATES</B></h6>
	                            <div class="box-tools"></div>
	                        </div>
	                    </div>
	                </div>



            <!-- Table Content Starts-->

                    <div class="box-body">
                        <div class="row">
                            <div class="box-body" style="overflow-x: auto;">
                                <table class="table  table-bordered  table-striped mb-0" id="example">
                                <thead>     
                                    <tr role="row">
                                        <th><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></th>
                                        <th>TEMPLATE ID</th>
                                        <th>TITLE</th>
                                        <th>TEMPLATE TYPE</th>
                                        <th>CONTROLS</th>                                
                                    </tr>
                                </thead>
                               
                                </table>
                            </div>
                        </div>
                    </div>
    			</div>
		</form>
		</div>
	</div>  
</section>
</div>

<!-- JavaScript Starts-->

<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

<script>

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

    CKEDITOR.replace( 'ProfileContentEn', 
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

    CKEDITOR.replace( 'ProfileContentAr', 
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

<!-- Add Table JavaScript-->
<script type="text/javascript">
  
$(document).ready(function() {
var table;

    //datatables
    table = $('#example').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('userVendor/setting/ajax_mailingTemp_list')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
    });
 
});
</script>

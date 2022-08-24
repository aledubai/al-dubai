<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css">
<form role="form" id="property_form" class="form-horizontal" action="<?php echo base_url() ?>vendor/property2/insertnow" method="post" role="form" enctype="multipart/form-data">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         <a href="<?php echo base_url();?>vendor/property2"> <i class="fa fa-pie-chart" aria-hidden="true"></i> Property</a>
        <small>Edit Property</small>
      </h1>
    </section>
    <style type="text/css">
        .btn-rc{
            color: #fff;
            background-color: #33be8b;
            border-color: #33be8b;
        }
        .btn-rc:hover{
            color: #fff;
            background-color: #278e68;
            border-color: #278e68;
        }
        .btn-outline-rc
        {
            color: #33be8b;
            background-color: transparent;
            background-image: none;
            border-color: #33be8b;
        }

        .btn-outline-rc:hover 
        {
            color: #fff;
            background-color: #33be8b;
            border-color: #33be8b;

        }
        .bg-rc{
            background-color: #33be8b;
            color: #fff;
        }
        .text-rc{
           color: #33be8b;
        }
        .btn-default-rc
        {
            border-color: #000;
        }
        label {
            font-weight: 400;
            font-size: 12px;
            
        }
        .form-horizontal .control-label
        {
            text-align: left;
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
          content: '+ Upload Images';
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
        .custom-file-input2::before
         {
            content: '+ Upload Floor Plan';
         }
         .custom-file-input3::before
         {
            content: '+ Add Document';
         }
        .custom-file-input:hover::before {
          border-color: black;
        }
        .custom-file-input:active::before {
          background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
        }
        .custom-file
        {
            display: inline-flex;
        }
        /*
            CUSTOME UPLOAD FILE CSS START
        */
        /*.alert .close{
            opacity: 1;
            width: 20px;
            color: #000;
            background: red;
            border-radius: 50px;
            color: #fff;
        }*/
        .themeModal .alert .close
            {
                 
               opacity: 1;
            width: 10px;
            color: #040404;
            background: #fff;
            border-radius: 0px;
            
         
            }

        .box-shadow-rc{box-shadow: 2px 0px 12px 7px #eae7e7;}
        .thumb{
          margin: 24px 5px 20px 0;
          width: 150px;
          float: left;
        }
    </style>
    <section class="content">
    
        <div class="row">
            <!-- Success & Error Alert-->
            <div class="col-md-12">
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
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
            <!-- Success & Error Alert-->
            
            <div class="col-md-12">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">

                    </div> 
                        
                    <!-- form start -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <h6><b>Location & Price</b></h6>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="type" class="col-sm-3 control-label">Type:<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control input-sm" required="" name="type" id="type">
                                                <option value="">Select</option>
                                                <?php foreach ($TypeList as $k =>$v){
                                                        ?>
                                                    <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                                <?php } ?>
                                             </select>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Rent"   class="col-sm-3 control-label">Purpose:<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <p style="margin: 0px">
                                                    <?php
                                                        foreach ($PurposeList as $k =>$v){
                                                                ?>
                                                                 <label>
                                                            <input type="radio"  required name="purpose"  value="<?= $k ?>" <?php if($k==1){echo 'checked'; } ?> >&nbsp;<?= $v ?>
                                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;

                                                          
                                                             
                                                        <?php }
                                                    ?>
                                                 </p>
                                                 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="location" class="col-sm-3 control-label">Location:</label>
                                        <div class="col-sm-9">
                                           <div class="input-group">
                                                <input class="form-control input-sm" type="text" name="location" id="location" value="" placeholder="Type Location To Search..." >
                                                 <div class="input-group-addon">
                                                  <i class="fa  fa-map-marker text-rc"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="emirate" class="col-sm-3 control-label">Emirate:<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control input-sm" required="" name="emirate" id="emirate">
                                                <option  value="">Select</option>
                                                <?php foreach ($EmirateList as $k =>$v){
                                                        ?>
                                                    <option value="<?=$k ?>"><?= $v ?></option>
                                                <?php } ?>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="community" class="col-sm-3 control-label">Community:<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control input-sm" required="" name="community" id="community">
                                                <option value="">Select Emirate First</option>
                                               <?php foreach ($CommunityList as $k =>$v){
                                                        ?>
                                                    <option value="<?=$k ?>"><?= $v ?></option>
                                                <?php } ?>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="unit" class="col-sm-3 control-label">Unit #:</label>
                                        <div class="col-sm-9">
                                             <div class="form-group">
                                                <div class=" ">
                                                   
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control input-sm" name="unit" id="unit" placeholder="Unit #">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control input-sm" name="unit_plot" id="unit_plot" placeholder="Plot #">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control input-sm" name="unit_street" id="unit_street" placeholder="Street #">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="views" class="col-sm-3 control-label">Views:</label>
                                        <div class="col-sm-9">
                                             
                                                <textarea class="form-control" style="resize: unset;" name="views" id='views' class="form-control input-sm" ></textarea> 
                                             
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="external_reference" class="col-sm-3 control-label">External Reference:</label>
                                        <div class="col-sm-9">
                                             
                                            <input class="form-control input-sm"  type="text" placeholder="External Reference" name="external_reference" id="external_reference" />
                                             
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="rent" class="col-sm-3 control-label">Rent:<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                             
                                            <div class="input-group input-group-sm">
                                                <input type="text" required="" class="form-control input-sm" name="rent" id="rent" required >
                                                    <span class="input-group-btn">
                                                      <button type="button" class="btn btn-secondary btn-flat">AED</button>
                                                    </span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="frequency" class="col-sm-3 control-label">Frequency:</label>
                                        <div class="col-sm-9">
                                            <select class="form-control input-sm" name="frequency" id="frequency">
                                                <?php foreach ($listFrequency as $k =>$v){
                                                        ?>
                                                    <option value="<?=$k ?>"><?= $v ?></option>
                                                <?php } ?>
                                             </select>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="annual_commission_percent" class="col-sm-3 control-label">Annual Commission:</label>
                                        <div class="col-sm-9">
                                             <div class="form-group">
                                                <div class=" ">
                                                   <div class="col-sm-6">
                                                        <div class="input-group input-group-sm">
                                                            <input type="text" class="form-control input-sm" name="annual_commission_percent" id="annual_commission_percent"  >
                                                            <span class="input-group-btn">
                                                                <button type="button" class="btn btn-secondary btn-flat">%</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group input-group-sm">
                                                            <input type="text" class="form-control input-sm" name="annual_commission_aed" id="annual_commission_aed"  />
                                                            <span class="input-group-btn">
                                                                <button type="button" class="btn btn-secondary btn-flat">AED</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                             <?php foreach ($listFeatureStatus as $k =>$v){ ?>
                                            <div class="checkbox">
                                                <label for="Fstatus<?=$k?>" >
                                                    <input type="checkbox" name="FeatureStatus[<?=$k?>]" id="Fstatus<?=$k?>" ><?=$v?>
                                                </label>
                                            </div>
                                            <?php } ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                 <h6><b>Listing Details</b></h6>
                                 
                                <div class="box-body">
                                     <div class="form-group">
                                        <label for="beds" class="col-sm-3 control-label">Beds:</label>
                                        <div class="col-sm-3">
                                            <select class="form-control input-sm" name="beds" id="beds">
                                                <option value="">Select</option>
                                                <?php foreach ($CountNumberList as $k =>$v){
                                                        ?>
                                                    <option value="<?=$k ?>"><?= $v ?></option>
                                                <?php } ?>
                                            </select>
                                            
                                        </div>
                                        <label for="baths" class="col-sm-3 control-label">Baths:</label>
                                        <div class="col-sm-3">
                                            <select class="form-control input-sm" name="baths" id="baths">
                                                <option value="">Select</option>
                                                <?php foreach ($CountNumberList as $k =>$v){
                                                        ?>
                                                    <option value="<?=$k ?>"><?= $v ?></option>
                                                <?php } ?>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="parking" class="col-sm-3 control-label">Parking:</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="parking" class="form-control input-sm"  id="parking" />
                                         </div>
                                        <label for="year_built" class="col-sm-3 control-label">Year&nbsp;Built:</label>
                                        <div class="col-sm-3">
                                            <input type='text' class="form-control input-sm" name="year_built" id="year_built" />
                                                 
                                            
                                        </div>
                                    </div>
                                     
                                    <div class="form-group">
                                        <label for="developer" class="col-sm-3 control-label">Developer:<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control input-sm" required="" name="developer" id="developer">
                                                <option value="">Select</option>
                                                  <?php foreach ($DeveloperList as $k =>$v){
                                                        ?>
                                                    <option value="<?=$k ?>"><?= $v ?></option>
                                                <?php } ?>
                                                 
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="plot_area" class="col-sm-3 control-label">Plot&nbsp;Area:</label>
                                        <div class="col-sm-9">
                                             
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control input-sm" name="plot_area" id="plot_area"  >
                                                    <span class="input-group-btn">
                                                      <button type="button" class="btn btn-secondary btn-flat">sqft</button>
                                                    </span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="area" class="col-sm-3 control-label">Area:<i class="fa   fa-info-circle text-rc"></i><span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                             
                                            <div class="input-group input-group-sm">
                                                <input type="text" required="" class="form-control input-sm" name="area" id="area" required >
                                                    <span class="input-group-btn">
                                                      <button type="button" class="btn btn-secondary btn-flat">sqft</button>
                                                    </span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">Deposit:</label>
                                        <div class="col-sm-9">
                                             <div class="form-group">
                                                <div class=" ">
                                                    <div class="col-sm-6">
                                                            <div class="input-group input-group-sm">
                                                                <input type="text" class="form-control input-sm" name="deposit_percent" id="deposit_percent" >
                                                                    <span class="input-group-btn">
                                                                      <button type="button" class="btn btn-secondary btn-flat">%</button>
                                                                    </span>
                                                            </div>
                                                            

                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="input-group input-group-sm">
                                                                <input type="text" class="form-control input-sm"  name="deposit_aed" id="deposit_aed" >
                                                                    <span class="input-group-btn">
                                                                      <button type="button" class="btn btn-secondary btn-flat">AED</button>
                                                                    </span>
                                                            </div> 

                                                             
                                                        </div>
                                                     </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cheques" class="col-sm-3 control-label">Cheques:</label>
                                        <div class="col-sm-9">
                                            <select class="form-control input-sm" name="cheques" id="cheques">
                                                <option value="">Select</option>
                                                <?php foreach ($listCheques as $k =>$v){
                                                        ?>
                                                    <option value="<?=$k ?>"><?= $v ?></option>
                                                <?php } ?>
                                            </select>
                                            
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox">
                                                <button type="button" class="btn btn-default btn-sm btn-xs btn-default-rc btnAddFeature"><strong>+</strong> Features (0)</button>
                                                <button type="button" class="btn btn-default btn-sm btn-xs btn-default-rc btnExtraInfo"><strong>+</strong> Extra Info</button>

                                                <div class="btn-group pull-right">
                                                    <input type="button" name="BtnLanguageAr" id="BtnLanguageAr"  class="btn btn-sm btn-xs " value="AR" />
                                                    <input   type="button"  name="BtnLanguageEn" id="BtnLanguageEn" class="btn btn-rc btn-sm btn-xs " value="EN" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                      
                                   <div id="ArLanguage" style="display: none;">
                                        <div class="form-group">
                                        <label for="ArTitle" class="col-sm-3 control-label">Title:</label>
                                        <div class="col-sm-9">
                                             <input class="form-control input-sm text-right"  type="text"  name="ArTitle" id="ArTitle" placeholder="عنوان" />
                                             
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="ArDescription" Title="Description" class="col-sm-3 control-label">Description:</label>
                                        <div class="col-sm-9">
                                              <textarea Title="Description" class="form-control  text-right"   name="ArDescription" id='ArDescription' class="form-control input-sm" Placeholder="300 مفتاح فريد لصحة جيدة"></textarea> 
                                       </div>
                                    </div>
                                   </div>
                                   <div id="EnLanguage">
                                        <div class="form-group">
                                        <label for="EnTitle" class="col-sm-3 control-label">Title:</label>
                                        <div class="col-sm-9">
                                             <input class="form-control input-sm"  type="text"  name="EnTitle" id="EnTitle" placeholder="Title" />
                                             
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="description" Title="Description" class="col-sm-3 control-label">Description:</label>
                                        <div class="col-sm-9">
                                              <textarea Title="Description" class="form-control"   name="description" id='description' class="form-control input-sm" Placeholder="300 Unique Charecters For Good Health"></textarea> 
                                       </div>
                                    </div>
                                   </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox">
                                                <button type="button" name="portals"  id="portals"  class="btn btn-default btn-sm btn-xs btn-default-rc btnAddPortal"><strong>+</strong> Portals (0)</button>
                                                <button type="button" name="photos"  id="photos"  class="btn btn-default btn-sm btn-xs btn-default-rc btnAddImage"><strong>+</strong> Photos (0)</button>
                                                <button type="button" name="videos" id="videos" class="btn btn-default btn-sm btn-xs btn-default-rc btnAddVideo"><strong>+</strong> Videos (0)</button>
                                                <button type="button" name="floor_plans"  id="floor_plans" class="btn btn-default btn-sm btn-xs btn-default-rc btnAddFloorPlan"><strong>+</strong> Floor Plans (0)</button>
                                                <button type="button"  name="documents"  id="documents"  class="btn btn-default btn-sm btn-xs btn-default-rc btnAddFloorPlanDocument"><strong>+</strong> Documents (0)</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <h6><b>Associations</b> </h6>
                                <div class="box-body">
                                     <div class="form-group">
                                        <label for="lsm" class="col-sm-3 control-label">LSM:<i class="fa   fa-info-circle text-rc"></i></label>
                                        <div class="col-sm-9">
                                            <p style="margin: 0px">
                                                <?php foreach ($listLsm as $k =>$v){
                                                        ?>
                                                    <label for="lms<?=$k?>" ><input type="radio"  name="lsm" id="lms<?=$k?>"  value="<?=$k?>" <?php if($k==1){echo "checked";}?> > <?=$v?></label>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <?php } ?>
                                            </p>
                                             
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tansaction" class="col-sm-3 control-label">Tansaction:<i class="fa   fa-info-circle text-rc"></i></label>
                                        <div class="col-sm-9">
                                             <input type="text" class="form-control input-sm" name="tansaction" id="tansaction" title="Tansaction" placeholder="Tansaction #" />
                                        </div>
                                    </div>
                                     
                                    <div class="form-group">
                                        <label for="permit" class="col-sm-3 control-label">Permit:<i class="fa   fa-info-circle text-rc"></i></label>
                                        <div class="col-sm-9">

                                                <div class="form-group">
                                                <div class=" ">
                                                   
                                                        <div class="col-sm-6">

                                                            <div class="input-group input-group-sm">
                                                               <input type="text" class="form-control input-sm" name="permit" id="permit" title="Permit" placeholder="Permit #" />
                                                                    <span class="input-group-btn">
                                                                      <button type="button" class="btn btn-secondary btn-flat"><i class="fa   fa-refresh"></i></button>
                                                                    </span>
                                                            </div>
                                                            

                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="input-group input-group-sm">
                                                                <input type="text" class="form-control input-sm" name="permit_expiry" id="permit_expiry" title="Permit Expiry" placeholder="Permit Expiry" />
                                                                    
                                                            </div> 

                                                             
                                                        </div>
                                                     </div>
                                                </div>
                                             
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="landlord" class="col-sm-3 control-label">Landlord:</label>
                                        <div class="col-sm-9">
                                             
                                            <div class="input-group input-group-sm">
                                               <div class="input-group-btn">
                                                    <button type="button" class="btn btn-default btnAddContact" data-toggle="modal" data-target="#AddContactModal">
                                                        <i class="fa fa-plus-circle"></i>
                                                    </button>
                                                </div>
                                                <input type="text" class="form-control input-sm" name="landlord" id="landlord" title="Landlord" placeholder="Search Contains (Min 3 Charecter Request.)"  >
                                                    
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rented" class="col-sm-3 control-label">Rented:</label>
                                        <div class="col-sm-9">
                                             
                                             <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="rented" id="rented" value="Rented" > 
                                                </label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="source" class="col-sm-3 control-label">Source:</label>
                                        <div class="col-sm-9">
                                            <select class="form-control input-sm" name="source" id="source">
                                                <option value="">Select</option>
                                                <?php foreach ($listSecure as $k =>$v){
                                                        ?>
                                                    <option value="<?=$k ?>"><?= $v ?></option>
                                                <?php } ?>
                                                 
                                                 
                                            </select>
                                            
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="assign_to" class="col-sm-3 control-label">Assign&nbsp;To:<i class="fa fa-info-circle text-rc"></i><span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <select required class="form-control input-sm" name="assign_to" id="assign_to" title="Assign To">
                                                  <option value="">Select</option>
                                                 <?php foreach ($listAssignTo as $k =>$v){
                                                        ?>
                                                    <option value="<?=$k ?>"><?= $v ?></option>
                                                <?php } ?>
                                            </select>
                                            
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="col-sm-3 control-label text-rc">Status:<i class="fa   fa-info-circle text-rc"></i></label>
                                        <div class="col-sm-9">
                                            <select class="form-control input-sm" name="status" id="status">
                                                 <?php foreach ($listPropertyStatus as $k =>$v){
                                                        ?>
                                                    <option value="<?=$k ?>"><?= $v ?></option>
                                                <?php } ?>
                                            </select>
                                            
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="note" Title="Description" class="col-sm-3 control-label">Note:</label>
                                        <div class="col-sm-9">
                                              <textarea Title="Note" class="form-control"   name="note" id='note' class="form-control input-sm"></textarea> 
                                       </div>
                                    </div>
                                     
                                </div>
                            </div>
                        </div>

                    <div class="box-footer">
                        <div class="row">
                            <div class="col-sm-2">
                                <!--Status-->
                                <div class="form-group">
                                     <select class ="form-control" name="status" id="status">
                                        <option value="1" >Active</option>
                                        <option value="0" >Inactive</option>
                                    </select>   
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <input type="submit" class="btn btn-rc" value="Submit" />
                                 
                            </div>
                        </div><!--//row-->
                        
                    </div>
                   
                </div>
            </div>
            
        </div>    
    </section>
    
</div>


<?php include_once "list-feature-modal.php"?>
<?php include_once "gallery-image-modal.php"?>
<?php include_once "floor-plan-modal.php"?>
<?php include_once "document-floor-modal.php"?>
<?php include_once "portal.php"?>
<?php include_once "video-modal.php"?>
<?php include_once "extra-info.php"?>
<?php include_once "add-contact-modal.php"?>


</form>
<script type="text/javascript">
    $(document).ready(function(){
        $(".menuBtn").click(function(){
            var target = "."+$(this).attr("data-target");
            $(".menuBtn").removeClass("active1");
            $(this).addClass("active1");
            $(".incCon").addClass("hidden");
            $(target).removeClass("hidden");
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){


        
        $("#landlord").keyup(function(){
           $("#FirstName").val($("#landlord").val());
        });
        $(".inputName").keyup(function(){
           $("#landlord").val($("#FirstName").val()+" "+$("#LastName").val());
        });
        // click
        $(".btnAddFeature").click(function(){
            $(".themeModal").addClass("hidden");
            $("#themeModal1").removeClass("hidden");
        });

       $("#doneBtnFeature").click(function(){
            $(".themeModal").addClass("hidden");
             
        });


       $(".btnAddFloorPlan").click(function(){
            $(".themeModal").addClass("hidden");
            $("#FloorPlanModal1").removeClass("hidden");
        });

       $(".btnAddContact").click(function(){
            $(".themeModal").addClass("hidden");
            $("#AddContactModal1").removeClass("hidden");
        });


       $(".btnAddFloorPlanDocument").click(function(){
            $(".themeModal").addClass("hidden");
            $("#DocumentFloorPlanModal1").removeClass("hidden");
        });
       


        $(".themeModalBtnClose").click(function(){
            $(".themeModal").addClass("hidden");
        });
         $(".BtnClose").click(function(){
            $(".themeModal").addClass("hidden");
        });
        

         $(".btnAddImage").click(function(){
            $(".imageModal").addClass("hidden");
            $("#imageModal1").removeClass("hidden");
        });

          $(".btnAddVideo").click(function(){
           $(".videoModal").addClass("hidden");
            $("#videoModal1").removeClass("hidden");
        });

          $(".btnAddPortal").click(function(){
           $(".portalModal").addClass("hidden");
            $("#portalModal1").removeClass("hidden");
        });

          $(".btnExtraInfo").click(function(){
           $(".infoModal").addClass("hidden");
            $("#infoModal1").removeClass("hidden");
        });
         
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
    });
</script>



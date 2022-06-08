<!-- Head-->              



    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome4.7.0.min.css">
    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>


        <style type="text/css">
        a { text-decoration: none; }
        a:hover { text-decoration: underline; }

        .table-row:hover{background-color:#00bfff;}

        </style>


<!-- Head--> 





                <div class="content-wrapper">
<!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            <i class="fa fa-user" aria-hidden="true"></i> Lead Management
                            <small>Add, Edit</small>
                        </h1>
                     </section>



<!-- Content Header (Menu) -->


                    <section class="content">
                    <div class="box">



                            <div class= "box-body table-responsive">

                    <table class="table card-table table-vcenter  border text-nowrap">
                    <thead>

                        

                    <tr>
                    <th><button type="button" class="btn btn-success" style="width: auto;border-radius: 4px;" ><i class="fa fa-plus-circle" style="margin: 3px;" aria-hidden="true"></i><b>OPEN()</b></button></th>

                    <th>

                        <button type="button" class="btn" style="width: auto; border-radius: 4px; background-color: white; border-color: #D3D3D3;" ><img width="15px;" src="<?=base_url()?>assets/images/icon/Capture.png"><b>BAYUT LEADS()</b></button></th>

                    <th>
                        <button type="button" class="btn" style="width: auto; border-radius: 4px; background-color: white; border-color: #D3D3D3;" ><img width="10px;" src="<?=base_url()?>assets/images/icon/dubizzle.jpg"><b>DUBIZZLE LEADS()</b></button>
                    </th>

                    <th>
                        <button type="button" class="btn" style="width: auto; border-radius: 4px; background-color: white; border-color: #D3D3D3;" ><i class="fa fa-share" style="margin: 3px;" aria-hidden="true"></i><b>LSM LEADS()</b></button>
                    </th>

                    <th>
                        <button type="button" class="btn" style="width: auto; border-radius: 4px; background-color: white; border-color: #D3D3D3;" ><i class="fa fa-minus-circle" style="margin: 3px;" aria-hidden="true"></i><b>CLOSED()</b></button>
                    </th>

                    <th>
                        <button type="button" class="btn" style="width: auto; border-radius: 4px; background-color: white; border-color: #D3D3D3;"" ><i class="fa fa-home" style="margin: 3px;" aria-hidden="true"></i><b>ALL LEADS()</b></button>
                    </th>


                    <th>
                        <button type="button" class="btn" style="color: green; border-color: green; background-color: white" ><i class="fa fa-paperclip" style="margin: 3px;" aria-hidden="true"></i><b>DEALS()</b></button>
                    </th>


                    <th>
                        <button type="button" class="btn btnAddcon btn-primary" style="border-radius: 4px;" id="btnAddcon"><i class="fa fa-plus" style="margin: 3px;" aria-hidden="true"></i><b>ADD LEAD</b></button>
                    </th>
                    
                    </tr>
                    </thead>
                    </table>
                    </div>




                    <!-- Body Content-->




                    <div class="row" style="margin-left: -5px;">
                        <div class="col-xs-12">
                            <div class="box-header form-horizontal">
                                <h6 class="box-title"><B>POST NEW LEAD</B></h6>
                                <div class="box-tools"></div>
                            </div>
                        </div>
                    </div>





                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <h6 style="margin-left: 10px;"><b>Lead Info</b></h6>
                                    <div class="box-body">



                         <div class="form-group">
                        <div class="row">
                                        <label for="lead_purpose" class="col-sm-3 control-label">Purpose:<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                        <div class="row">
                                            <?php foreach ($LeadPurposeList as $k =>$v){ ?>
                                                <div class="col-sm-6">
                                                    <div class="form-row"> 
                                                        <input type="radio" name="lead_purpose" id="lead_purpose<?=$k?>" value="<?=$k?>"
                                                             <?php echo (isset($PropertyLandlordData->TypeOFContact) && $PropertyLandlordData->TypeOFContact ==$k ) ?  'checked' : '';?>
                                                         >&nbsp;&nbsp;&nbsp;
                                                        <label for="TypeOFContact<?=$k?>" ><?=$v?></label>
                                                    </div>    
                                                </div>
                                            <?php } ?>
                                             
                                        </div>
                            </div>
                         </div>
                    </div>





                    <div class="form-group">
                        <div class="row">
                            <label for="lead_reference" class="col-sm-3 control-label">Reference:</label>
                                <div class="col-sm-9">
                                    <select class="form-control input-sm" required="" name="lead_reference" id="lead_reference">
                                    <option value="">Select Task</option>
                                    <?php foreach ($TypeList as $k =>$v){ ?>
                                    <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                         </div>
                    </div>



                    <div class="form-group">
                        <div class="row">
                                        <label for="lead_type" class="col-sm-3 control-label">Type:</label>
                            <div class="col-sm-9">
                                        <select class="form-control input-sm" required="" name="lead_type" id="lead_type">
                                        <option value="">Select</option>
                                        <?php foreach ($TypeList as $k =>$v){ ?>
                                        <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                        <?php } ?>
                                </select>
                            </div>
                         </div>
                    </div>




                    <div class="form-group">
                        <div class="row">
                            <label for="lead_location" class="col-sm-3 control-label" style="color: green;">Location:</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" name="lead_location" id="lead_location"  >
                            </div>
                        </div>
                    </div>






                <div class="form-group">
                    <div class="row">
                        <label for="lead_emirate" class="col-sm-3 control-label">Emirate:<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select class="form-control input-sm" required="" name="lead_emirate" id="lead_emirate">
                                <option value="">Select Task</option>
                                <?php foreach ($TypeList as $k =>$v){ ?>
                                <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>





                <div class="form-group">
                    <div class="row">
                        <label for="lead_community" class="col-sm-3 control-label">Community:</label>
                        <div class="col-sm-9">
                            <select class="form-control input-sm" required="" name="lead_community" id="lead_community">
                                <option value="">Select Emirate First</option>
                                <?php foreach ($TypeList as $k =>$v){ ?>
                                <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>



                <!-- Second column start-->



                    <div class="col-sm-4">
                                <h6 style="margin-left: 10px;"><b>Lead Details</b></h6>
                                    <div class="box-body">



                    <div class="form-group">
                        <div class="row">
                            <label for="lead_bed" class="col-sm-4 control-label">Beds:</label>
                                <div class="col-sm-4">
                                    <select class="form-control input-sm" required="" name="lead_bedMin" id="lead_bedMin">
                                    <option value="">Min</option>
                                    <?php foreach ($TypeList as $k =>$v){ ?>
                                    <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                    <select class="form-control input-sm" required="" name="lead_bedMax" id="lead_bedMax">
                                    <option value="">Max</option>
                                    <?php foreach ($TypeList as $k =>$v){ ?>
                                    <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                         </div>
                    </div>                       







                    <div class="form-group">
                        <div class="row">
                            <label for="lead_bath" class="col-sm-4 control-label">Baths:</label>
                                <div class="col-sm-4">
                                    <select class="form-control input-sm" required="" name="lead_bathMin" id="lead_bathMin">
                                    <option value="">Min</option>
                                    <?php foreach ($TypeList as $k =>$v){ ?>
                                    <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                    <select class="form-control input-sm" required="" name="lead_bathMax" id="lead_bathMax">
                                    <option value="">Max</option>
                                    <?php foreach ($TypeList as $k =>$v){ ?>
                                    <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                         </div>
                    </div>



                    <div class="form-group">
                        <div class="row">
                            <label for="lead_land" class="col-sm-4 control-label">Land Area:</label>
                                <div class="col-sm-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control input-sm"  name="lead_land" id="lead_land" >
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-secondary btn-flat">SQFT</button>
                                        </span>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control input-sm"  name="deposit_aed" id="deposit_aed" >
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-secondary btn-flat">SQFT</button>
                                        </span>
                                    </div>
                            </div>
                         </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <label for="lead_budget" class="col-sm-4 control-label">Budget:<span class="text-danger">*</span></label>
                                <div class="col-sm-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control input-sm"  name="lead_budget" id="lead_budget" >
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-secondary btn-flat">AED</button>
                                        </span>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control input-sm"  name="lead_budget" id="lead_budget" >
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-secondary btn-flat">AED</button>
                                        </span>
                                    </div>
                            </div>
                         </div>
                    </div>                       
                         



                         <div class="form-group">
                        <div class="row">
                            <label for="lead_pay" class="col-sm-4 control-label">Pay Mode:</label>
                                <div class="col-sm-8">
                                    <select class="form-control input-sm" required="" name="lead_pay" id="lead_pay">
                                    <option value="">Cheque</option>
                                    <?php foreach ($TypeList as $k =>$v){ ?>
                                    <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                         </div>
                    </div>




                    <div class="form-group">
                        <div class="row">
                            <label for="lead_classification" class="col-sm-4 control-label">Classification:</label>
                                <div class="col-sm-8">
                                    <select class="form-control input-sm" required="" name="lead_classification" id="lead_classification">
                                    <option value="">Warm</option>
                                    <?php foreach ($TypeList as $k =>$v){ ?>
                                    <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                         </div>
                    </div>
        </div>
    </div>

                    



                        <!-- Third Column start-->



                         <div class="col-sm-4">
                                <h6 style="margin-left: 10px;"><b>Other Information</b></h6>
                                    <div class="box-body">



                <div class="form-group">
                    <div class="row">
                        <label for="lead_source" class="col-sm-3 control-label">Source:</label>
                        <div class="col-sm-9">
                            <select class="form-control input-sm" required="" name="lead_source" id="lead_source">
                                <option value="">Select Task</option>
                                <?php foreach ($TypeList as $k =>$v){ ?>
                                <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                 <div class="form-group">
                    <div class="row">
                        <label for="lead_enquirer" class="col-sm-3 control-label">Enquirer:</label>
                        <div class="col-sm-9">
                        <div class="input-group input-group-sm">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default btnAddContact" data-toggle="modal" data-target="#AddContactModal">
                                <i class="fa fa-plus-circle"></i>
                                </button>
                            </div>
                                <input type="text" class="form-control input-sm" name="lead_enquirer" id="lead_enquirer" placeholder="Search Contains (Min 3 Charecter Request.)">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default btnAddContact" data-toggle="modal" data-target="#AddContactModal">
                                <i class="fa fa-envelope"></i>
                                </button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <label for="lead_assign" class="col-sm-3 control-label">Assign:</label>
                        <div class="col-sm-9">
                            <select class="form-control input-sm" required="" name="lead_assign" id="lead_assign">
                                <option value="">Waseem Abidi</option>
                                <?php foreach ($TypeList as $k =>$v){ ?>
                                <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <label for="lead_status" class="col-sm-3 control-label" style="color: green;">Status:<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select class="form-control input-sm" required="" name="lead_status" id="lead_status">
                                <option value="">Open Lead</option>
                                <?php foreach ($TypeList as $k =>$v){ ?>
                                <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>


                 <div class="form-group">
                    <div class="row">
                        <label for="lead_note" class="col-sm-3 control-label">Note:</label>
                        <div class="col-sm-9">
                            <textarea Title="Description" class="form-control  text-left" name="lead_note" id='lead_note' class="form-control input-sm"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <small style="margin-left: 100px;"><b>+ Next follow up (task)</b></small>
                    </div>
                </div>




                <!-- Buttons-->


                <div class="form-group col-sm-12">
                    <div class="form-group pull-right"> 
                        <button type="reset" class="btn" style="color: green; border-color: green; background-color: white" id="resetBtnFeature">Cancel</button>&nbsp;&nbsp;&nbsp;
                        <button type="reset" class="btn" style="color: green; border-color: green; background-color: white" id="resetBtnFeature"><i class="fa fa-plus" style="margin: 5px;" aria-hidden="true"></i>Add More</button>&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-success" id="doneBtnFeature" >Submit</button>&nbsp;&nbsp;&nbsp;  
                    </div> 
                </div>
        </div>
    </div>




        <!-- Lower Form Content-->


                    <div class="form-group">
                    <div class="row col-sm-2">


                        <small style="margin-left: 18px; color: #00bfff;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-caret-up" aria-hidden="true"></i><b>Advance Search</b></small>


                        

                    </div>

                    <div class="row col-sm-10">
                        <small><b><i class="fa fa-plus" aria-hidden="true"></i> Customize Settings</b></small>
                    </div>
                </div>




                <div class="collapse" id="collapseExample">

                    <div class="row" style="margin-left: -5px;">
                        <div class="col-xs-12">
                            <div class="box-header form-horizontal">
                                <h6 class="box-title"><B>QUICK SEARCH</B></h6>
                                <div class="box-tools"></div>
                            </div>
                        </div>
                    </div>





            <div class="box-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="box-body">


                            <div class="form-group">
                                <div class="row">
                                    <label for="lead_purpose" class="col-sm-3 control-label">Purpose:</label>
                                    <div class="col-sm-9">
                                    <div class="row">
                                    <?php foreach ($LeadPurposeList as $k =>$v){ ?>
                                    <div class="col-sm-6">
                                    <div class="form-row"> 
                                    <input type="radio" name="lead_purpose" id="lead_purpose<?=$k?>" value="<?=$k?>"
                                    <?php echo (isset($PropertyLandlordData->TypeOFContact) && $PropertyLandlordData->TypeOFContact ==$k ) ?  'checked' : '';?>
                                    >&nbsp;&nbsp;&nbsp;
                                    <label for="TypeOFContact<?=$k?>" ><?=$v?></label>
                                    </div>    
                                    </div>
                                    <?php } ?>
                                    </div>
                                    </div>
                                </div>
                            </div>


                    <div class="form-group">
                        <div class="row">
                            <label for="lead_type" class="col-sm-3 control-label">Type:</label>
                            <div class="col-sm-9">
                                    <select class="form-control input-sm" required="" name="lead_type" id="lead_type">
                                    <option value="">All Type</option>
                                    <?php foreach ($TypeList as $k =>$v){ ?>
                                    <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                         </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <label for="lead_ref" class="col-sm-3 control-label" style="color: green;">REF ID:</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" name="lead_ref" id="lead_ref"  >
                            </div>
                        </div>
                    </div>


                     <div class="form-group">
                        <div class="row">
                            <label for="lead_id" class="col-sm-3 control-label">Lead ID:</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" name="lead_id" id="lead_id"  >
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <label for="lead_exref" class="col-sm-3 control-label">Ex REF:</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control input-sm" name="lead_exref" id="lead_exref"  >
                            </div>
                        </div>
                    </div>

                        </div>
                    </div>




                    <!-- Second Column-->



                    <div class="col-sm-4">
                        <div class="box-body">


                            <div class="form-group">
                                <div class="row">
                                    <label for="lead_bed" class="col-sm-3 control-label">Beds:</label>
                                        <div class="col-sm-5">
                                            <select class="form-control input-sm" required="" name="lead_bedMin" id="lead_bedMin">
                                                <option value="">Min</option>
                                                <?php foreach ($TypeList as $k =>$v){ ?>
                                                <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                                <?php } ?>
                                             </select>
                                        </div>
                                <div class="col-sm-4">
                                    <select class="form-control input-sm" required="" name="lead_bedMax" id="lead_bedMax">
                                        <option value="">Max</option>
                                        <?php foreach ($TypeList as $k =>$v){ ?>
                                        <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                </div>
                            </div>  


                            <div class="form-group">
                                <div class="row">
                                    <label for="lead_locationLow" class="col-sm-3 control-label" style="color: green;">Location:</label>
                                    <div class="col-sm-9">
                                    <input type="text" class="form-control input-sm" name="lead_locationLow" id="lead_locationLow" placeholder="Type location to search" >
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>




                    <!-- Third Column-->



                    <div class="col-sm-4">
                        <div class="box-body">

                           <div class="form-group">
                                <div class="row">
                                    <label for="lead_assigned" class="col-sm-3 control-label" style="color: green;">Assigned:</label>
                                    <div class="col-sm-9">
                                        <select class="form-control input-sm" required="" name="lead_assigned" id="lead_assigned">
                                        <option value="">All</option>
                                        <?php foreach ($TypeList as $k =>$v){ ?>
                                        <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                 </div>
                             </div>

                        </div>
                    </div>



                    <!-- Buttons-->

                <div class="form-group col-sm-4">
                    <div class="form-group pull-right"> 
                        <button type="reset" class="btn" style="color: green; border-color: green; background-color: white" id="resetBtnFeature">Reset</button>&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-success" id="doneBtnFeature" >Search</button>&nbsp;&nbsp;&nbsp;  
                    </div> 
                </div>


                </div>
            </div>

        </div>



            <!-- Lead List Table Content-->



               <div class="row" style="margin-left: -5px;">
                        <div class="col-xs-12">
                            <div class="box-header form-horizontal">
                                <h6 class="box-title"><B>LEAD LIST</B></h6>
                                <div class="box-tools"></div>
                            </div>
                        </div>
                    </div>




                         <!-- Table Content -->


            <div class="box-body ">
                <div class="row">
                    <div class="box-body" style="overflow-x: auto;">
                        <table class="table table-bordered table-striped mb-0" style="font-size: 12px; width: auto; margin-left: 15px;">
                        <thead>     
                            <tr role="row">
                                <th><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></th>
                                <th>ID<i class="fa fa-caret-down" aria-hidden="true" style="display: inline;"></i></th>
                                <th>PURPOSE<i class="fa fa-caret-down" aria-hidden="true" style="display: inline;"></i></th>
                                <th>TYPE<i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                <th>LOCATION<i class="fa fa-caret-down" aria-hidden="true" style="display: inline;"></i></th>
                                <th>AREA<i class="fa fa-caret-down" aria-hidden="true" style="display: inline;"></i></th>
                                <th>BEDS<i class="fa fa-caret-down" aria-hidden="true" style="display: inline;"></i></th>
                                <th>BUDGET<i class="fa fa-caret-down" aria-hidden="true" style="display: inline;"></i></th>
                                <th>ENQUIRER</th>
                                <th>STAFF<i class="fa fa-caret-down" aria-hidden="true" style="display: inline;"></i></th>
                                <th>ADDED<i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                <th>UPDATED<i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                <th>STATUS</th>
                                <th>LAST TASK</th>
                                <th>PROGRESS</th>
                                <th>CONTROLS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></th>
                                <td><a href="#">432</a><i class="fa fa-share-square-o" aria-hidden="true" style="display: inline; margin: 2px;"></i>
                                </td>
                                <td>Rent</td>
                                <td>Apartment</td>
                                <td>The A Tower<i class="fa fa-info-circle" aria-hidden="true" style="margin: 2px; color: green;"></i></td>
                                <td>949</td>
                                <td>1</td>
                                <td>69,990</td>
                                <td><a href="#">M.A.D.S DI ALESSANDRA DI ALLESANDRAMAGNI</a></td>
                                <td>Faizan Sheikh</td>
                                <td>02/02/2021</td>
                                <td>02/02/2021</td>
                                <td><a href="#">Open Lead</a></td>
                                <td>-</td>
                                <td>
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                    <i class="fa fa-thermometer-full" aria-hidden="true"></i>
                                    <i class="fa fa-flag" aria-hidden="true"></i>  
                                </td>
                                <td>
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                                    <i class="fa fa-file-text" aria-hidden="true"></i>
                                    <br>
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    </br> 
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></th>
                                <td><a href="#">431</a><i class="fa fa-share-square-o" aria-hidden="true" style="display: inline; margin: 2px;"></i>
                                </td>
                                <td>Rent</td>
                                <td>Apartment</td>
                                <td>Al Barsha<i class="fa fa-info-circle" aria-hidden="true" style="margin: 2px; color: green;"></i></td>
                                <td>1800</td>
                                <td>2</td>
                                <td>65,000</td>
                                <td><a href="#">MRS RAHEEL</a></td>
                                <td>Muhammad</td>
                                <td>02/02/2021</td>
                                <td>02/02/2021</td>
                                <td><a href="#">Open Lead</a></td>
                                <td>-</td>
                                <td>
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                    <i class="fa fa-thermometer-full" aria-hidden="true"></i>
                                    <i class="fa fa-flag" aria-hidden="true"></i>  
                                </td>
                                <td>
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                                    <i class="fa fa-file-text" aria-hidden="true"></i>
                                    <br>
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    </br> 
                                </td>
                            </tr>
                        </tbody>                          
                        </table>
                    </div>
                </div>
            </div>



                    
        </div>
        </section>



        </div>
        </div>
        </div>

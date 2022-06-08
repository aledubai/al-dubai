<div class="content-wrapper"><!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-left"><i class="fa fa-user" aria-hidden="true"></i>Mailing Lists<small>Add, Edit</small>
        </h1>   
     </section>



<section class="content">

    <div class="box">

    	<!-- Body Header Starts-->
    	<div class= "box-body table-responsive">
            <table class="table card-table table-vcenter  border text-nowrap">
	            <thead>
		            <tr>
		            	<th class="pull-right"><button type="button" class="btn btn-primary" style="width: 150px; border-radius:8px;"><i class="fa fa-plus" style="margin: 3px;" aria-hidden="true"></i>ADD MAILING LIST</button></th>
		            </tr>
	            </thead>
            </table>
        </div>

        <!-- Body Content Starts-->
        <div class="box-body">
        <form action="<?=base_url()?>userVendor/setting/add_setting_mailingList" method="POST" id=""  enctype="multipart/form-data">
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
        	<!-- First Column Starts-->
            <div class="col-sm-6">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <label for="MailingListName" class="col-sm-3 control-label">List Name:<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control input-sm" name="MailingListName" id="MailingListName" required="required">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Second Column Starts-->

            <div class="col-sm-6">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <label for="MailingContacts" class="col-sm-3 control-label">Contacts:<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control input-sm" name="MailingContacts" id="MailingContacts" placeholder="Search Contacts.." required="required">
                                </div>
                            </div>
                        </div>
                    </div>
    		</div>

    		<!-- Buttons-->

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
		                            <h6 class="box-title"><B>SEARCH LIST</B></h6>
		                            <div class="box-tools"></div>
		                        </div>
		                    </div>
		                </div>
		                <!-- Body Content Starts-->
		                <div class="col-sm-12">
		                    <div class="box-body">
		                        <div class="form-group">
		                            <div class="row">
		                                <label for="CompanyListNameLow" class="col-sm-3 control-label">List Name:</label>
		                                <div class="col-sm-9">
		                                    <input type="text" class="form-control input-sm" name="CompanyListNameLow" id="CompanyListNameLow">
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
                            <table class="table  table-bordered  table-striped mb-0">
                            <thead>     
                                <tr role="row">
                                    <th><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></th>
                                    <th>ID</th>
                                    <th>LIST NAME</th>
                                    <th>CONTACTS</th>
                                    <th>CONTROLS</th>                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">No Records Found!</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
</section>
</div>

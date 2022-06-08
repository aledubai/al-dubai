<!-- Head-->              
<!--<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css" />-->
    
	<style type="text/css">
         a { text-decoration: none; }
        a:hover { text-decoration: underline; }

        .table-row:hover{background-color:#62a7e0;}
        .table-row:hover{cursor:pointer;}
      
	 	.table>tbody>tr.active>td, .table>tbody>tr.active>th, .table>tbody>tr>td.active, .table>tbody>tr>th.active, .table>tfoot>tr.active>td, .table>tfoot>tr.active>th, .table>tfoot>tr>td.active, .table>tfoot>tr>th.active, .table>thead>tr.active>td, .table>thead>tr.active>th, .table>thead>tr>td.active, .table>thead>tr>th.active {
    background-color: #62a7e0;
}
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
        .editbleicon
        {
        	cursor: pointer;
        }
</style>
	<!-- Head-->
		<div class="content-wrapper">
<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					<i class="fa fa-user" aria-hidden="true"></i> Contact Us
					<small>Add, Edit</small>
				</h1>
			</section>
			<!-- Content Header (Menu) -->
			<section class="content">
                <div class="box">
                    <div class= "box-body table-responsive">
						<table class="table card-table table-vcenter  border text-nowrap">
							<thead>
								<tr style="font-size: 15px;">
									<th><button type="button" class="btn btn-rc"  ><i class="fa fa-user" style="margin: 5px;" aria-hidden="true"></i>ALL(0)</button>
									</th>
									<th><i class="fa fa-user" aria-hidden="true" style="margin: 8px;"></i>LANDLORD()</th>
									<th><i class="fa fa-user" aria-hidden="true" style="margin: 8px;"></i>INVESTORS()</th>
									<th><i class="fa fa-user" aria-hidden="true" style="margin: 8px;"></i>TENANTS()</th>
									<th><i class="fa fa-user" aria-hidden="true" style="margin: 8px;"></i>BUYERS()</th>
									<th><i class="fa fa-user" aria-hidden="true" style="margin: 8px;"></i>ENQUIRERS()</th>
									<th><i class="fa fa-user" aria-hidden="true" style="margin: 8px;"></i>DEVELOPERS()</th>
									<th>
										<button type="button" class="btn btnAddcon btn-primary" style="border-radius: 4px;background-color: #49a8e5" id="btnAddcon"><i class="fa fa-plus" style="margin: 5px;" aria-hidden="true"></i>ADD CONTACT</button>
									</th>
								</tr>
							</thead>
						</table>
					</div>
					<!-- Body Content -->
					<div class="row">
						<div class="col-xs-12">
							 <small style="margin-left: 20px;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><a href="#"><b>QUICK SEARCH</b></a></small> 
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="collapse" id="collapseExample" >
								<div class="box-header form-horizontal">
									
									<div class="box-tools"></div>
									<div class="  row">
										<div class="form-group col-sm-4">
											<label for="con_name" class="col-sm-2 control-label">Name:</label>
											<div class="col-sm-10">
												<input type="text" class="form-control input-sm" id="con_name"/>
											</div>
										</div>
										<div class="form-group col-sm-4">
											<label for="con_mobile" class="col-sm-2 control-label">Mobile:</label>
											<div class="col-sm-10">
												<input type="text" class="form-control input-sm" id="con_mobile">
											</div>
										</div>
										<div class="form-group col-sm-4">
											<label for="con_staff" class="col-sm-2 control-label">Staff:</label>
											<div class="col-sm-10">
												<select class="form-control input-sm" required="" name="con_staff" id="con_staff">
													<option value="">All</option>
													<?php foreach ($listAssignTo as $k =>$v){ ?>
													<option value="<?=$k ?>"><?= $v ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>
									<div class=" row">
										<div class="form-group col-sm-4">
											<label for="con_notes" class="col-sm-2 control-label">Notes:</label>
											<div class="col-sm-10">
												<input type="text" class="form-control input-sm" id="con_notes">
											</div>
										</div>

										<div class="form-group col-sm-8">
											<div class="form-group pull-right"> 
												<button type="reset" class="btn btn-outline-rc"  id="resetBtnFeature">Reset</button>&nbsp;&nbsp;&nbsp;
												<button type="button" class="btn btn-rc" id="doneBtnFeature" >Search</button>&nbsp;&nbsp;&nbsp;  
											</div> 
										</div>
									</div>
								</div>
							</div>

							<!-- Lower Body Left-Content -->
							<div class="box-header form-horizontal">
								<h3 class="box-title"><B>MANAGE CONTACTS</B></h3>
								<div class="row">
									<div class="col-sm-4">
										<div class="table-responsive" style="height: 500px;">
											<table class="table" id="example">
												<thead>
													<tr style="background-color: #d0d9e2;">
													<th>ID</th>
													<th>NAME</th>
													<th>ROLE</th>
												</tr>
												</thead>

												<tbody>

												<?php
												 
												 // echo "<pre>";
												 // print_r($get_contact_lists);
												 // echo "</pre>";
													 foreach ($get_contact_lists as $get_contact_list) 
													{

													 $RoleName = '';
													 foreach ($RoleList as $k => $v) {
													 	if($k== $get_contact_list->Role)
													 	$RoleName = $v; 
													 	
													 }

														?>
															<tr  class="table-row contact_profile" data-profile_id="<?=$get_contact_list->id?>">
																<td><?=$get_contact_list->id?></td>
																<td><?=$get_contact_list->FirstName?></td>
																<td><?=$RoleName?></td>
																 
															</tr>
														<?php 
													} 
													 
												?>
												</tbody>
											</table>
										</div>
									</div>
									<!-- Lower Body Right-Content -->
									<div class="col-sm-8">
										<div class="row">
											<div class="table-responsive">
												<table class="table" style="margin-bottom: 0px;">
													<tbody>
														<tr style="background-color: #d0d9e2;">
															<th><img style="width: 40px;" src="<?=base_url()?>assets/images/user-contact.png" ></th>
															<th style="position: absolute; left: 55px; padding-top: 2px;">
																<span id="UserTitle">Tahe Frini</span><p style="top: 90px;"><small id="UserDesignation" >Enquirer</small></p>
															</th>
															<th>
																<a href="#" class="img_pin"><img style="position: absolute; right: 130px; width: 22px; top: 8px;" src="<?=base_url()?>assets/images/pin.png" ></a>
															</th>
															<th>
																<a href="#" class="img_msg"><img style="position: absolute; right: 170px; width: 40px;" src="<?=base_url()?>assets/images/msg.png" ></a>
															</th>
															<th>
																<a href="#EditProfile" id='EditProfile' class="editbleicon" data-contactProfileId><img style="position: absolute; right: 80px; width: 30px; top: 5px;" src="<?=base_url()?>assets/images/pencil.png" ></a>
															</th>
															<th>
																<a href="#"><img style="position: absolute; right: 40px; width: 20px;" src="<?=base_url()?>assets/images/trash.png" ></a>
															</th>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="box box-solid">
													<div class="box-header with-border">
														<div class="row">
															<div class="col-sm-12">
																<strong>OVERVIEW</strong>
															</div>
														</div>
													</div>
													<!-- /.box-header -->
													<div class="box-body">
													 	<div class="row">
													 		<div class="col-sm-6">
													 			<p class="text-muted">Name:</p>
													 			<p class="text-muted" id="SalesName">&nbsp;</p>
													 		</div>
													 		<div class="col-sm-6">
													 			<p class="text-muted">Email:</p>
													 			<p class="text-muted" id="SalesEmail">&nbsp;</p>
													 		</div>
													 	</div>
													 	<div class="row">
													 		<div class="col-sm-6">
													 			<p class="text-muted">Mobile&nbsp;Number:</p>
													 			<p class="text-muted" id="SalesMobile">&nbsp;</p>
													 		</div>
													 		<div class="col-sm-6">
													 			<p class="text-muted">Alternate&nbsp;Mobile&nbsp;:</p>
													 			<p class="text-muted"  id="SalesAlterMobile">&nbsp;</p>
													 		</div>
													 	</div>
													 	<div class="row">
													 		<div class="col-sm-6">
													 			<p class="text-muted">Assigned to:</p>
													 			<p class="text-muted" id="SalesAssignTo">&nbsp;</p>
													 		</div>
													 		<div class="col-sm-6">
													 			<p class="text-muted">Source:</p>
													 			<p class="text-muted" id="SalesSource">&nbsp;</p>
													 		</div>
													 	</div>
													</div>
													<!-- /.box-body -->
												</div>
												<div class="box box-solid">
													<div class="box-header with-border">
														<div class="row">
															<div class="col-sm-12">
																<strong>LEADS /INTEREST</strong>
															</div>
														</div>
													</div>
													<!-- /.box-header -->
													<div class="box-body">
													 	<div class="row">
													 		<div class="col-sm-12">
													 			<p class="text-muted">Not Interested Specified</p>
													 			 
													 		</div>
													 		 
													 	</div>
													 	 
													</div>
													<!-- /.box-body -->
												</div>
											</div>
											<div class="col-sm-8">
												<div class="box box-solid">
													<div class="box-header with-border">
														<div class="row">
															<div class="col-sm-6">
																<strong>OVERDUE TASKS</strong>
															</div>
															<div class="col-sm-6">
																<div class="pull-right"> 
																	<button type="button" class="btn btn-xs addBtnNote" style="color:  #00bfff; border-color:  #00bfff; border-radius: 4px; background-color: white" id="addBtnNote"><i class="fa fa-plus" style="margin: 5px;" aria-hidden="true"></i>Add Note</button>&nbsp;&nbsp;&nbsp;
																	<button type="button" class="btn btn-xs  addBtnTask" style="color: #00bfff; border-color: #00bfff; border-radius: 4px; background-color: white" id="addBtnTask"><i class="fa fa-plus" style="margin: 5px;" aria-hidden="true"></i>Add Task</button>&nbsp;&nbsp;&nbsp; 
																	</div>
															</div>
														</div>
														
													</div>
													<!-- /.box-header -->
													<div class="box-body">
													 	<div class="row">
													 		<div class="col-sm-12">
													 			<p class="text-muted text-italic">No Overdue Task</p>
													 		</div>
													 	</div>
													</div><!-- /.box-body -->
												</div>
												<div class="box box-solid">
													<div class="box-header with-border">
														<div class="row">
															<div class="col-sm-12">
																<strong>UPCOMMING(NEXT 48 HOUR)</strong>
															</div>
														</div>
													</div><!-- /.box-header -->
													<div class="box-body">
													 	<div class="row">
													 		<div class="col-sm-12">
													 			<p class="text-muted text-italic">No Upcomming Task
													 			</p>
													 		</div>
													 	</div>
													 </div><!-- /.box-body -->
												</div>
												<div class="box box-solid">
													<div class="box-header with-border">
														<div class="row">
															<div class="col-sm-12">
																<strong>HISTORY</strong>
															</div>
														</div>
													</div><!-- /.box-header -->
													<div class="box-body">
													 	<div class="row">
													 		<div class="col-sm-12">
													 			<div class="nav-tabs-custom">
														            <ul class="nav nav-tabs">
														              	<li class="active"><a href="#ContactTasks" data-toggle="tab" aria-expanded="true" style="color: #337ab7" id="TasksTab" >Tasks</a></li>
														              	<li class=""><a href="#Notes" data-toggle="tab" aria-expanded="false" style="color: #337ab7" id="NotesTab">Notes</a></li>
														              	<li class=""><a href="#Documents_tab" data-toggle="tab" aria-expanded="false" style="color: #337ab7" id="DocumentsTab">Documents</a></li>
														              	<li class=""><a href="#Activity_tab" data-toggle="tab" aria-expanded="false" style="color: #337ab7" id="ActivityTab">Activity</a></li>
														            </ul>
														            <div class="tab-content">
														              	<div class="tab-pane active" id="ContactTasks">
														              		<p id="ContentTasks"></p>
														              	</div><!-- /.tab-pane -->
														            	<div class="tab-pane" >
														            		<p id="ContentNotes"><p>
														            	</div><!-- /.tab-pane -->
														            	<div class="tab-pane" >
														            		<p id="ContentDocument"> </p>
														            	</div>
														            	<div class="tab-pane" id="Activity_tab">
														            		<p id=""> </p>
														            	</div><!-- /.tab-pane -->
														            </div><!-- /.tab-content -->
														        </div>
 															</div>
 														</div>
 													</div><!-- /.box-body -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
<!-- Script code-->
<?php include_once "contact-note-modal.php";?>
<?php include_once "contact-task-modal.php";?>
<?php include_once "email-modal.php";?>
<?php include_once "pin-modal.php";?>
<?php include_once "contact-modal.php";?>
 <!--
 <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<script>
var table;
 
$(document).ready(function() {
 
    //datatables
    
    table = $('#example').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('vendor/salespipeline/ajax_list')?>",
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
-->
<script type="text/javascript">
     $(document).ready(function(){
         $(".addBtnNote").click(function(){
         	var contactProfileId = $('#EditProfile').data('contactProfileId');
			  
			if(contactProfileId)
			{

				$("#hiddenNoteContactId").val(contactProfileId);
				$(".themeModal").addClass("hidden");
            	$("#NoteModal1").removeClass("hidden");
				
			}else
			{
				alert("Please Select Contact One ");
			}
            
        });

       $("#doneBtnFeature").click(function(){
            $(".themeModal").addClass("hidden");
             
        });

           
         $(".addBtnTask").click(function(){

         	
         	var contactProfileId = $('#EditProfile').data('contactProfileId');
			if(contactProfileId)
			{
				$("#hiddenTaskContactId").val(contactProfileId);
				$(".themeModal").addClass("hidden");
				$("#TaskModal1").removeClass("hidden");
				
			}else
			{
				alert("Please Select Contact One ");
			}
            
           
        });

        $(".themeModalBtnClose").click(function(){
            $(".themeModal").addClass("hidden");
        });

         $(".BtnClose").click(function(){
            $(".themeModal").addClass("hidden");
        });
 		
 		$(".img_msg").click(function(){
            $(".themeModal").addClass("hidden");
            $("#msgModal1").removeClass("hidden");
        });

          
        
        $(".img_pin").click(function(){
            $(".themeModal").addClass("hidden");
            $("#pinModal1").removeClass("hidden");
        });
         
        
        $(".btnAddcon").click(function(){
            $(".themeModal").addClass("hidden");
            $("#addConModal1").removeClass("hidden");
            $("#ContactActionMode").val('Add');
            $("#ContactID").val('');
            var contactForm =  $("#contactForm").attr("action","<?=base_url()?>vendor/salespipeline/insertcontact");
        });
		
		$("#EditProfile").click(function(){
			var contactProfileId = $('#EditProfile').data('contactProfileId');
			  
			if(contactProfileId)
			{
				$(".themeModal").addClass("hidden");
				$("#addConModal1").removeClass("hidden");
				
				 

            $.ajax({
                url: "<?=base_url()?>vendor/salespipeline/get_contact_detail/"+contactProfileId,
                type: 'post',
                dataType: "json",
                success: function(response){
                	if(response.status =='error')
                	{
                		alert(response.message);
                	}else
                	{
                		var daata = response.message;
                		// set parameter if data exist for edit
                		$("#ContactID").val(contactProfileId);
                		$("#ContactActionMode").val('Edit');
						var contactForm =  $("#contactForm").attr("action","<?=base_url()?>vendor/salespipeline/update_contact_detail");

                		var Salutation = daata.SalutationId
                		var FirstName = daata.FirstName
                		var LastName = daata.LastName
                		var Email = daata.Email
                		var Mobile = daata.Mobile
                		var AlternateMobile = daata.AlternateMobile
                		var TypeOFContact = daata.TypeOFContactId
                		var Role = daata.RoleNameId
                		var Nationality = daata.NationalityId
                		var ContactSource = daata.ContactSourceId
                		var ContactAssignTo = daata.ContactAssignToId
                		 
						$("#Salutation").val(Salutation);
						$("#FirstName").val(FirstName);
						$("#LastName").val(LastName);
						$("#Email").val(Email);
						$("#Mobile").val(Mobile);
						$("#AlternateMobile").val(AlternateMobile);
						//$(".TypeOFContact").val(TypeOFContact);
						$("input[name=TypeOFContact]").each(function() {
						   if($( this ).val() == TypeOFContact)
						   {
						   	$( this ).prop( "checked", true );
						   }
						});
						$("#Role").val(Role);
						$("#Nationality").val(Nationality);
						$("#ContactSource").val(ContactSource);
						$("#ContactAssignTo").val(ContactAssignTo);
						$("#ContactAssignTo").val(Nationality);
 					}
				}
            });
			}else
			{
				alert("Please Select Contact One ");
			}
			
		});
         

        $(".contact_profile").click(function(){
        	$(".contact_profile").removeClass("active");
           $(this).addClass("active");
        	var profile_id = $(this).data('profile_id');
        	$('#EditProfile').data('contactProfileId',profile_id);
        	get_contact_detail(profile_id);
        });
        $("#NotesTab").click(function(){
        	 
          var contactProfileId = $('#EditProfile').data('contactProfileId');
		 
		 
     	if(contactProfileId)
     	{
     		 
     		get_note_contact(contactProfileId);
     	}
        	 
        	
        });
    });
     function get_contact_detail(id)
     {
     	$.ajax({
                url: "<?=base_url()?>vendor/salespipeline/get_contact_detail/"+id,
                type: 'post',
                dataType: "json",
                success: function(response){
                	if(response.status =='error')
                	{
                		alert(response.message);
                	}else
                	{
                		var daata = response.message;
                		var Salutation = daata.Salutation;
                		var FirstName = daata.FirstName;
                		var LastName = daata.LastName;
                		var Email = daata.Email;
                		var Mobile = daata.Mobile;
                		var AlternateMobile = daata.AlternateMobile;
                		var Role = daata.Role;
                		 
                		var ContactSource = daata.ContactSource;
                		var ContactAssignTo = daata.ContactAssignTo;
                		var ContactRoleName = daata.RoleName;
                		 
                		$("#UserTitle").html(FirstName);
                		$("#SalesName").html(FirstName);
                		$("#SalesEmail").html(Email);
                		$("#SalesMobile").html(Mobile);
                		$("#SalesAlterMobile").html(AlternateMobile);
                		$("#SalesSource").html(ContactSource);
                		$("#SalesAssignTo").html(ContactAssignTo);
                		$("#UserDesignation").html(ContactRoleName);
                		 

						 
 					}
				}
            });
     }

     function get_note_contact(id)
     {
     	
     	
     		  	$.ajax({
                url: "<?=base_url()?>vendor/salespipeline/get_note_contact/"+id,
                type: 'post',
                dataType: "json",
                success: function(response){
                	if(response.status =='error')
                	{
                		alert(response.message);
                	}else
                	{
                		 
                		$("#ContentNotes").html('hello');



                		 

						 
 					}
				}
            });


   
     }
      </script>
 
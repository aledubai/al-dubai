<!--Add Contact themeModal Start-->
<!--<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/select2.min.css">-->
 
<div class="themeModal hidden" id="addConModal1">
	<div class="themeModalCon" style="width: 750px; position: absolute; left: 70%; top: 58%;transform: translate(-50%, -50%);">
		
		<form action="<?=base_url()?>vendor/salespipeline/insertcontact" method="POST" id="contactForm">
			<div class="modal-content">
				<div class="modal-header">
					<div class="col-sm-12">
		                <span class="themeModalBtnClose" >x</span>
		            </div>
	                <h3 class="modal-title">Contact Details</h3>
	                <input type="hidden" name="ContactActionMode" id="ContactActionMode" value="Add" />
	                <input type="hidden" name="ContactID" id="ContactID" value=''/>
	            </div>

				<div class="modal-body">
					<div class="row">
						<div class="col-sm-12">
				            <span id="contactmessage" ></span>
				        </div>
					</div>
	            	<h6 style="margin: 0px;">Fields marked with <span class="text-danger">*</span> are mandatory</h6>
	            	<div >
	            		<div class="box-body">
		            		<div class="row">
			            		<div class="col-md-3">
			            			<div class="form-row">
					                    <label for="Salutation" class="control-label">Salutation:</label>
					                    <select class="form-control input-sm" name="Salutation" id="Salutation">
							                  
							                 <?php foreach ($SalutaionList as $k =>$v){
		                                        ?>
		                                        <option value="<?=$k ?>"><?= $v ?></option>
		                                        <?php } 
		                                        ?>
							            </select>
					                </div>
			            		</div>
			            		
				            		<div class="col-md-5">
				            			<div class="form-row ">
						                    <label for="FirstName" class="control-label">First Name:<span class="text-danger">*</span></label>
						                    <input type="text" class="form-control input-sm inputName" id="FirstName" name="FirstName" placeholder="Example: Mohammad" required >
						                </div>
				            		</div>
				            	
			            		<div class="col-sm-4">
			            			<div class="form-row">
					                    <label for="LastName" class="control-label">Last Name:<span class="text-danger">*</span></label>
					                     <input type="text" class="form-control input-sm inputName" id="LastName" name="LastName" placeholder="Example: Ahmad" required />
					                </div>
			            		</div>
			            	</div>

			            	<div class="row">
			            		<div class="col-sm-12" style="margin-top: 8px;">
			            			<div class="form-row ">
					                    <label for="Email" class="control-label">Email:</label>
					                     <input type="text" class="form-control input-sm" id="Email" name="Email" placeholder="Eg: abc@gmail.com"/>
					                </div>
			            		</div>
			            	</div>

			            	<div class="row">
			            		
				            		<div class="col-md-6" style="margin-top: 8px;">
				            			<div class="form-row ">
						                    <label for="Mobile" class="control-label">Mobile:<span class="text-danger">*</span></label>
						                    <input type="text" class="form-control input-sm" id="Mobile" name="Mobile" placeholder="Eg: +971234567890" required >
						                </div>
				            		</div>
				            	
			            		<div class="col-sm-6" style="margin-top: 8px;">
			            			<div class="form-row ">
					                    <label for="AlternateMobile" class="control-label">Alternate Mobile:</label>
					                     <input type="text" class="form-control input-sm" id="AlternateMobile" name="AlternateMobile">
					                </div>
			            		</div>
			            	</div>
			            	<div class="row">
			            		<div class="col-md-6" style="margin-top: 8px;">
				            			<div class="form-row ">
						                    <label for="Mobile" class="control-label">Type Of Contact:<span class="text-danger">*</span></label>

						                    <div class="row">
					                    	<?php foreach ($listTypeOfContact as $k =>$v){ ?>
								                <div class="col-sm-6">
								                    <div class="form-row"> 
								                        <input required type="radio" name="TypeOFContact" id="TypeOFContact<?=$k?>" value="<?=$k?>"
								                        	 <?php echo (isset($PropertyLandlordData->TypeOFContact) && $PropertyLandlordData->TypeOFContact ==$k ) ?  'checked' : '';?>
								                         >&nbsp;&nbsp;&nbsp;
								                        <label for="TypeOFContact<?=$k?>" ><?=$v?></label>
								                    </div>    
								                </div>
								            <?php } ?>
					                    	 
					                    </div>
					                </div>
				            	</div>
				            	<div class="col-sm-6" style="margin-top: 8px;">
			            			<div class="form-row ">
					                    <label for="Role" class="control-label">Role:</label>
				                        <select class="form-control input-sm select21" id="Role" name="Role">
		                     			<?php foreach ($RoleList as $k =>$v){
	                                        ?>
	                                        <option value="<?=$k ?>"  ><?= $v ?></option>
	                                        <?php } 
	                                    ?>
						                     	
				                     	</select>
					                </div>
			            		</div>
			            	</div>
			            	<div class="row">
			            		<div class=" ">
				            		<div class="col-md-6" style="margin-top: 8px;">
				            			<div class="form-row ">
						                    <label for="Nationality" class="control-label">Nationality:</label>
						                     
						                     <select name="Nationality" id="Nationality" class="form-control input-sm">
						                     	<option value="">Select</option>
						                     	
						                     	<?php foreach ($listNationality as $k =>$v){
		                                        ?>
		                                        <option value="<?=$k ?>"><?= $v ?></option>
		                                        <?php } 
		                                        ?>
						                     </select>
						                </div>
				            		</div>
				            	</div>


			            		<div class="col-sm-6" style="margin-top: 8px;">
			            			<div class="form-row ">
				                    	<label for="ContactSource" class="control-label"><i class="fa fa-thermometer-full" aria-hidden="true"></i>
										<i class="fa fa-address-book" aria-hidden="true"></i>Source:</label>
										<select name="ContactSource" id="ContactSource" class="form-control input-sm">
											<option value="">Select</option>
											<?php foreach ($listSecure as $k =>$v){
											?>
											<option value="<?=$k ?>"><?= $v ?></option>
											<?php } 
											?>
										</select>
						                     
					                </div>
			            		</div>
			            	</div>
			            	<div class="row">
			            		<div class="col-sm-12" style="margin-top: 8px;">
			            			<div class="form-row ">
					                    <label for="ContactAssignTo" class="control-label">Assign To:<span class="text-danger">*</span></label>
					                    <div class="input-group">
					                    	<select name="ContactAssignTo" id="ContactAssignTo" class="form-control input-sm" required>
						                     	<option value="">Select</option>
						                     	<?php foreach ($listAssignTo as $k =>$v){
		                                        ?>
		                                        <option value="<?=$k ?>"><?= $v ?></option>
		                                        <?php } 
		                                        ?>
						                     </select>
						                   <span class="input-group-addon"><i class="fa fa-user" style="color: #e87e04;"></i></span>
					                    </div>
					                       
					                </div>
			            		</div>
			            	</div>
		            	</div>
	            	</div>
	            	
				</div>


				<div class="modal-footer">
					 <div class="form-group pull-right"> 
	                    <button type="button" class="btn btn-outline-rc BtnClose"  id="resetBtnFeature" >Cancel</button>&nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-rc"  >Submit</button>&nbsp;&nbsp;&nbsp;  
	                </div>
				</div>
			</div>	
		</form><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<!--Script For select2 js -->
<!--<script type="text/javascript"  src="<?=base_url()?>assets/js/select2.min.js" ></script>-->
<script>
	function setblank()
	{
		setTimeout(function(){ 
			$("#contactmessage").html('');
			$(".themeModal").addClass("hidden");
		 }, 3000);
	}
    $(function() {
        $("#contactForm").on('submit', function(e) {
            e.preventDefault();

            var contactForm = $(this);

            $.ajax({
                url: contactForm.attr('action'),
                type: 'post',
                data: contactForm.serialize(),
                success: function(response){
                    
                    if(response.status == 'success') {
                    	$("#contactmessage").removeClass( "text-danger" );
                        $("#contactmessage").addClass( "text-success" );
                       	$("#contactForm")[0].reset();
                       	setblank();
                    }
                    if(response.status == 'error') {

                    	$("#contactmessage").removeClass( "text-success" );
                        $("#contactmessage").addClass( "text-danger" );
                         
                    }
                    $("#contactmessage").html(response.message);
                    	 
                }
            });
        });

    });

</script>
<!--Add Contacrt themeModal END-->

<!--Add Contacrt themeModal Start-->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/select2.min.css">

<style>
	@media (min-width: 768px)
	{
		.modal-dialog { margin: 4% 56%; }		
	}
</style>
<div class="modal" id="AddContactModal"  >
	<div class="modal-dialog" >
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span></button>
                	<h4 class="modal-title">Add Contact</h4>
                	
                	<input type="hidden" name="landlordID" id="landlordID" value="<?php
                                        echo (isset($PropertyLandlordData->id) && $PropertyLandlordData->id !== '') ? ($PropertyLandlordData->id) : '';
                                    ?>"  >
            </div>

			<div class="modal-body">
            	<h6 style="margin: 0px;">Fields marked with <span class="text-danger">*</span> are mandatory</h6>
            	<div >
            	<!--<pre>-->
            	<?php
            		//print_r($PropertyLandlordData);

            	?>
            <!--</pre>-->
            		<div class="box-body">
	            		<div class="row">
		            		<div class="col-md-3">
		            			<div class="form-row">
				                    <label for="Salutation" class="control-label">Salutation:</label>
				                    <select class="form-control input-sm" name="Salutation" id="Salutation">
						                 <option value="">Select</option>
						                 <?php foreach ($SalutaionList as $k =>$v){
	                                        ?>
	                                        <option value="<?=$k ?>" 
	                                        	<?php echo (isset($PropertyLandlordData->Salutation) && $PropertyLandlordData->Salutation == $k) ? 'selected' : '';?> ><?= $v ?></option>
	                                        <?php } 
	                                        ?>
						            </select>
				                </div>
		            		</div>
		            		<div class=" ">
			            		<div class="col-md-5">
			            			<div class="form-row ">
					                    <label for="FirstName" class="control-label">First Name:<span class="text-danger">*</span></label>
					                    <input type="text" class="form-control input-sm inputName" id="FirstName" name="FirstName" placeholder="Example:Mohammad" value="<?php echo (isset($PropertyLandlordData->FirstName) && $PropertyLandlordData->FirstName !== '') ? $PropertyLandlordData->FirstName : '';?>" />
					                </div>
			            		</div>
			            	</div>
		            		<div class="col-sm-4">
		            			<div class="form-row ">
				                    <label for="LastName" class="control-label">Last Name:<span class="text-danger">*</span></label>
				                     <input type="text" class="form-control input-sm inputName" id="LastName" name="LastName" placeholder="Example:Ahmad" value="<?php echo (isset($PropertyLandlordData->LastName) && $PropertyLandlordData->LastName !== '') ? $PropertyLandlordData->LastName : '';?>" />
				                </div>
		            		</div>
		            	</div>
		            	<div class="row">
		            		<div class="col-sm-12">
		            			<div class="form-row ">
				                    <label for="Email" class="control-label">Email:</label>
				                     <input type="email" class="form-control input-sm" id="Email" name="Email" placeholder="E.g:xxx@gmail.com" value="<?php echo (isset($PropertyLandlordData->Email) && $PropertyLandlordData->Email !== '') ? $PropertyLandlordData->Email : '';?>" />
				                </div>
		            		</div>
		            	</div>
		            	<div class="row">
		            		<div class=" ">
			            		<div class="col-md-6">
			            			<div class="form-row ">
					                    <label for="Mobile" class="control-label">Mobile:<span class="text-danger">*</span></label>
					                    <input type="text" class="form-control input-sm validMobile numberOnly" id="Mobile" name="Mobile" placeholder="E.g:971505667483" value="<?php echo (isset($PropertyLandlordData->Mobile) && $PropertyLandlordData->Mobile !== '') ? $PropertyLandlordData->Mobile : '';?>" maxlength="12" />
					                </div>
			            		</div>
			            	</div>
		            		<div class="col-sm-6">
		            			<div class="form-row ">
				                    <label for="AlternateMobile" class="control-label">Alternate Mobile:</label>
				                     <input type="text" class="form-control input-sm numberOnly " id="AlternateMobile" name="AlternateMobile" value="<?php echo (isset($PropertyLandlordData->AlternateMobile) && $PropertyLandlordData->AlternateMobile !== '') ? $PropertyLandlordData->AlternateMobile : '';?>" maxlength="12" />
				                </div>
		            		</div>
		            	</div>
		            	<div class="row">
		            		<div class=" ">
			            		<div class="col-md-6">
			            			<div class="form-row ">
					                    <label class="control-label">Type Of Contact:<span class="text-danger">*</span></label>
					                    <div class="row">
					                    	<?php

								                

					                    	 	foreach ($listTypeOfContact as $k =>$v){ 

  																	 
					                    	 	?>
								                <div class="col-sm-6">
								                    <div class="form-row"> 
								                        <input type="radio" name="TypeOFContact" id="TypeOFContact<?=$k?>" value="<?=$k?>"
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
		            		<div class="col-sm-6">
								<div class="form-row ">
				                    <label for="Role" class="control-label">Role:</label>
				                     <select class="form-control input-sm select2" id="Role[]" name="Role[]" multiple="">
				                     	
				                     	
				                     	<?php foreach ($RoleList as $k =>$v){
	                                        ?>
	                                        <option value="<?=$k ?>"  
					                            <?php 
					                            if(isset($PropertyLandlordData->Role) && $PropertyLandlordData->Role !== '')
				                                { 
				                                    $EncodedRole = $PropertyLandlordData->Role;
				                                        $RoleData = json_decode($EncodedRole);
				                                        foreach ($RoleData as $value) {
				                                        	 if($value==$k)
				                                        	 {
				                                        	 	echo "Selected";
				                                        	 }
				                                        }
				                                    } 
				                                ?> ><?= $v ?></option>
	                                        <?php } 
	                                        ?>
				                     	
				                     </select>
				                </div>
		            		</div>
		            	</div>
		            	<div class="row">
		            		<div class=" ">
			            		<div class="col-md-6">
			            			<div class="form-row ">
					                    <label for="Nationality" class="control-label">Nationality:<span class="text-danger">*</span></label>
					                     
					                     <select name="Nationality" id="Nationality" class="form-control input-sm">
					                     	<option value="">Select</option>
					                     	
					                     	<?php foreach ($listNationality as $k =>$v){
	                                        ?>
	                                        <option value="<?=$k ?>"  <?php echo (isset($PropertyLandlordData->Nationality) && $PropertyLandlordData->Nationality ==$k ) ?  'Selected' : '';?> ><?= $v ?></option>
	                                        <?php } 
	                                        ?>
					                     </select>
					                </div>
			            		</div>
			            	</div>
		            		<div class="col-sm-6">
		            			<div class="form-row ">
				                    <label for="ContactSource" class="control-label">Source:</label>
				                      <select name="ContactSource" id="ContactSource" class="form-control input-sm">
					                     	<option value="">Select</option>
					                     	<?php foreach ($listSecure as $k =>$v){
	                                        ?>
	                                        <option value="<?=$k ?>" <?php echo (isset($PropertyLandlordData->ContactSource) && $PropertyLandlordData->ContactSource ==$k ) ?  'Selected' : '';?> 
	                                        ><?= $v ?></option>
	                                        <?php } 
	                                        ?>
					                     </select>
					                     
				                </div>
		            		</div>
		            	</div>
		            	<div class="row">
		            		<div class="col-sm-12">
		            			<div class="form-row ">
				                    <label for="ContactAssignTo" class="control-label">Assign To:</label>
				                    <div class="input-group">
				                    	<select name="ContactAssignTo" id="ContactAssignTo" class="form-control input-sm">
					                     	<option value="">Select</option>
					                     	<?php foreach ($listAssignTo as $k =>$v){
	                                        ?>
	                                        <option value="<?=$k ?>"  <?php echo (isset($PropertyLandlordData->ContactAssignTo) && $PropertyLandlordData->ContactAssignTo ==$k ) ?  'Selected' : '';?> ><?= $v ?></option>
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
				<button type="button" class="btn  btn-outline-rc" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-rc" data-dismiss="modal">Submit</button>
			</div>
		</div>
            <!-- /.modal-content -->
	</div>
          <!-- /.modal-dialog -->
</div>
<script type="text/javascript"  src="<?=base_url()?>assets/js/select2.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function() {
	    $('.select2').select2();
	});
</script>
<!--Add Contacrt themeModal Start-->
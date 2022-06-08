<!-- Style Tag-->
<style>
	.custom-file-input::-webkit-file-upload-button{
		visibility: hidden;
        width: 120px;
        display: inline-block;
		color: green;
		background: #ffffff;
		border-color: green;
	}
	.custom-file-input::before
	{
        
		content: 'Choose Image';
        display: inline-block;
        border: 1px solid #188c62;
        border-radius: 3px;
        padding: 5px 8px;
        outline: none;
        white-space: nowrap;
        -webkit-user-select: none;
        cursor: pointer;
        font-weight: 400;
        background-color: #ffffff !important;
        color: #188c62 ;

	}
</style>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
    <section class="content-header">
        <h1 class="text-left"><i class="fa fa-user" aria-hidden="true"></i>Image Bank<small>Add, Edit</small>
        </h1>   
     </section>



    <section class="content">

        <div class="box">

        	<!-- Body Content Starts-->
            <div class="box-body">
                <div class="row">

                    <!-- First Column Starts-->

                    <div class="col-sm-3">
                        <label for="CompanyTitleInArabic" class="control-label">NAME SELECTED IN SELECT FIELD</label>
                    </div>

                	<!-- Second column start-->

                    <div class="col-sm-2">
                        <input type="file" class="custom-file-input pull-right" name="uploadLogo" multiple id="uploadLogo" style="width: 130px;">
                    </div>

                    <div class="col-sm-2">
                        <input type="file" class="custom-file-input" name="uploadLogo" multiple id="uploadLogo" style="width: 130px;">
                    </div>

                    <!-- Third Column start-->

                    <div class="col-sm-5">
                        	<select  class="form-control input-sm" name="StaffTeam" id="StaffTeam" title="Team">
								<option value="">Select</option>
									<?php foreach ($listAssignTo as $k =>$v){
									    ?>
									<option value="<?=$k ?>"><?= $v ?></option>
									<?php } ?>
								</select>
                    </div>
                </div>






               



            </div>






            
           
            
        </div>
    </section>
</div>

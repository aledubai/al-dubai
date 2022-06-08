
<!--Gallery Image themeModal Start-->
	<div class="themeModal hidden" id="seoModal1">
		<div class="themeModalCon">
			<div class="row">  
	            <!-- col-12-->
				<div class="col-sm-12">
					<span class="themeModalBtnClose" >x</span>
				</div>
				<!--// col-12-->  
	            <!-- col-12-->
				<div class="col-sm-12">				
					<h3 class="text-center" ><p class="text-center" >

					</p>SEO DATA</h3>
					 
					<div class="row" style="margin-top: 50px;">

						<div class="col-sm-4">
	                        <input type="text" class="form-control input-sm" name="meta_title" id="meta_title" placeholder="Enter Meta Title" value="<?php echo (isset($PropertyData->meta_title) && $PropertyData->meta_title !== '') ? $PropertyData->meta_title : '';?>" />
	                    </div>

	                    <div class="col-sm-4">
	                        <input type="text" class="form-control input-sm" name="meta_description" id="meta_description" placeholder="Enter Meta Description" value="<?php echo (isset($PropertyData->meta_description) && $PropertyData->meta_description !== '') ? $PropertyData->meta_description : '';?>">
	                    </div>
	                    
	                    <div class="col-sm-4">
	                        <input type="text" class="form-control input-sm" name="meta_alt" id="meta_alt" placeholder="Enter Alt Name" value="<?php echo (isset($PropertyData->meta_alt) && $PropertyData->meta_alt !== '') ? $PropertyData->meta_alt : '';?>">
	                    </div>


                	</div>


				</div>
			</div>
			<br>
			 
			<div class="row"> 
				<!--// col-12-->  
	            <!-- col-12-->
	            <div class="col-sm-12 mt-4">
	                <div class="form-group pull-right   "> 
	                     
	                    <button type="button" class="btn btn-rc  BtnClose" id="doneBtnFeature" >Done</button>&nbsp;&nbsp;&nbsp;  
	                </div>    
	            </div>
	            <!--// col-12-->
	        </div>
	    </div>    
	</div>
	<!-- Script For Upload Image end-->
<!--Gallery Image themeModal end-->

<!--Gallery Image themeModal Start-->
	<div class="themeModal hidden" id="imageModal1">
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
						<i class="fa fa-file-image-o" aria-hidden="true"></i>
					</p>PHOTOS</h3>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="sortImage" id="sortImage" value="ASC" />
							Sort Image by Order of Clicking
							
							 <input type="hidden" name="imageID" id="imageID" value="<?php
                                        echo (isset($PropertyImagesData['id']) && $PropertyImagesData['id'] !== '') ? ($PropertyImagesData['id']) : '';
                                    ?>"  >
						</label>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div id="preview">
					 <?php 
 
					 	if( !empty($PropertyImagesData) && !empty($PropertyImagesData))
					 	{ 
							$PropertyImagesData = $PropertyImagesData;
							if(isset($PropertyImagesData['image']) && $PropertyImagesData['image'] !=='')
							{
								$PropertyImagesDataVal = json_decode($PropertyImagesData['image']);
							$PropertyImagesTitle = json_decode($PropertyImagesData['Title']);
								 

							foreach ($PropertyImagesDataVal as $k =>$v ){ 
								if(isset($k) &&  $k !=='')
								{
									?>
									<div class="col-sm-4 mt-4 alert alert-secondary box-shadow-rc alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										<img style="height:160px;width: 100%;" src="<?=base_url()?>/uploads/property/<?=$v?>" class="thumb">
										<input type="text" required readonly="" style="width:100%;" name="imageName[]" value="<?=$PropertyImagesDataVal[$k]?>" >
									</div>
									<?php     
								}
							} 
							}
							 
							
                              ?>
                            
                             
                        
                    <?php } ?>
					
				</div>
			</div>
			<div class="row">
				<!--// col-12-->  
	            <!-- col-12-->
				<div class="col-sm-12 mt-4" >
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="uploadImages" multiple id="uploadImages" style="width: 130px; color: green;">
						<button  type="button" id="imageBlank" class="btn btn-success btn-rc" >+ Image Blank</button>  
					</div>                                                                   
				</div>
				<!--// col-12-->  
	            <!-- col-12-->
				<div class="col-sm-12">
                    <small  >Press CTRL key while selecting images to upload multiple images at once (JPG/Png, Min 800X600)</small>
                    <br>
                    <small  >The images highlighted with a <span style="color: #e0ad1d;">yellow</span> border are low quality images.</small>
				</div>
			</div>
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
 
	<!-- Script For Upload Image start-->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$("#uploadImages").change(function (e) {
 				 
				if(this.disabled){
					return alert('File upload not supported!');
				}
				var F = this.files;
				if (F && F[0]) {
					for (var i = 0; i < F.length; i++) {
						readImage(F[i],i);
					}
				}
			});

			$('#uploadImages').on('change', function(e){
				e.preventDefault();  
				if($('#uploadImages').val() == '')  
				{  
					alert("Please Select the File");  
				}  
			else 
			{  
				var form_data = new FormData();
				var ins = document.getElementById('uploadImages').files.length;
				for (var x = 0; x < ins; x++) {

					form_data.append("files[]", document.getElementById('uploadImages').files[x]);
				}
				 
				$.ajax({  
				url:"<?php echo base_url(); ?>vendor/ajax_upload_file/multipleImageStore",   
				method:"POST",  
				data:form_data,  
				contentType: false,  
				cache: false,  
				processData:false,  
				dataType: "json",
				success:function(res)  
				{  

					
					for(var imgindex = 0; imgindex < res.length; imgindex++)
					{

						 document.getElementById('imageName'+imgindex).value = res[imgindex];
					}
					 
				}  
				});  
			}  
			}); 




 			$( "#preview" ).sortable();
 			$( "#preview" ).disableSelection();
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


 
		$('#preview').append('<div class="col-sm-4 mt-4 alert alert-secondary box-shadow-rc alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> '+
				'<img style="height:160px;width: 100%;" src="' + this.src + '" class="thumb">' +'<input type="text" readonly required name="imageName[]"  id="imageName'+index+'" style="width:100%;"></div>');
		};
		image.onerror= function() {
			alert('Invalid file type: '+ file.type);return false;
		};      
	};
}
</script> 
	<!-- Script For Upload Image end-->
<!--Gallery Image themeModal end-->
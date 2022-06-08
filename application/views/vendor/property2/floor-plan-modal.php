<!--Floor Plan Modal Start-->
<div class="themeModal hidden" id="FloorPlanModal1">
    <div class="themeModalCon">
        <div class="row">
		
			<!-- col-12-->
            <div class="col-sm-12">
                <span class="themeModalBtnClose" >x</span>
            </div>
			<!--// col-12-->
			<!-- col-12-->
			
			<input type="hidden" name="planID" id="planID" value="<?php
                                        echo (isset($PropertyPlansData['id']) && $PropertyPlansData['id'] !== '') ? ($PropertyPlansData['id']) : '';
                                    ?>"  >
            <div class="col-sm-12">
               
                <h3 class="text-center" > <p class="text-center" ><i class="fa fa-puzzle-piece" aria-hidden="true"></i></p>
                FLOOR PLANS</h3>
                <small><span class="text-danger">Floor plans uploaded in this section will not be displayed on aleizba.com.</span> <span>To add floorplans for your listings on aleizba.com please login to your Portfolio account.</span></small>
			</div>
			<!--// col-12-->
		</div>
		<br><br>
        <div class="row">
            <div id="previewFloorPlan">
            	<?php
            		  if( !empty($PropertyPlansData))
                    	{ 
                    		// echo "<pre>";
                    		// print_r($PropertyPlansData);
                    		// echo "</pre>";

                            $PropertyPlansDataVal = json_decode($PropertyPlansData['image']);
							$PropertyPlansTitle = json_decode($PropertyPlansData['Title']);
							if(isset($PropertyPlansDataVal) && $PropertyPlansDataVal !=='')
							{
								foreach ($PropertyPlansDataVal as $k =>$v ){ 
									if(isset($k) &&  $k !=='')
									{
										?>
										<div class="col-sm-4 mt-4 alert alert-secondary box-shadow-rc alert-dismissable">
						            		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						            		<img style="height:160px;width: 100%;" src="<?=base_url()?>uploads/propertyplans/<?=$v?>" class="thumb" class="thumb">
											<input type="text" style="width: 100%;" name="floorTitle[]" placeholder="Enter Title" value="<?=$PropertyPlansTitle[$k];?>">
											<input type="text" style="width:100%" readonly="" name="imagePlanName[]" value="<?=$v?>" />
										</div>
									<?php     
									}
								} 
							}
							
                        }

            	?>

            </div>
        </div>
        <div class="row">
			<!--// col-12-->
			<!-- col-12-->
			<div class="col-sm-12 mt-4" >
                <div class="custom-file">
                    <input type="file" class="custom-file-input custom-file-input2" name="uploadFloorPlan" multiple id="uploadFloorPlan" style="width: 140px;">
                    <button  type="button" id="FloorPlanBlank" class="btn btn-success btn-rc" >+ Floor Plan Blank</button>  
                </div>                                                                   
            </div>
			<!--// col-12-->
			<!-- col-12-->
            <div class="col-sm-12">
                <small>Press CTRL key while selecting images to upload multiple images at once </small>
            </div>
			<!--// col-12-->
			
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
<!--Script Plan Modal Start-->
<script type="text/javascript">
		$(document).ready(function(){

			$("#uploadFloorPlan").change(function (e) {
 				 
				if(this.disabled){
					return alert('File upload not supported!');
				}
				var F = this.files;
				if (F && F[0]) {
					for (var i = 0; i < F.length; i++) {
						readImagePlan(F[i],i);
					}
				}
			});

			$('#uploadFloorPlan').on('change', function(e){
				e.preventDefault();  
				if($('#uploadFloorPlan').val() == '')  
				{  
					alert("Please Select the File");  
				}  
			else 
			{  
				var form_data = new FormData();
				var ins = document.getElementById('uploadFloorPlan').files.length;
				for (var x = 0; x < ins; x++) {

					form_data.append("files[]", document.getElementById('uploadFloorPlan').files[x]);
				}
				  
				$.ajax({  
				url:"<?php echo base_url(); ?>vendor/ajax_upload_file/multipleImagePlanStore",   
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
						 
						 document.getElementById('imagePlanName'+imgindex).value= res[imgindex];
					}
				}  
				});  
			}  
			}); 



			$( "#previewFloorPlan" ).sortable();
 			$( "#previewFloorPlan" ).disableSelection();
 			
		});


 function readImagePlan(file,index)
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
		$('#previewFloorPlan').append('<div class="col-sm-4 mt-4 alert alert-secondary box-shadow-rc alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> '+
				'<img style="height:160px;width: 100%;" src="' + this.src + '" class="thumb">' +'<input type="text" style="width: 100%;" name="floorTitle[]" placeholder="Enter Title" ><input type="text" style="width:100%" readonly name="imagePlanName[]"  id="imagePlanName'+index+'"></div>');
		};
		image.onerror= function() {
			alert('Invalid file type: '+ file.type);
		};      
	};
}
</script> 
<script type="text/javascript">














// $(document).ready(function() {
// 	if (window.File && window.FileList && window.FileReader) {
// 		$("#uploadFloorPlan").on("change", function(e) {
// 			var files = e.target.files,
// 			filesLength = files.length;
// 			for (var i = 0; i < filesLength; i++) {
// 				var f = files[i];
			 
// 			var fileReader = new FileReader();
// 			fileReader.onload = (function(e) {
// 			  var file = e.target;

// 			  $("#previewFloorPlan").append('<div class="col-sm-4 mt-4 alert alert-secondary box-shadow-rc alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> '+
// 				"<img class=\"imageThumb\" style='height:160px;width: 100%;' src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +'<input type="text" style="width: 100%;" name="floorTitle[]" placeholder="Enter Title" ></div>'); 
// 			  });
// 			fileReader.readAsDataURL(f);
// 			}
// 		});
// 	} else {
// 		alert("Your browser doesn't support to File API")
// 	}
// });
</script>
<!--Script Plan Modal End-->
<!--Floor Plan Modal End-->
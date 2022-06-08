<!--Document Floor Modal Start-->
<div class="themeModal hidden" id="DocumentFloorPlanModal1">
    <div class="themeModalCon">
        <div class="row">
		<!-- col-12-->
            <div class="col-sm-12">
                <span class="themeModalBtnClose" >x</span>
            </div>
			<!--// col-12-->
			<!-- col-12-->
            <div class="col-sm-12 text-center">
                
                <h3 class="" ><p class=" " ><i class="fa fa-file-pdf-o" aria-hidden="true"></i></p> DOCUMENT (PRIVATE FOLDER)</h3>
                <small ><span class="text-danger">Please Do Not Upload Trucheck <sup>TM</sup> Documents in this section.</span></small>
			</div>
		</div>
        <div class="alert alert-primary" role="alert" style="background-color: #d7e2fd;">
                    Drag And Drop Items To change order.

                    
                    <input type="hidden" name="docID" id="docID" value="<?php
                                        echo (isset($PropertyDocsData->id) && $PropertyDocsData->id !== '') ? ($PropertyDocsData->id) : '';
                                    ?>"  >
        </div>
        <div class="row">
            <div id="previewDocument">
                     <?php
                      if( !empty($PropertyDocsData['image']))
                        { 

                            $PropertyDocsDataVal = json_decode($PropertyDocsData['image']);
                            $PropertyDocsTitle = json_decode($PropertyDocsData['Title']);
                            
                            foreach ($PropertyDocsDataVal as $k =>$v ){ 
                                if(isset($k) &&  $k !=='')
                                {
                                    ?>
                                    <div class="col-sm-4 mt-4 alert alert-secondary box-shadow-rc alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <i class="fa fa-file fa-5x" style="height:160px;width: 100%;" ></i>
                                        <input type="text" style="width: 100%;" name="DocsTitle[]" placeholder="Enter Title" value="<?=$PropertyPlansTitle[$k];?>">
                                        <input type="hidden" name="docsName[]" value="<?=$v?>" />
                                    </div>
                                <?php     
                                }
                            } 
                        }

                ?>
            </div>
        </div>
        <div class="row">
		<!-- col-12-->
			<div class="col-sm-12 mt-4" >
                <div class="custom-file">
                    <input type="file" class="custom-file-input custom-file-input3" name="uploadDocument" multiple id="uploadDocument" style="width: 140px;">
                      
                 </div>                                                                   
            </div>
			<!--// col-12-->
			<!-- col-12-->
			<div class="col-sm-12">
				<small  >Press CTRL key while selecting images to upload multiple images at once </small>

			</div>
        </div>
         <div class="row">   
             
            <!-- col-12-->
            <div class="col-sm-12 mt-4">
                <div class="form-group pull-right   "> 
                    <button type="reset" class="btn btn-outline-rc BtnClose" id="resetBtnFeature" >Close</button>&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-rc  BtnClose" id="doneBtnFeature" >Done</button>&nbsp;&nbsp;&nbsp;  
                </div>    
            </div>
            <!--// col-12-->
        </div>
    </div>    
</div>

<!--Script Document Floor Modal start-->
 <script type="text/javascript">
        $(document).ready(function(){

            $("#uploadDocument").change(function (e) {
                 
                if(this.disabled){
                    return alert('File upload not supported!');
                }
                var F = this.files;
                if (F && F[0]) {
                    for (var i = 0; i < F.length; i++) {
                        readDocsPlan(F[i],i);
                    }
                }
            });

            $('#uploadDocument').on('change', function(e){
                e.preventDefault();  
                if($('#uploadDocument').val() == '')  
                {  
                    alert("Please Select the File");  
                }  
            else 
            {  
                var form_data = new FormData();
                var ins = document.getElementById('uploadDocument').files.length;
                for (var x = 0; x < ins; x++) {

                    form_data.append("files[]", document.getElementById('uploadDocument').files[x]);
                }
                  
                $.ajax({  
                url:"<?php echo base_url(); ?>userVendor/ajax_upload_file/multipleDocsStore",   
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
                         
                         document.getElementById('docsName'+imgindex).value= res[imgindex];
                    }
                }  
                });  
            }  
            }); 



            $( "#previewDocument" ).sortable();
            $( "#previewDocument" ).disableSelection();
            
        });


 function readDocsPlan(file,index)
 {
    var reader = new FileReader();
    var image  = new Image();
    reader.readAsDataURL(file);  
    reader.onload = function(_file) {
        image.src = _file.target.result; // url.createObjectURL(file);
         
        var w = this.width,
        h = this.height,
        t = file.type, // ext only: // file.type.split('/')[1],
        n = file.name,
        s = ~~(file.size/1024) +'KB';
        $('#previewDocument').append('<div class="col-sm-4 mt-4 alert alert-secondary box-shadow-rc alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-file fa-5x" style="height:160px;width: 100%;" ></i><input type="text" style="width: 100%;" name="DocsTitle[]" placeholder="Enter Title" ><input type="hidden" name="docsName[]"  id="docsName'+index+'"></div>');
        
        
              
    };
}
</script>
<!--<script type="text/javascript">
    
    $(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#uploadDocument").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i];
          
         filename = files[i].name;
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
            
          $("#previewDocument").append('<div class="col-sm-4 mt-4 alert alert-secondary box-shadow-rc alert-dismissable text-center "><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> '+
            "<i class='fa fa-file fa-5x' style='height:160px;width: 100%;' ></i>" +  filename +'<input type="text" style="width: 100%;"  name="DocumentTitle[]" placeholder="Enter Title" ></div>');
          });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>-->
<!--Script Document Floor Modal End-->
<!--Document Floor Modal End-->
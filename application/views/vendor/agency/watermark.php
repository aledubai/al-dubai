<style>
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
    .attach_btn{
        color: green;
        background: #ffffff;
        border-color:  green;
    }
    .attach_btn:hover
    {
        color: green;
        background: #ffffff !important;
        border-color:  green;
    }

    .btn-outline-rc{
        color: green;
        background: #ffffff;
        border-color:  green;
    }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-user" aria-hidden="true"></i> Watermark Setting
            <small>Add, Edit</small>
        </h1>
     </section>
    <!-- main-container-->
    <section class="content">
        <div class="box">
            <small style="margin-left: 20px; color: green; font-style: italic;"><b>Watermark is active</b></a></small>
                <!-- Body Content Starts-->
                <div class="box-body">
                    <form action="<?=base_url()?>/vendor/agency/upload_overlay_stamp" >
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 style="margin-left: 10px;"><b>WATERMARK</b></h4>
                            </div>
                            <!-- Body First Column Starts-->
                            <div class="col-sm-8">
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="water_check" class="col-sm-3 control-label"></label>
                                                <div class="col-sm-9">
                                                    <input type="checkbox" id="water_check" name="water_check" value="water_check" style="margin: 2px;">
                                                    <label for="vehicle1">Enable Watermark Settings</label> 
                                                </div>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <div class="row">
                                            <label  class="col-sm-3 control-label">Watermark Position:<span class="text-danger">*</span><span class=""></span></label>
                                                <div class="col-sm-3">
                                                    <input checked type="radio" id="water_positionLT" name="water_position" value="left_$top">
                                                    <label for="mark_status">Left Top</label><br>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="radio" id="water_positionMT" name="water_position" value="center_$top">
                                                    <label for="mark_statusOff">Mid Top</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="radio" id="water_positionRT" name="water_position" value="right_$top">
                                                    <label for="mark_statusOff">Right Top</label>
                                                </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="row">
                                            <label for="mark_status" class="col-sm-3 control-label"></label>
                                                <div class="col-sm-3">
                                                    <input type="radio" id="water_positionLC" name="water_position" value="left_$middle">
                                                    <label for="mark_status">Left Center</label><br>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="radio" id="water_positionMC" name="water_position" value="center_$middle">
                                                    <label for="water_positionMC">Mid Center</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="radio" id="water_positionRC" name="water_position" value="right_$middle">
                                                    <label for="water_positionRC">Right Center</label>
                                                </div>
                                        </div>
                                    </div>
                                        
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="mark_status" class="col-sm-3 control-label"></label>
                                                <div class="col-sm-3">
                                                    <input type="radio" id="water_positionLB" name="water_position" value="left_$bottom">
                                                    <label for="water_positionLB">Left Bottom</label><br>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="radio" id="water_positionMB" name="water_position" value="center_$bottom">
                                                    <label for="water_positionMB">Mid Bottom</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="radio"  id="water_positionRB" name="water_position" value="right_$bottom">
                                                    <label for="water_positionRB">Right Bottom</label>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label for="water_imgT" class="col-sm-3 control-label">Image Transparency:<span class="text-danger">*</span><span class=""></span></label>
                                                <div class="col-sm-3">
                                                    <div class="slidecontainer">
                                                        <input type="range"  onchange="set_align_rang();" name="range" id="range" min="1" max="100" value="50" style="width: 350px;"> 
                                                    </div>  
                                                </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label for="upload_overlay_stamp" class="col-sm-3 control-label">Watermark Image:<span class="text-danger">*</span><span class=""></span></label>
                                                <div class="col-sm-3">
                                                    <div class="btn btn-default btn-file attach_btn">
                                                    Choose Image
                                                    <input type="file" name="upload_overlay_stamp" id="upload_overlay_stamp" style="background: #ffffff;" onchange="upload_stamp();" />
                                                    </div>  
                                                </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="row">
                                            <label for="ApplyForAllListing" class="col-sm-3 control-label"></label>
                                                <div class="col-sm-9">
                                                    <input type="checkbox" id="ApplyForAllListing" name="ApplyForAllListing" value="1" style="margin: 2px;">
                                                    <label for="vehicle1">Update watermark for all the listings</label> 
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Body Second Column Starts-->


                            <div class="col-sm-4">
                                <div class="col-sm-2">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div id="imagePreview">
                                                     <img src="<?=base_url()?>uploads/agency/watermark/main.jpg" id="main_image"  name="main_image"  width="315" height="200">
                                                </div>
                                               <input type="text" name="watermarkName" id="watermarkName"  >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="form-group pull-right"> 
                                            <button type="reset" class="btn btn-outline-rc" >Cancel</button>&nbsp;&nbsp;&nbsp;
                                            <button type="Submit" class="btn btn-rc" ><i class="fa fa-check" aria-hidden="true"></i>Submit</button>&nbsp;&nbsp;&nbsp;  
                                        </div>                          
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    $(document).ready(function (){
         
    });
    function set_align_rang()
    {

        var range = document.getElementById('range').value;
        var watermarkName = document.getElementById('watermarkName').value;

 alert(watermarkName);
        if(watermarkName !=='')
        {
            alert(watermarkName);
            var water_position_val  = '';
            var els = document.getElementsByName('water_position');
                for (var i=0;i<els.length;i++){
                    if ( els[i].checked ) {
                        water_position_val = els[i].value;
                    }
                }

                var form_data = new FormData();
                 form_data.append("range", range);
                form_data.append("water_position", water_position_val);
                form_data.append("watermarkName", watermarkName);

                     
             $.ajax({  
                    url:"<?php echo base_url(); ?>vendor/ajax_upload_file/watermark_setting_stamp",   
                    method:"POST",  
                    data:form_data,  
                    contentType: false,  
                    cache: false,  
                    processData:false,  
                    dataType: "json",
                    success:function(res)  
                    {
                       alert(res);
                  $('#imagePreview').html(res);
                    //      $('#imagePreview').html(' <img src="<?=base_url()?>uploads/agency/watermark/'+res+'" id="main_image"  name="main_image" width="315" height="200">');
                        
                    //       $("#watermarkName").val(res);
                     
                   }  

            }); 

        
        }
    }
    function upload_stamp()
    {
         if($('#upload_overlay_stamp').val() == '')  
                {  
                    alert("Please Select the File");  
                }  
            else 
            {  

            




                var form_data = new FormData();
                var ins = document.getElementById('upload_overlay_stamp').files.length;
                var range = document.getElementById('range').value;
                
                var water_position_val  = '';
                    var els = document.getElementsByName('water_position');
                    for (var i=0;i<els.length;i++){
                      if ( els[i].checked ) {
                        water_position_val = els[i].value;
                      }
                    }

                    form_data.append("files[]", document.getElementById('upload_overlay_stamp').files[0]);
                    form_data.append("range", range);
                    form_data.append("water_position", water_position_val);
                
                 
                $.ajax({  
                url:"<?php echo base_url(); ?>vendor/ajax_upload_file/watermark_upload_stamp",   
                method:"POST",  
                data:form_data,  
                contentType: false,  
                cache: false,  
                processData:false,  
                dataType: "json",
                success:function(res)  
                {
                     $('#imagePreview').html(' <img src="<?=base_url()?>uploads/agency/watermark/main_thumb.jpg" id="main_image"  name="main_image" width="315" height="200">');

                     $("#watermarkName").val(res);
                    
                     
                }  
                });  
            }
    }
</script>
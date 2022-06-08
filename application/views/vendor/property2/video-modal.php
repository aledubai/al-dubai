
<!-- Video Modal themeModal Start -->
<div class="themeModal hidden" id="videoModal1">
    <div class="themeModalCon" style="width: 450px; position: absolute; left: 50%; top: 50%;transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col-sm-12">
                    <span class="themeModalBtnClose" >x</span>
                </div>

                <div class="col-sm-12">
                    <h3 class="text-center" ><i class="fa fa-video-camera" aria-hidden="true"></i>
                    
                </div>

                <div class="col-sm-12">
                    <h4 class="text-center" ><b>VIDEOS<b></h4>
                        
                         <input type="hidden" name="videoID"  id="videoID" value="<?php
                                        echo (isset($PropertyVideoData->id) && $PropertyVideoData->id !== '') ? ($PropertyVideoData->id) : '';?>"  >
                </div>
                <div class="videoContent">
                    <?php

 
                    if( !empty($PropertyVideoData))
                    { 

                            $VideoTitleData = json_decode($PropertyVideoData['VideoTitle']);
                            $VideoLinkData = json_decode($PropertyVideoData['VideoLink']);
                            $VideoHostListData = json_decode($PropertyVideoData['VideoHostList']);
                            foreach ($VideoLinkData as $k =>$v )
                            {

                                 
                                     ?>
                                   <div class="col-sm-12 contentItem">
                                        <div class="alert alert-light alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <hr>
                                            <div class="form-group">
                                                <label  class="col-sm-3 control-label"><b>Video Title:</b></label>
                                                <div class="col-sm-9">                             
                                                    <input type="text" class="form-control input-sm"  name="VideoTitle[<?=$k?>]"
                                                         value="<?php echo (isset($VideoTitleData->$k) && $VideoTitleData->$k !== '') ? ($VideoTitleData->$k): '';?>"
                                                    />
                                                    
                                                </div>
                                            
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"><b>Video Link</b></label>
                                                <div class="col-sm-9">                             
                                                    <input type="text" class="form-control input-sm"  name="VideoLink[1]" placeholder="http://" 
                                                         value="<?php echo (isset($v) && $v !== '') ? ($v): '';?>"
                                                    />
                                                     
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label  class="col-sm-3 control-label"><b>Video Host:</b></label>
                                                <div class="col-sm-9">                                    
                                                   <select class="form-control input-sm" name="VideoHostList[1]" >
                                                        <option  value="">Select</option>
                                                        <?php foreach ($VideoHostList as $key =>$val){
                                                        ?>
                                                        <option value="<?=$key ?>"  <?php echo (isset($VideoHostListData->$k) && $VideoHostListData->$k == $key) ? ('Selected'): '';?>
                                                        >
                                                            <?= $val ?></option>
                                                        <?php } 
                                                        ?>
                                                    </select>
                                                 </div>
                                            </div>
                                        </div>
                                    </div> 
                                <?php
                                 
                            }
                       
                    }else
                    {
                          ?>
                           <div class="col-sm-12 contentItem">
                                <div class="alert alert-light alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <hr>
                                    <div class="form-group">
                                        <label  class="col-sm-3 control-label"><b>Video Title:</b></label>
                                        <div class="col-sm-9">                             
                                            <input type="text" class="form-control input-sm"  name="VideoTitle[1]">
                                            
                                        </div>
                                    
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><b>Video Link</b></label>
                                        <div class="col-sm-9">                             
                                            <input type="text" class="form-control input-sm"  name="VideoLink[1]" placeholder="http://">
                                             
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-3 control-label"><b>Video Host:</b></label>
                                        <div class="col-sm-9">                                    
                                           <select class="form-control input-sm" name="VideoHostList[1]" >
                                                <option  value="">Select</option>
                                                <?php foreach ($VideoHostList as $k =>$v){
                                                ?>
                                                <option value="<?=$k ?>"><?= $v ?></option>
                                                <?php } 
                                                ?>
                                            </select>
                                         </div>
                                    </div>
                                </div>
                            </div> 
                        <?php
                    }
                    ?>
                    
                </div>
                <div class="row">
                    <div class="col-sm-12 mt-4" >
                        <div class="custom-file">
                            <button  type="button" id="addVideos" class="btn btn-rc" ><i class="fa fa-plus-circle" aria-hidden="true"></i> Add more videos</button>  
                        </div>                                                                   
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-9 pull-right mt-4 text-right">
                    <div class="form-group"> 
                        <button type="button" class="btn btn-rc BtnClose" id="doneBtnFeature" >Done</button>
                    </div>
                </div>
            <!--// col-12-->
            </div>
        </div>    
    </div>
 <!--Script For Add More video End -->
<script>
$(document).ready(function(){
    $("#addVideos").click(function(){

        var numItems = $('.contentItem').length;
		numItems = numItems+1;
        var htmlContent = "";
            htmlContent +='<div class="col-sm-12 contentItem">';
            htmlContent += '<div class="alert alert-light alert-dismissable">';
            htmlContent += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
            htmlContent +='<hr><div class="form-group">';
            htmlContent +='<label for="empty_space" class="col-sm-3 control-label"></label>';
            htmlContent +='<div class="col-sm-9"></div>';
            htmlContent +='</div>';
            htmlContent +='<div class="form-group">';
            htmlContent +='<label class="col-sm-3 control-label"><b>Video Title:</b></label>';
            htmlContent +=' <div class="col-sm-9">';
            htmlContent +='<div class=""><input type="text" class="form-control input-sm" name="VideoTitle['+numItems+']"></div>';

            htmlContent +='</div></div>';
            htmlContent +='<div class="form-group"><label  class="col-sm-3 control-label"><b>Video Link:</b></label>';
            htmlContent +='<div class="col-sm-9"><div class="">';

            

            htmlContent +='<div class=""><input type="text" class="form-control  input-sm" name="VideoLink['+numItems+']" placeholder="http://"></div>';

            htmlContent +='</div>';
             htmlContent +='</div>';

            htmlContent +='</div>';

            htmlContent +='<div class="form-group">';

            htmlContent +='<label class="col-sm-3 control-label"><b>Video Host:</b></label>';
            htmlContent +='<div class="col-sm-9">';
            htmlContent +='<div class="">';
            htmlContent +='<select class="form-control input-sm"  name="VideoHostList['+numItems+']"><option  value="">Select</option>';
            htmlContent +='<?php foreach ($VideoHostList as $k =>$v){ ?><option value="<?=$k ?>"><?= $v ?></option><?php } ?>';

            htmlContent +='</select>';
            htmlContent +='</div>';
            htmlContent +='</div>';
            htmlContent +='</div>';
            htmlContent +='</div>';
            htmlContent +='</div>';
        $(".videoContent").append(htmlContent);
    });
});
</script>
<!--Script For Add More video End -->
<!-- Video Modal themeModal end -->
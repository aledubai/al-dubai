            
<!-- Portal Modal Start -->
<div class="themeModal hidden" id="pinModal1">
    <div class="themeModalCon" style="width: 830px;  position: absolute; left: 50%; top: 50%;transform: translate(-50%, -50%);">
        <div class="row">
            <!--col-12-->
            <div class="col-sm-12">
                <span class="themeModalBtnClose" >x</span>
            </div>
            <!--// col-12-->
            <!--col-12-->
            <div class="col-sm-12">
                <h3 class="text-center" ><i class="fa fa-paperclip" aria-hidden="true"></i>
                
            </div>
            <!--// col-12-->
            <!--col-12-->
            <div class="col-sm-12">
                <h4 class="text-center" ><b>ADD DOCUMENT</b></h4>
            </div>
            <!--// col-12-->
            <!--col-12-->

             

                    <div class="box-body col-sm-12">
                        <div class="form-group">
                            <label for="email_subject" Title="Title" class="col-sm-2 control-label">Title:</label>
                                <div class="col-sm-10">
                                      <input type="text" class="form-control" id="pin_title">
                               </div>
                        </div>
                    </div>


            

                    <div class="box-body col-sm-12">
                        <div class="form-group">
                            <label for="email_content" Title="Allowed Files" class="col-sm-2 control-label">Allowed Files:</label>
                            <div class="col-sm-10">
                                      <small><b>.doc,.docx,.pdf,.xls,.xlsx,.html,.txt,.ppt,.pptx,.jpg,.gif,.bmp,.png</b></small>
                               </div>
                                
                        </div>
                    </div>



                    <div class="box-body col-sm-12">
                        <div class="form-group">
                            <label for="email_content" Title="Upload File" class="col-sm-2 control-label">Upload File:</label>
                            <div class="col-sm-10">
                                <div class="btn btn-success btn-file" id="btn_attach">
                                Choose File
                                <input type="file" name="attachment">
                                </div>
                                      
                               </div>
                                
                        </div>
                    </div>












  <!-- col-12--> <!--Buttons -->

                    <div class="col-sm-12 mt-4">
                        <div class="form-group pull-right"> 
                            <button type="reset" class="btn BtnClose" style="color: green; border-color: green; background-color: white" id="resetBtnFeature" >Cancel</button>&nbsp;&nbsp;&nbsp; 
                            <button type="button" class="btn btn-success BtnClose" id="doneBtnFeature" ><i class="fa fa-check" aria-hidden="true" style="margin: 5px;"></i>Submit</button>&nbsp;&nbsp;&nbsp;  
                        </div>

                    </div>
            <!--// col-12-->
        </div>
    </div>    
</div>
<!-- Portal Modal End -->
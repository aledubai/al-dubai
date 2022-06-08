            
<!-- Portal Modal Start -->
<style type="text/css">
    .attach_btn{
        color: green;
    background: #ffffff;
    border: white
    }
    .attach_btn:hover{
        color: green;
    background: #ffffff !important;
    border: white;

    }
</style>
<div class="themeModal hidden" id="msgModal1">
    <div class="themeModalCon" style="width: 830px;  position: absolute; left: 50%; top: 50%;transform: translate(-50%, -50%);">
        <div class="row">
            <!--col-12-->
            <div class="col-sm-12">
                <span class="themeModalBtnClose" >x</span>
            </div>
            <!--// col-12-->
            <!--col-12-->
            <div class="col-sm-12">
                <h3 class="text-center" ><i class="fa fa-envelope" aria-hidden="true"></i>
                
            </div>
            <!--// col-12-->
            <!--col-12-->
            <div class="col-sm-12">
                <h4 class="text-center" ><b>SEND EMAIL</b></h4>
            </div>
            <!--// col-12-->
            <!--col-12-->

                    <div class="box-body col-sm-12">
                        <div class="form-group">
                            <a href="#" class="col-sm-6" style="color: black; margin-left: 130px;"><b>BCC</b></a>

                              <div class="btn btn-default btn-file attach_btn" style="right:230px; bottom: 10px;">
                              <i class="fa fa-paperclip"></i> Attach File
                              <input type="file" name="attachment" style="background: #ffffff;">
                              </div>



                            <a href="#" class="col-sm-12" style="color: black; margin-left: 130px;"><b>Email Address(es)</b></a>
                            
                                
                        </div>
                    </div>














                    <div class="box-body col-sm-12">
                        <div class="form-group">
                            <label for="email_con" Title="Email Contact" class="col-sm-2 control-label">Contact:</label>
                                <div class="col-sm-6">
                                      <input type="text" class="form-control" style="height: 50px;" id="email_con">
                               </div>
                                <div class="col-sm-4">
                                        <select class="form-control input-sm" style="height: 50px;" required="" name="email_select" id="email_select">
                                        <option value="">Select Mailing List</option>
                                        <?php foreach ($TypeList as $k =>$v){ ?>
                                        <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                        <?php } ?>
                                        </select>
                               </div>
                        </div>
                    </div>







                    <div class="box-body col-sm-12">
                        <div class="form-group">
                            <label for="email_subject" Title="Email Subject" class="col-sm-2 control-label">Subject:<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                      <input type="text" class="form-control" id="email_subject" placeholder="Enter Subject for email">
                               </div>
                        </div>
                    </div>


            

                    <div class="box-body col-sm-12">
                        <div class="form-group">
                            <label for="email_content" Title="Email Content" class="col-sm-2 control-label">Email Content:<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea Title="Email_Content" class="form-control  text-left"   name="add_content" id='email_content' class="form-control input-sm"></textarea> 
                                </div>
                        </div>
                    </div>


  <!-- col-12--> <!--Buttons -->

                    <div class="col-sm-12 mt-4">
                        <div class="form-group pull-right"> 
                            <button type="reset" class="btn BtnClose" style="color: green; border-color: green; background-color: white" id="resetBtnFeature" >Cancel</button>&nbsp;&nbsp;&nbsp; 
                            <button type="button" class="btn btn-success BtnClose" id="doneBtnFeature" >Send Email</button>&nbsp;&nbsp;&nbsp;  
                        </div>

                    </div>
            <!--// col-12-->
        </div>
    </div>    
</div>
<!-- Portal Modal End -->
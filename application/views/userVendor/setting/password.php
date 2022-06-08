<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <i class="fa fa-user" aria-hidden="true"></i> Password
        <small>Add, Edit</small>
    </h1>
</section>

    <!-- main-container-->
<section class="content">
    <div class="box">
    <!-- Content Starts Now-->
        <!-- First Column Starts-->

        <div class="box-body">
            <form action="<?=base_url()?>userVendor/setting/setting_updatePassword" method="POST" id=""  enctype="multipart/form-data" >
            <div class="row">
               
                <div class="col-sm-12">
                    <!-- Flashdata Code-->
                    <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                    ?>
                    <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                    </div>
                    <?php } 

                    ?>
                    <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                    ?>
                    <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php } ?>
                    <!-- Flashdata Code Ends-->
                </div>
                <div class="col-sm-12">
                    <h4 style="margin-left: 10px;"><b>CHANGE PASSWORD</b></h4>
                        <div class="box-body">

                            <div class="form-group">
                                <div class="row">
                                    <label for="SettingPassword" class="col-sm-3 control-label">Current Password:<span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="password" class="form-control input-sm" id="SettingPassword" name="SettingPassword" />
                                            <input type="hidden" name="hiddenPassword" value="<?=$user_data->password?>">
                                            <span class="input-group-addon"><i class="fa fa-eye" style="cursor: pointer;" id="SettingPasswordToggle"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="SettingNewPassword" class="col-sm-3 control-label">New Password:<span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="password" class="form-control input-sm" id="SettingNewPassword" name="SettingNewPassword"/>    
                                            <span class="input-group-addon"><i class="fa fa-eye" style="cursor: pointer;" id="SettingNewPasswordToggle"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="SettingConfirmPassword" class="col-sm-3 control-label">Confirm New Password:<span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="password" class="form-control input-sm" id="SettingConfirmPassword" name="SettingConfirmPassword"/>
                                            
                                            <span class="input-group-addon"><i class="fa fa-eye" style="cursor: pointer;" id="SettingConfirmPasswordToggle"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="ProfileName" class="col-sm-3 control-label"></label>
                                    <div class="col-sm-9">
                                    <button type="submit" class="btn btn-success" name="submit" id="submit"><i class="fa fa-check" aria-hidden="true"></i>Submit</button>&nbsp;&nbsp;&nbsp;
                                    </div>
                                </div>
                            </div>
  
                        </div>
                    </div>                          

            </div>
        </form>
        </div>


            <!-- Box Body Content Ends-->

    </div>
</section>
</div>


<script type="text/javascript">
     $(function() {

            $("#SettingPasswordToggle").click(function () {
                    $(this).toggleClass("fa-eye fa-eye-slash");
                   var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
                    $("#SettingPassword").attr("type", type);
            });
            $("#SettingNewPasswordToggle").click(function () {
                    $(this).toggleClass("fa-eye fa-eye-slash");
                    var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
                    $("#SettingNewPassword").attr("type", type);
            });
            $("#SettingConfirmPasswordToggle").click(function () {
                    $(this).toggleClass("fa-eye fa-eye-slash");
                    var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
                    $("#SettingConfirmPassword").attr("type", type);
            });
            
         });
        </script>











                        









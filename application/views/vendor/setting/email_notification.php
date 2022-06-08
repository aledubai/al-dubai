            
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <i class="fa fa-user" aria-hidden="true"></i> Email Notifications
        <small>Add, Edit</small>
    </h1>
</section>

    <!-- main-container-->
<section class="content">
    <div class="box">
    <!-- Content Starts Now-->
        <!-- First Column Starts-->

        <div class="box-body">
            <form action="<?=base_url()?>vendor/setting/" method="POST" id=""  enctype="multipart/form-data" >
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
                    <?php } ?>
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
                    <h4 style="margin-left: 10px;"><b>EMAIL NOTIFICATIONS</b></h4>
                        <div class="box-body">
                            <!-- Body Header-->
                            <div class="form-group">
                                <div class="row">
                                    <label for="SettingEmail" class="col-sm-3 control-label">Instant Emails:</label>
                                    <div class="col-sm-12">
                                        <?php foreach ($instantEmail as $k =>$v){ ?>
                                                <div class="checkbox" style="display: inline-block; margin-left: 20px; ">
                                                    <label for="Fstatus<?=$k?>" >
                                                        <input type="checkbox" name="FeatureStatus[<?=$k?>]" id="Fstatus<?=$k?>" ><?=$v?>
                                                    </label>
                                                </div>
                                            <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Body Header Ends-->
                            <!-- Upper Body Content Starts-->
                            <div class="form-group">
                                <div class="row">
                                    <label for="SettingReminder" class="col-sm-3 control-label">Reminders:</label>
                                    <div class="col-sm-12">
                                        <div class="col-sm-2">
                                            <?php foreach ($reminderEmail as $k =>$v){ ?>
                                                <div class="checkbox">
                                                    <label for="Fstatus<?=$k?>" >
                                                        <input type="checkbox" name="FeatureStatus[<?=$k?>]" id="Fstatus<?=$k?>" ><?=$v?>
                                                    </label>
                                                </div>
                                            <?php } ?>
                                        </div>

                                        <div class="col-sm-2">
                                            <select class="form-control input-sm" required="" name="GeneralReminder" id="GeneralReminder">
                                                <option value="">General Reminder</option>
                                                <?php foreach ($listAssignTo as $k =>$v){ ?>
                                                <option value="<?=$k ?>"><?= $v ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="col-sm-2">
                                            <select class="form-control input-sm" required="" name="Before" id="Before">
                                                <option value="">Before</option>
                                                <?php foreach ($listAssignTo as $k =>$v){ ?>
                                                <option value="<?=$k ?>"><?= $v ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>


                                        <div class="col-sm-5">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control input-sm numberAndDot price "  name="deposit_aed" id="deposit_aed" >
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-secondary btn-flat">01:00 AM</button>
                                                </span>
                                            </div>
                                            <small>Days @</small>
                                        </div>

                                        <div class="col-sm-1">
                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="col-sm-2">  
                                        </div>
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-2">
                                            <select class="form-control input-sm" required="" name="con_staff" id="con_staff">
                                                <option value="">Before</option>
                                                    <?php foreach ($listAssignTo as $k =>$v){ ?>
                                                        <option value="<?=$k ?>"><?= $v ?></option>
                                                    <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control input-sm numberAndDot price "  name="deposit_aed" id="deposit_aed" >
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-secondary btn-flat">12:00 AM</button>
                                                </span>
                                            </div>
                                            <small>Days @</small>
                                        </div>
                                        <div class="col-sm-1">
                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="col-sm-2">  
                                        </div>
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-2">
                                            <select class="form-control input-sm" required="" name="con_staff" id="con_staff">
                                                <option value="">Before</option>
                                                    <?php foreach ($listAssignTo as $k =>$v){ ?>
                                                        <option value="<?=$k ?>"><?= $v ?></option>
                                                    <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control input-sm numberAndDot price "  name="deposit_aed" id="deposit_aed" >
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-secondary btn-flat">12:00 AM</button>
                                                </span>
                                            </div>
                                            <small>Days @</small>
                                        </div>
                                        <div class="col-sm-1">
                                           <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                        </div>
                                    </div>

                                    </div>
                                </div>
                                <!-- Upper Body Content Ends-->
                            </div>

                            <!-- Lower Body Content Starts-->
                            <div class="form-group">
                                <div class="row">
                                    <label for="ProfileName" class="col-sm-3 control-label">Email CC:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control input-sm" name="ProfileName" id="ProfileName" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="ProfileNameAr" class="col-sm-3 control-label">Email BCC:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control input-sm" name="ProfileNameAr" id="ProfileNameAr">
                                    </div>
                                </div>
                            </div>
                            <!-- Lower Body Content Ends-->
                        </div>
                    </div>

                        

                <!-- Buttons-->

                            <div class="form-group col-sm-12">
                                <div class="form-group pull-right">                            
                                    <button type="submit" class="btn btn-success" name="submit" id="submit"><i class="fa fa-check" aria-hidden="true"></i>Submit</button>&nbsp;&nbsp;&nbsp;  
                                </div>       
                            </div>

                <!-- Success Message Div-->

                            <div class="form-group pull-right">                               
                                <div class="row">
                                    <div class="col-sm-12">
                                        <span id="profilemessage"></span>
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










                        









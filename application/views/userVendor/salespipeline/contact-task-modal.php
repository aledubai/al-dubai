<!-- Contact Task Modal Start  style="width: 830px; position: absolute; left: 50%; top: 50%;transform: translate(-50%, -50%);"-->
<script src="<?php echo base_url() ?>assets/js/jQuery-2.1.4.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('/assets/js/jquery-ui.js')?>"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-ui-1.10.2.custom.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo base_url('./assets/css/jquery-ui.css') ?>">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui-1.10.2.custom.min.css" type="text/css" media="all" />
<style type="text/css">
        .ui-datepicker{
        z-index: 99999!important;
        }

 
    @media (min-width: 768px)
    {
        .themeModal { padding: 10% 20% 0px 30%;"}       
    }

</style>
<!-- Head -->
<div class="themeModal hidden" id="TaskModal1">
    <div class="themeModalCon" >
        <div class="row">
            <form id="TaskForm"  action="<?=base_url()?>userVendor/salespipeline/insert_contact_task" method="POST">
                <!--col-12-->
                <div class="col-sm-12">
                    <span class="themeModalBtnClose" >x</span>
                </div>
                <!--// col-12-->
                <!--col-12-->                       
                <div class="col-sm-12">
                    <h3 class="text-center" ><i class="fa fa-list" aria-hidden="true"></i>
                </div>
                <!--// col-12-->
                <!--col-12-->
                <div class="col-sm-12">
                    <h4 class="text-center" ><b>Contact Task</b></h4>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <span id="Taskmessage" ></span>
                    </div>
                </div>

                <!--// col-12-->
                <!--col-12-->
                
                <div class="box-body col-sm-6">
                    <div class="form-group">
                        <div class="row">
                            <label for="task_type" class="col-sm-3 control-label">Type:<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="hidden" name="hiddenTaskContactId" id="hiddenTaskContactId"/>
                                <select class="form-control input-sm" required="" name="task_type" id="task_type">
                                    <option value="">Select Task</option>
                                    <?php foreach ($TypeList as $k =>$v){ ?>
                                    <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                    <?php } ?>
                                </select>
                            </div><!-- // col-9-->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="task_status" class="col-sm-3 control-label">Status:<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control input-sm" required="" name="task_status" id="task_status">
                                    <option value="">Not Started</option>
                                    <?php foreach ($listContactStatus as $k =>$v){ ?>
                                    <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                    <?php } ?>
                                </select>
                            </div><!-- // col-9-->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="contact_task_note" class="col-sm-3 control-label">Note:</label>
                            <div class="col-sm-9">
                                <textarea Title="Description" class="form-control  text-left"   name="contact_task_note" id='contact_task_note' class="form-control input-sm"></textarea> 
                            </div><!-- // col-9-->
                        </div>
                    </div>
                </div><!-- // col-6-->
                <div class="box-body col-sm-6">
                    <div class="form-group">
                        <div class="row">
                            <label for="staff_id" class="col-sm-3 control-label">Staff:<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control input-sm" required="" name="staff_id" id="staff_id">
                                    <option value="">Waseem Abidi</option>
                                    <?php foreach ($listAssignTo as $k =>$v){ ?>
                                    <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                    <?php } ?>
                                </select>
                            </div><!-- // col-9-->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="due_date" class="col-sm-3 control-label">Due Date:<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                        <input type="text" class="form-control input-sm" name="due_date" id="due_date"  >
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-secondary btn-flat"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                        </span>
                                        </div>
                            </div><!-- // col-9-->
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <label for="due_time" class="col-sm-3 control-label">Time:<span class="text-danger">*</span></label>
                            <div class="col-sm-9">



                               <input type="time" class="form-control input-sm" name="due_time" id="due_time">

         
                            </div><!-- // col-9-->
                        </div>
                    </div>   
                </div><!-- // col-6-->
                <!--// col-12-->
                <!-- col-12-->
                <div class="col-sm-12 mt-4">
                    <div class="form-group pull-right"> 
                        <button type="button" class="btn btn-outline-rc BtnClose" style="color: green; border-color: green; background-color: white"  >Cancel</button>&nbsp;&nbsp;&nbsp; 
                        <button type="submit" class="btn btn-rc">Submit</button>&nbsp;&nbsp;&nbsp;  
                    </div>

                </div><!--// col-12-->
            </form>
        </div>
    </div>    
</div>
<!--script for datepicker-->
<script type="text/javascript">
            //DatePicker
            $( document ).ready(function() {
                $( "#due_date" ).datepicker();
            });
</script>
<script type="text/javascript">
     $(function() {
        $("#TaskForm").on('submit', function(e) {
            e.preventDefault();

            var contactForm = $(this);

            $.ajax({
                url: contactForm.attr('action'),
                type: 'post',
                data: contactForm.serialize(),
                success: function(response){
                    
                    if(response.status == 'success') {
                        $("#Taskmessage").removeClass( "text-danger" );
                        $("#Taskmessage").addClass( "text-success" );
                        $("#NoteForm")[0].reset();
                        setblank();
                    }
                    if(response.status == 'error') {

                        $("#Taskmessage").removeClass( "text-success" );
                        $("#Taskmessage").addClass( "text-danger" );
                         
                    }
                    $("#Taskmessage").html(response.message);
                         
                }
            });
        });

    });
</script>
<!-- Contact Task Modal End -->


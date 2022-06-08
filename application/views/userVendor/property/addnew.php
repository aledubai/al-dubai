<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css"> 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         <a href="<?php echo base_url();?>userVendor/property"> <i class="fa fa-pie-chart" aria-hidden="true"></i> Property</a>
        <small>Add New Property</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- Success & Error Alert-->
            <div class="col-md-12">
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
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
            <!-- Success & Error Alert-->
            
            <div class="col-md-12">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Add New Property</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" id="property_form" action="<?php echo base_url() ?>userVendor/property/insertnow" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            
                             <!-- multi container forms-->
                             <div class="row">
                                <div class="col-sm-12  formCon">
                                    <!-- form-1-->
                                    <div class="row">
                                        <div class="col-sm-4">
                                                                    
                                        <div class="form-group">
                                            <label for="name">Property Name</label>
                                            <input type="text" id="name" name ="name" class="form-control" required="required" placeholder="Enter Property Name" >
                                        </div>  
                                        <?php include_once "form1-information.php"; ?>
                                           
                                    <!--// -->
                                    </div>
                                    <div class="col-sm-4">
                                    <!-- form-2-->
                                    
                                        <?php include_once "form2-map.php"; ?>
                                 <!--// -->
                                    
                                    <!-- form-3-->
                                    
                                        <?php include_once "form3-setting.php"; ?>
                                    
                                    <!--// -->

                                    <!-- form-4-->
                                  
                                        <?php include_once "form4-media.php"; ?>
                                

                                    <!-- form-5-->
                                   
                                        <?php include_once "form5-virtual.php"; ?>
                                   

                                    <!-- form-6-->
                                    
                                        <?php include_once "form6-contactInfo.php"; ?>
                                   
                                    <!--// -->

                                    <!-- form-7-->
                                    
                                        <?php include_once "form7-slider.php"; ?>
                                   
                                    <!--// -->
                                    </div>
                                    <div class="col-sm-4">
                                    <!-- form-8-->
                                    
                                        <?php include_once "form8-floorplan.php"; ?>
                                   
                                    <!--// -->

                                    <!-- form-9-->
                                    
                                        <?php include_once "form9-propertydoc.php"; ?>
                                    
                                    <!--// -->

                                    <!-- form-10-->
                                        <?php include_once "form10-privatenote.php"; ?>
                                    
                                    <!--// -->

                                    <!-- form-11-->
                                   
                                        <?php include_once "form11-eneryclass.php"; ?>
                                  
                                    <!--// -->

                                    <!-- form-12-->
                                    
                                        <?php include_once "form12-layout.php"; ?>
                               
                                    <!--// -->
                                    <!-- form-13-->
                                    
                                        <?php include_once "form13-description.php"; ?>
                                    </div>
                                    <!--// -->
                                </div>
                             </div> 
                             <!--// multi container forms-->

                             
                             
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <div class="row">
                                
                                <div class="col-sm-3">
                                    <input type="submit" class="btn btn-primary" value="Submit" />
                                    <input type="reset" class="btn btn-default" value="Reset" />
                                </div>
                            </div><!--//row-->
                            
                        </div>
                    </form>
                </div>
            </div>
            
        </div>    
    </section>
    
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".menuBtn").click(function(){
            var target = "."+$(this).attr("data-target");
            $(".menuBtn").removeClass("active1");
            $(this).addClass("active1");
            $(".incCon").addClass("hidden");
            $(target).removeClass("hidden");
        });
    });
</script>



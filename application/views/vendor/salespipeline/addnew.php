<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css"> 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         <a href="<?php echo base_url();?>vendor/salespipeline"> <i class="fa fa-user" aria-hidden="true"></i> Agent</a>
        <small>Add New Agent</small>
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
                        <h3 class="box-title">Add New Agent</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" id="member_form" action="<?php echo base_url() ?>vendor/salespipeline/insertnow" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <!--Agent Name-->                             
                                    <div class="form-group">
                                        <label for="name">Agent Name</label>
                                        <input type="text" id="name" name ="name" class="form-control" required="required" placeholder="Enter Agent Name" >
                                    </div>

									<!--Agent Thumbnail-->                             
                                    <div class="form-group">
                                        <label for="img">Agent Thumbnail</label>
                                        <input type="file" id="img" name ="img" class="form-control"  placeholder="Choose Agent Thumbnail" >
                                    </div>
                                    
                                    <!--Email-->                             
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" name ="email" class="form-control" required="required" placeholder="Enter Agent Code" >
                                    </div> 
                                    <!--Mobile Number-->                             
                                    <div class="form-group">
                                        <label for="mobile">Mobile Number</label>
                                        <input type="text" id="mobile" name ="mobile" class="form-control"  placeholder="Enter Mobile Number"  >
                                    </div>

                                    <!--Phone Number-->                             
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" id="phone" name ="phone" class="form-control"  placeholder="Enter Phone Number"  >
                                    </div> 
                                    <!--Fax Number-->                             
                                    <div class="form-group">
                                        <label for="fax_number">Fax Number</label>
                                        <input type="text" id="fax_number" name ="fax_number" class="form-control"  placeholder="Enter Fax Number" >
                                    </div>

                                    <!--Language -->                             
                                    <div class="form-group">
                                        <label for="language">Language </label>
                                        <input type="text" id="language" name ="language" class="form-control"  placeholder="Enter Language " >
                                    </div>

                                    <!--Service Area -->                             
                                    <div class="form-group">
                                        <label for="service_area">Service Area </label>
                                        <input type="text" id="service_area" name ="service_area" class="form-control"  placeholder="Enter Service Area " >
                                    </div>

                                    <!--Position -->                             
                                    <div class="form-group">
                                        <label for="position">Position </label>
                                        <input type="text" id="position" name ="position" class="form-control"  placeholder="Enter Position " >
                                    </div> 
                                    

                                   </div><!-- // col-md-4-->

                                   <div class="col-md-4">
                                    <!--Specialties -->                             
                                    <div class="form-group">
                                        <label for="specialties">Specialties </label>
                                        <input type="text" id="specialties" name ="specialties" class="form-control"  placeholder="Enter Specialties " >
                                    </div> 
                                    <!--Whatsapp Number -->                             
                                    <div class="form-group">
                                        <label for="whatsapp_number">Whatsapp Number </label>
                                        <input type="text" id="whatsapp_number" name ="whatsapp_number" class="form-control"  placeholder="Enter Whatsapp Number " >
                                    </div>
                                     <!--Tax Number-->                             
                                    <div class="form-group">
                                        <label for="tax_number">Tax Number</label>
                                        <input type="text" id="tax_number" name ="tax_number" class="form-control"  placeholder="Enter Tax Number" >
                                    </div> 

                                    <!--Address -->                             
                                    <div class="form-group">
                                        <label for="address">Address </label>
                                        <input type="text" id="address" name ="address" class="form-control"  placeholder="Enter Address Full Address " >
                                    </div> 
                                    <!--Company Name-->                             
                                    <div class="form-group">
                                        <label for="company_name">Company Name</label>
                                        <input type="text" id="company_name" name ="company_name" class="form-control" required="required" placeholder="Enter Company Name" >
                                    </div> 
                                    <!--Company Logo-->                             
                                    <div class="form-group">
                                        <label for="company_logo">Company Logo</label>
                                        <input type="file" id="company_logo" name ="company_logo" class="form-control"  placeholder="Choose Company Logo" >
                                    </div>
                                    <!--License -->                             
                                    <div class="form-group">
                                        <label for="license">License </label>
                                        <input type="text" id="license" name ="license" class="form-control"  placeholder="Enter  License " >
                                    </div> 

                                    <!--Website Url -->                             
                                    <div class="form-group">
                                        <label for="website_url">Website Url </label>
                                        <input type="text" id="website_url" name ="website_url" class="form-control"  placeholder="Enter  Website Url " >
                                    </div> 

                                    <!--Facebook URL -->                             
                                    <div class="form-group">
                                        <label for="Facebook">Facebook URL </label>
                                        <input type="text" id="Facebook" name ="social_media[fb]" class="form-control"  placeholder="Enter  Facebook URL " >
                                    </div> 

                                   </div><!-- // col-md-4-->


                                   <div class="col-md-4">
                                    <!--Twitter URL -->                             
                                    <div class="form-group">
                                        <label for="Twitter">Twitter URL </label>
                                        <input type="text" id="Twitter" name ="social_media[tw]" class="form-control"  placeholder="Enter  Twitter URL " >
                                    </div> 

                                    <!--Instagram URL -->                             
                                    <div class="form-group">
                                        <label for="Instagram">Instagram URL </label>
                                        <input type="text" id="Instagram" name ="social_media[inst]" class="form-control"  placeholder="Enter  Instagram URL " >
                                    </div> 
                                    <!--Vimo URL -->                             
                                    <div class="form-group">
                                        <label for="Vimo">Vimo URL </label>
                                        <input type="text" id="Vimo" name ="social_media[vimo]" class="form-control"  placeholder="Enter  Vimo URL " >
                                    </div> 

                                    <!--Linkedin URL -->                             
                                    <div class="form-group">
                                        <label for="Linkedin">Linkedin URL </label>
                                        <input type="text" id="Linkedin" name ="social_media[lin]" class="form-control"  placeholder="Enter  Linkedin URL " >
                                    </div>

                                    <!--Youtube URL -->                             
                                    <div class="form-group">
                                        <label for="Youtube">Youtube URL </label>
                                        <input type="text" id="Youtube" name ="social_media[ytube]" class="form-control"  placeholder="Enter  Youtube URL " >
                                    </div> 

                                    <!--Pintrest URL -->                             
                                    <div class="form-group">
                                        <label for="Pintrest">Pintrest URL </label>
                                        <input type="text" id="Pintrest" name ="social_media[pint]" class="form-control"  placeholder="Enter  Pintrest URL " >
                                    </div>

                                    <!--Visibility Hidden -->                             
                                    <div class="form-group">
                                        <label for="">Visibility Hidden </label><br/>
                                        <label for="visibility_hide_show" ><input type="checkbox" id="visibility_hide_show" name ="visibility_hide_show" value="1" > <small>Hide agent to show on front-end</small></label>
                                    </div> 


                                    <!--Slug-->                             
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" id="slug" name ="slug" class="form-control"  placeholder="Slug" >
                                    </div> 
                                   <!--Status-->
                                    <div class="form-group">
                                         <label for="status">Status</label>
                                         <select class ="form-control" name="status" id="status">
											<option value="1">Active</option>
											<option value="0">Inactive</option>
										</select>	
                                    </div> 
                                 </div> 
                             </div>
                             
                             
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <!--Short Description -->                             
                            <div class="form-group">
                                <label for="short_description">Short Description </label>
                                <textarea rows="3" id="short_description" name ="short_description" class="form-control myTextEditor "  placeholder="Short Description" ></textarea>
                            </div> 
                            <!--Detail Description-->                             
                            <div class="form-group">
                                <label for="description">Detail Description</label>
                                <textarea rows="6" id="description" name ="description" class="form-control myTextEditor "  placeholder="Detail Description" ></textarea>
                            </div>

                            

                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            
        </div>    
    </section>
    
</div>


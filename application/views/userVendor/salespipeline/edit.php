<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css"> 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <a href="<?php echo base_url();?>userVendor/agent"> <i class="fa fa-user" aria-hidden="true"></i> Agent</a>
        <small>Edit</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
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
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                       
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                   <form role="form" id="member_form" action="<?php echo base_url() ?>userVendor/agent/update" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="col-md-4">
                                    <!--Agent Name-->                             
                                    <div class="form-group">
                                        <label for="name">Agent Name</label>
                                        <input type="text" id="name" name ="name" class="form-control" required="required" placeholder="Enter Agent Name" value="<?php echo $edit_data->name; ?>" >
                                    </div> 
                                    <!--Agent Thumbnail-->                             
                                    <div class="form-group">
                                        <label for="img">Agent Thumbnail</label>
                                        <input type="file" id="img" name ="img" class="form-control"  placeholder="Choose Agent Thumbnail" >
                                        <!-- image check-->
                                        <?php if(!empty($edit_data->img)){ ?>
                                            <span id="old_img_con" >Thumbnail Is : <img src="<?php echo base_url('uploads/agent/'.$edit_data->img);?>" width="20" /> <?php echo $edit_data->img; ?>&nbsp;&nbsp;&nbsp;<i class="text-danger fa fa-trash pinter delete_old_img"></i></span>
                                        <?php } ?>
                                        <input type="hidden" name="old_img" id="old_img" value="<?php echo $edit_data->img; ?>"/>
                                    </div>
                                    <!--Email-->                             
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" name ="email" class="form-control" required="required" placeholder="Enter Agent Code" value="<?php echo $edit_data->email; ?>" >
                                    </div> 
                                    <!--Mobile Number-->                             
                                    <div class="form-group">
                                        <label for="mobile">Mobile Number</label>
                                        <input type="text" id="mobile" name ="mobile" class="form-control"  placeholder="Enter Mobile Number" value="<?php echo $edit_data->mobile; ?>" >
                                    </div>

                                    <!--Phone Number-->                             
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" id="phone" name ="phone" class="form-control"  placeholder="Enter Phone Number" value="<?php echo $edit_data->phone; ?>" >
                                    </div> 
                                    <!--Fax Number-->                             
                                    <div class="form-group">
                                        <label for="fax_number">Fax Number</label>
                                        <input type="text" id="fax_number" name ="fax_number" class="form-control"  placeholder="Enter Fax Number" value="<?php echo $edit_data->fax_number; ?>" >
                                    </div>

                                    <!--Language -->                             
                                    <div class="form-group">
                                        <label for="language">Language </label>
                                        <input type="text" id="language" name ="language" class="form-control"  placeholder="Enter Language " value="<?php echo $edit_data->language; ?>" >
                                    </div>
                                    <!--Service Area -->                             
                                    <div class="form-group">
                                        <label for="service_area">Service Area </label>
                                        <input type="text" id="service_area" name ="service_area" class="form-control"  placeholder="Enter Service Area " value="<?php echo $edit_data->service_area; ?>" >
                                    </div>

                                    <!--Position -->                             
                                    <div class="form-group">
                                        <label for="position">Position </label>
                                        <input type="text" id="position" name ="position" class="form-control"  placeholder="Enter Position " value="<?php echo $edit_data->position; ?>" >
                                    </div>  

                                   </div><!-- // col-md-4-->

                                   <div class="col-md-4">
                                    <!--Specialties -->                             
                                    <div class="form-group">
                                        <label for="specialties">Specialties </label>
                                        <input type="text" id="specialties" name ="specialties" class="form-control"  placeholder="Enter Specialties " value="<?php echo $edit_data->specialties; ?>" >
                                    </div> 
                                    <!--Whatsapp Number -->                             
                                    <div class="form-group">
                                        <label for="whatsapp_number">Whatsapp Number </label>
                                        <input type="text" id="whatsapp_number" name ="whatsapp_number" class="form-control"  placeholder="Enter Whatsapp Number " value="<?php echo $edit_data->whatsapp_number; ?>"  >
                                    </div>
                                     <!--Tax Number-->                             
                                    <div class="form-group">
                                        <label for="tax_number">Tax Number</label>
                                        <input type="text" id="tax_number" name ="tax_number" class="form-control"  placeholder="Enter Tax Number" value="<?php echo $edit_data->tax_number; ?>" >
                                    </div> 

                                    <!--Address -->                             
                                    <div class="form-group">
                                        <label for="address">Address </label>
                                        <input type="text" id="address" name ="address" class="form-control"  placeholder="Enter Address Full Address " value="<?php echo $edit_data->address; ?>" >
                                    </div> 
                                    <!--Company Name-->                             
                                    <div class="form-group">
                                        <label for="company_name">Company Name</label>
                                        <input type="text" id="company_name" name ="company_name" class="form-control" required="required" placeholder="Enter Company Name" value="<?php echo $edit_data->company_name; ?>"  >
                                    </div> 
                                    <!--Company Logo-->                             
                                    <div class="form-group">
                                        <label for="company_logo">Company Logo</label>
                                        <input type="file" id="company_logo" name ="company_logo" class="form-control"  placeholder="Choose Company Logo"  >
                                        <!-- image check-->
                                        <?php if(!empty($edit_data->company_logo)){ ?>
                                            <span id="old_img_con" >Company Logo Is : <img src="<?php echo base_url('uploads/company/'.$edit_data->company_logo);?>" width="20" /><?php echo $edit_data->company_logo; ?>&nbsp;&nbsp;&nbsp;<i class="text-danger fa fa-trash pinter delete_old_company_logo"></i></span>
                                        <?php } ?>
                                        <input type="hidden" name="old_company_logo" id="old_company_logo" value="<?php echo $edit_data->company_logo; ?>" />
                                    </div>

                                    <!--License -->                             
                                    <div class="form-group">
                                        <label for="license">License </label>
                                        <input type="text" id="license" name ="license" class="form-control"  placeholder="Enter  License "  value="<?php echo $edit_data->license; ?>" >
                                    </div> 

                                    <!--Website Url -->                             
                                    <div class="form-group">
                                        <label for="website_url">Website Url </label>
                                        <input type="text" id="website_url" name ="website_url" class="form-control"  placeholder="Enter  Website Url " value="<?php echo base64_decode($edit_data->website_url); ?>" >
                                    </div> 
                                    <?php 
                                    $tempSM = base64_decode($edit_data->social_media);
                                    $smArr = json_decode($tempSM,true);

                                    ?>
                                    <!--Facebook URL -->                             
                                    <div class="form-group">
                                        <label for="Facebook">Facebook URL </label>
                                        <input type="text" id="Facebook" name ="social_media[fb]" class="form-control"  placeholder="Enter  Facebook URL " value="<?php echo (isset($smArr['fb']))?$smArr['fb']:''; ?>" >
                                    </div> 

                                   </div><!-- // col-md-4-->


                                   <div class="col-md-4">
                                    <!--Twitter URL -->                             
                                    <div class="form-group">
                                        <label for="Twitter">Twitter URL </label>
                                        <input type="text" id="Twitter" name ="social_media[tw]" class="form-control"  placeholder="Enter  Twitter URL " value="<?php echo (isset($smArr['tw']))?$smArr['tw']:''; ?>" >
                                    </div> 

                                    <!--Instagram URL -->                             
                                    <div class="form-group">
                                        <label for="Instagram">Instagram URL </label>
                                        <input type="text" id="Instagram" name ="social_media[inst]" class="form-control"  placeholder="Enter  Instagram URL " value="<?php echo (isset($smArr['inst']))?$smArr['inst']:'' ?>" >
                                    </div> 
                                    <!--Vimo URL -->                             
                                    <div class="form-group">
                                        <label for="Vimo">Vimo URL </label>
                                        <input type="text" id="Vimo" name ="social_media[vimo]" class="form-control"  placeholder="Enter  Vimo URL " value="<?php echo (isset($smArr['vimo']))?$smArr['vimo']:''; ?>" >
                                    </div> 

                                    <!--Linkedin URL -->                             
                                    <div class="form-group">
                                        <label for="Linkedin">Linkedin URL </label>
                                        <input type="text" id="Linkedin" name ="social_media[lin]" class="form-control"  placeholder="Enter  Linkedin URL " value="<?php echo (isset($smArr['lin']))?$smArr['lin']:''; ?>" >
                                    </div>

                                    <!--Youtube URL -->                             
                                    <div class="form-group">
                                        <label for="Youtube">Youtube URL </label>
                                        <input type="text" id="Youtube" name ="social_media[ytube]" class="form-control"  placeholder="Enter  Youtube URL " value="<?php echo (isset($smArr['ytube']))?$smArr['ytube']:''; ?>" >
                                    </div> 

                                    <!--Pintrest URL -->                             
                                    <div class="form-group">
                                        <label for="Pintrest">Pintrest URL </label>
                                        <input type="text" id="Pintrest" name ="social_media[pint]" class="form-control"  placeholder="Enter  Pintrest URL " value="<?php echo (isset($smArr['pint']))?$smArr['pint']:''; ?>" >
                                    </div>

                                    <!--Visibility Hidden -->                             
                                    <div class="form-group">
                                        <label for="">Visibility Hidden </label><br/>
                                        <label for="visibility_hide_show" ><input type="checkbox" id="visibility_hide_show" name ="visibility_hide_show" value="1" > <small>Hide agent to show on front-end</small></label>
                                    </div> 


                                    <!--Slug-->                             
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" id="slug" name ="slug" class="form-control"  placeholder="Slug" value="<?php echo $edit_data->slug; ?>" >
                                    </div> 
                                   <!--Status-->
                                    <div class="form-group">
                                         <label for="status">Status</label>
                                         <select class ="form-control" name="status" id="status">
                                            <option value="1" <?php echo ($edit_data->status == 1)?'selected':''; ?> >Active</option>
                                            <option value="0" <?php echo ($edit_data->status == 0)?'selected':''; ?> >Inactive</option>
                                        </select>    
                                    </div> 
                                 </div> 
                             </div>
                             
                             
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                             <!--Short Description -->                             
                            <div class="form-group">
                                <label for="short_description">Short Description </label>
                                <textarea rows="3" id="short_description" name ="short_description" class="form-control myTextEditor "  placeholder="Short Description" ><?php echo base64_decode($edit_data->short_description); ?></textarea>
                            </div> 
                            <!--Detail Description-->                             
                            <div class="form-group">
                                <label for="description">Detail Description</label>
                                <textarea rows="6" id="description" name ="description" class="form-control myTextEditor "  placeholder="Detail Description" ><?php echo base64_decode($edit_data->description); ?></textarea>
                            </div>
                            

                            <input type="hidden" name="id" value="<?php echo $edit_data->id; ?>"/>
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            
        </div>    
    </section>
</div>
 
<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>  

<script>
	$(".delete_old_img").click(function(){
		$("#old_img_con").addClass('hidden');
		$("#old_img").val('');
	});
</script>

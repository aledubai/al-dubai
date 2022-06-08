<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css"> 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         <a href="<?php echo base_url();?>vendor/community"> <i class="fa fa-globe" aria-hidden="true"></i> Community</a>
        <small>Add New Community</small>
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
                        <h3 class="box-title">Add New Community</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" id="member_form" action="<?php echo base_url() ?>vendor/community/insertnow" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <!--Country Name-->                             
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name ="name" class="form-control" required="required" placeholder="Enter Community Name" value="" >
                                    </div> 
                                    
                                    <!--Country Code-->                             
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <span id="msg_slug"></span>
                                        <input type="text" id="slug" name ="slug" class="form-control" required="required" placeholder="Enter slug" readonly >
                                         <span class="text-danger" onclick="change_slug_btn()">Change</span>
                                    </div> 
                                    
                                     <!--Phone Code-->                             
                                    <div class="form-group">
                                        <label for="meta_title">Meta Title</label>
                                        <textarea name ="meta_title" id ="meta_title" class="form-control"  placeholder="Enter Meta Title"></textarea>
                                        
                                    </div>   <!--Phone Code-->                             
                                    <div class="form-group">
                                        <label for="phone_code">Meta Description</label>
                                        <textarea name ="meta_description" id ="meta_description" class="form-control"  placeholder="Enter Meta Description"></textarea>
                                        
                                    </div> 
                                    
                                   
                                   <!--Status-->
                                    <div class="form-group">
                                         <label for="status">Status</label>
                                         <select class ="form-control" name="status" id="status">
                                            <option value="1"  >Active</option>
                                            <option value="0" >Inactive</option>
                                        </select>   
                                    </div> 
                                 </div> 
                                    
                                
                             </div>
                             
                             
                             
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" id="submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            
        </div>    
    </section>
    
</div>

<script>


    function change_slug_btn()
    {
        var isreadoly  =$("#slug").is('[readonly]') ;
        if(isreadoly)
        {
                $("#slug").removeAttr('readonly');
        }else
        {
            $("#slug").attr("readonly","readonly");
        }
         
        
    }
    function convertToSlug(Text)
    {
    return Text
       .toLowerCase()
       .replace(/ /g,'-')
       .replace(/[^\w-]+/g,'')
       ;
    }

      $(document).on('input', '#name', function() {
           var name = $("#name").val();
           var slug_url = convertToSlug(name);
           $("#slug").val(slug_url);
           check_slug();
              
       
       });

        $(document).on('input', '#slug', function() {
           var name = $("#slug").val();
           var slug_url = convertToSlug(name);
           $("#slug").val(slug_url);
           check_slug();
              
       
       });
    function check_slug()
    {
    $("#msg_slug").html('Please Wait..'); 
       var slug_url = $("#slug").val();
       var id = $("#id").val();

        $.ajax(
             {
               type:"POST",
               url:"<?php echo base_url()?>vendor/community/check_slug",
               data:'slug_url='+slug_url+"&id="+id,
               success:function(returnVal)
               {
                
                 $("#msg_slug").html(''); 
                 if(returnVal == 'not_login')
                 {
                   window.location.href = "<?php echo base_url()?>login";
                 }
                 else if(returnVal == 'slug_exist')
                 {
                    $("#submit").attr('disabled','disabled');
                     $("#msg_slug").html('Already Exist');
                   $("#msg_slug").css('color','red'); 
                 }else if(returnVal == 'slug_available')
                 {
                   
                   $("#msg_slug").html('Available');
                   $("#msg_slug").css('color','green');

                    $("#submit").removeAttr('disabled');
                 }
                 
               }
             });
    }
</script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css" />
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      <i class="fa fa-user" aria-hidden="true"></i> Direct Inquiry
      <small>Add, Edit</small>
   </h1>
</section>
<!-- Content Header (Menu) -->

<section class="content">
    <div class="row">
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
                </div>
        <div class="col-sm-6">
          <div class="box box-info">
             <div class="box-header">
                <h3 class="box-title">Add New Leads</h3>
             </div>
             <form class="form-horizontal" action="<?php echo base_url() ?>vendor/salespipeline/add_new_leads" method="post" role="form" enctype="multipart/form-data" >
                <div class="box-body">
                   <div class="form-group row">
                      <label for="name" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
                      <div class="col-sm-10">
                         <input type="text" name="name" class="form-control" id="name" placeholder="Name" required=""  >
                      </div>
                   </div>
                   <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
                      <div class="col-sm-10">
                         <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email"  required=""  >
                      </div>
                   </div>
                   <div class="form-group row">
                      <label for="phone" class="col-sm-2 col-form-label">Phone <span class="text-danger">*</span></label>
                      <div class="col-sm-10">
                         <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone"   required=""  maxlength="20">
                      </div>
                   </div>
                   <div class="form-group row">
                      <label for="stage" class="col-sm-2 col-form-label">Stage</label>
                      <div class="col-sm-10">
                         <input type="text" class="form-control" id="stage" placeholder="Stage" name="stage">
                      </div>
                   </div>
                   <div class="form-group row">
                      <label for="owner" class="col-sm-2 col-form-label">Owner</label>
                      <div class="col-sm-10">
                         <input type="text" class="form-control" id="owner"  name="owner" placeholder="Owner">
                      </div>
                   </div>
                   <div class="form-group row">
                      <label for="source" class="col-sm-2 col-form-label">Source</label>
                      <div class="col-sm-10">
                         <input type="text" class="form-control" id="source" placeholder="Source" name="source">
                      </div>
                   </div>
                   <div class="form-group row">
                      <label for="labels" class="col-sm-2 col-form-label">Labels</label>
                      <div class="col-sm-10">
                         <input type="text" class="form-control" id="labels" placeholder="Source" name="labels">
                      </div>
                   </div>

                   <div class="form-group row">
                      <label for="assignto" class="col-sm-2 col-form-label">Assign To</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="assignto" id="assignto">
                          <option value="">--Select--</option>
                          <?php


                          if(!empty($staff_list))
                          {
                              foreach ($staff_list as $key => $value) {
                             ?>
                              <option value="<?php echo $value->id;?>"><?php echo $value->StaffName;?></option>
                             <?php
                            }
                          }
                            
                          ?>
                        </select>
                       </div>
                   </div>
                 </div>
                <div class="box-footer">
                   <button type="submit" class="btn btn-info" name="submit" >Save</button>
                    
                </div>
             </form>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="box box-info">
             <div class="box-header">
                <h3 class="box-title">Upload Data CSV File</h3>
               
             </div>
             <form class="form-horizontal"  id="member_form" action="<?php echo base_url() ?>vendor/salespipeline/insert_csv_product" method="post" role="form" enctype="multipart/form-data">
                <div class="box-body">
                   <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"> </label>
                      <div class="col-sm-10">
                         <div class="form-group">
                          <label for="upload_data_csv">Product CSV</label>
                          <input type="file" name="upload_data_csv" required id="upload_data_csv"><br>
                          <span class="text-danger"><small><span id="upload_error"></span></small></span>
                          <br>
                          <span class="text-danger"><small><b>Please Upload CSV File Only With Formated</b></small></span>
                       </div>
                     </div>
                   </div>
                   
                </div>
                <div class="box-footer">
                    <input type="submit" class="btn btn-primary" value="Submit" name="upload_data_btn" id="upload_data_btn" />
                    <a class="btn btn-success"   href="<?php echo base_url(); ?>vendor/salespipeline/download_formate_only"> Download CSV Format</a>
                      
                </div>
             </form>
          </div>
        </div>
        <div class="col-sm-6"></div>
    </div>
</section>
<section class="content">
   <div class="box">
      <div class="container box">
         <h3 align="left">Import Data</h3>
         
          
         <!--<form role="form" id="member_form" action="<?php echo base_url() ?>vendor/salespipeline/insert_csv_product" method="post" role="form" enctype="multipart/form-data">
            <div class="box-body">
               <div class="row">
                  <div class="col-md-6">
                                                  
                     <div class="form-group">
                        <label for="upload_data_csv">Product CSV</label>
                        <input type="file" name="upload_data_csv" required id="upload_data_csv"><br>
                        <span class="text-danger"><small><span id="upload_error"></span></small></span>
                         
                        <span class="text-danger"><small><b>Please Upload CSV File Only With Formated</b></small></span>
                     </div>
                  </div>
                  <div class="col-md-6">
                                                 
                     <div class="form-group">
                        <a class="btn btn-success" style="float: right;" href="<?php echo base_url(); ?>vendor/salespipeline/download_formate_only"> Download CSV Format</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="box-footer">
               <input type="submit" class="btn btn-primary" value="Submit" name="upload_data_btn" id="upload_data_btn" />
               <input type="reset" class="btn btn-default" value="Reset" />
            </div>
         </form>-->
         <div class="row">
            <div class="col-xs-12">
               <div class="box">
                  <div class="box-header">
                     <h3 class="box-title">Data List</h3>
                     <div class="box-tools">
                     </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body table-responsive">
                     <table class="display" cellspacing="0" width="100%" id="example">
                        <thead>
                           <tr>
                              <th>S.No.</th>
                              <th>Created</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Stage</th>
                              <th>Owner</th>
                              <th>Source</th>
                              <th>Label</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                        </tbody>
                     </table>
                  </div>
                  <!-- /.box-body -->
               </div>
               <!-- /.box -->
            </div>
         </div>
      </div>
</section>

 
</div>
<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script> 
<script>
   // Function file Validation
   
    function file_validation(id,max_size)
    {
        var fuData = document.getElementById(id);
        var FileUploadPath = fuData.value;
        
   
        if (FileUploadPath == ''){
   
            alert("Please upload Attachment");
        } 
        else {
            var Extension = FileUploadPath.substring(FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
            if (Extension == "csv") {
   
                    if (fuData.files && fuData.files[0]) {
                        var size = fuData.files[0].size;
                        
                        if(size > max_size){   
                            alert("Maximum file size 20 MB");
                            $("#"+id).val('');
                            return;
                        }
                    }
                } 
            else 
            {
                alert("document only allows with file types of csv");
                $("#"+id).val('');
            }
        }   
    }
   
    $(document).ready(function(){
   
    });
   
</script>
<!-- Get Databse List -->
<script type="text/javascript">
   var table;
    
   $(document).ready(function() {
    
       //datatables
       table = $('#example').DataTable({ 
    
           "processing": true, //Feature control the processing indicator.
           "serverSide": true, //Feature control DataTables' server-side processing mode.
           "order": [], //Initial no order.
    
           // Load data for the table's content from an Ajax source
           "ajax": {
               "url": "<?php echo base_url('vendor/salespipeline/csv_ajax_list')?>",
               "type": "POST"
           },
    
           //Set column definition initialisation properties.
           "columnDefs": [
           { 
               "targets": [ 0 ], //first column / numbering column
               "orderable": false, //set not orderable
           },
           ],
    
       });
    
   });
</script>
  <script type="text/javascript">
    jQuery(document).ready(function(){
         jQuery(document).on("change", ".assignBtn", function(){

          var userId = $(this).attr("data-id");
          var value  = $(this).val();

          
          if(userId && value)
          {
             
            hitURL = "<?php echo base_url() ?>vendor/salespipeline/assignChange",
            currentRow = $(this);
          
            jQuery.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { id : userId, assigned : value } 
            }).done(function(data){   
              if(data.status == 'success') { 
                alert(data.message); 
                window.location.reload();
              }
              else if(data.status =='error') {
                alert(data.message); 
                }
              else {
               alert("Access denied..!"); 
             }
            });
          }
            
          
    });
    });
   
</script>
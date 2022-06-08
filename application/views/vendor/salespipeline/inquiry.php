
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css" />
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>



   
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <i class="fa fa-user" aria-hidden="true"></i> Inquiry Profile
     </h1>
</section>


 
      <?php



               if(!empty($edit_data))
              {
                ?>


                  <section class="content">
    <div class="box">
    <!-- Content Starts Now-->
        <!-- First Column Starts-->

        <div class="box-body">
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
            </div>

            <div class="row">
                 <div class="col-md-3">
                   <div class="card card-primary card-outline">
                      <div class="card-body box-profile">
                          
                         <h3 class="profile-username text-center">BASIC INFORMATION</h3>
                         <p class="text-muted text-center">Inquiry</p>
                         <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                               <b>Name</b> <a class="float-right"><?php echo $edit_data->contact_name?></a>
                            </li>
                            <li class="list-group-item">
                               <b>Email</b> <a class="float-right"><?php echo $edit_data->contact_email?></a>
                            </li>
                            <li class="list-group-item">
                               <b>Phone</b> <a class="float-right"><?php echo $edit_data->contact_mobile?></a>
                            </li>
                            <li class="list-group-item">
                               <b>Owner</b> <a class="float-right"><?php echo $edit_data->owner?></a>
                            </li>
                            <li class="list-group-item">
                               <b>Source</b> <a class="float-right"><?php echo $edit_data->lead_source?></a>
                            </li>
                            <li class="list-group-item">
                               <b>Stage</b> <a class="float-right"><?php echo $edit_data->stage?></a>
                            </li>
                            <li class="list-group-item">
                               <b>Labels</b> <a class="float-right"><?php echo $edit_data->labels?></a>
                            </li>
                         </ul>
                       </div>
                   </div>
                </div>
                <div class="col-md-9">

                  <div class="card card-primary card-outline p-4">
                      <div class="card-body box-profile">
                          
                          
                        <h3 class="profile-username text-left">Add New Inquiry</h3>
                         <p class="text-muted text-left">Inquiry</p>
                         <div class="card card-primary">
                            
                          <form role="form" id="insert_lead" class="form-horizontal" action="<?php echo base_url() ?>vendor/salespipeline/insert_lead" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
                             <div class=" ">
                                <div class="container-fluid">
                                   <div class="row">
                                      <div class="col-sm-12 text-center">
                                         <span id="detailmessage"  class="formmessage"></span>
                                      </div>
                                   </div>
                                   <div class="row">
                                      <input hidden="" type="text" name="id" id="id" value="<?php echo $edit_data->id;?>"> 
                                      <div class="form-group">
                                         <label>Comment: </label> 
                                          <textarea class="form-control" name="lead_comment" id="lead_comment"><?php echo $edit_data->contact_message?></textarea>
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="form-group">
                                          <label>Follow Up:</label> 
                                         
                                            <input type="text" class="form-control" id="datepicker" name="lead_nextdate" value="<?php echo date('d-m-Y',strtotime($edit_data->date_at));?>">
                                         
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="form-group">
                                         <div  ><label>Assigned Agent Name:</label></div>
                                         <div  >

                                            <select class="form-control" name="vendor_name" id="vendor_name">
                                              <option value="">Select</option>
                                               <?php foreach ($agent_data as $key => $value) {
                                                ?>
                                               
                                               <option value="<?php echo $value->id?>" <?php if($edit_data->assign_to == $value->id){ echo "selected";}?> ><?php echo $value->StaffName?></option>
                                               <?php
                                                  }
                                                  
                                                  ?>
                                            </select>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                             </div>
                          </form>
                        </div>


                          
                </div>
                </div>
                </div>
              </div>
        
        </div>

            <!-- Box Body Content Ends-->
     
</section>

<?php
                    if(!empty($edit_data->data_set))
    {
      $dataset = json_decode($edit_data->data_set);
      
      ?>
      <section class=" ">
        <div class="box">
            <div class="box-body">
                <table class="display" cellspacing="0" width="100%" id="example2">
                            <thead>
                               <tr>
                                  <th>S.No.</th>
                                  <th>Agent Assigned</th>
                                  <th>Previous Follow Up</th>
                                  <th>Follow Up</th>
                                  <th>Comment</th>
                                  
                               </tr>
                            </thead>
                            <tbody>
                            <?php
                            $inc = 1;
                              foreach ($dataset as $key => $value)
                              {
                                  ?>
                                    <tr>
                                      <td><?php echo $inc;?></td>
                                      <td><?php echo $value->vendor_name;?></td>
                                      <td><?php echo date('d-m-Y',strtotime($value->created));?></td>
                                      <td><?php echo date('d-m-Y',strtotime($value->new_date));?></td>
                                      <td><?php echo $value->comment;?></td>
                                       
                                    </tr>
                                  <?php

                                  $inc++;
                              }
                            ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>
      <?php
      
    }
                  ?>

                <?php
              }else
              {
                ?>
                  <p class="text-danger text-center">Not Data Found.</p>
                <?php
              }

            ?>



 
 <!-- main-container-->



 

</div>
<!--Modal Code Starts-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"><img src="<?php echo base_url()?>assets/images/logo2.png" style="width: 8%;"><strong>Al-Eizba</strong></h4>
      </div>


      



    </div>
  </div>
</div>
<!--Modal Code End-->
                   

<!--Date Picker Script-->
<script>


     



  $( function() {
    $( "#datepicker" ).datepicker({ minDate: 0,dateFormat: 'dd-mm-yy'});


  } );


   


    $("#insert_lead").on('submit', function(e) {
            e.preventDefault();

            var contactForm = $(this);

            $.ajax({
                url: contactForm.attr('action'),
                type: 'post',
                data: contactForm.serialize(),
                success: function(response){
                    
                    if(response.status == 'success') {
                        $("#detailmessage").removeClass( "text-danger" );
                        $("#detailmessage").addClass( "text-success" );
                         
                          window.location.reload();
                    }

                    if(response.status == 'error')
                    {

                        $("#detailmessage").removeClass( "text-success" );
                        $("#detailmessage").addClass( "text-danger" );
                         
                    }
                    $("#detailmessage").html(response.message);
                         
                }
            });
        });

</script>
<!--Date Picker Script-->




<!-- Status Change -->
  <!-- <script type="text/javascript">
    jQuery(document).ready(function(){
         jQuery(document).on("change", ".statusBtn", function(){

          var userId = $(this).attr("data-id");
          var value  = $(this).val();

            hitURL = "<?php echo base_url() ?>vendor/property/statusChange",
            currentRow = $(this);
          
            jQuery.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { id : userId, status : value } 
            }).done(function(data){           
              //currentRow.parents('tr').remove();
              if(data.status = true) { alert("successfully status changed"); }
              else if(data.status = false) { alert("status failed failed"); }
              else { alert("Access denied..!"); }
            });
          
    });
    });
   
</script> -->







<!-- Get Databse List -->
<script type="text/javascript">
   var table;
    
   $(document).ready(function() {
    
       //datatables
       $("#example2").DataTable();
      /* table = $('#example').DataTable({ 
    
           "processing": true, //Feature control the processing indicator.
           "serverSide": true, //Feature control DataTables' server-side processing mode.
           "order": [], //Initial no order.
    
           // Load data for the table's content from an Ajax source
           "ajax": {
               "url": "<?php echo site_url('vendor/salespipeline/client_ajax_list/'.$edit_data->id)?>",
               "type": "POST"
           },
    
           //Set column definition initialisation properties.
           "columnDefs": [
           { 
               "targets": [ 0 ], //first column / numbering column
               "orderable": false, //set not orderable
           },
           ],
    
       });*/
    
   });
</script>
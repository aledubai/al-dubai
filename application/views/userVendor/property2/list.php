	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css" />
	<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
  <style type="text/css">
    table.dataTable thead th, table.dataTable thead td {
        padding: 1px 1px;
        font-size: 13px;
        font-weight: 600;
        font-style: italic;
    }

table.dataTable tbody th, table.dataTable tbody td {
    padding: 1px 1px;
     font-size: 12px;
        font-weight: 400;
}
.table-responsive{
 background-color:  #f8f9fb;
}
  </style>
 		<div class="content-wrapper">
		<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					<i class="fa fa-pie-chart"></i> Property
					<small>Add, Edit</small>
				</h1>
			</section>
			<section class="content">
			<div class="row">
				<div class="col-xs-12 text-right">
					<div class="form-group">
						<a class="btn btn-primary" href="<?php echo base_url(); ?>userVendor/property2/addnew"><i class="fa fa-plus"></i> Add New</a>
					</div>
				</div>
			</div>
			<div class="row">
				<!--col-xs-12-->
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Property List</h3>
							 <div class="box-tools">
								 
							</div>
						</div> 
						<div class="box-body table-responsive">
							<table class="display table" width="100%" id="example">
								<thead>
									<tr>
										 <th><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked></th>
										 <th>ID</th>
										 <th>EXTERNAL REFERNCE</th>
										  <th>PURPOSE</th>
										 <th>TYPE</th>
										 <th>BEDS</th>
										 <th>LOCATION</th>
										 <th>AREA</th>
										 <th>PRICE</th>
										 <th>ASSIGNED</th>
										 <th>PHOTOS</th>
										 <th>UPDATED</th>
										 <th>STATUS</th>
										 <th>QUALITY</th>
										 <th>PRODUCT</th>
                     <th>ADVERTISE</th>
										 <th>CONTRACT</th>
										</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				  <!--end col-xs-12-->
				</div>
			</div>
		</section>
	</div>
<!-- Delete Script-->
  <script type="text/javascript">
    jQuery(document).ready(function(){
        //$('#example').DataTable();

         jQuery(document).on("click", ".deletebtn", function(){

          var userId = $(this).data("userid"),
            hitURL = "<?php echo base_url() ?>userVendor/property2/delete",
            currentRow = $(this);
          
          var confirmation = confirm("Are you sure to delete this Property ?");
          
          if(confirmation)
          {
            jQuery.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { id : userId } 
            }).done(function(data){           
              currentRow.parents('tr').remove();
              if(data.status = true) { alert("Successfully deleted"); }
              else if(data.status = false) { alert("Deletion failed"); }
              else { alert("Access denied..!"); }
            });
          }
    });
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
            "url": "<?php echo site_url('userVendor/property2/ajax_list')?>",
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

<!-- Status Change -->
  <script type="text/javascript">
    jQuery(document).ready(function(){
         jQuery(document).on("change", ".statusBtn", function(){

          var userId = $(this).attr("data-id");
          var value  = $(this).val();

            hitURL = "<?php echo base_url() ?>userVendor/property2/statusChange",
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
   
</script>
 











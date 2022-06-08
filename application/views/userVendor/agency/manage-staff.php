<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css" />
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
 
<style type="text/css">
.btn-rc{
    color: #fff;
    background-color: #33be8b;
    border-color: #33be8b;
}
.btn-rc:hover{
    color: #fff;
    background-color: #278e68;
    border-color: #278e68;
}
.btn-outline-rc
{
    color: #33be8b;
    background-color: transparent;
    background-image: none;
    border-color: #33be8b;
}

.btn-outline-rc:hover 
{
    color: #fff;
    background-color: #33be8b;
    border-color: #33be8b;

}


 .btn-ag{
    color: #fff;
    background-color: #49a8e5;
    border-color: #49a8e5;
}
.btn-ag:hover{
    color: #fff;
    background-color: #49a8e5;
    border-color: #49a8e5;
}
.btn-outline-ag
{
    color: #49a8e5;
    background-color: transparent;
    background-image: none;
    border-color: #49a8e5;
}

.btn-outline-ag:hover 
{
    color: #fff;
    background-color: #49a8e5;
    border-color: #49a8e5;

}
.bg-ag{
    background-color: #49a8e5;
    color: #fff;
}
.text-ag{
   color: #49a8e5;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    }
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
.action_link{
    padding: 0px 4px;
    cursor: pointer;
}
</style>
<div class="content-wrapper"><!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="text-left"><i class="fa fa-user" aria-hidden="true"></i>Manage Staff <small>Add, Edit</small>
        </h1>
        <ol class="breadcrumb">
            <li><button type="button" class="btn btn-primary btnAddStaff text-right" ><i class="fa fa-plus" ></i>ADD STAFF</button></li>
        </ol>
         
        
        
      
     </section>
    <section class="content">

        <div class="box">
             
            <small style="margin-left: 20px;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><a href="#"><b>Advanced Search</b></a></small><!-- Body Content Starts-->
            <div class="box-body">
                <div class="row"><!-- First Column Starts-->
                    <div class="collapse" id="collapseExample" >
                        <div class="row" style="margin-left: -5px;">
                            <div class="col-xs-12">
                                <div class="box-header form-horizontal">
                                    <h6 class="box-title"><B>SEARCH STAFF</B></h6>
                                    <div class="box-tools"></div>
                                </div>
                            </div>
                        </div><!-- Body Content Starts-->
                        <div class="col-sm-4">
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="staff_name" class="col-sm-3 control-label">Name:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-sm" name="staff_name" id="staff_name">
                                        </div>
                                    </div>                           
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="staff_email" class="col-sm-3 control-label">Email:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-sm" name="staff_email" id="staff_email" placeholder="Username" >
                                        </div>
                                    </div>                           
                                </div>
                            </div>
                        </div><!-- Second Column Starts-->
                        <div class="col-sm-4">
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="staff_primary" class="col-sm-3  control-label">Primary:</label>

                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control input-sm" name="SearchStaffPrimaryTextFirst" id="SearchStaffPrimaryTextFirst"   required="" />
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control input-sm" name="SearchStaffPrimaryTextSecond" id="SearchStaffPrimaryTextSecond"   required="" />
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control input-sm" name="SearchStaffPrimaryTextThird" id="SearchStaffPrimaryTextThird" required="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>                           
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="staff_nationality" class="col-sm-3 control-label">Nationality:</label>
                                        <div class="form-group col-sm-9">
                                            <select   class="form-control input-sm" name="StaffNationality" id="StaffNationality" title="Nationality">
                                                <option value="">Select Country</option>
                                                <?php foreach ($listNationality as $k =>$v){
                                                    ?>
                                                    <option value="<?=$k ?>"><?= $v ?></option>
                                                    <?php } ?>
                                            </select>      
                                        </div>
                                    </div>                           
                                </div>
                            </div>
                        </div>
                        <!-- Third Column Starts-->
                        <div class="col-sm-4">                             
                            <div class="box-body">                                    
                                <div class="form-group">
                                    <div class="row">
                                        <label for="staff_team" class="col-sm-3 control-label">Team:</label>
                                        <div class="form-group col-sm-9">
                                            <select class="form-control input-sm" required="" name="staff_team" id="staff_team">
                                                <option value="">Select Team</option>
                                                <?php foreach ($listAssignTo as $k =>$v){ ?>
                                                <option value="<?=$k ?>"><?= $v ?></option>
                                                <?php } ?>
                                            </select>      
                                        </div>
                                    </div>                           
                                </div>


                                <div class="form-group">
                                    <div class="form-group pull-right"> 
                                        <button type="reset" class="btn btn-outline-rc"  id="resetBtnFeature">Reset</button>&nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-rc" id="doneBtnFeature" >Search</button>&nbsp;&nbsp;&nbsp;  
                                    </div>                          
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Lower Body Content Starts-->
                    <div class="row" style="margin-left: -5px;">
                        <div class="col-xs-12">
                            <div class="box-header form-horizontal">
                                <h6 class="box-title"><B>STAFF LIST</B></h6>
                                <div class="box-tools"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Table Content Starts-->
                    <div class="box-body">
                        <div class="row">
                            <div class="box-body" style="overflow-x: auto;">
                                <table class="table  table-bordered  table-striped mb-0" id='example' style="font-size: 12px; width: 1070px; margin-left: 15px;">
                                    <thead>     
                                        <tr role="row">
                                            <th><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></th>
                                            <th>NAME</th>
                                            <th>INITIALS</th>
                                            <th>EMAIL</th>
                                            <th>PRIMARY NO</th>
                                            <th>SECONDARY NO</th>                               
                                            <th>TEAM</th>
                                            <th>LISTINGS(R)</th>
                                            <th>LISTINGS(S)</th>
                                            <th>CONTROL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></th>
                                            <td>waseem Abidi</td>
                                            <td>-</td>
                                            <td>waseemabidi@homestation.com</td>
                                            <td>123456789</td>
                                            <td>-</td>
                                            <td></td>
                                            <td>0</td>                               
                                            <td>0</td>                               
                                            <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i><i class="fa fa-user-secret" aria-hidden="true"></i><i class="fa fa-user-plus" aria-hidden="true"></i><i class="fa fa-money" aria-hidden="true"></i><i class="fa fa-lock" aria-hidden="true"></i><i class="fa fa-trash" aria-hidden="true"></i></td>                               
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include_once "add-staff.php"?>

<script type="text/javascript">
  
$(document).ready(function() {
var table;

    //datatables
    table = $('#example').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('userVendor/agency/ajax_staff_list')?>",
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
    $(document).ready(function(){
        $(".BtnClose").click(function(){
            $(".themeModal").addClass("hidden");
        });
        $(".btnAddStaff").click(function(){
            $(".themeModal").addClass("hidden");
            $("#themeStaff").removeClass("hidden");
            $("#StaffActionMode").val('Add');
            $("#StaffID").val('');
            $("#StaffName").val('');
            $("#NameInArabic").val('');
            $("#StaffEmail").val('');
            $("#StaffBRN").val('');
            $("#StaffRePassword").val('');
            $("#StaffAboutYou").val('');
            $("#StaffPrimaryTextFirst").val('');
            $("#StaffPrimaryTextSecond").val('');
            $("#StaffPrimaryTextThird").val('');
            $("#StaffSecondaryTextFirst").val('');
            $("#StaffSecondaryTextSecond").val('');
            $("#StaffFaxFirst").val('');
            $("#StaffFaxSecond").val('');
            $("#StaffFaxThird").val('');
            $("#StaffAddress").val('');
            $("#StaffZip").val('');
            $("#StaffSkype").val('');
            $("#StaffWhatsApp").val('');
            $("#StaffPassport").val('');
                    $("input[name=StaffIsActive]").each(function() {
                       
                        $( this ).prop( "checked", false );
                        
                    });
                    $('#Staffpreview').html('');

        });
        $(".themeModalBtnClose").click(function(){
            $(".themeModal").addClass("hidden");
        });
    });
     
     function setblank()
    {
        setTimeout(function(){ 
            $("formmessage").html('');
            $("#Staffpreview").html('');
            $(".themeModal").addClass("hidden");
         }, 3000);
    }
     function editStaff(id)
     {
        $(".themeModal").addClass("hidden");
            $("#themeStaff").removeClass("hidden");

            $.ajax({
            url: "<?=base_url()?>userVendor/agency/get_staff_detail/"+id,
            type: 'post',
            dataType: "json",
            success: function(response){
                if(response.status =='error')
                {
                    alert(response.message);
                }else
                {
                    var data = response.message;
                     
                    // set parameter if data exist for edit
                    $("#StaffID").val(id);
                    $("#StaffActionMode").val('Edit');
                     
  
                    $("#StaffName").val(data.StaffName);
                    $("#NameInArabic").val(data.NameInArabic);
                    $("#StaffEmail").val(data.StaffEmail);
                    $("#StaffBRN").val(data.StaffBRN);
                    $("#StaffPassword").val(data.StaffPassword);
                    $("#StaffRePassword").val(data.StaffPassword);
                    $("#StaffAboutYou").val(data.StaffAboutYou);
                     
                    $("#StaffPrimaryTextFirst").val(data.StaffPrimaryTextFirst);
                    $("#StaffPrimaryTextSecond").val(data.StaffPrimaryTextSecond);
                    $("#StaffPrimaryTextThird").val(data.StaffPrimaryTextThird);
                    $("#StaffSecondaryTextFirst").val(data.StaffSecondaryTextFirst);
                    $("#StaffSecondaryTextSecond").val(data.StaffSecondaryTextSecond);
                    $("#StaffFaxFirst").val(data.StaffFaxFirst);
                    $("#StaffFaxSecond").val(data.StaffFaxSecond);
                    $("#StaffFaxThird").val(data.StaffFaxThird);
                    $("#StaffAddress").val(data.StaffAddress);
                    $("#StaffZip").val(data.StaffZip);
                    $("#StaffNationality").val(data.StaffNationality);
                     
                    $("#StaffSkype").val(data.StaffSkype);
                    $("#StaffWhatsApp").val(data.StaffWhatsApp);
                    $("#StaffPassport").val(data.StaffPassport);


                    $('#Staffpreview').html('<div class="col-sm-4 mt-4 alert alert-secondary box-shadow-rc alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> '+
                '<img style="height:160px;width: 100%;" src="<?=base_url()?>uploads/agency/staff/'+data.StaffTumbnail+'" class="thumb"><input type="hidden"  name="StaffuploadImageName"  id="StaffuploadImageName" style="width:100%;" value="'+data.StaffTumbnail+'">' +'</div>');
                     
                    $("input[name=StaffIsActive]").each(function() {
                       if($( this ).val() == data.StaffIsActive)
                       {
                        $( this ).prop( "checked", true );
                       }
                    });
                     
                }
            }
        });
     }
</script>
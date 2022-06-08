<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css" />
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
</style>
<div class="content-wrapper"><!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-user" aria-hidden="true"></i> Manage Staff
            <small>Add, Edit</small>
        </h1>
     </section>
     <!-- main-container-->
    




    <section class="content">
        <div class="box">

            <div class= "box-body table-responsive">
                        <table class="table card-table table-vcenter  border text-nowrap">
                        <thead>                       
                        <tr>
                        <th class="pull-right"><button type="button" class="btn btn-primary btnAddStaff" style="width: 150px;"><i class="fa fa-plus" style="margin: 3px;" aria-hidden="true"></i>ADD STAFF</button></th>
                            
                        </tr>
                        </thead>
                        </table>
                    </div>



            <small style="margin-left: 20px;"><a href="#"><i class="fa fa-caret-up" aria-hidden="true"></i><b>Advanced Search</b></a></small>


                 <!-- Body Content Starts-->


                    <div class="row" style="margin-left: -5px;">
                        <div class="col-xs-12">
                            <div class="box-header form-horizontal">
                                <h6 class="box-title"><B>SEARCH STAFF</B></h6>
                                <div class="box-tools"></div>
                            </div>
                        </div>
                    </div>




                    <!-- Body Content Starts-->


                    <div class="box-body">
                        <div class="row">

                            <!-- First Column Starts-->

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
                            </div>

                            <!-- Second Column Starts-->

                            <div class="col-sm-4">                             
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="staff_primary" class="col-sm-3 control-label">Primary:</label>
                                            <div class="col-sm-2">
                                            <input type="text" class="form-control input-sm" name="staff_primary1" id="staff_primary1">
                                            </div>
                                            <div class="col-sm-2">
                                            <input type="text" class="form-control input-sm" name="staff_primary2" id="staff_primary2">
                                            </div>
                                            <div class="col-sm-5">
                                            <input type="text" class="form-control input-sm" name="staff_primary3" id="staff_primary3">
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
                                        <table class="table  table-bordered  table-striped mb-0" style="font-size: 12px; width: 1070px; margin-left: 15px;">
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
    </section>
</div>
<?php include_once "add-staff.php"?>
<script type="text/javascript">
    $(document).ready(function(){
        $(".btnAddStaff").click(function(){
            $(".themeModal").addClass("hidden");
            $("#themeStaff").removeClass("hidden");
        });
        $(".themeModalBtnClose").click(function(){
            $(".themeModal").addClass("hidden");
        });
    });
     
     function setblank()
    {
        setTimeout(function(){ 
            $("formmessage").html('');
            $(".themeModal").addClass("hidden");
         }, 3000);
    }
</script>
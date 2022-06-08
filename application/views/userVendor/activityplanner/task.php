<!-- Head-->              



                    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css" />
                    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>

                    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                    <link rel="stylesheet" href="/resources/demos/style.css">
                    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        


<!-- Head--> 





                <div class="content-wrapper">
<!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            <i class="fa fa-user" aria-hidden="true"></i> Task
                            <small>Add, Edit</small>
                        </h1>
                     </section>



<!-- Content Header (Menu) -->


                    <section class="content">
                    <div class="box">



                    <div class= "box-body table-responsive">

                    <table class="table card-table table-vcenter  border text-nowrap">
                    <thead>

                        

                    <tr>
                    <th><button type="button" class="btn btn-success" style="width: 150px;"><i class="fa fa-plus-circle" aria-hidden="true" style="margin: 5px;"></i>UPCOMING()</button></th>

                    <th>

                        <button type="button" class="btn pull-left" style="width: 150px; margin-left:-160px; background-color: white; border-color: #D3D3D3;" ><i class="fa fa-shopping-cart" aria-hidden="true" style="margin: 5px;"></i>COMPLETED()</button></th>

                    <th><button type="button" class="btn" style="width: 150px;   background-color: white; border-color: #D3D3D3;" ><i class="fa fa-key" aria-hidden="true" style="margin: 5px;"></i>ALL()</button></th>

                    <th><button type="button" class="btn btn-primary pull-right" style="width: 150px;"><i class="fa fa-plus" aria-hidden="true" style="margin: 5px;"></i>ADD TASK()</button></th>

                   
   
                    </tr>
                    </thead>
                    </table>
                    </div>



                        <small style="margin-left: 20px; color: #00bfff;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-caret-up" aria-hidden="true"></i><b>Advance Search</b></small>


                        <small style="margin-left: 20px;"><a href="#" style="color: black;"><i class="fa fa-calendar" aria-hidden="true"></i>
                        <b>Calender View</b></a>
                        </small>





                        <!-- Content Body Heading-->

                <div class="collapse" id="collapseExample">

                    <div class="row" style="margin-left: -5px;">
                        <div class="col-xs-12">
                            <div class="box-header form-horizontal">
                                <h6 class="box-title"><B>QUICK SEARCH</B></h6>
                                <div class="box-tools"></div>
                            </div>
                        </div>
                    </div>




                        <!-- Content Body Starts-->


                        <div class="box-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="box-body">


                           


                    <div class="form-group">
                        <div class="row">
                            <label for="activity_staff" class="col-sm-3 control-label">Staff:</label>
                            <div class="col-sm-9">
                                    <select class="form-control input-sm" required="" name="activity_staff" id="activity_staff">
                                    <option value="">Waseem Abidi</option>
                                    <?php foreach ($TypeList as $k =>$v){ ?>
                                    <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                         </div>
                    </div>


                        </div>
                    </div>




                    <!-- Second Column-->



                    



            <div class="col-sm-4">
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                                        <label for="activity_date" class="col-sm-3 control-label">Date:</label>
                            <div class="col-sm-9">
                                <div class="col-sm-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control input-sm datepicker"  name="activity_dateFrom" id="activity_dateFrom" placeholder="From" >
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-secondary btn-flat"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control input-sm datepicker"  name="activity_dateTo" id="activity_dateTo" placeholder="To">
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-secondary btn-flat"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>




                    <!-- Third Column-->



            <div class="col-sm-4">
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                                        <label for="activity_deadline" class="col-sm-3 control-label">Deadline:</label>
                            <div class="col-sm-9">
                                <div class="col-sm-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control input-sm datepicker"  name="activity_deadlineFrom" id="activity_deadlineFrom" placeholder="From" >
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-secondary btn-flat"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control input-sm datepicker"  name="activity_deadlineTo" id="activity_deadlineTo" placeholder="To">
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-secondary btn-flat"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>



                        <div class="form-group col-sm-12" style="margin-left: -15px;">
                            <div class="form-group pull-right"> 
                                <button type="reset" class="btn" style="color: green; border-color: green; background-color: white" id="resetBtnFeature">Reset</button>&nbsp;&nbsp;&nbsp;
                                <button type="button" class="btn btn-success" id="doneBtnFeature" >Search</button>&nbsp;&nbsp;&nbsp;  
                            </div> 
                        </div>
                
                </div>
            </div>

        </div>




                    <!-- Lower Body Content Start-->


                        
                                    <div class="row" style="margin-left: -5px;">
                                        <div class="col-xs-12">
                                            <div class="box-header form-horizontal">
                                                <h6 class="box-title"><B>TASKS LIST</B></h6>
                                                <div class="box-tools"></div>
                                            </div>
                                        </div>
                                    </div>



                    <!-- Table Content Body Starts-->


            <div class="box-body">
                <div class="row">
                    <div class="box-body" style="overflow-x: auto;">
                        <table class="table  table-bordered  table-striped mb-0" style="font-size: 12px; width: 1050px; margin-left: 15px;">
                        <thead>     
                            <tr role="row">
                                <th><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></th>
                                <th>#</th>
                                <th>TYPE</th>
                                <th>TASK AGAINST</th>
                                <th>STAFF</th>
                                <th>ADDED BY</th>                               
                                <th>DATE ADDED</th>
                                <th>DEADLINE</th>
                                <th>LATEST NOTE</th>
                                <th>STATUS</th>
                                <th>CONTROLS</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">No records found!</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                
                            </tr>
                        </tbody>

                        
                          
                        </table>
                    </div>
                </div>
            </div>



                <!-- Lower Body Content-->

                <div class="box-body">
                    <div class="row">
                        <div class="form-group col-sm-3 pull-right">
                            <select class="form-control input-sm" required="" name="activity_perPage" id="activity_perPage">
                                    <option value="">per page</option>
                                    <?php foreach ($TypeList as $k =>$v){ ?>
                                    <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                    <?php } ?>
                                </select> 
                        </div>
                    </div>
                </div>



                <div class="box-body">
                    <div class="row">
                        <div class="form-group col-sm-3 pull-right">
                            <small class="pull-right"><i class="fa fa-file-excel-o" aria-hidden="true" style="margin: 5px;"></i>Generate Report</small> 
                        </div>
                    </div>
                </div>








                    
        </div>
        </section>



        </div>
        </div>
        </div>


            <script>
                  $( function() {
                    $( ".datepicker" ).datepicker();
                  } );
            </script>


















    					









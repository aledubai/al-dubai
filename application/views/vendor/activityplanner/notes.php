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
                            <i class="fa fa-user" aria-hidden="true"></i> Notes
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
                    <th><button type="button" class="btn btn-success" style="width: 150px;" >LISTINGS</button></th>

                    <th>

                        <button type="button" class="btn" style="width: 150px;  background-color: white; border-color: #D3D3D3;" >LEADS</button></th>

                    <th><button type="button" class="btn" style="width: 150px;  background-color: white; border-color: #D3D3D3;" >DEALS</button></th>

                    <th><button type="button" class="btn" style="width: 150px;  background-color: white; border-color: #D3D3D3;" >TASK</button></th>

                    <th><button type="button" class="btn" style="width: 150px;  background-color: white; border-color: #D3D3D3;" >CONTACTS</button></th>
   
                    </tr>
                    </thead>
                    </table>
                    </div>


                        <small style="margin-left: 20px; color: #00bfff;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-caret-up" aria-hidden="true"></i><b>Advance Search</b></small>



                        <!-- Body Content Starts-->

                 <div class="collapse" id="collapseExample">
                    <div class="row" style="margin-left: -5px;">
                        <div class="col-xs-12">
                            <div class="box-header form-horizontal">
                                <h6 class="box-title"><B>QUICK SEARCH</B></h6>
                                <div class="box-tools"></div>
                            </div>
                        </div>
                    </div>






        <div class="box-body">
            <div class="row">
                <div class="col-sm-6">                             
                    <div class="box-body">
                                     

                        <div class="form-group">
                            <div class="row">
                                            <label for="note_staff" class="col-sm-3 control-label">Staff:</label>
                                <div class="col-sm-9">
                                            <select class="form-control input-sm" required="" name="note_staff" id="note_staff">
                                            <option value="">Select</option>
                                            <?php foreach ($TypeList as $k =>$v){ ?>
                                            <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                            <?php } ?>
                                    </select>
                                </div>
                             </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <label for="note_keyword" class="col-sm-3 control-label">Keyword:</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control input-sm" name="note_keyword" id="note_keyword"  >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                        <!-- Second Column Details-->



                <div class="col-sm-6">                              
                    <div class="box-body">                                    
                        <div class="form-group">
                            <div class="row">
                                <label for="note_date" class="col-sm-3 control-label">Activity Date:</label>
                                    <div class="col-sm-9">
                                        <div class="col-sm-6">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control input-sm datepicker"  name="note_dateFrom" id="note_dateFrom" placeholder="From" >
                                                <span class="input-group-btn">
                                                <button type="button" class="btn btn-secondary btn-flat"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                                </span>
                                            </div>
                                         </div>
                                        <div class="col-sm-6">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control input-sm datepicker"  name="note_dateTo" id="note_dateTo" placeholder="To">
                                                <span class="input-group-btn">
                                                <button type="button" class="btn btn-secondary btn-flat"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>




                        <div class="form-group col-sm-12">
                            <div class="form-group pull-right"> 
                                <button type="reset" class="btn" style="color: green; border-color: green; background-color: white" id="resetBtnFeature">Reset</button>&nbsp;&nbsp;&nbsp;
                            
                                <button type="button" class="btn btn-success" id="doneBtnFeature" >Search</button>&nbsp;&nbsp;&nbsp;  
                            </div> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




        <!-- Lower Body Content-->



                    <div class="row" style="margin-left: -5px;">
                        <div class="col-xs-12">
                            <div class="box-header form-horizontal">
                                <h6 class="box-title"><B>NOTE LIST</B></h6>
                                <div class="box-tools"></div>
                            </div>
                        </div>
                    </div>    






                    <!-- Table Content Lower Body-->




            <div class="box-body ">
                <div class="row">
                    <div class="box-body" style="overflow-x: auto;">
                        <table class="table  table-bordered  table-striped mb-0" style="font-size: 12px; width: 1050px; margin-left: 15px;">
                        <thead>     
                            <tr role="row">
                                <th><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></th>
                                <th>ID</th>
                                <th>ADDED BY</th>
                                <th>DATE ADDED</th>
                                <th>NOTE</th>
                                <th>CONTROLS</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></th>
                                <td><a href="#">1466-Of-R-0142</a>
                                </td>
                                <td>Nouman</td>
                                <td>2020-07-22 13:54:52</td>
                                <td>previous ref no: NOM-1</td>
                                <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                                
                            </tr>
                        </tbody>

                        <tbody>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></th>
                                <td><a href="#">1466-Of-R-0142</a>
                                </td>
                                <td>Nouman</td>
                                <td>2020-07-22 13:54:52</td>
                                <td>previous ref no: NOM-1</td>
                                <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                                
                            </tr>
                        </tbody>
                          
                        </table>
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

















    					









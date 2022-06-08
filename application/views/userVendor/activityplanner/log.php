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
                            <i class="fa fa-user" aria-hidden="true"></i> Activity Log
                            <small>Add, Edit</small>
                        </h1>
                     </section>



<!-- Content Header (Menu) -->


                    <section class="content">
                    <div class="box">


                        <!-- Body Content Starts-->



                        <small style="margin-left: 20px; color: #00bfff;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-caret-up" aria-hidden="true"></i><b>Advance Search</b></small>


                        <div class="collapse" id="collapseExample">
                            <div class="row" style="margin-left: -5px;">
                                <div class="col-xs-12">
                                    <div class="box-header form-horizontal">
                                        <h6 class="box-title"><B>SEARCH LOG</B></h6>
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
                                            <label for="note_staff" class="col-sm-3 control-label">Group:</label>
                                <div class="col-sm-9">
                                            <select class="form-control input-sm" required="" name="note_staff" id="note_staff">
                                            <option value="">Listing</option>
                                            <?php foreach ($TypeList as $k =>$v){ ?>
                                            <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                            <?php } ?>
                                    </select>
                                </div>
                             </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <label for="note_keyword" class="col-sm-3 control-label">ID:</label>
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
                                                <input type="text" class="form-control input-sm datepicker"  name="note_dateFrom" id="" placeholder="From" >
                                                <span class="input-group-btn">
                                                <button type="button" class="btn btn-secondary btn-flat"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                                </span>
                                            </div>
                                         </div>
                                         <div class="col-sm-6">
                                            <div class="input-group input-group-sm" >
                                                <input type="text" class="form-control input-sm datepicker"  name="note_dateFrom" id="" placeholder="To" >
                                                <span class="input-group-btn">
                                                <button type="button" class="btn btn-secondary btn-flat"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                                </span>
                                            </div>
                                         </div>

                                        
                                    </div>
                                 </div>
                            </div>


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
                                <h6 class="box-title"><B>LOG LIST</B></h6>
                                <div class="box-tools"></div>
                            </div>
                        </div>
                    </div>    






                    <!-- Table Content Lower Body-->




            <div class="box-body ">
                <div class="row">
                    <div class="box-body" style="overflow-x: auto;">
                        <table class="table table-responsive  table-bordered  table-striped mb-0" style="font-size: 12px; width: 1050px; margin-left: 15px;">
                        <thead>     
                            <tr role="row">                               
                                <th>ID</th>
                                <th>NOTIFICATION</th>
                                <th>STAFF</th>
                                <th>GROUP</th>
                                <th>PUBLISHED</th>
                                <th>VIEW</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">15534</th>
                                <td>The Listing #1466-Ap-R-0349 has been updated by Waseem Abidi. (Status(live))</td>
                                <td>Waseem Abidi</td>
                                <td>Listing</td>
                                <td>04/02/21 00:30:45</td>
                                <td><i class="fa fa-share-square-o" aria-hidden="true"></i></td>
                                
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row">15534</th>
                                <td>The Listing #1466-Ap-R-0349 has been updated by Waseem Abidi. (Status(live))</td>
                                <td>Waseem Abidi</td>
                                <td>Listing</td>
                                <td>04/02/21 00:30:45</td>
                                <td><i class="fa fa-share-square-o" aria-hidden="true"></i></td>
                                
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

















    					









    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css" />
    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>



    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


            


        <style type="text/css">
       .attach_btn{
        color: green;
    background: #ffffff;
    border: white
    }
    .attach_btn:hover{
        color: green;
    background: #ffffff !important;
    border: white;

    }

        </style>


<!-- Head--> 





                <div class="content-wrapper">
<!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            <i class="fa fa-user" aria-hidden="true"></i> Email
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
                    <th class="pull-right"><button type="button" class="btn btn-primary" style="width: 150px;"><i class="fa fa-plus" style="margin: 3px;" aria-hidden="true"></i>NEW MAIL</button></th>
                    
                    </tr>
                    </thead>
                    </table>
                    </div>


                                 <!-- Body Content Starts-->










                    <div class="row" style="margin-left: -5px;">
                        <div class="col-xs-12">
                            <div class="box-header form-horizontal">
                                <h6 class="box-title"><B>NEW EMAIL</B></h6>
                                <div class="box-tools"></div>
                            </div>
                        </div>
                    </div>



                    <div class="box-body col-sm-12">
                        <div class="form-group">
                            <a href="#" class="col-sm-6" style="color: black; margin-left: 180px;"><b>BCC</b></a>

                              <div class="btn btn-default btn-file attach_btn" style="right:230px; bottom: 10px;">
                              <i class="fa fa-paperclip"></i> Attach File
                              <input type="file" name="attachment" style="background: #ffffff;">
                              </div>



                            <a href="#" class="col-sm-12" style="color: black; margin-left: 180px;"><b>Email Address(es)</b></a>
                            
                                
                        </div>
                    </div>


                    



                    <div class="box-body col-sm-12">
                        <div class="form-group">
                            <label for="email_con" Title="Email Contact" class="col-sm-2 control-label">Contact:</label>
                                <div class="col-sm-6">
                                      <input type="text" class="form-control" style="height: 50px;" id="email_con" placeholder="Maximum of 45 Email addresses allowed">
                               </div>
                                <div class="col-sm-4">
                                        <select class="form-control input-sm" style="height: 50px;" required="" name="email_select" id="email_select">
                                        <option value="">Select Mailing List</option>
                                        <?php foreach ($TypeList as $k =>$v){ ?>
                                        <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                        <?php } ?>
                                        </select>
                               </div>
                        </div>
                    </div>



                    <div class="box-body col-sm-12">
                        <div class="form-group">
                            <label for="email_subject" Title="Email Subject" class="col-sm-2 control-label">Subject:<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                      <input type="text" class="form-control" id="email_subject" placeholder="Enter Subject for email">
                               </div>
                        </div>
                    </div>



                    <div class="box-body col-sm-12">
                        <div class="form-group">
                            <label for="email_content" Title="Email Content" class="col-sm-2 control-label">Email Content:<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea Title="Email_Content" class="form-control  text-left" style="height: 300px;" name="add_content" id='email_content' class="form-control input-sm"></textarea> 
                                </div>
                        </div>
                    </div>



                    <div class="col-sm-12 mt-4">
                        <div class="form-group pull-right"> 
                            <button type="reset" class="btn BtnClose" style="color: green; border-color: green; background-color: white" id="resetBtnFeature" >Cancel</button>&nbsp;&nbsp;&nbsp; 
                            <button type="button" class="btn btn-success BtnClose" id="doneBtnFeature" >Send Email</button>&nbsp;&nbsp;&nbsp;  
                        </div>

                    </div>



                    <!-- Lower Body Content Starts-->






                            <small style="margin-left: 20px; color: #00bfff;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-caret-up" aria-hidden="true"></i><b>Advance Search</b></small>




                           




                <div class="collapse" id="collapseExample">
                    <div class="row" style="margin-left: -5px;">
                        <div class="col-xs-12">
                            <div class="box-header form-horizontal">
                                <h6 class="box-title"><B>SEARCH EMAIL</B></h6>
                                <div class="box-tools"></div>
                            </div>
                        </div>
                    </div>




                    <!-- Body Content Starts-->


                     <div class="box-body">
            <div class="row">
                <div class="col-sm-6">                             
                    <div class="box-body">
                                     

                        <div class="form-group">
                            <div class="row">
                                <label for="email_subject" class="col-sm-3 control-label">Subject:</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control input-sm" name="email_subject" id="email_subject"  >
                                </div>
                            </div>                           
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <label for="email_sender" class="col-sm-3 control-label">Sender:</label>
                                <div class="col-sm-9">
                                            <select class="form-control input-sm" required="" name="email_sender" id="email_sender">
                                            <option value="">Select</option>
                                            <?php foreach ($TypeList as $k =>$v){ ?>
                                            <option value="<?=$k ?>" value="<?php $type=  set_value('product[price]') ?>"><?= $v ?></option>
                                            <?php } ?>
                                    </select>
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
                                <label for="email_sentTime" class="col-sm-3 control-label">Sent Time:</label>
                                    <div class="col-sm-9">
                                        <div class="col-sm-6">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control input-sm datepicker"  name="email_sentTimeFrom" id="" placeholder="From" >
                                                <span class="input-group-btn">
                                                <button type="button" class="btn btn-secondary btn-flat"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                                </span>
                                            </div>
                                         </div>
                                        <div class="col-sm-6">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control input-sm datepicker"  name="email_sentTimeTo" id="email_sentTimeTo" placeholder="To">
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
                                <h6 class="box-title"><B>EMAIL LOG</B></h6>
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
                                <th>SUBJECT</th>
                                <th>SENDER</th>
                                <th>SENT TIME</th>
                                <th>RECIPIENT</th>
                                <th>PREVIEW</th>
                                
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

















    					









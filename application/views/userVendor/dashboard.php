<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<style type="text/css">
  .small-box{

      display: block;
    background: #fff;
    box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
    border-radius: 2px;

  }
  .timeline-item {
    -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
    box-shadow: 2px 2px 2px 2px rgb(0 0 0 / 15%);
    border-radius: 3px;
    margin-top: 15px;
    background: #fff;
    color: #444;
    padding: 10px;
    position: relative;
  }
  .time{
    color: green;
  }
  .notify{
    color: green;
  }
</style>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Control panel</small>
      </h1>
    </section>
    
 		<section class="content">
          <!-- Info boxes -->
          <div class="row">

            <!-- Small Box Content Starts-->
            <!-- First Box-->
            <div class="col-lg-3 col-xs-6">
              <div class="small-box" style="background-color: #56a5ff; padding: 26px; height: 115px; border-radius: 6px">
                <div class="inner">
                  <h3 style="color: black; text-align: center;">226</h3>
                </div>
                <!-- <label class="small-box-footer" style="color: black;">TOTAL LISTINGS</label> -->
              </div>
            </div>
            <!-- Second Box-->
            <div class="col-lg-3 col-xs-6">
              <div class="small-box" style="background-color: #45dcbe; padding: 26px; height: 115px; border-radius: 6px">
                <div class="inner">
                  <h3 style="color: black; text-align: center;">350</h3>
                </div>
               <!--  <label class="small-box-footer" style="color: black;">BROKERPAD LEADS</label> -->
              </div>
            </div>
            <!-- Third Box-->
            <div class="col-lg-3 col-xs-6">
              <div class="small-box" style="background-color: #ffc26b; padding: 26px; height: 115px; border-radius: 6px">
                <div class="inner">
                  <h3 style="color: black; text-align: center;">2230</h3>
                </div>
                <!-- <label class="small-box-footer" style="color: black;">BAYUT LEADS</label> -->
              </div>
            </div>
            <!-- Fourth Box-->
            <div class="col-lg-3 col-xs-6">
              <div class="small-box" style="background-color: #ff738a; padding: 26px; height: 115px; border-radius: 6px">
                <div class="inner">
                  <h3 style="color: black; text-align: center;">646</h3>
                </div>
                <!-- <label class="small-box-footer" style="color: black;">DUBIZZLE LEADS</label> -->
              </div>
            </div>
          </div>
       
            <!-- Small Box Content Ends-->

            <!--Middle Body Content Starts-->
         
          <div class="row">
            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                     
               

                    <!-- First Column-->
                    <h4 style="color: green;"> <i class="fa fa-list" aria-hidden="true"></i> Live Listings <small style="display: inline-block; color: black; font-style: italic;">(Click on the bar to view listings on respective portals)</small></h4>

                    <div id="lineChart_div" style="margin-left: 20px;"></div>
                    
                    <!--First Column Ends-->
                     </div>
              </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->


          <!--New-->

          <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="row"> 
                  <!-- Second Column Starts-->
                  <div class="col-md-12">
                    <h4 style="color: green;"> <i class="fa fa-list" aria-hidden="true"></i> Live Listings <small style="display: inline-block; color: black; font-style: italic;">(Click on the bar to view listings on respective portals)</small></h4>

                    <!--Graph Content Starts-->

                    <div class="col-md-12">
                      <div class="box-body chart-responsive">
                        <div id="chart_div" ></div>
                    </div>
                </div>
                <!--GRAPH END-->
              </div>
              <!--Second Column Ends-->
              </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!--New End-->
          </div>
         <!--Row End-->


          <!--Lower Body Content Starts-->
         
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                     
                        <div class="box-body">
                    <div class="row">
                        <div class="box-body" style="overflow-x: auto;">
                            <table class="table  table-bordered  table-striped mb-0" style="font-size: 12px;">
                            <thead>     
                                <tr role="row">
                                    <th><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></th>
                                    <th>TEAM</th>
                                    <th>CREATED ON</th>
                                    <th>TEAM MEMBERS</th>
                                    <th>TEAM MANAGEMENT</th>
                                    <th>TEAM CONTROLS</th>                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></th>
                                    <td>1</td>
                                    <td>27/2/2021</td>
                                    <td>Waseem Abidi</td>
                                    <td>Amjad Khan</td>
                                    <td>Admin</td>                               
                                </tr>
                            </tbody>                          
                            </table>
                        </div>
                    </div>
                </div>

                    
                     </div>
              </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          <!--New End-->
          </div>
         <!--Row End-->
         <!--Lower Body Content Starts-->


          <!--Middle Body Content Starts-->
         
          <div class="row">
            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                     
               

                    <!-- First Column-->
                   
                    <div id="donutchart" style="width: 500px; height: 300px;"></div>
                   
                    
                    <!--First Column Ends-->
                     </div>
              </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->


          <!--New-->

          <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Members</h3>
                  <div class="box-tools pull-right">
                    <span class="label label-danger">8 New Members</span>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="row"> 
                  <!-- Second Column Starts-->
                  <div class="col-md-12">  
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <li>
                      <img src="<?=base_url('assets/images/Dash1.jpg');?>" alt="User Image">
                      <a class="users-list-name" href="#">Alexander Pierce</a>
                      <span class="users-list-date">Today</span>
                    </li>
                    <li>
                      <img src="<?=base_url('assets/images/Dash1.jpg');?>" alt="User Image">
                      <a class="users-list-name" href="#">Norman</a>
                      <span class="users-list-date">Yesterday</span>
                    </li>
                    <li>
                      <img src="<?=base_url('assets/images/Dash1.jpg');?>" alt="User Image">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="<?=base_url('assets/images/Dash1.jpg');?>" alt="User Image">
                      <a class="users-list-name" href="#">John</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="<?=base_url('assets/images/Dash1.jpg');?>" alt="User Image">
                      <a class="users-list-name" href="#">Alexander</a>
                      <span class="users-list-date">13 Jan</span>
                    </li>
                    <li>
                      <img src="<?=base_url('assets/images/Dash1.jpg');?>" alt="User Image">
                      <a class="users-list-name" href="#">Sarah</a>
                      <span class="users-list-date">14 Jan</span>
                    </li>
                    <li>
                      <img src="<?=base_url('assets/images/Dash1.jpg');?>" alt="User Image">
                      <a class="users-list-name" href="#">Nora</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                    <li>
                      <img src="<?=base_url('assets/images/Dash1.jpg');?>" alt="User Image">
                      <a class="users-list-name" href="#">Nadia</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>











                </div>
                <!--GRAPH END-->
              </div>
              <!--Second Column Ends-->
              </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!--New End-->
          </div>
         <!--Row End-->

         <!--Lower Low Body Content-->





          

          </div>
    </section>
</div>

<script type="text/javascript">
  

google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawAxisTickColors);

function drawAxisTickColors() {
       var data = google.visualization.arrayToDataTable([
        ['Genre', 'Fantasy & Sci Fi', 'Romance', 'Mystery/Crime', 'General',
         'Western', 'Literature', { role: 'annotation' } ],
        ['2010', 10, 24, 20, 32, 18, 5, ''],
        ['2020', 16, 22, 23, 30, 16, 9, ''],
        ['2030', 28, 19, 29, 30, 12, 13, ''],
        ['2040', 28, 19, 29, 30, 12, 13, '']
      ]);


      var options = {
        width: 480,
        height: 380,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: true,
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }


//Line Chart

google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawLineColors);

function drawLineColors() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Dogs');
      data.addColumn('number', 'Cats');

      data.addRows([
        [0, 0, 0],    [1, 10, 5],   [2, 23, 15],  [3, 17, 9],   [4, 18, 10],  [5, 9, 5],
        [6, 11, 3],   [7, 27, 19],  [8, 33, 25],  [9, 40, 32],  [10, 32, 24], [11, 35, 27],
        [12, 30, 22], [13, 40, 32], [14, 42, 34], [15, 47, 39], [16, 44, 36], [17, 48, 40],
        [18, 52, 44], [19, 54, 46], [20, 42, 34], [21, 55, 47], [22, 56, 48], [23, 57, 49],
        [24, 60, 52], [25, 50, 42], [26, 52, 44], [27, 51, 43], [28, 49, 41], [29, 53, 45],
        [30, 55, 47], [31, 60, 52], [32, 61, 53], [33, 59, 51], [34, 62, 54], [35, 65, 57],
        [36, 62, 54], [37, 58, 50], [38, 55, 47], [39, 61, 53], [40, 64, 56], [41, 65, 57],
        [42, 63, 55], [43, 66, 58], [44, 67, 59], [45, 69, 61], [46, 69, 61], [47, 70, 62],
        [48, 72, 64], [49, 68, 60], [50, 66, 58], [51, 65, 57], [52, 67, 59], [53, 70, 62],
        [54, 71, 63], [55, 72, 64], [56, 73, 65], [57, 75, 67], [58, 70, 62], [59, 68, 60],
        [60, 64, 56], [61, 60, 52], [62, 65, 57], [63, 67, 59], [64, 68, 60], [65, 69, 61],
        [66, 70, 62], [67, 72, 64], [68, 75, 67], [69, 80, 72]
      ]);

      var options = {
        hAxis: {
          title: 'Time'
        },
        vAxis: {
          title: 'Popularity'
        },
        width: 500,
        height: 400,
        colors: ['#a52714', '#097138']
      };

      var chart = new google.visualization.LineChart(document.getElementById('lineChart_div'));
      chart.draw(data, options);
    }



      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }


</script>
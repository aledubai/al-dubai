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
        <small>Control Panel</small>
      </h1>
    </section>
    
    <section class="content">
 		<section class="content">
          <!-- Info boxes -->
             <div class="row">
            <!-- Small Box Content Starts-->
            <!-- First Box-->
            <div class="col-lg-4 col-xs-6">
              <div class="small-box">
                <div class="inner">
                  <h3 style="color: black; text-align: center;"><?php echo @count($property_list);?></h3>
                </div>
                <label class="small-box-footer" style="color: black;">TOTAL PROPERTIES</label>
              </div>
            </div>
            <!-- Second Box-->
            <div class="col-lg-4 col-xs-6">
              <div class="small-box">
                <div class="inner">
                  <h3 style="color: black; text-align: center;"><?php echo @count($leads_list);?></h3>
                </div>
                <label class="small-box-footer" style="color: black;">TOTAL LEADS</label>
              </div>
            </div>
            <!-- Third Box-->
            <div class="col-lg-4 col-xs-6">
              <div class="small-box">
                <div class="inner">
                  <h3 style="color: black; text-align: center;"><?php echo @@count($staff_list);?></h3>
                </div>
                <label class="small-box-footer" style="color: black;">TOTAL AGENTS</label>
              </div>
            </div>
            
          <!-- Lower Body Content Starts -->
          </div>
          
             
        </section>
    </section>
</div>
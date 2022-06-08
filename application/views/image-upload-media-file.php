<?php 
    $path = FCPATH.'uploads/demo/';
    foreach(glob($path.'*') as $filename){
        echo basename($filename) . "\n";
    }
?>

<form role="form" id="member_form" action="<?php echo base_url() ?>admin/property/insertnow" method="post" role="form" enctype="multipart/form-data">
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <p id="msg"></p>

                <input type="file" id="img" name="img" multiple />
            </div>
        </div>
    </div>
</form>



<!-- image upload popup box-->
<style>
    .img_popup_box{
        background: #fff;
        z-index: 9999;
        position: fixed;
        width: 90%;
        top: 5%;
        left: 5%;
        padding: 20px;
        box-shadow: 0 1px 5px 1px grey;
        display: none;
    }
</style>
<div class="img_popup_box" id="img_popup_box">
    <div class="row">
        <div class="col-sm-12">
            <div class="headCon">
                <h2>All Media</h2>
            </div>
        </div>
    </div>
    <!-- body-->
    <div class="row">
        <div class="col-sm-8">
            <div class="bodyCon">
                <h2>All Media</h2>
            </div>
        </div>
    </div>
</div>
<!--// image upload popup box-->


<script type="text/javascript">
    $(document).ready(function (e) {
        $('#member_form').on('submit',(function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type:'POST',
                url: $(this).attr('action'),
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success:function(data){
                    console.log("success");
                    console.log(data);
                },
                error: function(data){
                    console.log("error");
                    console.log(data);
                }
            });
        }));

        $("#img").on("change", function() {
            $("#member_form").submit();
        });
    });
</script>
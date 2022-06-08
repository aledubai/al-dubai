
<!-- Add New Note Modal Start  style="width: 830px; position: absolute; left: 50%; top: 50%;transform: translate(-50%, -50%);" -->
<style>
    @media (min-width: 768px)
    {
        .themeModal { padding: 10% 20% 0px 30%;"}       
    }
</style>
<div class="themeModal hidden" id="NoteModal1">
    <div class="themeModalCon" >
        <div class="row">
            <form id="NoteForm"  action="<?=base_url()?>vendor/salespipeline/insert_contact_note" method="POST">
                <!--col-12-->
                <div class="col-sm-12">
                    <span class="themeModalBtnClose" >x</span>
                </div>
                <!--// col-12-->
                <!--col-12-->
                <div class="col-sm-12">
                    <h3 class="text-center" ><i class="fa fa-file" aria-hidden="true"></i>
                    
                </div>
                <!--// col-12-->
                <!--col-12-->
                <div class="col-sm-12">
                    <h4 class="text-center" ><b>Add New Note</b></h4>
                </div>
                <!--// col-12-->
                <div class="box-body col-sm-12">

                    <div class="row">
                        <div class="col-sm-12">
                            <span id="notemessage" ></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact_note" Title="Description" class="col-sm-2 control-label">Note:<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input type="hidden" name="hiddenNoteContactId" id="hiddenNoteContactId"/>
                            <textarea Title="Description" class="form-control  text-left" required=""  name="contact_note" id='contact_note' class="form-control input-sm"></textarea> 
                        </div>
                    </div>
                </div><!-- col-12--> <!--Buttons -->
                <div class="col-sm-12 mt-4">
                    <div class="form-group pull-right"> 
                        <button type="reset" class="btn btn-outline-rc BtnClose"   >Cancel</button>&nbsp;&nbsp;&nbsp; 
                        <button type="submit" class="btn btn-rc"  >Submit</button>&nbsp;&nbsp;&nbsp;  
                    </div>
                </div><!--// col-12-->
            </form>
        </div>
    </div>    
</div>
<script type="text/javascript">
     $(function() {
        $("#NoteForm").on('submit', function(e) {
            e.preventDefault();

            var contactForm = $(this);

            $.ajax({
                url: contactForm.attr('action'),
                type: 'post',
                data: contactForm.serialize(),
                success: function(response){
                    
                    if(response.status == 'success') {
                        $("#notemessage").removeClass( "text-danger" );
                        $("#notemessage").addClass( "text-success" );
                        $("#NoteForm")[0].reset();
                        setblank();
                    }
                    if(response.status == 'error') {

                        $("#notemessage").removeClass( "text-success" );
                        $("#notemessage").addClass( "text-danger" );
                         
                    }
                    $("#notemessage").html(response.message);
                         
                }
            });
        });

    });
</script>

<!-- Add New Note Modal End -->
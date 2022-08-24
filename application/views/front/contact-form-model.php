 
<div class="mt-1 text-center company-image"  >
   
</div>
<div class="mt-1 text-center">
   <p class="mb-0 text-center">&nbsp;&nbsp;AGENT NAME:<strong class="company-name"></strong></p>
</div>
<hr class="mt-1 mb-1" >
<div class="text-center">
   <a href="#" class="text-success company-url">
      <p class="mb-0"><strong>VIEW ALL PROPERTIES&nbsp;&nbsp;></strong></p>
   </a>
</div>
<hr class="mt-1 mb-1">
<div class="text-dark">
   <div class="row">
      <div class="col-sm-12">
         <span class="error_message" ></span>
      </div>
   </div>
 
   <span>Contact Agent for more information.</span>
   <form class="form-horizontal contact-form-model" method="post" id="contact-form-model" >
      <div class="form-group form-bottom">
         <input type="text" class="form-control form-control-sm contact_name" name="contact_name" placeholder="Full Name" required="required" autocomplete="off">
      </div>
      <div class="form-group form-bottom">
         <input type="email" class="form-control form-control-sm contact_email" name="contact_email" placeholder="Email" required="required" autocomplete="off">
      </div>
      <div class="form-group form-bottom">
         <input type="text" class="form-control form-control-sm contact_mobile"  name="contact_mobile" placeholder="Mobile" maxlength="10" required="required" autocomplete="off">
      </div>
      <div class="form-group form-bottom">
         <input type="hidden" name="landlord_id" class="landlord-id"  value=""> 
         <input type="hidden" name="property_id" class="property-id" value="">
         <textarea class="form-control form-control-sm contact_message" name="contact_message" placeholder="Message" rows="4" autocomplete="off"></textarea>
      </div>
      <div class="form-check mb-1">
         
         <label class="form-check-label" >
            <input type="checkbox" class="form-check-input"  name="keep_me_inform" value="1"> Keep me informed about similar properties.</label>
      </div>
      <div class="form-group form-bottom">
         <button type="submit" class="btn btn-info  btn-sm btn-block  mt-2" value="submit">Send Email</button>
      </div>
   </form>
</div>

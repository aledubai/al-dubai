
<!-- Portal Modal Start -->
<div class="themeModal hidden" id="portalModal1">
    <div class="themeModalCon" style="width: 530px; position: absolute; left: 50%; top: 50%;transform: translate(-50%, -50%);">
        <div class="row">
            <!--col-12-->
            <div class="col-sm-12">
                <span class="themeModalBtnClose" >x</span>
            </div>
            <!--// col-12-->
            <!--col-12-->
            <div class="col-sm-12">
                <h3 class="text-center" ><i class="fa fa-rss-square" aria-hidden="true"></i>
                
            </div>
            <!--// col-12-->
            <!--col-12-->
            <div class="col-sm-12">
                <h4 class="text-center" ><b>MARKETING PORTALS</b></h4>
            </div>
            <!--// col-12-->
            <!--col-12-->
            
             <input type="hidden" name="PortalsID"  value="<?php
                                        echo (isset($portalData->id) && $portalData->id !== '') ? ($portalData->id) : '';
                                    ?>"  >
            <div class="col-sm-12 mt-4">
                <div class="row">
                    <?php foreach ($PortalsList as $k =>$v){ ?>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <input type="checkbox" name="PortalsList[<?=$k?>]" id="PortalsList<?=$k?>"  
                                
                                <?php if(isset($portalData->PortalsList) && $portalData->PortalsList !== '')
                                { 
                                    $EncodedPortal = $portalData->PortalsList;
                                        $PortalDataVal = json_decode($EncodedPortal);
                                         if(isset($PortalDataVal->$k) && $PortalDataVal->$k =='on')
                                          {
                                              echo "checked";
                                         }

                                } ?>
                            />&nbsp;&nbsp;&nbsp;
                            <label for="PortalsList<?=$k?>" ><?=$v?></label>
                        </div>    
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!--// col-12-->
            <!-- col-12-->
            <div class="col-sm-3 col-sm-offset-9 pull-right mt-4">
                <div class="form-group"> 
                    <button type="button" class="btn btn-rc BtnClose" id="doneBtnFeature" >Done</button>&nbsp;&nbsp;&nbsp;  
                </div>

            </div>
            <!--// col-12-->
        </div>
    </div>    
</div>
<!-- Portal Modal End -->
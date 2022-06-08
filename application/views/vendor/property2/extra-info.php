
<!-- ExtraInfo Modal Start -->
<div class="themeModal hidden" id="infoModal1">
    <div class="themeModalCon" style="width: 500px; height: 400px; position: absolute; left: 50%; top: 50%;transform: translate(-50%, -50%);">
        <div class="row">
            <div class="col-sm-12">
                <span class="themeModalBtnClose" >x</span>
            </div>

            <div class="col-sm-12">
                <h3 class="text-center" ><i class="fa fa-info-circle text-rc" aria-hidden="true"></i>
            </div>

            <div class="col-sm-12">
                <h4 class="text-center" ><b>EXTRA INFO</b></h4>
            </div>
            
             <input type="hidden" name="ExtraInfoID"  value="<?php
                                        echo (isset($ExtraInfoData->id) && $ExtraInfoData->id !== '') ? ($ExtraInfoData->id) : '';
                                    ?>" />

            <div class="box-body col-sm-6">
                <div class="form-group">
                    <label for="KeyLocation" class="col-sm-3 control-label">Key Location:</label>
                    <div class="col-sm-9">                             
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control input-sm" id="KeyLocation" name="KeyLocation" 
                                value="<?php echo (isset($ExtraInfoData->KeyLocation) && $ExtraInfoData->KeyLocation !== '') ? ($ExtraInfoData->KeyLocation) : '';?>"
                            />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Str" class="col-sm-3 control-label">STR #:</label>
                    <div class="col-sm-9">                             
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control input-sm" id="Str" name='Str' 
                                 value="<?php echo (isset($ExtraInfoData->Str) && $ExtraInfoData->Str !== '') ? ($ExtraInfoData->Str) : '';?>"
                            />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Dewa" class="col-sm-3 control-label">DEWA #:</label>
                    <div class="col-sm-9">                             
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control input-sm" id="Dewa" name="Dewa" 
                                 value="<?php echo (isset($ExtraInfoData->Dewa) && $ExtraInfoData->Dewa !== '') ? ($ExtraInfoData->Dewa) : '';?>"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body col-sm-6">
                <div class="form-group">
                    <label for="YearlyServiceCharges" class="col-sm-6 control-label">Yearly Service Charges:</label>
                    <div class="col-sm-6">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control input-sm numberAndDot " id="YearlyServiceCharges" name="YearlyServiceCharges" 
                                 value="<?php echo (isset($ExtraInfoData->YearlyServiceCharges) && $ExtraInfoData->YearlyServiceCharges !== '') ? ($ExtraInfoData->YearlyServiceCharges) : '';?>"
                            />
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-secondary btn-flat text-rc">AED</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="MonthlyCoolingCharge" class="col-sm-6 control-label">Monthly Cooling Charges:</label>
                    <div class="col-sm-6">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control input-sm numberAndDot" id="MonthlyCoolingCharge" name="MonthlyCoolingCharge" 
                                 value="<?php echo (isset($ExtraInfoData->MonthlyCoolingCharge) && $ExtraInfoData->MonthlyCoolingCharge !== '') ? ($ExtraInfoData->MonthlyCoolingCharge) : '';?>"
                            />
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-secondary btn-flat text-rc">AED</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="MonthlyCoolingProvider" class="col-sm-6 control-label">Monthly Cooling Provider:</label>
                    <div class="col-sm-6">                             
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control input-sm" id="MonthlyCoolingProvider" name="MonthlyCoolingProvider" 
                                 value="<?php echo (isset($ExtraInfoData->MonthlyCoolingProvider) && $ExtraInfoData->MonthlyCoolingProvider !== '') ? ($ExtraInfoData->MonthlyCoolingProvider) : '';?>"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-sm-offset-9 pull-right mt-4 text-right">
                <div class="form-group"> 
                    <button type="button" class="btn btn-rc BtnClose" id="doneBtnFeature" >Done</button>  
                </div>
            </div>
        </div>
    </div>    
</div>
<!-- ExtraInfo Modal end -->
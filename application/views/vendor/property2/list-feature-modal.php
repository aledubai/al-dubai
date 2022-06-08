
<!-- themeModal  -->
<div class="themeModal hidden" id="themeModal1">
    <div class="themeModalCon">
        <div class="row">
            <div class="col-sm-12">
                <span class="themeModalBtnClose" >x</span>
            </div>
            <div class="col-sm-12">
                <h3 class="text-center" >LISTING FEATURES</h3>
                <p class="text-center" >Amenities marked with  are synced to Dubizzle</p>
            </div>
            <!-- col-12-->
            <div class="col-sm-12 mt-4">
                <h5><b>Recreation and Family</b></h5>
                <div class="row">
                    <?php
                       // print_r($FeaturesData);
                    ?>
                    <input type="hidden" name="FeaturesID" id="FeaturesID" value="<?php
                                        echo (isset($FeaturesData->id) && $FeaturesData->id !== '') ? ($FeaturesData->id) : '';
                                    ?>"  >
                    <?php foreach ($RecreationAndFamily as $k =>$v){ ?>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <input type="checkbox" name="RecreationAndFamily[<?=$k?>]" id="RecreationAndFamily<?=$k?>"
                                <?php if(isset($FeaturesData->RecreationAndFamily) && $FeaturesData->RecreationAndFamily !== '')
                                { 
                                    $EncodedRecreation = $FeaturesData->RecreationAndFamily;
                                        $RecreationData = json_decode($EncodedRecreation);
                                         if(isset($RecreationData->$k) && $RecreationData->$k =='on')
                                          {
                                              echo "checked";
                                         }

                                } ?> />&nbsp;&nbsp;&nbsp;
                            <label for="RecreationAndFamily<?=$k?>" ><?=$v?></label>
                        </div>    
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!--// col-12-->
            <!-- col-12-->
            <div class="col-sm-12 mt-4">
                <h5><b>Health and Fitness</b></h5>
                <div class="row">
                    <?php foreach ($HealthAndFitness as $k =>$v){ ?>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <input type="checkbox" name="HealthAndFitness[<?=$k?>]" id="HealthAndFitness<?=$k?>"  
                            <?php if(isset($FeaturesData->HealthAndFitness) && $FeaturesData->HealthAndFitness !== '')
                                { 
                                    $EncodedFitness = $FeaturesData->HealthAndFitness;
                                        $FitnessData = json_decode($EncodedFitness);
                                         if(isset($FitnessData->$k) && $FitnessData->$k =='on')
                                          {
                                              echo "checked";
                                         }

                                } ?>>&nbsp;&nbsp;&nbsp;
                            <label for="HealthAndFitness<?=$k?>" ><?=$v?></label>
                        </div>    
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!--// col-12-->
            <!-- col-12-->
            <div class="col-sm-12 mt-4">
                <h5><b>Laundry and Kitchen</b></h5>
                <div class="row">
                    <?php foreach ($LaundryAndKitchen as $k =>$v){ ?>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <input type="checkbox" name="LaundryAndKitchen[<?=$k?>]" id="LaundryAndKitchen<?=$k?>" 
                            <?php if(isset($FeaturesData->LaundryAndKitchen) && $FeaturesData->LaundryAndKitchen !== '')
                                { 
                                    $EncodedKitchen = $FeaturesData->LaundryAndKitchen;
                                        $KitchenData = json_decode($EncodedKitchen);
                                         if(isset($KitchenData->$k) && $KitchenData->$k =='on')
                                          {
                                              echo "checked";
                                         }

                                } ?>
                            />&nbsp;&nbsp;&nbsp;
                            <label for="LaundryAndKitchen<?=$k?>" ><?=$v?></label>
                        </div>    
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!--// col-12-->

            <!-- col-12-->
            <div class="col-sm-12 mt-4">
                <h5><b>Building</b></h5>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="CompletionYear" class="col-sm-8" >Completion Year</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm numberOnly4"  name="CompletionYear" id="CompletionYear" 
                                    value="<?php
                                        echo (isset($FeaturesData->CompletionYear) && $FeaturesData->CompletionYear !== '') ? ($FeaturesData->CompletionYear) : '';
                                    ?>" 
                                />
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="ElevatorsinBuilding" class="col-sm-8" >Elevators in Building</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm numberOnly"  name="ElevatorsinBuilding" id="ElevatorsinBuilding" 
                                value="<?php echo (isset($FeaturesData->ElevatorsinBuilding) && $FeaturesData->ElevatorsinBuilding !== '') ? ($FeaturesData->ElevatorsinBuilding) : '';
                                ?>"
                                />
                            </div>
                        </div>    
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="Flooring" class="col-sm-8" >Flooring</label>
                            <div class="col-sm-4">
                                <select class="form-control input-sm" name="Flooring" id="Flooring">
                                <option value="">Select</option>
                                <?php foreach ($FlooringList as $k =>$v){
                                        ?>
                                    <option value="<?=$k ?>" <?php echo (isset($FeaturesData->Flooring) && $FeaturesData->Flooring == $k) ? 'selected' : '';
                                ?>><?= $v ?></option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>    
                    </div>
                    <?php foreach ($BuildingList as $k =>$v){ ?>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <input type="checkbox" name="BuildingList[<?=$k?>]" id="BuildingList<?=$k?>" 
                                <?php if(isset($FeaturesData->LaundryAndKitchen) && $FeaturesData->LaundryAndKitchen !== '')
                                { 
                                    $EncodedBuilding = $FeaturesData->BuildingList;
                                        $BuildingData = json_decode($EncodedBuilding);
                                         if(isset($BuildingData->$k) && $BuildingData->$k =='on')
                                          {
                                              echo "checked";
                                         }

                                } ?>
                            />&nbsp;&nbsp;&nbsp;
                            <label for="BuildingList<?=$k?>" ><?=$v?></label>
                        </div>    
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!--// col-12-->
            <!-- col-12-->
            <div class="col-sm-12 mt-4">
                <h5><b>Business and Security</b></h5>
                <div class="row">
                    <?php foreach ($BusinessAndSecurity as $k =>$v){ ?>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <input type="checkbox" name="BusinessAndSecurity[<?=$k?>]" id="BusinessAndSecurity<?=$k?>"
                                <?php if(isset($FeaturesData->LaundryAndKitchen) && $FeaturesData->LaundryAndKitchen !== '')
                                { 
                                    $EncodedBusiness = $FeaturesData->BusinessAndSecurity;
                                        $BusinessData = json_decode($EncodedBusiness);
                                         if(isset($BusinessData->$k) && $BusinessData->$k =='on')
                                          {
                                              echo "checked";
                                         }

                                } ?>
                             />&nbsp;&nbsp;&nbsp;
                            <label for="BusinessAndSecurity<?=$k?>" ><?=$v?></label>
                        </div>    
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!--// col-12-->
            <!-- col-12-->
            <div class="col-sm-12 mt-4">
                <h5><b>Miscellaneous</b></h5>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="View" class="col-sm-8" >View</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm numberOnly"  name="View" id="View" 
                                value="<?php echo (isset($FeaturesData->View) && $FeaturesData->View !== '') ? ($FeaturesData->View) : '';
                                ?>"

                                />
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="Floor" class="col-sm-8" >Floor</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm numberOnly"  name="Floor" id="Floor" 
                                value="<?php echo (isset($FeaturesData->Floor) && $FeaturesData->Floor !== '') ? ($FeaturesData->Floor) : '';?>" />
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="OtherMainFeatures" class="col-sm-8" >Other Main Features</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm"  name="OtherMainFeatures" id="OtherMainFeatures" 
                                    value="<?php echo (isset($FeaturesData->OtherMainFeatures) && $FeaturesData->OtherMainFeatures !== '') ? ($FeaturesData->OtherMainFeatures) : '';?>"
                                />
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="OtherRooms" class="col-sm-8" >Other Rooms</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm numberOnly"  name="OtherRooms" id="OtherRooms" 
                                    value="<?php echo (isset($FeaturesData->OtherRooms) && $FeaturesData->OtherRooms !== '') ? ($FeaturesData->OtherRooms) : '';?>"
                                />
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="OtherFacilities" class="col-sm-8" >Other Facilities</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm"  name="OtherFacilities" id="OtherFacilities" 
                                     value="<?php echo (isset($FeaturesData->OtherFacilities) && $FeaturesData->OtherFacilities !== '') ? ($FeaturesData->OtherFacilities) : '';?>"
                                />
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="LandArea" class="col-sm-8" >Land Area</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm numberDotAndCross"  name="LandArea" id="LandArea" 
                                     value="<?php echo (isset($FeaturesData->LandArea) && $FeaturesData->LandArea !== '') ? ($FeaturesData->LandArea) : '';?>"
                                />
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="NumberOfBathrooms" class="col-sm-8" >Number of Bathrooms</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm numberOnly"  name="NumberOfBathrooms" id="NumberOfBathrooms" 
                                     value="<?php echo (isset($FeaturesData->NumberOfBathrooms) && $FeaturesData->NumberOfBathrooms !== '') ? ($FeaturesData->NumberOfBathrooms) : '';?>"
                                 />
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="NumberOfBedrooms" class="col-sm-8" >Number of Bedrooms</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm numberOnly"  name="NumberOfBedrooms" id="NumberOfBedrooms" 
                                    value="<?php echo (isset($FeaturesData->NumberOfBedrooms) && $FeaturesData->NumberOfBedrooms !== '') ? ($FeaturesData->NumberOfBedrooms) : '';?>"
                                 />
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="NearbySchools" class="col-sm-8" >Nearby Schools</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm"  name="NearbySchools" id="NearbySchools" 
                                     value="<?php echo (isset($FeaturesData->NearbySchools) && $FeaturesData->NearbySchools !== '') ? ($FeaturesData->NearbySchools) : '';?>"
                                />
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="NearbyHospitals" class="col-sm-8" >Nearby Hospitals</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm"  name="NearbyHospitals" id="NearbyHospitals" 
                                    value="<?php echo (isset($FeaturesData->NearbySchools) && $FeaturesData->NearbySchools !== '') ? ($FeaturesData->NearbySchools) : '';?>"
                                />
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="NearbyShoppingMalls" class="col-sm-8" >Nearby Shopping Malls</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm"  name="NearbyShoppingMalls" id="NearbyShoppingMalls" 
                                    value="<?php echo (isset($FeaturesData->NearbyShoppingMalls) && $FeaturesData->NearbyShoppingMalls !== '') ? ($FeaturesData->NearbyShoppingMalls) : '';?>"
                                />
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="DistanceFromAirport" class="col-sm-8" >Distance From Airport <small>(kms)</small></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm numberAndDot"  name="DistanceFromAirport" id="DistanceFromAirport" value="<?php echo (isset($FeaturesData->DistanceFromAirport) && $FeaturesData->DistanceFromAirport !== '') ? ($FeaturesData->DistanceFromAirport) : '';?>" />
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="NearbyPublicTransport" class="col-sm-8" >Nearby Public Transport</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm"  name="NearbyPublicTransport" id="NearbyPublicTransport" 
                                value="<?php echo (isset($FeaturesData->DistanceFromAirport) && $FeaturesData->DistanceFromAirport !== '') ? ($FeaturesData->DistanceFromAirport) : '';?>" />
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="OtherNearbyPlaces" class="col-sm-8" >Other Nearby Places</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control input-sm"  name="OtherNearbyPlaces" id="OtherNearbyPlaces" 
                                    value="<?php echo (isset($FeaturesData->OtherNearbyPlaces) && $FeaturesData->OtherNearbyPlaces !== '') ? ($FeaturesData->OtherNearbyPlaces) : '';?>"
                                />
                            </div>
                        </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <label for="PetPolicy" class="col-sm-8" >Pet Policy</label>
                            <div class="col-sm-4">
                                <select class="form-control input-sm" name="PetPolicy" id="PetPolicy">
                                <option value="">Select</option>
                                <?php foreach ($PetPolicyList as $k =>$v){
                                        ?>
                                    <option value="<?=$k ?>" <?php echo (isset($FeaturesData->PetPolicy) && $FeaturesData->PetPolicy == $k) ? 'selected' : '';
                                ?>><?= $v ?></option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>    
                    </div>
                  
                </div>
            </div>
            <!--// col-12-->
             <div class="col-sm-12 mt-4">
                <div class="row">
                   <?php foreach ($MiscellaneousList as $k =>$v){ ?>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <input type="checkbox" name="Miscellaneous[<?=$k?>]" id="Miscellaneous<?=$k?>" 
                                <?php if(isset($FeaturesData->Miscellaneous) && $FeaturesData->Miscellaneous !== '')
                                { 
                                    $EncodedMiscellaneous = $FeaturesData->Miscellaneous;
                                        $MiscellaneousData = json_decode($EncodedMiscellaneous);
                                         if(isset($MiscellaneousData->$k) && $MiscellaneousData->$k =='on')
                                          {
                                              echo "checked";
                                         }

                                } ?>
                            />&nbsp;&nbsp;&nbsp;
                            <label for="Miscellaneous<?=$k?>" ><?=$v?></label>
                        </div>    
                    </div>
                    <?php } ?>
                </div>
            </div>

            <!-- col-12-->
            <div class="col-sm-12 mt-4">
                <h5><b>Technology</b></h5>
                <div class="row">
                    <?php foreach ($TechnologyList as $k =>$v){ ?>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <input type="checkbox" name="Technology[<?=$k?>]" id="Technology<?=$k?>" 
                                <?php if(isset($FeaturesData->Technology) && $FeaturesData->Technology !== '')
                                { 
                                    $EncodedTechnology = $FeaturesData->Technology;
                                        $TechnologyData = json_decode($EncodedTechnology);
                                         if(isset($TechnologyData->$k) && $TechnologyData->$k =='on')
                                          {
                                              echo "checked";
                                         }

                                } ?>
                            />&nbsp;&nbsp;&nbsp;
                            <label for="Technology<?=$k?>" ><?=$v?></label>
                        </div>    
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!--// col-12-->
            <!-- col-12-->
            <div class="col-sm-12 mt-4">
                <h5><b>Features</b></h5>
                <div class="row">
                    <?php foreach ($FeaturesList as $k =>$v){ ?>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <input type="checkbox" name="Features[<?=$k?>]" id="Features<?=$k?>" 
                                <?php if(isset($FeaturesData->Features) && $FeaturesData->Features !== '')
                                { 
                                    $EncodedFeatures = $FeaturesData->Features;
                                        $FeaturesDataVal = json_decode($EncodedFeatures);
                                         if(isset($FeaturesDataVal->$k) && $FeaturesDataVal->$k =='on')
                                          {
                                              echo "checked";
                                         }

                                } ?>
                            />&nbsp;&nbsp;&nbsp;
                            <label for="Features<?=$k?>" ><?=$v?></label>
                        </div>    
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!--// col-12-->
            <!-- col-12-->
              
            <div class="col-sm-12 mt-4">
                <h5><b>Cleaning and Maintenance</b></h5>
                <div class="row">
                    <?php foreach ($CleaningAndMaintenanceList as $k =>$v){ ?>
                    <div class="col-sm-3">
                        <div class="form-group"> 
                            <input type="checkbox" name="CleaningAndMaintenance[<?=$k?>]" id="CleaningAndMaintenance<?=$k?>" 
                                 <?php if(isset($FeaturesData->CleaningAndMaintenance) && $FeaturesData->CleaningAndMaintenance !== '')
                                { 
                                    $EncodedCleaning = $FeaturesData->CleaningAndMaintenance;
                                        $CleaningData = json_decode($EncodedCleaning);
                                         if(isset($CleaningData->$k) && $CleaningData->$k =='on')
                                          {
                                              echo "checked";
                                         }

                                } ?>
                            />&nbsp;&nbsp;&nbsp;
                            <label for="CleaningAndMaintenance<?=$k?>" ><?=$v?></label>
                        </div>    
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!--// col-12-->
            <!-- col-12-->
            <div class="col-sm-3 col-sm-offset-9 pull-right mt-4">
                <div class="form-group"> 
                  
                    <button type="button" class="btn btn-primary " id="doneBtnFeature" >Done</button>&nbsp;&nbsp;&nbsp;  
                </div>    
            </div>
            <!--// col-12-->
        </div>
    </div>    
</div>
<!--// themeModal  -->
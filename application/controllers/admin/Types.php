<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
   require APPPATH . '/libraries/BaseController.php';
   
   
            class Types extends BaseController
            {
   
               public function __construct()
               {
                  parent::__construct();
                  $this->load->model('admin/type_model');
                  $this->load->model('admin/type/ae_rel_building_list_model');
                  $this->load->model('admin/type/ae_rel_business_and_security_model');
                  $this->load->model('admin/type/ae_rel_cleaning_and_maintenance_list_model');
                  $this->load->model('admin/type/ae_rel_commercial_list_model');
                  $this->load->model('admin/type/ae_rel_community_list_model');
                  $this->load->model('admin/type/ae_rel_count_number_list_model');
                  $this->load->model('admin/type/ae_rel_developer_list_model');
                  $this->load->model('admin/type/ae_rel_emirate_list_model');
                  $this->load->model('admin/type/ae_rel_features_list_model');
                  $this->load->model('admin/type/ae_rel_flooring_list_model');
                  $this->load->model('admin/type/ae_rel_health_and_fitness_model');
                  $this->load->model('admin/type/ae_rel_instant_email_model');
                  $this->load->model('admin/type/ae_rel_laundry_and_kitchen_model');
                  $this->load->model('admin/type/ae_rel_lead_purpose_list_model');
                  $this->load->model('admin/type/ae_rel_list_assign_to_model');
                  $this->load->model('admin/type/ae_rel_list_cheques_model');
                  $this->load->model('admin/type/ae_rel_list_contact_status_model');
                  $this->load->model('admin/type/ae_rel_list_email_temp_type_model');
                  $this->load->model('admin/type/ae_rel_list_email_temp_type_model');
                  $this->load->model('admin/type/ae_rel_list_feature_status_model');
                  $this->load->model('admin/type/ae_rel_list_frequency_model');
                  $this->load->model('admin/type/ae_rel_list_furnissing_model');
                  $this->load->model('admin/type/ae_rel_list_lsm_model');
                  $this->load->model('admin/type/ae_rel_list_nationality_model');
                  $this->load->model('admin/type/ae_rel_list_property_status_model');
                  $this->load->model('admin/type/ae_rel_list_secure_model');
                  $this->load->model('admin/type/ae_rel_list_state_india_model');
                  $this->load->model('admin/type/ae_rel_list_type_of_contact_model');
                  $this->load->model('admin/type/ae_rel_miscellaneous_list_model');
                  $this->load->model('admin/type/ae_rel_notification_list_model');
                  $this->load->model('admin/type/ae_rel_pet_policy_model');
                  $this->load->model('admin/type/ae_rel_portals_list_model');
                  $this->load->model('admin/type/ae_rel_propery_type_model');
                  $this->load->model('admin/type/ae_rel_purpose_list_model');
                  $this->load->model('admin/type/ae_rel_recreation_and_family_model');
                  $this->load->model('admin/type/ae_rel_reminder_email_model');
                  $this->load->model('admin/type/ae_rel_residential_list_model');
                  $this->load->model('admin/type/ae_rel_role_list_model');
                  $this->load->model('admin/type/ae_rel_sale_list_model');
                  $this->load->model('admin/type/ae_rel_salutaion_list_model');
                  $this->load->model('admin/type/ae_rel_sublocation_list_model');
                  $this->load->model('admin/type/ae_rel_technology_list_model');
                  $this->load->model('admin/type/ae_rel_video_host_list_model');
               }
   
   
               public function index()
               {
                  $this->isLoggedIn();
   
                  $data = array();
                  $this->global['pageTitle'] = 'Type : Ale-izba';
                  $this->loadViews("admin/type/list", $this->global, $data , NULL);
   
               }
   
   
               public function buildingList()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Building List : Al-Eizba';
                  $this->loadViews("admin/types/buildingList", $this->global, $data , NULL);
   
               } 
   
   
               public function businessSecurity()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Business Security : Al-Eizba';
                  $this->loadViews("admin/types/businessSecurity", $this->global, $data , NULL);
   
               } 
   
   
               public function cleaning()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Cleaning and Maintenance : Al-Eizba';
                  $this->loadViews("admin/types/cleaning", $this->global, $data , NULL);
   
               }
   
               public function commercialList()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Commercial List : Al-Eizba';
                  $this->loadViews("admin/types/commercialList", $this->global, $data , NULL);
   
               }
   
   
               public function communityList()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Community List : Al-Eizba';
                  $this->loadViews("admin/types/communityList", $this->global, $data , NULL);
   
               }
   
               public function countNumber()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Count Number : Al-Eizba';
                  $this->loadViews("admin/types/countNumber", $this->global, $data , NULL);
   
               }
   
               public function developerList()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Developer List : Al-Eizba';
                  $this->loadViews("admin/types/developerList", $this->global, $data , NULL);
   
               }
   
               public function emirateList()
               {
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Emirate List : Al-Eizba';
                  $this->loadViews("admin/types/emirateList", $this->global, $data , NULL);
               }
   
               public function featuresList()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Features List : Al-Eizba';
                  $this->loadViews("admin/types/featuresList", $this->global, $data , NULL);
   
               }
   
               public function flooringList()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Flooring List : Al-Eizba';
                  $this->loadViews("admin/types/flooringList", $this->global, $data , NULL);
   
               }
   
               public function healthList()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Health and Fitness List : Al-Eizba';
                  $this->loadViews("admin/types/healthList", $this->global, $data , NULL);
   
               }
   
               public function emailList()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Instant Email List : Al-Eizba';
                  $this->loadViews("admin/types/emailList", $this->global, $data , NULL);
   
               }
   
               public function kitchenList()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Laundry and Kitchen List : Al-Eizba';
                  $this->loadViews("admin/types/kitchenList", $this->global, $data , NULL);
   
               }
   
               public function leadList()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Lead and Purpose List : Al-Eizba';
                  $this->loadViews("admin/types/leadList", $this->global, $data , NULL);
   
               }
   
               public function listAssign()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'List Assigned List : Al-Eizba';
                  $this->loadViews("admin/types/listAssign", $this->global, $data , NULL);
   
               }
   
   
               public function listChecques()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'List Cheques List : Al-Eizba';
                  $this->loadViews("admin/types/listChecques", $this->global, $data , NULL);
   
               }
   
   
               public function listContact()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'List Contact List : Al-Eizba';
                  $this->loadViews("admin/types/listContact", $this->global, $data , NULL);
   
               }
   
   
               public function listEmail()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'List Email List : Al-Eizba';
                  $this->loadViews("admin/types/listEmail", $this->global, $data , NULL);
   
               }
   
               public function listFeature()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'List Feature List : Al-Eizba';
                  $this->loadViews("admin/types/listFeature", $this->global, $data , NULL);
   
               }
   
               public function listFrequency()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'List Frequency List : Al-Eizba';
                  $this->loadViews("admin/types/listFrequency", $this->global, $data , NULL);
   
               }
   
               public function listFurnishing()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'List Furnishing List : Al-Eizba';
                  $this->loadViews("admin/types/listFurnishing", $this->global, $data , NULL);
   
               }
   
               public function listLsm()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'LSM List : Al-Eizba';
                  $this->loadViews("admin/types/listLsm", $this->global, $data , NULL);
   
               }
   
               public function listNationality()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Nationality List : Al-Eizba';
                  $this->loadViews("admin/types/listNationality", $this->global, $data , NULL);
   
               }
   
   
               public function listPropertyStatus()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Property Status List : Al-Eizba';
                  $this->loadViews("admin/types/listPropertyStatus", $this->global, $data , NULL);
   
               }
   
               public function listSecure()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'List Secure List : Al-Eizba';
                  $this->loadViews("admin/types/listSecure", $this->global, $data , NULL);
   
               }
   
               public function listState()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'State List : Al-Eizba';
                  $this->loadViews("admin/types/listState", $this->global, $data , NULL);
   
               }
   
               public function listTypeContact()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Type of Contact List : Al-Eizba';
                  $this->loadViews("admin/types/listTypeContact", $this->global, $data , NULL);
   
               }
   
               public function listMiscellaneous()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Miscellaneous List : Al-Eizba';
                  $this->loadViews("admin/types/listMiscellaneous", $this->global, $data , NULL);
   
               }
   
               public function listNotification()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Notification List : Al-Eizba';
                  $this->loadViews("admin/types/listNotification", $this->global, $data , NULL);
   
               }
   
               public function listPet()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Pet Policy List : Al-Eizba';
                  $this->loadViews("admin/types/listPet", $this->global, $data , NULL);
   
               }
   
               public function listPortal()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Portal List : Al-Eizba';
                  $this->loadViews("admin/types/listPortal", $this->global, $data , NULL);
   
               }
   
               public function listPorpertyType()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Property Type List : Al-Eizba';
                  $this->loadViews("admin/types/listPorpertyType", $this->global, $data , NULL);
   
               }
   
               public function listPurpose()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Purpose Type List : Al-Eizba';
                  $this->loadViews("admin/types/listPurpose", $this->global, $data , NULL);
   
               }
   
               public function listFamily()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Recreation and Family List : Al-Eizba';
                  $this->loadViews("admin/types/listFamily", $this->global, $data , NULL);
   
               }
   
               public function listReminder()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Reminder Email List : Al-Eizba';
                  $this->loadViews("admin/types/listReminder", $this->global, $data , NULL);
   
               }
   
               public function listResidential()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Residential List : Al-Eizba';
                  $this->loadViews("admin/types/listResidential", $this->global, $data , NULL);
   
               }
   
               public function listRole()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'List Role : Al-Eizba';
                  $this->loadViews("admin/types/listRole", $this->global, $data , NULL);
   
               }
   
               public function listSale()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'List Sale : Al-Eizba';
                  $this->loadViews("admin/types/listSale", $this->global, $data , NULL);
   
               }
   
               public function listSalutation()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'List Salutation : Al-Eizba';
                  $this->loadViews("admin/types/listSalutation", $this->global, $data , NULL);
   
               }
   
               public function listSublocation()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Sublocation List : Al-Eizba';
                  $this->loadViews("admin/types/listSublocation", $this->global, $data , NULL);
   
               }
   
               public function listTechnology()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Technology List : Al-Eizba';
                  $this->loadViews("admin/types/listTechnology", $this->global, $data , NULL);
   
               }
   
               public function listVideo()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Video Host List : Al-Eizba';
                  $this->loadViews("admin/types/listVideo", $this->global, $data , NULL);
   
               }
   
   
   
   
   
   
   
               // Add New 
               public function addnew()
               {
   
                  $this->isLoggedIn();
                  $data = array();
   
                  $this->global['pageTitle'] = 'Add New Type : Ale-izba';
                  $this->loadViews("admin/type/addnew", $this->global, $data , NULL);
   
               } 
   
               // Insert Member *************************************************************
               public function insertnow()
               {
   
                  $this->isLoggedIn();
                  $this->load->library('form_validation');            
                  $this->form_validation->set_rules('name','name','trim|required');
   
   
                  //form data 
                  $form_data  = $this->input->post();
                     if($this->form_validation->run() == FALSE)
                     {
                        $this->addnew();
                     }
                     else
                     {
   
                        // check already exist
                        $where = array();
                        $where['name'] = $form_data['name'];
                        $returnData = $this->type_model->findDynamic($where);
                        if(!empty($returnData)){
                        $this->session->set_flashdata('error', $form_data['name'].' already Exist.');
                        }
                        else
                        {
   
                        $insertData['name'] = $form_data['name'];
                        $insertData['slug'] = $form_data['slug'];
                        $insertData['status'] = $form_data['status'];
   
                        if(isset($_FILES['img']['name']) && $_FILES['img']['name'] != '') 
                        {
   
                        $f_name         =$_FILES['img']['name'];
                        $f_tmp          =$_FILES['img']['tmp_name'];
                        $f_size         =$_FILES['img']['size'];
                        $f_extension    =explode('.',$f_name);
                        $f_extension    =strtolower(end($f_extension));
                        $f_newfile      =uniqid().'.'.$f_extension;
                        $store          ="assets/images/icon/".$f_newfile;
   
                     if(!move_uploaded_file($f_tmp,$store))
                     {
                        $this->session->set_flashdata('error', 'Icon Upload Failed .');
                     }
                     else
                     {
                        $insertData['img'] = $f_newfile;
   
                     }
                  }
   
   
                     $result = $this->type_model->save($insertData);
                     if($result > 0)
                     {
                        $this->session->set_flashdata('success', 'Type successfully Added');
                     }
                     else
                     { 
                        $this->session->set_flashdata('error', 'Type Addition failed');
                     }
                     }// check already    
                     redirect('admin/type/addnew');
                  }  
   
               }
   
   
               // Member list
               public function ajax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $buildingList = $this->ae_rel_building_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($buildingList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = $currentObj->img;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
   
               //Business Member list
               public function businessAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $businessList = $this->ae_rel_business_and_security_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($businessList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = $currentObj->img;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
   
               //Cleaning Member list
               public function cleaningAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $cleaningList = $this->ae_rel_cleaning_and_maintenance_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($cleaningList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = $currentObj->img;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Commercial Member list
               public function commercialAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $commercialList = $this->ae_rel_commercial_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($commercialList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
               //Commercial Member list
               public function communityAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $communityList = $this->ae_rel_community_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($communityList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Count Numbers Member list
               public function cNumbersAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $countList = $this->ae_rel_count_number_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($countList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
               //Developers Member list
               public function developerAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $developersList = $this->ae_rel_developer_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($developersList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Emirate Member list
               public function emirateAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $emirateList = $this->ae_rel_emirate_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($emirateList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
               //Features Member list
               public function featuresAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $featuresList = $this->ae_rel_features_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($featuresList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = $currentObj->img;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Flooring Member list
               public function flooringAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $flooringList = $this->ae_rel_flooring_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($flooringList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
               //Health Member list
               public function healthAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $healthList = $this->ae_rel_health_and_fitness_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($healthList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = $currentObj->img;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Email Member list
               public function emailAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $emailList = $this->ae_rel_instant_email_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($emailList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Email Member list
               public function kitchenAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $kitchenList = $this->ae_rel_laundry_and_kitchen_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($kitchenList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = $currentObj->img;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Lead Member list
               public function leadAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $leadList = $this->ae_rel_lead_purpose_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($leadList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Lead Member list
               public function listAssignAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $listAList = $this->ae_rel_list_assign_to_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($listAList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
               //Cheques Member list
               public function listChecquesAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $chequesList = $this->ae_rel_list_cheques_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($chequesList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
               //Cheques Member list
               public function listContactAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $contactList = $this->ae_rel_list_contact_status_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($contactList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Cheques Member list
               public function listEmailAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $emailList = $this->ae_rel_list_email_temp_type_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($emailList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Features Member list
               public function listFeatureAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $featureList = $this->ae_rel_list_feature_status_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($featureList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
               //Frequency Member list
               public function listFrequencyAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $frequencyList = $this->ae_rel_list_frequency_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($frequencyList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
               //Furnishing Member list
               public function listFurnishingAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $furnishingList = $this->ae_rel_list_furnissing_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($furnishingList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
   
               //LSM Member list
               public function listLsmAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $lsmList = $this->ae_rel_list_lsm_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($lsmList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
   
               //Nationality Member list
               public function listNationalityAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $nationalityList = $this->ae_rel_list_nationality_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($nationalityList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
               //Property Status Member list
               public function listPropertyStatusAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $propertyStatusList = $this->ae_rel_list_property_status_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($propertyStatusList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //List Secure Member list
               public function listSecureAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $secureList = $this->ae_rel_list_secure_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($secureList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
               //State Member list
               public function listStateAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $stateList = $this->ae_rel_list_state_india_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($stateList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
                  }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
               //Type of Contact Member list
               public function listTypeContactAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $typeConList = $this->ae_rel_list_type_of_contact_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($typeConList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Miscellaneous Member list
               public function listMiscellaneousAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $miscellaneousList = $this->ae_rel_miscellaneous_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($miscellaneousList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = $currentObj->img;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Notification Member list
               public function listNotifyAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $notifyList = $this->ae_rel_notification_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($notifyList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Notification Member list
               public function listPetAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $petList = $this->ae_rel_pet_policy_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($petList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
               //Policy Member list
               public function listPortalAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $policyList = $this->ae_rel_portals_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($policyList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
               //Property Type Member list
               public function listPropTypeAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $propTypeList = $this->ae_rel_propery_type_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($propTypeList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Purpose Type Member list
               public function listPurposeAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $purposeList = $this->ae_rel_purpose_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($purposeList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Recreation and Family Type Member list
               public function listFamilyAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $familyList = $this->ae_rel_recreation_and_family_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($familyList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = $currentObj->img;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Reminder Email Type Member list
               public function listReminderAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $reminderList = $this->ae_rel_reminder_email_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($reminderList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Reminder Email Type Member list
               public function listResidentialAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $residentialList = $this->ae_rel_residential_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($residentialList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //List Role Type Member list
               public function listRoleAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $roleList = $this->ae_rel_role_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($roleList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
               //Sale List Type Member list
               public function listSaleAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $saleList = $this->ae_rel_sale_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($saleList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Salutation Member list
               public function listSalutationAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $salutationList = $this->ae_rel_salutaion_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($salutationList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Sublocation Member list
               public function listSublocationAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $sublocationList = $this->ae_rel_sublocation_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($sublocationList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
               //Sublocation Member list
               public function listTechnologyAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $technologyList = $this->ae_rel_technology_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($technologyList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = $currentObj->img;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
               //Video Member list
               public function listVideoAjax_list()
               {
   
                  $list = $this->type_model->get_datatables();
                  $videoList = $this->ae_rel_video_host_list_model->get_datatables();
   
                  $data = array();
                  $no =(isset($_POST['start']))?$_POST['start']:'';
                  foreach ($videoList as $currentObj) {
   
                  // $temp_date = $currentObj->date_at;
                  $selected = ($currentObj->status == 0)?" selected ":"";
                  $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
                  $btn .= '<option value="1"  >Active</option>';
                  $btn .= '<option value="0" '.$selected.' >Inactive</option>';
                  $btn .= '</select>';
   
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $currentObj->name;
                  $row[] = $currentObj->slug;
                  $row[] = $btn;
                  $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'admin/type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
                  $data[] = $row;
               }
   
                  $output = array(
                  "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                  "recordsTotal" => $this->type_model->count_all(),
                  "recordsFiltered" => $this->type_model->count_filtered(),
                  "data" => $data,
               );
               //output to json format
               echo json_encode($output);
               }
   
   
   
   
               // Status Change
   
               public function statusChange($id = NULL)
               {
                  $this->isLoggedIn();
                  if($_POST['id'] == null)
                  {
                     redirect('admin/type');
                  }
   
                  $insertData['id'] = $_POST['id'];
                  $insertData['status'] = $_POST['status'];
                  $result = $this->type_model->save($insertData);
                  exit;
               } 
   
               // Edit
   
               public function edit($id = NULL)
               {
   
   
                  $this->isLoggedIn();
                  if($id == null)
                  {
                     redirect('admin/type');
                  }
   
                  $data['edit_data'] = $this->type_model->find($id);
                  $this->global['pageTitle'] = 'Type ';
                  $this->loadViews("admin/type/edit", $this->global, $data , NULL);
   
               } 
   
               // Delete  *****************************************************************
               function delete()
               {
   
                  $this->isLoggedIn();
                  $delId = $this->input->post('id');  
   
                  $result = $this->type_model->delete($delId); 
   
                  if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
                  else { echo(json_encode(array('status'=>FALSE))); }
                  }
   
               // Update category*************************************************************
               public function update()
               {
   
                  $this->isLoggedIn();
                  $this->load->library('form_validation');            
                  $this->form_validation->set_rules('name','Type','trim|required');
                  $this->form_validation->set_rules('id','Id','trim|required');
   
                  //form data 
                  $form_data  = $this->input->post();
                  if($this->form_validation->run() == FALSE)
                  {
   
                     $this->edit($form_data['id']);
                  }
                  else
                  {
                     $insertData['id'] = $form_data['id'];
                     $insertData['name'] = $form_data['name'];
                     $insertData['slug'] = $form_data['slug'];
                     $insertData['status'] = $form_data['status'];
                  if(isset($_FILES['img']['name']) && $_FILES['img']['name'] != '') {
   
                  $f_name         =$_FILES['img']['name'];
                  $f_tmp          =$_FILES['img']['tmp_name'];
                  $f_size         =$_FILES['img']['size'];
                  $f_extension    =explode('.',$f_name);
                  $f_extension    =strtolower(end($f_extension));
                  $f_newfile      =uniqid().'.'.$f_extension;
                  $store          ="assets/images/icon/".$f_newfile;
   
                  if(!move_uploaded_file($f_tmp,$store))
                  {
                     $this->session->set_flashdata('error', 'Flag Upload Failed .');
                  }
                  else
                  {
                     $file = "assets/images/icon/".$form_data['old_img'];
                  if(file_exists ( $file))
                  {
                     unlink($file);
                  }
                     $insertData['img'] = $f_newfile;
   
                  }
                  }
                     $result = $this->type_model->save($insertData);
   
   
                  if($result > 0)
                  {
                     $this->session->set_flashdata('success', ' Type successfully Updated');
                  }
                  else
                  { 
                     $this->session->set_flashdata('error', 'Type Updation failed');
                  }
                     redirect('admin/type/edit/'.$insertData['id']);
                  }  
   
               }
            }
   
   ?>
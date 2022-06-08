<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Salespipeline extends BaseController
{
   
    public function __construct()
    {
        parent::__construct();
       $this->load->model('admin/agency_model');
       $this->load->model('admin/staff_model');
       $this->load->model('admin/type_model');
       $this->load->model('admin/salespipeline_contact_model');
       $this->load->model('admin/landlord_model');
       $this->load->model('admin/contact_note_model');
       $this->load->model('admin/contact_task_model');
       $this->load->model('admin/salespipeline_enquiry_model');
       $this->load->model('front/contact_agent_model');
       //$this->load->model('admin/type/ae_rel_purpose_list_model');

        //$this->load->library('csvreader');

       

    }

    
    public function index()
    {
        $this->isVendorLoggedIn();

        $data = array();

        //SalutaionList 
        $data['SalutaionList']      = $this->type_model->SalutaionList();
        
        //list assignto 
        $data['listAssignTo']  = $this->type_model->listAssignTo();
        //TypeList
        $data['TypeList']  = $this->type_model->getTypeList();
        //Type of contact
        $data['listTypeOfContact']  = $this->type_model->listTypeOfContact();

        //  listContactStatus
        $data['listContactStatus']  = $this->type_model->listContactStatus();

        //  listNationality
        $data['listNationality']  = $this->type_model->listNationality();

        //  listSecure
        $data['listSecure']  = $this->type_model->listSecure();

        //RoleList 
        $data['RoleList']  = $this->type_model->RoleList();

        
        //get total list of contact 
        $data['get_contact_lists']  = $this->salespipeline_contact_model->get_contact_list();



        //get inquirer data

        /*$where = array();*/
        $data['inquirer_data'] = $this->contact_agent_model->get_leads_details();




        $this->global['pageTitle'] = 'Salespipeline : Ale-izba';
        $this->vendorView("vendor/salespipeline/contact", $this->global, $data , NULL);
        
    }

    // lead management
    public function leadmanagement()
    {
        $this->isVendorLoggedIn();

        $data = array();

        //  listSecure
        $data['LeadPurposeList']  = $this->type_model->LeadPurposeList();


         //SalutaionList 
        $data['SalutaionList']      = $this->type_model->SalutaionList();
        
        //list assignto 
        $data['listAssignTo']  = $this->type_model->listAssignTo();
        //TypeList
        $data['TypeList']  = $this->type_model->getTypeList();
        //Type of contact
        $data['listTypeOfContact']  = $this->type_model->listTypeOfContact();

        //  listContactStatus
        $data['listContactStatus']  = $this->type_model->listContactStatus();

        //  listNationality
        $data['listNationality']  = $this->type_model->listNationality();

        //  listSecure
        $data['listSecure']  = $this->type_model->listSecure();

        //RoleList 
        $data['RoleList']  = $this->type_model->RoleList();

        
        //get total list of contact 
        $data['get_contact_lists']  = $this->salespipeline_contact_model->get_contact_list();


        //get landlord list of details and name
        $where = array();
        $where['field'] = 'FirstName, LastName, id';
        $data['landlord_details']  = $this->landlord_model->findDynamic($where);



        

        $this->global['pageTitle'] = 'Salespipeline : Ale-izba';
        $this->vendorView("vendor/salespipeline/leadmanagement", $this->global, $data , NULL);
        
    }


    //Lead Ajax List==========================

    public function lead_ajax_list()
    {   

        $where = array();
        $where['field'] = 'FirstName, LastName, id';
        $landlord_details  = $this->landlord_model->findDynamic($where);


        $list = $this->contact_agent_model->get_datatables();


        

        
        $data = array();
        $no =(isset($_POST['start']))?$_POST['start']:'';
        foreach ($list as $currentObj) {

            $temp_date = $currentObj->date_at;
            $dateAt = date("d-m-Y H:ia", strtotime($temp_date));

            
           
           
           $btnland = '<select class="landstatusBtn" style="text-transform: capitalize;" name="landlorddetails" data-id="'.$currentObj->id.'">';
            $btnland .= '<option value="">Select</option>';
                foreach ($landlord_details as $key => $value) {

                     $selected1 = ($currentObj->landlord_id == $value->id)?" selected ":"";
            $btnland .= '<option style="text-transform: capitalize;" value="'.$value->id.'"  '.$selected1.'>'.$value->FirstName.' '.$value->LastName.'</option>';
                        }
            $btnland .= '</select>';
                


            $selected = ($currentObj->lead == 'RAW')?" selected ":"";
           
            $btn = '<select class="statusBtn" name="lead" data-id="'.$currentObj->id.'">';
            $btn .= '<option value=""  '.$selected.'>Lead (RAW)</option>';
            $selected = ($currentObj->lead == 'Open')?" selected ":"";
            $btn .= '<option value="Open"  '.$selected.'>Closed (Deal)</option>';
            $selected = ($currentObj->lead == 'Dead')?" selected ":"";
            $btn .= '<option value="Dead"  '.$selected.' >Closed (Dead)</option>';
            $btn .= '</select>';

      
            
            $no++;
            $row = array();
            $row[] = $currentObj->property_id;
            $row[] = $currentObj->purpose_name;
            $row[] = $currentObj->type_name;
            $row[] = $currentObj->property_location;
            $row[] = $currentObj->property_area;
            $row[] = $currentObj->property_beds;
            $row[] = $currentObj->property_rent;
            $row[] = $currentObj->contact_name;
            $row[] = $btnland;
            $row[] = $dateAt;
            $row[] = $currentObj->update_at;
            $row[] = $btn;
            $row[] = '<a class="" href="'.base_url().'vendor/salespipeline/leadmanagement_edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil-square-o"></i></a>';
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                        "recordsTotal" => $this->contact_agent_model->count_all(),
                        "recordsFiltered" => $this->contact_agent_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    //Lead Ajax List==========================


     // Status Change
        public function leadstatusChange($id = NULL){

        $this->isVendorLoggedIn();

        if ($_POST['id'] == null) {

            redirect('salespipeline/leadmanagement');
        }
      
        //form data 
        $insertData['id'] = $_POST['id'];
        $insertData['lead'] = $_POST['status'];
        $result = $this->contact_agent_model->save($insertData);
        return $result;
        }




    // Status Change for Agent Assigned Lead


        // Status Change
        public function assignedstatusChange($id = NULL){

        $this->isVendorLoggedIn();

        if ($_POST['id'] == null) {

            redirect('salespipeline/leadmanagement');
        }
      
        //form data 
        $insertData['id'] = $_POST['id'];
        $insertData['landlord_id'] = $_POST['status'];
        $result = $this->contact_agent_model->save($insertData);
        return $result;
        }







         //to get and edit instant contact details 
    public function get_lead_contact_detail($id)
    {
         $this->isVendorLoggedIn();
        
        $resultobj = $this->contact_agent_model->get_contact_detail($id);

        $result = $resultobj[0];

          
        if(!empty($result))
        {


            /*$RoleList = $this->type_model->RoleList();
            $listAssignTo = $this->type_model->listAssignTo();
            $listSecure = $this->type_model->listSecure();

            
            $Role = $result->Role;
            $ContactSource = $result->ContactSource;
            $ContactAssignTo = $result->ContactAssignTo;
            $SalutationId = $result->Salutation;
            $NationalityId = $result->Nationality;
            $TypeOFContactId = $result->TypeOFContact;

            $RoleName = $RoleList[$Role];
            $SourceName = $listSecure[$ContactSource];
            $AssignToName = $listAssignTo[$ContactAssignTo];*/
 
           
            

            $row = [];
            $row['contact_name'] =$result->contact_name;
            $row['contact_email'] =$result->contact_email;
            $row['contact_mobile'] = $result->contact_mobile;
            $row['contact_message'] = $result->contact_message;
            $row['landlord_id'] = $result->landlord_id;           
            


            $response = array(
                        'status' => 'success',
                        'message' =>  $row
                    );
        }else
        {
             $response = array(
                        'status' => 'error',
                        'message' => "RECORD Not Found."
                    );
        }



        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }





















    // Direct Inquiry
    public function directinquiry()
    {
        $this->isVendorLoggedIn();

        $data = array();
        $where = array();
        $where['field'] = 'id,StaffName';

        $vendorType   = $this->session->userdata('type');
        if($vendorType=='1' )
        {

        }else
        {
            $userId  = $this->session->userdata('userId');
            $where['user_id'] = $userId;
        }



        $staff_list =  $this->staff_model->findDynamic($where);
        //  listSecure
        $data['staff_list']  = $staff_list;
        $data['LeadPurposeList']  = $this->type_model->LeadPurposeList();
         $this->global['pageTitle'] = 'Direct Enquiry : Ale-izba';
        $this->vendorView("vendor/salespipeline/directinquiry", $this->global, $data , NULL);
        
    }





     // Direct Inquiry Details
    public function inquiry($id = NULL)
    {
        $this->isVendorLoggedIn();

        $data = array();

        if($id == null)
        {
            redirect('vendor/salespipeline/directinquiry');
        }

        $data['edit_data'] = $this->contact_agent_model->find($id);

        $where = array();
        $where['field'] = 'id,StaffName,status';
        $where['status'] = '1';
        
        $where['user_id'] = $this->session->userdata('userId');;
        $data['agent_data'] = $this->staff_model->findDynamic($where);

        $this->global['pageTitle'] = 'Direct Enquiry Details : Ale-izba';
        $this->vendorView("vendor/salespipeline/inquiry", $this->global, $data , NULL);
        
    }




    // Direct Inquiry Product CSV Format Download



    public function download_formate_only()
    {
        $content ="Created,Name,Email,Phone,Stage,Owner,Source,Label \n";

          $filename = 'al-eizba-lead'.date('d-m-Y-h-s').'.csv';
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="'.$filename.'"');
        print_r($content);/*
         redirect(base_url()."admin/product/export_product");*/
        die; 


    }





    // Direct Inquiry Product CSV Format Download



/*lead changes assign to agent start */
 
public function assignChange()
    {

         $form_data  = $this->input->post();


        $response = array(
                'status' => 'error',
                'message' => "Not Selected Any Assigned."
            );




          

        $insertData['id']       = $form_data['id'];
        $insertData['assign_to']   = $form_data['assigned'];
        $result = $this->contact_agent_model->save($insertData);


         if($result > 0)
        {
             $response = array(
                'status' => 'success',
                'message' => "Assigned Successfully."
            );
        }
        else
        { 
            $response = array(
                'status' => 'error',
                'message' => "Not changes Assigned  Failed."
            );
        }


    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    } 
/*lead assign to agent end */


    // Direct Inquiry Details Update==========================

    public function insert_lead()
    {
         
                    
        $this->load->library('form_validation');
        $this->form_validation->set_rules('lead_comment','Comment','required');
        $this->form_validation->set_rules('vendor_name','Lead Alloted','required');
        $this->form_validation->set_rules('lead_nextdate','Next Lead Date','required');




/*
    Save Form Data Start
*/



    $form_data  = $this->input->post();
        if($this->form_validation->run() == FALSE)
        {

             $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );

            
        }
        else
        {

                $where = array();
                $where['id'] = $form_data['id'];
                $getdataset = $this->contact_agent_model->findDynamic($where);
                $data_set = array();
                if($getdataset[0]->data_set !=='')
                {

                   $dataset =  json_decode($getdataset[0]->data_set);

                   foreach ($dataset as $key => $value)
                   {
                       $data_set[] = array(
                        'comment'   =>$value->comment,
                        'new_date'  => $value->new_date,
                        'vendor_name'  =>  $value->vendor_name,
                        'created'   => $value->created
                    );
                   } 
                }
                
                    $data_set[] = array(
                        'comment'   => $form_data['lead_comment'],
                        'new_date'  => date( "Y-m-d", strtotime($form_data['lead_nextdate'])),
                        'vendor_name'  => $form_data['vendor_name'],
                        'created'   => date("Y-m-d")
                    );

               
                    $insertData=array();

                    $insertData['id']           = $form_data['id'];
                    $insertData['data_set']           = json_encode($data_set);
                    

                    $result = $this->contact_agent_model->save($insertData);

                      
                    
                    if($result > 0)
                    {
                         $response = array(
                            'status' => 'success',
                            'message' => "<h3>Details Added Successfully.</h3>"
                        );
                    }
                    else
                    { 
                        $response = array(
                            'status' => 'error',
                            'message' => "<h3>Details Addition Failed.</h3>"
                        );
                    }
                 
             }  
          $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));



 
          
      }



 







    public function add_new_leads()
    {
       $this->isVendorLoggedIn();
        $userId  = $this->session->userdata('userId');
         
        
        
  
          
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('name','name','trim|required');
        $this->form_validation->set_rules('email','name','trim|required|valid_email');
        $this->form_validation->set_rules('phone','name','trim|required');
            
        if($this->form_validation->run() == FALSE)
        {
             $this->directinquiry();
         }else
         {
             $form_data  = $this->input->post();
            $data_store = array(); 
            $data_store['date_at'] =  date(("Y-m-d"));
            $data_store['contact_name']     = $form_data['name'];
            $data_store['contact_email']    = $form_data['email'];
            $data_store['contact_mobile']   = $form_data['phone'];
            $data_store['stage']            = $form_data['stage'];
            $data_store['owner']            = $form_data['owner'];
            $data_store['lead_source']      = $form_data['source'];
            $data_store['labels']           = $form_data['labels'];
            $data_store['user_id']          = $userId ;
            $data_store['assign_to']        = $form_data['assignto'];

            $result = $this->contact_agent_model->save($data_store);
        

 
           
 
            if ($result > 0) {
            
                $this->session->set_flashdata('success', 'Data Saved Successfully');
            }
            else
            { 
                $this->session->set_flashdata('error', 'Data Saved Failed');
            }
            redirect('vendor/salespipeline/directinquiry'); 
         }

            
    }

    //Product Upload Function=========================================

    public function insert_csv_product()
    {

        $this->isVendorLoggedIn();
        $userId  = $this->session->userdata('userId');
        
        $file_data=$_FILES["upload_data_csv"]["tmp_name"];    
        $file = fopen($file_data, "r");
        
        
        $i = 0;           

         while (($column = fgetcsv($file, 10000, ",")) !== FALSE) { 

           if ($i !== 0)
           {

            $data_store = array(); 
            $data_store['date_at'] = (!empty($column[0])) ? (date( "Y-m-d", strtotime($column[0]))) : (date(("Y-m-d")));
            $data_store['contact_name'] = $column[1];
            $data_store['contact_email'] = $column[2];
            $data_store['contact_mobile'] = $column[3];
            $data_store['stage'] = $column[4];
            $data_store['owner'] = $column[5];
            $data_store['lead_source'] = ($column[6] !=='')?$column[6]:'Upload';
            $data_store['labels'] = $column[7];
            $data_store['user_id'] = $userId ;

            $result = $this->contact_agent_model->save($data_store);
        


            } 
     
       
          $i++;
           

    }
    
            if ($result > 0) {
            
                $this->session->set_flashdata('success', 'Data Import Successfully');
            }
            else
            { 
                $this->session->set_flashdata('error', 'Data Import Failed');
            }
            redirect('vendor/salespipeline/directinquiry');
        }

    //Product Upload Function=========================================



    //Product Ajax List==========================


         // Member list
    public function csv_ajax_list()
    {
        $list = $this->contact_agent_model->get_datatables();
        
        $data = array();
        $no =(isset($_POST['start']))?$_POST['start']:'';
        foreach ($list as $currentObj) {

            $temp_date = $currentObj->date_at;
            /*
            $selected = ($currentObj->status == 0)?" selected ":"";
            $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
            $btn .= '<option value="1"  >Active</option>';
            $btn .= '<option value="0" '.$selected.' >Inactive</option>';
            $btn .= '</select>';
            */

             $isVendorLoggedIn  = $this->session->userdata('isVendorLoggedIn');
            if($isVendorLoggedIn )
            {

                $userId  = $this->session->userdata('userId');
                $assignto_list = '';
                $assignto_list.= "<select name='assignBtn' class='assignBtn' data-id='".$currentObj->id."'>";
                $assignto_list.= "<option value=''>Select Assign to</option>";
                $where = array();
                $where['field'] = 'id,StaffName';

                 $vendorType   = $this->session->userdata('type');
                    if($vendorType=='1' )
                    {

                    }else
                    {
                        $userId  = $this->session->userdata('userId');
                        $where['user_id'] = $userId;
                    }

                    
                
                $staff_list =  $this->staff_model->findDynamic($where);
                foreach ($staff_list as $key => $value) 
                {

                    if($value->id == $currentObj->assign_to)
                    {
                          $selected_assign ='selected';
                    }else
                    {
                        $selected_assign =' ';
                    }
                   
                $assignto_list.= "<option ".$selected_assign." value='".$value->id."'>".$value->StaffName."</option>";
                     
                }
                $assignto_list.= "</select>";


              
                $action_url = '&nbsp;&nbsp;<a class="" href="'.base_url().'vendor/salespipeline/inquiry/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil-square-o"></i></a>';

            } else
            {
                $assignto_list = '';

                  $action_url = '&nbsp;&nbsp;<a class="" href="'.base_url().'agent/dashboard/inquiry/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil-square-o"></i></a>';
                 
            }
         
            

            $dateAt = date("d-m-Y H:ia", strtotime($temp_date));

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $dateAt;
            $row[] = $currentObj->contact_name;
            $row[] = $currentObj->contact_email;
            $row[] = $currentObj->contact_mobile;
            $row[] = $currentObj->stage;
            $row[] = $currentObj->owner;
            $row[] = $currentObj->lead_source;
            $row[] = $currentObj->labels;

            $row[] = $assignto_list.$action_url ;
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                        "recordsTotal" => $this->contact_agent_model->count_all(),
                        "recordsFiltered" => $this->contact_agent_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    //Product Ajax List==========================


    // Client Ajax List=================



    public function client_ajax_list($id)
    {
        $list = $this->salespipeline_enquiry_model->get_client_datatables($id);
        
        $data = array();
        $no =(isset($_POST['start']))?$_POST['start']:'';
        foreach ($list as $currentObj) {

            /*$temp_date = $currentObj->date_at;
            $selected = ($currentObj->status == 0)?" selected ":"";
            $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
            $btn .= '<option value="1"  >Active</option>';
            $btn .= '<option value="0" '.$selected.' >Inactive</option>';
            $btn .= '</select>';
            $dateAt = date("d-m-Y H:ia", strtotime($temp_date));*/

            $no++;
            $row = array();
            $row[] = $no;
           /* $row[] = $currentObj->name;
            $row[] = $currentObj->email;
            $row[] = $currentObj->phone;*/
            $row[] = $currentObj->vendor_name;
            $row[] = $currentObj->created;
            $row[] = $currentObj->new_date;
            $row[] = $currentObj->comment;
            $row[] = $currentObj->labels;
            $row[] = '<a class="" href="'.base_url().'vendor/salespipeline/inquiry/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil-square-o"></i></a>';
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                        "recordsTotal" => $this->salespipeline_enquiry_model->count_client_all(),
                        "recordsFiltered" => $this->salespipeline_enquiry_model->count_client_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


    // Client Ajax List=================



    //Status Change===


 
   /* public function statusChange($id = NULL)
    {
        $this->isVendorLoggedIn();
        if($_POST['id'] == null)
        {
            redirect('vendor/agency');
        }

        $insertData['id'] = $_POST['id'];
        $insertData['status'] = $_POST['status'];
        $result = $this->agency_model->save($insertData);
        exit;
    } */
            

 // Add New 
    public function addnew()
    {
    
        $this->isVendorLoggedIn();
        $data = array();
        $this->global['pageTitle'] = 'Add New Agency : Ale-izba';
        $this->vendorView("vendor/salespipeline/addnew", $this->global, $data , NULL);
        
    } 

    // Insert Member *************************************************************
    public function insertnow()
    {
        $this->isVendorLoggedIn();
		
		
		
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
            $returnData = $this->agency_model->findDynamic($where);
            if(!empty($returnData)){
               $this->session->set_flashdata('error', $form_data['name'].' already Exist.');
            }else{
                //pre($form_data);exit;
                $insertData['name'] = $form_data['name'];
                $insertData['description'] = base64_encode($form_data['description']);
                $insertData['email'] = $form_data['email'];
                $insertData['mobile'] = $form_data['mobile'];
                $insertData['phone'] = $form_data['phone'];
                $insertData['fax_number'] = $form_data['fax_number'];
                $insertData['language'] = $form_data['language'];
                $insertData['tax_number'] = $form_data['tax_number'];
                $insertData['address'] = $form_data['address'];
                $insertData['license'] = $form_data['license'];
                $insertData['website_url'] = base64_encode($form_data['website_url']);
                $insertData['social_media'] = base64_encode(json_encode($form_data['social_media'], true));
                $insertData['visibility_hide_show'] = $form_data['visibility_hide_show'];
                $insertData['slug'] = $form_data['slug'];
                $insertData['status'] = $form_data['status'];
                $insertData['date_at'] = date("Y-m-d H:i:s");

                if(isset($_FILES['img']['name']) && $_FILES['img']['name'] != '') {

    				$f_name         =$_FILES['img']['name'];
                    $f_tmp          =$_FILES['img']['tmp_name'];
                    $f_size         =$_FILES['img']['size'];
                    $f_extension    =explode('.',$f_name);
                    $f_extension    =strtolower(end($f_extension));
                    $f_newfile      =uniqid().'.'.$f_extension;
                    $store          ="uploads/salespipeline/".$f_newfile;
                
                    if(!move_uploaded_file($f_tmp,$store))
                    {
                        $this->session->set_flashdata('error', 'thumb Upload Failed .');
                    }
                    else
                    {
                       $insertData['img'] = $f_newfile;
                       
                    }
                 }
                 
    			$result = $this->agency_model->save($insertData);
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Salespipeline successfully Added');
                }
                else
                { 
                    $this->session->set_flashdata('error', 'Salespipeline Addition failed');
                }
            }// check already    
            redirect('vendor/salespipeline/addnew');
          }  
        
    }


    // Member list
    public function ajax_list()
    {
		$list = $this->salespipeline_contact_model->get_datatables();
		
		$data = array();
        $no =(isset($_POST['start']))?$_POST['start']:'';
        foreach ($list as $currentObj) {

            $temp_date = $currentObj->date_at;
            $selected = ($currentObj->status == 0)?" selected ":"";
            $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
            $btn .= '<option value="1"  >Active</option>';
            $btn .= '<option value="0" '.$selected.' >Inactive</option>';
            $btn .= '</select>';
            $dateAt = date("d-m-Y H:ia", strtotime($temp_date));

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = "<span class='table-row contact_profile' data-profile_id='".$currentObj->id."' > ".$currentObj->FirstName."</span>";
            $row[] = $currentObj->LastName;
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                        "recordsTotal" => $this->agency_model->count_all(),
                        "recordsFiltered" => $this->agency_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


    // Status Change
 
    public function statusChange($id = NULL)
    {
        $this->isVendorLoggedIn();
        if($_POST['id'] == null)
        {
            redirect('vendor/agency');
        }

        $insertData['id'] = $_POST['id'];
        $insertData['status'] = $_POST['status'];
        $result = $this->agency_model->save($insertData);
        exit;
    } 

    // Edit
 
    public function edit($id = NULL)
    {
        

        $this->isVendorLoggedIn();
        if($id == null)
        {
            redirect('vendor/agency');
        }

        $data['edit_data'] = $this->agency_model->find($id);
        $this->global['pageTitle'] = 'Salespipeline ';
        $this->vendorView("vendor/salespipeline/edit", $this->global, $data , NULL);
        
    } 

    // Delete  *****************************************************************
      function delete()
    {
        
        $this->isVendorLoggedIn();
        $delId = $this->input->post('id');  
        
        $result = $this->agency_model->delete($delId); 
            
        if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
        else { echo(json_encode(array('status'=>FALSE))); }
    }

    // Update Agency*************************************************************
    public function update()
    {
		
        $this->isVendorLoggedIn();
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('name','Salespipeline','trim|required');
        
        
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
            $insertData['description'] = base64_encode($form_data['description']);
            $insertData['email'] = $form_data['email'];
            $insertData['mobile'] = $form_data['mobile'];
            $insertData['phone'] = $form_data['phone'];
            $insertData['fax_number'] = $form_data['fax_number'];
            $insertData['language'] = $form_data['language'];
            $insertData['tax_number'] = $form_data['tax_number'];
            $insertData['address'] = $form_data['address'];
            $insertData['license'] = $form_data['license'];
            $insertData['website_url'] = base64_encode($form_data['website_url']);
            $insertData['social_media'] = base64_encode(json_encode($form_data['social_media'], true));
            $insertData['visibility_hide_show'] = $form_data['visibility_hide_show'];
            $insertData['slug'] = $form_data['slug'];
            $insertData['status'] = $form_data['status'];
            $insertData['date_at'] = date("Y-m-d H:i:s");
            
			
			if(isset($_FILES['img']['name']) && $_FILES['img']['name'] != '') {

				$f_name         =$_FILES['img']['name'];
                $f_tmp          =$_FILES['img']['tmp_name'];
                $f_size         =$_FILES['img']['size'];
                $f_extension    =explode('.',$f_name);
                $f_extension    =strtolower(end($f_extension));
                $f_newfile      =uniqid().'.'.$f_extension;
                $store          ="uploads/salespipeline/".$f_newfile;
            
                if(!move_uploaded_file($f_tmp,$store))
                {
                    $this->session->set_flashdata('error', 'Flag Upload Failed .');
                }
                else
                {
					$file = "uploads/salespipeline/".$form_data['old_img'];
					if(file_exists ( $file))
					{
						unlink($file);
					}
					$insertData['img'] = $f_newfile;
                   
                }
             }

            $result = $this->agency_model->save($insertData);
			

            if($result > 0)
            {
                $this->session->set_flashdata('success', ' Agency successfully Updated');
            }
            else
            { 
                $this->session->set_flashdata('error', 'Salespipeline Updation failed');
            }
            redirect('vendor/salespipeline/edit/'.$insertData['id']);
          }  
        
    }

    // Insert contact table
    public function insertleadcontact()
    {
        $this->isVendorLoggedIn();
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('FirstName','First Name','trim|required');
        $this->form_validation->set_rules('LastName','Last Name','trim|required');
        $this->form_validation->set_rules('Mobile','Mobile','required');
        $this->form_validation->set_rules('TypeOFContact','Type Of Contact','required');
        $this->form_validation->set_rules('ContactAssignTo','Assign To','required');
         
        
        //form data 
        $form_data  = $this->input->post();
        if($this->form_validation->run() == FALSE)
        {

             $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );

            
        }
        else
        {

            // check already exist
            $where = array();
            $where['Email'] = $form_data['Email'];
            $returnData = $this->landlord_model->findDynamic($where);
            if(!empty($returnData)){
                 $response = array(
                    'status' => 'error',
                    'message' => "<h3>".$form_data['Email']." already Exist.</h3>"
                );
               
            }else{
               
                 // Landlord Add Data Start 
                $insertData = array();

                $insertData['Salutation']   = $form_data['Salutation'];
                $insertData['FirstName']    = $form_data['FirstName'];;
                $insertData['LastName']     = $form_data['LastName'];;
                $insertData['Email']        = $form_data['Email']; 
                $insertData['Mobile']       = $form_data['Mobile'];
                $insertData['AlternateMobile']=$form_data['AlternateMobile'];
                $insertData['TypeOFContact']= (isset($form_data['TypeOFContact'])) ? $form_data['TypeOFContact'] : "0";
                $insertData['Role']         = (isset($form_data['Role'])) ? json_encode($form_data['Role'], true): "";
                $insertData['Nationality']  = $form_data['Nationality'];
                $insertData['ContactSource']= $form_data['ContactSource'];
                $insertData['ContactAssignTo']=$form_data['ContactAssignTo']; 
                $insertData['status']       = '1';
                $insertData['date_at']      = date("Y-m-d H:i:s");

                $result = $this->landlord_model->save($insertData);
                // Landlord Add Data End 
                 
                
                if($result > 0)
                {
                     $response = array(
                        'status' => 'success',
                        'message' => "<h3 >Contact Details Added successfully.</h3>"
                    );
                }
                else
                { 
                    $response = array(
                        'status' => 'error',
                        'message' => "<h3>Contact Details Addition failed.</h3>"
                    );
                }
            }// check already    
            
          }  
          $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
        
    }




    // Insert contact table
    public function insertcontact()
    {
        $this->isVendorLoggedIn();
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('FirstName','First Name','trim|required');
        $this->form_validation->set_rules('LastName','Last Name','trim|required');
        $this->form_validation->set_rules('Mobile','Mobile','required');
        $this->form_validation->set_rules('TypeOFContact','Type Of Contact','required');
        $this->form_validation->set_rules('ContactAssignTo','Assign To','required');
         
        
        //form data 
        $form_data  = $this->input->post();
        if($this->form_validation->run() == FALSE)
        {

             $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );

            
        }
        else
        {

            // check already exist
            $where = array();
            $where['FirstName'] = $form_data['FirstName'];
            $where['LastName'] = $form_data['LastName'];
            $returnData = $this->salespipeline_contact_model->findDynamic($where);
            if(!empty($returnData)){
                 $response = array(
                    'status' => 'error',
                    'message' => "<h3>".$form_data['FirstName']." already Exist.</h3>"
                );
               
            }else{
               
                $insertData = array();

                $insertData['Salutation']   = $form_data['Salutation'];
                $insertData['FirstName']    = $form_data['FirstName'];;
                $insertData['LastName']     = $form_data['LastName'];;
                $insertData['Email']        = $form_data['Email']; 
                $insertData['Mobile']       = $form_data['Mobile'];
                $insertData['AlternateMobile']=$form_data['AlternateMobile'];
                $insertData['TypeOFContact']= (isset($form_data['TypeOFContact'])) ? $form_data['TypeOFContact'] : "0";
                $insertData['Role']         =  $form_data['Role'];
                $insertData['Nationality']  = $form_data['Nationality'];
                $insertData['ContactSource']= $form_data['ContactSource'];
                $insertData['ContactAssignTo']=$form_data['ContactAssignTo'];
                $insertData['status']       = '1';
                $insertData['date_at']      = date("Y-m-d H:i:s");


                $result = $this->salespipeline_contact_model->save($insertData);
                 
                
                if($result > 0)
                {
                     $response = array(
                        'status' => 'success',
                        'message' => "<h3 >Contact Details Added successfully.</h3>"
                    );
                }
                else
                { 
                    $response = array(
                        'status' => 'error',
                        'message' => "<h3>Contact Details Addition failed.</h3>"
                    );
                }
            }// check already    
            
          }  
          $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
        
    }


    //to get and edit instant contact details 
    public function get_contact_profile($id)
    {
         $this->isVendorLoggedIn();
        
        $result = $this->salespipeline_contact_model->get_contact_list();
        
        if(!empty($result))
        {



            $response = array(
                        'status' => 'success',
                        'message' =>  $result
                    );
        }else
        {
             $response = array(
                        'status' => 'error',
                        'message' => "RECORD Not Found."
                    );
        }



        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
    //to get and edit instant contact details 
    public function get_contact_detail($id)
    {
         $this->isVendorLoggedIn();
        
        $resultobj = $this->salespipeline_contact_model->get_contact_detail($id);
        $result = $resultobj[0];
          
        if(!empty($result))
        {


            $RoleList = $this->type_model->RoleList();
            $listAssignTo = $this->type_model->listAssignTo();
            $listSecure = $this->type_model->listSecure();

            
            $Role = $result->Role;
            $ContactSource = $result->ContactSource;
            $ContactAssignTo = $result->ContactAssignTo;
            $SalutationId = $result->Salutation;
            $NationalityId = $result->Nationality;
            $TypeOFContactId = $result->TypeOFContact;

            $RoleName = $RoleList[$Role];
            $SourceName = $listSecure[$ContactSource];
            $AssignToName = $listAssignTo[$ContactAssignTo];
 
           
            

            $row = [];
            $row['FirstName'] =$result->FirstName;
            $row['LastName'] =$result->LastName;
            $row['Email'] = $result->Email;
            $row['Mobile'] = $result->Mobile;
            $row['AlternateMobile'] = $result->AlternateMobile;

            $row['RoleName'] = $RoleName;
            $row['ContactSource'] = $SourceName;
            $row['ContactAssignTo'] = $AssignToName;
            
            $row['ContactSourceId'] = $ContactSource;
            $row['RoleNameId']      = $RoleName;
            $row['ContactAssignToId'] = $ContactAssignTo;
            $row['ContactSourceId'] = $ContactSource;
            $row['SalutationId'] = $SalutationId;
            $row['NationalityId'] = $NationalityId;
            $row['TypeOFContactId'] = $TypeOFContactId;



            
             
            


            $response = array(
                        'status' => 'success',
                        'message' =>  $row
                    );
        }else
        {
             $response = array(
                        'status' => 'error',
                        'message' => "RECORD Not Found."
                    );
        }



        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function update_contact_detail()
    {
         $this->isVendorLoggedIn();
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('FirstName','First Name','trim|required');
        $this->form_validation->set_rules('LastName','Last Name','trim|required');
        $this->form_validation->set_rules('Mobile','Mobile','required');
        $this->form_validation->set_rules('TypeOFContact','Type Of Contact','required');
        $this->form_validation->set_rules('ContactAssignTo','Assign To','required');
         
        
        //form data 
        $form_data  = $this->input->post();
        if($this->form_validation->run() == FALSE)
        {

             $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );

            
        }
        else
        {

                $insertData = array();
                if(isset($form_data['ContactID']) && $form_data['ContactID'] !=='')
                {
                    $insertData['id']   = $form_data['ContactID'];
                }
                
                $insertData['Salutation']   = $form_data['Salutation'];
                $insertData['FirstName']    = $form_data['FirstName'];;
                $insertData['LastName']     = $form_data['LastName'];;
                $insertData['Email']        = $form_data['Email']; 
                $insertData['Mobile']       = $form_data['Mobile'];
                $insertData['AlternateMobile']=$form_data['AlternateMobile'];
                $insertData['TypeOFContact']= (isset($form_data['TypeOFContact'])) ? $form_data['TypeOFContact'] : "0";
                $insertData['Role']         =  $form_data['Role'];
                $insertData['Nationality']  = $form_data['Nationality'];
                $insertData['ContactSource']= $form_data['ContactSource'];
                $insertData['ContactAssignTo']=$form_data['ContactAssignTo'];
                $insertData['update_at']      = date("Y-m-d H:i:s");

                $result = $this->salespipeline_contact_model->save($insertData);
                 
                
                if($result > 0)
                {
                     $response = array(
                        'status' => 'success',
                        'message' => "<h3 >Contact Details Updated successfully.</h3>"
                    );
                }
                else
                { 
                    $response = array(
                        'status' => 'error',
                        'message' => "<h3>Contact Details Updation failed.</h3>"
                    );
                }
              
            
          }  
          $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    // Insert contact note
    public function insert_contact_note()
    {
        $this->isVendorLoggedIn();
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('contact_note','Note','trim|required');
         
         
        
        //form data 
        $form_data  = $this->input->post();
        if($this->form_validation->run() == FALSE)
        {

             $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );

            
        }
        else
        {

             
            
               
                $insertData = array();

                $insertData['contact_note']   = $form_data['contact_note'];
                $insertData['contact_id']=$form_data['hiddenNoteContactId'] ;               
                $insertData['status']       = '1';
                $insertData['date_at']      = date("Y-m-d H:i:s");

                $result = $this->contact_note_model->save($insertData);
                 
                
                if($result > 0)
                {
                     $response = array(
                        'status' => 'success',
                        'message' => "<h3 >Contact Note Added successfully.</h3>"
                    );
                }
                else
                { 
                    $response = array(
                        'status' => 'error',
                        'message' => "<h3>Contact Note Addition failed.</h3>"
                    );
                }
              
            
          }  
          $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
        
    }
    // Insert contact note
    public function insert_contact_task()
    {
        $this->isVendorLoggedIn();
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('task_type','Type','required');
        $this->form_validation->set_rules('due_date','Due Date','trim|required');
        $this->form_validation->set_rules('due_time','Time','required');
        $this->form_validation->set_rules('staff_id','Staff','required');
        $this->form_validation->set_rules('task_status','Status','required');
        $this->form_validation->set_rules('task_status','hiddenTaskContactId','required');
         
         
        
        //form data 
        $form_data  = $this->input->post();
        if($this->form_validation->run() == FALSE)
        {

             $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );

            
        }
        else
        {

             
            
               
                $insertData = array();

                $insertData['type']         = $form_data['task_type'];
                $insertData['due_date']     = $form_data['due_date'];
                $insertData['due_time']     = $form_data['due_time'];
                $insertData['staff_id']     = $form_data['staff_id'];
                $insertData['contact_note'] = $form_data['contact_task_note'];
                $insertData['contact_id'] = $form_data['hiddenTaskContactId'];
                $insertData['status']       = $form_data['task_status'];
                $insertData['date_at']      = date("Y-m-d H:i:s");

                $result = $this->contact_task_model->save($insertData);
                 
                
                if($result > 0)
                {
                     $response = array(
                        'status' => 'success',
                        'message' => "<h3 >Contact Note Added successfully.</h3>"
                    );
                }
                else
                { 
                    $response = array(
                        'status' => 'error',
                        'message' => "<h3>Contact Note Addition failed.</h3>"
                    );
                }
              
            
          }  
          $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
        
    }

     
     public function get_task_contact($id)
    {
         $this->isVendorLoggedIn();
        
        $result = $this->contact_task_model->get_task_contact($id);
        
        //print_r($result);
        if(!empty($result))
        {
                $response = array(
                        'status' => 'success',
                        'message' =>  $result
                    );
        }else
        {
             $response = array(
                        'status' => 'error',
                        'message' => "RECORD Not Found."
                    );
        }



        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function get_note_contact($id)
    {
         $this->isVendorLoggedIn();
        
        $result = $this->contact_note_model->get_note_contact($id);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }

}

?>
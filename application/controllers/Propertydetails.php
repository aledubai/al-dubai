<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

//require APPPATH . '/libraries/BaseController.php';


/**
 * Class : User (UserController)
 * User Class to control all user related operations.

 * @since : 15 November 2016
 */
require APPPATH . '/libraries/BaseController.php';

class Propertydetails extends BaseController
{
    
    /**
     * This is default constructor of the class
     */

    public function __construct()
    {
        parent::__construct();
        //$this->load->model('admin/product_model');
        $this->load->library('base_library');
        // Cookie helper
        $this->load->helper('cookie');
        $this->load->model('front/propertyDetails_model');
        $this->load->model('front/bookmarks_model');
        $this->load->model('front/contact_agent_model');
         $this->load->model('admin/type_model');
         

     }



    /**
     * Index Page for this controller.
     */
    // Index =============================================================
    public function index()
    {
      // Onload Comon Page Data ============================= 
    	$data = array();
      // Define =========================== 
       $data["title"]="Ale-izba";
        
	 return redirect(base_url().'propertylist');
        
    } 
	
	  public function public_property($slug_url='')
    {
         $where  = array();
        $where['table']     = 'property';
        $where['slug_url']  = $slug_url;
        $where['status']    = '1';
        $result = $this->propertyDetails_model->findDynamic($where);

         
        if(!empty($result[0]))
        {
            $result = $result[0];
            $id     = $result->id;
            $id     = base64_encode($id);
            $this->get_details($id);    
        }else
        {
            return redirect(base_url().'propertylist');
        }
    }

public function insert_contactus()
    {
    


      $this->load->library('form_validation');
      

      $this->form_validation->set_rules('contact_name','Name','trim|required');
      $this->form_validation->set_rules('contact_email','Email','valid_email|required');
      $this->form_validation->set_rules('contact_mobile','Mobile','required');
      $this->form_validation->set_rules('contact_message','Message','required');
 

        if($this->form_validation->run() == FALSE)
        {
          $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );
             
        }
        else
        {
          
        $from_email     = "pixel4video@gmail.com"; 
        $from_pass      = 'Pixel$#987';
        $contact_name   = $this->input->post('contact_name'); 
        $to_email       = $this->input->post('contact_email'); 
        $to_mobile      = $this->input->post('contact_mobile'); 
        $to_message     = $this->input->post('contact_message');


        $form_data  = $this->input->post();

        //Load email library 
      



        $this->load->library('email');

       /* //SMTP & mail configuration
        $config = array(
        'protocol'  => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => $from_email,
        'smtp_pass' => $from_pass,
        'mailtype'  => 'html',
        'charset'   => 'utf-8'
        );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");

 

        $this->email->to($to_email);
        $this->email->subject('Email Test message '); 
        $this->email->message('Hi, $contact_name  WE Will Be Back Soon With Your Regarding Coctact Details . $to_message '); */
 
        /*if($this->email->send())*/
        if(1)
        {


        $where  = array();
        $where['table']  = 'property';
        $where['id']  = $form_data['property_id'];
        $where['field']  =  'user_id';
        $result = $this->propertyDetails_model->findDynamic($where);
        $user_id = $result[0]->user_id;

        $insertData['contact_name']     = $form_data['contact_name'];
        $insertData['contact_email']    = $form_data['contact_email'];
        $insertData['contact_mobile']   = $form_data['contact_mobile'];
        $insertData['contact_message']  = $form_data['contact_message'];
        $insertData['landlord_id']      = $form_data['landlord_id'];
        $insertData['property_id']      = $form_data['property_id'];
        $insertData['user_id']          = $user_id;
        $insertData['keep_me_inform']   = (isset($form_data['keep_me_inform']) && $form_data['keep_me_inform'] !=='')?$form_data['keep_me_inform']:'0';
        $insertData['status']           = '0';
        $insertData['date_at']          = date("Y-m-d H:i:s");

 
            $res = $this->contact_agent_model->save($insertData);
             if($res)
             {
                $response = array(
                            'status' => 'success',
                            'message' =>  "Email sent successfully"
                        );       
             }else{
                $response = array(
                            'status' => 'error',
                            'message' =>  "Email not sent successfully"
                        );   
             }
            
        } 
        
        else{
           $this->session->set_flashdata("error","Error in sending Email."); 

            $response = array(
                            'status' => 'error',
                            'message' =>  "Error in sending Email."
                        );
        }

         

        

    }
        
        
        



        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));

       
        
    }
    public function get_physical_address()
    {

            ob_start(); // Turn on output buffering
            system('ipconfig /all'); //Execute external program to display output
            $mycom=ob_get_contents(); // Capture the output into a variable
            ob_clean(); // Clean the output buffer

            $find_word = "Physical";
            $pmac = strpos($mycom, $find_word); // Find the position of Physical text in array
            $mac=substr($mycom,($pmac+36),17); // Get Physical Address

         return $mac;
    }

    public function insert_bookmarks()
    { 
            $newdata = array(
            'uri_strings'  => $this->input->post('uri_strings')
            );

            $this->session->set_userdata($newdata);
            
         $this->session->userdata("userId"); 
        //$this->isUserLoggedIn();
         if($this->session->userdata("userId"))
         {
             
        $form_data  = $this->input->post();
        $get_physical_address= $this->get_physical_address();
        $where  = array();
        $where['table']  = 'bookmarks';
        $where['property_id']  = $this->input->post('property_id');
        $where['status']  = '1';
        $where['user_id']  = $this->session->userdata("userId");;
         


        $result = $this->propertyDetails_model->findDynamic($where);
         
        if(empty($result))
        {
 
        $insertData['property_id']      = $form_data['property_id'];
        $insertData['physical_address'] = $get_physical_address;
        $insertData['ip_address']       =  $this->input->ip_address();
        $insertData['user_id']       =  $this->session->userdata("userId");
        $insertData['status']           = '1';
        $insertData['date_at']          = date("Y-m-d H:i:s");

 
            $res = $this->bookmarks_model->save($insertData);
             if($res)
             {
                $response = array(
                            'status' => 'success',
                            'message' =>  "Bookmarks Added Successfully"
                        );       
             }else{
                $response = array(
                            'status' => 'error',
                            'message' =>  "Bookmarks not Save successfully"
                        );   
             }
            
        } 
        
        else{
           $this->session->set_flashdata("error","Error in sending bookmarks."); 

            $response = array(
                            'status' => 'error',
                            'message' =>  "All ready bookmarks."
                        );
        }
         }else
         {
            $response = array(
                            'status' => 'errorLogin',
                            'message' =>  "All ready bookmarks."
                        );
         }
       

         

        

     
        
        
        



        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));

       
        
    }
    public function remove_bookmarks()
    { 
             
            
         $this->session->userdata("userId"); 
        
         if($this->session->userdata("userId"))
         {
            $id   = $this->input->post('property_id'); 
        $form_data  = $this->input->post();
         
        $where  = array();
        $where['table']  = 'bookmarks';
        $where['property_id']  =  $this->input->post('property_id');
        $where['status']  = '1';
        $where['user_id']  = $this->session->userdata("userId");;
         


        $result = $this->propertyDetails_model->findDynamic($where);
         // print_r($where); 
           
        if(!empty($result))
        {

            $result = $result[0];
 
            $insertData['id']      = $result->id;
            $insertData['status']           = '0';
         

 
            $res = $this->bookmarks_model->save($insertData);
             if($res)
             {
                $response = array(
                            'status' => 'success',
                            'message' =>  "Bookmarks Removed Successfully"
                        );       
             }else{
                $response = array(
                            'status' => 'error',
                            'message' =>  "Bookmarks not Removed successfully"
                        );   
             }
            
        }else{
                $response = array(
                            'status' => 'error',
                            'message' =>  "Error in sending bookmarks."
                        );
            }
         }
       

         
 
        

     
        
        
        



        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));

       
        
    }
   

     public function get_details($id=null,$name=null)
     {
          
        if($id =='')
        {
             redirect('propertyList');
        }
        $id = base64_decode($id);
        $currentObj = $this->propertyDetails_model->find($id);
        $data["property"] = $currentObj;
        //get only property featurs detail accoredingly property wise ;
 
        
        $TypeList = $this->type_model->getTypeList();
        $PurposeList = $this->type_model->PurposeList();
        //Building
        $data['BuildingList']  = $this->type_model->BuildingList();
        //Building icon
        $data['BuildingListIcon']  = $this->type_model->BuildingListIcon();
        //Recreation and Family
        $data['RecreationAndFamily']  = $this->type_model->RecreationAndFamily();
        //Recreation and Family icon
        $data['RecreationAndFamilyIcon']  = $this->type_model->RecreationAndFamilyIcon();
        //Health and Fitness
        $data['HealthAndFitness']  = $this->type_model->HealthAndFitness();
        //Health and Fitness Icon
        $data['HealthAndFitnessIcon']  = $this->type_model->HealthAndFitnessIcon();
        //Laundry and Kitchen
        $data['LaundryAndKitchen']  = $this->type_model->LaundryAndKitchen();
        //Laundry and Kitchen Icon
        $data['LaundryAndKitchenIcon']  = $this->type_model->LaundryAndKitchenIcon();

        //Business and Security
        $data['BusinessAndSecurity']  = $this->type_model->BusinessAndSecurity();
        //Miscellaneous
        $data['BusinessAndSecurityIcon']  = $this->type_model->BusinessAndSecurityIcon();
        //Miscellaneous
        $data['MiscellaneousList']  = $this->type_model->MiscellaneousList();
        //Technology
        $data['MiscellaneousListIcon']  = $this->type_model->MiscellaneousListIcon();
        //Technology
        $data['TechnologyList']  = $this->type_model->TechnologyList();
        //Features
        $data['TechnologyListIcon']  = $this->type_model->TechnologyListIcon();
        //Features
        $data['FeaturesList']  = $this->type_model->FeaturesList(); 
        //Features icon
        $data['FeaturesListIcon']  = $this->type_model->FeaturesListIcon();
        //Cleaning and Maintenance
        $data['CleaningAndMaintenanceList']  = $this->type_model->CleaningAndMaintenanceList();
//Cleaning and Maintenance
        $data['CleaningAndMaintenanceListIcon']  = $this->type_model->CleaningAndMaintenanceListIcon();

        //SalutaionList 
        $data['SalutaionList']  = $this->type_model->SalutaionList();
        
        $propertyType_name = (isset($TypeList[$currentObj->type]))? $TypeList[$currentObj->type]:"";
        $purposeList_name = (isset($PurposeList[$currentObj->purpose]))? $PurposeList[$currentObj->purpose]:"";

        $data["propertyType_name"] =  $propertyType_name;
        $data["purposeList_name"] =  $purposeList_name;
        
        //get only property featurs detail accoredingly property wise ;
        $where  = array();
        $where['table']  = 'property_feature';
        $where['status']  = '1';
        $where['property_id']  = $id;
        $data["property_feature"] = $this->propertyDetails_model->findDynamic($where);

 //get only property  extra info detail accoredingly property wise ;
        $where  = array();
        $where['table']  = 'property_extra_info';
        $where['status']  = '1';
        $where['property_id']  = $id;
        $data["property_extra_info"] = $this->propertyDetails_model->findDynamic($where);

 //get only property  img detail accoredingly property wise ;
        $where  = array();
        $where['table']  = 'property_img_doc_plan';
        $where['status']  = '1';
        $where['action']  = 'Images';
        $where['property_id']  = $id;
       $data["property_img"] = $this->propertyDetails_model->findDynamic($where);



 //get only property  doc detail accoredingly property wise ;
        $where  = array();
        $where['table']  = 'property_img_doc_plan';
        $where['status']  = '1';
        $where['action']  = 'Docs';
        $where['property_id']  = $id;
        $data["property_doc"] = $this->propertyDetails_model->findDynamic($where);

 //get only property  Plan detail accoredingly property wise ;

        $where  = array();
        $where['table']  = 'property_img_doc_plan';
        $where['status']  = '1';
        $where['action']  = 'Plan';
        $where['property_id']  = $id;
        $data["property_plan"] = $this->propertyDetails_model->findDynamic($where);

 //get only property  landlord detail accoredingly property wise ;

         
        $data["property_landlord"] = $this->propertyDetails_model->get_landlord($id);

//get only property book marks property wise ;
        $where  = array();
        $where['table']  = 'bookmarks';
        $where['property_id']  = $id;
        $where['status']  = '1';
        $where['user_id']  = $this->session->userdata("userId");;
        $data["bookmarks"] = $this->bookmarks_model->findDynamic($where);

//get only property  portal detail accoredingly property wise ;
        $where  = array();
        $where['table']  = 'property_portal';
        $where['status']  = '1';
        $where['property_id']  = $id;
        $data["property_portal"] = $this->propertyDetails_model->findDynamic($where);
//get only property  company  detail accoredingly property wise ;
        $where  = array();
        $where['table']  = 'setting_profile';
        $where['status']  = '1';
        $where['user_id']  = $currentObj->user_id;
        //print_r($currentObj->user_id);
        $data["company_details"] = $this->propertyDetails_model->findDynamic($where);
		 
        $data["company_details"] = $data["company_details"][0];


//get only property  video detail accoredingly property wise ;
        $where  = array();
        $where['table']  = 'property_video';
        $where['status']  = '1';
        $where['property_id']  = $id;
        $data["property_video"] = $this->propertyDetails_model->findDynamic($where);
        //get only property  video detail accoredingly property wise ;
         
        $data["get_related_property"] = $this->propertyDetails_model->get_related_property($currentObj->type,$id);

       /* $data["get_latest_property"] = $this->propertyDetails_model->get_latest_property();*/

        
        $data["meta_title"]      = $data["property"]->meta_title;
        $data["meta_description"]= $data["property"]->meta_description;
        $data["meta_keyword"]= $data["property"]->meta_description;
        /*$data["file"]="front/property_details";*/
        $data["file"]="front/property_detail";
        $this->load->view('front/header/template', $data);

    } 

}

?>
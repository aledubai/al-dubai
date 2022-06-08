<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

//require APPPATH . '/libraries/BaseController.php';


/**
 * Class : User (UserController)
 * User Class to control all user related operations.

 * @since : 15 November 2016
 */
class Landingpageppc extends CI_Controller
{
    
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('admin/product_model');
        $this->load->library('base_library');
        $this->load->model('admin/country_model');
        $this->load->model('front/contact_agent_model');

        // Cookie helper
        $this->load->helper('cookie');
     }



    /**
     * Index Page for this controller.
     */
    // Index =============================================================
    public function index()
    {

      // Onload Comon Page Data ============================= 

        $where = array();
        $where['status'] = 1;

        $country_list = $this->country_model->findDynamic($where);

       // Define =========================== 
       $data["country_list"]=$country_list;
       $data["title"]="Book Property";
       $this->load->view('front/landingpageppc',$data);
    }

    public function get_country_code()
    {
         $form_data  = $this->input->post();
         $country_id =  $form_data['country'];

            $where = array();
            $where['status'] = 1;
            $where['id'] = $country_id;

            $country_list = $this->country_model->findDynamic($where);
            echo $country_list[0]->phone_code;

    }

    public function save_data()
    {
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('country','Country','required');
        $this->form_validation->set_rules('mobile','Mobile','required');
        $this->form_validation->set_rules('email','Email','required');
         
        
         
         
         
        
        //form data 
        $form_data  = $this->input->post();
        if($this->form_validation->run() == FALSE)
        {

             $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );



            $this->index();
        }
        else
        {

            $contact_name       = $form_data['name'];
            $contact_email      = $form_data['email'];
            $contact_mobile     = $form_data['mobile'];
            $contact_country    = $form_data['country'];
            $description    = $form_data['description'];




               // staff_query
                $contact_email = strtolower($contact_email) ; 
                $sql_where  = " contact_email = '$contact_email' AND contact_mobile='$contact_mobile'";
               




                $data_store = array(); 
                if(isset($form_data['id']) && $form_data['id'] !=='')
                {
                    $data_store['id']   = $form_data['id'];
                    $id = $form_data['id'];
                    $sql_where .=" AND id !='$id'";
                }


                 $stafexist = $this->contact_agent_model->staff_query($sql_where);

                 if(empty($stafexist))
                 {
                    
                    $data_store['date_at']          = date( "Y-m-d");
                    $data_store['contact_name']     = $contact_name;
                    $data_store['contact_email']    = $contact_email;
                    $data_store['contact_mobile']   = $contact_mobile;
                    $data_store['country']          = $contact_country;
                    $data_store['contact_message']          = $description;
                    $data_store['stage']            = '';
                    $data_store['owner']            = '';
                    $data_store['lead_source'] =  'Adds';
                    $data_store['labels'] = '';

                    $result = $this->contact_agent_model->save($data_store);

                    
                     
                    
                    if($result > 0)
                    {

                        $this->session->set_flashdata('success', 'Your Enquiry Saved Successfully.');
                        /* $response = array(
                            'status' => 'success',
                            'message' => "<h3>Your Enquiry Saved Successfully.</h3>"
                        );*/
                    }
                    else
                    { 
                         $this->session->set_flashdata('error', 'Your Enquiry Saved Successfully.');
                        /*$response = array(
                            'status' => 'error',
                            'message' => "<h3>Your Enquiry Saved Addition Failed.</h3>"
                        );*/
                    }



                    $this->load->library('email');
                     $toemail = 'aaaaibyrox@gmail.com'; 
                    //$toemail = 'naqviabbas817@gmail.com';
                    $this->email->from('abbas@aleizba.com', 'Adds Lead');
                    $this->email->to($toemail);
                   // $this->email->cc('anilkumarm309@gmail.com');
                    

                    $this->email->subject('New Lead Arival ');
                    $this->email->message('New Lead Arival /n'.'Name : '.$contact_name.'/n Email : '.$contact_email.'/n Mobile : '.$contact_mobile.'/n Description : '.$description);

                    $resulst = $this->email->send();

                   /* print_r($resulst);
                    print_r($this->email->print_debugger());
                    die;*/




                 }else
                 {
                    $this->session->set_flashdata('error', 'Your Enquiry Already Saved ');
                   /* $response = array(
                            'status' => 'error',
                            'message' => "<h3>Your Enquiry Already Saved /h3>"
                        );*/
                 }
                /* $this->index();*/
                redirect(base_url()."offers/apartments/book-with-two-percent");

             }


          /*$this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));*/
    }
		
		
	      public function thankyou()
    {

      // Onload Comon Page Data ============================= 

        $where = array();
        $where['status'] = 1;

        $country_list = $this->country_model->findDynamic($where);

       // Define =========================== 
       $data["country_list"]=$country_list;
       $data["title"]="Book Property : Thank You";
       $this->load->view('front/thank-you',$data);
    }
	
   

}
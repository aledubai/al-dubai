<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

//require APPPATH . '/libraries/BaseController.php';


/**
 * Class : User (UserController)
 * User Class to control all user related operations.

 * @since : 15 November 2016
 */
class Alehome extends CI_Controller
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
        $this->load->model('front/history_model');
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
       $data["file"]="front/homenew";
       $this->load->view('front/header/template',$data);
    } 

    //For MAC Address
    // public function get_physical_address()
    // {

    //         ob_start(); // Turn on output buffering
    //         system('ipconfig /all'); //Execute external program to display output
    //         $mycom=ob_get_contents(); // Capture the output into a variable
    //         ob_clean(); // Clean the output buffer

    //         $find_word = "Physical";
    //         $pmac = strpos($mycom, $find_word); // Find the position of Physical text in array
    //         $mac=substr($mycom,($pmac+36),17); // Get Physical Address

    //      return $mac;
    // }
    //For MAC Address

     public function insert_history()
    { 
          
         
        // $id   = $this->input->post('property_id'); 
        $form_data  = $this->input->post();
        $where  = array();
        $where['table']  = 'guesthistory';
        // $where['property_id']  = $id;

        $where['ip_address']       =  $this->input->ip_address();      
        $where['search']       =  $form_data['search'];      

        $result = $this->history_model->findDynamic($where);
         
        if(empty($result))
        {
 
        // $insertData['property_id']      = $form_data['property_id'];
        $insertData['ip_address']       =  $this->input->ip_address();
        $insertData['status']           = '0';
        $insertData['date_at']          = date("Y-m-d H:i:s");
        $insertData['search']          = $form_data['search'];

            $res = $this->history_model->save($insertData);
            
            
        } 
    }

}

?>
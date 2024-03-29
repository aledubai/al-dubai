<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

//require APPPATH . '/libraries/BaseController.php';


/**
 * Class : User (UserController)
 * User Class to control all user related operations.

 * @since : 15 November 2016
 */
class Index extends CI_Controller
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

     }



    /**
     * Index Page for this controller.
     */
    // Index =============================================================
    
    public function index()
    {

    if($this->input->get('template'))
    {
      echo get_contact_template();die;
    }
      // Onload Comon Page Data ============================= 

    	$data = array();
       // Define =========================== 
          $data["get_latest_property"] = $this->propertyDetails_model->get_latest_property();
          $data["get_popular_searches"] = $this->propertyDetails_model->get_popular_searches();
          $data["get_office_searches"] = $this->propertyDetails_model->get_office_searches();
          $data["get_apartment_searches"] = $this->propertyDetails_model->get_apartment_searches();
          $data["get_villa_searches"] = $this->propertyDetails_model->get_villa_searches();
          $data["get_office_community"] = $this->propertyDetails_model->get_office_community();
          $data["get_apartment_community"] = $this->propertyDetails_model->get_apartment_community();
          $data["get_villa_community"] = $this->propertyDetails_model->get_villa_community();
           
         
          $data["meta_title"]="Buy Property in Dubai, Buy Flat in Dubai, Buy Home in Dubai | Aleizba";
          $data["meta_description"]="Buy property in Dubai, largest inventory of residential properties and commercial real estate in Dubai. Start your property search today on Aleizba.com";
          $data["meta_keyword"]="buy property in dubai, buy office in dubai, buy flat in dubai, properties in dubai, villas for sale in dubai, real estate in dubai, buy home in dubai, villas for sale in dubai south";
          $data["file"]="front/homenew";
       $this->load->view('front/header/template',$data);
   
    }  

 

    public function cookieupdate()
    {
        $cookiesave = array(
         'name'   => 'Ale-izbaCookie',
         'value'  => '1',
         'expire' =>  time()+86400);

        set_cookie($cookiesave);
        exit;
    }
	
	public function call_api()
    {
      $apidata = array();
      $apidata['url']      =  'http://127.0.0.1/SharedAccess/web44/adminpanel/call_api';
      $apidata['name']     =  "Test";
      $apidata['email']    =  "test@gmail.com1";
      $apidata['phone']    =  "9696969696";
      $apidata['message']  =  "Test Message";
      $apidata['url_from'] =  base_url();
      $apidata['apikey']   =  "097u7hk7KK";

      if(!empty($apidata['apikey']))
      {
          $callcurl = callcurl($apidata);

          $getresult = json_decode($callcurl);
          
          if($getresult->status ==1  ||  $getresult->status== 2 )
          {
            echo $getresult->message;
          } 
           
      }
      
    }
     public function call_api_list()
    {
      $apidata = array();
      $apidata['url']      =  'http://127.0.0.1/SharedAccess/web44/adminpanel/listdata';
      $apidata['url_from'] =  base_url();
      $apidata['apikey']   =  "097u7hk7KK";
      
          $callcurl = callcurl($apidata);
           
          $getresult = json_decode($callcurl);
            
          echo "<pre>";

          print_r($getresult);
          echo "</pre>";
    }
	
	
	 public function error_404()
    {
        $data = array();
        $data["title"] = "Aleizba 404 Error";
        $data["file"]="front/error_404";
       $this->load->view('front/header/template',$data);
    }
	 
    

}

?>
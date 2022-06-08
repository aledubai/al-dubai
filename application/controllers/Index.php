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
        $this->load->model('admin/type/ae_rel_community_list_model');
        $this->load->model('admin/type/ae_rel_propery_type_model');
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
          $data["get_latest_property"] = $this->propertyDetails_model->get_latest_property();
          $data["get_popular_searches"] = $this->propertyDetails_model->get_popular_searches();
          $data["get_office_searches"] = $this->propertyDetails_model->get_office_searches();
          $data["get_apartment_searches"] = $this->propertyDetails_model->get_apartment_searches();
          $data["get_villa_searches"] = $this->propertyDetails_model->get_villa_searches();
  
       $data["title"]="Ale-izba";
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
	
    public function slug_community()
    {
      $this->propertyDetails_model->get_office_searches();

       
      $where['status']    = '1';
      $community_lists = $this->ae_rel_community_list_model->findDynamic($where);
      if(!empty($community_lists))
      {
         
        foreach ($community_lists as $community_list ) 
        {


          $my_str = ltrim($community_list->name);
          $my_str = strtolower($my_str);
          $my_str  = str_replace("(","",$my_str);
          $my_str  = str_replace(")","",$my_str);
          $escape_with_hyphen  = str_replace(" ","-",$my_str);
          
          $escape_with_hyphen  = strtolower($escape_with_hyphen);
          $where = array();
          $where['slug']    = $escape_with_hyphen;
          $where['id !=']    = $community_list->id;
          $community_lists_exist = $this->ae_rel_community_list_model->findDynamic($where);
          if(!empty($community_lists_exist))
          {
            $escape_with_hyphen = $escape_with_hyphen."-".(count($community_lists_exist)+1);
          }
           $insertData = array();
            $insertData['id'] = $community_list->id;
            $insertData['slug'] = $escape_with_hyphen;
            $community_lists_exist = $this->ae_rel_community_list_model->save($insertData);
          echo $community_list->slug."<br>";
        }  
        
      }
      
    } public function slug_type()
    {
 
       
      $where['status']    = '1';
      $community_lists = $this->ae_rel_propery_type_model->findDynamic($where);
      if(!empty($community_lists))
      {
         
        foreach ($community_lists as $community_list ) 
        {


          $my_str = ltrim($community_list->name);
          $my_str = strtolower($my_str);
          $my_str  = str_replace("(","",$my_str);
          $my_str  = str_replace(")","",$my_str);
          $escape_with_hyphen  = str_replace(" ","-",$my_str);
          
          $escape_with_hyphen  = strtolower($escape_with_hyphen);
          $where = array();
          $where['slug']    = $escape_with_hyphen;
          $where['id !=']    = $community_list->id;
          $community_lists_exist = $this->ae_rel_propery_type_model->findDynamic($where);
          if(!empty($community_lists_exist))
          {
            $escape_with_hyphen = $escape_with_hyphen."-".(count($community_lists_exist)+1);
          }
           $insertData = array();
            $insertData['id'] = $community_list->id;
            $insertData['slug'] = $escape_with_hyphen;
            $community_lists_exist = $this->ae_rel_propery_type_model->save($insertData);
          echo $community_list->slug."<br>";
        }  
        
      }
      
    }
    

}

?>
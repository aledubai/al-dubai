<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

 require APPPATH . '/libraries/BaseController.php';


/**
 * Class : User (UserController)
 * User Class to control all user related operations.

 * @since : 15 November 2016
 */
class Companies extends BaseController
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
        $this->load->model('admin/settingprofile_model');
                $this->load->model('front/propertyDetails_model');

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
        $where                   = array();
          $where['table']          = 'setting_profile';
          $where['status']          = '1';
           $agency_profile = $this->settingprofile_model->findDynamic($where);

         // Define =========================== 
        $data["title"]="Ale-izba - Company List";
        /*print_r($agency_profile );*/
        $data["agency_profile"]=$agency_profile;
        $data["file"]="front/companies-list";
        $this->load->view('front/header/template',$data);
    } 

      public function companies_list($slug='',$id='')
    {

        

      $where                   = array();
      $where['table']          = 'setting_profile';
     /* $where['slug_url']         =  $slug;*/
      $where['user_id']          =  base64_decode($id);
      $setting_profile = $this->settingprofile_model->findDynamic($where);

      if(!empty($setting_profile) && $id !=='')
      {
        $data = array();
      
       // Define =========================== 
      $data['company_data'] = $setting_profile[0];
       
 

         $property_data = $this->propertyDetails_model->get_company_property(base64_decode($id));
            

        $data['company_property_data'] =  $property_data;

 

        $data["title"]="Companies - Ale-izba";
        $data["file"]="front/companies";
        $this->load->view('front/header/template',$data); 


      }else
      {
        redirect(base_url()."companies");
      }
      // Onload Comon Page Data ============================= 

     
      
      
    } 

}


?>
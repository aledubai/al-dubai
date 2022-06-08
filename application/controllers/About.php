<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

//require APPPATH . '/libraries/BaseController.php';


/**
 * Class : User (UserController)
 * User Class to control all user related operations.

 * @since : 15 November 2016
 */
class About extends BaseController
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
     }



    /**
     * Index Page for this controller.
     */
    // Index =============================================================
    public function index()
    {

      // Onload Comon Page Data ============================= 


       // Define =========================== 
       $data["title"]="Ale-izba";
       $this->load->view('front/header/template',$data);
    }

    public function testModel()
    {
     
      $this->load->model('admin/type_model');
      $this->load->model('admin/type/ae_rel_building_list_model');
      $data = array();
      $rData = $this->type_model->getTypeList();
      pre($rData);

      exit;
      // Onload Comon Page Data ============================= 


       // Define =========================== 
       $data["title"]="Ale-izba";
       $this->load->view('about/testModel',$data);
    } 

}
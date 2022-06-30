<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

//require APPPATH . '/libraries/BaseController.php';


/**
 * Class : User (UserController)
 * User Class to control all user related operations.

 * @since : 15 November 2016
 */
class Homenew extends CI_Controller
{
    
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('admin/product_model');
        $this->load->library('base_library');
         $this->load->library('form_validation'); 
        // Cookie helper
        $this->load->helper('cookie');
        $this->load->helper('string');

        $this->load->model('front/propertyDetails_model');
        $this->load->model('front/signUp_model');
        $this->load->model('admin/type_model');
     }



    /**
     * Index Page for this controller.
     */
    // Index =============================================================
    public function index()
    {
      /*$this->isLoggedIn();*/
      /*$this->isUserLoggedIn();*/
      // Onload Comon Page Data ============================= 
    	$data = array();
      
      
 
       // Define =========================== 
       $data["title"]="Ale-izba";
       $data["file"]="front/homenew";
       $this->load->view('front/header/template',$data);


    } 



    public function contact_us()
    {
      // Onload Comon Page Data ============================= 
      $data = array();
      



       // Define =========================== 
       $data["title"]="Ale-izba";
       $data["file"]="front/contact_Us";
       $this->load->view('front/header/template',$data);
    } 

     public function about_us()
    {
      
      // Onload Comon Page Data ============================= 
      $data = array();
      



       // Define =========================== 
       $data["title"]="Ale-izba";
       $data["file"]="front/about_Us";
       $this->load->view('front/header/template',$data);
    } 



    public function terms_and_conditions()
    {
      $data=array();



      // Define ============================
      $data["title"]="Al-Eizba";
      $data["file"]="front/terms_and_conditions";
      $this->load->view('front/header/template', $data);
    }

    public function privacy_policy()
    {
      $data=array();



      // Define ============================
      $data["title"]="Al-Eizba";
      $data["file"]="front/privacy_policy";
      $this->load->view('front/header/template', $data);
    }



    public function frequently_asked_questions()
    {
       $data=array();



      // Define ============================
      $data["title"]="Al-Eizba";
      $data["file"]="front/faq";
      $this->load->view('front/header/template', $data);
    }

    public function maps()
    {
      $data=array();



      // Define ============================
      $data["title"]="Al-Eizba";
      $data["file"]="front/maps";
      $this->load->view('front/header/template', $data);
    }


    public function sign_Up()
    {
      $data=array();


      // Define================================
      $data["title"]="Al-Eizba";
      $data["file"]="front/sign_Up";
      $this->load->view('front/header/template', $data);
    }


    public function payment_calculator(){

      $data=array();
      $data["title"]="Al-Eizba";
      $data["meta_title"]='Mortgage affordability calculator dubai | Aleizba';
      $data["file"]="front/payment_calculator";
      $this->load->view('front/header/template', $data);
    }


     // Sign Up Form Start
    public function add_signUp()
    {
        /*$this->isVendorLoggedIn();*/
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('fname','SignUp Name','required');
        $this->form_validation->set_rules('email','SignUp Email','required');
        $this->form_validation->set_rules('password','SignUp Password','required');
        // $this->form_validation->set_rules('passwordConf','Confirm-Password','required|matches[password]');
        /*$this->form_validation->set_rules('passconf', 'PasswordConfirmation', 'required|matches[password]');*/
        $this->form_validation->set_rules('phone','SignUp Phone','required');
        $this->form_validation->set_rules('signUpAgent','SignUp Agent','required');
        $this->form_validation->set_rules('signUpNameRobot','SignUpName Robot','required');
        $this->form_validation->set_rules('signUpNameTerms','SignUpName Terms','required');
        $this->form_validation->set_rules('signUpNameUpdates','SignUpName Updates','required');



        //Form data 
        $form_data  = $this->input->post(); 
       /* echo" <pre>";
        print_r($this->form_validation->run());
        echo" </pre>anil"; */
         
        if($this->form_validation->run() == FALSE)
        {
            $this->sign_Up();
        }
        else
        {   
            $check_Pass = md5($form_data['password']);
            $insertData = array();


                /*if(isset($form_data['signUpID']) && $form_data['signUpID'] !=='')
                {
                    $insertData['id']   = $form_data['signUpID'];
                }*/

                // Fields Details

                $random_string = random_string('alnum', 16);

                $comfirmmail                    = $form_data['email'];
                $insertData['fname']            = $form_data['fname'];
                $insertData['email']            = $form_data['email'];
                $insertData['password']         = md5($form_data['password']);
                $insertData['phone']            = $form_data['phone'];
                $insertData['signUpAgent']      = $form_data['signUpAgent'];
                

                $insertData['signUpNameRobot']  = $form_data['signUpNameRobot'];
                $insertData['signUpNameTerms']  = $form_data['signUpNameTerms'];
                $insertData['signUpNameUpdates']= $form_data['signUpNameUpdates'];
                
                $insertData['dateat']           = date("Y-m-d H:i:s");
                $insertData['type']             = 3;
                $insertData['status']           = 3;
                $insertData['vcode']           = $random_string ;
;


                $result = $this->signUp_model->save($insertData);


                  $where  = array();
                  $where['table']  = 'users';
                  $where['status']  = '1';
                  $where['email']  = $comfirmmail;
                  $check_if_exist = $this->signUp_model->findDynamic($where);

                  

                  if(!empty($check_if_exist))
                  {
                      $this->session->set_flashdata('error_signup', 'You Have Already Register. Please Log in <a href="#" onclick="menu_login_modal_show();">Click To Open Mail</a>');
                  }else
                  {
                if($result > 0)
                {

                    $where  = array();
                    $where['table']  = 'users';
                    $where['status']  = '3';
                    $where['email']  = $comfirmmail;
                     $reg_dtl = $this->signUp_model->findDynamic($where);
                     $reg_dtl = $reg_dtl[0];
                     

                     $verification_url = base_url()."homenew/verify_user_registration/".base64_encode($reg_dtl->id)."/".base64_encode($reg_dtl->email)."/".base64_encode($reg_dtl->status)."/".$reg_dtl->vcode;

                       
                     $this->session->set_flashdata('success_signup', 'Signed Up Successfully. Registration confirmation sent to email. Open It To Verify It <a href="mailto:'.$comfirmmail.'">Click To Open Mail</a><br><a href="'.$verification_url.'">Verify Email Only For Local</a>');
                }
                else
                { 
                    $this->session->set_flashdata('error_signup', 'Sign Up Failed');
                }
                  }
                  redirect(base_url().'sign_Up');
                 } 
        }


     // Sign Up Form End

        // Logged in

       /* function isLoggedIn()
    {

        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            $this->load->view('admin/login');
        }
        else
        {

            redirect('front/propertylist');
        }
    }
*/  

      function Log(){

         $this->isUserLoggedIn();
      }

  public function verify_user_registration($id=null,$email=null,$status=null,$random=null)
  {
      
     $urinew = base_url()."index";
    if($id==null || $email==null ||  $status==null||  $random==null)
    {
        $this->session->set_flashdata('errorVerify', 'Invalid Verify Trying..');
        $urinew = base_url()."index";
        
    }else
    {
     // $id = base64_decode($id);
            $where  = array();
            $where['table']   = 'users';
            $where['id']      = base64_decode($id);//$id;
            $where['status']  = base64_decode($status);
            $where['email']   = base64_decode($email);
            $where['vcode']   = $random;
            $reg_dtl = $this->signUp_model->findDynamic($where);
 
 
          
         if(!empty($reg_dtl))
         {
           $reg_dtl = $reg_dtl[0];

 
            $insertData = array();
            $insertData['id']           = base64_decode($id);
            $insertData['status']           = 1;
            $insertData['vcode']           = '';


            $result = $this->signUp_model->save($insertData);

            $this->session->set_flashdata('successVerify', 'Verify Success');
            $urinew = base_url()."index";  

         }else
         {
            $this->session->set_flashdata('errorVerify', 'Invalid Verify Trying..');
            $urinew = base_url()."index";

         }
    }

    redirect($urinew);   

  }
  public function set_user_logged($res,$type,$logged,$utype)
      {

          $sessionArray = array(
                    'userId'=>$res->id,                    
                    'type'=> $utype,
                    'user_role'=> $type,
                    'user_email'=>$res->email,
                    'user_phone'=>$res->phone,
                    'user_fname'=>$res->fname,
                    $logged => TRUE
                  );
           $this->session->set_userdata($sessionArray);
          return true;
      }

 //New Log In

        public function loginMe()
    {
       
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');

      if($this->form_validation->run() == FALSE)
        {
           $this->Log();
        }
        else
        {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            
            $result = $this->signUp_model->loginMe($email, $password);
       if(count($result) > 0)
            {
                foreach ($result as $res)
                {



                  switch ($res->type) {
                    case '1':
                     //$this->set_user_logged($res,"Admin","isLoggedIn");
                      $this->set_user_logged($res,"Admin","isVendorLoggedIn",$res->type);
                      //$urinew = base_url()."admin/dashboard";
                     $urinew = base_url()."vendor/dashboard";
                      break;
                      case '2':
                      $this->set_user_logged($res,"Vendor","isVendorLoggedIn",$res->type);
                      $urinew = base_url()."vendor/dashboard";
                      
                      break;
                      case '3':
                      $this->set_user_logged($res,"User","isUserLoggedIn",$res->type);
                      $urinew = base_url()."userVendor/Dashboard";
                      
                      break;
                    
                    default:
                       $urinew = base_url()."";
                      break;
                  } 




                  $this->session->set_userdata($sessionArray);
                    $uri_strings = $this->session->userdata('uri_strings');
                    if(isset($uri_strings)  && $uri_strings !=='')
                    {
                      $this->session->unset_userdata('uri_strings');
                      $urinew = base_url()."".$uri_strings;
                      redirect($urinew);
                    }else
                    {
                      $this->session->unset_userdata('uri_strings');
                      redirect($urinew);
                       
                    }
                    
                }
            }
            else  
            {
                $this->session->set_flashdata('errorLogin', 'Email or password mismatch');
                 
                $urinew = base_url()."index";
                redirect($urinew);
                 
            }
        }
    }



        //New Log In
       













    //Log in Form Start
    public function userLogin()
    {
       
       $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');

      if($this->form_validation->run() == FALSE)
        {
           $this->index();
        }
        else
        {

            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $where = array();
            $where['email'] = $email;
            $where['type'] = 3;
            $where['password'] = md5($password);
            $where['table'] = "users";
            $where['status'] = "3";
            $result = $this->user_model->findDynamic($where);
      if(count($result) > 0)
            {
                foreach ($result as $res)
                {
                    $sessionArray = array('userId'=>$res->id,
                                            'role'=> "vendor",
                                            'email'=>$res->email,
                                            'phone'=>$res->phone,
                                            'signUpName'=>$res->signUpName,
                                            'isVendorLoggedIn' => TRUE
                                    );
                                    
                    $this->session->set_userdata($sessionArray);
                    
                    redirect('front/propertylist');
                }
            }
            else  
            {
                $this->session->set_flashdata('error', 'Email or password mismatch');
                
                redirect('front/index');
            }
        }
    }

    //Log in Form End
    //User Logout 
    function logout()
    {
       //$this->session->sess_destroy();
       $array_items = ['userId','user_role','user_email','user_phone','user_fname','isUserLoggedIn','isVendorLoggedIn'];
         
       $this->session->unset_userdata($array_items);
        

      $urinew = base_url()."index";
      redirect($urinew);
        
    } 

     
}

?>
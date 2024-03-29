<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Country extends BaseController
{
   
    public function __construct()
    {
        parent::__construct();
       $this->load->model('admin/country_model');
    }

    
    public function index()
    {
        $this->isUserLoggedIn();

        $data = array();
        $this->global['pageTitle'] = 'Country : Ale-izba';
        $this->userVendorView("userVendor/country/list", $this->global, $data , NULL);
        
    }

    // Add New 
    public function addnew()
    {
    
        $this->isUserLoggedIn();
        $data = array();
        $this->global['pageTitle'] = 'Add New Country : Ale-izba';
        $this->userVendorView("userVendor/country/addnew", $this->global, $data , NULL);
        
    } 

    // Insert Member *************************************************************
    public function insertnow()
    {
        $this->isUserLoggedIn();
		
		
		
		$this->load->library('form_validation');            
        $this->form_validation->set_rules('name','name','trim|required');
        $this->form_validation->set_rules('code','Country Code','trim|required');
        $this->form_validation->set_rules('phone_code','Phone Code','trim');
        

        
        
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
            $returnData = $this->country_model->findDynamic($where);
            if(!empty($returnData)){
               $this->session->set_flashdata('error', $form_data['name'].' already Exist.');
            }else{

                $insertData['name'] = $form_data['name'];
                $insertData['code'] = $form_data['code'];
                $insertData['phone_code'] = $form_data['phone_code'];
                $insertData['slug'] = $form_data['slug'];
                $insertData['status'] = $form_data['status'];
    			
                			
    			if(isset($_FILES['img']['name']) && $_FILES['img']['name'] != '') {

    				$f_name         =$_FILES['img']['name'];
                    $f_tmp          =$_FILES['img']['tmp_name'];
                    $f_size         =$_FILES['img']['size'];
                    $f_extension    =explode('.',$f_name);
                    $f_extension    =strtolower(end($f_extension));
                    $f_newfile      =uniqid().'.'.$f_extension;
                    $store          ="uploads/country/".$f_newfile;
                
                    if(!move_uploaded_file($f_tmp,$store))
                    {
                        $this->session->set_flashdata('error', 'Flag Upload Failed .');
                    }
                    else
                    {
                       $insertData['img'] = $f_newfile;
                       
                    }
                 }
                 
    			$result = $this->country_model->save($insertData);
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Country successfully Added');
                }
                else
                { 
                    $this->session->set_flashdata('error', 'Country Addition failed');
                }
            }// check already    
            redirect('userVendor/country/addnew');
          }  
        
    }


    // Member list
    public function ajax_list()
    {
		$list = $this->country_model->get_datatables();
		
		$data = array();
        $no =(isset($_POST['start']))?$_POST['start']:'';
        foreach ($list as $currentObj) {

            // $temp_date = $currentObj->date_at;
            $selected = ($currentObj->status == 0)?" selected ":"";
            $btn = '<select class="statusBtn" name="statusBtn" data-id="'.$currentObj->id.'">';
            $btn .= '<option value="1"  >Active</option>';
            $btn .= '<option value="0" '.$selected.' >Inactive</option>';
            $btn .= '</select>';
            
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = '<img src ="'.base_url().'uploads/country/'.$currentObj->img.'" width="30" alt = "Ale-izba"/>';
            $row[] = $currentObj->name;
            $row[] = $currentObj->code;
            $row[] = $currentObj->phone_code;
            $row[] = $btn;
            $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'userVendor/country/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                        "recordsTotal" => $this->country_model->count_all(),
                        "recordsFiltered" => $this->country_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


    // Status Change
 
    public function statusChange($id = NULL)
    {
        $this->isUserLoggedIn();
        if($_POST['id'] == null)
        {
            redirect('userVendor/country');
        }

        $insertData['id'] = $_POST['id'];
        $insertData['status'] = $_POST['status'];
        $result = $this->country_model->save($insertData);
        exit;
    } 

    // Edit
 
    public function edit($id = NULL)
    {
        

        $this->isUserLoggedIn();
        if($id == null)
        {
            redirect('userVendor/country');
        }

        $data['edit_data'] = $this->country_model->find($id);
        $this->global['pageTitle'] = 'Country ';
        $this->userVendorView("userVendor/country/edit", $this->global, $data , NULL);
        
    } 

    // Delete  *****************************************************************
      function delete()
    {
        
        $this->isUserLoggedIn();
        $delId = $this->input->post('id');  
        
        $result = $this->country_model->delete($delId); 
            
        if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
        else { echo(json_encode(array('status'=>FALSE))); }
    }

    // Update Country*************************************************************
    public function update()
    {
		
        $this->isUserLoggedIn();
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('name','Country','trim|required');
        $this->form_validation->set_rules('code','Code','trim|required');
        $this->form_validation->set_rules('phone_code','Phone Code','trim');
        $this->form_validation->set_rules('slug','Slug','trim');
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
            $insertData['code'] = $form_data['code'];
            $insertData['phone_code'] = $form_data['phone_code'];
            $insertData['slug'] = $form_data['slug'];
            $insertData['status'] = $form_data['status'];
            
			
			if(isset($_FILES['img']['name']) && $_FILES['img']['name'] != '') {

				$f_name         =$_FILES['img']['name'];
                $f_tmp          =$_FILES['img']['tmp_name'];
                $f_size         =$_FILES['img']['size'];
                $f_extension    =explode('.',$f_name);
                $f_extension    =strtolower(end($f_extension));
                $f_newfile      =uniqid().'.'.$f_extension;
                $store          ="uploads/country/".$f_newfile;
            
                if(!move_uploaded_file($f_tmp,$store))
                {
                    $this->session->set_flashdata('error', 'Flag Upload Failed .');
                }
                else
                {
					$file = "uploads/country/".$form_data['old_img'];
					if(file_exists ( $file))
					{
						unlink($file);
					}
					$insertData['img'] = $f_newfile;
                   
                }
             }

            $result = $this->country_model->save($insertData);
			

            if($result > 0)
            {
                $this->session->set_flashdata('success', ' Country successfully Updated');
            }
            else
            { 
                $this->session->set_flashdata('error', 'Country Updation failed');
            }
            redirect('userVendor/country/edit/'.$insertData['id']);
          }  
        
    }

    
    
    
}

?>
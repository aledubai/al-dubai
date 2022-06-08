<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Language extends BaseController
{
   
    public function __construct()
    {
        parent::__construct();
       $this->load->model('admin/language_model');
    }

    
    public function index()
    {
        $this->isUserLoggedIn();

        $data = array();
        $this->global['pageTitle'] = 'Language : Ale-izba';
        $this->userVendorView("userVendor/language/list", $this->global, $data , NULL);
        
    }

    // Add New 
    public function addnew()
    {
    
        $this->isUserLoggedIn();
        $data = array();

        
        

        $this->global['pageTitle'] = 'Add New Language : Ale-izba';
        $this->userVendorView("userVendor/language/addnew", $this->global, $data , NULL);
        
    } 

    // Insert Member *************************************************************
    public function insertnow()
    {
        $this->isUserLoggedIn();
		
		
		
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
            $returnData = $this->language_model->findDynamic($where);
            if(!empty($returnData)){
               $this->session->set_flashdata('error', $form_data['name'].' already Exist.');
            }else{

                $insertData['name'] = $form_data['name'];
                $insertData['sample'] = $form_data['sample'];
                $insertData['status'] = $form_data['status'];
    			
                 
    			$result = $this->language_model->save($insertData);
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Language successfully Added');
                }
                else
                { 
                    $this->session->set_flashdata('error', 'Language Addition failed');
                }
            }// check already    
            redirect('userVendor/language/addnew');
          }  
        
    }


    // Member list
    public function ajax_list()
    {
        
		$list = $this->language_model->get_datatables();
		
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
            $row[] = $currentObj->name;
            $row[] = $currentObj->sample;
            $row[] = $btn;
            $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'userVendor/language/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn" href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                        "recordsTotal" => $this->language_model->count_all(),
                        "recordsFiltered" => $this->language_model->count_filtered(),
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
            redirect('userVendor/language');
        }

        $insertData['id'] = $_POST['id'];
        $insertData['status'] = $_POST['status'];
        $result = $this->language_model->save($insertData);
        exit;
    } 

    // Edit
 
    public function edit($id = NULL)
    {
        

        $this->isUserLoggedIn();
        if($id == null)
        {
            redirect('userVendor/language');
        }
        
        

        $data['edit_data'] = $this->language_model->find($id);
        $this->global['pageTitle'] = 'Language ';
        $this->userVendorView("userVendor/language/edit", $this->global, $data , NULL);
        
    } 

    // Delete  *****************************************************************
      function delete()
    {
        
        $this->isUserLoggedIn();
        $delId = $this->input->post('id');  
        
        $result = $this->language_model->delete($delId); 
            
        if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
        else { echo(json_encode(array('status'=>FALSE))); }
    }

    // Update category*************************************************************
    public function update()
    {
		
        $this->isUserLoggedIn();
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('name','Language','trim|required');
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
            $insertData['sample'] = $form_data['sample'];
            $insertData['status'] = $form_data['status'];

            $result = $this->language_model->save($insertData);
			

            if($result > 0)
            {
                $this->session->set_flashdata('success', ' Language successfully Updated');
            }
            else
            { 
                $this->session->set_flashdata('error', 'Language Updation failed');
            }
            redirect('userVendor/language/edit/'.$insertData['id']);
          }  
        
    }

    
    
    
}

?>
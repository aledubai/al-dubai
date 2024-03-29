<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Property_type extends BaseController
{
   
    public function __construct()
    {
            parent::__construct();
            $this->load->model('admin/ae_rel_property_type_model');
    }

    
    public function index()
    {
        $this->isVendorLoggedIn();

        $data = array();
        $this->global['pageTitle'] = 'Type : Ale-izba';
        $this->vendorView("vendor/property_type/list", $this->global, $data , NULL);
        
    }

    // Add New 
    public function addnew()
    {
    
        $this->isVendorLoggedIn();
        $data = array();

        
        

        $this->global['pageTitle'] = 'Add New Type : Ale-izba';
        $this->vendorView("vendor/property_type/addnew", $this->global, $data , NULL);
        
    } 

    // Insert Member *************************************************************
    public function insertnow()
    {
        $this->isVendorLoggedIn();
		
		
		
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
            $where['slug'] = $form_data['slug'];
            $returnData = $this->ae_rel_property_type_model->findDynamic($where);
            if(!empty($returnData)){
               $this->session->set_flashdata('error', $form_data['slug'].' already Exist.');
            }else{

                $insertData['name'] = $form_data['name'];
                $insertData['slug'] = $form_data['slug'];
                $insertData['status'] = $form_data['status'];
               
                 
    			$result = $this->ae_rel_property_type_model->save($insertData);
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Type successfully Added');
                }
                else
                { 
                    $this->session->set_flashdata('error', 'Type Addition failed');
                }
            }// check already    
            redirect('vendor/property_type/addnew');
          }  
        
    }


    // Member list
    public function ajax_list()
    {
        
		$list = $this->ae_rel_property_type_model->get_datatables();
		
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
            $row[] = $currentObj->slug;
            $row[] = $btn;
            $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'vendor/property_type/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn hidden " href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                        "recordsTotal" => $this->ae_rel_property_type_model->count_all(),
                        "recordsFiltered" => $this->ae_rel_property_type_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


    // Status Change
 
    public function statusChange($id = NULL)
    {
        $this->isVendorLoggedIn();
        if($_POST['id'] == null)
        {
            redirect('vendor/property_type');
        }

        $insertData['id'] = $_POST['id'];
        $insertData['status'] = $_POST['status'];
        $result = $this->ae_rel_property_type_model->save($insertData);
        exit;
    } 

    // Edit
 
    public function edit($id = NULL)
    {
        

        $this->isVendorLoggedIn();
        if($id == null)
        {
            redirect('vendor/property_type');
        }
        
        

        $data['edit_data'] = $this->ae_rel_property_type_model->find($id);
        $this->global['pageTitle'] = 'Type ';
        $this->vendorView("vendor/property_type/edit", $this->global, $data , NULL);
        
    } 

    // Delete  *****************************************************************
      function delete()
    {
        
        $this->isVendorLoggedIn();
        $delId = $this->input->post('id');  
        
        $result = $this->ae_rel_property_type_model->delete($delId); 
            
        if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
        else { echo(json_encode(array('status'=>FALSE))); }
    }

    // Update category*************************************************************
    public function update()
    {
		
        $this->isVendorLoggedIn();
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('name','Type','trim|required');
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
            $insertData['slug'] = $form_data['slug'];
            $insertData['status'] = $form_data['status'];
             
            $result = $this->ae_rel_property_type_model->save($insertData);
			

            if($result > 0)
            {
                $this->session->set_flashdata('success', ' Type successfully Updated');
            }
            else
            { 
                $this->session->set_flashdata('error', 'Type Updation failed');
            }
            redirect('vendor/property_type/edit/'.$insertData['id']);
          }  
        
    }

    
    
    
}

?>
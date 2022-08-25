<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Query_result extends BaseController
{
   
    public function __construct()
    {
        parent::__construct();
       $this->load->model('admin/query_result_model');
    }

    
    public function index()
    {
        $this->isVendorLoggedIn();

        $data = array();
        $this->global['pageTitle'] = 'Query : Ale-izba';
        $this->vendorView("vendor/query-result/list", $this->global, $data , NULL);
        
    }

    // Add New 
    public function addnew()
    {
    
        $this->isVendorLoggedIn();
        $data = array();

        $where  = array();
        $where['table']  = 'rc_rel_country';
        $where['status']  = '1';
        $where['field']  = 'id,name, code';
        $data['countryList'] = $this->query_result_model->findDynamic($where);
        

        $this->global['pageTitle'] = 'Add New State : Ale-izba';
        $this->vendorView("vendor/query-result//addnew", $this->global, $data , NULL);
        
    } 

    // Insert Member *************************************************************
    public function insertnow()
    {
        $this->isVendorLoggedIn();
		
		
		
		$this->load->library('form_validation');            
        $this->form_validation->set_rules('name','name','trim|required');
        $this->form_validation->set_rules('slug','Slug','trim|required');
         
        
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
            $returnData = $this->query_result_model->findDynamic($where);

            
            if(!empty($returnData)){
               $this->session->set_flashdata('error',  'Slug already Exist.');
            }else{

                $insertData['name'] = $form_data['name'];
                $insertData['slug'] = $form_data['slug'];
                $insertData['meta_title'] = $form_data['meta_title'];
                $insertData['meta_description'] = $form_data['meta_description'];
                $insertData['status'] = $form_data['status'];
    			
                 
    			$result = $this->query_result_model->save($insertData);
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Query Result successfully Added');
                }
                else
                { 
                    $this->session->set_flashdata('error', 'Query Result  Addition failed');
                }
            }// check already    
            redirect('vendor/query_result/addnew');
          }  
        
    }


    // Member list
    public function ajax_list()
    {
        
		$list = $this->query_result_model->get_datatables();
		
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
            $row[] = '<a target="_blank" href="'.base_url().'propertylist/query/'.$currentObj->slug.'">'.$currentObj->slug.'</a>';
            $row[] = $currentObj->meta_title;
            $row[] = $currentObj->meta_description;
            $row[] = $btn;
            $row[] = '<a class="btn btn-sm btn-info" href="'.base_url().'vendor/query_result/edit/'.$currentObj->id.'" title="Edit" ><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-sm btn-danger deletebtn hidden"  href="#" data-userid="'.$currentObj->id.'"><i class="fa fa-trash"></i></a>';
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                        "recordsTotal" => $this->query_result_model->count_all(),
                        "recordsFiltered" => $this->query_result_model->count_filtered(),
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
            redirect('vendor/query_result');
        }

        $insertData['id']       = $_POST['id'];
        $insertData['status']   = $_POST['status'];
        echo $result = $this->query_result_model->save($insertData);
        exit;
    } 

    // Edit
 
    public function edit($id = NULL)
    {
        

        $this->isVendorLoggedIn();
        if($id == null)
        {
            redirect('vendor/query_result');
        }
        $where  = array();
        $where['table']  = 'rc_rel_country';
        $where['field']  = 'id,name, code';
        $data['countryList'] = $this->query_result_model->findDynamic($where);
        

        $data['edit_data'] = $this->query_result_model->find($id);
        $this->global['pageTitle'] = 'Query Result ';
        $this->vendorView("vendor/query-result//edit", $this->global, $data , NULL);
        
    } 

    // Delete  *****************************************************************
      function delete()
    {
        
        $this->isVendorLoggedIn();
        $delId = $this->input->post('id');  
        
        $result = $this->query_result_model->delete($delId); 
            
        if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
        else { echo(json_encode(array('status'=>FALSE))); }
    }

    // Update category*************************************************************
    public function update()
    {
		
        $this->isVendorLoggedIn();
        $this->load->library('form_validation');            
        $this->form_validation->set_rules('name','Name','trim|required');
        $this->form_validation->set_rules('slug','Slug','trim|required');
        
        //form data 
        $form_data  = $this->input->post();
        if($this->form_validation->run() == FALSE)
        {
			
                $this->edit($form_data['id']);
        }
        else
        {



            $where  = array();
             
            $where['slug']  = $form_data['slug'];
            $where['id !=']  = $form_data['id'];
            $where['field']  = 'id,name';
            $communityexist = $this->query_result_model->findDynamic($where);
             if(!empty($communityexist))
            {
                 $this->session->set_flashdata('error', 'Query Result  Slug Already Exist !');

               
            }else
            {
                $insertData['id'] = $form_data['id'];
                $insertData['name'] = $form_data['name'];
                $insertData['slug'] = $form_data['slug'];
                $insertData['meta_title'] = $form_data['meta_title'];
                $insertData['meta_description'] = $form_data['meta_description'];
                $insertData['status'] = $form_data['status'];
                

                $result = $this->query_result_model->save($insertData);
                

                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Query Result  successfully Updated');
                }
                else
                { 
                    $this->session->set_flashdata('error', 'Query Result  Updation failed');
                }
            }

            
            redirect('vendor/query_result/edit/'.$form_data['id']);
          }  
        
    }

    public function check_slug()
    { 
        $this->isVendorLoggedIn();
         $form_data  = $this->input->post();

         if(isset($form_data['slug_url']))
         {
                $where = array();
                $where['status'] = '1';
                $slug_url = strtolower($form_data['slug_url']);;
                $where['field'] = 'id';
                $and_condition ='';
                if(isset($form_data['id']) && $form_data['id'] !=='')
                {
                    $and_condition = " AND id !='".$form_data['id']."'";
                }else
                {
                    $and_condition = " ";
                }
                $wheres  = "  status = '1' AND  slug= '$slug_url' $and_condition";
            $result = $this->query_result_model->sqls_query($wheres);


            if(count($result) > 0)
            {
                echo 'slug_exist';
            }else
            {
                 echo 'slug_available';
            }
         }


    }


    
    
    
}

?>
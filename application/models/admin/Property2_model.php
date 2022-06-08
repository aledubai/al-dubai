<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Property2_model extends Base_model
{

    public $table = "property";

    //set column field database for datatable orderable
    //var $column_order = array(null, 'img', 'name', 'price','area_size','rooms','address', 'date_at', 'status'); 

        var $column_order = array(null, null, 'external_reference', 'purpose', 'type', 'beds','location', 'area', 'rent', 'assign_to', null, 'date_at', 'status', null,null,null,null); 

    //set column field database for datatable searchable 
        var $column_search = array('external_reference', 'purpose', 'type', 'beds','location', 'area', 'rent', 'assign_to','date_at', 'status');  

    var $order = array('id' => 'DESC'); // default order



        



        function __construct() {



            parent::__construct();



        }







     function delete($id) {



        $this->db->where('id', $id);



        $this->db->delete($this->table);        



        return $this->db->affected_rows();



    }







    public function find($id) {
            $query = $this->db->select('*')
                    ->from($this->table)
                    ->where('id', $id)
                    ->get();

            if ($query->num_rows() > 0) {
                $result = $query->result();
                return $result[0];
            } else {
                return array();
            }
        }

       // Get  List

        function get_datatables($user_id)
        {

            $this->_get_datatables_query($user_id);

            if(isset($_POST['length']) && $_POST['length'] != -1)

            $this->db->limit($_POST['length'], $_POST['start']);

            $query = $this->db->get();

            return $query->result();

        }

        // Get Database 

         public function _get_datatables_query($user_id)
        {     

            $this->db->from($this->table);
             if($this->session->userdata('user_role') =="Admin")
            {

            }else
            {
                $this->db->where($this->table.'.user_id',$user_id);  
            }
            $i = 0;     

            foreach ($this->column_search as $item) // loop column 

            {

                if(isset($_POST['search']['value']) && $_POST['search']['value']) // if datatable send POST for search

                {

                    if($i===0) // first loop

                    {

                        $this->db->like($item, $_POST['search']['value']);

                    }

                    else

                    {

                        $this->db->or_like($item, $_POST['search']['value']);

                    }

                }

                $i++;

            }

             

            if(isset($_POST['order'])) // here order processing
            {

                $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);

            } 

            else if(isset($this->order))

            {

                $order = $this->order;

                $this->db->order_by(key($order), $order[key($order)]);

            }

        }



        // Count  Filtered

        function count_filtered($user_id)
        {

            $this->_get_datatables_query($user_id);

            $query = $this->db->get();

            return $query->num_rows();

        }

        // Count all

        public function count_all($user_id)
        {

            $this->db->from($this->table);
            if($this->session->userdata('user_role') =="Admin")
            {

            }else
            {
                $this->db->where($this->table.'.user_id',$user_id);  
            }
              
             
             
            return $this->db->count_all_results();

        }
        // Get Property List Only all
         
        public function get_property_list()
        {
           $query = $this->db->select('*')
                    ->from($this->table)
                    ->get();

            if ($query->num_rows() > 0) {
                $result = $query->result();
                return $result;
            } else {
                return array();
            }

        }

         public function  sqls_query($where='')
        {
            $this->db->select('id');

            $this->db->from($this->table);
            if($where !='')
            {
            $this->db->where($where);

            }
            $query = $this->db->get();
            $result = $query->result();
            return $result;

                 
        }
}











  
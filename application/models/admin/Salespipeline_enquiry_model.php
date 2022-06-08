<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Salespipeline_enquiry_model extends Base_model
{

    public $table = "ae_rel_data_import";

    //set column field database for datatable orderable
    var $column_order = array(null, 'name', 'email', 'address', 'status', 'date');

    //set column field database for datatable searchable 
    var $column_search = array('name'); 

    var $order = array('id' => 'asc'); // default order



        



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

        function get_datatables()
        {

            $this->_get_datatables_query();

            if(isset($_POST['length']) && $_POST['length'] != -1)

            $this->db->limit($_POST['length'], $_POST['start']);

            $query = $this->db->get();

            return $query->result();

        }



        // Get Client List



            function get_client_datatables($id)
        {

            $this->db->select('ae_rel_data_import.*');
            
            $this->db->where('ae_rel_data_import.communicate_id', $id);
            $this->db->where('ae_rel_data_import.is_communicate', 'Yes');

            $this->_get_client_datatables_query();

            if(isset($_POST['length']) && $_POST['length'] != -1)

            $this->db->limit($_POST['length'], $_POST['start']);

            $query = $this->db->get();

            return $query->result();

        }


        // Client Database

        public function _get_client_datatables_query()
        {     

            $this->db->from($this->table);

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


        // Count Client Database 



        function count_client_filtered()
        {

            $this->_get_datatables_query();

            $query = $this->db->get();

            return $query->num_rows();

        }

        // Count all

        public function count_client_all()
        {

            $this->db->from($this->table);

            $this->db->order_by("id", "desc");

            return $this->db->count_all_results();

        }









        // Get Database 

         public function _get_datatables_query()
        {     

            $this->db->from($this->table);
            $this->db->where('ae_rel_data_import.is_communicate','No');

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

        function count_filtered()
        {

            $this->_get_datatables_query();

            $query = $this->db->get();

            return $query->num_rows();

        }

        // Count all

        public function count_all()
        {

            $this->db->from($this->table);

            return $this->db->count_all_results();

        }

        //get_contact_list
        public function get_contact_list()
        {

             $query = $this->db->select('id,FirstName,Role,ContactAssignTo,ContactSource')
                    ->from($this->table)
                    ->get();
            

            if ($query->num_rows() > 0) {
                $result = $query->result();
                return $result;
            } else {
                return array();
            }
        }
        //get_contact_list
        public function get_contact_detail($id)
        {

             $query = $this->db->select('*')
                    ->from($this->table)
                    ->where('id', $id)
                    ->get();
            

            if ($query->num_rows() > 0) {
                $result = $query->result();
                return $result;
            } else {
                return array();
            }
        }



}











  
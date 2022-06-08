<?php if(!defined('BASEPATH')) exit('No direct script access allowed');







class Contact_agent_model extends Base_model

{

    public $table = "agent_contact";

  var $column_order = array(null, 'date_at','contact_name','contact_email','contact_mobile','stage','owner','labels'); //set column field database for datatable orderable

    var $column_search = array('date_at','contact_name','contact_email','contact_mobile','stage','owner','labels'); //set column field database for datatable searchable 

    var $order = array('id' => 'asc'); // default order



    /*var $column_order = array(null, 'ag.contact_name','ag.contact_email','ag.contact_mobile','ag.contact_message','pr.EnTitle','pr.id','typelist.name','pr.location','purposelist.name','pr.plot_area','pr.beds','pr.rent','agentlist.name','ag.lead','ag.date_at','propertylandlord.FirstName','propertylandlord.LastName'); //set column field database for datatable orderable

    var $column_search = array('ag.contact_name','ag.contact_email','ag.contact_mobile','ag.contact_message','pr.EnTitle','pr.id','typelist.name','pr.location','purposelist.name','pr.plot_area','pr.beds','pr.rent','agentlist.name','ag.lead','ag.date_at','propertylandlord.FirstName','propertylandlord.LastName'); //set column field database for datatable searchable 

    var $order = array('id' => 'desc'); // default order*/



        



        function __construct() {



            parent::__construct();



        }







     function delete($id) {



        $this->db->where('id', $id);



        $this->db->delete($this->table);        



        return $this->db->affected_rows();



    }



public function  staff_query($where='')
    {
        
        $this->db->select('*');

        $this->db->from($this->table);
        if($where !='')
        {
        $this->db->where($where);

        }
        $query = $this->db->get();
        $result = $query->result();
          return $result;             
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



function get_datatables()

        {


             
             $sql = ' SELECT '.$this->table.'.* FROM '.$this->table  ;
             $isVendorLoggedIn  = $this->session->userdata('isVendorLoggedIn');
            if($isVendorLoggedIn )
            {

                $vendorType   = $this->session->userdata('type');
                 if($vendorType=='1' )
                 {
                     $sql .=  '';
                 }else
                 {
                        $userId  = $this->session->userdata('userId');
                         
                         $sql .=  " WHERE user_id ='". $userId."'   ";
                 }
            {

            }

            } else
            {
                $userId  = $this->session->userdata('agentId');
                 $sql .=  " WHERE assign_to ='". $userId."'   ";
                 
            }


            $sql = $this->_get_datatables_query($sql); 

            if(isset($_POST['length']) && $_POST['length'] != -1)
            $sql .= " LIMIT ".$_POST['start'].", ".$_POST['length'];

 
             

            $query = $this->db->query($sql);
            //echo $this->db->last_query();exit;
            
            return $query->result();

        }

        // Get Database 

         public function _get_datatables_query($sql)

        {     
 

            $i = 0;     

            foreach ($this->column_search as $item) // loop column 

            {

                if(isset($_POST['search']['value']) && $_POST['search']['value']) // if datatable send POST for search

                {

                    if($i===0) // first loop

                    {

                         
                        $whereis = " (`".$item."` LIKE '%".$_POST['search']['value']."%' ESCAPE '!' ";

                    }

                    else

                    {

                         
                         $whereis .= " OR `".$item."` LIKE '%".$_POST['search']['value']."%' ESCAPE '!' ";

                    }

                }

                $i++;

            }

             if(isset($whereis)){

                $sql .=  (strpos($sql, 'WHERE') !== false)?" AND". $whereis.")":" WHERE". $whereis.") ";
            }else{
                //$sql .= "  GROUP BY pk.id"; 
            }

             

            if(isset($_POST['order'])) // here order processing
            {   

                $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
                $sql .= " ORDER BY ".$this->column_order[$_POST['order']['0']['column']]." ".$_POST['order']['0']['dir'];
            } 
            else if(isset($this->order))
            {
                $order = $this->order;
                $sql .= " ORDER BY ".$this->table.".".key($order)." ".$order[key($order)];
            }
            return $sql;


/*
            if(isset($_POST['order'])) // here order processing

            {

                $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);

            } 

            else if(isset($this->order))

            {

                $order = $this->order;

                $this->db->order_by(key($order), $order[key($order)]);

            }*/

        }


        // Get Video List

        /*function get_datatables()

        {
            $this->db->select('ag.*,pr.EnTitle as property_name,pr.id as property_id,pr.purpose as property_purpose,purposelist.name as purpose_name, pr.type as property_type,typelist.name as type_name,pr.location as property_location,pr.plot_area as property_area,pr.beds as property_beds,pr.rent as property_rent,pr.assign_to as property_agent,agentlist.name as agent_name,propertylandlord.FirstName as lanlordname,propertylandlord.LastName as lastlandname');



            $isVendorLoggedIn  = $this->session->userdata('isVendorLoggedIn');
            if($isVendorLoggedIn )
            {

                $vendorType   = $this->session->userdata('type');
                 if($vendorType=='1' )
                 {

                 }else
                 {
                        $userId  = $this->session->userdata('userId');
                        $this->db->where('ag.user_id', $userId);
                 }
            {

            }

            } else
            {
                $userId  = $this->session->userdata('agentId');
                $this->db->where('ag.assign_to', $userId);
            }
         

            $this->_get_datatables_query();

            if(isset($_POST['length']) && $_POST['length'] != -1)

            $this->db->limit($_POST['length'], $_POST['start']);

            $query = $this->db->get();
 
              
             
            return $query->result();

        }

        // Get Database 

         public function _get_datatables_query()

        {     

            $this->db->from($this->table.' as ag');

            $this->db->join('property as pr', 'pr.id = ag.property_id','left');

            $this->db->join('ae_rel_purpose_list as purposelist ', 'purposelist.id = pr.purpose','left');

            $this->db->join('ae_rel_propery_type as typelist ', 'typelist.id = pr.type','left');

            $this->db->join('ae_rel_list_assign_to as agentlist ', 'agentlist.id = pr.assign_to','left');


            $this->db->join('property_landlord as propertylandlord ', 'propertylandlord.id = ag.landlord_id','left');
             


            
         

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

                $this->db->order_by("ag.".key($order), $order[key($order)]);

            }
             
 

        }*/



        // Count  Filtered

        function count_filtered()

        {

            $sql = ' SELECT  COUNT(*) as total FROM '.$this->table  ;
             $isVendorLoggedIn  = $this->session->userdata('isVendorLoggedIn');
            if($isVendorLoggedIn )
            {

                $vendorType   = $this->session->userdata('type');
                 if($vendorType=='1' )
                 {
                     $sql .=  '';
                 }else
                 {
                        $userId  = $this->session->userdata('userId');
                         
                         $sql .=  " WHERE user_id ='". $userId."'   ";
                 }
            {

            }

            } else
            {
                $userId  = $this->session->userdata('agentId');
                 $sql .=  " WHERE assign_to ='". $userId."'   ";
                 
            }

             $sql  = $this->_get_datatables_query($sql );

            $query = $this->db->query($sql);
            $returnData  = $query->result();

           return  (isset($returnData[0]))?$returnData[0]->total:0;

        }

        // Count all

        public function count_all()

        {

            $sql = ' SELECT  COUNT(*) as total  FROM '.$this->table  ;
             $isVendorLoggedIn  = $this->session->userdata('isVendorLoggedIn');
            if($isVendorLoggedIn )
            {

                $vendorType   = $this->session->userdata('type');
                 if($vendorType=='1' )
                 {
                     $sql .=  '';
                 }else
                 {
                        $userId  = $this->session->userdata('userId');
                         
                         $sql .=  " WHERE user_id ='". $userId."'   ";
                 }
            {

            }

            } else
            {
                $userId  = $this->session->userdata('agentId');
                 $sql .=  " WHERE assign_to ='". $userId."'   ";
                 
            }

            $sql  = $this->_get_datatables_query($sql );

            $query = $this->db->query($sql);
            $returnData  = $query->result();

           return  (isset($returnData[0]))?$returnData[0]->total:0;

        }

        



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




        public function get_leads_details()
        {

         $query = $this->db->select('agent_contact.*, t2.name')
                ->from($this->table)
                ->join('ae_rel_role_list as t2', 'agent_contact.role = t2.id', 'LEFT')
                ->get();


        if ($query->num_rows() > 0) {
                $result = $query->result();
                return $result;
            } else {
                return array();
            }


        }



 






}











  
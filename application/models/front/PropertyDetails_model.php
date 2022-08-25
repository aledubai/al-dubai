<?php if(!defined('BASEPATH')) exit('No direct script access allowed');







class PropertyDetails_model extends Base_model

{

    public $table = "property";

    var $column_order = array(null, 'service_name','service_price','service_at','service_status'); //set column field database for datatable orderable

    var $column_search = array('service_name','service_price','service_at','service_status'); //set column field database for datatable searchable 

    var $order = array('id' => 'asc'); // default order



        



        function __construct() {



            parent::__construct();



        }



        // Ajax Scroll


    


        // Ajax Scroll End







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

        public function get_landlord($id)
        {
            $query = $this->db->select("id,Salutation, FirstName,  LastName, CONCAT(FirstName , ' ' ,LastName) AS FullName  , Email ,Mobile  ")
            ->from('property_landlord')
            ->where('property_id', $id)
            ->get();

            if ($query->num_rows() > 0) {
                $result = $query->result();
                return $result[0];
            } else {
                return array();
            }
        }


        public function get_related_property($type,$property_id)
        {
            
             
                $this->db->select('property.id,property.rent,property.slug_url, property.EnTitle,property.beds,property.baths,property.area,property.landlord,property.type,property.purpose,property.area,property.views,property.year_built,property_img_doc_plan.image,company.image as comp_profile,company.slug_url as comp_url,company.user_id as comp_userid,company.phone_numbr as comp_phone,company.mobile_number as comp_mobile,company.ProfileEmail as comp_email,company.ProfileName as comp_name,landlord.id as landlord_id,property.parking as park');
                $this->db->from($this->table)
            ->join('property_img_doc_plan', 'property_img_doc_plan.property_id = property.id', 'left')
            ->join('setting_profile as company', 'company.user_id = property.user_id', 'left')
            ->join('property_landlord as landlord', 'landlord.property_id = property.id', 'left')
            ->where_in('property_img_doc_plan.action', 'Images'); 
             $this->db->where("property.type=", $type);
             $this->db->where("property.id != ", $property_id);

            $this->db->limit(4,0);


        $query = $this->db->get();
        $result = $query->result();        

        return $result;
        }




        public function get_latest_property()
        {
            
             
                $this->db->select('property.id,property.rent,property.slug_url, property.EnTitle,property.beds,property.baths,property.area,property.landlord,property.type,property.purpose,property.area,property.views,property.year_built,property_img_doc_plan.image,company.image as comp_profile,company.slug_url as comp_url,company.user_id as comp_userid,company.phone_numbr as comp_phone,company.mobile_number as comp_mobile,company.ProfileEmail as comp_email,company.ProfileName as comp_name,landlord.id as landlord_id,property.parking as park');
                $this->db->from($this->table)
            ->join('property_img_doc_plan', 'property_img_doc_plan.property_id = property.id', 'left')
            ->join('setting_profile as company', 'company.user_id = property.user_id', 'left')
            ->join('property_landlord as landlord', 'landlord.property_id = property.id', 'left')
            ->where_in('property_img_doc_plan.action', 'Images')
			->where('property.status', '1'); 
            

            $this->db->order_by("property.id", "desc");

            $this->db->limit(4,0);
  
        $query = $this->db->get();

        $result = $query->result();        


        return $result;
        }

        public function get_company_property($user_id)
        {
            
             
                $this->db->select('property.id,property.rent,property.slug_url, property.EnTitle,property.beds,property.baths,property.area,property.landlord,property.type,property.purpose,property.area,property.views,property.year_built,property_img_doc_plan.image,company.image as comp_profile,company.slug_url as comp_url,company.user_id as comp_userid,company.phone_numbr as comp_phone,company.mobile_number as comp_mobile,company.ProfileEmail as comp_email,company.ProfileName as comp_name,landlord.id as landlord_id,property.parking as park');
                $this->db->from($this->table)
            ->join('property_img_doc_plan', 'property_img_doc_plan.property_id = property.id', 'left')
            ->join('setting_profile as company', 'company.user_id = property.user_id', 'left')
            ->join('property_landlord as landlord', 'landlord.property_id = property.id', 'left')
            ->where_in('property_img_doc_plan.action', 'Images')
            ->where('property.user_id', $user_id); 

            

            $this->db->order_by("property.id", "desc");

             
  
        $query = $this->db->get();

        $result = $query->result();        


        return $result;
        }



        



        // Get Video List

        function get_datatables()

        {

            $this->_get_datatables_query();

            if(isset($_POST['length']) && $_POST['length'] != -1)

            $this->db->limit($_POST['length'], $_POST['start']);

            $query = $this->db->get();

            return $query->result();

        }

        // Get Database 

         public function _get_datatables_query()

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
        public function get_popular_searches()
        {
             $this->db->select('property.location');
                $this->db->from($this->table)
                ->where('property.status', '1')
                    ->group_by("location");


             
  
        $query = $this->db->get();

        $result = $query->result();        


        return $result;
        }
		
		
		 public function get_office_searches()
        {
             $this->db->select('property.location,property.type,property.status');
                $this->db->from($this->table)
                ->where('property.type','10')
                ->where('property.status','1')
                    ->group_by("location,type");
             
  
        $query = $this->db->get();

        $result = $query->result();     

        return $result;

        }



           public function get_apartment_searches()
        {
             $this->db->select('property.location,property.type,property.status');
                $this->db->from($this->table)
                ->where('property.type','2')
                ->where('property.status','1')
                    ->group_by("location,type");
             
  
        $query = $this->db->get();

        $result = $query->result();     

        return $result;

        }



               public function get_villa_searches()
        {
             $this->db->select('property.location,property.type,property.status');
                $this->db->from($this->table)
                ->where('property.type','1')
                ->where('property.status','1')
                    ->group_by("location,type");
             
  
        $query = $this->db->get();

        $result = $query->result();     

        return $result;

        }

        public function get_office_community()
        {
             $this->db->select('p.type, p.community,c.name as communityname ,c.slug as communityslug ');
                $this->db->from($this->table." as p")
                ->join('ae_rel_community_list as c','c.id = p.community','left')//this is the left join in codeigniter
                ->where('p.type','10')->where('p.status','1')
                ->order_by("c.name", "asc")
                    ->group_by("p.community");
             
  
        $query = $this->db->get();

        $result = $query->result();     

        return $result;

        }  

        public function get_apartment_community()
        {
             $this->db->select('p.type, p.community,c.name as communityname ,c.slug as communityslug ');
                $this->db->from($this->table." as p")
                ->join('ae_rel_community_list as c','c.id = p.community','left')//this is the left join in codeigniter
                ->where('p.type','2')->where('p.status','1')
                ->order_by("c.name", "asc")
                    ->group_by("p.community");
             
  
        $query = $this->db->get();

        $result = $query->result();     

        return $result;

        }
		public function get_villa_community()
        {
             $this->db->select('p.type, p.community,c.name as communityname ,c.slug as communityslug ');
                $this->db->from($this->table." as p")
                ->join('ae_rel_community_list as c','c.id = p.community','left')//this is the left join in codeigniter
                ->where('p.type','1')->where('p.status','1')
                ->order_by("c.name", "asc")
                    ->group_by("p.community");
             
  
        $query = $this->db->get();

        $result = $query->result();     

        return $result;

        }
        
		



}











  
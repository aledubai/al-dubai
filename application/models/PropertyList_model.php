<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class PropertyList_model extends Base_model

{

    public $table = "property";

    var $column_order = array(null, 'email_to','email_subject','email_message','email_at','email_status'); //set column field database for datatable orderable

    var $column_search = array('email_to','email_subject','email_message','email_at','email_status'); //set column field database for datatable searchable 

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

      
      

        // Pagination

        public function get_count($propertyListData) 
        {


                $price=$propertyListData['price'];
                $city=$propertyListData['city'];
                $minPrice=$propertyListData['minPrice'];
                $maxPrice=$propertyListData['maxPrice'];
                $bed=$propertyListData['bed'];
                $bath=$propertyListData['bath'];

                $this->db->select('count(property.id) AS countAll')
                ->from($this->table)
                ->join('property_img_doc_plan', 'property_img_doc_plan.property_id = property.id', 'left')
                ->where_in('property_img_doc_plan.action', 'Images');

                if(isset($city) && $city !== null)
                {

                    $this->db->where("(property.EnTitle LIKE '%$city%'");
                     $this->db->or_where("property.location LIKE '%$city%')");

                }


                if( $minPrice !== null && $maxPrice)
                {

                    $this->db->where('property.rent >=', $minPrice);

                    $this->db->where('property.rent <=', $maxPrice);

                }


                if($bed !== null)
                {
                    $bedData = explode('_', $bed);

                if($bedData[1])
                {
                    $this->db->where('property.beds >=', $bedData[0]);
                }
                else if($bedData[0])
                {
                    $this->db->where('property.beds =', $bedData[0]);
                }
                }


                if($bath!== null)
                {

                    $bathData= explode('_', $bath);

                if ($bathData[1]) {

                    $this->db->where('property.baths>=', $bathData[0]);

                } 
                else if($bedData[0]) 
                {
                    $this->db->where('property.baths=', $bathData[0]);
                }                                

                }
        
                    return $this->db->count_all("property");

                }

        // search function
        public function search($arr,$action = Null){
            $propertyListData = $arr;

            //Search Starts
            $price=$propertyListData['price'];
            $city=$propertyListData['city'];
            $minPrice=$propertyListData['minPrice'];
            $maxPrice=$propertyListData['maxPrice'];
            $bed=$propertyListData['bed'];
            $bath=$propertyListData['bath'];
            $type=$propertyListData['type'];
            $community=$propertyListData['community'];
            //Search Ends
            //Commercial Search Starts
            $cityCom=$propertyListData['cityCom'];
            $minPriceCom=$propertyListData['minPriceCom'];
            $maxPriceCom=$propertyListData['maxPriceCom'];
            $landCom=$propertyListData['landCom'];
            //Commercial Search Ends
            //Residential Filter Modal Starts
            $cityResFilter=$propertyListData['cityResFilter'];
            $propertyResFilter=$propertyListData['propertyResFilter'];
            $transactionResFilter=$propertyListData['transactionResFilter'];
            $minPriceResFilter=$propertyListData['minPriceResFilter'];
            $maxPriceResFilter=$propertyListData['maxPriceResFilter'];
            $bedsResFilter=$propertyListData['bedsResFilter'];
            $bathsResFilter=$propertyListData['bathsResFilter'];
            $landResFilter=$propertyListData['landResFilter'];
            $keywordsResFilter=$propertyListData['keywordsResFilter'];
            $yearBuiltResFilter=$propertyListData['yearBuiltResFilter'];
            //Residential Filter Modal Ends

            //Commercial Filter Modal Starts
            $cityComFilter=$propertyListData['cityComFilter'];
            $propertyComFilter=$propertyListData['propertyComFilter'];
            $transactionComFilter=$propertyListData['transactionComFilter'];
            $minPriceComFilter=$propertyListData['minPriceComFilter'];
            $maxPriceComFilter=$propertyListData['maxPriceComFilter'];
            $landSizeComFilter=$propertyListData['landSizeComFilter'];
            $yearBuiltComFilter=$propertyListData['yearBuiltComFilter'];
            $keywordsComFilter=$propertyListData['keywordsComFilter'];
            //Commercial Filter Modal Ends


            //Search Starts
            if($action == 'getList'){
                $this->db->select('property.id,property.EnTitle,property.slug_url,property.location,property.rent,property.beds,property.baths,property.area,property.landlord,property.type,property.purpose,property.area,property.views,property.year_built,property_img_doc_plan.image,company.image as comp_profile,company.slug_url as comp_url,company.user_id as comp_userid,company.phone_numbr as comp_phone,company.mobile_number as comp_mobile,company.ProfileEmail as comp_email,company.ProfileName as comp_name,landlord.id as landlord_id');
            }
            $this->db->from($this->table)
            ->join('property_img_doc_plan', 'property_img_doc_plan.property_id = property.id', 'left')
            ->join('setting_profile as company', 'company.user_id = property.user_id', 'left')
            ->join('property_landlord as landlord', 'landlord.property_id = property.id', 'left')
            ->where_in('property_img_doc_plan.action', 'Images');

           $this->db->where('property.status ', 1);

            if(isset($city) && $city !== null)
            {
                    $this->db->where("(property.EnTitle LIKE '%$city%'");
                    $this->db->or_where("property.location LIKE '%$city%')");

            }

            // print_r($city);
        
            if( $minPrice !== null && $maxPrice)
            {   
                $this->db->where('property.rent >=', $minPrice);
                $this->db->where('property.rent <=', $maxPrice);
            }

            if($bed !== null)
            {
                $bedData = explode('_', $bed);

              if($bedData[1])
               {
                $this->db->where('property.beds >=', $bedData[0]);
               }
               else if($bedData[0])
               {
                $this->db->where('property.beds =', $bedData[0]);
               }
            }

 
            if($bath!== null)
            {
                $bathData= explode('_', $bath);
                if ($bathData[1]) {
                        $this->db->where('property.baths>=', $bathData[0]);
                    } 
                    else if($bathData[0]) 
                    {
                        $this->db->where('property.baths=', $bathData[0]);
                    } 


            }

            if($type!== null)
            {
             
                        $this->db->where('property.type=',$type);
                   
            } 
            if($type!== null)
            {
             
                        $this->db->where('property.community=',$community);
                   
            }
            //Search Ends

            //Commercial Search Starts
            if(isset($cityCom) && $cityCom !== null)
            {
                $this->db->where("property.location LIKE '%$cityCom%'");
            }
            if( $minPriceCom !== null && $maxPriceCom)
            {   
                $this->db->where('property.rent >=', $minPriceCom);
                $this->db->where('property.rent <=', $maxPriceCom);
            }

             if($landCom!== null)
            {
                $landComData= explode('_', $landCom);
                if ($landComData[1]) {
                        $this->db->where('property.area>=', $landComData[0]);
                    } 
                    else if($landComData[0]) 
                    {
                        $this->db->where('property.area=', $landComData[0]);
                    } 
            }

           //print_r($this->db->last_query());
            
            //Commercial Search Ends

            //Sorting Starts
            if(isset($price) && $price =='AscPrice')
            {
                $this->db->order_by("property.rent", "asc");

            }
            else if(isset($price) && $price =='DescPrice')
            {
                $this->db->order_by("property.rent", "desc");

            }
            else if(isset($price) && $price =='AscDate')
            {
                $this->db->order_by("property.date_at", "asc");

            }
            else if(isset($price) && $price =='DescDate')
            {
                $this->db->order_by("property.date_at", "desc");
            }
            else{
                 $this->db->order_by("property.id", "desc");
            }
            //Sorting Ends

            //Residential Filter Modal Starts
            if(isset($cityResFilter) && $cityResFilter !== null)
            {
                $this->db->where("property.location LIKE '%$cityResFilter%'");
            }

            if (isset($propertyResFilter) && $propertyResFilter !== null) {
                $this->db->where("property.type=", $propertyResFilter);
            }

            if (isset($transactionResFilter) && $transactionResFilter !== null) {
                $this->db->where("property.purpose=", $transactionResFilter);
            }
            
            if( $minPriceResFilter !== null && $maxPriceResFilter)
            {   
                $this->db->where('property.rent >=', $minPriceResFilter);
                $this->db->where('property.rent <=', $maxPriceResFilter);
            }

            if($bedsResFilter !== null)
            {
                $bedDataFilter = explode('_', $bedsResFilter);

              if($bedDataFilter[1])
               {
                $this->db->where('property.beds >=', $bedDataFilter[0]);
               }
               else if($bedDataFilter[0])
               {
                $this->db->where('property.beds =', $bedDataFilter[0]);
               }
            }

            if($bathsResFilter!== null)
            {
                $bathDataFilter= explode('_', $bathsResFilter);
                if ($bathDataFilter[1]) {
                        $this->db->where('property.baths>=', $bathDataFilter[0]);
                    } 
                    else if($bathDataFilter[0]) 
                    {
                        $this->db->where('property.baths=', $bathDataFilter[0]);
                    } 
            }

            if($landResFilter!== null)
            {
                $landDataFilter= explode('_', $landResFilter);
                if ($landDataFilter[1]) {
                        $this->db->where('property.area>=', $landDataFilter[0]);
                    } 
                    else if($landDataFilter[0]) 
                    {
                        $this->db->where('property.area=', $landDataFilter[0]);
                    } 
            }

            if(isset($keywordsResFilter) && $keywordsResFilter !== null)
            {
                $this->db->where("property.views LIKE '%$keywordsResFilter%'");
            }

             if (isset($yearBuiltResFilter) && $yearBuiltResFilter !==null) {

                $this->db->where("property.year_built=", $yearBuiltResFilter);
            }
            //Residential Filter Modal Ends

            //Commercial Filter Modal Starts
            if (isset($cityComFilter) && $cityComFilter !== null) {
                $this->db->where("property.location LIKE '%$cityComFilter%'");
            }

            if (isset($propertyComFilter) && $propertyComFilter !== null) {
                $this->db->where("property.type=", $propertyComFilter);
            }

            if (isset($transactionComFilter) && $transactionComFilter !== null) {
                $this->db->where("property.purpose", $transactionComFilter);
            }

            if( $minPriceComFilter !== null && $maxPriceComFilter)
            {   
                $this->db->where('property.rent >=', $minPriceComFilter);
                $this->db->where('property.rent <=', $maxPriceComFilter);
            }

            if ($landSizeComFilter!== null) {
                $landSizeDataFilter= explode('_', $landSizeComFilter);
                if ($landSizeDataFilter[1]) {
                    $this->db->where('property.area>=', $landSizeDataFilter[0]);
                }
                else if ($landSizeDataFilter[0]) {
                    $this->db->where('property.area=', $landSizeDataFilter);
                }
            }

            if (isset($yearBuiltComFilter) && $yearBuiltComFilter !==null) {
                $this->db->where('property.year_built=', $yearBuiltComFilter);
            }

            if (isset($keywordsComFilter) && $keywordsComFilter !==null) {
                $this->db->where("property.views LIKE '%$keywordsComFilter%'");


             }
            //Commercial Filter Modal Ends
           //print_r($this->db->last_query());
         }



 

        //Count All rows by search and without search conditions
        public function totalRowCount($arr) 
        {
            $this->search($arr,'totalRowCount');    
            $query = $this->db->get();
            return $query->num_rows();
        }// close getPropertyList


        //pegination limit set
        public function perPageLimitSet($perPage,$currentPageNo,$totalRow) 
        {

            // echo "$perPage,$currentPageNo,$totalRow";

            // print_r($this->db->last_query());

            $rData = array();
            $rData['totalPage'] = intval($totalRow/$perPage);

            //New
            $rData['limitStart'] = ($currentPageNo == 1)?0:($currentPageNo*$perPage)-$perPage;

            //$rData['limitEnd']  = $perPage;
            // $rData['limitEnd']  = ($currentPageNo == 1)?$perPage:($currentPageNo*$perPage);

            //New
            $rData['limitEnd']  = ($totalRow*$perPage)-($totalRow*$perPage);

            $i = 1;

            while($i <= $rData['totalPage'])
            {
                $rData['pageScript'][$i] = $i;
                $i++;
            }
            $rData['perPage'] = $perPage;
            $rData['currentPageNo'] = $currentPageNo;
            return $rData;
        }

        //GetPropertyList  Property list 
        public function getPropertyList(array $propertyListData) 
        {
                

                $totalRow = $this->totalRowCount($propertyListData);
                $this->search($propertyListData,'getList');


                //Pagination



                /*$limitData = $this->perPageLimitSet($propertyListData['perPage'],$propertyListData['currentPageNo'],$totalRow);
                     
                 $this->db->limit($limitData['limitEnd'], $limitData['limitStart']);*/

                 //$this->db->limit($propertyListData['perPage'],$limitData['limitEnd']);

                //Pagination


                $query = $this->db->get();
                 
                $resultData = array();


                // print_r($resultData);
                //print_r($this->db->last_query());

                if ($query->num_rows() > 0) 
                {
                    $resultData['result'] = $query->result();
                    $resultData['number_list'] = $query->num_rows();

                    //Pagination

                    // $resultData['pagination'] = $limitData;

                }

                return $resultData;

               


        }
        // close getPropertyList

        




}











  
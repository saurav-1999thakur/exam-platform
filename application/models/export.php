<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Model
{
    
    function __construct()
    { 
        parent::__construct();
    }


     public function Question() 
     {
        $this->db->select('*');
        $query_que = $this->db->get('tbl_mst_student');
        $result_que = $query_que->result_array(); 
        return $result_que;
    }
}
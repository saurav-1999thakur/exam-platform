<?php
class Homepage_models extends CI_Model{

    function insertData($tablename,$data){
        $this->db->insert($tablename,$data);
    }
 
    function delete_row($tablename, $id){
        return $this->db->delete($tablename, array('id' => $id));
    }

    function get_data_by_id($tablename,$id){
        $query = $this->db->get_where($tablename, array('id' => $id));
        return $query;
    }
 
    function update_data($tablename,$id,$data){
        // pr($data);die;
        $this->db->update($tablename, $data, array('id' => $id));
    }
    
    function get_paper_data($id){
        $query =  $this->db->SELECT('*')->FROM('paper_set')->where ('id',$id)->get()->result_array();
        return $query;
        // echo $this->db->last_query();
        // pr($query);die;
    }
}  
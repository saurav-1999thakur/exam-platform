<?php
class Auth_model extends CI_Model{
     
public function login_by_admin($login_id,$password){ 
    // echo "hello";die;
        $data = array('login_id'=>$login_id,'password'=>md5($password));
            $query = $this->db->select('*')->from('tbl_user_login')->where($data)->get()->row_array();
            
            if(!empty($query)){
                $result = array('status'=>'Success','data'=>$query);
            }else{
                $result = array('status'=>'Failed','data'=>''); 
            }
            return $result;
            
    }

}
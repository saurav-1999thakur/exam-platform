<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChangePassword_controller extends CI_Controller {

    public function __construct(){
        parent::__construct(); 
  
        // $this->load->helper('common_helper');
 
		$this->load->model('Homepage_models');
		$log = $this->session->userdata('login_data'); 
		 
		if (empty($log)) {
			redirect('Auth_controller/login');
		}
    }
    
    public function change_pwd(){
        // pr($this->input->post());die;
        $id = $this->input->post('user_id');
        // pr($id);die;
        $data = $this->input->post('password');
        // pr($id);
        // pr($data);die;
        $query = $this->db->query("UPDATE `tbl_user_login` SET password = md5('".$data."') WHERE login_id='".$id."'");
        // pr($query);die;
     redirect('Home_controller/index');
    }
}
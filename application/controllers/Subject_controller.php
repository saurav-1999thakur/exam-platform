<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_controller extends CI_Controller {

    public function __construct(){
        parent::__construct();

        // $this->load->helper('common_helper');

		$this->load->model('Homepage_models');
		$log = $this->session->userdata('login_data'); 
		
		if (empty($log)) {
			redirect('Auth_controller/login');
		}
    }

    public function subject(){
		$query = $this->db->select('*')->from('tbl_subjects')->get();
		$result = $query->result_array();
		$data['ab'] = $result;

		page_load('subject',$data);
	}

	public function sub_insert(){
		$data =$this->input->post();
		// pr($data);die;
		$tablename='tbl_subjects';
		
		$this->Homepage_models->insertData($tablename,$data);
		// alert("oops");die;
		// header('location:subject');
		echo "success";
	} 

	public function delete_row($user){
		$tablename = 'tbl_subjects';
		$delete = $this->Homepage_models->delete_row($tablename,$user);
		if ($delete==1){
			redirect('/Subject_controller/subject', 'refresh');
		}else{
			redirect('/Subject_controller/subject', 'refresh','failed');
		}
	}
	
	public function get_data($id){
		$id = $this->input->post('dataId');
		// pr($id);die;
		$data['query'] = $this->db->select('*')->from('tbl_subjects')->where('id',$id)->get()->row_array();
		// pr($data);die;
		echo json_encode($data);
	}

	// public function update_subject(){
		
	// }


	//status update
	public function status_update(){

		$id = $this->input->post('row_id');
		$status_id = $this->input->post('status_id');
		$query = $this->db->query("UPDATE `tbl_subjects` SET status='".$status_id."' WHERE id='".$id."'");

		// $this->Homepage_models->update_data($tablename,$id,$status_id,$query);
		header('location:subject');
	}


}
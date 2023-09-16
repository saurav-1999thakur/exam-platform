<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance_controller extends CI_Controller {

    public function __construct(){
        parent::__construct();

        // $this->load->helper('common_helper');

		$this->load->model('Homepage_models');
		$log = $this->session->userdata('login_data');
		
		if (empty($log)) {
			redirect('Auth_controller/login');
		}
    }

	public function attendance_list(){
		$query = $this->db->select("*")->from('tbl_mst_attendance')->get();
		$result = $query->result_array();
		$data['list'] = $result;
		page_load('attendance_list',$data);

	}
 
	public function mark_attendence(){
		// echo date('d-m-Y'); die;
		//sleect query hclani hai
		//check krega ki user id ke behalf mai data hai ya nhi where date = $date
		// agr data hai  $result = array('status'=>'Failed','msg'=>'Already Marked','icon'=>'danger','title'=>'OOPS!');
		// agr data nhi hai to insert hoga
		$date = date('Y-m-d');
		$arr= array('user_id'=>$this->input->post('user_id'),'date'=>$date);
		$query = $this->db->select('*')->from('tbl_mst_attendance')->where($arr)->get()->row_array();
		// echo $this->db->last_query(); die;
		// pr($query); die;
		if(empty($query)){ 
			$data = array('user_id'=>$this->input->post('user_id'),'date'=>$date,'attendance_status'=>$this->input->post('status_id'));
		
			if($this->db->insert('tbl_mst_attendance',$data)){
				$result = array('status'=>'Success','msg'=>'Attendence Mark Succesfully','icon'=>'success','title'=>'Hurray!');
			}else{
				$result = array('status'=>'Failed','msg'=>'Attendence Failed','icon'=>'danger','title'=>'OOPS!');
			}
		}else{
			$result = array('status'=>'Failed','msg'=>'You Have Marked Already','icon'=>'danger','title'=>'OOPS!');
		}
		
		echo json_encode($result);
		

	}




}

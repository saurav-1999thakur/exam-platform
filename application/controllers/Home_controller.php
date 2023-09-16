<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

    public function __construct(){
        parent::__construct();

        // $this->load->helper('common_helper');

		$this->load->model('Homepage_models');
		$log = $this->session->userdata('login_data');
		
		if (empty($log)) {
			redirect('Auth_controller/login');
		}
    }
 
	public function index(){
		// $this->session->set_userdata('jis naam se set krna hai',jisko set krna hai);
		// $this->session->set_userdata(jisko set krna hai);
		// userdata()/all_userdata() //session ka function hai joki values ko set or get krne mai use hota hai user data ye btata hai ki ye user ka data hai jo session mai set horha hai ya phir session se get horha hai
		$data['user_data'] = $this->session->userdata('login_data');
		$id = $this->session->userdata('login_data');
		// pr($id);die;
		$login_id = $id['login_id'];
		$firstDate = date('Y-m-01');
		$lastDate = date('Y-m-t');

		$absent = $this->db->query("SELECT COUNT('attendance_status') as 'absent' FROM `tbl_mst_attendance` WHERE `user_id`= '$login_id' AND attendance_status = 'Absent' AND `created_at` BETWEEN '$firstDate' AND '$lastDate'")->row_array();
		$present = $this->db->query("SELECT COUNT('attendance_status') as 'present' FROM `tbl_mst_attendance` WHERE `user_id`='$login_id' AND attendance_status = 'Present' AND `created_at` BETWEEN '$firstDate' AND '$lastDate'")->row_array();
		// $date = date('Y-m-d');
		$data['present'] = 'P=>'.$present['present'];
		$data['absent'] = 'A=>'.$absent['absent'];
		// pr($data); die;
		// echo $this->db->last_query();
		// pr($present); 
		// pr($absent);
		// die;

		// uper session use kra hai session mai se  user id ko nikal ke ek variable mai store krenge or us variable ko sql ki query mai like operator ke baad rkh denge 

		// uske baad find out  how to get first date of present month in php and esko variable ke andr store krke 1st date ki jgha pur krdensenge and then how to get last date of present month in php and same last date mai put krdenge variable ko

		// date function ke andr parameter pass hote ahi 

		// pr($this->session->userdata('login_data')); die;
		page_load('dashboard',$data);
		// $this->load->view('layout/header');
		// $this->load->view('layout/sidebar');
		// $this->load->view('layout/footer');
		
	}

} 


// SELECT * FROM `tbl_mst_attendance` WHERE `user_id` LIKE 'STU_1104' AND `created_at` BETWEEN '2023-05-01' AND '2023-05-31';

// SELECT COUNT(attendance_status) FROM `tbl_mst_attendance` WHERE `user_id` LIKE 'STU_1104' AND attendance_status = 'Absent' AND `created_at` BETWEEN '2023-05-01' AND '2023-05-31';

// SELECT COUNT(attendance_status) FROM `tbl_mst_attendance` WHERE `user_id` LIKE 'STU_1104' AND attendance_status = 'present' AND `created_at` BETWEEN '2023-05-01' AND '2023-05-31';
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_controller extends CI_Controller {

    public function __construct(){
        parent::__construct();

        // $this->load->helper('common_helper');
		$this->load->library('form_validation');
		$this->load->model('Homepage_models'); 
		$log = $this->session->userdata('login_data');
		
		if (empty($log)) {
			redirect('Auth_controller/login');
		}
    }

	 
	public function student_list(){
		// $query = $this->db->select('*')->from('tbl_mst_student')->get();
		$query = $this->db->query("SELECT tbl_mst_student.*,tbl_subjects.name as subject_name FROM tbl_mst_student JOIN tbl_subjects ON  tbl_mst_student.student_subjects=tbl_subjects.id");
		$result = $query->result_array();
		// pr($result);die;
		$data['list'] = $result;
		page_load('student_list',$data);		

	}

	public function insert_student(){
		$this->form_validation->set_rules('name','Name', 'required');
		$this->form_validation->set_rules('email','Email', 'required|valid_email');
		$this->form_validation->set_rules('contact','Contact', 'required|min_length[10]|max_length[10]');
		if($this->form_validation->run()==FALSE){
			$data = array();
			page_load('student_add',$data);
		}else{ 
		
		$config['upload_path']='assets/image/students/';
		$config['allowed_types']='jpg|jpeg|png';
		$config['max_size']='10000';
		$config['file_name']=$_FILES['student_img']['name'];
		$this->load->library('upload',$config);
		$this->upload->do_upload('student_img');

		$query = $this->db->select('*')->order_by('id','desc')->limit('1')->get('tbl_mst_student')->row();
		//Start---- this is define for the generate the unique number
		if($query!=''){
			$get_userid = explode('_',$query->user_id);
			$newid = $get_userid[1] + 1;
			$new_userid = 'STU_'.$newid;
		}else{
			$new_userid = 'STU_'."1100";
		}
		// end----
		
		$data= array(
			'user_id'=>$new_userid,
			'name'=>$this->input->post('name'),
			'contact'=>$this->input->post('contact'),
			'email'=>$this->input->post('email'),
			'student_address'=>$this->input->post('student_address'),
			'student_img'=>$_FILES['student_img']['name'],
			'student_subjects'=>$this->input->post('student_subjects'),
			'teacher_id'=>$this->input->post('teacher_id')
		);

		$user_data = array(
			'login_id' => $new_userid,
			'password' => md5('student'), 
			'user_type' => 1,
			'name'=>$this->input->post('name'),
			'contact'=>$this->input->post('contact'),
			'email_id'=>$this->input->post('email'),
			'status' => 1
		);
		$tablename  = 'tbl_mst_student';
		$this->Homepage_models->insertData($tablename,$data); 

		$user_tablename  = 'tbl_user_login';
		$this->Homepage_models->insertData($user_tablename,$user_data);
		
		header('location:student_list');
	}
	}

	public function add_new_student(){
		$data['query'] = $this->db->select('*')->from('tbl_subjects')->where('status',1)->get()->result_array();
		$data['queTea'] = $this->db->select('*')->from('tbl_mst_teacher')->where('status',1)->get()->result_array();
		// pr($data); die;
		page_load('student_add',$data);
		// pr($data);
	}

	public function remove_student($user){
		$tablename = 'tbl_mst_student';
		$delete = $this->Homepage_models->delete_row($tablename,$user);
		if ($delete==1){
			redirect('/Student_controller/student_list', 'refresh');
		}else{
			echo "failed";
		}
	}

	public function get_student_data($id){
		
		$tablename = 'tbl_mst_student';
		$data['query'] = $this->Homepage_models->get_data_by_id($tablename,$id)->row_array();
		$data['subject'] = $this->db->select('*')->from('tbl_subjects')->where('status',1)->get()->result_array();
		page_load('student_edit_form',$data);

	}
 
	public function update_student_data(){
		$tablename='tbl_mst_student';
		$id = $this->input->post('edit_id');

		$data = $this->Homepage_models->get_data_by_id($tablename,$id)->row_array();
		if($_FILES['student_img']['name']==''){
			$stdImg =$data['student_img']; 
		}else{
			$stdImg =$_FILES['student_img']['name'];
			$config['upload_path']='assets/image/students';
			$config['allowed_types']='jpg|jpeg|png';
			$config['max_size']='10000';
			$config['file_name']=$stdImg;
			$this->load->library('upload',$config);
			$this->upload->do_upload('student_img');
		}
		// pr($h);die;
		
		$data = array(
			'name'=>$this->input->post('name'),
			'contact'=>$this->input->post('contact'),
			'email'=>$this->input->post('email'),
			'student_address'=>$this->input->post('student_address'),
			'student_img'=>$stdImg,
			'student_subjects'=>$this->input->post('student_subjects')
		);
		$this->Homepage_models->update_data($tablename,$id,$data);
		header('location:student_list');
	}

	//change status
	function status_change(){
		
		$id = $this->input->post('row_id');
		$status_id = $this->input->post('status_id');
		$query = $this->db->query("UPDATE `tbl_mst_student` SET status = '".$status_id."' WHERE id = '".$id."'");
		header('loaction:student_list');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_controller extends CI_Controller {

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
	
    public function teacher_list(){ 
		// $query = $this->db->select('*')->from('tbl_mst_teacher')->get();
		$query = $this->db->query("SELECT tbl_mst_teacher.*,tbl_subjects.name as subject_name FROM tbl_mst_teacher JOIN tbl_subjects ON  tbl_mst_teacher.teacher_subject=tbl_subjects.id");
		$result = $query->result_array();
		// pr($result);die;
		$data['list'] = $result;
		page_load('teacher_list',$data);
	}

	public function insert_teacher(){
		$this->form_validation->set_rules('name','Name', 'required');
		$this->form_validation->set_rules('email','Email', 'required|valid_email');
		$this->form_validation->set_rules('contact','Contact', 'required|min_length[10]|max_length[10]');
		if($this->form_validation->run()==FALSE){
			// echo $this->session->flashdata('please fill correct inforamtion');
			$data = array();
			page_load('teacher_add',$data);
		}else{ 

			$config['upload_path']='assets/image/teachers/';
			$config['allowed_types']='jpg|jpeg|png';
			$config['max_size']='10000';
			$config['file_name']=$_FILES['teacher_img']['name'];
			$this->load->library('upload',$config);
			$this->upload->do_upload('teacher_img');
	
			$query = $this->db->select('*')->order_by('id','desc')->limit('1')->get('tbl_mst_teacher')->row();
			
			if($query!=''){
				$get_userid = explode('_',$query->user_id);
				$newid = $get_userid[1] + 1;
				$new_userid = 'TEA_'.$newid;
			}else{
				$new_userid = 'TEA_'."1000";
			}
			
			$data= array(
				// 'user_id'=>'TEA_'.generate_unique_num(),
				'user_id'=>$new_userid,
				'name'=>$this->input->post('name'),
				'contact'=>$this->input->post('contact'),
				'email'=>$this->input->post('email'), 
				'teacher_address'=>$this->input->post('teacher_address'),
				'teacher_img'=>$_FILES['teacher_img']['name'],
				'teacher_subject'=>$this->input->post('teacher_department')
			);

			$user_data = array(
				'login_id' => $new_userid,
				'password' => md5('teacher'), 
				'user_type' => 2,
				'name'=>$this->input->post('name'),
				'contact'=>$this->input->post('contact'),
				'email_id'=>$this->input->post('email'),
				'status' => 1
			);

			$tablename  = 'tbl_mst_teacher';
			$this->Homepage_models->insertData($tablename,$data);

			$user_tablename = 'tbl_user_login';
			$this->Homepage_models->insertData($user_tablename,$user_data);

			header('location:teacher_list');
		}
	}

	public function add_new_teacher(){
		$data['query'] = $this->db->select('*')->from('tbl_subjects')->where('status',1)->get()->result_array();
		// pr($data['query']); die;
		page_load('teacher_add',$data);
	}

	public function remove_teacher($id){
		$tablename = 'tbl_mst_teacher';
		$delete = $this->Homepage_models->delete_row($tablename,$id);
		if ($delete==1){
			redirect('/Teacher_controller/teacher_list', 'refresh');
		}else{
			echo "failed";
		}
	} 

	public function edit_teacher_records($id){
		$tablename = 'tbl_mst_teacher';
		$data['query'] = $this->Homepage_models->get_data_by_id($tablename,$id)->row_array();
		$data['subject'] = $this->db->select('*')->from('tbl_subjects')->where('status',1)->get()->result_array();
		page_load('teacher_edit_form',$data);
	}

	public function update_teacher_data(){
		$tablename = 'tbl_mst_teacher';
		$id = $this->input->post('edit_id');
// pr($_FILES);echo "<pre>";
// pr($this->input->post());
// die;
		$data = $this->Homepage_models->get_data_by_id($tablename,$id)->row_array();   
		if($_FILES['teacher_img']['name']==''){
			$techImg =$data['teacher_img'];
		}else{
			$techImg =$_FILES['teacher_img']['name'];
			$config['upload_path']='assets/image/teachers';
			$config['allowed_types']='jpg|jpeg|png';
			$config['max_size']='10000';
			$config['file_name']=$techImg;
			$this->load->library('upload',$config);
			$this->upload->do_upload('teacher_img');
		}
		

		$data = array(
			'name'=>$this->input->post('name'),
			'contact'=>$this->input->post('contact'),
			'email'=>$this->input->post('email'),
			'teacher_address'=>$this->input->post('teacher_address'),
			'teacher_img'=>$techImg,
			'teacher_subject'=>$this->input->post('teacher_subject')
		);
		$this->Homepage_models->update_data($tablename,$id,$data);
		header('location:teacher_list');
	}

	function status_change(){

		$id = $this->input->post('row_id'); 
		$status_id = $this->input->post('status_id');
		$query = $this->db->query("UPDATE `tbl_mst_teacher` SET status='".$status_id."' WHERE id='".$id."'");
		
		header('location:teacher_list');
	}


}


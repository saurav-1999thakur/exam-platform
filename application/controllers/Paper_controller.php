<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paper_controller extends CI_Controller {

    public function __construct(){
        parent::__construct();

        // $this->load->helper('common_helper');

		$this->load->model('Homepage_models');
		$log = $this->session->userdata('login_data');
		
		if (empty($log)) {
			redirect('Auth_controller/login');
		}
    }

	public function paper_set(){
		// $query = $this->db->select('*')->from('paper_set')->get();
		$query = $this->db->query("SELECT paper_set.*,tbl_subjects.name as subject_name FROM paper_set JOIN tbl_subjects ON  paper_set.subject_name = tbl_subjects.id");
		$result = $query->result_array();
		$data['list'] = $result;
		page_load('paper_list',$data);
	}

	public function add_paper(){
		$data['query'] = $this->db->select('*')->from('tbl_subjects')->where('status',1)->get()->result_array();
		page_load('paper_form',$data);
	}

	public function insert(){
		$query = $this->db->select('*')->order_by('id','desc')->limit('1')->get('paper_set')->row();
		if($query!=''){
			$newid = $query->question_set_id + '1';
			$new_paper_id = $newid;
		}else{
			$new_paper_id = "1000";
		}
		$data = $this->input->post();
		// pr($data);
		
		$insert_data = array();
	
		for($i=1;$i<=5;$i++){
			$insert_data['question_set_id']= $new_paper_id;
			$insert_data['subject_id'] = $this->input->post('subject');
			$insert_data['date'] = $this->input->post('date');
			$insert_data['expiry'] = $this->input->post('expirydate');
			$insert_data['question'] = $this->input->post('question'.$i);
			$var = $this->input->post('option'.$i);
			$option = explode(",",$var);
			$insert_data['ans_1']= $option[0];
			$insert_data['ans_2']= $option[1];
			$insert_data['ans_3']= $option[2];
			$insert_data['ans_4']= $option[3];
			$insert_data['correct_ans'] = $this->input->post('correct_ans'.$i);
			$insert_data['subject_name']= $this->input->post('subject');
			$this->db->insert('paper_set',$insert_data);
		}
// pr($insert_data);die;
		header('location:paper_set');	

		// $var = $this->input->post('option1');
		// $option = explode(",",$var);
		// $var1 = $this->input->post('option2');
		// $option1 = explode(",",$var1);
		// $var2 = $this->input->post('option3');
		// $option3 = explode(",",$var2);
		// $var3 = $this->input->post('option4');
		// $option4 = explode(",",$var3);
		// $var4 = $this->input->post('option5');
		// $option5 = explode(",",$var4);
		// $data = array(
		// 	 array(
		// 		'question_set_id'=>$new_paper_id,
		// 		'question'=>$this->input->post('question1'),
		// 		'ans_1'=>$option[0],
		// 		'ans_2'=>$option[1],
		// 		'ans_3'=>$option[2],
		// 		'ans_4'=>$option[3],
		// 		'correct_ans'=>$this->input->post('correct_ans'),
		// 		'subject_id'=>$this->input->post('subject'),
		// 		'date'=>$this->input->post('date')
		// 	 ),
			
		// 	 array(
		// 		'question_set_id'=>$new_paper_id,
		// 		'question'=>$this->input->post('question2'),
		// 		'ans_1'=>$option1[0],
		// 		'ans_2'=>$option1[1],
		// 		'ans_3'=>$option1[2],
		// 		'ans_4'=>$option1[3],
		// 		'correct_ans'=>$this->input->post('correct_ans'),
		// 		'subject_id'=>$this->input->post('subject'),
		// 		'date'=>$this->input->post('date')
		// 	 ),
		// 	 array(
		// 		'question_set_id'=>$new_paper_id,
		// 		'question'=>$this->input->post('question3'),
		// 		'ans_1'=>$option1[0],
		// 		'ans_2'=>$option1[1],
		// 		'ans_3'=>$option1[2],
		// 		'ans_4'=>$option1[3],
		// 		'correct_ans'=>$this->input->post('correct_ans'),
		// 		'subject_id'=>$this->input->post('subject'),
		// 		'date'=>$this->input->post('date')
		// 	 ),
		// 	 array(
		// 		'question_set_id'=>$new_paper_id,
		// 		'question'=>$this->input->post('question4'),
		// 		'ans_1'=>$option1[0],
		// 		'ans_2'=>$option1[1],
		// 		'ans_3'=>$option1[2],
		// 		'ans_4'=>$option1[3],
		// 		'correct_ans'=>$this->input->post('correct_ans'),
		// 		'subject_id'=>$this->input->post('subject'),
		// 		'date'=>$this->input->post('date')
		// 	 ),
		// 	 array(
		// 		'question_set_id'=>$new_paper_id,
		// 		'question'=>$this->input->post('question5'),
		// 		'ans_1'=>$option1[0],
		// 		'ans_2'=>$option1[1],
		// 		'ans_3'=>$option1[2],
		// 		'ans_4'=>$option1[3],
		// 		'correct_ans'=>$this->input->post('correct_ans'),
		// 		'subject_id'=>$this->input->post('subject'),
		// 		'date'=>$this->input->post('date')
		// 	)
		// );
		// $let = $this->db->insert_batch('paper_set',$data);
		// pr($data);
		// die;
	}
	public function remove_paper($id){
		$tablename = 'paper_set';
		$delete = $this->Homepage_models->delete_row($tablename,$id);
		if ($delete==1){
			redirect('/Paper_controller/paper_set', 'refresh');
		}else{
			echo "failed";
		}
	}

	public function edit_paper_set($id){
		// pr($id);
		// die;
		$tablename = 'paper_set';
		$data['query'] = $this->db->select('*')->from('tbl_subjects')->where('status',1)->get()->result_array();
		$data['editData'] = $this->db->select('*')->from('paper_set')->where('id',$id)->get()->row_array();
		page_load('paper_edit_form',$data);
	}

	public function update_paper(){
		$tablename = 'paper_set';
		$id = $this->input->post('edit_id');
		// pr($id);die;
		$data = array(
			'subject_id'=>$this->input->post('subject'),
			'date'=>$this->input->post('date'),
			'expiry'=>$this->input->post('expirydate'),
			'question'=> $this->input->post('question'),
			$var => $this->input->post('option'),
			$option => explode(",",$var),
			$insert_data['ans_1']=> $option[0],
			$insert_data['ans_2']=> $option[1],
			$insert_data['ans_3']=> $option[2],
			$insert_data['ans_4']=> $option[3],
			'correct_ans' => $this->input->post('correct_ans')
		);
		$this->Homepage_models->update_data($tablename,$id,$data);

	}

	// Array
	// (
	// 	[subject] => 2
	// 	[date] => 2023-06-09
	// 	[expirydate] => 2023-06-10
	// 	[question1] => test1
	// 	[option1] => test,test,test,test1
	// 	[correct_ans1] => opt3
	// 	[question2] => test12
	// 	[option2] => test,test,test,test12
	// 	[correct_ans2] => opt1
	// 	[question3] => test13
	// 	[option3] => test,test,test,test13
	// 	[correct_ans3] => opt2
	// 	[question4] => test14
	// 	[option4] => test,test,test,test14
	// 	[correct_ans4] => opt4
	// 	[question5] => test15
	// 	[option5] => test,test,test,test15
	// 	[correct_ans5] => opt1 
	// )

// edit query:
// 	SELECT *,CONCAT(ans_1,',',ans_2,',',ans_3,',',ans_4) as answers FROM `paper_set` WHERE `question_set_id` LIKE '1013';

public function paper_attempt(){
	$user = $this->session->userdata('login_data');
	$sub_id = $user['subject_id'];
	// pr($sub);die;
		$query = $this->db->select('*')->from('paper_set')->where('subject_id',$sub_id)->group_by('question_set_id')->order_by('id', 'desc')->get();
		$result = $query->result_array();
		$data['list'] = $result;
		page_load('attempt_paper',$data);
}

public function question_paper($question_set_id){
	// pr($question_set_id);die;
	$query = $this->db->select('*')->from('paper_set')->where('question_set_id',$question_set_id)->get()->result_array();
	// pr($query);die;
	$data['static_data'] = array(
		'qustion_set_id' => $query[0]['question_set_id'],
		'subject_id' => $query[0]['subject_id'],
		'subject_name' => $query[0]['subject_name'], 
		'date' => $query[0]['date'],
		'expiry_date' => $query[0]['expiry']
	);
	$data['dynamic_data'] = $query;
	// pr($data);sdie;
	page_load('question_paper_attempt',$data);
}
  public function exam_submit(){
	$session_data = $this->session->userdata('login_data');
	$user_id = $session_data['login_id'];
	$name = $session_data['name'];
	$email = $session_data['email_id'];
	$arr = array();
	$answer_1 = $this->input->post('answer_1');
	$option = explode("_",$answer_1);
	$query = $this->Homepage_models->get_paper_data($option[1]);
	$correct_ans1 = $query[0]['correct_ans'];
	
	if($option[0]==$correct_ans1){
		array_push($arr,'pass');
	}else{ 
		array_push($arr,'fail');
	} 
	$answer_2 = $this->input->post('answer_2');
	$option2 = explode("_",$answer_2);
	$query = $this->Homepage_models->get_paper_data($option2[1]);
	$correct_ans2 = $query[0]['correct_ans'];
	if($option2[0]==$correct_ans2){
		array_push($arr,'pass');
	}else{ 
		array_push($arr,'fail');
	}
	$answer_3 = $this->input->post('answer_3');
	$option3 = explode("_",$answer_3);
	$query = $this->Homepage_models->get_paper_data($option3[1]);
	$correct_ans3 = $query[0]['correct_ans'];
	if($option3[0]==$correct_ans3){
		array_push($arr,'pass');
	}else{ 
		array_push($arr,'fail');
	}
	$answer_4 = $this->input->post('answer_4');
	$option4 = explode("_",$answer_4);
	$query = $this->Homepage_models->get_paper_data($option4[1]);
	$correct_ans4 = $query[0]['correct_ans'];
	if($option4[0]==$correct_ans4){
		array_push($arr,'pass');
	}else{ 
		array_push($arr,'fail');
	}
	$answer_5 = $this->input->post('answer_5');
	$option5 = explode("_",$answer_5);
	$query = $this->Homepage_models->get_paper_data($option5[1]);
	$correct_ans5 = $query[0]['correct_ans'];
	if($option5[0]==$correct_ans5){
		array_push($arr,'pass');
	}else{ 
		array_push($arr,'fail');
	}
	$count = array_count_values($arr); 
	// pr($arr);
	// pr($count['pass']);die;
	// $arr ke ancdr kitne pass ya fail hai 
	if($count['pass']>=3){
		$status = 'Pass';
	}else{
		$status = 'Fail';
	}

	$data = array(
		'question_set_id' => $this->input->post('question_set_id'),
		'status' => $status,
		'student_id' => $user_id,
		'name' => $name,
		'email_id' => $email
	);
	$this->db->insert('attempt_paper',$data);

  }
}



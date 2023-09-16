<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_controller extends CI_Controller {
 
    public function __construct(){
        parent::__construct();

        $this->load->model('Auth_model'); 
        // $this->load->library('session');
    } 

    public function login(){
        $this->load->view('login');
        // pr($this->session->userdata());die;
    }
    
    public function registration(){
        $this->load->view('registration');  
    }

    public function login_by_id(){
        // pr($this->input->post());die;
        
        $login_id=$this->input->post('login_id');
        // pr($login_id);die;
        $password=$this->input->post('password');
        $validate = $this->Auth_model->login_by_admin($login_id,$password);
        if($validate['status']=='Success' && $validate['data']!=''){
            // $_SESION['key']='value';
            // unsetdestroy
            // pr($validate); die;
            $id = substr($login_id,0,3);
            if($id=='STU'){
               $sub = $this->db->select('student_subjects')->from('tbl_mst_student')->where('user_id',$login_id)->get()->row_array();
               $sub_id = $sub['student_subjects'];
            }else {
                $sub_id = '';
            }
            // pr($id); die; 

 
            $userdata = array(
                'login_id'=>$validate['data']['login_id'],
                'user_type'=>$validate['data']['user_type'],
                'name'=>$validate['data']['name'],
                'contact'=>$validate['data']['contact'],
                'email_id'=>$validate['data']['email_id'],
                'subject_id'=>$sub_id,
                'logged_in'=>TRUE
            );
            $this->session->set_userdata('login_data',$userdata); //set krane ka tareeka
            // $this->session->userdata();  //data get krna session se
            
            // unset( $this->session->set_userdata('key'));
            // $this->session->unset_userdata('key'); 

            //single data set krna hoto
            // $this->session->set_userdata('name','saurav');
            // $this->session->userdata('name');
            redirect('Home_controller/index');
            }else{
                // echo "else"; die;
                redirect('Auth_controller/login');
            } 

    }

    public function logout(){
        $this->session->unset_userdata('login_data');
        redirect('Auth_controller/login');
    }
}
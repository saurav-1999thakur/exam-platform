<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class form extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->model('Homepage_models'); 
        // $this->load->library('session');
    } 

    public function normal(){
        $this->load->view("test");
    }

    public function insert(){
        // pr($this->input->post());die; 
        $data =$this->input->post();
		$this->form_validation->set_rules('name','User Name', 'required');
		$this->form_validation->set_rules('email','User Email', 'required|valid_email');
		$this->form_validation->set_rules('contact','User Contact', 'required|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('company','Company', 'required');
		if($this->form_validation->run()==FALSE){
			$this->load->view("test");

		}else{ 
            $tablename = 'test';
            $deta = array(
                'name' => $this->input->post('name'),
                'contact' => $this->input->post('contact'),
                'email' => $this->input->post('email'),
                'company' => $this->input->post('company')
            );
            $this->Homepage_models->insertData($tablename,$deta);
		}
        
        
    }
}
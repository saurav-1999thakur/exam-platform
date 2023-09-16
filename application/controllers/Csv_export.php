<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Csv_export extends CI_Controller
{
    
    function __construct() 
    {
        parent::__construct(); 
        $this->load->model('export'); //import and export in same model
        $this->load->library('CSVReader');//impot and export in same controller
    }

    public function index()
    {
      $this->load->view('csv_data_export');
    }

    public function export()
    { 
        $filename = 'userdata'.date('Y-m-d').'.csv'; 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$filename"); 
        header("Content-Type: application/csv; ");
        
        $usersData = $this->export->Question();
        $file = fopen('php://output', 'w');
        $header = array("ID","Userid","Name","Contact", "Email","Student Address","student image","student subject","teacher list","status","created","update"); 
        fputcsv($file, $header);
        foreach ($usersData as $key=>$line){ 
          fputcsv($file,$line); 
        }
        fclose($file);  
        exit;
    }
    
    public function import(){
      $file_tmp_name = $_FILES["files"]["tmp_name"];
     $csvData = $this->csvreader->parse_file($file_tmp_name);
      foreach($csvData as $fileData){
        $data = array(
          'user_id' => $fileData["Userid"],
          'name' => $fileData["Name"],
          'contact' => $fileData["Contact"],
          'email' => $fileData["Email"],
          'student_address' => $fileData["Student Address"],
          'student_img' => $fileData["student image"],
          'student_subjects' => $fileData["student subject"],
          'teacher_id' => $fileData["teacher list"],
          'status' => $fileData["status"]
        );
        // pr($data);die;
        $this->db->insert('tbl_mst_student',$data);
      }
      // pr($data);die;
      // $this->db->insert_batch('tbl_mst_student',$data);
    }
}
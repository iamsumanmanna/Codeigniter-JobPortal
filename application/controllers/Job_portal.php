<?php
class Job_portal extends CI_Controller {
public function __construct(){
parent::__construct();
$this->load->helper('url');
$this->load->model('jp_model');
$this->load->database();
}
public function index()
{

	$data['title'] = 'Home | Welcome to job portal';
  	$data['joblist'] = $this->jp_model->get_all_jobs(); 
  	$data['catlist'] = $this->jp_model->get_all_category(); 
  	$data['candlist'] = $this->jp_model->get_all_candidate(); 
  	$data['top_company'] = $this->jp_model->get_top_company(); 
  	$data['feedback'] = $this->jp_model->get_feedback(); 
  	$this->load->view("job",$data); 
}
 
}
?>
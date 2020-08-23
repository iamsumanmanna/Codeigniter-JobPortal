<?php
class Candidate_job extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
	$this->load->model('jp_model');
	$this->load->database();
	}
	public function index()
	{
		$data['candlist'] = $this->jp_model->get_all_candidate();
	$data['title'] = 'Login  | Welcome to job portal';
	$this->load->view("candidate_job",$data);
	}
}
?>
<?php
class Job_details extends CI_Controller 
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
		$data['joblist'] = $this->jp_model->get_all_jobs();
	$data['title'] = 'Job Details  | Welcome to job portal';
	$this->load->view("job_details",$data);
	}
}
?>
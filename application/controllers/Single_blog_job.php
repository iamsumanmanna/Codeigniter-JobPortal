<?php
class Single_blog_job extends CI_Controller 
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
	$data['title'] = 'Single-Blog | Welcome to job portal';
	$this->load->view("single_blog_job",$data);
	}
}
?>
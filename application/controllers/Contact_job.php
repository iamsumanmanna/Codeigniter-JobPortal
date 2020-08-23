<?php
class Contact_job extends CI_Controller 
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
	$data['title'] = 'Contact  | Welcome to job portal';
	$this->load->view("contact_job",$data);
	}
}
?>
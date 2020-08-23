<?php
class Log_job extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
	
	}
	public function index()
	{
	$data['title'] = 'Login  | Welcome to job portal';
	$this->load->view("log_job",$data);
	}
	public function create()
 	{
 		$this->load->model('User_model');
 		$this->form_validation->set_rules('firstname','First Name','required|alpha');
		$this->form_validation->set_rules('lastname','Last Name','required|alpha');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run() == false){
			$this->load->view("log_job");
		}
		else
		{
 			
 		 $data['firstname'] = $this->input->post('firstname');
 		 $data['lastname'] = $this->input->post('lastname');
 		 $data['email'] = $this->input->post('email');
 		 $data['password'] = $this->input->post('password');
 		 $this->session->set_flashdata('success','Record Added Sucessfully');
 		$this->User_model->create($data);
 		redirect(base_url().'Browse_job/index');
 		}



    }
}
?>
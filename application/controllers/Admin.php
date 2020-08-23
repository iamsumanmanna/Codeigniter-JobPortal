<?php
class Admin extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->helper('url');
	$this->load->model('Admin_login_model');
	$this->load->database();
	}
	public function login()
	{
		$data['title'] = ' Login  | Welcome to job portal';
		$this->form_validation->set_rules('admin_username','Username','required');
		$this->form_validation->set_rules('admin_password','Password','required|max_length[12]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run())
		
		{
			$admin_username= $this->input->post('admin_username');
			$admin_password= $this->input->post('admin_password');
			$this->load->model('Admin_login_model');
			$login_id = $this->Admin_login_model->isvalidate($admin_username,$admin_password);
			if($login_id)
				{
					$this->load->library('session');
					$this->session->set_userdata('id',$login_id);
					return redirect('Admin/dashboard');
				}
				else
				{
					$this->session->set_flashdata('Login_falied','Invaild Username/Password');

					return redirect('Admin/login');

				}
		}
		else
		{
			$this->load->view('Admin/login',$data);
		}
	
	/*$this->load->view("Admin/login",$data);*/
	}
	public function dashboard()
	{
	$data['title'] = ' dashboard  | Welcome to job portal';
	$this->load->view("Admin/dashboard",$data);
	}
	public function logout()
	{
		$this->session->userdata('id');
		return redirect('Admin/login');
	}
	public function admin_user()
	{

		$data['title'] = ' User | Welcome to job portal';
		$this->load->model('Admin_login_model');
		$user = $this->Admin_login_model->admin_user();
		$this->load->view("Admin/user",$data,);
	}
	public function admin_login()
	{
		$data['title'] = ' Admin Login | Welcome to job portal';
		$this->load->view('Admin/adminLogin',$data);
	}
	public function admin_candidate()
	{
		$data['title'] = ' Candidate | Welcome to job portal';
		$this->load->model('Admin_login_model');
		$can = $this->Admin_login_model->admin_candidate();
		$this->load->view('Admin/adminCandidate',$data);
	}
	public function admin_feedback()
	{

		$data['title'] = ' Feedback | Welcome to job portal';
		$this->load->model('Admin_login_model');
		$can = $this->Admin_login_model->admin_feedback();
		$this->load->view('Admin/adminFeedback',$data);
	}
	public function admin_job()
	{
		$data['title'] = ' Job | Welcome to job portal';
		$this->load->model('Admin_login_model');
		$job = $this->Admin_login_model->admin_job();
		$this->load->view('Admin/adminJob',$data);
	}
	public function admin_applyJob()
	{
		$data['title'] = ' Job | Welcome to job portal';
		$this->load->model('Admin_login_model');
		$apply = $this->Admin_login_model->apply_job_admin();
		$this->load->view('Admin/apply_job',$data);
	}

}
?>
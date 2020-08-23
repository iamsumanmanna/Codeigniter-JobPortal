<?php
class Apply_job extends CI_Controller 
{
	

	public function apply()
 	{	

 		$config['upload_path'] = './upload/';
		$config['allowed_types']  = 'pdf|jpg';
        $this->load->library('upload', $config);
 		$this->form_validation->set_rules('fullName','Full Name','required|alpha');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('phonenumber','Phone Number','required');
		$this->form_validation->set_rules('totalExper','Total Experience','required');
		$this->form_validation->set_rules('message','Massage','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run() == false) 
		{
			$this->load->view("registration_job");
		}
		else
		{
			if ( ! $this->upload->do_upload('cv'))
        {
            $error = $this->upload->display_errors() ;
        }
                else
                {

                $dta = $this->upload->data();
                $cv=$dta['file_name'];
                $this->load->model('Apply_model');
 		 		$data['fullName'] = $this->input->post('fullName');
 		 		$data['email'] = $this->input->post('email');
 		 		$data['phonenumber'] = $this->input->post('phonenumber');
 		 		$data['totalExper'] = $this->input->post('totalExper');
 		 		$data['message'] = $this->input->post('message');
 		 		$data['cv'] = $cv;
 		 		$this->Apply_model->apply($data);
 		 		$this->session->set_flashdata('success','Record Added Sucessfully');

 		 		redirect(base_url().'Browse_job/index');
                }

		
 		}
    }

    public function index()
	{
	$data['title'] = 'Apply Now | Welcome to job portal';
	$this->load->view("registration_job",$data);
	}
	
	
	

}
	

?>
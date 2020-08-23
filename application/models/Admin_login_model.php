
<?php
class Admin_login_model extends CI_Model
{
	
	public function isvalidate($admin_username,$admin_password)
	{
		$q = $this->db->where(['admin_username'=>$admin_username,'admin_password'=>$admin_password])->get('admin_login');
		if($q->num_rows() > 0)
		{
			return $q->row()->id;
		}
		else
		{
			return False;
		}
	}
	public function admin_user()
	{

		$query = $this->db->get('user');  
            return $query->result();  						
	}
	public function admin_candidate()
	{
		$query = $this->db->get('candidate');  
            return $query->result();  						
	}
	public function admin_feedback()
	{
		$query = $this->db->get('feedback');  
            return $query->result();  						
	}
	public function admin_job()
	{
		$query = $this->db->get('job');  
            return $query->result();  						
	}
	public function apply_job_admin()
	{
		$query = $this->db->get('apply_job');
		return $query->result(); 
	}
	
	
	

}
?>
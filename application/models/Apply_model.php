 <?php
class Apply_model extends CI_model
{
	public function apply($data)
	{
		
		$this->db->insert('apply_job',$data);
		
	}
}
?>
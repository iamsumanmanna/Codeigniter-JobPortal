  <?php
class User_model extends CI_model
{
	public function create($data)
	{

		$this->db->insert('user',$data);
	}
}
 
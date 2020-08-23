<?php class Jp_model extends CI_model
{
public function get_all_jobs()
{
 	return $this->db->get('job');
}
public function get_job_details($id)
{
$this->db->where('id', $id);
return $this->db->get('job');
}

public function get_all_category()
{
$records=$this->db->query("select category, sum(total_post) as total from job group by category");
return $records;

}
public function get_all_candidate()
{
$records=$this->db->query("select * from candidate");
return $records;
}
public function get_top_company()
{
$records=$this->db->query("select id, company_name,total_post as total from job order by total desc limit 4");
return $records;

}

public function get_feedback()
{
$records=$this->db->query("select * from feedback");
return $records;

}
} ?>
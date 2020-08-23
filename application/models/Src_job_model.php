<?php class Src_job_model extends CI_model{
public function src_keyword($kw)
{
if($kw=="all" || $kw=="")
return $this->db->query("select * from job ");
else
return $this->db->query("select * from job where post like '%$kw%' or category like '%$kw%' or type like '%$kw%'");
}
public function src_location($loc)
{
return $this->db->query("select * from job where company_addr like '%$loc%'");
}
} ?>
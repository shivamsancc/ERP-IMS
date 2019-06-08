<?php

class Search_student extends CI_Model {
public function __construct(){
parent::__construct();

}
//----------------------Notice Insert Notice	
public function insert()
{

	$data= $this->input->post();
	$this->db->insert('cittet_dash_notice',$data);

}
//----------------------Notice Insert Notice	
//----------------------Notice show Notice	
public function getdata()
{
	$this->db->limit('1','0');
	$this->db->order_by('id','desc');
	 $this->db->from('cittet_dash_notice');
$query = $this->db->get();
$result = $query->result_array();
return $result;

}
//----------------------Notice show Notice	
public function mainnotice($id)
{
	$this->db->where('id',$id); 
	 $this->db->from('cittet_dash_notice');
$query = $this->db->get();
$result = $query->row_array();
return $result;

}


}
?>

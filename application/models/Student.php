<?php

class Student extends CI_Model {
public function __construct(){
parent::__construct();

}
//----------------------Search student
function displaystudent()
{
$query=$this->db->query("select * from cittet_admission");
return $query->result();
}

 


}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function add_student()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		//$this->load->view('admin/Add_student',$data);
		/*-----------------------Addmission Variable---------------------- */
		//$this->load->model('Student');

		

		$img = $this->input->post('img');
		$name = $this->input->post('name');
		$fname = $this->input->post('fname');
		$mname = $this->input->post('mname');
		$dob = $this->input->post('dob');
		$gender = $this->input->post('gender');
		$mstatus = $this->input->post('mstatus');
		$cat = $this->input->post('cat');
		$paddress = $this->input->post('paddress');
		$caddress = $this->input->post('caddress');
		$Nationallity = $this->input->post('Nationallity');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$amobile = $this->input->post('amobile');
		$doa = $this->input->post('doa');
		$course = $this->input->post('course');
		//$studycentername = $this->input->post('$studycentername');

		$data = array(
			'name' => $name,
			'fname' => $fname,
			  'mname' => $mname,
			  'dob' => $dob,
			  'gender'=>$gender,
			  'mstatus'=>$mstatus,
			  'cat'=>$cat,
			  'paddress'=>$paddress,
			  'caddress'=>$caddress,
				'Nationallity'=>$Nationallity,
				'email'=>$email,
				'mobile'=>$mobile,
				'amobile'=>$amobile,
				'doa'=>$doa,
				'course'=>$course

				   );
	   $this->db->insert('cittet_admission',$data);

	   redirect(base_url('').'add-student');  
    
	}

	public function list_student()
	{
		$result['data']=$this->Student->displaystudent();
 		$this->load->view('admin/Search_student',$result);
	}



	

}




















	

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller {

	public function add_branchmanager()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		//$this->load->view('admin/Add_student',$data);
		/*-----------------------Branch Manager Variable---------------------- */
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
        $qualification=$this->input->post('qualification');
        $qualificationf =$this->input->post('qualificationf');
        $Occupation=$this->input->post('Occupation');
        $Adhaarn=$this->input->post('Adhaarn');
        $Adhaarf=$this->input->post('Adhaarf');
        $Signature=$this->input->post('Signature');
        $Username=$this->input->post('Username');
        $Password=$this->input->post('Password');
		$status = $this->input->post('status');

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
				'qualification'=>$qualification,
                'qualificationf'=> $qualificationf,
                'Occupation'=>$Occupation,
                'Adhaarn'=>$Adhaarn,
                'Adhaarf'=>$Adhaarf,
                'Signature'=>$Signature,
                'Username'=>$Username,
								'Password'=> $Password,
								'status'=>$status


				   );
	   $this->db->insert('cittet_branchmanager',$data);

	   redirect(base_url('').'dashboard');  
    
	}

	public function add_branch()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		//$this->load->view('admin/Add_student',$data);
		/*-----------------------Branch Manager Variable---------------------- */
		//$this->load->model('Student');

		

		
		$bname = $this->input->post('bname');
		$address = $this->input->post('address');
		$location = $this->input->post('location');
		$Lankmark = $this->input->post('Lankmark');
		$State = $this->input->post('State');
		$District = $this->input->post('District');
		$City = $this->input->post('City');
		$Pincode = $this->input->post('Pincode');
		$Certificate = $this->input->post('Certificate');
		$Diploma = $this->input->post('Diploma');
		$Advance = $this->input->post('Advance');
		$Degree = $this->input->post('Degree');
		$Space = $this->input->post('Space');
        $collegen=$this->input->post('collegen');
        $schooln =$this->input->post('schooln');
        $highschooln=$this->input->post('highschooln');
        $facultyn=$this->input->post('facultyn');
		//$studycentername = $this->input->post('$studycentername');

		$data = array(
			'bname' => $bname,
			'address' => $address,
			  'location' => $location,
			  'Lankmark' => $Lankmark,
			  'State'=>$State,
			  'District'=>$District,
			  'City'=>$City,
			  'Pincode'=>$Pincode,
			  'Certificate'=>$Certificate,
				'Diploma'=>$Diploma ,
				'Advance'=>$Advance,
				'Degree'=>$Degree,
				'Space'=>$Space,
				'collegen'=>$collegen,
                'schooln'=> $schooln,
                'highschooln'=>$highschooln,
                'facultyn'=>$facultyn,
				   );
	   $this->db->insert('cittet_branch',$data);

	   redirect(base_url('').'dashboard');  
    
	}



	

}




















	

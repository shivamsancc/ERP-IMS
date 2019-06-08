<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	/*-------------------------------------------------------------------add_notice----------------------------*/
	public function add_notice()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		$this->load->view('admin/Add_notice',$data);
	}
	public function dash_add_notice()
	{
		$title = $this->input->post('notice_title');
		$user = $this->input->post('Shivam_Anand');
		$messege = $this->input->post('description');
		
         $data = array(

              'title' => $title,
              'createdby' => $user,
				'message' => $messege,
         );

         $this->db->insert('cittet_dash_notice',$data);

         redirect(base_url('').'main/dashboard');


	}
	/*-------------------------------------------------------------------dashboard_Messege----------------------------*/
	public function dashboard_Messege()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/dashboard_Messege',$data);
	}
	/*-------------------------------------------------------------------Notice----------------------------*/
	public function notice()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Notice',$data);
	}
		/*-------------------------------------------------------------------Main Notice----------------------------*/
	public function Main_notice($id)
	{
		$data['marquee']=$this->search_student->getdata();
		$data['idd']=$this->search_student->mainnotice($id);
			


		$this->load->view('admin/Main_notice',$data);
	}
	
}




















	

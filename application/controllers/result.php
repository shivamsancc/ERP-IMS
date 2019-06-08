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
	/*-------------------------------------------------------------------add_result----------------------------*/
	public function add_result()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Add_result',$data);
	}
	/*-------------------------------------------------------------------delete_result----------------------------*/
	public function delete_result()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Delete_result',$data);
	}
	/*-------------------------------------------------------------------edit_result----------------------------*/
	public function edit_result()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Edit_result',$data);
	}
	/*-------------------------------------------------------------------Search_result----------------------------*/
	public function search_result()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Search_result',$data);
	}
	


	

}




















	

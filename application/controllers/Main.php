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
	/*-------------------------------------------------------------------login----------------------------*/
	public function Index()
	{
		$data['student_registration']=$this->search_student->getdata();
		$this->load->view('login',$data);

	}

		public function login()
	{
        
		$name = $this->input->post('name');
		$pass = $this->input->post('pass');
         
        $log = $this->db->where('first_name',$name)->where('password',md5($pass))->get('cittet_users')->num_rows(); 
        
       if($log>0)
       {
            redirect(base_url('').'dashboard');
       }
       else
       {
  redirect(base_url(''));
       }

	}
	/*-------------------------------------------------------------------Register----------------------------*/
	public function register()
	{
		$name = $this->input->post('regname');
		$pass = $this->input->post('regpass');

         $data = array(

              'first_name' => $name,
              'password' => md5($pass),

         );

         $this->db->insert('cittet_users',$data);

         redirect(base_url('').'main');


	}

	/*-------------------------------------------------------------------Add-Admit-card----------------------------*/
	public function add_admit()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/add_admit',$data);
	}

	/*-------------------------------------------------------------------Add-Branch----------------------------*/
	public function add_Branch()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Add_Branch',$data);
	}
	/*-------------------------------------------------------------------add_certificate----------------------------*/
	public function add_certificate()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/add_certificate',$data);
	}
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
	/*-------------------------------------------------------------------add_result----------------------------*/
	public function add_result()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Add_result',$data);
	}
	/*-------------------------------------------------------------------Add_student----------------------------*/
	public function add_student()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Add_student',$data);
	}

	/*-------------------------------------------------------------------Add_syllabus----------------------------*/
	public function add_syllabus()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Add_syllabus',$data);
	}
	/*-------------------------------------------------------------------Dashboard----------------------------*/
	public function admin()
	{
				$data['marquee']=$this->search_student->getdata();

		$this->load->view('admin/admin',$data);
	}
	/*-------------------------------------------------------------------dashboard_Messege----------------------------*/
	public function dashboard_Messege()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/dashboard_Messege',$data);
	}

	/*-------------------------------------------------------------------Delete_admit----------------------------*/
		public function delete_admit()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Delete_admit',$data);
	}
	/*-------------------------------------------------------------------Delete_Branch----------------------------*/
	public function delete_Branch()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Delete_Branch',$data);
	}
	/*-------------------------------------------------------------------Delete_certificate----------------------------*/
	public function delete_certificate()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Delete_certificate',$data);
	}
	/*-------------------------------------------------------------------delete_result----------------------------*/
	public function delete_result()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Delete_result',$data);
	}
	/*-------------------------------------------------------------------Delete_student----------------------------*/
	public function delete_student()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Delete_student',$data);
	}
	/*-------------------------------------------------------------------delete_syllabus----------------------------*/
	public function delete_syllabus()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Delete_syllabus',$data);
	}
	/*-------------------------------------------------------------------edit_admit----------------------------*/
	public function edit_admit()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Edit_admit',$data);
	}
	/*-------------------------------------------------------------------edit_Branch----------------------------*/
	public function edit_Branch()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Edit_Branch',$data);
	}
	/*-------------------------------------------------------------------edit_result----------------------------*/
	public function edit_result()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Edit_result',$data);
	}
	/*-------------------------------------------------------------------Edit_certificate----------------------------*/
	public function edit_certificate()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Edit_certificate',$data);
	}
	/*-------------------------------------------------------------------edit_syllabus----------------------------*/
	public function edit_syllabus()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Edit_syllabus',$data);
	}
	/*-------------------------------------------------------------------edit_student----------------------------*/
	public function edit_student()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Edit_student',$data);
	}
	/*-------------------------------------------------------------------Search_result----------------------------*/
	public function search_result()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Search_result',$data);
	}
	/*-------------------------------------------------------------------Notice----------------------------*/
	public function notice()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Notice',$data);
	}
		/*-------------------------------------------------------------------Main Notice----------------------------*/
	public function Main_notice()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Main_notice',$data);
	}
	/*-------------------------------------------------------------------search_Branch----------------------------*/
	public function search_admit()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Search_Admit',$data);
	}
	/*-------------------------------------------------------------------search_Branch----------------------------*/
	public function search_Branch()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Search_Branch',$data);
	}
	/*-------------------------------------------------------------------search_Certificate----------------------------*/
	public function search_Certificate()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Search_Certificate',$data);
	}
	/*-------------------------------------------------------------------search_student----------------------------*/
	public function search_student()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Search_student',$data);
	}
	/*-------------------------------------------------------------------search_result----------------------------*/
/*	public function search_result()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Search_result',$data);
	}

	/*-------------------------------------------------------------------Search_syllabus----------------------------*/
	public function search_syllabus()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Search_syllabus',$data);
	}

	/*-------------------------------------------------------------------send Messege---------------------------*/
	public function send_messege()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/send_messege',$data);
	}
	/*-------------------------------------Messege sending API-----------------------------------------------*/
	public function sms_api()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/sms_api',$data);
	}
	/*-------------------------------------Messege sending API-----------------------------------------------*/
	public function smsapi()
	{
		$mobile_numbers = $this->input->post('mobile_numbers');
		$messege_body = $this->input->post('messege_body');

         //$data = array(

              //'first_name' => $name,
             // 'password' => $pass,

        // );

        echo"$mobile_numbers,$messege_body";

         redirect(base_url('').'main');


	}
	/*-------------------------------------------------------------------send Messege----------------------------*/


	/*-------------------------------------------------------------------Add-certificate----------------------------*/
	/*-------------------------------------------------------------------send_mail----------------------------*/
	public function send_mail()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/send_mail',$data);
	}
	/*-------------------------------------------------------------------Send_mail----------------------------*/

	/*-------------------------------------------------------------------Add-certificate----------------------------*/

	/*-------------------------------------------------------------------Add-certificate----------------------------*/

	/*-------------------------------------------------------------------welcome----------------------------*/
	public function welcome()
	{
		$this->load->view('welcome_message');
	}
	
	





	

}




















	

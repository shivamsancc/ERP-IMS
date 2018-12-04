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
	

}




















	

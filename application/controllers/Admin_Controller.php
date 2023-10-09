<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Users_model');

	}

	public function index()
	{
		if (isset($_POST['login_btn'])) {
			$email= $this->input->post('user_email');
			$pw= $this->input->post('user_password');

			$user_data=$this->Users_model->authenticate($email);

			if (!empty($user_data)== TRUE) {
				if ($user_data[0]->password == $pw) {
					if($user_data[0]->type=="admin"){
						$userdata = array(
							'user_id' 			=> $user_data[0]->id,
							'fullname' 			=> $user_data[0]->fullname,

						);
						$this->session->set_userdata($userdata);
						redirect('dashboard');
					}else{
						$this->session->set_flashdata('msg_login','Not an admin. Please try again.');
					}
				}else {
					
					$this->session->set_flashdata('msg_login','Invalid Password. Please try again.');
				}

			}else {
				$this->session->set_flashdata('msg_login','Account not found. Please try again.');
				// code...
			}
		}
		$this->load->view('backend/page/login');
	}
	
	public function dashboard()
	{
		if ($this->session->has_userdata('user_id') == TRUE) {
		$data['website_info'] = $this->Users_model->fetch_all("website_info");	
		$this->load->view('backend/include/header', $data);
		$this->load->view('backend/page/dashboard');
		$this->load->view('backend/include/footer');	
	}
}
public function widgets()
	{
		if ($this->session->has_userdata('user_id') == TRUE) {
		$data['website_info'] = $this->Users_model->fetch_all("website_info");	
		$this->load->view('backend/include/header', $data);
		$this->load->view('backend/page/widgets');
		$this->load->view('backend/include/footer');	
	}
}
public function button()
	{
		if ($this->session->has_userdata('user_id') == TRUE) {
		$data['website_info'] = $this->Users_model->fetch_all("website_info");	
		$this->load->view('backend/include/header', $data);
		$this->load->view('backend/page/button');
		$this->load->view('backend/include/footer');	
	}
}
public function typography()
	{
		if ($this->session->has_userdata('user_id') == TRUE) {
		$data['website_info'] = $this->Users_model->fetch_all("website_info");	
		$this->load->view('backend/include/header', $data);
		$this->load->view('backend/page/typography');
		$this->load->view('backend/include/footer');	
	}
}
	public function logout()
	{
		session_destroy();
		redirect('admin');
	}
	public function register(){
		$data['website_info'] = $this->Users_model->fetch_all("website_info");	
		$this->load->view('backend/page/register');
		$this->load->view('backend/include/header', $data);
		$this->load->view('backend/include/footer');
			
	}
	public function settings(){
		$data['website_info'] = $this->Users_model->fetch_all("website_info");	
		$this->load->view('backend/page/settings',$data);	
		$this->load->view('backend/include/header', $data);
		$this->load->view('backend/include/nav');
	}
	public function insertFromAdmin(){

		if (isset($_POST['signup_btn'])) {
			
			$insertArray=array(
				'fullname' => $this->input->post('full_admin'),
				'email' => $this->input->post('email_admin'),
				'password' => $this->input->post('pass_admin'),
				'phone' => $this->input->post('phone_number'),
				'idnum' => $this->input->post('id_number'),
				'con_password' => $this->input->post('con_pass_admin'),
				'type' => $this->input->post('user_type')
			);
			
			echo "<script>console.log('Debug Objects: " . $site,$about,$contact,$email,$location . "' );</script>";
			$result=$this->Users_model->insert_data('admin',$insertArray);
			if($result){
				echo "<script>console.log('Debug Objects: " . "Record Added" . "' );</script>";
				$this->session->set_flashdata('msg_settings','Record Inserted Successfully');
				
			}
			else{
				$this->session->set_flashdata('msg_settings_error','Failed to Insert');
			}
		}
		redirect('Create_admin');
	}
public function insertFromSettings(){

		if (isset($_POST['settings_btn'])) {
			
			$insertArray=array(
				'site_name' => $this->input->post('site_info'),
				'about' => $this->input->post('about_info'),
				'contact' => $this->input->post('contact_info'),
				'email' => $this->input->post('email_info'),
				'location' => $this->input->post('location_info')
			);
			
			//echo "<script>console.log('Debug Objects: " . $site,$about,$contact,$email,$location . "' );</script>";
			$result=$this->Users_model->set_update('website_info',3,$insertArray);
			if($result){
				echo "<script>console.log('Debug Objects: " . "Record Added" . "' );</script>";
				$this->session->set_flashdata('msg_settings','Website Updated Successfully');
				
			}
			else{
				$this->session->set_flashdata('msg_settings_error','Failed to Update');
			}
		}
		redirect('Settings');
	}
	

	
}

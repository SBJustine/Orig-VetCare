<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Users_model');

	}

	public function index()
	{
		if (isset($_POST['login_btn_client'])) {
			$email= $this->input->post('user_email');
			$pw= $this->input->post('user_password');

			$user_data=$this->Users_model->authenticateclient($email);

			if (!empty($user_data)== TRUE) {
				if ($user_data[0]->password == $pw) {
					$userdata = array(
										'user_id' 			=> $user_data[0]->id,
										'fullname' 			=> $user_data[0]->fullname,

									);
					$this->session->set_userdata($userdata);
					redirect('home');
				}else {
					$this->session->set_flashdata('msg_login','Invalid Password. Please try again.');
				}

			}else {
				$this->session->set_flashdata('msg_login','Account not found. Please try again.');
				// code...
			}
		}
		$this->load->view('frontend/page/login_client');
	}

	public function home()
	{
		$data['website_info'] = $this->Users_model->fetch_all("website_info");
		$this->load->view('frontend/include/header',$data);
		$this->load->view('frontend/page/home',$data);
		$this->load->view('frontend/include/footer',$data);
	}
	public function about()
	{
		$data['website_info'] = $this->Users_model->fetch_all("website_info");
		$this->load->view('frontend/include/header',$data);
		$this->load->view('frontend/page/about',$data);
		$this->load->view('frontend/include/footer',$data);
	}
	public function services()
	{
		$data['website_info'] = $this->Users_model->fetch_all("website_info");
		$this->load->view('frontend/include/header',$data);
		$this->load->view('frontend/page/services',$data);
		$this->load->view('frontend/include/footer',$data);
	}
	public function contact()
	{
		$data['website_info'] = $this->Users_model->fetch_all("website_info");
		$this->load->view('frontend/include/header',$data);
		$this->load->view('frontend/page/contact',$data);
		$this->load->view('frontend/include/footer',$data);
	}
	public function appointment()
	{
		$data['website_info'] = $this->Users_model->fetch_all("website_info");
		$this->load->view('frontend/include/header',$data);
		$this->load->view('frontend/page/appointment',$data);
		$this->load->view('frontend/include/footer',$data);
	}
}

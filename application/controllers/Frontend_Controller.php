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

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
					$userdata = array(
										'user_id' 			=> $user_data[0]->id,
										'fullname' 			=> $user_data[0]->fullname,

									);
					$this->session->set_userdata($userdata);
					redirect('dashboard');
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
		$this->load->view('backend/include/nav');
		$this->load->view('backend/include/footer');	
	}
}
public function appointments()
	{
		if ($this->session->has_userdata('user_id') == TRUE) {
		$data['website_info'] = $this->Users_model->fetch_all("website_info");	
		$this->load->view('backend/include/header', $data);
		$this->load->view('backend/page/appointments');
		$this->load->view('backend/include/nav');
		$this->load->view('backend/include/footer');	
	}
}
public function appointment_list()
	{
		if ($this->session->has_userdata('user_id') == TRUE) {
		$data['website_info'] = $this->Users_model->fetch_all("website_info");	
		$this->load->view('backend/include/header', $data);
		$this->load->view('backend/page/appointment_list');
		$this->load->view('backend/include/nav');
		$this->load->view('backend/include/footer');	
	}
}
public function vaccination_report()
	{
		if ($this->session->has_userdata('user_id') == TRUE) {
		$data['website_info'] = $this->Users_model->fetch_all("website_info");	
		$this->load->view('backend/include/header', $data);
		$this->load->view('backend/page/vaccination_report');
		$this->load->view('backend/include/nav');
		$this->load->view('backend/include/footer');
		}
	}
// public function appointments()
// 	{
// 		if ($this->session->has_userdata('user_id') == TRUE) {
// 		$data['website_info'] = $this->Users_model->fetch_all("website_info");	
// 		$this->load->view('backend/include/header', $data);
// 		$this->load->view('backend/page/appointments');
// 		$this->load->view('backend/include/nav');
// 		$this->load->view('backend/include/footer');	
// 	}
// }



// public function pet_table()
// 	{
// 		if ($this->session->has_userdata('user_id') == TRUE) {
// 		$data['website_info'] = $this->Users_model->fetch_all("website_info");	
// 		$this->load->view('backend/include/header', $data);
// 		$this->load->view('backend/page/pet_table');
// 		$this->load->view('backend/include/nav');
// 		$this->load->view('backend/include/footer');	
// 	}
// }


// public function register(){
// 	$data['website_info'] = $this->Users_model->fetch_all("website_info");
// 	$this->load->view('backend/include/header', $data);
// 	$this->load->view('backend/page/register');

	

// }

public function create_admin() {
	$this->load->library('form_validation');
	$this->form_validation->set_rules('fullname', 'Full Name', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	$this->form_validation->set_rules('password', 'Password', 'required');
	

	if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	if ($this->form_validation->run() === FALSE) {
		// Validation failed, redirect back to the form
		$this->load->view('backend/include/header');
		$this->load->view('backend/include/nav');
		$this->load->view('backend/page/create_admin');
		$this->load->view('backend/include/footer');
	} else {
		// Validation succeeded, proceed with data insertion
		$data = array(
			
			'fullname' => $this->input->post('fullname'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			
		);

		$result = $this->Users_model->insert_data($data);

		if ($result) {
			// Data insertion was successful
			$this->session->set_flashdata('success', 'Data inserted successfully.');
		} else {
			// Data insertion failed
			$this->session->set_flashdata('error', 'Failed to insert data.');
		}

		// Redirect to a suitable page after the form submission
		redirect('admin_table');
	}

}

public function admin_table() 
{
if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	$id=1;
// Fetch the data using the fetch_all() function
$adminUsers = $this->Users_model->fetch_all($id);
 // Pass the fetched data to the view
 $data['adminUsers'] = $adminUsers;
	// Load the view to display the table with data
	$this->load->view('backend/include/header');
	$this->load->view('backend/include/nav');
	$this->load->view('backend/page/admin_table', $data);
	$this->load->view('backend/include/footer');
}




public function add_client() {
	$this->load->library('form_validation');
	$this->form_validation->set_rules('client_fullname', 'Full Name', 'required');
	$this->form_validation->set_rules('client_address', 'Address', 'required');
	$this->form_validation->set_rules('sex', 'Sex', 'required');
	$this->form_validation->set_rules('client_email', 'Email', 'required|valid_email');
	$this->form_validation->set_rules('password', 'Password', 'required');
	$this->form_validation->set_rules('client_status', 'Status', 'required');
	$this->form_validation->set_rules('date_added', 'Date Added', 'required');
	
	if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	if ($this->form_validation->run() === FALSE) {
		// Validation failed, redirect back to the form
		$this->load->view('backend/include/header');
		$this->load->view('backend/include/nav');
		$this->load->view('backend/page/add_client');
		$this->load->view('backend/include/footer');
	} else {
		// Validation succeeded, proceed with data insertion
		$data = array(
			'client_fullname' => $this->input->post('client_fullname'),
			'client_address' => $this->input->post('client_address'),
			'sex' => $this->input->post('sex'),
			'phone_number' => $this->input->post('phone_number'),
			'client_email' => $this->input->post('client_email'),
			'password' => $this->input->post('password'),
			'client_status' => $this->input->post('client_status'),
			'date_added' => $this->input->post('date_added'),	
		);

		$result = $this->Users_model->insert_dataclient($data);

		if ($result) {
			// Data insertion was successful
			$this->session->set_flashdata('success', 'Data inserted successfully.');
		} else {
			// Data insertion failed
			$this->session->set_flashdata('error', 'Failed to insert data.');
		}


		// Redirect to a suitable page after the form submission
		redirect('client_table');
	}

}
public function client_table() 
{
if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	$id=1;
// Fetch the data using the fetch_all() function
$clientUsers = $this->Users_model->fetch_allclient($id);
 // Pass the fetched data to the view
 $data['clientUsers'] = $clientUsers;
	// Load the view to display the table with data
	$this->load->view('backend/include/header');
	$this->load->view('backend/include/nav');
	$this->load->view('backend/page/client_table', $data);
	$this->load->view('backend/include/footer');
}


public function add_pet() {
	$this->load->library('form_validation');
	$this->form_validation->set_rules('pet_name', 'Name', 'required');
	$this->form_validation->set_rules('pet_breed', 'Breed', 'required|valid_email');
	$this->form_validation->set_rules('pet_age', 'Age', 'required');
	$this->form_validation->set_rules('pet_gender', 'Gender', 'required');
	$this->form_validation->set_rules('pet_species', 'Species', 'required|valid_email');
	$this->form_validation->set_rules('pet_color', 'Color', 'required');
	

	if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	if ($this->form_validation->run() === FALSE) {
		// Validation failed, redirect back to the form
		$this->load->view('backend/include/header');
		$this->load->view('backend/include/nav');
		$this->load->view('backend/page/add_pet');
		$this->load->view('backend/include/footer');
	} else {
		// Validation succeeded, proceed with data insertion
		$data = array(
			
			'pet_name' => $this->input->post('pet_name'),
			'pet_breed' => $this->input->post('pet_breed'),
			'pet_age' => $this->input->post('pet_age'),
			'pet_gender' => $this->input->post('pet_gender'),
			'pet_species' => $this->input->post('pet_species'),
			'pet_color' => $this->input->post('pet_color'),
			
		);

		$result = $this->Users_model->insert_datapet($data);

		if ($result) {
			// Data insertion was successful
			$this->session->set_flashdata('success', 'Data inserted successfully.');
		} else {
			// Data insertion failed
			$this->session->set_flashdata('error', 'Failed to insert data.');
		}

		// Redirect to a suitable page after the form submission
		redirect('pet_table');
	}

}

public function pet_table() 
{
if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	$id=1;
// Fetch the data using the fetch_all() function
$petUsers = $this->Users_model->fetch_allpet($id);
 // Pass the fetched data to the view
 $data['petUsers'] = $petUsers;
	// Load the view to display the table with data
	$this->load->view('backend/include/header');
	$this->load->view('backend/include/nav');
	$this->load->view('backend/page/pet_table', $data);
	$this->load->view('backend/include/footer');
}







public function regform_trial() {
	$this->load->library('form_validation');
	$this->form_validation->set_rules('fullname', 'Full Name', 'required');
	$this->form_validation->set_rules('address', 'Address', 'required');
	$this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	$this->form_validation->set_rules('password', 'Password', 'required');
	

	if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	if ($this->form_validation->run() === FALSE) {
		// Validation failed, redirect back to the form
		$this->load->view('backend/include/header');
		$this->load->view('backend/include/nav');
		$this->load->view('backend/page/reg_form_trial');
		$this->load->view('backend/include/footer');
	} else {
		// Validation succeeded, proceed with data insertion
		$data = array(
			'fullname' => $this->input->post('fullname'),
			'address' => $this->input->post('address'),
			'phone_number' => $this->input->post('phone_number'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			
		);

		$result = $this->User_model->insert_data($data);

		if ($result) {
			// Data insertion was successful
			$this->session->set_flashdata('success', 'Data inserted successfully.');
		} else {
			// Data insertion failed
			$this->session->set_flashdata('error', 'Failed to insert data.');
		}

		// Redirect to a suitable page after the form submission
		redirect('regform_trial');
	}

}





public function reg_form_trial()
	{
		if ($this->session->has_userdata('user_id') == TRUE) {
		$data['website_info'] = $this->Users_model->fetch_all("website_info");	
		$this->load->view('backend/include/header', $data);
		$this->load->view('backend/page/reg_form_trial');
		$this->load->view('backend/include/nav');
		$this->load->view('backend/include/footer');
		}
	}




	public function logout()
	{
		session_destroy();
		redirect('admin');
	}

	public function settings(){
		$data['website_info'] = $this->Users_model->fetch_all("website_info");	
		$this->load->view('backend/page/settings',$data);	
		$this->load->view('backend/include/header', $data);
		$this->load->view('backend/include/nav');
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

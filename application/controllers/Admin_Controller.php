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
public function add_appointments() {
	$this->load->library('form_validation');
	$this->form_validation->set_rules('appointmentName', 'NameofOwner', 'required');
	$this->form_validation->set_rules('appointmentPetName', 'NameofPet', 'required');
	$this->form_validation->set_rules('vaccine', 'TypeofVaccine', 'required');
	$this->form_validation->set_rules('appointmentDateTime', 'DateandTime', 'required');
	$this->form_validation->set_rules('appointmentContactNumber', 'ContactNumber', 'required');
	
	if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	if ($this->form_validation->run() === FALSE) {
		// Validation failed, redirect back to the form
		$this->load->view('backend/include/header');
		$this->load->view('backend/include/nav');
		$this->load->view('backend/page/add_appointments');
		$this->load->view('backend/include/footer');
	} else {
		// Validation succeeded, proceed with data insertion
		$data = array(
			'appointmentName' => $this->input->post('appointmentName'),
			'appointmentPetName' => $this->input->post('appointmentPetName'),
			'vaccine' => $this->input->post('vaccine'),
			'appointmentDate' => $this->input->post('appointmentDate'),
			'appointmentContactNumber' => $this->input->post('appointmentContactNumber'),
	
		);

		$result = $this->Users_model->insert_dataappointments($data);

		if ($result) {
			// Data insertion was successful
			$this->session->set_flashdata('success', 'Data inserted successfully.');
		} else {
			// Data insertion failed
			$this->session->set_flashdata('error', 'Failed to insert data.');
		}


		// Redirect to a suitable page after the form submission
		redirect('appointment_list');
	}

}

public function appointment_list() 
{
if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	$id=1;
// Fetch the data using the fetch_all() function
$appointmentUsers = $this->Users_model->fetch_allappointments($id);
 // Pass the fetched data to the view
 $data['appointmentUsers'] = $appointmentUsers;
	// Load the view to display the table with data
	$this->load->view('backend/include/header');
	$this->load->view('backend/include/nav');
	$this->load->view('backend/page/appointment_list', $data);
	$this->load->view('backend/include/footer');
}



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


public function add_employee() {
	$this->load->library('form_validation');
	$this->form_validation->set_rules('employeeAdded', 'Date Added', 'required');
	$this->form_validation->set_rules('employeeName', 'Full Name', 'required');
	$this->form_validation->set_rules('employeePosition', 'Position', 'required');
	$this->form_validation->set_rules('employeeAddress', 'Address', 'required');
	$this->form_validation->set_rules('employeeAge', 'Age', 'required');
	$this->form_validation->set_rules('employeeSex', 'Sex', 'required');
	$this->form_validation->set_rules('employeePhoneNum', 'Phone Number', 'required');
	$this->form_validation->set_rules('employeeStatus', 'Status', 'required');
	
	
	if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	if ($this->form_validation->run() === FALSE) {
		// Validation failed, redirect back to the form
		$this->load->view('backend/include/header');
		$this->load->view('backend/include/nav');
		$this->load->view('backend/page/add_employee');
		$this->load->view('backend/include/footer');
	} else {
		// Validation succeeded, proceed with data insertion
		$data = array(
			'employeeAdded' => $this->input->post('employeeAdded'),
			'employeeName' => $this->input->post('employeeName'),
			'employeePosition' => $this->input->post('employeePosition'),
			'employeeAddress' => $this->input->post('employeeAddress'),
			'employeeAge' => $this->input->post('employeeAge'),
			'employeeSex' => $this->input->post('employeeSex'),
			'employeePhoneNum' => $this->input->post('employeePhoneNum'),
			'employeeStatus' => $this->input->post('employeeStatus'),
				
		);

		$result = $this->Users_model->insert_dataemployee($data);

		if ($result) {
			// Data insertion was successful
			$this->session->set_flashdata('success', 'Data inserted successfully.');
		} else {
			// Data insertion failed
			$this->session->set_flashdata('error', 'Failed to insert data.');
		}


		// Redirect to a suitable page after the form submission
		redirect('employee_table');
	}

}
public function employee_table() 
{
if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	$id=1;
// Fetch the data using the fetch_all() function
$employeeUsers = $this->Users_model->fetch_allemployee($id);
 // Pass the fetched data to the view
 $data['employeeUsers'] = $employeeUsers;
	// Load the view to display the table with data
	$this->load->view('backend/include/header');
	$this->load->view('backend/include/nav');
	$this->load->view('backend/page/employee_table', $data);
	$this->load->view('backend/include/footer');
}



public function purchase_table() {
	$this->load->library('form_validation');
	$this->form_validation->set_rules('date_purchased', 'Date Purchased', 'required');
	$this->form_validation->set_rules('quantity_purchased', 'Quantity', 'required');
	$this->form_validation->set_rules('total_cost', 'Cost', 'required');
	
	
	if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	if ($this->form_validation->run() === FALSE) {
		// Validation failed, redirect back to the form
		$this->load->view('backend/include/header');
		$this->load->view('backend/include/nav');
		$this->load->view('backend/page/purchase_table');
		$this->load->view('backend/include/footer');
	} else {
		// Validation succeeded, proceed with data insertion
		$data = array(
			'date_purchased' => $this->input->post('date_purchased'),
			'quantity_purchased' => $this->input->post('quantity_purchased'),
			'total_cost' => $this->input->post('total_cost'),
				
		);

		$result = $this->Users_model->insert_datapurchase($data);

		if ($result) {
			// Data insertion was successful
			$this->session->set_flashdata('success', 'Data inserted successfully.');
		} else {
			// Data insertion failed
			$this->session->set_flashdata('error', 'Failed to insert data.');
		}


		// Redirect to a suitable page after the form submission
		redirect('purchase_table');
	}

}



public function add_product() {
	$this->load->library('form_validation');
	$this->form_validation->set_rules('dateAdded', 'Date Added', 'required');
	$this->form_validation->set_rules('productName', 'Product Name', 'required');
	$this->form_validation->set_rules('cost', 'Cost', 'required');
	$this->form_validation->set_rules('quantity', 'Quantity', 'required');
	$this->form_validation->set_rules('category', 'Category', 'required');
	
	
	if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	if ($this->form_validation->run() === FALSE) {
		// Validation failed, redirect back to the form
		$this->load->view('backend/include/header');
		$this->load->view('backend/include/nav');
		$this->load->view('backend/page/add_product');
		$this->load->view('backend/include/footer');
	} else {
		// Validation succeeded, proceed with data insertion
		$data = array(
			'dateAdded' => $this->input->post('dateAdded'),
			'productName' => $this->input->post('productName'),
			'cost' => $this->input->post('cost'),
			'quantity' => $this->input->post('quantity'),
			'category' => $this->input->post('category'),
				
		);

		$result = $this->Users_model->insert_dataproduct($data);

		if ($result) {
			// Data insertion was successful
			$this->session->set_flashdata('success', 'Data inserted successfully.');
		} else {
			// Data insertion failed
			$this->session->set_flashdata('error', 'Failed to insert data.');
		}


		// Redirect to a suitable page after the form submission
		redirect('product_table');
	}

}
public function product_table() 
{
if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	$id=1;
	
$product_id = $this->input->get('product_id');

// Use $user_id as needed in your controller logic

// Optionally, you can pass it to the view
$data['product_id'] = $product_id;

 //Fetch the data using the fetch_all() function
$productUsers = $this->Users_model->fetch_allproduct($id);
 
 $data['productUsers'] = $productUsers;
	
	$this->load->view('backend/include/header');
	$this->load->view('backend/include/nav');
	$this->load->view('backend/page/product_table', $data);
	$this->load->view('backend/include/footer');
}



// public function attendance() {
// 	$this->load->library('form_validation');
// 	$this->form_validation->set_rules('numOfDaysPresent', 'Days Present', 'required');
// 	$this->form_validation->set_rules('numOfDaysAbsent', 'Days Absent', 'required');
	
	
// 	if (!$this->session->has_userdata('user_id')) {
// 		redirect('admin'); // Redirect to login page if not logged in
// 	}

// 	if ($this->form_validation->run() === FALSE) {
// 		// Validation failed, redirect back to the form
// 		$this->load->view('backend/include/header');
// 		$this->load->view('backend/include/nav');
// 		$this->load->view('backend/page/attendance');
// 		$this->load->view('backend/include/footer');
// 	} else {
// 		// Validation succeeded, proceed with data insertion
// 		$data = array(
// 			'numOfDaysPresent' => $this->input->post('numOfDaysPresent'),
// 			'numOfDaysAbsent' => $this->input->post('numOfDaysAbsent'),
		
				
// 		);

// 		$result = $this->Users_model->insert_dataattendance($data);

// 		if ($result) {
// 			// Data insertion was successful
// 			$this->session->set_flashdata('success', 'Data inserted successfully.');
// 		} else {
// 			// Data insertion failed
// 			$this->session->set_flashdata('error', 'Failed to insert data.');
// 		}


// 		// Redirect to a suitable page after the form submission
// 		redirect('attendance_table');
// 	}

// }


public function attendance() 
{
if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	$id=1;
// Fetch the data using the fetch_all() function
$attendance = $this->Users_model->fetch_allattendance($id);
 // Pass the fetched data to the view
 $data['attendance'] = $attendance;
	// Load the view to display the table with data
	$this->load->view('backend/include/header');
	$this->load->view('backend/include/nav');
	$this->load->view('backend/page/attendance', $data);
	$this->load->view('backend/include/footer');
}


public function attendance_table() 
{
if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	$id=1;
// Fetch the data using the fetch_all() function
$attendance_table = $this->Users_model->fetch_allattendance_table($id);
 // Pass the fetched data to the view
 $data['attendance_table'] = $attendance_table;
	// Load the view to display the table with data
	$this->load->view('backend/include/header');
	$this->load->view('backend/include/nav');
	$this->load->view('backend/page/attendance_table', $data);
	$this->load->view('backend/include/footer');
}

// public function attendance_table() 
// {
// if (!$this->session->has_userdata('user_id')) {
// 		redirect('admin'); // Redirect to login page if not logged in
// 	}

// 	$id=1;
	
// $employeeID = $this->input->get('employeeID');

// // Use $user_id as needed in your controller logic

// // Optionally, you can pass it to the view
// $data['employeeID'] = $employeeID;

//  //Fetch the data using the fetch_all() function
// $employeeID = $this->Users_model->fetch_allattendance($id);
 
//  $data['attendanceUsers'] = $attendanceUsers;
	
// 	$this->load->view('backend/include/header');
// 	$this->load->view('backend/include/nav');
// 	$this->load->view('backend/page/attendance_table', $data);
// 	$this->load->view('backend/include/footer');
// }








public function petOwner() 
{
if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	$id=1;
// Fetch the data using the fetch_all() function
$petOwner = $this->Users_model->fetch_allpetOwner($id);
 // Pass the fetched data to the view
 $data['petOwner'] = $petOwner;
	// Load the view to display the table with data
	$this->load->view('backend/include/header');
	$this->load->view('backend/include/nav');
	$this->load->view('backend/page/petOwner', $data);
	$this->load->view('backend/include/footer');
}





public function add_pet() {
	$this->load->library('form_validation');
	//	carga ang id number ni client-user pra ma trace kinsay tag iya sa pet
	
	// $this->form_validation->set_rules('client_id', 'Client', 'required');
	$this->form_validation->set_rules('pet_name', 'Name', 'required');
	$this->form_validation->set_rules('pet_breed', 'Breed', 'required');
	$this->form_validation->set_rules('pet_age', 'Age', 'required');
	$this->form_validation->set_rules('pet_gender', 'Gender', 'required');
	$this->form_validation->set_rules('pet_species', 'Species', 'required');
	$this->form_validation->set_rules('pet_color', 'Color', 'required');
	

	if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	if ($this->form_validation->run() === FALSE) {
		// Validation failed, redirect back to the form
		$client_id = $this->input->get('client_id');

        // Use $user_id as needed in your controller logic

        // Optionally, you can pass it to the view
        $data['client_id'] = $client_id;
        // $this->load->view('your_view', $data);
		$this->load->view('backend/include/header');
		$this->load->view('backend/include/nav');
		$this->load->view('backend/page/add_pet',$data);
		$this->load->view('backend/include/footer');
	} else {
		// Validation succeeded, proceed with data insertion
		$data = array(
			// 'client_id' => $this->input->post('client_id'),
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
	
$client_id = $this->input->get('client_id');

// Use $user_id as needed in your controller logic

// Optionally, you can pass it to the view
$data['client_id'] = $client_id;

 //Fetch the data using the fetch_all() function
$petUsers = $this->Users_model->fetch_allpet($id);
 
 $data['petUsers'] = $petUsers;
	
	$this->load->view('backend/include/header');
	$this->load->view('backend/include/nav');
	$this->load->view('backend/page/pet_table', $data);
	$this->load->view('backend/include/footer');
}



public function reports() 
{
if (!$this->session->has_userdata('user_id')) {
		redirect('admin'); // Redirect to login page if not logged in
	}

	$id=1;
// Fetch the data using the fetch_all() function
$reports = $this->Users_model->fetch_allreports($id);
 // Pass the fetched data to the view
 $data['reports'] = $reports;
	// Load the view to display the table with data
	$this->load->view('backend/include/header');
	$this->load->view('backend/include/nav');
	$this->load->view('backend/page/reports', $data);
	$this->load->view('backend/include/footer');
}


public function profile(){
	$data['website_info'] = $this->Users_model->fetch_all("website_info");		
	$this->load->view('backend/include/header',$data);
	$this->load->view('backend/include/nav');
	$this->load->view('backend/page/profile',$data);

}






// public function vaccination_report()
// 	{
// 		if ($this->session->has_userdata('user_id') == TRUE) {
// 		$data['website_info'] = $this->Users_model->fetch_all("website_info");	
// 		$this->load->view('backend/include/header', $data);
// 		$this->load->view('backend/page/vaccination_report');
// 		$this->load->view('backend/include/nav');
// 		$this->load->view('backend/include/footer');
// 		}
// 	}




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

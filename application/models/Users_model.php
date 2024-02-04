<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function __construct(){
		parent::__construct();

	}

		function authenticate($email){
			$query = $this->db->query("SELECT * FROM `admin` where email='$email' " );
			if ($query->num_rows() > 0) {
				return $query->result();
			}
				return 0;

		}
		function authenticateclient($email){
			$query = $this->db->query("SELECT * FROM `client_users` where client_email='$email' " );
			if ($query->num_rows() > 0) {
				return $query->result();
			}
				return 0;

		}
		function get_admin_logged_info($id){
			$query = $this->db->query("SELECT *, resident_info.firstname,resident_info.lastname,resident_info.contact_no FROM 'admin_users' inner join resident_info.info' on admin_users.res_id=resident_info.id where admin_users.admin_id='$id'");
			if ($query->num_rows() >0){
				return $query->result();
			} 
			return 0;
	

		//Display  Account here
			
		}

		function fetch_all($id){

			$query = $this->db->query("SELECT * FROM `admin_users`   " );
			return $query->result();

		}

		function fetch_allclient($id){

			$query = $this->db->query("SELECT * FROM `client_users`   " );
			return $query->result();

		}
		function fetch_allpetOwner($id){

			$query = $this->db->query("SELECT * FROM `client_users`   " );
			return $query->result();

		}
		function fetch_allpet($id){

			$query = $this->db->query("SELECT * FROM `pet_users`   " );
			return $query->result();

		}
		function fetch_allreports($id){

			$query = $this->db->query("SELECT * FROM `reports`   " );
			return $query->result();

		}
		function fetch_allappointments($id){

			$query = $this->db->query("SELECT * FROM `appointments`   " );
			return $query->result();

		}
		// function fetch_allprofile($id){

		// 	$query = $this->db->query("SELECT * FROM `profile`   " );
		// 	return $query->result();

		// }


		function get_info($id){
			$query = $this->db->select('*')
								->from('admin_users')
								->where('admin_id', $id)
								->get();

			return $query->result();

		}

		function fetch_info()
		{
			$query 	= $this->db->query("SELECT * FROM `system_info` " );

			return $query->result();
		}



		//Add Account here

		function insert_data($data)
		{
			$this->db->insert('admin_users', $data);
			$afftectedRows = $this->db->affected_rows();
	        if ($afftectedRows > 0) {
	            return TRUE;
	        } else {
	            return FALSE;
	        }
		}
		function insert_dataappointments($data)
		{
			$this->db->insert('appointments', $data);
			$afftectedRows = $this->db->affected_rows();
	        if ($afftectedRows > 0) {
	            return TRUE;
	        } else {
	            return FALSE;
	        }
		}

		function insert_dataclient($data)
		{
			$this->db->insert('client_users', $data);
			$afftectedRows = $this->db->affected_rows();
	        if ($afftectedRows > 0) {
	            return TRUE;
	        } else {
	            return FALSE;
	        }
		}

		// function insert_dataowner($data)
		// {
		// 	$this->db->insert('client_users', $data);
		// 	$afftectedRows = $this->db->affected_rows();
	    //     if ($afftectedRows > 0) {
	    //         return TRUE;
	    //     } else {
	    //         return FALSE;
	    //     }
		// }

		function insert_datapet($data)
		{
			$this->db->insert('pet_users', $data);
			$afftectedRows = $this->db->affected_rows();
	        if ($afftectedRows > 0) {
	            return TRUE;
	        } else {
	            return FALSE;
	        }
		}



		function set_update($table,$id,$data)
		{

			$this->db->set($data);
			$this->db->where('id', $id);
			$this->db->update('system_info');
			$afftectedRows = $this->db->affected_rows();
	        if ($afftectedRows > 0) {
	            return TRUE;
	        } else {
	            return FALSE;
	        }

		}



}

?>

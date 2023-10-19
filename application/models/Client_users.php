<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_users extends CI_Model {

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
		function get_admin_logged_info($id){
			$query = $this->db->query("SELECT *, resident_info.firstname,resident_info.lastname,resident_info.contact_no FROM 'admin_users' inner join resident_info.info' on admin_users.res_id=resident_info.id where admin_users.admin_id='$id'");
			if ($query->num_rows() >0){
				return $query->result();
			} 
			return 0;
		
			
		}

		function fetch_all($id){

			$query = $this->db->query("SELECT * FROM `client_users`   " );
			return $query->result();

		}
		function get_info($id){
			$query = $this->db->select('*')
								->from('client_users')
								->where('client_id', $id)
								->get();

			return $query->result();

		}

		function fetch_info()
		{
			$query 	= $this->db->query("SELECT * FROM `system_info` " );

			return $query->result();
		}

		// function fetch_site_info()
		// {
		// 	$query 	= $this->db->query("SELECT * FROM `website_info` " );

		// 	return $query->result();
		// }


		function insert_data($data)
		{
			$this->db->insert('client_users', $data);
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

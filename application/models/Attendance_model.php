<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function updateAttendance($employeeID, $status) {
        // Update the attendance for the specified employee with the provided status
        $data = array(
            'status' => $status
        );
        $this->db->where('employeeID', $employeeID);
        return $this->db->update('attendance_table', $data); // Update existing record
    }


    function fetch_allattendance($id){

        $query = $this->db->query("SELECT * FROM `employee_table`   " );
        return $query->result();

    }

    function fetch_allattendance_table($id){

        $query = $this->db->query("SELECT * FROM `employee_table`   " );
        return $query->result();

    }
}
?>

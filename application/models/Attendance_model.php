<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function fetch_allattendance($id){
        // Fetch all attendance data for the specified user ID from the employee table
        $query = $this->db->query("SELECT * FROM `employee_table` WHERE `user_id` = $id");
        return $query->result();
    }

    public function fetch_allattendance_table($id){
        // Fetch all attendance data for the specified user ID from the attendance table
        $query = $this->db->query("SELECT * FROM `attendance_table` WHERE `user_id` = $id");
        return $query->result();
    }

    public function markPresent($employeeID) {
        // Update the attendance for the specified employee to mark present
        $data = array(
            'status' => 'Present'
        );
        $this->db->where('employeeID', $employeeID);
        return $this->db->update('attendance_table', $data); // Update existing record
    }

    public function markAbsent($employeeID) {
        // Update the attendance for the specified employee to mark absent
        $data = array(
            'status' => 'Absent'
        );
        $this->db->where('employeeID', $employeeID);
        return $this->db->update('attendance_table', $data); // Update existing record
    } 

    public function getAttendanceData($employeeID) {
        // Fetch the attendance data for the specified employee
        $this->db->select('COUNT(CASE WHEN status = "Present" THEN 1 END) AS daysPresent');
        $this->db->select('COUNT(CASE WHEN status = "Absent" THEN 1 END) AS daysAbsent');
        $this->db->where('employeeID', $employeeID);
        $query = $this->db->get('attendance_table');
        return $query->row_array();
    }
}
?>

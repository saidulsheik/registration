<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class Welcome_model extends CI_Model
{
	// fetch division from division table
	public function getAllDivision(){
		$this->db->select('DivisionID, DivisionName');
		$this->db->from('division');
		$this->db->order_by('DivisionName', 'ASC');
		$query = $this->db->get(); 
		return $query->result();
	}

	// fetch exam from exam table
	public function getAllExam(){
		$this->db->select('ExamId, ExamName');
		$this->db->from('exam');
		//$this->db->order_by('ExamName', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	// fetch university from university table
	public function getAllUniversity(){
		$this->db->select('UniversityId, UniversityName');
		$this->db->from('university');
		$this->db->order_by('UniversityName', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}
	
	// fetch board from board table
	public function getAllBoard(){
		$this->db->select('BoardId, BoardName');
		$this->db->from('board');
		$this->db->order_by('BoardName', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	// fetch  All district by division id 
	public function getAllDistrictByDivisionId($DivisionID){
		$this->db->select('DistrictId, DistrictName');
		$this->db->from('district');
		$this->db->where('DivisionID', $DivisionID);
		$this->db->order_by('DistrictName', 'ASC');
		$query = $this->db->get(); 
		$output='<option value="">Select District</option>';
		foreach ($query->result() as $row) {
			$output.='<option value="'. $row->DistrictId.'">'.$row->DistrictName.'</option>';
		}
		return $output;
	}

	// fetch  All upazila by district id 
	public function getAllUpazilaByDistrictId($DistrictID){
		$this->db->select('UpazilaId, UpazilaName');
		$this->db->from('upazila');
		$this->db->where('DistrictID', $DistrictID);
		$this->db->order_by('UpazilaName', 'ASC');
		$query = $this->db->get(); 
		$output='<option value="">Select Upazila</option>';
		foreach ($query->result() as $row) {
			$output.='<option value="'. $row->UpazilaId.'">'.$row->UpazilaName.'</option>';
		}
		return $output;
	}

}





?>
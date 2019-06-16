<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->model('welcome_model','wm');
    }
	
	public function index(){
		$data['divisions']=$this->wm->getAllDivision();
		$data['exams']=$this->wm->getAllExam();
		$data['universities']=$this->wm->getAllUniversity();
		$data['boards']=$this->wm->getAllBoard();
		$this->load->view('registration_form', $data);
	}
	public function getAllDistrictByDivisionId(){
		if($this->input->post('DivisionID')){
			$DivisionID=$this->input->post('DivisionID');
			echo $this->wm->getAllDistrictByDivisionId($DivisionID);
		}
	}

	public function getAllUpazilaByDistrictId(){
		if($this->input->post('DistrictID')){
			$DistrictID=$this->input->post('DistrictID');
			echo $this->wm->getAllUpazilaByDistrictId($DistrictID);
		}
	}
}

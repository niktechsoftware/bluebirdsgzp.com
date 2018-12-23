<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function aboutschool(){
		$this->load->view('aboutschool');
	}
	public function vissionmisshion(){
		$this->load->view('vissionmisshion');
	}
	public function directordesk(){
		$this->load->view("directordesk");
	}
	public function genInstruction(){
		$this->load->view("genInstruction");
	}
	public function academicSession(){
		$this->load->view("academicSession");
	}
	public function admissionpro(){
		$this->load->view("admissionpro");
	}
	public function transferCertificate(){
		$this->load->view("transferCertificate");
	}
	public function curriculum(){
		$this->load->view("curriculum");
	}
	public function feeDetails(){
		$this->load->view("feeDetails");
	}
	public function cce(){
		$this->load->view("cce");
	}
	public function classRoom(){
		$this->load->view("classRoom");
	}
	public function schoolLibrary(){
		$this->load->view("schoolLibrary");
	}
	public function schoolBuilding(){
		$this->load->view("schoolBuilding");
	}
	
	public function gameGround(){
		$this->load->view("gameGround");
	}
	public function annaulphoto(){
		$this->load->view("annaulphoto");
	}
	
	public function sportphoto(){
		$this->load->view("sportphoto");
	}
	public function otherphoto(){
		$this->load->view("otherphoto");
	}
	public function facilities(){
		$this->load->view("facilities");
	}
	public function building(){
		$this->load->view("building");
	}
	public function landManagement(){
		$this->load->view("landManagement");
	}
	
	
	
	
	public function financial(){
		$this->load->view("financial");
	}
	public function feeStructure(){
		$this->load->view("feeStructure");
	}
	public function infrastructure(){
		$this->load->view("infrastructure");
	}
	public function enroll(){
		$this->load->view("enroll");
	}
	public function smcMember(){
		$this->load->view("smcMember");
	}
	public function grievance(){
		$this->load->view("grievance");
	}
	
	
	
	public function transportFacility(){
		$this->load->view("transportFacility");
	}
	public function affiliation(){
		$this->load->view("affiliation");
	}
	public function nocDetail(){
		$this->load->view("nocDetail");
	}
	public function nof(){
		$this->load->view("nof");
	}
	public function modeOfPayment(){
		$this->load->view("modeOfPayment");
	}
	public function contactInfo(){
		$this->load->view("contactInfo");
	}
	public function reachUs(){
		$this->load->view("reachUs");
	}
	
	public function enquiry(){
		$this->load->view("enquiry");
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
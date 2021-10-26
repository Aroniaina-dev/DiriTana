<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	public function index(){
		$this->load->model('Employee');
		$data["liste"]=$this->Employee->allEmployee();
		$this->load->view('Employee',$data);
	}

	public function insertEmpl(){
		$this->load->view('InsererEmpl');
	}

}

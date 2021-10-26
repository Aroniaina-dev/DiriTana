<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$this->load->model('Employee');
		$data["sary"]=$this->Employee->randSary();
		$data["liste"]=$this->Employee->allEmployee();
		$data["nbr"]=$this->Employee->nbrEmpl();
		$this->load->view('Acceuil',$data);
	}
	
	public function advisor(){
		$this->load->view('Advisor');
	}
	public function bolg(){
		$this->load->view('Bolg');
	}
	public function contact(){
		$this->load->view('Contact');
	}	
	public function feature(){
		$this->load->view('Feature');
	}
	public function review(){
		$this->load->view('Review');
	}
	public function service(){
		$this->load->view('Service');
	}
	public function single(){
		$this->load->view('Single');
	}
	public function Typographie(){
		$this->load->view('Typographie');
	}
	public function Post(){
		$this->load->view('Post');
	}
	public function Recherche(){
		$this->load->model('Cooperative');
		$this->load->model('Employee');
		$type = $this->input->post('type');
		$motAChercher = $this->input->post('mot');
		$data["rechercheEmpl"]=$this->Employee->rechercherEmployee($motAChercher);
		$data["rechercheCoop"]=$this->Cooperative->rechercherCooperative($motAChercher);
		$lien = null;
		if($type == 'All type'){
			$lien = 'PageRecherche';
		}
		elseif($type == 'Employee'){
			$lien = 'RechercheEmployee';
		}
		elseif($type == 'Cooperative'){
			$lien = 'RechercheCoop';
		}

		$this->load->view($lien,$data);
	}

	public function RechercheFronts(){
		$this->load->model('Cooperative');
		$this->load->model('Employee');
		$type = $this->input->post('type');
		$motAChercher = $this->input->post('mot');
		// var_dump($type);
		// var_dump($motAChercher);
		$data["rechercheEmpl"]=$this->Employee->rechercherEmployee($motAChercher);
		$data["rechercheCoop"]=$this->Cooperative->rechercherCooperative($motAChercher);
		$lien = null;
		if($type == 'All type'){
			$lien = 'RechercheFront';
		}
		elseif($type == 'Employee'){
			$lien = 'RechercheEmplFront';
			// var_dump($motAChercher);
		}
		elseif($type == 'Cooperative'){
			$lien = 'RechercheCoopFront';
			// var_dump($motAChercher);s
		}
		// var_dump($data);
		$this->load->view($lien,$data);
	}

	public function versInfoEmplFront(){
		$this->load->model('Employee');
		$id = $this->input->post('idEmployee');
		$data["empl"]=$this->Employee->oneEmployee($id);
		var_dump($data);
		$this->load->view('infoEmplFront',$data);
	}

	public function versInfoCoopFront(){
		$this->load->model('Cooperative');
		$id = $this->input->post('idCooperative');
		$data["coop"]=$this->Cooperative->oneCooperative($this->input->post('idCooperative'));
		// var_dump($id);
		$this->load->view('infoCoopFront',$data);
	}
}

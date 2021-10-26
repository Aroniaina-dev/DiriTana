<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cooperative extends CI_Controller {
	public function index(){
		$this->load->model('Cooperative');
		$data["liste"]=$this->Cooperative->allCooperative();
		$this->load->view('Cooperative',$data);
	}

	public function employee(){
		$this->load->model('Employee');
		$data["listeEmpl"]=$this->Employee->allEmployee();
		$this->load->view('Teste',$data);
	}

	public function updateCoop(){
		$this->load->model('Cooperative');
		$idCooperative = $this->input->post('idCooperative');
		$nomCooperative = $this->input->post('nomCooperative');
		$addrescooperative = $this->input->post('addrescooperative');
		$telephonecooperative = $this->input->post('telephonecooperative');
		$mailcooperative = $this->input->post('mailcooperative');
		$activitePrincipale = $this->input->post('activitePrincipale');
		$ressortTerritorial = $this->input->post('ressortTerritorial');
		$mandat = $this->input->post('mandat');
		$dernierPV = $this->input->post('dernierPV');
		$nomPresident = $this->input->post('nomPresident');
		$prenomPresident = $this->input->post('prenomPresident');
		$data["coopModif"]=$this->Cooperative->updateCooperative($idCooperative, $nomCooperative, $addrescooperative,$telephonecooperative,$mailcooperative,$activitePrincipale,$ressortTerritorial,$mandat,$dernierPV,$nomPresident,$prenomPresident);
		// var_dump($data);
		$this->load->view('Cooperative');
	}

	public function insertCoop(){
		$this->load->view('InsererCoop');
	}
	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index(){
		$this->load->view('HomeLogin');
	}

    public function aboutlogin(){
		$this->load->view('AboutLogin');
	}

    public function servicelogin(){
		$this->load->view('ServiceLogin');
	}

    public function connex(){
		$this->load->view('Login');
	}

	public function createCount(){
		$this->load->view('createCount');
	}

	public function Dissoute(){
		$this->load->model('Dissoute');
		$data["diss"]=$this->Dissoute->allDissoute();
		$this->load->view('pageDissoute',$data);
	}

	public function DissouteEmpl(){
		$this->load->model('Dissoute');
		$data["diss"]=$this->Dissoute->allDissouteEmpl();
		$this->load->view('pageDissouteEmpl',$data);
	}

	public function register(){
		$this->load->model('LoginEmployees');
		$nom = $this->input->post('nom');
		$num = $this->input->post('num');
		$pass = $this->input->post('pass');
		$data=$this->LoginEmployees->insererLogin($nom, $num, $pass);
		$this->load->view('AcceuilBack',$data);
	}

	public function Cooperative(){
		$this->load->model('Cooperative');
		$anarana = $this->input->post('groupe');
		// $data['couleur']= $this->Cooperative->allColor();
		// $data['daty']= $this->Cooperative->getToday();
		$data['changer'] = $this->Cooperative->changeColor();
		if ($anarana == null) {
			$data["liste"]=$this->Cooperative->allCooperative();
		}
		else {
			$data["liste"]=$this->Cooperative->groupBy($anarana);
		}
		$this->load->view('Cooperative',$data);
	}

	public function seconnecter(){
		$this->load->model('LoginEmployees');
		$teste=$this->LoginEmployees->valideConnexion();
        $pass = $this->input->post('pass');
		$soratra = null;
			if($pass == $teste['mdp']){
				$soratra = "AcceuilBack";
			}
			else{
				$soratra = "HomeLogin";
			}
		$this->load->view($soratra);	
	}

	public function retour(){
		$this->load->view('AcceuilBack');
	}

	public function versInfoEmpl(){
		$this->load->model('Employee');
		$id = $this->input->post('idEmployee');
		$data["empl"]=$this->Employee->oneEmployee($this->input->post('idEmployee'));
		$this->load->view('infoEmpl',$data);
	}

	public function versInfoEmplFront(){
		$this->load->model('Employee');
		$data["empl"]=$this->Employee->oneEmployee($this->input->post('idEmployee'));
		$this->load->view('infoEmplFront',$data);
	}

	public function versInfoCoop(){
		$this->load->model('Cooperative');
		$data["coop"]=$this->Cooperative->oneCooperative($this->input->post('idCooperative'));
		$this->load->view('infoCoop',$data);
	}

	public function versInfoCoopFront(){
		$this->load->model('Cooperative');
		$id = $this->input->post('idCooperative');
		$data["coop"]=$this->Cooperative->oneCooperative($this->input->post('idCooperative'));
		$this->load->view('infoCoopFront',$data);
	}

	public function emplRehetra(){
		$this->load->model('Employee');
		$data["liste"]=$this->Employee->allEmployee();
		$this->load->view('Employee',$data);
	}

	public function ModifCoop(){
		$this->load->model('Cooperative');
		$data["coopModif"]=$this->Cooperative->oneCooperative($this->input->post('id'));
		$this->load->view('ModifCoop',$data);
	}

	public function ModifEmpl(){
		$this->load->model('Employee');
		$data["emplModif"]=$this->Employee->oneEmployee($this->input->post('idEmployee'));
		$this->load->view('ModifEmpl',$data);
	}

	public function updateEmpl(){
		$this->load->model('Employee');
		$data["liste"]=$this->Employee->allEmployee();
		$idEmployee = $this->input->post('idEmployee');
		$nomEmployee = $this->input->post('nomEmployee');
		$prenomEmployee = $this->input->post('prenomEmployee');
		$fonctionEmployee = $this->input->post('fonctionEmployee');
		$contactEmployee = $this->input->post('contactEmployee');
		$mailEmployee = $this->input->post('mailEmployee');
		$experience = $this->input->post('experience');
		$data["emplModif"]=$this->Employee->updateEmployee($idEmployee, $nomEmployee, $prenomEmployee,$fonctionEmployee,$contactEmployee,$mailEmployee,$experience);
		$this->load->view('Employee',$data);
	}

	public function updateCoop(){
		$this->load->model('Cooperative');
		$data["liste"]=$this->Cooperative->allCooperative();
		$idCooperative = $this->input->post ('idCooperative');
		$nomCooperative = $this->input->post ('nomCooperative');
		$ce = $this->input->post ('ce');
		$de = $this->input->post ('de');
		$dc = $this->input->post ('dc');
		$mandat = $this->input->post ('mandat');
		$dateAJour = $this->input->post ('dateAJour');
		$nomPresident = $this->input->post ('nomPresident');
		$membre = $this->input->post ('membre');
		$homme = $this->input->post ('homme');
		$femme = $this->input->post ('femme');
		$contact = $this->input->post ('contact');
		$branche = $this->input->post ('branche');
		$filiere = $this->input->post ('filiere');
		$addrescooperative = $this->input->post ('addrescooperative');
		$fokotany = $this->input->post ('fokotany');
		$commune = $this->input->post ('commune');
		$distric = $this->input->post ('distric');
		$province = $this->input->post ('province');
		$region = $this->input->post ('region');
		$date2018 = $this->input->post ('date2018');
		$data["coopModif"]=$this->Cooperative->updateCooperative($idCooperative,$nomCooperative,$ce,$de,$dc,$mandat,$dateAJour,$nomPresident,$membre,$homme,$femme,$contact,$branche,$filiere,$addrescooperative,$fokotany,$commune,$distric,$province,$region,$date2018);
		$this->load->view('Cooperative',$data);
	}

	public function deleteCooperative(){
		$this->load->model('Cooperative');
		$this->load->model('Dissoute');
		$idCooperative = $this->input->post('idCooperative');
		$data["liste"]=$this->Cooperative->oneCooperative($idCooperative);
		$this->load->view('Alerte',$data);
	}

	public function deleteEmployee(){
		$this->load->model('Employee');
		$data["liste"]=$this->Employee->oneEmployee($this->input->post('idEmployee'));
		$this->load->view('AlertEmpl',$data);
	}

	public function validDelete(){
		$this->load->model('Cooperative');
		$this->load->model('Dissoute');
		$this->load->model('Cooperative');

		$idCooperative = $this->input->post ('idCooperative');
		$nomCooperative = $this->input->post ('nomCooperative');
		$ce = $this->input->post ('ce');
		$de = $this->input->post ('de');
		$dc = $this->input->post ('dc');
		$mandat = $this->input->post ('mandat');
		$dateAJour = $this->input->post ('dateAJour');
		$nomPresident = $this->input->post ('nomPresident');
		$membre = $this->input->post ('membre');
		$homme = $this->input->post ('homme');
		$femme = $this->input->post ('femme');
		$contact = $this->input->post ('contact');
		$branche = $this->input->post ('branche');
		$filiere = $this->input->post ('filiere');
		$addrescooperative = $this->input->post ('addrescooperative');
		$fokotany = $this->input->post ('fokotany');
		$commune = $this->input->post ('commune');
		$distric = $this->input->post ('distric');
		$province = $this->input->post ('province');
		$region = $this->input->post ('region');
		$date2018 = $this->input->post ('date2018');
		
		$data["liste"]=$this->Cooperative->allCooperative();
		$data["inserer"]=$this->Dissoute->insererDissout($nomCooperative,$ce,$de,$dc,$mandat,$dateAJour,$nomPresident,$membre,$homme,$femme,$contact,$branche,$filiere,$addrescooperative,$fokotany,$commune,$distric,$province,$region,$date2018);
		$data["supprimer"]=$this->Cooperative->DeleteCooperative($idCooperative);
		$this->load->view('Cooperative',$data);
	}

	public function validDeleteEmpl(){
		$this->load->model('Employee');
		$this->load->model('Dissoute');

		$data["liste"]=$this->Employee->allEmployee();
		$idEmployee = $this->input->post('idEmployee');
		$nomEmployee = $this->input->post('nomEmployee');
		$prenomEmployee = $this->input->post('prenomEmployee');
		$fonctionEmployee = $this->input->post('fonctionEmployee');
		$contactEmployee = $this->input->post('contactEmployee');
		$mailEmployee = $this->input->post('mailEmployee');
		$experience = $this->input->post('experience');
		
		$data["inserer"]=$this->Dissoute->insererDissoutEmpl($nomEmployee,$prenomEmployee,$fonctionEmployee,$contactEmployee,$mailEmployee,$experience);
		$data["supprimerFinal"]=$this->Employee->DeleteEmployeeFinal($idEmployee);
		$this->load->view('Employee',$data);
	}

	public function insertEmpl(){
		$this->load->view('InsererEmpl');
	}
	
	public function insertCoop(){
		$this->load->view('InsererCoop');
	}

	public function ajouterEmpl(){
		$this->load->model('Employee');
		$this->load->model('Employee');
		$data["liste"]=$this->Employee->allEmployee();
		$nomEmployee = $this->input->post('nomEmployee');
		$prenomEmployee = $this->input->post('prenomEmployee');
		$fonctionEmployee = $this->input->post('fonctionEmployee');
		$contactEmployee = $this->input->post('contactEmployee');
		$mailEmployee = $this->input->post('mailEmployee');
		$experience = $this->input->post('experience');
		$data["inserer"]=$this->Employee->insererEmpl($nomEmployee,$prenomEmployee,$fonctionEmployee,$contactEmployee,$mailEmployee,$experience);
		$this->load->view('Employee',$data);
	}

	public function ajouterCoop(){
		$this->load->model('Cooperative');
		$this->load->model('Cooperative');
		$data["liste"]=$this->Cooperative->allCooperative();
		$idCooperative = $this->input->post ('idCooperative');
		$nomCooperative = $this->input->post ('nomCooperative');
		$ce = $this->input->post ('ce');
		$de = $this->input->post ('de');
		$dc = $this->input->post ('dc');
		$mandat = $this->input->post ('mandat');
		$dateAJour = $this->input->post ('dateAJour');
		$nomPresident = $this->input->post ('nomPresident');
		$membre = $this->input->post ('membre');
		$homme = $this->input->post ('homme');
		$femme = $this->input->post ('femme');
		$contact = $this->input->post ('contact');
		$branche = $this->input->post ('branche');
		$filiere = $this->input->post ('filiere');
		$addrescooperative = $this->input->post ('addrescooperative');
		$fokotany = $this->input->post ('fokotany');
		$commune = $this->input->post ('commune');
		$distric = $this->input->post ('distric');
		$province = $this->input->post ('province');
		$region = $this->input->post ('region');
		$date2018 = $this->input->post ('date2018');
		$data["inserer"]=$this->Cooperative->insererCooperative($nomCooperative,$ce,$de,$dc,$mandat,$dateAJour,$nomPresident,$membre,$homme,$femme,$contact,$branche,$filiere,$addrescooperative,$fokotany,$commune,$distric,$province,$region,$date2018);
		$this->load->view('Cooperative',$data);
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
			$lien = 'RechercheBack';
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
		$data["rechercheEmpl"]=$this->Employee->rechercherEmployee($motAChercher);
		$data["rechercheCoop"]=$this->Cooperative->rechercherCooperative($motAChercher);
		$lien = null;
		if($type == 'All type'){
			$lien = 'RechercheFront';
		}
		elseif($type == 'Employee'){
			$lien = 'RechercheEmployeeFront';
		}
		elseif($type == 'Cooperative'){
			$lien = 'RechercheCoopFront';
		}

		$this->load->view($lien,$data);
	}

	public function versInfoDissoute(){
		$this->load->model('Dissoute');
		$data["liste"]=$this->Dissoute->oneDissoute($this->input->post('idCooperativeDissout'));
		$this->load->view('infoDissouteCoop',$data);
	}

	public function versInfoDissouteEmpl(){
		$this->load->model('Dissoute');
		$data["liste"]=$this->Dissoute->oneDissouteEmpl($this->input->post('idEmployee'));
		$this->load->view('infoDissouteEmpl',$data);
	}

	public function versTeste(){
		$this->load->model('Cooperative');
		$data["nbrbranche"]=$this->Cooperative->statBranche();
		$data["nbrfiliere"]=$this->Cooperative->statFiliere();
		$data["nbrcommune"]=$this->Cooperative->statCommune();
		$data["branche"]=$this->Cooperative->calculPourcentageBranche();
		$data["filiere"]=$this->Cooperative->calculPourcentageFiliere();
		$data["commune"]=$this->Cooperative->calculPourcentageCommune();
		$this->load->view('Statistique',$data);
	}
}
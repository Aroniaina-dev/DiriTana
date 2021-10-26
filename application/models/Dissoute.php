<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dissoute extends CI_Model {
    function insererDissout($nomCooperative,$ce,$de,$dc,$mandat,$dateAJour,$nomPresident,$membre,$homme,$femme,$contact,$branche,$filiere,$addrescooperative,$fokotany,$commune,$distric,$province,$region,$date2018){
        $req = "INSERT INTO Dissoute (nomCooperative,CE,DE,DC,mandat,dateAJour,nomPresident,membre,homme,femme,contact,branche,filiere,addrescooperative,fokotany,commune,distric,province,region,date2018) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)";
        $query = sprintf($req,$this->db->escape($nomCooperative),$this->db->escape($ce),$this->db->escape($de),$this->db->escape($dc),$this->db->escape($mandat),$this->db->escape($dateAJour),$this->db->escape($nomPresident),$this->db->escape($membre),$this->db->escape($homme),$this->db->escape($femme),$this->db->escape($contact),$this->db->escape($branche),$this->db->escape($filiere),$this->db->escape($addrescooperative),$this->db->escape($fokotany),$this->db->escape($commune),$this->db->escape($distric),$this->db->escape($province),$this->db->escape($region),$this->db->escape($date2018));
        $req = $this->db->query($query);
        // var_dump($query);
    }

    function insererDissoutEmpl($nomEmployee,$prenomEmployee,$fonctionEmployee,$contactEmployee,$mailEmployee,$experience){
        $req = "INSERT INTO DissouteEmpl (nomEmployee, prenomEmployee, fonctionEmployee, contactEmployee, mailEmployee, experience) values (%s,%s,%s,%s,%s,%s)";
        $query = sprintf($req,$this->db->escape($nomEmployee),$this->db->escape($prenomEmployee),$this->db->escape($fonctionEmployee),$this->db->escape($contactEmployee),$this->db->escape($mailEmployee),$this->db->escape($experience));
        $req = $this->db->query($query);
        // var_dump($query);
    }

    public function allDissoute(){
        $requete = "SELECT * FROM Dissoute GROUP BY CE";
        $result = $this->db->query($requete);
        return $result->result_array();
    }

    public function allDissouteEmpl(){
        $requete = "SELECT * FROM DissouteEmpl GROUP BY experience";
        $result = $this->db->query($requete);
        return $result->result_array();
    }

    public function oneDissoute($id) {
        $requete = "SELECT * FROM Dissoute WHERE idCooperativeDissout = %s";
        $query = sprintf($requete,$this->db->escape($id));
        $result = $this->db->query($query);
        return $result->row_array();
    }

    public function oneDissouteEmpl($id) {
        $requete = "SELECT * FROM DissouteEmpl WHERE idEmployee = %s";
        $query = sprintf($requete,$this->db->escape($id));
        $result = $this->db->query($query);
        return $result->row_array();
    }
}
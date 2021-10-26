<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginEmployees extends CI_Model{
    function valideConnexion() {
        $requete = "SELECT * FROM loginEmployees";
        $result = $this->db->query($requete);
        return $result->row_array();
    }

    function unePersonnelle($numeroEmployee) {
        $req = "SELECT * FROM loginEmployees WHERE numeroEmployee = %s";
        $sql = sprintf($req,$this->db->escape($numeroEmployee));
        $qr = $this->db->query($sql);
        $result= $qr->result_array();
        return $result;
    }

    public function insererLogin($nomEmployee,$numeroEmployee,$mdpEmployee){
        $req = "INSERT INTO loginEmployees (nomEmployee, numeroEmployee, mdpEmployee) VALUES (%s,%s,%s)";
        $query = sprintf($req,$this->db->escape($nomEmployee),$this->db->escape($numeroEmployee),$this->db->escape($mdpEmployee));
        $req = $this->db->query($query);
        // var_dump($query);
    }
}
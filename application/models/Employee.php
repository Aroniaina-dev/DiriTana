<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Model{
    public function allEmployee(){
        $requete = "SELECT * FROM Employee";
        $result = $this->db->query($requete);
        return $result->result_array();
    }

    public function oneEmployee($idEmployee){
        $requete = "SELECT * FROM Employee WHERE idEmployee = %s";
        $sql = sprintf($requete,$this->db->escape($idEmployee));
        $result = $this->db->query($sql);
        // var_dump($sql);
        return $result->row_array();
    }

    public function rechercherEmployee($mot){
        $req = "SELECT * FROM Employee WHERE prenomEmployee like '%%".$mot."%' OR nomEmployee like '%%".$mot."%'";
        $query = $this->db->query($req);
        $result= $query->result_array();
        // var_dump($query);
        return $result;
    }

    public function updateEmployee($idEmployee,$nomEmployee,$prenomEmployee,$fonctionEmployee,$contactEmployee,$mailEmployee,$experience){
        $req = "UPDATE Employee SET nomEmployee = %s, prenomEmployee = %s, fonctionEmployee = %s, contactEmployee = %s, mailEmployee = %s, experience = %s WHERE idEmployee = %s";
        $query = sprintf($req,$this->db->escape($nomEmployee),$this->db->escape($prenomEmployee),$this->db->escape($fonctionEmployee),$this->db->escape($contactEmployee),$this->db->escape($mailEmployee),$this->db->escape($experience),$this->db->escape($idEmployee));
        $req = $this->db->query($query);
        // var_dump($query);
    }

    public function DeleteEmployee($idEmployee){
        $req = "DELETE FROM loginEmployees WHERE idEmployee = %s";
        $query = sprintf($req,$this->db->escape($idEmployee));
        $req = $this->db->query($query);
        // var_dump($req);
    }

    public function DeleteEmployeeFinal($idEmployee){
        $req = "DELETE FROM Employee WHERE idEmployee = %s";
        $query = sprintf($req,$this->db->escape($idEmployee));
        $req = $this->db->query($query);
        // var_dump($req);
    }

    public function insererEmpl($nomEmployee,$prenomEmployee,$fonctionEmployee,$contactEmployee,$mailEmployee,$experience){
        $req = "INSERT INTO Employee (nomEmployee, prenomEmployee, fonctionEmployee, contactEmployee, mailEmployee, experience) VALUES (%s,%s,%s,%s,%s,%s)";
        $query = sprintf($req,$this->db->escape($nomEmployee),$this->db->escape($prenomEmployee),$this->db->escape($fonctionEmployee),$this->db->escape($contactEmployee),$this->db->escape($mailEmployee),$this->db->escape($experience));
        $req = $this->db->query($query);
        // var_dump($query);
    }

    public function nbrEmpl(){
        $req = "SELECT count(idEmployee) AS nbr FROM employee";
        $result = $this->db->query($req);
        // var_dump($req);
        return $result->row_array();
    }

    public function randSary(){
        $req = "SELECT idEmployee,prenomEmployee FROM Employee ORDER BY rand() LIMIT 6";
        $result = $this->db->query($req);
        return $result->result_array();
    }
}
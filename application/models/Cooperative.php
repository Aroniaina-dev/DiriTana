<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cooperative extends CI_Model {

    function allCooperative() {
        $requete = "SELECT * FROM Cooperative";
        $result = $this->db->query($requete);
        return $result->result_array();
    }

    function oneCooperative($id) {
        $requete = "SELECT * FROM Cooperative WHERE idCooperative = ".$id;
        $result = $this->db->query($requete);
        return $result->row_array();
    }

    public function rechercherCooperative($mot){
        $req = "SELECT * FROM Cooperative WHERE nomCooperative like '%%".$mot."%'";
        $query = $this->db->query($req);
        $result= $query->result_array();
        // var_dump($query);
        return $result;
    }

    public function DeleteCooperative($idCooperative){
        $req = "DELETE FROM Cooperative WHERE idCooperative = %s";
        $query = sprintf($req,$this->db->escape($idCooperative));
        $req = $this->db->query($query);
        // var_dump($query);
    }

    public function updateCooperative($idCooperative,$nomCooperative,$ce,$de,$dc,$mandat,$dateAJour,$nomPresident,$membre,$homme,$femme,$contact,$branche,$filiere,$addrescooperative,$fokotany,$commune,$distric,$province,$region,$date2018){
        $req = "UPDATE Cooperative SET nomCooperative = %s, CE = %s, DE = %s, DC = %s, mandat = %s, dateAJour = %s, nomPresident= %s, membre = %s, homme = %s, femme= %s, contact= %s, branche= %s, filiere= %s, addrescooperative= %s, fokotany= %s, commune= %s, distric= %s, province= %s, region= %s, date2018= %s WHERE idCooperative = %s";
        $query = sprintf($req,$this->db->escape($nomCooperative),$this->db->escape($ce),$this->db->escape($de),$this->db->escape($dc),$this->db->escape($mandat),$this->db->escape($dateAJour),$this->db->escape($nomPresident),$this->db->escape($membre),$this->db->escape($homme),$this->db->escape($femme),$this->db->escape($contact),$this->db->escape($branche),$this->db->escape($filiere),$this->db->escape($addrescooperative),$this->db->escape($fokotany),$this->db->escape($commune),$this->db->escape($distric),$this->db->escape($province),$this->db->escape($region),$this->db->escape($date2018),$this->db->escape($idCooperative));
        $req = $this->db->query($query);
        // var_dump($query);
    }

    public function insererCooperative($nomCooperative,$ce,$de,$dc,$mandat,$dateAJour,$nomPresident,$membre,$homme,$femme,$contact,$branche,$filiere,$addrescooperative,$fokotany,$commune,$distric,$province,$region,$date2018){
        $req = "INSERT INTO Cooperative (nomCooperative,CE,DE,DC,mandat,dateAJour,nomPresident,membre,homme,femme,contact,branche,filiere,addrescooperative,fokotany,commune,distric,province,region,date2018,couleur) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,'Transparent')";
        $query = sprintf($req,$this->db->escape($nomCooperative),$this->db->escape($ce),$this->db->escape($de),$this->db->escape($dc),$this->db->escape($mandat),$this->db->escape($dateAJour),$this->db->escape($nomPresident),$this->db->escape($membre),$this->db->escape($homme),$this->db->escape($femme),$this->db->escape($contact),$this->db->escape($branche),$this->db->escape($filiere),$this->db->escape($addrescooperative),$this->db->escape($fokotany),$this->db->escape($commune),$this->db->escape($distric),$this->db->escape($province),$this->db->escape($region),$this->db->escape($date2018));
        $req = $this->db->query($query);
        // var_dump($query);
    }

    function groupName() {
        $requete = "SELECT * FROM cooperative ORDER BY nomCooperative";
        $result = $this->db->query($requete);
        return $result->result_array();
    }

    function groupCe() {
        $requete = "SELECT * FROM cooperative ORDER BY CE";
        $result = $this->db->query($requete);
        return $result->result_array();
    }

    function groupDe() {
        $requete = "SELECT * FROM cooperative ORDER BY DE";
        $result = $this->db->query($requete);
        return $result->result_array();
    }

    function groupRegion() {
        $requete = "SELECT * FROM cooperative ORDER BY Region";
        $result = $this->db->query($requete);
        return $result->result_array();
    }

    function groupBranche() {
        $requete = "SELECT * FROM cooperative ORDER BY Branche";
        $result = $this->db->query($requete);
        return $result->result_array();
    }

    function groupFiliere() {
        $requete = "SELECT * FROM cooperative ORDER BY filiere";
        $result = $this->db->query($requete);
        return $result->result_array();
    }

    function groupBy($nomGroupe) {
        $requete = "SELECT * FROM cooperative ORDER BY ".$nomGroupe;
        // $query = sprintf($requete,$this->db->escape($nomGroupe));
        // var_dump($requete);
        $result = $this->db->query($requete);
        return $result->result_array();
    }

    function statBranche(){
        $requete = "SELECT Branche,count(nomCooperative) AS count FROM cooperative GROUP BY Branche";
        $result = $this->db->query($requete);
        return $result->result_array();
    }

    function statFiliere() {
        $requete = "SELECT Filiere,count(nomCooperative) AS count FROM cooperative GROUP BY Filiere";
        $result = $this->db->query($requete);
        return $result->result_array();
    }

    function statCommune() {
        $requete = "SELECT Commune,count(nomCooperative) AS count FROM cooperative GROUP BY Commune";
        $result = $this->db->query($requete);
        return $result->result_array();
    }

    function nbrCooperative() {
        $requete = "SELECT count(*) AS count FROM Cooperative";
        $result = $this->db->query($requete);
        return $result->row_array();
    }

    function calculPourcentageBranche(){
        $toutCoop = $this->nbrCooperative();
        $brancheStat = $this->statBranche();
        $valiny = [];
        for ($i=0; $i < count($brancheStat); $i++) { 
            $valiny[$i] = ($brancheStat[$i]['count']*100)/$toutCoop['count'];
        }
        return $valiny;
    }

    function calculPourcentageFiliere(){
        $toutCoop = $this->nbrCooperative();
        $filiereStat = $this->statFiliere();
        $valiny = [];
        for ($i=0; $i < count($filiereStat); $i++) { 
            $valiny[$i] = ($filiereStat[$i]['count']*100)/$toutCoop['count'];
        }
        return $valiny;
    }

    function calculPourcentageCommune(){
        $toutCoop = $this->nbrCooperative();
        $communeStat = $this->statCommune();
        $valiny = [];
        for ($i=0; $i < count($communeStat); $i++) { 
            $valiny[$i] = ($communeStat[$i]['count']*100)/$toutCoop['count'];
        }
        return $valiny;
    }

    function getToday(){
        $requete = "SELECT YEAR(now()) AS daty";
        $result = $this->db->query($requete);
        return $result->row_array();
    }

    function updateCouleur($idCooperative){
        $req = "UPDATE Cooperative SET couleur = 'red' WHERE idCooperative = %s";
        $query = sprintf($req,$this->db->escape($idCooperative));
        $req = $this->db->query($query);
        // var_dump($query);
    }

    function notUpdateCouleur($idCooperative){
        $req = "UPDATE Cooperative SET couleur = 'Transparent' WHERE idCooperative = %s";
        $query = sprintf($req,$this->db->escape($idCooperative));
        $req = $this->db->query($query);
        // var_dump($query);
    }

    function allColor() {
        $requete = "SELECT * FROM Couleur";
        $result = $this->db->query($requete);
        return $result->result_array();
    }

    function dernierPv() {
        $requete = "SELECT year(DE) AS year FROM cooperative";
        $result = $this->db->query($requete);
        return $result->row_array();
    }

    function changeColor(){
        $dateZao = $this->getToday();
        $dateCoop = $this->allCooperative();
        $pv = $this->dernierPv();
        $diff = 0;
        for ($i=0; $i < count($dateCoop); $i++) { 
            $diff = $dateZao['daty'] - $dateCoop[$i]['dateAJour'];

            // echo $dateCoop[$i]['idCooperative'];
            // echo " ";
            // echo $dateCoop[$i]['dateAJour'];
            // echo " ";
            // echo $dateZao['daty'];
            // echo " ";
            // echo $dateCoop[$i]['mandat'];
            // echo " ";
            // echo $diff;
            // echo "<hr>";
            
            if($diff > $dateCoop[$i]['mandat'] || $diff < 0){
                $this->updateCouleur($dateCoop[$i]['idCooperative']);
            }   
            else {
                $this->notUpdateCouleur($dateCoop[$i]['idCooperative']);
            }
        }
    }
}
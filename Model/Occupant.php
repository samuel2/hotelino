<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Occupant
 *
 * @author peguy
 */
class Occupant {

    private $id;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $lieu_naissance;
    private $nationalite;
    private $adresse;
    private $profession;
    private $num_cni;
    private $delivre_le;

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDate_naissance() {
        return $this->date_naissance;
    }

    public function getLieu_naissance() {
        return $this->lieu_naissance;
    }

    public function getNationalite() {
        return $this->nationalite;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getProfession() {
        return $this->profession;
    }

    public function getNum_cni() {
        return $this->num_cni;
    }

    public function getDelivre_le() {
        return $this->delivre_le;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setDate_naissance($date_naissance) {
        $this->date_naissance = $date_naissance;
    }

    public function setLieu_naissance($lieu_naissance) {
        $this->lieu_naissance = $lieu_naissance;
    }

    public function setNationalite($nationalite) {
        $this->nationalite = $nationalite;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setProfession($profession) {
        $this->profession = $profession;
    }

    public function setNum_cni($num_cni) {
        $this->num_cni = $num_cni;
    }

    public function setDelivre_le($delivre_le) {
        $this->delivre_le = $delivre_le;
    }

    function __construct($id, $nom, $prenom, $date_naissance, $lieu_naissance, $nationalite, $adresse, $profession, $num_cni, $delivre_le) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->lieu_naissance = $lieu_naissance;
        $this->nationalite = $nationalite;
        $this->adresse = $adresse;
        $this->profession = $profession;
        $this->num_cni = $num_cni;
        $this->delivre_le = $delivre_le;
    }

    public function __toString() {
        return $this->id;
    }

}

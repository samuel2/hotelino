<?php

class Client {

    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $solde;

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getSolde() {
        return $this->solde;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setSolde($solde) {
        $this->solde = $solde;
    }

    function __construct($id, $nom, $prenom, $adresse, $solde) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->solde = $solde;
    }

    public function __toString() {
        return $this->id;
    }

}

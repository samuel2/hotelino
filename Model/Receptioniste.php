<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of receptioniste
 *
 * @author peguy
 */
class receptioniste {
    private $id;
    private $nom;
    private $prenom;
     private $adresse;
    private $matricule;
    private $num_tel;
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
 public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }
    public function getMatricule() {
        return $this->matricule;
    }

    public function getNum_tel() {
        return $this->num_tel;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    public function setNum_tel($num_tel) {
        $this->num_tel = $num_tel;
    }

    function __construct($id, $nom, $prenom,$adresse, $matricule, $num_tel) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->matricule = $matricule;
        $this->num_tel = $num_tel;
        
    }
public function __toString() {
        return $this->nom ;
       
    }



    
}

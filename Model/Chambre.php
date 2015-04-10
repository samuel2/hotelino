<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Chambre
 *
 * @author peguy
 */
class Chambre {
    
    private $Num;
    private $type;
    private $prix;
    private $etage;
    
    
    public function getNum() {
        return $this->Num;
    }
    
    public function getType() {
        return $this->type;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getEtage() {
        return $this->etage;
    }
    
    public function setType($type) {
        $this->type = $type;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function setEtage($etage) {
        $this->etage = $etage;
    }
    
    function __construct($Num, $type, $prix, $etage) {
        $this->Num = $Num;
        $this->type = $type;
        $this->prix = $prix;
        $this->etage = $etage;
    }
    public function __toString() {
        return $this->Num ; 
        
        
}
    }
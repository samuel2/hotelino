<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reglement
 *
 * @author peguy
 */
class Reglement {

    private $id;
    private $solde;
    private $date_reglement;
    private $client;

    public function getId() {
        return $this->id;
    }

    public function getSolde() {
        return $this->solde;
    }

    public function getDate_reglement() {
        return $this->date_reglement;
    }

    public function getClient() {
        return $this->client;
    }

    public function setSolde($solde) {
        $this->solde = $solde;
    }

    public function setDate_reglement($date_reglement) {
        $this->date_reglement = $date_reglement;
    }

    public function setClient($client) {
        $this->client = $client;
    }

    public function __construct($id, $solde, $date_reglement) {
        $this->id = $id;
        $this->solde = $solde;
        $this->date_reglement = $date_reglement;
    }

    public function __toString() {
        return 'ID Reglement : ' . $this->id;
    }

}

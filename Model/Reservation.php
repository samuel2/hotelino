<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reservation
 *
 * @author peguy
 */
class Reservation {
private $id;
private $client;
private $receptioniste;
private $chambre;
private $occupant;
private $date_reservation;
private $date_confirmation;
private $date_occupation;
private $date_depart;
private $prix;
private $venant_de;
private $se_rendant;
private $motif_mission;
private $nbre_personne;
private $mode_transport;
private $mode_paiement;

function __construct($id, $client, $receptioniste, $chambre, $occupant, $date_reservation, $date_confirmation, $date_occupation, $date_depart, $prix, $venant_de, $se_rendant, $motif_mission, $nbre_personne, $mode_transport, $mode_paiement) {
    $this->id = $id;
    $this->client = $client;
    $this->receptioniste = $receptioniste;
    $this->chambre = $chambre;
    $this->occupant = $occupant;
    $this->date_reservation = $date_reservation;
    $this->date_confirmation = $date_confirmation;
    $this->date_occupation = $date_occupation;
    $this->date_depart = $date_depart;
    $this->prix = $prix;
    $this->venant_de = $venant_de;
    $this->se_rendant = $se_rendant;
    $this->motif_mission = $motif_mission;
    $this->nbre_personne = $nbre_personne;
    $this->mode_transport = $mode_transport;
    $this->mode_paiement = $mode_paiement;
}

public function getId() {
    return $this->id;
}

public function getClient() {
    return $this->client;
}

public function getReceptioniste() {
    return $this->receptioniste;
}

public function getChambre() {
    return $this->chambre;
}

public function getOccupant() {
    return $this->occupant;
}

public function getDate_reservation() {
    return $this->date_reservation;
}

public function getDate_confirmation() {
    return $this->date_confirmation;
}

public function getDate_occupation() {
    return $this->date_occupation;
}

public function getDate_depart() {
    return $this->date_depart;
}

public function getPrix() {
    return $this->prix;
}

public function getVenant_de() {
    return $this->venant_de;
}

public function getSe_rendant() {
    return $this->se_rendant;
}

public function getMotif_mission() {
    return $this->motif_mission;
}

public function getNbre_personne() {
    return $this->nbre_personne;
}

public function getMode_transport() {
    return $this->mode_transport;
}

public function getMode_paiement() {
    return $this->mode_paiement;
}

public function setClient($client) {
    $this->client = $client;
}

public function setReceptioniste($receptioniste) {
    $this->receptioniste = $receptioniste;
}

public function setChambre($chambre) {
    $this->chambre = $chambre;
}

public function setOccupant($occupant) {
    $this->occupant = $occupant;
}

public function setDate_reservation($date_reservation) {
    $this->date_reservation = $date_reservation;
}

public function setDate_confirmation($date_confirmation) {
    $this->date_confirmation = $date_confirmation;
}

public function setDate_occupation($date_occupation) {
    $this->date_occupation = $date_occupation;
}

public function setDate_depart($date_depart) {
    $this->date_depart = $date_depart;
}

public function setPrix($prix) {
    $this->prix = $prix;
}

public function setVenant_de($venant_de) {
    $this->venant_de = $venant_de;
}

public function setSe_rendant($se_rendant) {
    $this->se_rendant = $se_rendant;
}

public function setMotif_mission($motif_mission) {
    $this->motif_mission = $motif_mission;
}

public function setNbre_personne($nbre_personne) {
    $this->nbre_personne = $nbre_personne;
}

public function setMode_transport($mode_transport) {
    $this->mode_transport = $mode_transport;
}

public function setMode_paiement($mode_paiement) {
    $this->mode_paiement = $mode_paiement;
}

public function __toString() {
    return $this->client;
}}


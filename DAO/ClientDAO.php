<?php

class ClientDAO {

    public static function save($client) {
        $conn = $GLOBALS['conn'];
        $reponse = $conn->prepare("insert into client value('',:nom,:prenom,:adresse,:solde)");
        $reponse->execute(array(
            'nom' => $client->getNom(),
            'prenom' => $client->getPrenom(),
            'adresse' => $client->getAdresse(),
            'solde' => $client->getSolde(),
        ));
    }

    public static function find($id) {
        $conn = $GLOBALS['conn'];
        $reponse = $conn->prepare("select * from client where id=?")
                or die(print_r(ClientDAO::$conn->errorInfo()));
        $reponse->execute(array($id));
        $ligne = $reponse->fetch();
        $client = new Client($ligne['id'], $ligne['nom'], $ligne['prenom'], $ligne['adresse'], $ligne['solde']);
        $reponse->closeCursor();
        return $client;
    }

    public static function findall() {
        $clients = array();
        $conn = $GLOBALS['conn'];
        $reponse = $conn->query("select * from client");
        while ($ligne = $reponse->fetch()) {
            $clients[] = new Client($ligne['id'], $ligne['nom'], $ligne['prenom'], $ligne['adresse'], $ligne['solde']);
        }
        $reponse->closeCursor();
        return $clients;
    }

    public static function delete($id) {
        $conn = $GLOBALS['conn'];
        $reponse = $conn->prepare("delete from client where id=?");
        $reponse->execute(array($id));
    }

}

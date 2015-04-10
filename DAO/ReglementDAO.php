<?php

class reglementDAO {

    public static function save($reglement) {
        $conn = $GLOBALS['conn'];
//        echo $reglement->getClient()->getId();
        $reponse = $conn->prepare("insert into reglement value('', :solde,:date_reglement,:idclient)");
        $reponse->execute(array(
            'solde' => $reglement->getSolde(),
            'date_reglement' => $reglement->getDate_reglement(),
            'idclient' => $reglement->getClient()->getId()
        ));
    }

    public function find($id) {
        $conn = $GLOBALS['conn'];
        $reponse = $conn->prepare("select * from reglement where id=?");
        $reponse->execute(array($id));
        $ligne = $reponse->fetch();
        $reglement = new Reglement($ligne['id'], $ligne['solde'], $ligne['date_reglement']);
        $reglement->setClient(ClientDAO::find($ligne['idclient']));
        $reponse->closeCursor();
        return $reglement;
    }

    public function findall() {
        $reglements = array();
        $conn = $GLOBALS['conn'];
        $reponse = $conn->query("select * from reglement");
        while ($ligne = $reponse->fetch()) {
            $reglement = new Reglement($ligne['id'], $ligne['solde'], $ligne['date_reglement']);
            $reglement->setClient(ClientDAO::find($ligne['idclient']));
            $reglements[] = $reglement;
        }
        $reponse->closeCursor();
        return $reglements;
    }

    public function delete($id) {
        $conn = $GLOBALS['conn'];
        $reponse = $conn->prepare("delete from reglement where id=?");
        $reponse->execute(array($id));
    }

}

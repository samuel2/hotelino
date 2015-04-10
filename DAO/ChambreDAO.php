<?php

class ChambreDAO {

    public static function save($chambre) {
        $conn = $GLOBALS['conn'];
        $reponse = $conn->prepare("insert into chambre value('', :type,:prix,:etage)");
        $reponse->execute(array(
            'type' => $chambre->getType(),
            'prix' => $chambre->getPrix(),
            'etage' => $chambre->getEtage()
        ));
    }

    public static function find($id) {
        $conn = $GLOBALS['conn'];
        $reponse = $conn->prepare("select * from chambre where numero=?");
        $reponse->execute(array($id));
        $ligne = $reponse->fetch();
        $chambre = new Chambre($ligne['num'], $ligne['type'], $ligne['prix'], $ligne['etage']);
        $reponse->closeCursor();
        return $chambre;
    }

    public static function findall() {
        $chambres = array();
        $conn = $GLOBALS['conn'];
        $reponse = $conn->query("select * from chambre");
        while ($ligne = $reponse->fetch()) {

            $chambres[] = new Chambre($ligne['num'], $ligne['type'], $ligne['prix'], $ligne['etage']);
        }
        $reponse->closeCursor();
        return $chambres;
    }

    public static function delete($Num) {
        $conn = $GLOBALS['conn'];
        $reponse = $conn->prepare("delete from chambre where Num=?");
        $reponse->execute(array($Num));
    }

}

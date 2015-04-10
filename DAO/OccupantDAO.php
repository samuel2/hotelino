<?php

class OccupantDAO {

    public static function save($occupant) {
        $conn = $GLOBALS['conn'];
        echo $occupant->getDelivre_le();
        $reponse = $conn->prepare("insert into occupant values('', :nom,:prenom,: date_naissance,:lieu_naissance,:nationalite,:profession,:adresse,:num_cni,:delivre_le)");
        $reponse->execute(array(
            'nom' => $occupant->getNom(),
            'prenom' => $occupant->getPrenom(),
            'date_naissance' => $occupant->getDate_naissance(),
            'lieu_naissance' => $occupant->getLieu_naissance(),
            'nationalite' => $occupant->getNationalite(),
            'profession' => $occupant->getProfession(),
            'adresse' => $occupant->getAdresse(),
            'num_cni' => $occupant->getNum_cni(),
            'delivre_le' => $occupant->getDelivre_le()
        ));
    }

    public static function find($id) {
        $conn = $GLOBALS['conn'];
        $reponse = $conn->prepare("select * from occupant where id=?");
        $reponse->execute(array($id));
        $ligne = $reponse->fetch();
        $occupant = new Occupant($ligne['id'], $ligne['nom'], $ligne['prenom'], $ligne['date_naissance'], $ligne['lieu_naissance'], $ligne['nationalite'], $ligne['profession'], $ligne['adresse'], $ligne['num_cni'], $ligne['delivre_le']);
        $reponse->closeCursor();
        return $occupant;
    }

    public static function findall() {
        $occupants = array();
        $conn = $GLOBALS['conn'];
        $reponse = $conn->query("select * from occupant");
        while ($ligne = $reponse->fetch()) {

            $occupants[] = new Occupant($ligne['id'], $ligne['nom'], $ligne['prenom'], $ligne['date_naissance'], $ligne['lieu_naissance'], $ligne['nationalite'], $ligne['profession'], $ligne['adresse'], $ligne['num_cni'], $ligne['delivre_le']);
        }
        $reponse->closeCursor();
        return $occupants;
    }

    public static function delete($id) {
        $conn = $GLOBALS['conn'];
        $reponse = $conn->prepare("delete from occupant where id=?");
        $reponse->execute(array($id));
    }

}

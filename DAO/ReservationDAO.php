<?php


class ReservationDAO {
    public static function save($reservation){
        $conn=$GLOBALS['conn'];
        echo $reservation->getnom();
        $reponse=$conn->prepare("insert into reservation value('', :client,:receptioniste,:chambre,:occupant,:date_reservation,:date_confirmation,:date_occupation,:date_depart,:prix,:motif_mission,:venant_de,:se_rendant,:nombre_personne,:mode_paiement,:mode_transport)");
        $reponse->execute(array(
            'id'=>$reservation->getid(),
            'client'=>$reservation->getclient(),
            'receptioniste'=>$reservation->getreceptioniste(), 
            'chambre'=>$reservation->getchambre(),
             'occupant'=>$reservation->getoccupant(),
             'date_reservation'=>$reservation->resrvation(),
             'date_confirmation'=>$reservation->getdate_reservation(),
            'date_occupation'=>$reservation->getdate_occupation(),
            'date_depart'=>$reservation->getdate_depart(),
            'prix'=>$reservation->prix(),
            'motif_mission'=>$reservation->getmotif_mission(),
             'venant_de'=>$reservation->getvenant_de(),
             'se_rendant'=>$reservation->getse_rendant(),
             'nombre_personne'=>$reservation->getnombre_personne(),
             'mode_paiement'=>$reservation->getmode_paiement(),
             'mode_transport'=>$reservation->getmode_transport(),
             
            
      )); 
    }
    public static function find($id) {
        $conn=$GLOBALS['conn'];
        $reponse=$conn->prepare("select * from reservation where id=?");
        $reponse->execute(array($id));
        $ligne=$reponse->fetch();
        $reservation=new Reservation($ligne['id'], $ligne['client'], $ligne['receptioniste'], $ligne['chambre'],$ligne['occupant'],  $ligne['date_reservation'], $ligne['date_confirmation'],$ligne['date_occupation'], $ligne['date_depart'], $ligne['prix'],$ligne['motif_mission'], $ligne['venant_de'], $ligne['nombre_personne'], $ligne['mode_paiement'],$ligne['mode_transport']);
        $reponse->closeCursor();
        return $reservation;
    }
    public static function findall(){
        $reservations=array();
        $conn=$GLOBALS['conn'];
        $reponse=$conn->query("select * from reservation");
        while($ligne=$reponse->fetch()){
       $reservations[]=new Reservation($ligne['id'], $ligne['client'], $ligne['receptioniste'], $ligne['chambre'],$ligne['occupant'],  $ligne['date_reservation'], $ligne['date_confirmation'],$ligne['date_occupation'], $ligne['date_depart'], $ligne['prix'],$ligne['motif_mission'], $ligne['venant_de'], $ligne['nombre_personne'], $ligne['mode_paiement'],$ligne['mode_transport']);            
           
        }
        $reponse->closeCursor();
        return $reservations;
    }
    public static function delete ($id){
        $conn=$GLOBALS['conn'];
        $reponse=$conn->prepare("delete from reservation where id=?");
        $reponse->execute(array($id));
    }
    
}

  
        
    
    
    



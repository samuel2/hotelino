<?php


class ReceptionisteDAO {
    public static function save($receptioniste){
        $conn=$GLOBALS['conn'];
        $reponse=$conn->prepare("insert into receptioniste values('', :nom,:prenom,:adresse,:matricule,:num_tel)");
        $reponse->execute(array(
        
            'nom'=>$receptioniste->getNom(),
            'prenom'=>$receptioniste->getPrenom(), 
            'adresse'=>$receptioniste->getAdresse(),
             'matricule'=>$receptioniste->getMatricule(),
             'num_tel'=>$receptioniste->getNum_tel(),
                ));  
      
      }
      public static function find($id){
        $conn=$GLOBALS['conn'];
        $reponse=$conn->prepare("select* from receptioniste where id=?");
        $reponse->execute(array($id));
        $ligne=$reponse->fetch();
        $receptioniste=new receptioniste($ligne['id'],$ligne['nom'],$ligne['prenom'],$ligne['adresse'],$ligne['matricule'],$ligne['num_tel']);
    $reponse->closecursor();
    return $receptioniste;
    
    }
   public static function findall(){
    $receptionistes=array(); 
      $conn=$GLOBALS['conn'];
         $reponse=$conn->query("select * from receptioniste");
        while ($ligne=$reponse->fetch()){
        $receptionistes[]=new receptioniste($ligne['id'],$ligne['nom'],$ligne['prenom'],$ligne['adresse'],$ligne['matricule'],$ligne['num_tel']);
    }
    $reponse->closecursor();
return $receptionistes; }
    public static function delete($id){
        $conn=$GLOBALS['conn'];
        $reponse=$conn->prepare("delete from receptioniste where id=?");
         $reponse->execute(array($id));
    }
}

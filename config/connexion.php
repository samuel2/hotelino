<?php

$host='localhost';
$user='root';
$password='';
$db='hotelino';
function connexion($host , $user , $password ,$db){
   
   try{$bdd=new PDO('mysql:host='.$host.';dbname='.$db,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
   return $bdd;
   }catch (Exception $ex){
       die ('erreur:'.$ex->getMessage() ) ;
   }
        }
$conn= connexion($host, $user, $password, $db);



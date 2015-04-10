<link href="View/layout/bootstrap/css/bootstrap.css" rel="stylesheet" />
<link href="View/layout/bootstrap/css/bootstrap-theme.css" rel="stylesheet" />



<?php

require_once 'config/connexion.php';
require_once 'Model/Chambre.php';
require_once 'Model/Receptioniste.php';
require_once 'Model/Client.php';
require_once 'Model/Occupant.php';
require_once 'DAO/ChambreDAO.php';
require_once 'DAO/ReceptionisteDAO.php';
require_once 'DAO/OccupantDAO.php';
require_once 'Model/Receptioniste.php';
require_once 'DAO/ReservationDAO.php';
require_once 'DAO/ClientDAO.php';
require_once 'DAO/ReglementDAO.php';
require_once 'Model/Reglement.php';
require_once 'Model/Reservation.php';


if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'savechambre': {

                $type = $_POST['type'];
                $prix = $_POST['prix'];
                $etage = $_POST['etage'];
                $chambre = new Chambre(0, $type, $prix, $etage);
                ChambreDAO::save($chambre);
                header("location:index.php?action=listchambre");
            }
            break;
        case 'listchambre': {
                $chambres = ChambreDAO::findall();
                $titre = "Liste des chambres";
                $page = 'chambre/list.php';
            }
            break;
        case 'newchambre': {
                $titre = "Nouvelle de chambre";
                $page = 'chambre/new.php';
            }
            break;
        case 'delchambre': {
                $Num = $_GET['Num'];
                ChambreDAO::delete($Num);
                header("location:index.php?action=listchambre");
            }

            break;

        //client
        case 'saveclient': {
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $adresse = $_POST['adresse'];
                $solde = $_POST['solde'];
                $client = new Client(0, $nom, $prenom, $adresse, $solde);
                ClientDAO::save($client);
                header("location:index.php?action=listclient");
            }
            break;
        case 'listclient': {
                $clients = ClientDAO::findall();
                $titre = "Liste des clients";
                $page = 'client/list.php';
            }
            break;
        case 'newclient': {
                $titre = "Nouveau client";
                $page = 'client/new.php';
            }
            break;
        case 'delclient': {
                $id = $_GET['id'];
                ClientDAO::delete($id);
                header("location:index.php?action=listclient");
            }
            break;
        //receptioniste
        case 'savereceptioniste': {

                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $adresse = $_POST['adresse'];
                $matricule = $_POST['matricule'];
                $num_tel = $_POST['num_tel'];
                $receptioniste = new receptioniste(0, $nom, $prenom, $adresse, $matricule, $num_tel);

                //header("location:index.php?action=listreceptioniste");
            }
            break;
        case 'listreceptionniste': {
                $receptionistes = ReceptionisteDAO::findall();
                $titre = "liste des receptionnistes";
                $page = 'receptioniste/list.php';
            }
            break;
        case 'newreceptionniste': {
                $titre = "Nouveau receptionniste";
                $page = 'receptioniste/new.php';
            } break;
        case 'delreceptionniste': {
                $id = $_GET['id'];
                ReceptionisteDAO::delete($id);
                header("location:index.php?action=listreceptioniste");
            }
            break;
        //occupant
        case 'saveoccupant': {
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $date_naissance = $_POST['date_naissance'];
                $lieu_naissance = $_POST['lieu_naissance'];
                $nationalite = $_POST['nationalite'];
                $adresse = $_POST['adresse'];
                $profession = $_POST['profession'];
                $num_cni = $_POST['num_cni'];
                $delivre_le = $_POST['delivre_le'];
                $occupant = new Occupant(0, $nom, $prenom, $date_naissance, $lieu_naissance, $nationalite, $adresse, $profession, $num_cni, $delivre_le);
                OccupantDAO::save($occupant);
                header("location:index.php?action=listoccupant");
            }
            break;
        case 'listoccupant': {
                $occupants = OccupantDAO::findall();
                $titre = "Liste des occupants";
                $page = 'occupant/list.php';
            }
            break;
        case 'newoccupant': {
                $titre = "Nouveau occupant";
                $page = 'occupant/new.php';
            }
            break;
        case 'deloccupant': {
                $id = $_GET['id'];
                OccupantDAO::delete($id);
            }
            break;
        //reservation
        case 'savereservation': {
                $reglement = $_POST['reglement'];
                $receptioniste = $_POST['receptioniste'];
                $chambre = $_POST['chambre'];
                $occupant = $_POST['occupant'];
                $date_reservation = $_POST['date_reservation'];
                $date_confirmation = $_POST['date_confirmation'];
                $date_occupation = $_POST['date_occupation'];
                $date_depart = $_POST['date_depart'];
                $prix = $_POST['prix'];
                $motif_mission = $_POST['motif_mission'];
                $venant_de = $_POST['venant_de'];
                $se_rendant = $_POST['se_rendant'];
                $nombre_personne = $_POST['nombre_personne'];
                $mode_paiement = $_POST['mode_paiement'];
                $mode_transport = $_POST['mode_transport'];
                $reservation = new Reservation($reglement, $receptioniste, $chambre, $occupant, $date_reservation, $date_confirmation, $date_occupation, $date_depart, $prix, $venant_de, $se_rendant, $motif_mission, $nombre_personne, $mode_transport, $mode_paiement);

                header("location:index.php?action=listreservatoin");
            }
            break;
        case 'listreservation': {
                $reservations = ReservationDAO::findall();
                $titre = "Liste des reservations";
                $page = 'Reservation/list.php';
            }
            break;
        case 'newreservation': {
                $titre = "Nouvelle reservation";
                $page = 'Reservation/new.php';
            }
            break;
        case 'delreservation': {
                $id = $_GET['id'];
                ReservationDAO::delete($id);
            }

        //Reglement
        case 'savereglement': {
                $solde = $_POST['solde'];
                $date_reglement = $_POST['date_reglement'];
                $idclient = $_POST['idclient'];
                $reglement = new Reglement(0, $solde, $date_reglement);
                $client = ClientDAO::find($idclient);
                $reglement->setClient($client);
                ReglementDAO::save($reglement);
                header("location:index.php?action=listreglement");
            }
            break;
        case 'listreglement': {
                $reglements = ReglementDAO::findall();
                $titre = "Liste des reglements";
                $page = 'Reglement/list.php';
            }
            break;
        case 'newreglement': {
                $titre = "Nouveau Reglement";
                $page = 'Reglement/new.php';
            }
            break;
        case 'delreglement': {
                $id = $_GET['id'];
                ReglementDAO::delete($id);
                header("location:index.php?action=listreglement");
            }
    }
} else {
    header("location:index.php?action=listclient");
}
require 'View/layout.php';

?>

<script src="View/layout/jQuery/jquery-2.1.3.js" type="text/javascript"></script>
<script src="View/layout/jQuery/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="View/layout/bootstrap/js/bootstrap.js"></script>





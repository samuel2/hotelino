<Table border="1">
    <tr>
        <th>client</th><th>receptioniste</th><th>chambre</th><th>occupant</th><th>date_reservation</th><th>date_depart</th><th>Prix</th><th>motif_mission</th><th>Venant de</th><th>Se rendant</th><th>Nombre de personne</th><th>Mode de paiement</th><th>Mode de transport</th><th>Action</th>
    </tr>
  <?php foreach($reservations as $reservation){ ?>
    <tr>
        <td><?php echo $reservation->getClient(); ?></td>
        <td><?php echo $reservation->getReceptioniste(); ?></td>
        <td><?php echo $reservation->getChambre();?></td>
        <td><?php echo $reservation->getOccupant();?></td>
        <td><?php echo $reservation->getDate_reservation(); ?></td>
        <td><?php echo $reservation->getDate_confirmation(); ?></td>
        <td><?php echo $reservation->getDate_occupation();?></td>
        <td><?php echo $reservation->getDate_depart();?></td>
        <td><?php echo $reservation->getPrix(); ?></td>
        <td><?php echo $reservation->getMotif_mission(); ?></td>
        <td><?php echo $reservation->getVenant_de(); ?></td>
        <td><?php echo $reservation->getSe_rendant();?></td>
        <td><?php echo $reservation->getNombre_personne();?></td>
        <td><?php echo $reservation->getMode_paiement(); ?></td>
         <td><?php echo $reservation->getMode_transport(); ?></td>
    
    
        <td>Voir Modifier <a href="index.php?action=delreservation&id=<?php echo $reservation->getid(); ?>" >Supprimer</a></td>
    </tr>
  
  <?php } ?>
</table>


<a href="index.php?action=newreservation">Nouvelle reservation</a><br />


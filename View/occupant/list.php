

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Date_naissance</th>
        <th>Lieu_naissance</th>
        <th>Nationalite</th>
        <th>Adresse</th>
        <th>Profession</th>
        <th>Num_cni</th>
        <th>Delivre le</th>
        <th>Action</th>
    </tr>
    <?php foreach ($occupants as $occupant) { ?>
        <tr>
            <td><?php echo $occupant->getNom(); ?></td>
            <td><?php echo $occupant->getPrenom(); ?></td>
            <td><?php echo $occupant->getDate_naissance(); ?></td>
            <td><?php echo $occupant->getLieu_naissance(); ?></td>
            <td><?php echo $occupant->getNationalite(); ?></td>
            <td><?php echo $occupant->getAdresse(); ?></td>
            <td><?php echo $occupant->getProfession(); ?></td>
            <td><?php echo $occupant->getNum_cni(); ?></td>
            <td><?php echo $occupant->getDelivre_le(); ?></td>

            <td>Voir Modifier <a href="index.php?action=deloccupant&id=<?php echo $occupant->getid(); ?>" >Supprimer</a></td>
        </tr>

    <?php } ?>
</table>


<a href="index.php?action=newoccupant">Nouveau  Occupant</a><br />


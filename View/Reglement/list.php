


<table border="1">
    <tr>
        <th>Date_reglement</th>
        <th>Solde</th>
        <th>Client</th>
        <th>Action</th>
    </tr>
    <?php foreach ($reglements as $reglement) { ?>
        <tr>
            <td><?php echo $reglement->getDate_reglement(); ?></td>
            <td><?php echo $reglement->getSolde(); ?></td>
            <td><?php echo $reglement->getClient(); ?></td>

            <td>Voir Modifier <a href="index.php?action=delreglement&id=<?php echo $reglement->getid(); ?>" >Supprimer</a></td>
        </tr>

    <?php } ?>
</table>


<a href="index.php?action=newreglement">Nouveau Reglement</a><br />


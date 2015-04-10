
<table class="table table-striped table-bordered table-hover table-condensed">
    <fieldset>
        <legend>Liste des Clients</legend>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse</th>
            <th>Solde</th>
            <th>Action</th>
        </tr>
        <?php foreach ($clients as $client) { ?>
            <tr>
                <td><?php echo $client->getNom(); ?></td>
                <td><?php echo $client->getPrenom(); ?></td>
                <td><?php echo $client->getAdresse(); ?></td>
                <td><?php echo $client->getSolde(); ?></td>
                <td>Voir Modifier <a href="index.php?action=delclient&id=<?php echo $client->getid(); ?>" >Supprimer</a></td>
            </tr>

        <?php } ?>
    </fieldset>
</table>


<a href="index.php?action=newclient">Nouveau  Client</a><br />


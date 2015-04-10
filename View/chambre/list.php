<table class="table table-striped table-condensed table-bordered table-hover">
    <fieldset>
        <legend>Liste des Chambres</legend>
        <tr>
            <th>Numero</th>
            <th>Type</th>
            <th>Prix</th>
            <th>Etage</th>
            <th>Action</th>
        </tr>
        <?php foreach ($chambres as $chambre) { ?>
            <tr>
                <td><?php echo $chambre->getNum(); ?></td>
                <td><?php echo $chambre->getType(); ?></td>
                <td><?php echo $chambre->getPrix(); ?></td>
                <td><?php echo $chambre->getEtage(); ?></td>
                <td> <a href="index.php?action=delchambre&Num=<?php echo $chambre->getNum(); ?>" >Supprimer</a></td>
            </tr>

        <?php } ?>
    </fieldset>
</table>


<a href="index.php?action=newchambre">Nouvelle Chambre</a><br />
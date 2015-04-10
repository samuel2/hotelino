


<table border="1">
        <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>adresse</th>
        <th>matricule</th>
        <th>num_tel</th>
         <th>Action</th>
    </tr>
  <?php foreach($receptionistes as $receptioniste){ ?>
    <tr>
        <td><?php echo $receptioniste->getNom(); ?></td>
        <td><?php echo $receptioniste->getPrenom();?></td>
        <td><?php echo $receptioniste->getAdresse(); ?></td>
        <td><?php echo $receptioniste->getMatricule(); ?></td>
        <td><?php echo $receptioniste->getNum_tel(); ?></td>
          <td>Modifier <a href="index.php?action=delreceptioniste&id=<?php echo $receptioniste->getid(); ?>" >Supprimer</a></td>
    </tr>
  
  <?php } ?>
    

</table>


<a href="index.php?action=newreceptioniste">Nouveau receptioniste</a><br />
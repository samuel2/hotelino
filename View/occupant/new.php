<?php

?>
<table>
<form method="POST" action="index.php?action=saveoccupant">
  
    <tr><td>nom</td><td> <input type="text" name="nom"> </td></tr>
    <tr><td>Prenom</td><td> <input type="text" name="prenom"> </td></tr>
    <tr><td>date_naissance</td><td><input type="date" name="date_naissance"> </td></tr>
    <tr><td>lieu_naissance</td><td><input type="text" name="lieu_naissance"> </td></tr>
    <tr><td>nationalite</td><td> <input type="text" name="nationalite"> </td></tr>
    <tr><td>adresse </td><td><input type="text" name="adresse"> </td></tr>
    <tr><td>profession</td><td><input type="text" name="profession"> </td></tr>
    <tr><td>num_cni</td><td><input type="text" name="num_cni"> </td></tr>
    <tr><td>delivre_le</td><td><input type="date" name="delivre_le"> </td></tr>
   <tr><td> <input type="submit" value="Enregistrer"> </td><td><input type="reset" value="Annuler"> </td></tr>
</form>
</table>
<a href="index.php?action=listocccupant">Retour à la liste des occupants</a>
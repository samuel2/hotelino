<form class="save-form well" method="POST" action="index.php?action=saveclient">
    <fielset>
        <legend>Enregistrement du client</legend>
        <label for="nom"> Nom </label>
        <input type="text" id="nom" name="nom" /> <br/><br/>

        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" name="prenom" /> <br/><br/>

        <label for="adresse"> Adresse</label>
        <input type="text" id="adresse" name="adresse" /> <br/><br/>

        <label for="solde">Solde</label>
        <input type="text" id="solde" name="solde" /> <br/><br/>
    </fielset>

    <button class="btn btn-info" type="submit">Enregistrer<i class="icon-white icon-ok-sign"></i></button>
        <input class="btn btn-info" type="reset" value="Annuler">

</form>
<a href="index.php?action=listclient">Retour à la liste des client</a>
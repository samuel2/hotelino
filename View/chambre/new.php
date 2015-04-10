<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<form class="form-horizontal well" method="POST" action="index.php?action=savechambre">
    <div class="row">
        <div class="col-xs-1">
            <label for="type">Type</label>
        </div>
        <div class="col-xs-2">
            <input id="type" type="text" name="type">
        </div>
    </div><br/>

    <div class="row">
        <div class="col-xs-1">
            <label for="prix">Prix</label>
        </div>
        <div class="col-xs-2">
            <input id="prix" type="text" name="prix">
        </div>
    </div><br/>

    <div class="row">
        <div class="col-xs-1">
            <label for="position">Position</label>
        </div>
        <div class="col-xs-2">
            <input id="position" type="text" name="etage">
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-xs-1">
            <input type="submit" value="Enregistrer">
        </div>
        <div class="col-xs-2">
            <input type="reset" value="Annuler">
        </div>
    </div>
</form>
<a href="index.php?action=listchambre">Retour à la liste des chambres</a>
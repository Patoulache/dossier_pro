<?php function getPlacholder($val){
  return (isset($val) ? "value=\"".ucfirst($val)."\"" : "value=\"\"");
} ?>

<?php ob_start(); ?>
<div id="act1ex1">
    <div class="row"><label class="col-5"for="">Activité-type 1 </label>
    <textarea data-nom="pratiquePro" data-nombre="0" class="col-7" type="text" placeholder="Cliquez ici pour entrer l'intitulé de l'activité"><?php echo $lesinfos['activity'][0];?></textarea></div>
    <div class="row"><label class="col-5">Exemple n°1 <span class="littlepinkarrow">▶</span></label>
    <input class="col-7" type="text" <?php echo getPlacholder($lesinfos['exemples'][0][0]);?> data-example="act1ex1" placeholder="Cliquez ici pour entrer l'intitulé de l'exemple"></div>

    <ol class="col-12">
        <li class="col-12">Décrivez les tâches ou opératons que vous avez effectuées, et dans quelles conditions :</li>
        <textarea class="col-12" name="" id="" cols="30" rows="10" placeholder="Cliquez ici pour taper du texte"></textarea>

        <li>Précisez les moyens utlisés :</li>
        <textarea class="col-12" name="" id="" cols="30" rows="10" placeholder="Cliquez ici pour taper du texte"></textarea>

        <li class="col-12">Avec qui avez-vous travaillé ?</li>
        <textarea class="col-12" name="" id="" cols="30" rows="10" placeholder="Cliquez ici pour taper du texte"></textarea>

        <li class="col-12">Contexte</li>
        <label class="col-8">Nom de l'entreprise, organisme ou association<span class="littlepinkarrow">▶</span></label>
        <input class="col-4"type="text" placeholder="Cliquez ici pour taper du texte.">
        <label class="col-5">Chantier, atelier, service <span class="littlepinkarrow">▶</span></label>
        <input class="col-7"type="text" placeholder="Cliquez ici pour taper du texte">
        <label class="col-4">Période d'exercice <span class="littlepinkarrow">▶</span></label>
        <span class="col-1">Du</span>
        <input class="col-3"type="date" placeholder="Cliquez ici">
        <span class="col-1">au</span>
        <input class="col-3"type="date" placeholder="Cliquez ici">

        <li class="col-12">Informations complémentaires (facultatif)</li>
        <textarea class="col-12" name="" id="" cols="30" rows="10" placeholder="Cliquez ici pour taper du texte"></textarea>
    </ol>
</div>
<?php $contenu = ob_get_clean(); ?>

<?php function getPlacholder($val){
  return ($val ? "value=\"".ucfirst($val)."\"" : "value=\"\"");
} ?>

<?php ob_start(); ?>
<?php for ($i=0;$i< count($lesinfos['activity']);$i ++): ?>
  <?php for ($j=0;$j< count($lesinfos['lesQuestions'][$i]);$j ++): ?>


    <div class="clearmarge" id="<?php echo 'act'. ($i + 1) . 'ex' . ($j + 1);?>">
        <div class="row"><label class="col-5"for="">Activité-type <?php echo $i +1; ?></label>
        <textarea data-nom="pratiquePro" data-nombre="<?php echo $i; ?>" class="col-7" type="text" placeholder="Cliquez ici pour entrer l'intitulé de l'activité"><?php echo $lesinfos['activity'][$i];?></textarea></div>
        <div class="row"><label class="col-5">Exemple n°<?php echo ($j +1).' '; ?><span class="littlepinkarrow">▶</span></label>
        <input class="col-7" type="text" <?php echo getPlacholder($lesinfos['lesQuestions'][$i][$j]['exemple']);?> data-example="<?php echo 'act'. $i +1 . 'ex' .$j +1;?>" placeholder="Cliquez ici pour entrer l'intitulé de l'exemple"></div>

        <ol class="col-12">
            <li class="col-12">Décrivez les tâches ou opératons que vous avez effectuées, et dans quelles conditions :</li>
            <textarea class="col-12" name="" id="" cols="30" rows="10" placeholder="Cliquez ici pour taper du texte"><?php echo $lesinfos['lesQuestions'][$i][$j]['question1'];?></textarea>

            <li>Précisez les moyens utlisés :</li>
            <textarea class="col-12" name="" id="" cols="30" rows="10" placeholder="Cliquez ici pour taper du texte"><?php echo $lesinfos['lesQuestions'][$i][$j]['question2'];?></textarea>

            <li class="col-12">Avec qui avez-vous travaillé ?</li>
            <textarea class="col-12" name="" id="" cols="30" rows="10" placeholder="Cliquez ici pour taper du texte"><?php echo $lesinfos['lesQuestions'][$i][$j]['question3'];?></textarea>

            <li class="col-12">Contexte</li>
            <label class="col-8">Nom de l'entreprise, organisme ou association<span class="littlepinkarrow">▶</span></label>
            <input class="col-4"type="text" <?php echo getPlacholder($lesinfos['lesQuestions'][$i][$j]['question4']);?> placeholder="Cliquez ici pour taper du texte.">
            <label class="col-5">Chantier, atelier, service <span class="littlepinkarrow">▶</span></label>
            <input class="col-7"type="text" <?php echo getPlacholder($lesinfos['lesQuestions'][$i][$j]['chant_at_serv']);?> placeholder="Cliquez ici pour taper du texte">
            <label class="col-4">Période d'exercice <span class="littlepinkarrow">▶</span></label>
            <span class="col-1">Du</span>
            <input class="col-3"type="date" <?php echo getPlacholder($lesinfos['lesQuestions'][$i][$j]['date_debut']);?>>
            <span class="col-1">au</span>
            <input class="col-3"type="date" <?php echo getPlacholder($lesinfos['lesQuestions'][$i][$j]['date_fin']);?>>

            <li class="col-12">Informations complémentaires (facultatif)</li>
            <textarea class="col-12" name="" id="" cols="30" rows="10" placeholder="Cliquez ici pour taper du texte"><?php echo $lesinfos['lesQuestions'][$i][$j]['question5'];?></textarea>
        </ol>
    </div>
  <?php endfor;?>
<?php endfor;?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'vue/dossierPro.php' ?>

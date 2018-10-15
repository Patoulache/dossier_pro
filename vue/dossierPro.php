
<!DOCTYPE html>
<html mozdisallowselectionprint>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/fakeGrid.css">
    <title>Dossier Professionnel coda 2018</title>
</head>
<body>
  <form class="" action="index.php" method="get">
    <input type="submit" id="deco" name="redirect" value="deconnexion">
  </form>
    <header class="row repeat border-bottom">
      <img class="col-3" src="./image/1-Dossier_professionnel_version_traitement_de_text_html_2bec0533.jpg" name="image/image12.jpg">
      <!-- <div class="header"> -->
        <h1>Dossier Professionnel <sup>(DP)</sup></h1>
      <!-- </div> -->
    </header>
        <div id="coordonnées" class="row">
            <div class="left-border champ col-4">
                <p class="margin-28h"><label for="nomnaissance">Nom de naissance</label></p>
                <p class="margin-28h"><label for="usename">Nom d'usage</label></p>
                <p class="margin-28h"><label for="prenom">Prénom</label></p>
                <p class="margin-28h"><label for="adresse">Adresse</label></p>
            </div>
            <div class="champ col-1">
              <ul>
                <p class="margin-28h"><span class="littlepinkarrow">▶</span></p>
                <p class="margin-28h"><span class="littlepinkarrow">▶</span></p>
                <p class="margin-28h"><span class="littlepinkarrow">▶</span></p>
                <p class="margin-28h"><span class="littlepinkarrow">▶</span></p>
              </ul>

            </div>
            <div class="champ col-4">
                <p><input type="text" <?php echo getPlacholder($lesinfos['nom_naissance']);?> id="nomnaissance" class="insertion" name="table1" placeholder="Entrez votre nom de naissance ici."></p>
                <p><input type="text" <?php echo getPlacholder($lesinfos["nom_usage"]);?> id="nomusage" name="table1" placeholder="Entrez votre nom d'usage ici."></p>
                <p><input type="text" <?php echo getPlacholder($lesinfos['prenom']);?> id="prenom" name="table1" placeholder="Entrez votre prénom ici."></p>
                <p><textarea id="adresse" cols="28" class="insertion" name="table1" placeholder="Entrez votre adresse ici."><?php echo $lesinfos['adresse'];?></textarea></p>

            </div>
        </div>

        <div class="row">
            <h2 class="col-12">Titre professionnel visé</h2>
            <div class="col-12 border-top border-bottom">

            <input class="col-10  marg-1 insertion" name="table2" type="text" <?php echo getPlacholder($lesinfos['titre_pro_vise']);?> id="titrevise" placeholder="Cliquez ici pour entrer l'intitulé du titre professionnel visé." autocomplete="off">
            <div class="col-10  marg-1 nopaddingTop" id="resultautocomplete"></div>
          </div>


              <fieldset class="col-12">
                <legend><h3>Modalité d'accès :</h3></legend>
                <ul class="col-1">
                  <input type="checkbox" id="checkbox1" checked>
                  <input type="checkbox" id ="checkbox2">
                </ul>
                <ul class="col-11">
                  <div>Parcours de formation</div>
                  <div class="margin-10h">Validation des Acquis de l'Expérience (VAE)</div>
                </ul>
              </fieldset>

        </div>

        <article class="row">
        <h2 class="col-12">Présentation du dossier</h2>
        <div id="divider3"></div>
            <div class="presdossier">
                <section class="col-12 section1">
                    <p>
                        Le dossier professionnel (DP) constitue un élément du système de validation du titre professionnel. <b>Ce titre est délivré par le Ministère chargé de l’emploi.</b>
                    </p>
                    <p>
                        Le DP appartient au candidat. Il le conserve, l’actualise durant son parcours et le présente <b>obligatoirement à chaque session d’examen.</b>
                    </p>
                    <p>
                        Pour rédiger le DP, le candidat peut être aidé par un formateur ou par un accompagnateur VAE.
                    </p>
                    <p>
                        Il est consulté par le jury au moment de la session d’examen.
                    </p>
                </section>

                <h4 class="col-12">Pour prendre sa décision, le jury dispose :</h4>

                <section class="col-12">
                    <ol class="littlepinkarrow">
                        <li><span class="blackColor">Des résultats de la mise en situation professionnelle complétés, éventuellement, du questionnaire professionnel ou de l’entretien professionnel ou de l’entretien technique ou du questionnement à partir de productions.</span></li>
                        <li><span class="blackColor">Du <b>Dossier Professionnel</b> (DP) dans lequel le candidat a consigné les preuves de sa pratique professionnelle</span></li>
                        <li><span class="blackColor">Des résultats des évaluations passées en cours de formation lorsque le candidat évalué est issu d’un parcours de formation</span></li>
                        <li><span class="blackColor">de l’entretien final (dans le cadre de la session titre).</span></li>
                    </ol>
                    <aside>[Arrêté du 22 décembre 2015, relatif aux conditions de délivrance des titres professionnels du ministère chargé de l’Emploi]</aside>
                </section>

                <h4 class="col-12">Ce dossier comporte :</h4>

                <section class="col-12">
                    <p>
                    <span class="littlepinkarrow">▶</span>Pour chaque activité-type du titre visé, un à trois exemples de pratique professionnelle ;
                    </p>
                    <p>
                    <span class="littlepinkarrow">▶</span>un tableau à renseigner si le candidat souhaite porter à la connaissance du jury la détention d’un titre, d’un diplôme, d’un certificat de qualification professionnelle (CQP) ou des attestations de formation ;
                    </p>
                    <p>
                    <span class="littlepinkarrow">▶</span>une déclaration sur l’honneur à compléter et à signer ;
                    </p>
                    <p>
                    <span class="littlepinkarrow">▶</span>des documents illustrant la pratique professionnelle du candidat (facultatif)
                    </p>
                    <p>
                    <span class="littlepinkarrow">▶</span>des annexes, si nécessaire.
                    </p>
                </section>
            </div>
        </article>
        <div>
            <p class="marg-1 col-11">
                Pour compléter ce dossier, le candidat dispose d’un site web en accès libre sur le site.
            </p>
        </div>
        <div id="lien">
            <p class="marg-1">
                <span class="littlepinkarrow">◢</span> <a href="http://travail-emploi.gouv.fr/titres-professionnels" target="_blank">http://travail-emploi.gouv.fr/titres-professionnels</a>
            </p>
        </div>

        <!-- ici commence la partie SOMMAIRE -->

        <div class="row sommaire">
            <h2 class="col-12">Sommaire</h2>
            <h1 class="col-12">Exemples de pratique professionnelle</h1>
            <div class="col-12">
                <div class="row"><textarea data-nom="pratiquePro" data-nombre="0" class="col-10" type="text"  placeholder="Intitulé de l’activité-type n° 1"><?php echo $lesinfos['activity'][0];?></textarea>
                <label class="col-1">p.</label></div>

                    <div class="row"><span class="col-1 marg-1 littlepinkarrow">▶</span><input class="col-8"type="text" data-exemple="act1ex1" <?php echo getPlacholder($lesinfos['lesQuestions'][0][0]['exemple']);?> placeholder="Intitulé de l’exemple n° 1">
                    <label class="col-1">p.</label></div>
                    <div class="row"><span class="col-1 marg-1 littlepinkarrow">▶</span><input class="col-8"type="text" data-exemple="act1ex2" <?php echo getPlacholder($lesinfos['lesQuestions'][0][1]['exemple']);?> placeholder="Intitulé de l’exemple n° 2">
                    <label class="col-1">p.</label></div>
                    <div class="row"><span class="col-1 marg-1 littlepinkarrow">▶</span><input class="col-8"type="text" data-exemple="act1ex3" <?php echo getPlacholder($lesinfos['lesQuestions'][0][2]['exemple']);?> placeholder="Intitulé de l’exemple n° 3">
                    <label class="col-1">p.</label></div>
            </div>
            <div class="col-12">
                <div class="row"><textarea data-nom="pratiquePro" data-nombre="1" class="col-10" type="text" placeholder="Intitulé de l’activité-type n° 2"><?php echo $lesinfos['activity'][1];?></textarea>
                <label class="col-1" for="">p.</label></div>

                <div class="row"><span class="col-1 marg-1 littlepinkarrow">▶</span><input class="col-8"type="text" data-exemple="act2ex1" <?php echo getPlacholder($lesinfos['lesQuestions'][1][0]['exemple']);?> placeholder="Intitulé de l’exemple n° 1">
                <label class="col-1">p.</label></div>
                <div class="row"><span class="col-1 marg-1 littlepinkarrow">▶</span><input class="col-8"type="text" data-exemple="act2ex2" <?php echo getPlacholder($lesinfos['lesQuestions'][1][1]['exemple']);?> placeholder="Intitulé de l’exemple n° 2">
                <label class="col-1">p.</label></div>
                <div class="row"><span class="col-1 marg-1 littlepinkarrow">▶</span><input class="col-8"type="text" data-exemple="act2ex3" <?php echo getPlacholder($lesinfos['lesQuestions'][1][2]['exemple']);?> placeholder="Intitulé de l’exemple n° 3">
                <label class="col-1">p.</label></div>
            </div>

            <div class="col-12">
                <label class="col-10">Titres, diplômes, CQP, attestations de formation (facultatif)</label>
                <label class="col-1"for="">p.</label>


                <label class="col-10">Déclaration sur l’honneur</label>
                <label class="col-1" for="">p.</label>

                <label class="col-10">Documents illustrant la pratique professionnelle (facultatif)</label>
                <label class="col-1" for="">p.</label>

                <label class="col-10">Annexes (Si le RC le prévoit)</label>
                <label class="col-1" for="">p.</label>
              </div>
      </div>

        <div class="col-12 activtype">
          <?php echo $contenu; ?>
        </div>

        <div>
            <h2 class="col-12">Titre, diplômes, CQP, attestations de formation</h2>
            <p>(facultatif)</p>

            <div class="col-3 marg-1">Intitulé</div>
            <div class="col-3 marg-1">Autorité ou organisme</div>
            <div class="col-3 marg-1">Date</div>
            <table class="col-12">
                <tr>
                </tr>
                <tr>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][0][0]);?> type="text" id="insertion" name="table7" placeholder="Cliquez ici"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][0][1]);?> type="text" id="insertion" name="table7" placeholder="Cliquez ici pour taper du texte"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][0][2]);?> type="date" id="insertion" name="table7" placeholder="Cliquez ici pour sélectionner une date"></td>
                </tr>
                <tr>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][1][0]);?> type="text" id="insertion" name="table7" placeholder="Cliquez ici"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][1][1]);?> type="text" id="insertion" name="table7" placeholder="Cliquez ici pour taper du texte"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][1][2]);?> type="date" id="insertion" name="table7" placeholder="Cliquez ici pour sélectionner une date"></td>
                </tr>
                <tr>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][2][0]);?> type="text" id="insertion" name="table7" placeholder="Cliquez ici"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][2][1]);?> type="text" id="insertion" name="table7" placeholder="Cliquez ici pour taper du texte"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][2][2]);?> type="date" id="insertion" name="table7" placeholder="Cliquez ici pour sélectionner une date"></td>
                </tr>
                <tr>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][3][0]);?>type="text" id="insertion" name="table7" placeholder="Cliquez ici"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][3][1]);?>type="text" id="insertion" name="table7" placeholder="Cliquez ici pour taper du texte"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][3][2]);?>type="date" id="insertion" name="table7" placeholder="Cliquez ici pour sélectionner une date"></td>
                </tr>
                <tr>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][4][0]);?> type="text" id="insertion" name="table7" placeholder="Cliquez ici"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][4][1]);?> type="text" id="insertion" name="table7" placeholder="Cliquez ici pour taper du texte"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][4][2]);?> type="date" id="insertion" name="table7" placeholder="Cliquez ici pour sélectionner une date"></td>
                </tr>
                <tr>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][5][0]);?> type="text" id="insertion" name="table7" placeholder="Cliquez ici"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][5][1]);?> type="text" id="insertion" name="table7" placeholder="Cliquez ici pour taper du texte"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][5][2]);?> type="date" id="insertion" name="table7" placeholder="Cliquez ici pour sélectionner une date"></td>
                </tr>
                <tr>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][6][0]);?>type="text" id="insertion" name="table7" placeholder="Cliquez ici"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][6][1]);?>type="text" id="insertion" name="table7" placeholder="Cliquez ici pour taper du texte"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][6][2]);?>type="date" id="insertion" name="table7" placeholder="Cliquez ici pour sélectionner une date"></td>
                </tr>
                <tr>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][7][0]);?>type="text" id="insertion" name="table7" placeholder="Cliquez ici"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][7][1]);?>type="text" id="insertion" name="table7" placeholder="Cliquez ici pour taper du texte"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][7][2]);?>type="date" id="insertion" name="table7" placeholder="Cliquez ici pour sélectionner une date"></td>
                </tr>
                <tr>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][8][0]);?> type="text" id="insertion" name="table7" placeholder="Cliquez ici"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][8][1]);?> type="text" id="insertion" name="table7" placeholder="Cliquez ici pour taper du texte"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][8][2]);?> type="date" id="insertion" name="table7" placeholder="Cliquez ici pour sélectionner une date"></td>
                </tr>
                <tr>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][9][0]);?> type="text" id="insertion" name="table7" placeholder="Cliquez ici"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][9][1]);?> type="text" id="insertion" name="table7" placeholder="Cliquez ici pour taper du texte"></td>
                    <td><input <?php echo getPlacholder($lesinfos['table7'][9][2]);?> type="date" id="insertion" name="table7" placeholder="Cliquez ici pour sélectionner une date"></td>
                </tr>
            </table>
        </div>
        <div>
            <h2 class="col-12">Déclaration sur l'honneur</h2>
            <p class="col-12">
                Je soussigné(e)[prénom et nom] <input size="52" type="text" value="<?php echo ucfirst($lesinfos["nom_usage"]). ' '.ucfirst($lesinfos["prenom"]) ?>" placeholder="Cliquez ici pour taper du texte"><br>
                déclare sur l'honneur que les renseignements fournis dans ce dossier sont exacts et que je<br>
                suis l'auteur(e) des réalisations jointes.
            </p>
            <p class="col-12">
                Fait à <input type="text" placeholder="Cliquez ici pour taper du texte">
            </p>
            <p class="col-12">
                Le <input type="date" placeholder="Cliquez ici pour choisir une date">
            </p>
            <p class="col-12">
                pour faire valoir ce que de droit.
            </p>
            <p class="col-12">
                Signature :
            </p>
        </div>
        <div>
            <h2  class="col-12">Documents illustrant la pratique professionnelle</h2>
            <p>(facultatif)</p>
            <h3 class="col-12">Intitulé</h3>

            <input class="col-12" type="text" <?php echo getPlacholder($lesinfos['table8'][0]);?> id="insertion" name="table8" placeholder="Cliquez ici pour taper du texte">
            <input class="col-12" type="text" <?php echo getPlacholder($lesinfos['table8'][1]);?> id="insertion" name="table8" placeholder="Cliquez ici pour taper du texte">
            <input class="col-12" type="text" <?php echo getPlacholder($lesinfos['table8'][2]);?> id="insertion" name="table8" placeholder="Cliquez ici pour taper du texte">
            <input class="col-12" type="text" <?php echo getPlacholder($lesinfos['table8'][3]);?> id="insertion" name="table8" placeholder="Cliquez ici pour taper du texte">
            <input class="col-12" type="text" <?php echo getPlacholder($lesinfos['table8'][4]);?> id="insertion" name="table8" placeholder="Cliquez ici pour taper du texte">
            <input class="col-12" type="text" <?php echo getPlacholder($lesinfos['table8'][5]);?> id="insertion" name="table8" placeholder="Cliquez ici pour taper du texte">
            <input class="col-12" type="text" <?php echo getPlacholder($lesinfos['table8'][6]);?> id="insertion" name="table8" placeholder="Cliquez ici pour taper du texte">
            <input class="col-12" type="text" <?php echo getPlacholder($lesinfos['table8'][7]);?> id="insertion" name="table8" placeholder="Cliquez ici pour taper du texte">
            <input class="col-12" type="text" <?php echo getPlacholder($lesinfos['table8'][8]);?> id="insertion" name="table8" placeholder="Cliquez ici pour taper du texte">
            <input class="col-12" type="text" <?php echo getPlacholder($lesinfos['table8'][9]);?> id="insertion" name="table8" placeholder="Cliquez ici pour taper du texte">
        </div>
        <div>
            <h2 class="col-12">Annexes</h2>
            <p class="col-12">(Si le RC le prévoit)</p>
            <textarea class="col-12" name="table9" id="insertion" cols="30" rows="10"><?php echo $lesinfos['table9'];?></textarea>
        </div>
        <button>Valider</button>
    <script src="js/biblio.js" charset="utf-8"></script>
    <script src="js/dossierpro.js" charset="utf-8"></script>
    <script src="js/implexemple.js" charset="utf-8"></script>
    <script src="js/insertDonnees.js" charset="utf-8"></script>
</body>
</html>

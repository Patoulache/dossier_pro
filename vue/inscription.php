<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>inscription</title>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header>
        <img src="image/1-Dossier_professionnel_version_traitement_de_text_html_2bec0533.jpg" name="image/image12.jpg">
        <div class="header">
            <h1>Dossier Professionnel <sup>(DP)</sup></h1>
        </div>
    </header>
    <main>
      <form class="center" action="index.php?action=setinscription" method="post">
        <table>
          <tr>
            <td><label for="nom">votre nom de famille</label></td>
            <td><input id="nom" type="text" name="nom" value="" required></td>
          </tr>

          <tr>
            <td><label for="prenom">votre prénom</label></td>
            <td><input id="prenom" type="text" name="prenom" value="" required></td>
          </tr>
          <tr>
            <td><label for="email1">adresse mail</label></td>
            <td> <input id="email1" type="email" name="email" value=""></td>
            <td id="emailtohide" class="hidden">email déjà utilisé</td>
          </tr>
          <tr>
            <td><label for="email2">check adresse mail</label></td>
            <td> <input id="email2" type="email" name="email1" value=""></td>
          </tr>
          <tr>
            <td><label for="pass">un password</label></td>
            <td><input type="password" id="password1" value="" required></td>
            <td>entre 8 et 20 caractères. Lettres chiffres et #!@</td>
          </tr>
          <tr>
            <td><label for="checkpass">votre password encore une fois ;)</label></td>
            <td><input type="password" id="password2" name="password" value="" required></td>
          </tr>
          <tr>
            <td></td>
            <td><input id="BTNinscrip" type="submit" value="inscription" disabled></td>
          </tr>
        </table>
      </form>
    </main>
    <footer>
      <div id="rgpd" class="">
        <p>nous récoltons vos informations dans le seul but de répondre au service</p>
        <button id="BTNoui" type="button" class="vert" name="ok">bien sûr, pas de problème sinon je ne serais pas là</button>
        <button id="BTNnon" type="button" class="vert" name="non">non merci</button>
      </div>
    </footer>
    <script src="js/biblio.js" charset="utf-8"></script>
    <script src="js/inscription.js" charset="utf-8"></script>
  </body>
</html>

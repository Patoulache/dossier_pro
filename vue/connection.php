<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet"> 
    <link rel="stylesheet" href="css/master.css">
    <title>connexion</title>
  </head>
  <body>
    <header>
            <img src="./image/1-Dossier_professionnel_version_traitement_de_text_html_2bec0533.jpg" name="image/image12.jpg">
            <div class="header">
                <h1>Dossier Professionnel <sup>(DP)</sup></h1>
            </div>
            <div  class="adroite">
              Pas encore inscrit? <a href="index.php?action=inscription">inscription</a>
            </div>
        </header>
    </header>
    <main>
    <form class="" action="index.php?action=connection" method="post">
      <table>

      <tr>
        <td> <label for="email">entrez e_mail :</label> </td>
        <td> <input id="email" type="email" name="email" placeholder="e-mail" value="" required> </td>
      </tr>
      <tr>
        <td> <label for="pass">votre password: </label></td>
        <td> <input id="pass" type="password" name="pass" placeholder="mot de passe" value="" required></td>
      </tr>
      <tr>
        <td></td>
        <td><input id="btnconnection" type="submit" value="connexion"></td>
      </tr>
    </table>
    </form>
  </main>
  <script src="js/connection.js" charset="utf-8"></script>
  </body>
</html>

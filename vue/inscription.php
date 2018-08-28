<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>inscription</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header>
      <div class="center">
        <h2>Dossier Pro</h2>
      </div>
    </header>
    <main>
      <form class="center" action="index.html" method="post">
        <table>
          <tr>
            <td><label for="nom">votre nom de famille</label></td>
            <td><input type="text" name="nom" value="" required></td>
          </tr>

          <tr>
            <td><label for="prenom">votre prénom</label></td>
            <td><input type="text" name="prenom" value="" required></td>
          </tr>
          <tr>
            <td>adresse mail</td>
            <td> <input type="email" name="email" value=""></td>
          </tr>
          <tr>
            <td><label for="pass">un password</label></td>
            <td><input type="password" id="password1" value="" required></td>
          </tr>
          <tr>
            <td><label for="checkpass">votre password encore une fois ;)</label></td>
            <td><input type="password" id="password2" name="password" value="" required></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="inscription"></td>
          </tr>
        </table>
      </form>
    </main>
  </body>
</html>

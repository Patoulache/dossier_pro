<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
    <title>redirection</title>
  </head>
  <body>
    <header>
            <img src="./image/1-Dossier_professionnel_version_traitement_de_text_html_2bec0533.jpg" name="image/image12.jpg">
            <div class="header">
                <h1>Dossier Professionnel <sup>(DP)</sup></h1>
            </div>
    </header>
    <main>
      <div>
        <p>veuillez valider votre compte avant de vous connecter</p>
        <p>redirection dans <span id="count">5</span> sec</p>
      </div>
    </main>
    <script src="js/redirect.js" charset="utf-8"></script>
    <?php header('refresh:5;url=index.php') ?>
  </body>
</html>

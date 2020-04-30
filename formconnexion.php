<!DOCTYPE html>
<html>
    <head>
        <meta charsert="UTF-8">
        <link href="css/index.css" type="text/css" rel="stylesheet">
        <link href="css/header.css" type="text/css" rel="stylesheet">
        <link href="css/footer.css" type="text/css" rel="stylesheet">
        <link href="css/formconnexion.css" type="text/css" rel="stylesheet">
        <title> Connexion </title>
    </head>


  <body>
      <?php require_once 'templates/header.php'?>
        <h1>Merci de vous connecter !</h1>

      <form action="controllers/connexion.php" method="POST">
          <div>
              <label for="name">Prénom :</label>
              <input type="text" name="name" value="">
          </div>

          <div>
              <label for="password">Mot de passe :</label>
              <input type="password" name="password">
          </div><br/>

          <input type="submit" value="Connexion">

      </form>

      <?php require_once 'templates/footer.php'?>
  </body>
  </html>

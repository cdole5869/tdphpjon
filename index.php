<!DOCTYPE html>
<html>
    <head>
        <meta charsert="UTF-8">
        <link href="css/index.css" type="text/css" rel="stylesheet">
        <link href="css/header.css" type="text/css" rel="stylesheet">
        <link href="css/footer.css" type="text/css" rel="stylesheet">
        <title> Accueil </title>
    </head>


  <body>
      <?php require_once 'templates/header.php'?>
      <main>
          <?php if (isset($_SESSION['name'])):?>
              <h1>Bienvenue <?= ucfirst($_SESSION['name'])?> !</h1>
          <?php endif ?>
          <br/>
          <br/>
              <img src="images/livre.jpg">
      </main>
      <?php require_once 'templates/footer.php'?>
  </body>
  </html>

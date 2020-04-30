<!DOCTYPE html>
<html>
    <head>
        <meta charsert="UTF-8">
        <link href="css/index.css" type="text/css" rel="stylesheet">
        <link href="css/header.css" type="text/css" rel="stylesheet">
        <link href="css/footer.css" type="text/css" rel="stylesheet">
        <link href="css/table.css" type="text/css" rel="stylesheet">
        <title> Infos </title>
    </head>


  <body>
      <?php require_once 'templates/header.php'?>
      <main>
            <?php if ($_SESSION['name']):?>

                <?php if ($_SESSION['livre1']):?>
                    <tr>
                      <td><img src="images/avare.jpg"></td>
                      <td>L'avare</td>
                      <td>Genre comédie ou le personnage est "amoureux" de son argent</td>
                    </tr>
                <?php endif ?>

                <?php if ($_SESSION['livre2']):?>
                    <tr>
                        <td class="img"><img src="images/ca.jpg"></td>
                        <td>ça</td>
                        <td>Genre horifique avec clown qui tous les 27 ans revient pour tuer des enfants.</td>
                    </tr>
                <?php endif ?>

                <?php if ($_SESSION['livre3']):?>
                    <tr>
                        <td class="img"><img src="images/leviatemps.jpg"></td>
                        <td>Léviatemps</td>
                        <td>Genre policier thriller dans les années 1900 </td>
                    </tr>
                <?php endif ?>

                <?php if ($_SESSION['livre4']):?>
                    <tr>
                        <td class="img"><img src="images/autremonde.jpg"></td>
                        <td>Autre monde</td>
                        <td>Genre roman fantastique ou après une tempête, seuls les enfants sont restés.</td>
                    </tr>
                <?php endif ?>

            <?php endif ?>

      </main>
      <?php require_once 'templates/footer.php'?>
  </body>
  </html>

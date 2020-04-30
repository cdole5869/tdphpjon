<!DOCTYPE html>
<html>
    <head>
        <meta charsert="UTF-8">
        <link href="css/index.css" type="text/css" rel="stylesheet">
        <link href="css/header.css" type="text/css" rel="stylesheet">
        <link href="css/footer.css" type="text/css" rel="stylesheet">
        <link href="css/table.css" type="text/css" rel="stylesheet">
        <title> Listing des livres </title>
    </head>

  <body>
      <?php require_once 'templates/header.php'?>
        <main>
            <table class="space">
                <tr>
                    <td class="titre">Images</td>
                    <td class="titre">Titres</td>
                    <td class="titre">Description</td>
                    <td class="titre">Année</td>
                    <td class="titre">Cible</td>
                </tr>
                <tr>
                    <td><img class="img" src="images/avare.jpg"></td>
                    <td>L'avare</td>
                    <td>Genre comédie ou le personnage est "amoureux" de son argent</td>
                    <td>1668</td>
                    <td>Tout âge</td>
                </tr>
                <tr>
                    <td><img class="img" src="images/ca.jpg"></td>
                    <td>ça</td>
                    <td>Genre horifique avec clown qui tous les 27 ans revient pour tuer des enfants.</td>
                    <td>1988</td>
                    <td>A partir de 10 ans</td>
                </tr>
                <tr>
                    <td><img class="img" src="images/leviatemps.jpg"></td>
                    <td>Léviatemps</td>
                    <td>Genre policier thriller dans les années 1900 </td>
                    <td>2010</td>
                    <td>A partir de 14 ans</td>
                </tr>
                <tr>
                    <td><img class="img" src="images/autremonde.jpg"></td>
                    <td>Autre monde</td>
                    <td>Genre roman fantastique ou après une tempête, seuls les enfants sont restés.</td>
                    <td>2008</td>
                    <td>A partir de 14 ans</td>
                </tr>
            </table>
        </main>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charsert="UTF-8">
        <link href="css/index.css" type="text/css" rel="stylesheet">
        <link href="css/header.css" type="text/css" rel="stylesheet">
        <link href="css/footer.css" type="text/css" rel="stylesheet">
        <link href="css/profil.css" type="text/css" rel="stylesheet">
        <title> Profil </title>
    </head>


  <body>
      <?php require_once 'templates/header.php'?>
      <main>
          <h1>Bienvenue à toi !</h1>
            <div class="profil1">
                <h2>Ta photo de profil</h2>
                <img class="img" src="images/bartprofil.png">
            </div>
            <br/>

            <div>
                <h3>Ton nom</h3>
                <p>Bart</p>
            </div>
            <br/>

            <div>
                <h3>Ton histoire</h3>
                <p>J'adore faire des farces aux autres personnes. Je n'aime pas aller à l'école et je ne grandis jamais !!</p>
            </div>
            <br/>

            <div>
                <h3>Fais ton choix !</h3>
                    <form action="controllers/choix.php" method="POST">
                        <p>Quel livre souhaites-tu voir ?</p>
                            <label for="livre1">L'avare</label>
                            <input type="radio" name="livre1" value="1">
                            <label for="livre2">ça</label>
                            <input type="radio" name="livre2" value="2">
                            <label for="livre3">Léviatemps</label>
                            <input type="radio" name="livre3" value="3">
                            <label for="livre4">Autre monde</label>
                            <input type="radio" name="livre4" value="4">
                            <br/>
                            <br/>
                            <p>Souhaites-tu afficher l'année ?</p>
                            <label for="annee1">Oui</label>
                            <input type="radio" name="annee1" value="1">
                            <label for="annee1">Non</label>
                            <input type="radio" name="annee1" value="2">

                            <input type="submit" value="Valider !">


                    </form>
            </div>

      </main>
  </body>
  </html>

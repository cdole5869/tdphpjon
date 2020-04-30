<?php session_start();?>

<header>
    <nav>
        <ul>
            <li><a href="/index.php">Accueil</a></li>
            <li><a href="/listing.php">Listing</a></li>
            <?php if (isset($_SESSION['name'])):?>
                <li> <a href="/profil.php">Profil</a></li>
                <li> <a href="/controllers/deco.php">Déco</a></li>
            <?php else : ?>
            <li><a href="/formconnexion.php">Connexion</a></li>
        <?php endif ?>
        </ul>
    </nav>
</header>

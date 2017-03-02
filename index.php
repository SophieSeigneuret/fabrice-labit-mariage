<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fabrice Labit | Photographe de mariage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/gif" href="images/logo_icon.gif"/>
    <meta name="description"
          content="Votre photographe Fabrice Labit fera de votre mariage ou engagement le meilleur souvenir qu'il soit grâce à sa discrétion et la qualité de ses photos."/>
    <!-- balises Open Graph Facebook -->
    <meta property="og:url" content="http://www.fabrice-labit-mariage.com/index.php"/>
    <meta property="og:title" content="Fabrice Labit | Photographe de mariage"/>
    <meta property="og:description"
          content="Votre photographe Fabrice Labit fera de votre mariage ou engagement le meilleur souvenir qu'il soit grâce à sa discrétion et la qualité de ses photos."/>
    <meta property="og:image" content="http://www.fabrice-labit-mariage.com/images/...."/>
</head>
<body>
<?php
require_once 'views/header.php';
?>

<main class="wrapper" id="accueil">
    <section id="carousel">
        <img src="images/carousel/img-carousel-mariage-1.jpg" alt="image mariage 1 du carousel"/>
        <div>
            <h4>"Le mariage c’est la volonté à deux de créer l’unique"</h4>
            <h5>- Friedrich Neitzsche -</h5>
        </div>
    </section>
    <aside class="row">
        <div>
            <img src="images/fabrice-labit.jpg" alt="photo de profil de Fabrice Labit" class="col-2 col-s-3 col-xs-12">
        </div>
        <div class="col-10 col-s-9 col-xs-12">
            <h3>A propos de moi</h3>
            <p>Il est très important pour ce jour unique d'avoir l'assurance de faire appel à un photographe
                professionnel pour que votre journée soit capturée dans les meilleures conditions quelles que soient les
                circonstances. En observateur discret, je couvre les mariages en mode photoreportage.</p>
            <a href="apropos.php">En savoir plus sur Fabrice</a>
        </div>
    </aside>
</main>

<?php
require_once 'views/footer.php';
?>
</body>
</html>
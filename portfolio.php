<?php
require_once 'defines.php';
require_once 'db/db_access.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <?php if (array_key_exists(PREPARATIFS, $_GET)) { ?>
        <title>Photos des préparatifs de mariage par Fabrice Labit</title>
    <?php } ?>
    <?php if (array_key_exists(MARIAGE, $_GET)) { ?>
        <title>Photos de mariages par Fabrice Labit</title>
    <?php } ?>
    <?php if (array_key_exists(ENGAGEMENT, $_GET)) { ?>
        <title>Photos d'engagement par Fabrice Labit</title>
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- css grille portfolio -->
    <link rel="stylesheet" href="css/porfolio.css">
    <!-- css slider portfolio -->
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
    <!-- css main -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/gif" href="images/logo_icon.gif"/>
    <!-- description -->
    <?php if (array_key_exists(PREPARATIFS, $_GET)) { ?>
    <meta name="description"
          content="Fabrice Labit est présent dès les préparatifs de mariage qui font partie intégrante de cette journée : maquillage, habillage, ou encore décoration."/>
    <?php } ?>
    <?php if (array_key_exists(MARIAGE, $_GET)) { ?>
        <meta name="description"
              content="A la mairie, à l'église, à la réception, en soirée, en intérieur ou extérieur, Fabrice Labit retrace en photos votre journée de mariage."/>
    <?php } ?>
    <?php if (array_key_exists(ENGAGEMENT, $_GET)) { ?>
        <meta name="description"
              content="Fiançailles, photos de couples, ou session où vous revêtissez vos habits de mariage, Fabrice Labit couvre l'événement."/>
    <?php } ?>
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

<!-- sélection de la page préparatifs -->
<?php if (array_key_exists(PREPARATIFS, $_GET)) {
    $photos = get_photos_by_category(1);
    ?>
    <main class="wrapper" id="preparatifs">
        <h2>Préparatifs</h2>

        <div class="content" id="ajax-content">
            <ul class="portfolio-grid">
                <?php foreach ($photos as $id => $photo) { ?>
                    <li class="grid-item">
                        <a href="<?= IMG_PATH, $photo['nom_photo'] ?>" data-fancybox="gallery">
                            <img src="<?= IMG_PATH, $photo['nom_photo'] ?>" alt="photo preparatif">
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </main>
<?php } ?>

<!-- sélection de la page mariage -->
<?php if (array_key_exists(MARIAGE, $_GET)) {
    $album_mariage = get_album_by_category(2);
    ?>
    <main class="wrapper" id="mariage">
        <h2>Mariage</h2>
        <div class="content"  id="ajax-content">
            <ul class="portfolio-grid">
                <?php foreach ($album_mariage as $id => $album) { ?>
                    <li class="grid-item">
                        <img src="<?= IMG_PATH, $album['nom_photo'] ?>" alt="photo couple">
                        <a class="ajax-link" href="index.php">
                            <div class="grid-hover">
                                <h1><?= $album['nom_album'] ?></h1>
                                <p><?= $album['date'] ?></p>
                            </div>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </main>
    <?php } ?>

<!-- sélection de la page engagement -->
<?php if (array_key_exists(ENGAGEMENT, $_GET)) {
    $photos = get_photos_by_category(3);
    ?>
    <main class="wrapper" id="engagement">
        <h2>Engagement</h2>

        <div class="content" id="ajax-content">
            <ul class="portfolio-grid">
                <?php foreach ($photos as $id => $photo) { ?>
                    <li class="grid-item">
                        <a href="<?= IMG_PATH, $photo['nom_photo'] ?>" data-fancybox="gallery">
                            <img src="<?= IMG_PATH, $photo['nom_photo'] ?>" alt="photo preparatif">
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </main>
<?php } ?>



<?php
require_once 'views/footer.php';
require_once 'views/script_portfolio.php';
?>

</body>
</html>
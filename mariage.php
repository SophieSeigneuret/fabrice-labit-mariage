<?php
require_once 'defines.php';
require_once 'db/db_access.php';
// get_photos_by_category(2);

$photos = get_photos_by_category(2);
//var_dump($photos);

$album = get_album();
// var_dump($album);

$album_mariage = get_album_by_category(2);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Photos de mariages par Fabrice Labit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/porfolio.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/gif" href="images/logo_icon.gif"/>
    <meta name="description"
          content="A la mairie, à l'église, à la réception, en soirée, en intérieur ou extérieur, Fabrice Labit retrace en photos votre journée de mariage"/>
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

<main class="wrapper" id="mariage">
    <h2>Mariage</h2>
<!--    <div class="row" id="my-gallery-container">-->
<!---->
<!--        --><?php //foreach ($photos as $id => $photo) { ?>
<!--            <div class="item col-4 col-m-6 col-s-12">-->
<!--                <a href="#"><img src="--><?//= IMG_PATH, $photo['nom_photo'] ?><!--" alt="photo mariage"></a>-->
<!--            </div>-->
<!---->
<!--        --><?php //} ?>
<!--    </div>-->

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

<?php
require_once 'views/footer.php';
require_once 'views/script_portfolio.php';
?>
</body>
</html>
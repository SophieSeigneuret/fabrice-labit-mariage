<?php
require_once 'defines.php';
require_once 'db/db_access.php';

$photos = get_photos_by_category(1);
//var_dump($photos);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Photos des préparatifs de mariage par Fabrice Labit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/gif" href="images/logo_icon.gif"/>
    <meta name="description"
          content="Fabrice Labit est présent dès les préparatifs de mariage qui font partie intégrante de cette journée : maquillage, habillage, ou encore décoration."/>
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
    <h2>Préparatifs</h2>
    <div class="row" id="my-gallery-container">

        <?php foreach ($photos as $id => $photo) { ?>
            <div class="item col-4 col-m-6 col-s-12">
                <a href="#"><img src="<?= IMG_PATH, $photo['nom_photo'] ?>" alt="photo mariage"></a>
            </div>

        <?php } ?>
    </div>
</main>

<?php
require_once 'views/footer.php';
?>
</body>
</html>
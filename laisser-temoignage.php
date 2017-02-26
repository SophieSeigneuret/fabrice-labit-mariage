<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Laissez votre témoignage à Fabrice Labit | Photographe de mariage</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,400i" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/gif" href="images/logo_icon.gif"/>
    <meta name="description"
          content="Les couples ont la possibilité de laisser via le formulaire un témoignage de sympathie au photographe"/>
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

<main class="wrapper" id="laisser-temoignage">
    <h2>Laissez-moi votre témoignage</h2>

    <div class="img-bouquets">
        <img src="images/img-bouquet-mariage-1.jpg" alt="photo bouquet de mariage 1"><!--
     --><img src="images/img-bouquet-mariage-2.jpg" alt="photo bouquet de mariage 2"><!--
     --><img src="images/img-bouquet-mariage-3.jpg" alt="photo bouquet de mariage 3"><!--
     --><img src="images/img-bouquet-mariage-4.jpg" alt="photo bouquet de mariage 4">
    </div>

    <div>
        <p>Je vous serais très reconnaissant de me laisser un témoignage de sympathie et dire si vous avez apprécié mon travail.</p>
        <form action="" id="form-temoignage">
            <div class="row">
                <label for="nom" class="col-3">Prénoms du couple</label>
                <input type="text" name="nom" id="nom" class="col-9" value="" placeholder="exemple : Camille & Fabrice" />
            </div>
            <div class="row">
                <label for="email" class="col-3">Email</label>
                <input type="email" name="email" id="email" class="col-9" value="" />
            </div>
            <div class="row">
                <label class="col-3">Type d'événement</label>
                <div class="col-2 type-check">
                    <input type="checkbox" name="mariage" id="mariage" value="mariage" />
                    <label for="mariage">Mariage</label>
                </div>
                <div class="col-2 type-check">
                    <input type="checkbox" name="engagement" id="engagement" value="engagement" />
                    <label for="engagement">Engagement</label>
                </div>
            </div>
            <div class="row">
                <label for="lieu" class="col-3">Lieu de l'événement</label>
                <input type="text" name="lieu" id="lieu" class="col-9" value="" />
            </div>
            <div class="row">
                <label for="message" class="col-12">Votre témoignage</label>
                <textarea name="" id="message" rows="8" class="col-12" placeholder="600 caractères maximum"></textarea>
            </div>
            <input type="submit" name="submit" value="Envoyer">
        </form>
    </div>
</main>

<?php
require_once 'views/footer.php';
?>
</body>
</html>
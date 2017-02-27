<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contactez votre photographe de mariage Fabrice Labit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,400i" rel="stylesheet">
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

<main class="wrapper" id="contact">
    <div class="img-bouquets">
        <img src="images/img-bouquet-mariage-1.jpg" alt="photo bouquet de mariage 1"><!--
     --><img src="images/img-bouquet-mariage-2.jpg" alt="photo bouquet de mariage 2"><!--
     --><img src="images/img-bouquet-mariage-3.jpg" alt="photo bouquet de mariage 3"><!--
     --><img src="images/img-bouquet-mariage-4.jpg" alt="photo bouquet de mariage 4">
    </div>

    <div>
        <h2>Fabrice Labit</h2>
        <h3>06 83 25 24 89</h3>
        <h3><a href="mailto:contact@fabricelabit.com">contact@fabricelabit.com</a></h3>
    </div>

    <p>Pour toute information ou demande de disponibilité, n’hésitez pas à me contacter via le formulaire ci-dessous.
        Je me ferai un plaisir de vous répondre dans les plus brefs délais. </p>

    <form action="" id="form-contact">
        <div class="row">
            <label for="nom" class="col-3">Prénom, nom</label>
            <input type="text" name="nom" id="nom" class="col-9" value="" />
        </div>
        <div class="row">
            <label for="telephone" class="col-3">Téléphone</label>
            <input type="tel" name="telephone" id="telephone" class="col-9" value="" />
        </div>
        <div class="row">
            <label for="email" class="col-3">Email</label>
            <input type="email" name="email" id="email" class="col-9" value="" />
        </div>
        <div class="row">
            <label for="date" class="col-3">Date de l'événement</label>
            <input type="text" name="date" id="date" class="col-9" value="" />
        </div>
        <div class="row">
            <label for="lieu" class="col-3">Lieu de l'événement</label>
            <input type="text" name="lieu" id="lieu" class="col-9" value="" />
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
            <label class="col-3">Votre budget photographe</label>
            <div class="col-2 type-radio">
                <input type="radio" name="budget" id="1700" value="1700" />
                <label for="1700">< 1700€</label>
            </div>
            <div class="col-3 type-radio">
                <input type="radio" name="budget" id="2000" value="2000" />
                <label for="2000">1700€ - 2200€</label>
            </div>
            <div class="col-2 type-radio">
                <input type="radio" name="budget" id="2200" value="2200" />
                <label for="2200">> 2200€</label>
            </div>

        </div>
        <div class="row">
            <label for="question" class="col-3">Comment m'avez-vous connu ?</label>
            <select name="question" id="question" class="col-9">
                <option value="int">Internet</option>
                <option value="reco">Recommandation</option>
                <option value="bao">Bouche à oreille</option>
            </select>
        </div>
        <div class="row">
            <label for="message" class="col-12">Votre message</label>
            <textarea name="message" id="message" rows="8" class="col-12"></textarea>
        </div>
        <input type="submit" name="submit" value="Envoyer">
    </form>
</main>

<?php
require_once 'views/footer.php';
?>
</body>
</html>
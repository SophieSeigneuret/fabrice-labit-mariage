<?php
$page_title = 'Laissez un témoignage';

// Affichage initial du formulaire ? ou bien réception des données ?
$en_reception = array_key_exists('nom', $_POST);

// Réception du nom
$nom = '';
$nom_valide = true;
if (array_key_exists('nom', $_POST)) {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $nom_valide = (1 === preg_match('/[A-Za-z]\w{0,}/', $nom));
}

// reception du courriel
$email = '';
$email_valide = true;
if (array_key_exists('email', $_POST)) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $email_valide = (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
}

// reception du type
$type = array();
$type_valide = true;
if (array_key_exists('type', $_POST)) {
    $type = $_POST['type'];
}
// type valide si affichage initial ou si au moins 1 case est cochée
if ($en_reception && empty($type)) {
    $type_valide = false;
}

// Réception du lieu
$lieu = '';
$lieu_valide = true;
if (array_key_exists('lieu', $_POST)) {
    $lieu = filter_input(INPUT_POST, 'lieu', FILTER_SANITIZE_STRING);
    $lieu_valide = (1 === preg_match('/[A-Za-z]\w{0,}/', $lieu));
}

// Réception du message
$message = '';
$message_valide = true;
if (array_key_exists('message', $_POST)) {
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $message_valide = (1 === preg_match('/[A-Za-z]\w{0,}/', $message));
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Laissez votre témoignage à Fabrice Labit | Photographe de mariage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Roboto:300" rel="stylesheet">
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
        <form action="laisser_temoignage.php" id="form-temoignage" method="post">
            <!-- champ nom -->
            <div class="row">
                <label for="nom" class="col-3 col-m-4 col-s-12">Prénoms du couple <?= ! $nom_valide ? '<span class="invalid">*</span>' : '' ?></label>
                <input type="text" name="nom" id="nom" class="col-9 col-m-8 col-s-12" value="<?= $nom ?>" placeholder="ex : Camille & Fabrice" />
                <?php if(! $nom_valide) { ?>
                    <p class="col-3 col-m-4 col-s-12"></p>
                    <p class="col-9 col-m-8 col-s-12">Merci de remplir le champs</p> <!-- message d'erreur si champ vide -->
                <?php } ?>
            </div>
            <!-- champ email -->
            <div class="row">
                <label for="email" class="col-3 col-m-4 col-s-12">Email <?= ! $email_valide ? '<span class="invalid">*</span>' : '' ?></label>
                <input type="email" name="email" id="email" class="col-9 col-m-8 col-s-12" value="<?= $email ?>" />
                <?php if(! $email_valide) { ?>
                    <p class="col-3 col-m-4 col-s-12"></p>
                    <p class="col-9 col-m-8 col-s-12">Format de mail incorrect</p> <!-- message d'erreur si champ incorrect -->
                <?php } ?>
            </div>
            <!-- champ type d'événement -->
            <div class="row">
                <label class="col-3 col-m-4 col-s-12">Type d'événement <?= ! $type_valide ? '<span class="invalid">*</span>' : '' ?></label>
                <div class="col-2 col-m-3 col-s-6 col-xs-12 type-check">
                    <input type="checkbox" name="type[]" id="mariage" value="mariage"
                        <?= array_key_exists('type', $_POST) && in_array('mariage', $_POST['type']) ? 'checked="checked"' : '' ?>
                    />
                    <label for="mariage">Mariage</label>
                </div>
                <div class="col-7 col-m-4 col-s-6 col-xs-12 type-check">
                    <input type="checkbox" name="type[]" id="engagement" value="engagement"
                        <?= array_key_exists('type', $_POST) && in_array('engagement', $_POST['type']) ? 'checked="checked"' : '' ?>
                    />
                    <label for="engagement">Engagement</label>
                </div>
                <?php if(! $type_valide) { ?>
                    <p class="col-3 col-m-4 col-s-12"></p>
                    <p class="col-9 col-m-8 col-s-12">Merci de cocher au moins 1 case</p> <!-- message d'erreur si case non cochée -->
                <?php } ?>
            </div>
            <!-- champ lieu événement -->
            <div class="row">
                <label for="lieu" class="col-3 col-m-4 col-s-12">Lieu de l'événement <?= ! $lieu_valide ? '<span class="invalid">*</span>' : '' ?></label>
                <input type="text" name="lieu" id="lieu" class="col-9 col-m-8 col-s-12" value="<?= $lieu ?>" />
                <?php if(! $lieu_valide) { ?>
                    <p class="col-3 col-m-4 col-s-12"></p>
                    <p class="col-9 col-m-8 col-s-12">Merci de remplir le champs</p> <!-- message d'erreur si champ vide -->
                <?php } ?>
            </div>
            <!-- champ message -->
            <div class="row">
                <label for="message" class="col-12">Votre témoignage <?= ! $message_valide ? '<span class="invalid">*</span>' : '' ?></label>
                <textarea name="message" id="message" rows="8" class="col-12" placeholder="600 caractères maximum"><?= $message ?></textarea>
                <?php if(! $message_valide) { ?>
                    <p class="col-12">Merci de remplir le champs</p> <!-- message d'erreur si champ vide -->
                <?php } ?>
            </div>
            <input type="submit" name="submit" value="Envoyer">
        </form>
    </div>
</main>

<?php
require_once 'views/footer.php';
?>
<script src="scripts/main.js"></script>
</body>
</html>
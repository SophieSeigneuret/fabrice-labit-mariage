<?php
require_once 'defines.php';

$choix_reponses = array ('Votre choix', 'Internet', 'Recommandation', 'Bouche à oreille');

// remplace les caractères accentués d'une chaine par leur équivalent sans accent
function retire_accent ($str) {
    $resultat = strtolower(str_replace(array('é','è','ï','à'), array('e','e','i','a'), $str));
    return $resultat;
}


// Affichage initial du formulaire ? ou bien réception des données ?
$en_reception = array_key_exists('nom', $_POST)
    && array_key_exists('telephone', $_POST)
    && array_key_exists('email', $_POST)
    && array_key_exists('date', $_POST)
    && array_key_exists('lieu', $_POST)
//    && array_key_exists('type', $_POST)
    && array_key_exists('budget', $_POST)
    && array_key_exists('reponse', $_POST)
    && array_key_exists('message', $_POST);

// Réception du nom
$nom = '';
$nom_valide = true;
if (array_key_exists('nom', $_POST)) {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $nom_valide = (1 === preg_match('/[A-Za-z]\w{0,}/', $nom));
}

//telephone
$telephone = '';
$telephone_valide = true;
if(array_key_exists('telephone', $_POST)){
    $telephone = filter_input(INPUT_POST, 'telephone' , FILTER_SANITIZE_STRING);
    $telephone_valide = (1 === preg_match('/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/', $telephone));
}

// reception du courriel
$email = '';
$email_valide = true;
if (array_key_exists('email', $_POST)) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $email_valide = (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
}

// Réception de la date
$date = '';
$date_valide = true;
if (array_key_exists('date', $_POST)) {
    $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
    $date_valide = (1 === preg_match('/^\d{1,2}/\d{1,2}/\d{4}$/', $date));
}

// Réception du lieu
$lieu = '';
$lieu_valide = true;
if (array_key_exists('lieu', $_POST)) {
    $lieu = filter_input(INPUT_POST, 'lieu', FILTER_SANITIZE_STRING);
    $lieu_valide = (1 === preg_match('/[A-Za-z]\w{0,}/', $lieu));
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

//// reception comment m'avez-vous connu
//$reponse_valide = true;
//$reponse = '';
//if (array_key_exists('reponse', $_POST)) {
//    $reponse = $_POST['reponse'];
//}
//// reponse valide si affichage initial ou si au moins 1 réponse sélectionnée
//if ($en_reception && empty($reponse)) {
//    $reponse_valide = false;
//}

// reception comment m'avez-vous connu
$reponse_valide = true;
$reponse = '';
if($_POST['reponse'] == 'Vot') {
    $reponse_valide = false;
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

    <form action="contact.php" id="form-contact" method="post">
        <!-- champ nom -->
        <div class="row">
            <label for="nom" class="col-3">Prénom, nom</label>
            <input type="text" name="nom" id="nom" placeholder="prénom et nom" value="<?= $nom ?>" class="col-9 <?= $nom_valide ? '' : 'invalid' ?>" />
            <?php if(! $nom_valide) { ?>
                <p class="col-3"></p>
                <p class="col-9">Oups, champs non rempli</p> <!-- message d'erreur si champ vide -->
            <?php } ?>
        </div>
        <!-- champ téléphone -->
        <div class="row">
            <label for="telephone" class="col-3">Téléphone</label>
            <input type="tel" name="telephone" id="telephone" value="<?= $telephone ?>" class="col-9 <?= $telephone_valide ? '' : 'invalid' ?>" />
            <?php if(! $telephone_valide) { ?>
                <p class="col-3"></p>
                <p class="col-9">Téléphone au format 06 12 34 56 78 ou +336 12 34 56 78</p> <!-- message d'erreur si champ incorrect -->
            <?php } ?>
        </div>
        <!-- champ email -->
        <div class="row">
            <label for="email" class="col-3">Email</label>
            <input type="email" name="email" id="email" value="<?= $email ?>" class="col-9 <?= $email_valide ? '' : 'invalid' ?>" />
            <?php if(! $email_valide) { ?>
                <p class="col-3"></p>
                <p class="col-9">Format de mail incorrect</p> <!-- message d'erreur si champ incorrect -->
            <?php } ?>
        </div>
        <!-- champ date événement -->
        <div class="row">
            <label for="date" class="col-3">Date de l'événement</label>
            <input type="text" name="date" id="date" class="col-9" placeholder="au format JJ/MM/AAAA" value="" />
        </div>
        <!-- champ lieu événement -->
        <div class="row">
            <label for="lieu" class="col-3">Lieu de l'événement</label>
            <input type="text" name="lieu" id="lieu" value="<?= $lieu ?>" class="col-9 <?= $lieu_valide ? '' : 'invalid' ?>" />
            <?php if(! $lieu_valide) { ?>
                <p class="col-3"></p>
                <p class="col-9">Oups, champs non rempli</p> <!-- message d'erreur si champ vide -->
            <?php } ?>
        </div>
        <!-- champ type d'événement -->
        <div class="row <?= $type_valide ? '' : 'invalid' ?>">
            <label class="col-3">Type d'événement</label>
            <div class="col-2 type-check">
                <input type="checkbox" name="type[]" id="mariage" value="mariage"
                    <?= array_key_exists('type', $_POST) && in_array('mariage', $_POST['type']) ? 'checked="checked"' : '' ?>
                />
                <label for="mariage">Mariage</label>
            </div>
            <div class="col-2 type-check">
                <input type="checkbox" name="type[]" id="engagement" value="engagement"
                    <?= array_key_exists('type', $_POST) && in_array('engagement', $_POST['type']) ? 'checked="checked"' : '' ?>
                />
                <label for="engagement">Engagement</label>
                <?php if(! $type_valide) { ?>
                    <p class="col-3"></p>
                    <p class="col-9">Cochez au moins 1 case</p> <!-- message d'erreur si case non cochée -->
                <?php } ?>
            </div>
        </div>
        <!-- champ budget -->
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
        <!-- champ question comment m'avez-vous connu -->
        <div class="row">
            <label for="reponse" class="col-3">Comment m'avez-vous connu ?</label>
            <select name="reponse" id="reponse" class="col-9 <?= $reponse_valide ? '' : 'invalid' ?>">
                <?php foreach ($choix_reponses as $rep) {
                    $option_value = strtolower(substr($rep, 0, 3));
                    ?>
                    <option value="<?= $option_value ?>"
                        <?= array_key_exists('reponse', $_POST) && in_array($option_value, $_POST['reponse']) ? 'selected="selected"' : '' ?>
                    ><?= $rep ?></option>
                <?php } ?>
            </select>
            <?php if(! $reponse_valide) { ?>
                <p>Sélectionnez une réponse</p>
            <?php } ?>
        </div>
        <!-- champ message -->
        <div class="row">
            <label for="message" class="col-12">Votre message</label>
            <textarea name="message" id="message" rows="8" class="col-12 <?= $lieu_valide ? '' : 'invalid' ?>"></textarea>
            <?php if(! $message_valide) { ?>
                <p class="col-12">Oups, champs non rempli</p> <!-- message d'erreur si champ vide -->
            <?php } ?>
        </div>
        <input type="submit" name="submit" value="Envoyer">
    </form>
</main>

<?php
require_once 'views/footer.php';
?>
</body>
</html>
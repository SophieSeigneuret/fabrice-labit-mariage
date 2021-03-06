<?php
$page_title = 'Contact';
require_once 'defines.php';
require_once 'envoi_mail.php';
require_once 'traitement_donnees.php';
//phpinfo();

$choix_reponses = array ('Votre choix', 'Internet', 'Recommandation', 'Bouche à oreille');

// Affichage initial du formulaire ? ou bien réception des données ?
$en_reception = array_key_exists('nom', $_POST)
    && array_key_exists('telephone', $_POST)
    && array_key_exists('email', $_POST)
    && array_key_exists('date', $_POST)
    && array_key_exists('lieu', $_POST)
//    && array_key_exists('budget', $_POST)
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
if(array_key_exists('telephone', $_POST)) {
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
//    $regex = '/^\d{1,2}\/\d{1,2}\/\d{4}$/';
    $regex = '/^(?:(?:31(\/|-| |\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-| |\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-| |\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-| |\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/';
    $date_valide = (1 === preg_match($regex, $date));
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

// reception du budget
$budget = '';
$budget_valide = true;
if (array_key_exists('budget', $_POST)) {
    $budget = $_POST['budget'];
}
if ($en_reception && empty($budget)) {
    $budget_valide = false;
}

// reception comment m'avez-vous connu
$reponse_valide = true;
$reponse = '';
if (array_key_exists('reponse', $_POST)) {
    if( $_POST['reponse'] == 'vot') {
        $reponse_valide = false;
    }
}

// Réception du message
$message = '';
$message_valide = true;
if (array_key_exists('message', $_POST)) {
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $message_valide = (1 === preg_match('/[A-Za-z]\w{0,}/', $message));
}



/* validation */
if ($en_reception && $nom_valide && $telephone_valide && $email_valide && $date_valide
    && $lieu_valide && $type_valide && $budget_valide && $reponse_valide && $message_valide) {
    // les données de formulaire sont valides
    // header('location:contact.php');
    // var_dump($email);
    // var_dump($message);
    $info_mail_contact = infos_mail_contact($nom, $telephone, $email, $date, $lieu, $type, $budget, $reponse, $message);
    envoi_mail($email, utf8_encode($info_mail_contact));
    //exit;
}




?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contactez votre photographe de mariage Fabrice Labit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
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
    <h2>Contactez-moi</h2>
    <div class="img-bouquets">
        <img src="images/img-bouquet-mariage-1.jpg" alt="photo bouquet de mariage 1"><!--
     --><img src="images/img-bouquet-mariage-2.jpg" alt="photo bouquet de mariage 2"><!--
     --><img src="images/img-bouquet-mariage-3.jpg" alt="photo bouquet de mariage 3"><!--
     --><img src="images/img-bouquet-mariage-4.jpg" alt="photo bouquet de mariage 4">
    </div>

    <div itemscope itemtype="http://schema.org/Photograph">
        <h2><span itemprop="author">Fabrice Labit</span></h2>
        <div itemscope itemtype="https://schema.org/Person">
            <h3><span itemprop="telephone">06 83 25 24 89</span></h3>
            <h3><a href="mailto:contact@fabricelabit.com"><span itemprop="email">contact@fabricelabit.com</span></a></h3>
        </div>
    </div>

    <p>Pour toute information ou demande de disponibilité, n’hésitez pas à me contacter via le formulaire ci-dessous.
        Je me ferai un plaisir de vous répondre dans les plus brefs délais. </p>

    <!-- affichage boite de dialog -->
    <?php if ($en_reception && $nom_valide && $telephone_valide && $email_valide && $date_valide
        && $lieu_valide && $type_valide && $budget_valide && $reponse_valide && $message_valide) { ?>
        <div id="dialog" title="Confirmation">
            <p>Votre mail a bien été envoyé.</p>
            <p>Merci de m'avoir contacté, je vous répondrai dans les plus brefs délais.</p>
            <a href="index.php">retour à la page d'accueil</a>
        </div>
    <?php } ?>

    <form action="contact.php" id="form-contact" method="post">
        <!-- champ nom -->
        <div class="row">
            <label for="nom" class="col-4 col-m-4 col-s-12">Prénom, nom <?= ! $nom_valide ? '<span class="invalid">*</span>' : '' ?></label>
            <input type="text" name="nom" id="nom" placeholder="prénom et nom" value="<?= $nom ?>" class="col-8 col-m-8 col-s-12 <?= ! $nom_valide ? 'error' : '' ?>" />
            <?php if(! $nom_valide) { ?>
                <p class="col-4 col-s-12"></p>
                <p class="col-8 col-s-12">Merci de remplir le champs</p> <!-- message d'erreur si champ vide -->
            <?php } ?>
        </div>
        <!-- champ téléphone -->
        <div class="row">
            <label for="telephone" class="col-4 col-m-4 col-s-12">Téléphone <?= ! $telephone_valide ? '<span class="invalid">*</span>' : '' ?></label>
            <input type="tel" name="telephone" id="telephone" value="<?= $telephone ?>" class="col-8 col-m-8 col-s-12 <?= ! $telephone_valide ? 'error' : '' ?>" />
            <?php if(! $telephone_valide) { ?>
                <p class="col-4 col-s-12"></p>
                <p class="col-8 col-s-12">Téléphone au format 06 12 34 56 78</p> <!-- message d'erreur si champ incorrect -->
            <?php } ?>
        </div>
        <!-- champ email -->
        <div class="row">
            <label for="email" class="col-4 col-m-4 col-s-12">Email <?= ! $email_valide ? '<span class="invalid">*</span>' : '' ?></label>
            <input type="email" name="email" id="email" value="<?= $email ?>" class="col-8 col-m-8 col-s-12 <?= ! $email_valide ? 'error' : '' ?>" />
            <?php if(! $email_valide) { ?>
                <p class="col-4 col-s-12"></p>
                <p class="col-8 col-s-12">Format de mail incorrect</p> <!-- message d'erreur si champ incorrect -->
            <?php } ?>
        </div>
        <!-- champ date événement -->
        <div class="row">
            <label for="date" class="col-4 col-m-4 col-s-12">Date de l'événement <?= ! $date_valide ? '<span class="invalid">*</span>' : '' ?></label>
            <input type="text" name="date" id="date" class="col-8 col-m-8 col-s-12 <?= ! $date_valide ? 'error' : '' ?>" placeholder="JJ/MM/AAAA" value="<?=$date?>" />
            <?php if(! $date_valide) { ?>
                <p class="col-4 col-s-12"></p>
                <p class="col-8 col-s-12">Merci de remplir le champs au format JJ/MM/AAAA</p> <!-- message d'erreur si champ vide -->
            <?php } ?>
        </div>
        <!-- champ lieu événement -->
        <div class="row">
            <label for="lieu" class="col-4 col-m-4 col-s-12">Lieu de l'événement <?= ! $lieu_valide ? '<span class="invalid">*</span>' : '' ?></label>
            <input type="text" name="lieu" id="lieu" value="<?= $lieu ?>" class="col-8 col-m-8 col-s-12 <?= ! $lieu_valide ? 'error' : '' ?>" />
            <?php if(! $lieu_valide) { ?>
                <p class="col-4 col-s-12"></p>
                <p class="col-8 col-s-12">Merci de remplir le champs</p> <!-- message d'erreur si champ vide -->
            <?php } ?>
        </div>
        <!-- champ type d'événement -->
        <div class="row">
            <label class="col-4 col-m-4 col-s-12">Type d'événement <?= ! $type_valide ? '<span class="invalid">*</span>' : '' ?></label>
            <div class="col-2 col-m-2 col-s-6 col-xs-12 type-check">
                <input type="checkbox" name="type[]" id="mariage" value="mariage" class="<?= ! $type_valide ? 'error' : '' ?>"
                    <?= array_key_exists('type', $_POST) && in_array('mariage', $_POST['type']) ? 'checked="checked"' : '' ?>
                />
                <label for="mariage">Mariage</label>
            </div>
            <div class="col-6 col-m-3 col-s-6 col-xs-12 type-check">
                <input type="checkbox" name="type[]" id="engagement" value="engagement" class="<?= ! $type_valide ? 'error' : '' ?>"
                    <?= array_key_exists('type', $_POST) && in_array('engagement', $_POST['type']) ? 'checked="checked"' : '' ?>
                />
                <label for="engagement">Engagement</label>
            </div>
            <?php if(! $type_valide) { ?>
                <p class="col-4 col-s-12"></p>
                <p class="col-8 col-s-12">Merci de cocher au moins 1 case</p> <!-- message d'erreur si case non cochée -->
            <?php } ?>
        </div>
        <!-- champ budget -->
        <div class="row">
            <label class="col-4 col-m-4 col-s-12">Votre budget photographe <?= ! $budget_valide ? '<span class="invalid">*</span>' : '' ?></label>
            <div class="col-2 col-m-2 col-s-3 col-xs-12 type-radio">
                <input type="radio" name="budget" id="1800" value="1800" class="<?= ! $budget_valide ? 'error' : '' ?>" <?php if($_POST['budget']=="1800") echo "checked";?> />
                <label for="1800">&lt; 1800€</label>
            </div>
            <div class="col-3 col-m-3 col-s-6 col-xs-12 type-radio">
                <input type="radio" name="budget" id="2400" value="2400" <?php if($_POST['budget']=="2400") echo "checked";?> />
                <label for="2400">1800€ - 3000€</label>
            </div>
            <div class="col-2 col-m-2 col-s-3 col-xs-12 type-radio">
                <input type="radio" name="budget" id="3000" value="3000" <?php if($_POST['budget']=="3000") echo "checked";?> />
                <label for="3000">&gt; 3000€</label>
            </div>
            <?php if(! $budget_valide) { ?>
                <p class="col-4 col-s-12"></p>
                <p class="col-8 col-s-12">Merci de cocher 1 case</p> <!-- message d'erreur si case non cochée -->
            <?php } ?>
        </div>
        <!-- champ question comment m'avez-vous connu -->
        <div class="row">
            <label for="reponse" class="col-4 col-m-6 col-s-12">Comment m'avez-vous connu ? <?= ! $reponse_valide ? '<span class="invalid">*</span>' : '' ?></label>
            <select name="reponse" id="reponse" class="col-8 col-m-6 col-s-12 <?= ! $reponse_valide ? 'error' : '' ?>">
                <?php foreach ($choix_reponses as $rep) {
                    $option_value = strtolower(substr($rep, 0, 3));
                    ?>
                    <option value="<?= $option_value ?>"
                        <?= array_key_exists('reponse', $_POST) && in_array($option_value, $_POST) ? 'selected="selected"' : '' ?>
                    ><?= $rep ?></option>
                <?php } ?>
            </select>
            <?php if(! $reponse_valide) { ?>
                <p class="col-4 col-m-6 col-s-12"></p>
                <p class="col-8 col-m-6 col-s-12">Merci de sélectionner une réponse</p>
            <?php } ?>
        </div>
        <!-- champ message -->
        <div class="row">
            <label for="message" class="col-12">Votre message <?= ! $message_valide ? '<span class="invalid">*</span>' : '' ?></label>
            <textarea name="message" id="message" rows="8" class="col-12 <?= ! $message_valide ? 'error' : '' ?>" maxlength="600"><?=$message?></textarea>
            <?php if(! $message_valide) { ?>
                <p class="col-12">Merci de remplir le champs</p> <!-- message d'erreur si champ vide -->
            <?php } ?>
        </div>
        <input type="submit" name="submit" value="Envoyer">
    </form>
</main>

<?php
require_once 'views/footer.php';
require_once 'views/script_formulaires.php';
?>
</body>
</html>
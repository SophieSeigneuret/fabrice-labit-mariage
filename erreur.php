<?php
$page_title = 'Erreur';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fabrice Labit | Photographe de mariage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/flexslider.css" />
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
<header id="header_erreur">
    <div id="logo-header" itemscope itemtype="http://schema.org/Photograph">
        <a href="index.php"><img src="images/logo-fabrice-labit-mariage.jpg" alt="logo Fabrice Labit Mariage"></a>
        <h1><span itemprop="author">Fabrice Labit</span> <span itemprop="genre">Mariage</span></h1>
    </div>
</header>
<main class="wrapper" id="error">
    <h2>Désolé, page non trouvée</h2>
    <a href="index.php">Retour à la page d'accueil</a>
    <p>Plan du site :</p>
    <div id="plan">
        <ul>
            <li><a href="index.php" class="<?php if ($page_title == 'Accueil') { echo 'active'; } ?>">ACCUEIL</a></li>
            <li><a href="portfolio.php?mariage" class="<?php if ($page_title == 'Portfolio') { echo 'active'; } ?>">PORTFOLIO</a>
                <ul>
                    <li><a href="portfolio.php?preparatifs" class="<?php if (array_key_exists(PREPARATIFS, $_GET)) {echo 'active';} ?>">Préparatifs</a></li>
                    <li><a href="portfolio.php?mariage" class="<?php if (array_key_exists(MARIAGE, $_GET)) {echo 'active';} ?>">Mariage</a></li>
                    <li><a href="portfolio.php?engagement" class="<?php if (array_key_exists(ENGAGEMENT, $_GET)) {echo 'active';} ?>">Engagement</a></li>
                </ul>
            </li>
            <li><a href="apropos.php" class="<?php if (($page_title == 'A propos') || ($page_title == 'faq')) { echo 'active'; } ?>">A PROPOS</a>
                <ul>
                    <li><a href="apropos.php" class="<?php if ($page_title == 'A propos') { echo 'active'; } ?>">A propos de moi</a></li>
                    <li><a href="faq.php" class="<?php if ($page_title == 'faq') { echo 'active'; } ?>">FAQ</a></li>
                </ul>
            </li>
            <li><a href="temoignages.php" class="<?php if (($page_title == 'Témoignages') || ($page_title == 'Laissez un témoignage')) { echo 'active'; } ?>">TEMOIGNAGES</a>
                <ul>
                    <li><a href="temoignages.php" class="<?php if ($page_title == 'Témoignages') { echo 'active'; } ?>">Ils m'ont fait confiance</a></li>
                    <li><a href="laisser_temoignage.php" class="<?php if ($page_title == 'Laissez un témoignage') { echo 'active'; } ?>">Laissez un témoignage</a></li>
                </ul>
            </li>
            <li><a href="contact.php" class="<?php if ($page_title == 'Contact') { echo 'active'; } ?>">CONTACT</a></li>
        </ul>
    </div>
</main>

<?php
require_once 'views/footer.php';
require_once 'views/script_carousel.php';
?>
</body>
</html>
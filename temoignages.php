<?php
$page_title = 'Témoignages';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Témoignages | Fabrice Labit | Photographe de mariage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/gif" href="images/logo_icon.gif"/>
    <meta name="description"
          content="Les couples qui ont fait confiance à Fabrice Labit laissent des témoignages de sympathie."/>
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

<main class="wrapper" id="temoignages">
    <h2>Ils m’ont fait confiance</h2>

    <div>
        <img src="images/photo-mariage-marine-guillaume.jpg" alt="photo mariage Marine et Guillaume" ><!--
     --><div>
            <h3>Marine & Guillaume - Mariage à paris</h3>
            <p>« Fabrice a fait un travail fantastique, aussi bien pour notre session engagement que pour le jour J. Les
                photos sont vraiment belles et transcrivent parfaitement l’atmosphere de la journee. Nous avons beaucoup
                de mal a choisir celles que nous allons encadrer. Il y en a tant!
                En plus d’etre un vraie pro, Fabrice est vraiment sympathique et discret. Nous avons beaucoup apprecié
                sa presence le jour J et vu le resultat de la e-session, nous savions que nous pouvions lui faire
                confiance les yeux fermes.
                Si vous hesitez encore sur le choix de votre photographe, n’hesitez plus, vous l’avez trouvé! »</p>
        </div>
    </div>

    <div>
        <img src="images/photo-mariage-rebecca-isaac.jpg" alt="photo mariage Rebecca et Isaac" ><!--
     --><div>
            <h3>Rebecca & Isaac - Mariage à paris</h3>
            <p>« Fabrice nous a offert le plus beau des cadeaux de mariage en acceptant de traverser la campagne Picarde
                sous la grisaille pour venir couvrir notre mariage dans le petit village de Francieres en Aout dernier.
                Annie est une artiste tres talentueuse, une photographe discrete, et passionnee, une personne genereuse
                et pleine de douceur.
                Annie, c’etait tellement agreable de t’avoir a nos cotes et partager a travers tes yeux cette belle
                journee.
                Merci infiniment pour tous les beaux souvenirs que tu nous a crees. »</p>
        </div>
    </div>

    <div>
        <img src="images/photo-engagement-sylvie-franck.jpg" alt="photo engagement Sylvie et Franck" ><!--
     --><div>
            <h3>Sylvie & Franck - Séance engagement à Versailles</h3>
            <p>« Merci pour les photos, nous sommes très contents du rendu des photos ! Sur certaines photos on se
                trouve même beau ;) et surtout tu as réussi à capter notre naturel et notre complicité ! Nous, c’est ce
                qu’on ressent quand on regarde les photos. On s’est dit souvent: “là je te reconnais” ou “on a l’air
                complices”. Nous avons hâte de faire les prochaines séances sous la neige puis quand il fera bon. On
                t’embrasse ! »</p>
        </div>
    </div>
</main>

<?php
require_once 'views/footer.php';
?>
</body>
</html>
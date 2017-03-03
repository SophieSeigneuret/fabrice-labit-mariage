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
    <!-- css grille portfolio -->
    <link rel="stylesheet" href="css/porfolio.css">
    <!-- css slider portfolio -->
    <link rel="stylesheet" href="css/photoswipe.css">
    <link rel="stylesheet" href="css/default-skin.css">
    <!-- css main -->
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

    <div class="content"  id="ajax-content">
        <ul class="portfolio-grid">
            <?php foreach ($photos as $id => $photo) { ?>
                <li class="grid-item">
                    <a href="<?= IMG_PATH, $photo['nom_photo'] ?>" data-size="<?= $photo['format'] == 'paysage' ? '900x600' : '900x1348' ?>">
                        <img src="<?= IMG_PATH, $photo['nom_photo'] ?>" alt="photo preparatif">
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>




    <div class="my-gallery">
        <?php foreach ($photos as $id => $photo) { ?>
            <figure>
                <a href="<?= IMG_PATH, $photo['nom_photo'] ?>" data-size="<?= $photo['format'] == 'paysage' ? '900x600' : '900x1348' ?>">
                    <img src="<?= IMG_PATH, $photo['nom_photo'] ?>" alt="photo preparatif" />
                </a>
            </figure>
        <?php } ?>
    </div>



    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
             It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

<!--                    <button class="pswp__button pswp__button--share" title="Share"></button>-->

<!--                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>-->

<!--                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>-->

                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>






</main>

<?php
require_once 'views/footer.php';
require_once 'views/script_portfolio.php';
?>

</body>
</html>
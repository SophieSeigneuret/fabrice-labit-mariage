<header class="wrapper">
    <div id="social-link-header" class="row">
        <div class="col-8"></div>
        <a href="https://www.facebook.com/fabricelabitmariage/" target="_blank" class="col-1 col-s-3"><img src="images/social_facebook_gris.gif" alt="logo facebook gris"></a>
        <a href="https://www.instagram.com/fabricelabit/" target="_blank" class="col-1 col-s-3"><img src="images/social_instagram_gris.gif" alt="logo instagram gris"></a>
        <a href="https://fr.pinterest.com/fabricelabit/" target="_blank" class="col-1 col-s-3"><img src="images/social_pinterest_gris.gif" alt="logo pinterest gris"></a>
        <a href="https://twitter.com/fabricelabit" target="_blank" class="col-1 col-s-3"><img src="images/social_twitter_gris.gif" alt="logo twitter gris"></a>
    </div>
    <div id="logo-header">
        <a href="index.php"><img src="images/logo-fabrice-labit-mariage.jpg" alt="logo Fabrice Labit Mariage"></a>
        <h1>Fabrice Labit Mariage</h1>
    </div>
    <nav>
        <a class="mobile_menu" title="Menu" href="#">Menu</a>
        <ul id="menu">
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
    </nav>
</header>

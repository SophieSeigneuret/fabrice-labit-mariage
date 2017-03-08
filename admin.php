<?php
require_once ('db/db_access.php');
require_once ('defines.php');

$photos_album = get_photos_mariage_by_album(1);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fabrice Labit | Photographe de mariage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="css/dropzone.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/gif" href="images/logo_icon.gif"/>
    <script src="scripts/dropzone.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $( function() {
            $( "#sortable" ).sortable();
            $( "#sortable" ).disableSelection();
        } );


    </script>
    <script src="scripts/admin.js"></script>

</head>
<body>
<form action="upload.php" class="dropzone"></form>

<ul id="sortable">
    <?php foreach ($photos_album as $id => $photo ) { ?>
    <li class="ui-state-default">
        <img id="<?=$photo['id']?>" src="<?= IMG_PATH, $photo['nom_photo'] ?>" alt="photo mariage"></li>
    <?php } ?>
</ul>

</body>
</html>
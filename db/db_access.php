<?php
require_once 'define_local.php';

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : ", $mysqli->connect_error;
}


// Rédaction de la requete sur les catégories articles
$query_str = 'SELECT * FROM `category`'; // Sélection de toutes les catégories

$res = $mysqli->query($query_str); // Exécution de la requête

// Chargement des données, ligne par ligne (boucle while)
$categories = array();
if ($res && ($res->num_rows > 0)) {
    while ($article_cat = $res->fetch_assoc()) {
        $categories[$article_cat['id']] = $article_cat;
    }
}

//var_dump($categories);



function get_photos_by_album($album_id) {
    global $mysqli;
    // Rédaction de la requete sur les photos
    $query_str = "Select photos.id, photos.nom_photo, photos.ordre, photos.date, album.nom_album, album.date from photos
    INNER JOIN album ON photos.album_id=album.id  where album.id = ".$album_id;
    var_dump($query_str);

    $res = $mysqli->query($query_str); // Exécution de la requête

    // Chargement des données, ligne par ligne (boucle while)
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        while ($photos = $res->fetch_assoc()) {
            $data[$photos['id']] = $photos;
        }
    }
    //var_dump($data);
    return $data;
}


function get_photos_by_category($category_id) {
    global $mysqli;
    // Rédaction de la requete sur les photos
    $query_str = "Select photos.id, photos.nom_photo, photos.ordre, photos.date, category.nom from photos
    INNER JOIN category ON photos.category_id = category.id where category.id =" . $category_id;

    $res = $mysqli->query($query_str); // Exécution de la requête

    // Chargement des données, ligne par ligne (boucle while)
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        while ($photos = $res->fetch_assoc()) {
            $data[$photos['id']] = $photos;
        }
    }
    //var_dump($data);
    return $data;
}





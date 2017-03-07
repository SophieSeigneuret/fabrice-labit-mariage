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


function get_album() {
    global $mysqli;
    // Rédaction de la requete sur les photos
    $query_str = "Select album.id, album.nom_album, album.date, album.nom_photo_album from album";

    $res = $mysqli->query($query_str); // Exécution de la requête

    // Chargement des données, ligne par ligne (boucle while)
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        while ($album = $res->fetch_assoc()) {
            $data[$album['id']] = $album;
        }
    }
    //var_dump($data);
    return $data;
}


function get_photos_mariage_by_album($album_id) {
    global $mysqli;
    // Rédaction de la requete sur les photos
    $query_str = "Select photos.id, photos.nom_photo, photos.category_id, photos.album_id, photos.date, photos.ordre, album.nom_album, album.date from photos INNER JOIN album on album.id=photos.album_id where photos.category_id = 2 and album_id = ".$album_id;

    $res = $mysqli->query($query_str); // Exécution de la requête

    // Chargement des données, ligne par ligne (boucle while)
    $data = array();
    $i = 0;
    if ($res && ($res->num_rows > 0)) {
        while ($photos = $res->fetch_assoc()) {
            $data[$i] = $photos;
            $i++;
        }
    }
    //var_dump($data);
    return $data;
}


function get_photos_by_category($category_id) {
    global $mysqli;
    // Rédaction de la requete sur les photos
    $query_str = "Select photos.id, photos.nom_photo, photos.ordre, photos.date, photos.format, category.nom from photos
    INNER JOIN category ON photos.category_id = category.id where category.id = '$category_id' ORDER BY date DESC";

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


function get_album_by_category($category_id) {
    global $mysqli;
    // Rédaction de la requete sur les photos
    $query_str = "SELECT album.id, album.nom_album, album.nom_photo_album, album.ordre, album.date, photos.category_id, photos.nom_photo
                  FROM album INNER JOIN photos on album.id=photos.album_id WHERE photos.category_id= '$category_id' ORDER BY date DESC";
    //$query_str = "SELECT * FROM `album` WHERE category_id = '$category_id' ORDER BY `date` DESC";
    $res = $mysqli->query($query_str); // Exécution de la requête

    // Chargement des données, ligne par ligne (boucle while)
    $data = array();
    if ($res && ($res->num_rows > 0)) {
        while ($photos = $res->fetch_assoc()) {
            $data[$photos['id']] = $photos;
        }
    }
    return $data;
}


function insertion_photos_mariage($album_id, $category_id, $date, $nom_photo, $ordre) {
    global $mysqli;
    // Rédaction de la requete sur les photos
    $query_str = "INSERT INTO photos (album_id, category_id, date, nom_photo, ordre)
                  VALUES ($album_id, $category_id, $date, $nom_photo, $ordre) ";

    $res = $mysqli->query($query_str); // Exécution de la requête


    if ($res === TRUE) {
        $res= "New record created successfully";
    } else {
        $res= "Error: " . $query_str . "<br>" . $mysqli->error;
    }

    error_log ( $res );


    $mysqli->close();

}

function get_ordre_max_photos_album($album_id) {
    global $mysqli;
    // Rédaction de la requete sur les photos
    $query_str = "SELECT max(photos.ordre) AS nbMax
                  FROM photos WHERE photos.album_id= $album_id";
    $res = $mysqli->query($query_str); // Exécution de la requête
    return $res->fetch_assoc()['nbMax'];
}


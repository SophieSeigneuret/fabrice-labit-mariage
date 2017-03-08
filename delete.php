<?php
require_once ('db/db_access.php');

$ds          = DIRECTORY_SEPARATOR;  //1
var_dump($_GET);
var_dump($_POST);

//$storeFolder = 'images/uploads-img';   //2


//$album_id = 1;
//$category =2;
//$date = '2017-03-04';
//if (!empty($_FILES)) {
//
//    $tempFile = $_FILES['file']['tmp_name'];          //3
//
//    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
//
//
//    $ordre_max = get_ordre_max_photos_album($album_id);
//    $ordre_max = $ordre_max +1;
//
//    $filename ='';
//    switch($category){
//        case 1 :
//            $filename ='preparatifs_'.$ordre_max;
//            break;
//        case 2 :
//            $filename ='mariage_'.$ordre_max;
//            break;
//        case 3 :
//            $filename ='engagement_'.$ordre_max;
//            break;
//        default:
//            $filename =$_FILES['file']['name'];
//
//    }
//    $targetFile =  $targetPath. $filename;  //5
//    move_uploaded_file($tempFile,$targetFile); //6
//
//    $res =insertion_photos_mariage($album_id, $category, $date, "'".$filename."'", $ordre_max);
//}



<?php

//$nom = $_POST['nom'] ;
//$telephone = $_POST['telephone'] ;
//$email = $_POST['email'] ;
//$date = $_POST['date'] ;
//$lieu = $_POST['lieu'] ;
//$type = $_POST['type'] ;
//$budget = $_POST['budget'] ;
//$reponse = $_POST['reponse'] ;
//$message = $_POST['message'] ;

function infos_mail_contact($nom, $tel, $mail, $date, $lieu, $type, $budget, $reponse, $message) {
    $msg = "Nom : ".$nom."\n";
    $msg.= "Téléphone : ".$tel."\n";
    $msg.= "Email : ".$mail."\n";
    $msg.= "Date de l'événement : ".$date."\n";
    $msg.= "Lieu de l'événement : ".$lieu."\n";



    foreach ($type as $typ) {
        $msg.= "Type d'événement : ".$typ."\n";
        echo $msg;
    }



//    $msg.= "Type d'événement : ".$type."\n";
    $msg.= "Budget prévu : ".$budget." €\n";
    $msg.= "Vous m'avez connu par : ".$reponse."\n";
    $msg.= "Votre message : ".$message;

    return $msg;
}
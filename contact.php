<?php
session_start();



$errors =[];

if(empty($_POST['user_firstname'])){
  $errors['user_firstname']= 'Vous n\'avez pas renseigné votre prénom';
}

if(empty($_POST['user_name'])){
  $errors['user_name']= 'Vous n\'avez pas renseigné votre nom';
}

if(empty($_POST['user_email'])){
  $errors['user_email'] = 'Vous n\'avez pas renseigné votre email';
}
if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
  $errors['user_email'] = 'Vous avez mal renseigné votre email';
}

if(empty($_POST['user_object'])){
  $errors['user_object']= 'Vous n\'avez pas renseigné votre objet';
}

if(!isset($_POST['user_message'])){
  $errors['user_message']= 'Vous n\'avez pas renseigné votre message';
}


if(!empty($errors)){
  $_SESSION['errors']=$errors;
  header('Location: index.php');
}else {
    $message = '<html><body>';
    $message .= '<h3> De : '.$_POST['user_firstname'] .' '.$_POST['user_name'].'</h3>';
    $message .= $_POST['user_message'];
    $message .= '</body></html>';
    $name = $_POST['user_name'];
    $firstname = $_POST['user_firstname'];
    $email = $_POST['user_email'];
    $object = $_POST['user_object'];

    $to = 'l.herard@codeur.online';
    $subject = 'Objet : ' .$object;
    $from = $email;

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    $headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

   //envoi d'email
    if(mail($to, $subject, $message, $headers)) {
    $_SESSION['success']="envoyé";
    //$_SESSION['pbmail']= $pbmail;
    header('Location: index.php');

    }
}





?>

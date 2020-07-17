<?php
session_start()


$errors =[];


if((isset($_POST['user_name']))&&(isset($_POST['user_firstname']))&&(isset($_POST['user_email']))&&(isset($_POST['user_message']))&&filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
  $message = '<html><body>';
  $message .= '<h1>'.$_POST['user_firstname'] .' '.$_POST['user_name'].'</h1>';
  $message .= $_POST['user_message'];
  $message .= '</body></html>';
  $name = $_POST['user_name'];
  $firstname = $_POST['user_firstname'];
  $email = $_POST['user_email'];

  $to = 'l.herard@codeur.online';
  $subject = 'Formulaire de contact : ' .$firstname .' ' .$name;
  $from = $email;

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $headers .= 'From: '.$from."\r\n".
  'Reply-To: '.$from."\r\n" .
  'X-Mailer: PHP/' . phpversion();

 //envoi d'email
  if(mail($to, $subject, $message, $headers)) {
  $_SESSION['success']=1;
  $_SESSION['pbmail']= $pbmail;
  header('Location: index.php');
  } else {
    $pbmail= 'Désolé le serveur n\'a pas pu envoyer le mail';
  $_SESSION['pbmail']= $pbmail;
  header('Location: index.php');
  }
}else {

  $errors['user_name']= 'Vous n\'avez pas renseigné votre nom';
  $errors['user_firstname']= 'Vous n\'avez pas renseigné votre prénom';
  $errors['user_email'] = 'Vous n\'avez pas renseigné votre email';
  $errors['user_message']= 'Vous n\'avez pas renseigné votre message';
  $_SESSION['errors']=$errors;
  header('Location: index.php');
}



?>

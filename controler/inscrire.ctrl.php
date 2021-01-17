<?php
include_once(__DIR__."/../framework/view.class.php");
require_once '../model/Utilisateur.class.php'; // J'inclus la classe Utilisateur, pour pouvoir l'utiliser dans le site.
require_once '../model/DAO.class.php';
$surname = $_POST['Prenom'];
$name = $_POST['Nom'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$password_repeat = $_POST['Password-repeat'];

$view = new View();
$dao = new DAO();

## Définitions des deux constantes
define('ADRESSE_WEBMASTER','william.berruyer3@gmail.com'); // Votre adresse qui apparaitra en tant qu'expéditeur des E-mails
define('SUJET','Confirmer votre adresse mail sur CloudStudio'); // Sujet commun aux deux E-mail
## Message qui vous sera envoyé
$message = "Nom : ".$name."\n\nPrénom : ".$surname."\n\nMail : ".$email;

if($password != $password_repeat){
    $view->assign('messageErreur','The passwords don\'t match, please retype them.');
    $view->display('../views/signUp.view.php');
}else if($dao->isUtilisateurExiste($email)){
    $view->assign('messageErreur','An account with this email adress already exist.');
    $view->display('../views/signUp.view.php');
}else{
    $user = new Utilisateur(-1,$name,$surname,$email,$password,'0.png');
    $dao->addUtilisateur($user);
    $view->assign('contenu','Your account have been successfully created');
    $view->display("../views/registerValidation.view.php");
       ## Appel de la fonction mail() afin de vous envoyé un E-mail contenant les informations saisies par le visiteur
    mail(ADRESSE_WEBMASTER,SUJET,$message,'From: '.ADRESSE_WEBMASTER);
    ## Message envoyé au visiteur
    $message = "Bonjour ".$surname." ".$name." !\n\nVeuillez confirmer votre inscription en cliquant sur le lien suivant : \n\nRappel de l'adresse inscrite : ".$email."\n\nBonne journée,\n\nCloudStudio.";
    ## Second appel de la fonction mail() : le visiteur reçoit cet E-mail
    mail($email,SUJET,$message,'From: '.ADRESSE_WEBMASTER);
}
?>

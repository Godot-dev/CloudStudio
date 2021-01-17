<?php
include_once("../framework/view.class.php");
require_once("../model/Utilisateur.class.php");
require_once("../model/DAO.class.php");
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
$view = new View(); $dao = new DAO();

$id = $_SESSION['User']->id;
if(isset($_FILES['avatar-file']['name']) && $_FILES['avatar-file']['name'] != ''){ // Si un fichier image est rentré, on le mets dans le répertoire PP du raspberry et on mets à jour l'information dans la bd et $_SESSION
  $nomImage=$_FILES['avatar-file']['name'];
  $chemin = "../data/PP/".basename($_FILES['avatar-file']['name']);
  move_uploaded_file($_FILES['avatar-file']["tmp_name"], $chemin);
  rename("../data/PP/$nomImage", "../data/PP/$id.png"); // On renomme bien l'image en $id.png pour remplacer l'ancienne et pouvoir la retrouver facilement
  $dao->setPP($id); $_SESSION['User']->photoProfil = "$id.png"; 
}
  
if(isset($_POST['prenom']) && $_POST['prenom'] != ''){ // Si l'utilisateur rentre quelque chose dans le champ prénom, on le modifie dans la bd
  $dao->setPrenom($_POST['prenom'],$id); $_SESSION['User']->prenom = $_POST['prenom'];
}
if(isset($_POST['nom']) && $_POST['nom'] != ''){ // Même chose pour nom
  $dao->setNom($_POST['nom'],$id); $_SESSION['User']->nom = $_POST['nom'];
}
if(isset($_POST['email']) && $_POST['email'] != ''){ // Même chose pour email
  $dao->setEmail($_POST['email'],$id); $_SESSION['User']->email = $_POST['email'];
}
if(isset($_POST['password']) && isset($_POST['confirmpass'])){ // Si au moins une des deux entrées contient quelque chose
  if($_POST['password'] == $_POST['confirmpass'] && $_POST['password'] != ''){ // Si les deux entrées sont les mêmes
    $dao->setMdp($_POST['password'], $id);
  }else if ($_POST['password'] != $_POST['confirmpass']){ // Les deux entrées sont différentes, il faut prévenir l'utilisateur
    $view->assign("erreurMdp",'Error ! Your passwords are not the same ! They haven\'t been changed.'); // La vue recevra cette variable, qui saura donc qu'il faut afficher un message d'erreur
  }
}

// On assign toutes les infos du profil à la vue pour que l'affichage puisse se faire au mieux
$profilePic = "../data/PP/". $_SESSION['User']->photoProfil;
$view->assign("profilePic",$profilePic);
$view->assign("Firstname",$_SESSION['User']->prenom);
$view->assign("Lastname",$_SESSION['User']->nom);
$view->assign("mail",$_SESSION['User']->email);

$view->display("../views/settings.view.php");
?>
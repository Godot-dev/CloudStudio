<?php
require_once '../model/Utilisateur.class.php';
require_once '../model/DAO.class.php';
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
include_once(__DIR__ . "/../framework/view.class.php");

$view = new View();
$profilePic = "../data/PP/" . $_SESSION['User']->photoProfil;
$name = $_SESSION['User']->prenom . " " . $_SESSION['User']->nom;
$mail = $_SESSION['User']->email;
$dao = new DAO($mail, $_SESSION['User']->mdp);
if(isset($_POST['idProjetASuppr'])){ // Si un idProjet est renseigné, cela signifie que c'est un projet à supprimer
  $dao->deleteProjet($_POST['idProjetASuppr']);
}
$listeProjet = $dao->getListeProjets($_SESSION['User']->id);
$view->assign("profilePic", $profilePic);
$view->assign("name", $name);
$view->assign("mail", $mail);

$view->assign("listeProjet", $listeProjet);
$view->display("../views/projects.view.php");

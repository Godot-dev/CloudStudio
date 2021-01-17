<?php
require_once '../model/Utilisateur.class.php';
require_once '../model/DAO.class.php';
require_once '../model/Projet.class.php';
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
include_once(__DIR__."/../framework/view.class.php");
$view = new View(); $dao = new DAO();
$profilePic = "../data/PP/".$_SESSION['User']->photoProfil;
$name=$_SESSION['User']->prenom . " " . $_SESSION['User']->nom;
$mail= $_SESSION['User']->email;
$id= $_SESSION['User']->id;
$view->assign("idProjet",$_POST["idProjet"]);
$view->assign("profilePic",$profilePic);
$view->assign("name",$name);
$view->assign("nomProjet",$_POST["nomProjet"]);
$view->assign("mail",$mail);
$versionAAfficher = $_POST["versionCliquee"];
$view->assign("versionAAfficher",$versionAAfficher);


if(isset($_POST['action'])){
  switch ($_POST['action']){
    case 'AddCollaborator':
      if(!$dao->addCollaborator($_POST['search'], $_POST['idProjet'])){
        $view->assign("messageErreur","Error ! The mail adress you entered is not present in our database.");
      }
      break;
  }
}
$listeCollaborator = $dao->getListeCollaborator($_POST["idProjet"]);
$projet = $dao->getProjet($_POST["idProjet"]);
$idCreateur = $projet->idCreateur;
$creator = $dao->getUtilisateur($idCreateur);
$view->assign('id',$id);
$view->assign('idCreateur',$idCreateur);
$view->assign('creator',$creator);
$view->assign('listeCollaborator',$listeCollaborator);
$view->display("../views/projetCollaborator.view.php");

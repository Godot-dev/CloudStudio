<?php
include_once(__DIR__ . "/../framework/view.class.php");
require_once '../model/Utilisateur.class.php';
require_once '../model/DAO.class.php';
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
$view = new View();

$profilePic = "../data/PP/" . $_SESSION['User']->photoProfil;
$name = $_SESSION['User']->prenom . " " . $_SESSION['User']->nom;
$mail = $_SESSION['User']->email;
$view->assign("profilePic", $profilePic);
$view->assign("name", $name);
$view->assign("mail", $mail);

$view->display("../views/projectcreation.view.php");

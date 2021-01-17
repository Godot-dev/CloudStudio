<?php
include_once(__DIR__."/../framework/view.class.php");
require_once '../model/Utilisateur.class.php';
require_once '../model/Projet.class.php';
require_once '../model/DAO.class.php';
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$projectName = $_POST['projectName'];
$id = $_SESSION['User']->id;

$project = new Projet(0,$id,$projectName);
$bd = new DAO($_SESSION['User']->email,$_SESSION['User']->mdp);
$bd->addProjet($project);
// $view = new View();
// $view->display("../views/home.view.php");
header('Location: ../controler/projects.ctrl.php');
exit();
?>

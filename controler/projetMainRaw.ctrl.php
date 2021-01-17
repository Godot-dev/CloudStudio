<?php
require_once '../model/Utilisateur.class.php';
require_once '../model/DAO.class.php';
require_once '../model/Projet.class.php';
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
include_once(__DIR__."/../framework/view.class.php");
$view = new View();
$mail= $_SESSION['User']->email;
$password= $_SESSION['User']->mdp;
$dao = new DAO($mail,$password);
if(isset($_POST['action'])){
  $action = $_POST['action'];
  $idVersion=$_POST['versionCliquee']; 
  $idProjet = $_POST['idProjet'];
  switch ($action){
    case 'ajoutVersion':
      $dao->addVersionRaw($idProjet,$_SESSION['User']->id,'New Version');
      break;
    case 'saveDescription':
      $dao->updateVersionRaw($idVersion, $idProjet, $_POST['info']);
      break;
    case 'deleteVersion':
      $dao->deleteVersionRaw($idVersion, $idProjet);
      break;
    case 'addFiles':
      if(isset($_FILES['input-file']['name']) && $_FILES['input-file']['name'] != ''){
        $file=$_FILES['input-file']['name'];
        $chemin = "../data/Projets/$idProjet/Raw/v$idVersion/".basename($_FILES['input-file']['name']);
        move_uploaded_file($_FILES['input-file']["tmp_name"], $chemin);
      }
      break;
    case 'deleteFiles':
      $nomFichier=$_POST['nomFichierASupprimer'];
      shell_exec("rm ../data/Projets/$idProjet/Raw/v$idVersion/$nomFichier*");
      break;
    case 'deleteAllFiles':
      shell_exec("rm ../data/Projets/$idProjet/Raw/v$idVersion/*"); // Bug connu, pour supprimer des fichiers contenant des ' ' dans le nom, on ne voit pas comment faire autrement, à changer
      break;
    case 'downloadAllFiles':
      shell_exec("7z a ../data/Projets/$idProjet/Raw/v$idVersion/v$idVersion.zip 7z a ../data/Projets/$idProjet/Raw/v$idVersion");
      break;
    case 'uploadPreview':
      if(isset($_FILES['input-file']['name']) && $_FILES['input-file']['name'] != ''){
        $file=$_FILES['input-file']['name'];
        $chemin = "../data/Projets/$idProjet/Raw/v$idVersion/".basename($_FILES['input-file']['name']);
        move_uploaded_file($_FILES['input-file']["tmp_name"], $chemin);
        rename($chemin, "../data/Projets/$idProjet/Raw/v$idVersion/cloudStudioPreview.mp3");
      }
      break;
  }
}
$view->assign("nomProjet",$_POST["nomProjet"]);
$view->assign("idProjet",$_POST["idProjet"]);
$projet = new Projet();


$profilePic = "../data/PP/".$_SESSION['User']->photoProfil;
$name=$_SESSION['User']->nom." ".$_SESSION['User']->prenom;
$projet = $dao->getProjet($_POST["idProjet"]);
$versionsRaw = $dao->getListeVersionsRaw($projet->id);
$versionsRaw = array_reverse($versionsRaw);
$versionAAfficher = $_POST["versionCliquee"];
if ($versionAAfficher == "rien" || $versionAAfficher > count($versionsRaw)){
  $versionAAfficher = $versionsRaw[0];
}
else{
  foreach ($versionsRaw as $version) {
    if ($version->id == $versionAAfficher){
      $versionAAfficher=$version;
    }
  }
}
$nouvelleVersion = $_POST["nouvelleVersion"];
if ($nouvelleVersion != "rien"){
  $view->assign("nouvelleVersion",$nouvelleVersion);
}
else{
  $listeStems = $dao->getListeFichiersRaw($projet->id,$versionAAfficher->id);
  $view->assign("listeStems",$listeStems);
}
$newstems = $_POST["newstems"];
if ($newstems == "true"){
  $view->assign("newstems",$newstems);
}
$view->assign("dao",$dao);
$view->assign("versionAAfficher",$versionAAfficher);
$view->assign("versionsRaw",$versionsRaw);
$view->assign("profilePic",$profilePic);
$view->assign("name",$name);
$view->assign("mail",$mail);
$view->display("../views/projetMainRaw.view.php");
?>

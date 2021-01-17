<?php
require_once("Utilisateur.class.php");
require_once("Discussion.class.php");
require_once("Projet.class.php");
require_once("Role.class.php");
require_once("VersionMaster.class.php");
require_once("VersionRaw.class.php");
require_once("VersionMix.class.php");

class DAO{

    private string $database = 'mysql:dbname=DB;host=localhost;port=80;charset=utf8';
    private string $chemin = '/var/www/html/data/';
    private PDO $connection;
    private string $email;
    private string $mdp;

    function __construct($mail='default', $mdp='default')
    {
        try
        {
            $this->email = $mail;
            $this->mdp = $mdp;
            $this->connection = new \PDO($this->database, "root", "root");
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        }
        catch (PDOException $e)
        {
            die("PDO Error :".$e->getMessage()." $this->database\n");
        }
    }

    function getUtilisateurCo() : Utilisateur
    {
        $result = $this->connection->query("SELECT * FROM Utilisateur WHERE email='$this->email' AND mdp='$this->mdp'");
        $final = $result->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Utilisateur');
        if($final[0] != null){
            return $final[0];
        }else{
            return new Utilisateur();
        }
    }

    function isUtilisateurExiste(string $mail) : bool
    {
        $result = $this->connection->query("SELECT count(id) FROM Utilisateur WHERE email='$this->email'");
        $final = $result->fetchAll(PDO::FETCH_NUM);
        if($final[0] == 0){
            return true;
        }else{
            return false;
        }
    }

    function getDiscussion() : array
    {
        $result = $this->connection->query("SELECT * FROM Discussion");
        $final = $result->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Discussion');
        return $final;
    }

    function getUtilisateur(int $id) : Utilisateur
    {
        $result = $this->connection->query("SELECT * FROM Utilisateur WHERE id='$id'");
        if($result->rowCount()==0)
        {
            return new Utilisateur();
        }
        $final = $result->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Utilisateur');

        return $final[0];
    }

    function addDiscussion($idUser, $sms, $idProjet)
    {
        $result = $this->connection->query("INSERT INTO Discussion(idUtilisateur, message, idProjet) VALUES ('$idUser','$sms',$idProjet)");
    }

    function addUtilisateur(Utilisateur $u){
      if ($this->email == 'default' && $this->mdp == 'default') {
        //$this->connection->exec("CREATE USER \'$u->email\'@\'%\' IDENTIFIED BY \'$u->mdp\'");
        $this->email = $u->email; $this->mdp = $u->mdp;
        $this->connection->exec("INSERT INTO Utilisateur(nom,prenom,email,mdp,photoProfil) VALUES(\"$u->nom\",\"$u->prenom\",\"$u->email\",\"$u->mdp\",\"$u->photoProfil\")");
      }
    }

    function addProjet(Projet $p){
        $this->connection->exec("INSERT INTO Projet(idCreateur,nom) VALUES(\"$p->idCreateur\",\"$p->nom\")");
        $result = $this->connection->query("SELECT MAX(id) FROM Projet");
        $final = $result->fetchAll(PDO::FETCH_NUM)[0][0];
        $p->id = $final;
        $c = $this->chemin . "Projets/$p->id";
        shell_exec("mkdir $c $c/Raw $c/Mix $c/Master $c/Raw/v1 $c/Mix/v1 $c/Master/v1");
        $infoDeBase = 'First version created by default';
        $this->connection->exec("INSERT INTO VersionRaw VALUES(1,\"$final\",\"$p->idCreateur\",\"$infoDeBase\")");
        $this->connection->exec("INSERT INTO VersionMix VALUES(1,\"$final\",\"$p->idCreateur\",\"$infoDeBase\")");
        $this->connection->exec("INSERT INTO VersionMaster VALUES(1,\"$final\",\"$p->idCreateur\",\"$infoDeBase\")");
    }

    function deleteProjet($id){
        $this->connection->exec("DELETE FROM Collaborator WHERE idProjet=$id");
        $this->connection->exec("DELETE FROM Projet WHERE id=$id");
        $dir = $this->chemin . "Projets/$id";
        shell_exec("rm -r $dir");
    }

    function getListeProjets(int $idCreateur) : array{
        $result = $this->connection->query("SELECT DISTINCT P.* FROM Projet P, Collaborator C WHERE P.idCreateur=$idCreateur OR (C.idUtilisateur=$idCreateur AND C.idProjet=P.id)");
        $final = $result->fetchALL(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Projet');
        if(count($final)==0){
          $result = $this->connection->query("SELECT * FROM Projet WHERE idCreateur=$idCreateur");
          $final = $result->fetchALL(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Projet');
        }
        return $final;
    }

    function getProjet(int $id) : Projet{
        $result = $this->connection->query("SELECT * FROM Projet WHERE id=$id");
        $final = $result->fetchALL(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Projet');
        return $final[0];
    }

    function addCollaborator(string $mail, int $idProjet) : bool{ // return true si l'insertion a bien eu lieu
        if($this->connection->query("SELECT count(id) FROM Utilisateur WHERE email='$mail'")->fetchALL(PDO::FETCH_NUM)[0][0] > 0){ 
            $result = $this->connection->query("SELECT id FROM Utilisateur WHERE email='$mail'"); // On effectue l'insertion dans la table Collaborator
            $idUtilisateur = $result->fetchALL(PDO::FETCH_NUM)[0][0];  
            if($this->connection->query("SELECT count(*) FROM Collaborator WHERE idUtilisateur=$idUtilisateur")->fetchALL(PDO::FETCH_NUM)[0][0] == 0){
                $this->connection->exec("INSERT INTO Collaborator VALUES($idUtilisateur,$idProjet)"); // On effectue l'insertion que si l'utilisateur n'est pas déjà attribué au projet
            }else{ // Sinon on le supprime
                $this->connection->exec("DELETE FROM Collaborator WHERE idUtilisateur=$idUtilisateur AND idProjet=$idProjet");
            }
            return true;
        }else{ // Si le premier select ne fonctionne pas, alors cette adresse mail n'est pas contenue dans la bd : on return false
            return false;
        }
    }

    function getListeCollaborator(int $idProjet) : array{
        $result = $this->connection->query("SELECT U.* FROM Utilisateur U, Collaborator C WHERE C.idProjet=$idProjet AND C.idUtilisateur=U.id");
        $final = $result->fetchALL(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Utilisateur');      
        return $final;
    }


    function addVersionMix(int $idProjet, int $idCreateur, string $info){
        $result = $this->connection->query("SELECT MAX(id) FROM VersionMix WHERE idProjet=$idProjet");
        $id = $result->fetchAll(PDO::FETCH_NUM)[0][0] + 1;
        $this->connection->exec("INSERT INTO VersionMix VALUES(\"$id\",\"$idProjet\",\"$idCreateur\",\"$info\")");
        $c = $this->chemin . "Projets/$idProjet/Mix";
        shell_exec("mkdir $c/v$id");
    }

    function addVersionRaw(int $idProjet, int $idCreateur, string $info){
        $result = $this->connection->query("SELECT MAX(id) FROM VersionRaw WHERE idProjet=$idProjet");
        $id = $result->fetchAll(PDO::FETCH_NUM)[0][0] + 1;
        $this->connection->exec("INSERT INTO VersionRaw VALUES(\"$id\",\"$idProjet\",\"$idCreateur\",\"$info\")");
        $c = $this->chemin . "Projets/$idProjet/Raw";
        shell_exec("mkdir $c/v$id");
    }

    function addVersionMaster(int $idProjet, int $idCreateur, string $info){
        $result = $this->connection->query("SELECT MAX(id) FROM VersionMaster WHERE idProjet=$idProjet");
        $id = $result->fetchAll(PDO::FETCH_NUM)[0][0] + 1;
        $this->connection->exec("INSERT INTO VersionMaster VALUES(\"$id\",\"$idProjet\",\"$idCreateur\",\"$info\")");
        $c = $this->chemin . "Projets/$idProjet/Master";
        shell_exec("mkdir $c/v$id");
    }

    function updateVersionRaw(int $id, int $idProjet, string $info){
        $this->connection->exec("UPDATE VersionRaw SET info='$info' WHERE id=$id AND idProjet=$idProjet");
    }

    function updateVersionMix(int $id, int $idProjet, string $info){
        $this->connection->exec("UPDATE VersionMix SET info='$info' WHERE id=$id AND idProjet=$idProjet");
    }

    function updateVersionMaster(int $id, int $idProjet, string $info){
        $this->connection->exec("UPDATE VersionMaster SET info='$info' WHERE id=$id AND idProjet=$idProjet");
    }

    function deleteVersionRaw(int $id, int $idProjet){
        $result = $this->connection->query("SELECT count(*) FROM VersionRaw WHERE idProjet=$idProjet AND id>$id");
        $final = $result->fetchALL(PDO::FETCH_NUM)[0][0];
        $this->connection->exec("DELETE FROM VersionRaw WHERE id=$id AND idProjet=$idProjet");
        $this->connection->exec("UPDATE VersionRaw SET id=id-1 WHERE id>$id AND idProjet=$idProjet");
        shell_exec("rm -r ../data/Projets/$idProjet/Raw/v$id");
        for ($i=$id+1; $i<=$id+$final; $i++) { 
            $j = $i-1;
            rename("../data/Projets/$idProjet/Raw/v$i", "../data/Projets/$idProjet/Raw/v$j");
        }
    }

    function deleteVersionMix(int $id, int $idProjet){
        $result = $this->connection->query("SELECT count(*) FROM VersionMix WHERE idProjet=$idProjet AND id>$id");
        $final = $result->fetchALL(PDO::FETCH_NUM)[0][0];
        $this->connection->exec("DELETE FROM VersionMix WHERE id=$id AND idProjet=$idProjet");
        $this->connection->exec("UPDATE VersionMix SET id=id-1 WHERE id>$id AND idProjet=$idProjet");
        shell_exec("rm -r ../data/Projets/$idProjet/Mix/v$id");
        for ($i=$id+1; $i<=$id+$final; $i++) { 
            $j = $i-1;
            rename("../data/Projets/$idProjet/Mix/v$i", "../data/Projets/$idProjet/Mix/v$j");
        }
    }

    function deleteVersionMaster(int $id, int $idProjet){
        $result = $this->connection->query("SELECT count(*) FROM VersionMaster WHERE idProjet=$idProjet AND id>$id");
        $final = $result->fetchALL(PDO::FETCH_NUM)[0][0];
        $this->connection->exec("DELETE FROM VersionMaster WHERE id=$id AND idProjet=$idProjet");
        $this->connection->exec("UPDATE VersionMaster SET id=id-1 WHERE id>$id AND idProjet=$idProjet");
        shell_exec("rm -r ../data/Projets/$idProjet/Master/v$id");
        for ($i=$id+1; $i<=$id+$final; $i++) { 
            $j = $i-1;
            rename("../data/Projets/$idProjet/Master/v$i", "../data/Projets/$idProjet/Master/v$j");
        }
    }

    function getListeVersionsMix(int $idProjet) : array{
        $result = $this->connection->query("SELECT * FROM VersionMix WHERE idProjet=$idProjet");
        $final = $result->fetchALL(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'VersionMix');
        return $final;
    }

    function getListeVersionsRaw(int $idProjet) : array{
        $result = $this->connection->query("SELECT * FROM VersionRaw WHERE idProjet=$idProjet");
        $final = $result->fetchALL(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'VersionRaw');
        return $final;
    }

    function getListeVersionsMaster(int $idProjet) : array{
        $result = $this->connection->query("SELECT * FROM VersionMaster WHERE idProjet=$idProjet");
        $final = $result->fetchALL(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'VersionMaster');
        return $final;
    }

    function getListeFichiersMix(int $idProjet, int $idVersion) : array{
        $tableau = scandir("/var/www/html/data/Projets/$idProjet/Mix/v$idVersion");
        array_shift($tableau); array_shift($tableau); // On se débarasse de . et .., car on ne veut que les fichiers
        return $tableau;
    }

    function getListeFichiersRaw(int $idProjet, int $idVersion) : array{
        $tableau = scandir("/var/www/html/data/Projets/$idProjet/Raw/v$idVersion");
        array_shift($tableau); array_shift($tableau);
        return $tableau;
    }

    function getListeFichiersMaster(int $idProjet, int $idVersion) : array{
        $tableau = scandir("/var/www/html/data/Projets/$idProjet/Master/v$idVersion");
        array_shift($tableau); array_shift($tableau);
        return $tableau;
    }

    function getURLFichierMix(int $idProjet, int $idVersion, string $nomFichier) : string{
        return "http://godotbox.ddns.net/data/Projets/$idProjet/Mix/v$idVersion/$nomFichier";
    }

    function getURLFichierRaw(int $idProjet, int $idVersion, string $nomFichier) : string{
        return "http://godotbox.ddns.net/data/Projets/$idProjet/Raw/v$idVersion/$nomFichier";
    }

    function getURLFichierMaster(int $idProjet, int $idVersion, string $nomFichier) : string{
        return "http://godotbox.ddns.net/data/Projets/$idProjet/Master/v$idVersion/$nomFichier";
    }

    function setPP(int $idUtilisateur){
        $this->connection->exec("UPDATE Utilisateur SET photoProfil='$idUtilisateur.png' WHERE id=$idUtilisateur");
    }

    function setNom(string $nom, int $idUtilisateur){
        $this->connection->exec("UPDATE Utilisateur SET nom='$nom' WHERE id=$idUtilisateur");
    }

    function setPrenom(string $prenom, int $idUtilisateur){
        $this->connection->exec("UPDATE Utilisateur SET prenom='$prenom' WHERE id=$idUtilisateur");
    }

    function setEmail(string $email, int $idUtilisateur){
        $this->connection->exec("UPDATE Utilisateur SET email='$email' WHERE id=$idUtilisateur");
    }

    function setMdp(string $mdp, int $idUtilisateur){
        $this->connection->exec("UPDATE Utilisateur SET mdp='$mdp' WHERE id=$idUtilisateur");
    }
}
?>

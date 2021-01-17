--create database IF NOT EXISTS cloudStudio CHARACTERE SET 'utf8';

CREATE TABLE IF NOT EXISTS Utilisateur
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(15),
    prenom VARCHAR(15),
    email VARCHAR(50) UNIQUE,
    mdp VARCHAR(20),
    photoProfil VARCHAR(20)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Projet
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idCreateur INT NOT NULL,
    nom VARCHAR(20) NOT NULL,
    FOREIGN KEY(idCreateur) REFERENCES Utilisateur(id)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Discussion
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  idUtilisateur INT REFERENCES Utilisateur(id),
  message TEXT,
  idProjet INT REFERENCES Project(id)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Collaborator
(
    idUtilisateur INT NOT NULL,
    idProjet INT NOT NULL,
    FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur(id),
    FOREIGN KEY (idProjet) REFERENCES Projet(id),
    PRIMARY KEY(idUtilisateur, idProjet)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS VersionMix
(
    id INT NOT NULL CHECK(id<=30),
    idProjet INT REFERENCES Projet(id),
    idCreateur INT REFERENCES Utilisateur(id),
    info TEXT,
    PRIMARY KEY(id,idProjet)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS VersionRaw
(
    id INT NOT NULL CHECK(id<=30),
    idProjet INT REFERENCES Projet(id),
    idCreateur INT REFERENCES Utilisateur(id),
    info TEXT,
    PRIMARY KEY(id,idProjet)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS VersionMaster
(
    id INT NOT NULL CHECK(id<=30),
    idProjet INT REFERENCES Projet(id),
    idCreateur INT REFERENCES Utilisateur(id),
    info TEXT,
    PRIMARY KEY(id,idProjet)
)ENGINE=INNODB;

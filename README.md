# Projet CloudStudio

Bienvenue sur le site CloudStudio, disponible à l'url suivante :
 http://godotbox.ddns.net

Ce projet, dont je suis le chef, a été réalisé par 6 étudiants en deuxième année de DUT Informatique (dont 3 qui ont fait les diagrammes de séquence et la documentation)

A ce jour, voici les fonctionnalités présentes sur ce site :
#### - Créer un compte, et modifier les informations du compte ainsi que sa photo de profil
#### - Créer et supprimer un projet
#### - Dans un projet, vous avez 3 onglets Raw Session, Mix et Master, qui permettent de :
####   - Créer et supprimer des versions, puis modifier leur description
####   - Pour chaque versionRaw, Mix ou master, il est possible d'ajouter et supprimer des fichiers, tout supprimer, où créer un .zip pour télécharger tout le        contenu de la version. Il est aussi possible d'ajouter une preview .mp3 et l'écouter.
#### - Dans l'onglet Collaborator, le créateur du projet peut ajouter ou supprimer des collaborateurs (qui auront tous les droits pour le moment) en entrant son adresse mail

Dans le footer, certaines des pages sont implémentées mais ce n'est pas le cas de toutes.

Voici la liste de ce que j'ai fait dans le projet, à part mes rôles de chef de projet, qui consistait à manager mon équipe.
- Codé tous les fichiers du répertoire model, notamment le create.sql et le DAO.class.php
- Codé pratiquement entièrement tous les contrôleurs utilisant le DAO, les autres non.
- Aidé dans la réalisation de certaines vues, nottament pour gérer l'échange de fichiers et l'utilisation des variables du contrôleur.
- Hébergé le site sur mon raspberryPI, disponible 24h/24 de n'importe où, installé la base de données, le serveur apache, PHP etc...

#### Bugs connus :
- Impossible de reculer d'une page sans faire planter le contrôleur
- Problème de suppression avec les espace dans les noms de fichiers (problème résolu temporairement en supprimant tous les fichiers qui ont le même premier mot)

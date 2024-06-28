
Démarrage composer install 

CREER SI IL NEXISTE PAS UN .GITIGNORE AVEC /vendor/ !!!

aller dans php my admin 

create database validation

retour dans vscode 

php bin/doctrine orm:validate-schema

Erreur normale: [ERROR] The database schema is not in sync with the current mapping file.

php bin/doctrine orm:schema-tool:create 

la base de donnée (news uniquement)se remplie toute seule avec le dossier insertion qui récupère des json
ajoute manuelement un utilisateur pour tester la connexiopn

Pour rappel l'erreur est que quand je suis sur connexion, le formulaire de "base" fonctionne. Mais des que j'ajoute le php pour le second formulaire, plus rien ne marche.

J'essaie de faire tant que le form1 n'est pas valide, le form 2 reste invisible.
j'ai mis en commentaire en bas de page le code  qui fait buger pour que tu vois le avant apres.
Le soucis est dans connexion.php

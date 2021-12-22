<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## A propos du projet

Ce projet est juste une demonstration que je me suis bien documenter sur laravel et que j'ai appris  les principes de laravel,mais sache  que je peut encore m'ameliorer et evoluer encore plus,et prêt a faire des efforts et des recherche pour accomplir la tâche que vous me demanderiez 

Dans cette demonstration il y a du:
-  route
-  controller
-  middelware
-  formulaire
-  migration
-  CRUD
-  authentification
-  templare blade
-  web service(api)
-  scope
-  etc

## instruction et installation

pour lancer le projet il faut:
-  clonner le projet du github
-  entrer dans le projet el ouvrir un terminal
-  lancer "php artisan serve"
-  on prend l' adresse et l'ouvrir sur le navigateur et on arrivera sur l'accueil de laravel
-  pour acceder a l'accueil de notre site,on ajoutera "/main" sur l'adresse precedent
-  de là on peut entrer en mode admin en cliquant sur "login as admin"
-  en entrant un mot de pass et un adresse mail
-  pour s'enregistre en admin ,on peut clicker sur "register as admin" dans l'interface login
-  de là on peut faire le CRUD

-  mais pour la partie sans avoir besoin de bdd mais utilisant un api on ajoutera "/main/getApi" a notre adresse du serveur


## notification sur le projet

l'application a le coté accueil qui est l'accueil que tout le monde peut acceder(route:"main")

il y a le coté admin que seul les admins authentifier peuvent y acceder(route:"admin/main)
Seul dans le coter admin qu'on peut faire du CRUD

il y a le route "main/getApi" qui utilise une methode d'appel d'api externe et qui renvoi les donnes au apiMain.blade.php,qui est une affichage juste pour vous montrer que je me suis documenter sur l'utilisation d'api sur laravel

il y aussi le route "api/main/api" un api que j'ai impeu creer mais ça ne sert a rien sur cette application juste pour la pratique

## notes
-  il faut importer le fichier "projet-Mr-Fano.sql" dans le bdd
-  il faut creer un fichier ".env" 
-  copier le contenu du fichier ".env.example" dans le fichier ".env" qui vient d'être creer
-  configurer les parametres dans le fichier ".env"

## remerciement

merci à Mr Fano de m'avoir donner une chance de pouvoir montrer mon envie d'apprendre et d'evoluer dans le monde du developpement en esperant que vous me donnerez l'aupportuniter d'acquerir d'experience et pouvoir gagner de l'argent

toute votre conseil et rectification sont le bienvenue ,etant donner que je debute encore



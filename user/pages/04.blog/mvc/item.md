---
title: Le MVC c'est Quoi?
date: 05/04/2019
taxonomy:
    category: Framework, mvc
    tag: [developpement]
    author: [Christophe]
author:
    name: Christophe
    
bouton: Lire un autre article
lien: /blog
color: red
position: 50% 25%

---

 
 
 
 Afin de bien organiser le code, j'utilise la pattern MVC!
  
 **Mais c’est quoi?**
  
 Le modèle MVC décrit une manière d’architecturer une application informatique en la décomposant en trois sous-parties :
 -**Modèle** : cette partie gère les données de notre site. Son rôle est d'aller récupérer les informations « brutes » dans la base de données, de les organiser et de les assembler pour qu'elles puissent ensuite être traitées par le contrôleur. On y trouve donc nos  requêtes SQL par exemple et tout le traitement compliqué de la gestion de ces données.  
 ![mvc](mvc.png)
 
 -**La partie Vue** se concentre sur l'affichage. dans l’absolue elle ne fait  aucun calcul , elle  se contente de récupérer des variables pour les afficher.
  On y trouve essentiellement du code HTML et des boucles pour l’affichage des variables .
  
 -**Contrôleur**: cette partie gère la logique du code qui prend des décisions. C'est en quelque sorte l'intermédiaire entre le modèle et la vue . le contrôleur va demander au modèle les données, les analyser, prendre des décisions et renvoyer le texte à afficher à la vue.
  Le contrôleur contient exclusivement du PHP. C'est notamment lui qui détermine si le visiteur a le droit de voir la page ou non pour la  gestion  des droits d'accès.

 

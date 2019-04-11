---
title: Symfony , le framwork A la Francaise utilise dans le monde entier
date: 03/04/2019
taxonomy:
    category: Framework, mvc
    tag: [Framework, developpement]
author:
    name: Christophe
    
bouton: Lire un autre article
lien: /blog
color: yellow
position: 50% 25%

---



Avant tout, une petite explication sur les frameworks,

Un framework est pour un développeur une énorme boîte à outils. Les frameworks permettent de réduire les temps de développement des applications en répondant de façon efficace aux problèmes rencontrés le plus souvent par les développeurs. On y retrouve par exemple le CRUD (create,read,delete,update)que l’on retouve tout le temps dans les blogs pour les articles ou encore des outils de gestion de base de donnée. Mais outre tous les outils que fournissent les framework, ils nous incite à une méthodologie de travail avec des arborescences, des normes, la sécurités, etc.
**Dit grossièrement, plutôt que de réinventer la roue à chaque fois, les frameworks le font pour vous.**
Le framework permet donc d'énoncer des conventions d'écriture et d'organisation destinées à être efficace ,clair et homogène .
Le framework va s'inspirer des bonnes pratiques déjà existantes, il structure et favorise la discipline du code produit.
##Finalement, Symfony  c’est quoi?
**Symfony est donc un framework PHP !** Il fournit une méthodologie (conventions d'écriture et d'organisation, discipline du code produit, MVC), des outils (CRUD, Génération d'amin, plugins/bundles). Il intègre des outils comme l'ORM Doctrine et un moteur de template (Twig) qui permettent une gestion de la base de donnée et des vues facilement.
On va pas se mentir,comme tous les  framework, il nécessite un temps de formation, d'apprentissage des bonnes pratiques. Mais ce temp que vous passez lors de l’apprentissage en vaut la peine ! Vous gagnerez votre temps ensuite!
Symfony utilise des bundles pour ajouter, retirer, modifier des fonctionnalités sur vos projets. Le kernel lui même de Symfony est un bundle !
Les bundles sont utilisable sur tous les projets, il existe des bundles pour à peu près tout, on n'a  pas à réinventer la roue, il existe des bundles qui servent de CMS, des bundles pour faire des blogs, des forums, des systèmes de paiement en ligne, etc.

## ORM Doctrine
Doctrine est l'ORM Object-Relational Mapping intégré par défaut dans Symfony.
 Un ORM est un logiciel qui permet de donner l'illusion de travailler avec une base de données objet alors que l'on est sur une base de données relationnelle.
Grâce à cela le développeur ne fait plus de requête SQL , sauf cas spécifiques rares et travaille avec ses objets, sauvegarde ses objets .
Il n'y plus besoin de modifier toutes vos requêtes SQL une après l'autre parce que vous avez ajouté un malheureux booléen dans un de vos objets et que votre table a donc été mise à jours, tout ce que vous avez à faire est de vous concentrer sur votre application, générer vos classes et l'ORM se chargera de créer la base, les tables, les relations et des gérer les données.


 
##Le moteur de template Twig
Twig est un moteur de template utilisé pour des pages HTML recevant du PHP. L'auteur de ce célèbre outils est ni plus ni moins que Fabien Potencier, le créateur de Symfony et co-fondateur de SensioLabs.
L'outils permet de réaliser des templates plus propres, il n'y a plus aucune balise PHP dans les pages HTML ce qui facilite la lecture du code.
On peut également faire hériter un template sur un autre pour y modifier le « bloc » qui nous intéresse, on a plus besoin de réécrire toutes la page, un simple héritage suffit 

## Pourquoi utiliser Symfony
Les développeurs Symfony qui maîtrisent le framework pourront facilement intégrer un projet développé à partir du framework, contrairement à un projet développé en PHP “maison”, où il n'y a pas de normes ni règles imposées. Dans ce dernier cas, la phase d’apprentissage et reprise du code existant peut demander un effort conséquent pour le nouveau développeur intégrant le projet. Les fichiers doivent respecter une syntaxe particulière et doivent se trouver au bon endroit dans l’arborescence du projet. Cela garantit une facilité de maintenance sur le long terme, les développeurs savent rapidement dans quel fichier il faut aller pour apporter des modifications. L’architecture MVC permet de découper le code représentant la logique métier de l’application et le code de présentation des vues. Ainsi, un intégrateur web voir même un webdesigner n’aura aucun mal à intervenir sur la partie présentation (vues) du projet, sans avoir à intervenir sur des fichiers PHP complexes. Favorise la réutilisation de code, la création de tests automatisés (tests unitaires avec phpUnit ou Atoum et tests fonctionnels avec phpUnit ou Behat) et le respect des recommandations PHP-FIG (Des recommandations mondiales pour une meilleure interopérabilité entre les projets web PHP). Symfony permet donc de produire du code de qualité.

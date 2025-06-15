<?php

// --------------------------------------------------------
// FICHIER PRINCIPAL : index.php
// Ce fichier permet de tester notre projet orienté objet
// Il instancie les classes Auteur et Livre et gère l'affichage
// --------------------------------------------------------

// Inclusion des fichiers contenant les classes nécessaires
// "require_once" permet de charger les fichiers une seule fois
require_once "Auteur.php";
require_once "Livre.php";

// ----------------------------
// CRÉATION D'UN OBJET AUTEUR
// ----------------------------
// On crée ici un auteur avec nom et prénom comme demandé dans le devoir
// Cela utilise le constructeur de la classe Auteur
$auteur1 = new Auteur("King", "Stephen");

// ---------------------------
// CRÉATION DES OBJETS LIVRE
// ---------------------------
// Chaque livre est créé avec un titre, un nombre de pages, une année de sortie,
// un prix et un objet Auteur. Le lien se fait automatiquement dans le constructeur.
$livre1 = new Livre("Ca", 1138, 1986, 20.00, $auteur1);
$livre2 = new Livre("Simetierre", 374, 1983, 15.00, $auteur1);
$livre3 = new Livre("Le Fléau", 823, 1978, 14.00, $auteur1);
$livre4 = new Livre("Shining", 447, 1977, 16.00, $auteur1);

// -------------------------------------------
// AFFICHAGE DE LA BIBLIOGRAPHIE DE L'AUTEUR
// -------------------------------------------
// On utilise ici la méthode afficherBibliographie()
// Elle permet d'afficher tous les livres de l'auteur un par un, avec le bon formatage
$auteur1->afficherBibliographie();

?>

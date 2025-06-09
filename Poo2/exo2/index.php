<?php

require "Compte.php";
require "Titulaire.php";

// Création d’un titulaire
$titulaire = new Titulaire("Durand", "Sophie", "1990-06-15", "Lyon");

// Création de comptes pour le titulaire
$compte1 = new Compte("Livret A", 1500, "EUR", $titulaire);
$compte2 = new Compte("Compte courant", 500, "EUR", $titulaire);

// Opérations
$compte1->crediter(200);      // +200€ sur Livret A
$compte2->debiter(100);       // -100€ sur Compte courant
$compte1->virement(300, $compte2);  // transfert 300€ de Livret A vers Compte courant

// Affichage des infos du titulaire et des comptes
$titulaire->afficherInfos();

?>
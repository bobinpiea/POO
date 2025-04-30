<?php

require  "Voiture.php"; 


$voiture1 = new Voiture("Peugeot", "208", "essence", "Rouge");

/* 
var_dump($voiture1);


var_dump($voiture1->getMarque());
var_dump($voiture1->getModel());
var_dump($voiture1->getCouleur());
echo $voiture1->getMoteur();
var_dump($voiture1->getStatut());

echo $voiture1;
*/
echo $voiture1->getStatut();
echo $voiture1->demarrer();

echo $voiture1->getStatut();

echo $voiture1->accelerer(50);
var_dump($voiture1);


echo $voiture1->freiner(20);
var_dump($voiture1);
<?php

require 'Personnage.php'; 

//Instancier = créer de nouveau personnage 
// Var_dump: afficher le contenu détaillé d’une variable,
// Pour accéder à un objet  var_dum($merlin->vie);
// si c'est un fonction var_dump($merlin->crier())

$merlin = new Personnage("Merlin");  // = Instanciation !!  // Grace au cosntructeur - 2
// (il permet de fair eune opératione t de sauvegarder auprès de notre instance )
/* $merlin-> nom = "Merlin";  - 1 */
$merlin->regenerer(); // Méthode à un objet n'affecte que l'obj


$harry = new Personnage("Harry");
$harry->mort(); // ici false 
$harry->regenerer()






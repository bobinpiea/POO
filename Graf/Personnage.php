// La pratique veut un fichier par class 

<?php

//Instancier = créer de nouveau personnage 

class Personnage { // Création de la class
 
/*  
Propriété, ce sont des variables càd des caractéristiques qui vont
Caractériser notre objet ex: ici sa vie  ....
Définir toutes les propriétés qui vont etre acessible dans notre projet
*/

// Les variables 
public $vie = 80;  // tjrs public + $ 
public $atk = 20; 
public $nom; 

// Public c'est la visibilité de la variable commeun fonctin classiq avec la visibilité
// qui est spécifié devant

/* Méthode, càd des fonctions */

// Par défaut elle existe sur ts les obj ms elle est vide
public function __construct($nom){ 
    this->nom = $nom ; 

}

public function crier() {
    echo "A l''attaque !"
}
  
/* fait reference à l'instance en cours , dans ce cas remonte la 
vie du personnage */
public function regenerer($vie = null){
    if(is_null($vie)){ 
        $this -> vie = 100;
} else {
    $this->vie = $this-> vie + $vie; // ou } else { $this->vie += $vie;
}
}

public function mort(){
    return $this->vie <= 0 ;
}

}


<?php

require "Voiture.php"; // ici, j'inclus la class de base

class VoitureElectrique extends Voiture {  // Création d'une voiture éléctrique qui hérite de voiture
    //+ ajout de spécificités !

    // Attribut spécifique à la voiture électrique
    private $_batterie; // type de batterie
    private $_autonomie;

    public function __construct($marque, $model, $moteur, $couleur, $batterie, $autonomie) {
        // Ce qui appartement au parent 
        parent::__construct($marque, $model, $moteur, $couleur);
        // ce qui est propre à la voiture electrique 
        $this->_batterie = $batterie; 
        $this->_autonomie = $autonomie;
    }

    // caractéristique privée, donc je la rends public avec la function publique
    public function getBatterie() {
            return $this->_batterie;
        }
     
    // afin de modifier la batterie ex: la recharger 
    public function setBatterie($newValeur) {
            $this->_batterie = $newValeur;
        }

        //On allume une voiture électrique 
    public function demarrer() {
            return "Démarrage/Allumage de la voiture";
        }

        public function getAutonomie() {
            return $this->_autonomie ;
        }
        public function setAutonomie($nouvelleAutonomie) {
            $this->_autonomie = $nouvelleAutonomie;
        }



    public function __toString() {
            return $this->_marque;
        }
}


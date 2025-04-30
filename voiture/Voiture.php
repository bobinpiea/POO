<?php

// 1. Création de la classe Voiture
class Voiture {

    // 2. Ajout des attributs en Private
    protected $_marque;   // marque de la voiture
    private $_model;    // modèle de la marque (sa série ?)
    private $_couleur;  // couleur de la voiture
    private $_moteur;   // type de moteur
    private $_statut; // moteur éteint de bas
    private $_vitesseActuelle;

    // Passer tout en protected des que j'ai un enfant 


   

    // 5. Ajout du constructeur

    // Construction d'une voiture avec une marque et une couleur
    public function __construct($marque, $model, $moteur, $couleur, $statut =0, 
    $vitesseActuelle= 0 ) {
        $this->_marque = $marque;
        $this->_model = $model;
        $this->_moteur = $moteur;
        $this->_couleur = $couleur;
        $this->_statut = $statut;
        $this->_vitesseActuelle = $vitesseActuelle;
    }



    /* 4. Ajout des méthodes publiques
    Les méthodes sont des fonctions dédiées chacune
    à une fonctionnalité qui va « jouer » avec les attributs */


    // Démarrer la voiture
    public function demarrer() { // fonction pour démarrer ou pas le statut
        if ($this->_statut === 0) {
            $this->_statut = 1;
            return "La voiture démarre";
        } else {
            return "Le moteur est déjà en marche.";
        }
    }

    // Éteindre la voiture
    public function eteindre() {
        $this->_statut = 0; // 0 = moteur éteint
    }

    /*
    public function eteindre() {
    if ($this->_statut == 1) {
        $this->_statut = 0;
        echo "La voiture s’éteint";
    } else {
        echo "Le moteur est déjà éteint";
    }
}
    */ 

  
    public function accelerer($acceleration) {
        if ($this->_statut == 1) {
            $this->_vitesseActuelle += $acceleration;
            return "La voiture accélère de " .  $acceleration ;
        } else {
            return "le moteur est éteint";
        }
    }
    public function freiner($freinage) {
        if ($this->_statut == 0) { // moteur éteint
            return "le moteur est éteint.";
        } else if ($this->_vitesseActuelle >= 20) { // moteur allumé ET vitesse >= 20
            $this->_vitesseActuelle = $this->_vitesseActuelle - 20;
            return "La voiture freine";
        } else {
            $this->_vitesseActuelle = 0;
            return "La voiture est arrêté";
        }
    }



    

    // 6. Ajout des getters (accesseurs) pour lire les infos

    public function getMarque() {
        return $this->_marque;
    }

    public function getModel() {
        return $this->_model;
    }

    public function getCouleur() {
        return $this->_couleur;
    }

    public function getMoteur() {
        return $this->_moteur;
    }

    public function getStatut() {
        return $this->_statut;
    }

    public function getVitesseActuelle() { // VitesseActuelle
        return $this->_vitesseActuelle;
    }



    // 7. Ajout des setters (mutateurs) pour modifier les infos

    public function setMarque($marque) {
        $this->_marque = $marque;
    }

    public function setModel($model) {
        $this->_model = $model;
    }

    public function setCouleur($couleur) {
        $this->_couleur = $couleur;
    }

    public function setMoteur($moteur) {
        $this->_moteur = $moteur;
    }

    public function setStatut($statut) {
        $this->_statut = $statut;
    }

    public function setVitesseActuelle($vitesseActuelle) { // VitesseActuelle
        $this->_vitesseActuelle = $vitesseActuelle;
    }

    public function __toString() {
        return $this->_marque;
    }
   
   
}

?>



<?php

class Auteur {

    // Attributs
    private $_nom;
    private $_prenom;
    private $_bibliographie;

    // Constructeur
    public function __construct($nom, $prenom) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_bibliographie = [];
    }

    // Ajouter un livre à la bibliographie
    public function ajouterLivre($livre) {
        $this->_bibliographie[] = $livre;
    }

    // Getters
    public function getNom() {
        return $this->_nom;
    }

    public function getPrenom() {
        return $this->_prenom;
    }

    // Méthode __toString 
    public function __toString() {
        return $this->_prenom . " " . $this->_nom;
    }

    // Afficher tous les livres de l’auteur
    public function afficherBibliographie() {
        echo "<h2>Livres de " . $this . "</h2>";
        foreach ($this->_bibliographie as $livre) {
            echo $livre . "<br>";
        }
    }
}

?>
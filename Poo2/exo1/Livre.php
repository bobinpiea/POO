<?php

class Livre {

    // Attributs
    private $_titre;
    private $_nbPages;
    private $_annee;
    private $_prix;
    private $_auteur; 

    // Constructeur
    public function __construct($titre, $nbPages, $annee, $prix, $auteur) {
        $this->_titre = $titre;
        $this->_nbPages = $nbPages;
        $this->_annee = $annee;
        $this->_prix = $prix;
        $this->_auteur = $auteur;

     
        $this->_auteur->ajouterLivre($this);
    }

    // Getters
    public function getTitre() {
        return $this->_titre;
    }

    public function getNbPages() {
        return $this->_nbPages;
    }

    public function getAnnee() {
        return $this->_annee;
    }

    public function getPrix() {
        return $this->_prix;
    }

    // Méthode __toString 
    public function __toString() {
        return $this->_titre . " (" . $this->_annee . ") : " . $this->_nbPages . " pages / " . $this->_prix . " €";
    }
}

?>
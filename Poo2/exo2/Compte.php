<?php

// Classe Compte
class Compte {
    // attributs
    private $_libelle;
    private $_solde;
    private $_devise;
    private $_titulaire;

    // constructeur
    public function __construct($libelle, $solde, $devise, $titulaire) {
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $titulaire->ajouterCompte($this); 
    }

    // getters
    public function getLibelle() {
        return $this->_libelle;
    }

    public function getSolde() {
        return $this->_solde;
    }

    public function getDevise() {
        return $this->_devise;
    }

    public function getTitulaire() {
        return $this->_titulaire;
    }

    // setters
    public function setSolde($solde) {
        $this->_solde = $solde;
    }

    // créditer un compte
    public function crediter($montant) {
        $this->_solde += $montant;
    }

    // débiter un compte
    public function debiter($montant) {
        $this->_solde -= $montant;
    }

    // faire un virement vers un autre compte
    public function virement($montant, $compteCible) {
        $this->debiter($montant);
        $compteCible->crediter($montant);
    }

    // afficher les infos du compte
    public function __toString() {
        return $this->_libelle . " : " . $this->_solde . " " . $this->_devise . " - Titulaire : " . $this->_titulaire->getPrenom() . " " . $this->_titulaire->getNom();
    }
}
<?php

class Titulaire {
    // attributs
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $ville;
    private $comptes = [];

    // constructeur
    public function __construct($nom, $prenom, $dateNaissance, $ville) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->ville = $ville;
    }

    // getters
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getComptes() {
        return $this->comptes;
    }

    // setters
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    public function setVille($ville) {
        $this->ville = $ville;
    }

    public function ajouterCompte($compte) {
        $this->comptes[] = $compte;
    }

    public function calculerAge() {
        $dateNaissance = new DateTime($this->dateNaissance);
        $maintenant = new DateTime();
        return $dateNaissance->diff($maintenant)->y;
    }

    public function afficherInfos() {
        echo "Titulaire : " . $this->prenom . " " . $this->nom . " (" . $this->calculerAge() . " ans)<br>";
        echo "Ville : " . $this->ville . "<br>";
        echo "Comptes : <br>";
        foreach ($this->comptes as $compte) {
            echo "- " . $compte->afficherInfos() . "<br>";
        }
    }
}
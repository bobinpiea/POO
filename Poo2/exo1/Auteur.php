<?php

// Création de la classe Auteur
// Une classe représente un modèle qu'on utilise pour créer des objets (ici des auteurs)
// Elle regroupe des données (appelées attributs) et des fonctions (appelées méthodes)
class Auteur {

    // Création des attributs privés
    // "private" signifie qu’on ne peut pas y accéder depuis l’extérieur de la classe directement
    // "string" car ce sont des textes, "array" car on va stocker une liste de livres
    private string $_nom;              // Nom de l’auteur (ex : Hugo)
    private string $_prenom;           // Prénom de l’auteur (ex : Victor)
    private array $_livres;            // Tableau contenant tous les livres écrits par l’auteur

    // Constructeur de la classe
    // Il s’exécute automatiquement quand on crée un objet
    // Il initialise les valeurs de l’auteur (nom, prénom) et un tableau vide pour ses livres
    public function __construct(string $nom, string $prenom) {
        $this->_nom = $nom;                 // Affecte le nom à l’attribut
        $this->_prenom = $prenom;          // Affecte le prénom à l’attribut
        $this->_livres = [];               // Initialise un tableau vide pour stocker les livres
    }

    // Getter pour récupérer le nom
    public function getNom(): string {
        return $this->_nom;
    }

    // Getter pour récupérer le prénom
    public function getPrenom(): string {
        return $this->_prenom;
    }

    // Setter pour modifier le nom
    public function setNom(string $nom): void {
        $this->_nom = $nom;
    }

    // Setter pour modifier le prénom
    public function setPrenom(string $prenom): void {
        $this->_prenom = $prenom;
    }

    // Méthode magique __toString
    // Elle permet de définir comment un objet Auteur sera affiché (ex : via echo)
    // Ici, on affiche "Prénom Nom"
    public function __toString(): string {
        return $this->_prenom . " " . $this->_nom;
    }

    // Méthode pour ajouter un livre à la bibliographie de l’auteur
    // Elle reçoit un objet Livre en paramètre et l’ajoute au tableau _livres
    public function ajouterLivre(Livre $livre): void {
        $this->_livres[] = $livre;
    }

    // Méthode pour afficher tous les livres écrits par l’auteur
    // On utilise foreach pour parcourir tous les livres du tableau _livres
    // Grâce à __toString() dans Livre, chaque $livre s’affichera proprement
    public function afficherBibliographie(): void {
        echo "Bibliographie de " . $this . " :<br>"; // $this affiche directement l’auteur grâce à __toString()
        foreach ($this->_livres as $livre) {
            echo $livre . "<br>";                     // Affiche chaque livre un par un
        }
    }
}

?>

<?php

// Création de la classe Livre
// Une classe représente un modèle, un plan qu'on va utiliser pour créer des objets (ici des livres)
class Livre {

    // Création des attributs (ou propriétés) privés
    // On les met en "private" pour qu’ils soient modifiables uniquement dans la classe
    // On précise aussi leur type (string, int, float, objet) pour plus de clarté

    private string $_titre;         // Titre du livre (exemple : "Germinal")
    private int $_nbPages;          // Nombre de pages (exemple : 250)
    private int $_annee;            // Année de parution (exemple : 1885)
    private float $_prix;           // Prix du livre (exemple : 15.00)
    private Auteur $_auteur;        // Auteur du livre (c’est un objet de la classe Auteur)

    // Création du constructeur
    // Il permet d’instancier un objet rapidement avec toutes ses infos
    public function __construct(string $titre, int $nbPages, int $annee, float $prix, Auteur $auteur){
        $this->_titre = $titre;         // On stocke le titre
        $this->_nbPages = $nbPages;     // On stocke le nombre de pages
        $this->_annee = $annee;         // On stocke l’année de sortie
        $this->_prix = $prix;           // On stocke le prix
        $this->_auteur = $auteur;       // On stocke l’auteur (objet)

        // On ajoute ce livre dans la liste des livres de l'auteur
        // Cela permet à l'auteur de connaître tous les livres qu'il a écrits
        $this->_auteur->ajouterLivre($this);
    }

    // Getter pour le titre (renvoie le texte du titre)
    public function getTitre(): string {
        return $this->_titre;
    }

    // Getter pour le nombre de pages (renvoie un entier)
    public function getNbPages(): int {
        return $this->_nbPages;
    }

    // Getter pour l’année de parution
    public function getAnnee(): int {
        return $this->_annee;
    }

    // Getter pour le prix
    public function getPrix(): float {
        return $this->_prix;
    }

    // Getter pour l’auteur (renvoie l’objet Auteur)
    public function getAuteur(): Auteur {
        return $this->_auteur;
    }

    // Setter pour modifier le titre
    public function setTitre(string $titre): void {
        $this->_titre = $titre;
    }

    // Setter pour modifier le nombre de pages
    public function setNbPages(int $nbPages): void {
        $this->_nbPages = $nbPages;
    }

    // Setter pour modifier l’année de parution
    public function setAnnee(int $annee): void {
        $this->_annee = $annee;
    }

    // Setter pour modifier le prix
    public function setPrix(float $prix): void {
        $this->_prix = $prix;
    }

    // Setter pour modifier l’auteur (lui donner un autre objet Auteur)
    public function setAuteur(Auteur $auteur): void {
        $this->_auteur = $auteur;
    }

    // Méthode spéciale toString
    // Elle permet de définir comment un objet Livre sera affiché (ex : via echo)
    // Elle retourne une phrase contenant toutes les infos clés du livre
    // On utilise "number_format" pour formater le prix en format français (2 décimales, virgule, espace)
    public function __toString(): string {
        return 
            $this->_auteur . " a écrit " .             // Affiche "Prénom Nom" grâce au __toString() de l'auteur
            $this->_titre . " (" . 
            $this->_annee . "), " .
            $this->_nbPages . " pages / " .
            number_format($this->_prix, 2, ',', ' ') . " €";
    }
}

?>

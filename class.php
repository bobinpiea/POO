<?php
// Créer un modèle pour fabriquer des téléphones
class Telephone {

    // constantes pour les types d'écran possibles
    const ECRAN_LCD = "LCD";
    const ECRAN_OLED = "OLED";

    // Infos que chaque téléphone doit avoir
    private $_marque;
    private $_serie;
    private $_ecran;
    private $_batterie;
    private $_couleur;
    private $_statut = 0; // 0 = éteint de base

    // Préparer le téléphone dès qu'on le fabrique
    public function __construct($marque) {
        $this->_marque = $marque;     // Donne la marque
    }

    // allumer le téléphone
    public function allumer() {
        $this->_statut = 1; // passe à allumé
    }

    // éteindre le téléphone
    public function eteindre() {
        $this->_statut = 0; // repasse à éteint
    }

    // choisir l'écran du téléphone
    public function choisirEcran($ecran) {
        if (in_array($ecran, [self::ECRAN_LCD, self::ECRAN_OLED])) {
            $this->_ecran = $ecran; // si la valeur est bonne, on change l'écran
        }
    }
}
?>
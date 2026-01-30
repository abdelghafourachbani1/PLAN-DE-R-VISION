<!-- Challenge 1 : Créer une classe Voiture avec 3 attributs (marque, modele,
vitesse) et une méthode accelerer() qui augmente la vitesse -->
<!-- Challenge 2 : Ajouter un constructeur à la classe Voiture pour initialiser la
marque et le modèle lors de la création de l'objet. -->
<!-- 3. Challenge 3 : Instancier deux objets de la classe Voiture et appeler leurs
méthodes pour vérifier leur fonctionnement. -->

<!-- 1. Challenge 1 : Modifier la classe Voiture : mettre l'attribut vitesse en private.
2. Challenge 2 : Créer un getter getVitesse() et un setter setVitesse(int $v)
qui empêche d'assigner une vitesse négative. -->


// <!-- 3. Challenge 3 : Créer une classe CompteBancaire avec un attribut solde privé.
// Implémenter les méthodes deposer() et retirer() en s'assurant que le solde
// ne puisse pas devenir négatif. -->

<?php

class Voiture {
    private $marque;
    private $model;
    private $vitess ;

    public function __construct(string $marque,int $model) {
        $this->marque = $marque;
        $this->model = $model;
    }

    public function acceler (int $amout) {
        $this->vitess += $amout;
    }

    public function getVitess() {
        return $this->vitess;
    }

    public function setVitess(int $v) {
        if ($v > 0) {
            $this->vitess = $v;
        } else {
            return 'it should be positif';
        }
    }

}


$v1 = new Voiture('mercedes',2025);
$v1->acceler(15);
$v2 = new Voiture('bmw',2023);
$v2->acceler(20);


class CompteBancaire {

    private $solde;

    public function deposer ($deposed) {
        $this->solde += $deposed;
    }

    public function retier($retier) {
        $this->solde -= $retier;
    }
}
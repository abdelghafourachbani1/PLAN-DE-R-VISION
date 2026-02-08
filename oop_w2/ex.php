<?php

// 1. Challenge 1 : Créer une classe Vehicule (attributs: marque, méthode:
// demarrer()). Créer une classe Voiture qui hérite de Vehicule et ajoute un
// attribut nombreDePortes.

// 2. Challenge 2 : Dans la classe Voiture, redéfinir la méthode demarrer() pour
// qu elle affiche "La voiture démarre" au lieu de "Le véhicule démarre".

class Vehicule {
    protected $marque;

    public function __construct($marque) {
        $this->marque = $marque;
    }

    public function demarrer() {
        return 'Le véhicule démarre';
    }
}

class Voiture extends Vehicule {
    private $nombreDePortes;

    public function __construct($marque, $nombreDePortes) {
        parent::__construct($marque);
        $this->nombreDePortes = $nombreDePortes;
    }

    public function demarrer() {
        echo "La voiture démarre";
    }
}

// 3. Challenge 3 : Créer une classe Moto qui hérite aussi de Vehicule. Appeler le
// constructeur du parent depuis le constructeur de Moto pour initialiser la
// marque

class MOTO extends Vehicule {

    public function __construct($marque) {
        parent::__construct($marque);
    }
}

// 1. Challenge 1 : Créer une classe abstraite Animal avec une méthode crier(). La
// classe Animal ne peut pas être instanciée.

abstract class Animal{
    public function crier() {

    }
}

// 2. Challenge 2 : Créer une classe Chien et une classe Chat qui héritent dAnimal
// et implémentent chacune leur propre version de la méthode crier().

class Chat extends Animal {
    public function crier()
    {
        return 'chat version';
    }
}

class Chien extends Animal {
        public function crier()
    {
        return 'chien version';
    }
}

// 3. Challenge 3 : Créer une classe parente Employe avec une méthode abstraite
// calculerSalaire(). Créer deux classes filles EmployeFixe et
// EmployeCommission qui l implémentent.

abstract class Employe {
    abstract public function calculerSalaire() ;
}

class EmployeFixe extends Employe {
    public function calculerSalaire() {
        
    }
}
class EmployeCommission extends Employe {

public function calculerSalaire()
{
    
}

}
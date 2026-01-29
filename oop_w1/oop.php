<!-- Challenge 1 : Créer une classe Voiture avec 3 attributs (marque, modele,
vitesse) et une méthode accelerer() qui augmente la vitesse -->
<!-- Challenge 2 : Ajouter un constructeur à la classe Voiture pour initialiser la
marque et le modèle lors de la création de l'objet. -->

class Voiture {
    private $marque;
    private $model;
    private $vitess;

    public function __construct(string $marque,int $model) {
        $this->marque = $marque;
        $this->model = $model;
    }

    $vitess = 0;

    public function () {
        $vitess += 1;
    }
}


<!-- 3. Challenge 3 : Instancier deux objets de la classe Voiture et appeler leurs
méthodes pour vérifier leur fonctionnement. -->

$v1 = new Voiture('mercedes',2025);
$v2 = new Voiture('bmw',2023);

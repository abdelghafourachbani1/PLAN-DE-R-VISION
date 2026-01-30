
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

    public function __construct(int $solde) {
        $this->solde = $solde;
    }

    public function deposer (int $deposed) {
        if ($deposed > 0) {
        return $this->solde += $deposed;
        }
    }

    public function retier($retier) {
        if ($retier < $this->solde) {
        $this->solde -= $retier;
        }
    }
}

$c1 = new CompteBancaire(30);
echo $c1->deposer(-20);
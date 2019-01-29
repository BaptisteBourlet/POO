
<?php

require 'form.php';

$meta = new meta();
echo $meta->up('voiture', 'style.css');

class voiture {

    public $immatriculation;
    public $dmec;
    public $kilometrage;
    public $modèle;
    public $marque;
    public $couleur;
    public $poids;

    public function imma() {
        return "Son immatriculation $this->immatriculation <br>";
    }
    public function dmec() {
        return "Sa date de mise en circulation est $this->dmec <br>";
    }
    public function kilometrage() {
        return "Son kilometrage est de $this->kilometrage <br>";
    }
    public function modèle() {
        return "C'est un modèle $this->modèle <br>";
    }
    public function marque() {
        return "De la marque $this->marque <br>";
    }
    public function couleur() {
        return "De couleur $this->couleur <br>";
    }
    public function poids() {
        return "Et pèse $this->poids <br>";
    }
}

$vroom = new voiture();
$vroom->immatriculation = '1-ABC-123';
$vroom->dmec = '01/02/2015';
$vroom->kilometrage = '123456km';
$vroom->modèle = 'TT';
$vroom->marque = 'Audi';
$vroom->couleur = 'verte';
$vroom->poids = '1200kg';


echo $vroom->imma();
echo $vroom->dmec();
echo $vroom->kilometrage();
echo $vroom->modèle();
echo $vroom->marque();
echo $vroom->couleur();
echo $vroom->poids();

?>
</body>
</html>
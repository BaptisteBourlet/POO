<?php
class voiture {
  public function __construct($immatriculation,$dmec,$kilométrage,$modèle,$marque,$couleur,$poids) {
      $this->immatriculation = $immatriculation;
      $this->dmec = $dmec;
      $this->kilométrage = $kilométrage;
      $this->modèle = $modèle;
      $this->marque = $marque;
      $this->couleur = $couleur;
      $this->poids = $poids;
  }


  public function __toString() {
  return "Son immatriculation : $this->immatriculation ,elle a été mise en circulation le : $this->dmec , elle a parcouru :  $this->kilométrage , son modèle est : $this->modèle , sa marque est : $this->marque , sa couleur est : $this->couleur , son poids est : $this->poids";
  }
}
class audi extends voiture{
  public function __construct($modèle,$marque) {
    parent::__construct("1-ABC-222", '02/04/2005', "123000",$modèle,$marque,"verte","1500kg");
  }
}

$voiture = array(
new audi("TT",'audi')
);
foreach($voiture as $voiture) echo "$voiture<br>\n";

?>
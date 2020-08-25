<?php

class Banquier {

private $nom;

private $prenom;

private $grade;

private $ville_agence;



function __construct($nom,$prenom,$grade, $ville_agence="Paris") {

$this->nom=$nom;

$this->prenom=$prenom;

$this->grade=$grade;

$this->ville_agence=$ville_agence;



}



public function getNom() {

return $this->nom;

}

public function getPrenom() {

return $this->prenom;

}

public function getGrade() {

return $this->grade;

}

public function getVille_agence(){

return $this->ville_agence;

}



/* pour le constructeur La méthode __destruct(): sera appelée

automatiquement soit après la destruction explicite de l’objet,

soit après la fin du script et la disparition de toutes les références à l’objet. La méthode destructeur va permettre de nettoyer les ressources avant que PHP ne libère l’objet de la mémoire.

*/



function __destruct() {

echo "L'action $this->nom n'existe plus!<br />";

}

}



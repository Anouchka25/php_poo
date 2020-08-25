<?php



// classe Employes

class Employes {

// attributs de la classe

private $prenom;

private $nom;

private $age;



// getters et setters

public function getPrenom(){

return $this->prenom;

}

public function getNom(){

return $this->nom;

}

public function getAge(){

return $this->age;

}

public function setPrenom($prenom){



//le prénom est obligatoire, il ne doit pas être null

// trim() retourne la chaîne str, après avoir supprimé les caractères invisibles en début et fin de chaîne.



$prenom = trim($prenom);

if ($prenom === "") {

echo "Le prénom ne doit pas être vide <br>";

} else {

$this->prenom = $prenom;

}

}

public function setNom($nom){

// le nom ne doit pas être vide

$nom = trim($nom);



if ($nom === "") {

echo "Le nom ne doit pas être vide <br>";

}else{

$this->nom = $nom;

}

}

public function setAge($age){

// l'âge ne doit pas être un nombre < 18 ou supérieur à 65

//et ne doit pas $etre vide

if ($age < 18 || $age > 65 || $age==="") {

echo "L'âge doit être un entier positif entre 18 et 65 ans <br>";

} else {

$this->age = $age;

}

}

// constructeur

public function __construct($prenom, $nom, $age) {

// Initialisation des attributs par les setters

$this->setPrenom($prenom);

$this->setNom($nom);

$this->setAge($age);

}

}
?>
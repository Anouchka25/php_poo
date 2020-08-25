<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des objets</title>
</head>
<body>
<?php
require 'Ville.php';
require 'Banquier.php';
require 'Vehicule.php';
require 'Employes.php';
//L'affectation des valeurs se fait lors de la création de l'objet par 
//le biais du constructeur
 
$ville_1 = new Ville("Strasbourg", "Bas Rhin", "Grang Est",279284);
 
$ville_1->getInfos();
echo "---------------<br/>";
// affichage du banquier

//Création d'objets

$agent_admin = new Banquier("Didier","Clair", "agent administratif", "Marseille");

$chef_agence = new Banquier("Strock","Karine", "chef d'agence", "Paris");



//recupération des informations
echo "Le banquier " .$agent_admin->getNom()." " .$agent_admin->getPrenom(). " est ". $agent_admin->getGrade(). " et travaille à ".$agent_admin->getVille_agence(). "<br>";

echo "Le banquier " .$chef_agence->getNom()." " .$chef_agence->getPrenom(). " est ". $chef_agence->getGrade(). " et travaille à ".$chef_agence->getVille_agence(). "<br>";

echo "---------------<br/>";
// Création d'un objet Vehicule
$vehicule_1 = new Vehicule("tourisme", 5);
 
//Récupération des valeurs des propriétés de l'objet vehicule_1
echo "Type: ".$vehicule_1->getType(). "<br>";
echo "Nombre de place: ".$vehicule_1->getPlace(). "<br>";
echo "<br><br>";
 
//Mise à jour des données de l'objet vehicule_1
 
$vehicule_1->setType("tourisme et utilitaire");
$vehicule_1->setPlace(7);
 
//Récupération des nouvelles valeurs des propriétés de l'objet vehicule_1
echo "Type: ".$vehicule_1->getType(). "<br>";
echo "Nombre de place: ".$vehicule_1->getPlace(). "<br>";

echo "---------------<br/>";
// Affichage de l'employé
$employe1 = new Employes("Lea", "Bart", 23);

echo "Prénom: " .$employe1->getPrenom()."<br>";

echo "Nom: " .$employe1->getNom(). "<br>";

echo "Age: " .$employe1->getAge()."<br>";

echo "---------------<br/>";
?>
    
    </body>
</html>
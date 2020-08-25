<?php
 
require_once('Personne.php');
 
class Client extends Personne
{
private $adresse;
public function __construct($nom,$prenom,$adresse) {
 
 // Appel du constructeur de la classe parente
    parent::__construct($nom,$prenom);
    $this->setAdresse($adresse);
 
}
 
//setters
public function setAdresse($adresse){
    $this->adresse = $adresse;
}
 
// getters
public function getAdresse() {
    return $this->adresse;
}
 
 public function getCoordonnee() {
 
    $cord = "Le client " .$this->getPrenom() ." " .$this->getNom(). " habite à ".$this->adresse. "<br>";
    return $cord;
  }
 
 
}

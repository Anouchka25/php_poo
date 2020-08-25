<?php
 
// Inclure obligatoirement la classe parent avant le code de la classe fille. (once : veut dire une seule fois)
require_once('Vehicule.php');
 
class Voiture extends Vehicule
{
  // Attributs
  private $marque;
  private $volumeCarburant;
  // Constructeur
  public function __construct($type,$place,$marque,$volumeCarburant)
  {
    // Appel du constructeur de la classe parente
    parent::__construct($type,$place);
 
    //initialisation de nouvels attributs
    $this->setMarque($marque);
    $this->setVolumeCarbuarant($volumeCarburant);
  }
 
Public function setMarque($marque)
{
  $this->marque = $marque ;
}
 
 
Public function setVolumeCarbuarant($volumeCarburant)
{
  $this->volumeCarburant = $volumeCarburant ;
}
 
 
Public function getMarque()
{
return $this->marque ; 
}
 
Public function getVolumeCarbuarnt()
{
return $this->volumeCarburant ;
}
 
 
  // Démarre la voiture si le réservoir
  // n'est pas vide
  public function demarrer()
  {
    if ($this->getVolumeCarbuarnt() > 0)
    {
      echo 'Le véhicule démarre sans aucun probléme';
      return true;
    }
    echo 'Le réservoir est vide...';
    return false;
  }
 
}
 
$ma_voiture = new Voiture("tourisme", 5, "Mercedes", 12);
echo "Type: ".$ma_voiture->getType(). "<br>";
echo "Nombre de place: ".$ma_voiture->getPlace(). "<br>";
echo "Marque: ".$ma_voiture->getMarque(). "<br>";
echo "Volume de carburant: ".$ma_voiture->getVolumeCarbuarnt(). "<br><br>";
$ma_voiture->demarrer();
?>



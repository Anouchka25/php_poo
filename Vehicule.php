<?php
class Vehicule
{
  // Attributs
  private $type;
  private $place;
  // Méthodes
  public function __construct($type, $place)
  {
    $this->setType($type);
    $this->setPlace($place);
  }
  
 
  Public function setType($type)
{
  $this->type = $type ;
}
 
 
Public function setPlace($place)
{
  $this->place = $place ;
}
 
 
Public function getType()
{
return $this->type ; 
}
 
Public function getPlace()
{
return $this->place ;
}
 
}
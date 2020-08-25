<?php
class Ville {
private $nom; 
private $departement;
private $region;
private $habitants;
 
function __construct($nom, $departement, $region, $habitants) {
    $this->nom=$nom; 
    $this->departement=$departement; 
    $this->region=$region; 
    $this->habitants=$habitants; 
}
 
public function getInfos() {
     
    echo "La ville ".$this->nom. " est dans le département: ".$this->departement. " de la région ".$this->region. " et a ".$this->habitants. " habitants <br>";
}
}


?>

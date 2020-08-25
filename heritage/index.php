<?php
require_once('Personne.php');
require_once('Client.php');
require_once('Electeur.php');
 
$client1 = new Client("Mastafi","Amine","Boulevard Jacques Monod");
 
echo $client1->getCoordonnee();
 
 
$electeur1 = new Electeur("Winder", "Christpher","Bureau 1");
 
$electeur1->aVoter();
$electeur1->isVoter();
 
?>